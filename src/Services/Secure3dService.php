<?php

namespace AddonPayments\Api\Services;

use AddonPayments\Api\Builders\Secure3dBuilder;
use AddonPayments\Api\Entities\ThreeDSecure;
use AddonPayments\Api\Entities\Enums\TransactionType;
use AddonPayments\Api\PaymentMethods\CreditCardData;
use AddonPayments\Api\PaymentMethods\Interfaces\IPaymentMethod;
use AddonPayments\Api\PaymentMethods\Interfaces\ISecure3d;

class Secure3dService
{
    /** @return Secure3dBuilder */
    public static function checkEnrollment(IPaymentMethod $paymentMethod)
    {
        return (new Secure3dBuilder(TransactionType::VERIFY_ENROLLED))
            ->withPaymentMethod($paymentMethod);
    }

    /** @return Secure3dBuilder */
    public static function initiateAuthentication(IPaymentMethod $paymentMethod, ThreeDSecure $secureEcom)
    {
        $paymentMethod->threeDSecure = $secureEcom;
        
        return (new Secure3dBuilder(TransactionType::INITIATE_AUTHENTICATION))
            ->withPaymentMethod($paymentMethod);
    }

    /** @return Secure3dBuilder */
    public static function getAuthenticationData()
    {
        return new Secure3dBuilder(TransactionType::VERIFY_SIGNATURE);
    }
}
