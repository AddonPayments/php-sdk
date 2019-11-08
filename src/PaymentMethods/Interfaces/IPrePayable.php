<?php

namespace AddonPayments\Api\PaymentMethods\Interfaces;

interface IPrePayable
{
    public function addValue($amount = null);
}
