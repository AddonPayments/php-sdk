<?php

namespace AddonPayments\Api\Entities\Enums;

use AddonPayments\Api\Entities\Enum;

class CheckType extends Enum
{
    const PERSONAL = 0;
    const BUSINESS = 1;
    const PAYROLL = 2;
}
