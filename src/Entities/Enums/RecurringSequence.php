<?php

namespace AddonPayments\Api\Entities\Enums;

use AddonPayments\Api\Entities\Enum;

class RecurringSequence extends Enum
{
    const FIRST = 'FIRST';
    const SUBSEQUENT = 'SUBSEQUENT';
    const LAST = 'LAST';
}
