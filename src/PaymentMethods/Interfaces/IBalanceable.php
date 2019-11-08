<?php

namespace AddonPayments\Api\PaymentMethods\Interfaces;

interface IBalanceable
{
    public function balanceInquiry($inquiry = null);
}
