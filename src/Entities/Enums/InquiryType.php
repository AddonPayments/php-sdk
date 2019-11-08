<?php

namespace AddonPayments\Api\Entities\Enums;

use AddonPayments\Api\Entities\Enum;

class InquiryType extends Enum
{
    const STANDARD = 'STANDARD';
    const FOODSTAMP = 'FOODSTAMP';
    const CASH = 'CASH';
    const POINTS = 'POINTS';
}
