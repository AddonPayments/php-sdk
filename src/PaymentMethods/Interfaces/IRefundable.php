<?php

namespace AddonPayments\Api\PaymentMethods\Interfaces;

interface IRefundable
{
    public function refund($amount = null);
}
