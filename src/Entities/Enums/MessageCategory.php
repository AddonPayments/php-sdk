<?php

namespace AddonPayments\Api\Entities\Enums;

use AddonPayments\Api\Entities\Enum;

class MessageCategory extends Enum
{
    const PAYMENT_AUTHENTICATION = "PAYMENT_AUTHENTICATION";
    const NON_PAYMENT_AUTHENTICATION = "NON_PAYMENT_AUTHENTICATION";
}
