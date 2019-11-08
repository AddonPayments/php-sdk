<?php

namespace AddonPayments\Api\PaymentMethods\Interfaces;

interface IReversable
{
    public function reverse($amount = null);
}
