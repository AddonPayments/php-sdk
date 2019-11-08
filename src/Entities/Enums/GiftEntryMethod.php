<?php

namespace AddonPayments\Api\Entities\Enums;

use AddonPayments\Api\Entities\Enum;

class GiftEntryMethod extends Enum
{
    const SWIPE = 0;
    const PROXIMITY = 1;
    const MANUAL = 2;
}
