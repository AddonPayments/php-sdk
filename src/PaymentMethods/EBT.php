<?php

namespace AddonPayments\Api\PaymentMethods;

use AddonPayments\Api\Builders\AuthorizationBuilder;
use AddonPayments\Api\Entities\Enums\InquiryType;
use AddonPayments\Api\Entities\Enums\PaymentMethodType;
use AddonPayments\Api\Entities\Enums\TransactionType;
use AddonPayments\Api\Entities\Exceptions\NotImplementedException;
use AddonPayments\Api\PaymentMethods\Interfaces\IBalanceable;
use AddonPayments\Api\PaymentMethods\Interfaces\IChargable;
use AddonPayments\Api\PaymentMethods\Interfaces\IEncryptable;
use AddonPayments\Api\PaymentMethods\Interfaces\IPaymentMethod;
use AddonPayments\Api\PaymentMethods\Interfaces\IPinProtected;
use AddonPayments\Api\PaymentMethods\Interfaces\IPrePayable;
use AddonPayments\Api\PaymentMethods\Interfaces\IRefundable;
use AddonPayments\Api\PaymentMethods\Interfaces\IReversable;

abstract class EBT implements
    IPaymentMethod,
    IPrePayable,
    IRefundable,
    IReversable,
    IChargable,
    IEncryptable,
    IPinProtected,
    IBalanceable
{
    public $paymentMethodType = PaymentMethodType::EBT;
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
        throw new NotImplementedException();
    }

    /**
     * Inquires the balance of the payment method
     *
     * @param InquiryType $inquiry Type of inquiry
     *
     * @return AuthorizationBuilder
     */
    public function balanceInquiry($inquiry = InquiryType::FOODSTAMP)
    {
        return (new AuthorizationBuilder(TransactionType::BALANCE, $this))
            ->withBalanceInquiryType($inquiry)
            ->withAmount(0);
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
        throw new NotImplementedException();
    }
}
