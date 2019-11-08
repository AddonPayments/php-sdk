<?php

namespace AddonPayments\Api\PaymentMethods\Interfaces;

interface ITokenizable
{
    public function tokenize();
    public function updateTokenExpiry();
    public function deleteToken();
}
