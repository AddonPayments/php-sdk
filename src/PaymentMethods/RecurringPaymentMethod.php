<?php

namespace AddonPayments\Api\PaymentMethods;

use AddonPayments\Api\ServicesContainer;
use AddonPayments\Api\Builders\AuthorizationBuilder;
use AddonPayments\Api\Entities\RecurringEntity;
use AddonPayments\Api\Entities\Enums\PaymentMethodType;
use AddonPayments\Api\Entities\Exceptions\ArgumentException;
use AddonPayments\Api\Entities\Exceptions\UnsupportedTransactionException;
use AddonPayments\Api\Entities\Schedule;
use AddonPayments\Api\PaymentMethods\Interfaces\IAuthable;
use AddonPayments\Api\PaymentMethods\Interfaces\IChargable;
use AddonPayments\Api\PaymentMethods\Interfaces\IPaymentMethod;
use AddonPayments\Api\PaymentMethods\Interfaces\IRefundable;
use AddonPayments\Api\PaymentMethods\Interfaces\IVerifyable;
use AddonPayments\Api\Entities\Enums\TransactionType;
use AddonPayments\Api\Entities\Enums\DccProcessor;
use AddonPayments\Api\Entities\Enums\DccRateType;
use AddonPayments\Api\PaymentMethods\Interfaces\ISecure3d;

/**
 * Use credit or eCheck/ACH as a recurring payment method.
 *
 * @property IPaymentMethod $paymentMethod The underlying payment method.
 */
class RecurringPaymentMethod extends RecurringEntity implements
    IPaymentMethod,
    IChargable,
    IAuthable,
    IVerifyable,
    IRefundable,
    ISecure3d
{

    /**
     * The address associated with the payment method account.
     *
     * @var Address
     */
    public $address;

    /**
     * The payment method's commercial indicator (Level II/III).
     *
     * @var string
     */
    public $commercialIndicator;

    /**
     * The identifier of the payment method's customer.
     *
     * @var string
     */
    public $customerKey;

    /**
     * The payment method's expiration date.
     *
     * @var string
     */
    public $expirationDate;

    /**
     * The name on the payment method account.
     *
     * @var string
     */
    public $nameOnAccount;

    /**
     * @var IPaymentMethod
     */
    private $paymentMethod;

    /**
     * Set to `PaymentMethodType::RECURRING` for internal methods.
     *
     * @var PaymentMethodType
     */
    public $paymentMethodType = PaymentMethodType::RECURRING;

    /**
     * The payment method type, `Credit Card` vs `ACH`.
     *
     * Default value is `Credit Card`
     *
     * @var string
     */
    public $paymentType;

    /**
     * Indicates if the payment method is the default/preferred
     * method for the customer.
     *
     * @var boolean
     */
    public $preferredPayment;

    /**
     * The payment method status
     *
     * @var string
     */
    public $status;

    /**
     * The payment method's tax type
     *
     * @var string
     */
    public $taxType;

    /** @var ThreeDSecure */
    public $threeDSecure;

    /**
     * @param string|IPaymentMethod $customerIdOrPaymentMethod
     * @param string $paymentId
     *
     * @return
     */
    public function __construct($customerIdOrPaymentMethod = null, $paymentId = null)
    {
        if (!is_string($customerIdOrPaymentMethod)) {
            $this->paymentMethod = $customerIdOrPaymentMethod;
            return;
        }

        $this->customerKey = $customerIdOrPaymentMethod;
        $this->key = $paymentId;
        $this->paymentType = "Credit Card"; // set default
    }

    /**
     * Creates an authorization against the payment method.
     *
     * @param float|string|null $amount The amount of the transaction
     *
     * @return AuthorizationBuilder
     */
    public function authorize($amount = null)
    {
        return (new AuthorizationBuilder(TransactionType::AUTH, $this))
                        ->withAmount($amount)
                        ->withOneTimePayment(true);
    }

    /**
     * Creates a charge (sale) against the payment method.
     *
     * @param float|string|null $amount The amount of the transaction
     *
     * @return AuthorizationBuilder
     */
    public function charge($amount = null)
    {
        return (new AuthorizationBuilder(TransactionType::SALE, $this))
                        ->withAmount($amount)
                        ->withOneTimePayment(true);
    }

    /**
     * Refunds the payment method.
     *
     * @param float|string|null $amount The amount of the transaction
     *
     * @return AuthorizationBuilder
     */
    public function refund($amount = null)
    {
        return (new AuthorizationBuilder(TransactionType::REFUND, $this))
                        ->withAmount($amount);
    }

    /**
     * Verifies the payment method with the issuer.
     *
     * @return AuthorizationBuilder
     */
    public function verify()
    {
        return new AuthorizationBuilder(TransactionType::VERIFY, $this);
    }

    /**
     * Creates a recurring schedule using the payment method.
     *
     * @param string $scheduleId The schedule's identifier
     *
     * @return Schedule
     */
    public function addSchedule($scheduleId)
    {
        $schedule = new Schedule($this->customerKey, $this->key);
        $schedule->id = $scheduleId;
        return $schedule;
    }

    public function __get($name)
    {
        switch ($name) {
            case 'paymentMethod':
                return $this->paymentMethod;
            case 'cardHolderName':
                return $this->nameOnAccount;
            case 'checkHolderName':
                return $this->nameOnAccount;
            default:
                break;
        }

        if (property_exists($this, $name)) {
            return $this->{$name};
        }

        if ($this->paymentMethod && property_exists($this->paymentMethod, $name)) {
            return $this->paymentMethod->{$name};
        }

        throw new ArgumentException(sprintf('Property `%s` does not exist on RecurringPaymentMethod', $name));
    }

    public function __isset($name)
    {
        return in_array($name, [
            'paymentMethod',
            'cardHolderName',
            'checkHolderName',
        ])
            || isset($this->{$name})
            || ($this->paymentMethod && isset($this->paymentMethod->{$name}));
    }

    public function __set($name, $value)
    {
        switch ($name) {
            case 'paymentMethod':
                $client = ServicesContainer::instance()->getRecurringClient();
                if (!$client->supportsUpdatePaymentDetails) {
                    throw new UnsupportedTransactionException();
                }

                $this->paymentMethod = $value;
                return;
            default:
                break;
        }

        if (property_exists($this, $name)) {
            return $this->{$name} = $value;
        }

        throw new ArgumentException(sprintf('Property `%s` does not exist on Transaction', $name));
    }
    
    public function getDccRate($dccRateType, $amount, $currency, $ccp, $orderId)
    {
        return (new AuthorizationBuilder(TransactionType::DCC_RATE_LOOKUP, $this))
                        ->withAmount($amount)
                        ->withCurrency($currency)
                        ->withDccRateType($dccRateType)
                        ->withDccProcessor($ccp)
                        ->withDccType("1")
                        ->withOrderId($orderId)
                        ->execute();
    }
}
