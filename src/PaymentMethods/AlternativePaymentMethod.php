<?php

namespace AddonPayments\Api\PaymentMethods;

use AddonPayments\Api\Builders\AuthorizationBuilder;
use AddonPayments\Api\Entities\Enums\PaymentMethodType;
use AddonPayments\Api\Entities\Enums\TransactionType;
use AddonPayments\Api\Entities\Enums\TransactionModifier;
use AddonPayments\Api\PaymentMethods\Interfaces\IChargable;
use AddonPayments\Api\PaymentMethods\Interfaces\IEncryptable;
use AddonPayments\Api\PaymentMethods\Interfaces\IPaymentMethod;
use AddonPayments\Api\PaymentMethods\Interfaces\IPinProtected;
use AddonPayments\Api\PaymentMethods\Interfaces\IPrePayable;
use AddonPayments\Api\PaymentMethods\Interfaces\IRefundable;
use AddonPayments\Api\PaymentMethods\Interfaces\IReversable;

class AlternativePaymentMethod implements
    IPaymentMethod,
    IPrePayable,
    IRefundable,
    IReversable,
    IChargable,
    IEncryptable,
    IPinProtected
{
    public $paymentMethodType = PaymentMethodType::APM;
    
    /**
     * Specifies the payment method
     *
     * @var string
     */
    public $alternativePaymentMethodType;
    
    /**
     * The endpoint to which the customer should be redirected after a payment has been attempted or
     * successfully completed on the payment scheme's site.
     *
     * @var string
     */
    public $returnUrl;

    /**
     * The endpoint which will receive payment-status messages.
     * This will include the result of the transaction or any updates to the transaction status.
     * For certain asynchronous payment methods these notifications may come hours or
     * days after the initial authorization.
     *
     * @var string
     */
    public $statusUpdateUrl;

    /**
     * Enables dynamic values to be sent for each transaction.
     *
     * @var string
     */
    public $descriptor;

    /**
     * 2 character country code, must adhere to ISO 3166-2.
     *
     * @var string
     */
    public $country;

    /**
     * The name of the account holder.
     *
     * @var string
     */
    public $accountHolderName;
    
    public function __construct($alternativePaymentMethodType)
    {
        $this->alternativePaymentMethodType = $alternativePaymentMethodType;
    }

    /**
     * This is a mandatory request used to initiate an APM transaction,
     * the payment-set is used to advise the payment scheme of the details of a new transaction and
     * to retrieve the necessary information required to facilitate authentication
     *
     * @param string|float $amount Amount to authorize
     *
     * @return AuthorizationBuilder
     */
    public function charge($amount = null)
    {
        return (new AuthorizationBuilder(TransactionType::SALE, $this))
            ->withModifier(TransactionModifier::ALTERNATIVE_PAYMENT_METHOD)
            ->withAmount($amount);
    }

    public function addValue($amount = null)
    {
        throw new NotImplementedException();
    }

    public function refund($amount = null)
    {
        throw new NotImplementedException();
    }

    public function reverse($amount = null)
    {
        throw new NotImplementedException();
    }
}
