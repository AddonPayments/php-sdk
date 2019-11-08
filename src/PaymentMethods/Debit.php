<?php

namespace AddonPayments\Api\PaymentMethods;

use AddonPayments\Api\Builders\AuthorizationBuilder;
use AddonPayments\Api\Entities\Enums\PaymentMethodType;
use AddonPayments\Api\Entities\Enums\TransactionType;
use AddonPayments\Api\PaymentMethods\Interfaces\IChargable;
use AddonPayments\Api\PaymentMethods\Interfaces\IEncryptable;
use AddonPayments\Api\PaymentMethods\Interfaces\IPaymentMethod;
use AddonPayments\Api\PaymentMethods\Interfaces\IPinProtected;
use AddonPayments\Api\PaymentMethods\Interfaces\IPrePayable;
use AddonPayments\Api\PaymentMethods\Interfaces\IRefundable;
use AddonPayments\Api\PaymentMethods\Interfaces\IReversable;

abstract class Debit implements
    IPaymentMethod,
    IPrePayable,
    IRefundable,
    IReversable,
    IChargable,
    IEncryptable,
    IPinProtected
{
    public $encryptionData;
    public $paymentMethodType = PaymentMethodType::DEBIT;
    public $pinBlock;

    /**
     * Adds value to the payment method
     *
     * @param string|float $amount Amount to add
     *
     * @return AuthorizationBuilder
     */
    public function addValue($amount = null)
    {
        return (new AuthorizationBuilder(TransactionType::ADD_VALUE, $this))
            ->withAmount($amount);
    }

    /**
     * Authorizes the payment method and captures the entire authorized amount
     *
     * @param string|float $amount Amount to authorize
     *
     * @return AuthorizationBuilder
     */
    public function charge($amount = null)
    {
        return (new AuthorizationBuilder(TransactionType::SALE, $this))
            ->withAmount($amount);
    }

    /**
     * Refunds the payment method
     *
     * @param string|float $amount Amount to refund
     *
     * @return AuthorizationBuilder
     */
    public function refund($amount = null)
    {
        return (new AuthorizationBuilder(TransactionType::REFUND, $this))
            ->withAmount($amount);
    }

    /**
     * Reverses the payment method
     *
     * @param string|float $amount Amount to reverse
     *
     * @return AuthorizationBuilder
     */
    public function reverse($amount = null)
    {
        return (new AuthorizationBuilder(TransactionType::REVERSAL, $this))
            ->withAmount($amount);
    }
}
