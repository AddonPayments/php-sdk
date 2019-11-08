<?php

namespace AddonPayments\Api\PaymentMethods\Interfaces;

interface IAuthable
{
    public function authorize($amount = null);
}
