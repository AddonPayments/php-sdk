<?php

namespace AddonPayments\Api\PaymentMethods\Interfaces;

interface IChargable
{
    public function charge($amount = null);
}
