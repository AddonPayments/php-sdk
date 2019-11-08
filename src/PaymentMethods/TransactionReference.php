<?php

namespace AddonPayments\Api\PaymentMethods;

use AddonPayments\Api\PaymentMethods\Interfaces\IPaymentMethod;

class TransactionReference implements IPaymentMethod
{
    /**
     * Previous transaction's payment method type
     *
     * @var PaymentMethodType
     */
    public $paymentMethodType;

    /**
     * Previous transaction's authorization code
     *
     * Useful for when referencing offline authorizations.
     *
     * @var string
     */
    public $authCode;

    /**
     * Previous authorization's transaction ID
     *
     * @var string
     */
    public $transactionId;

    public $orderId;
}
