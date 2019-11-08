<?php

namespace AddonPayments\Api\Entities\Enums;

use AddonPayments\Api\Entities\Enum;

class CvnPresenceIndicator extends Enum
{
    const PRESENT = 1;
    const ILLEGIBLE = 2;
    const NOT_ON_CARD = 3;
    const NOT_REQUESTED = 4;
}
