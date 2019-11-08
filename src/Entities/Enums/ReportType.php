<?php

namespace AddonPayments\Api\Entities\Enums;

use AddonPayments\Api\Entities\Enum;

class ReportType extends Enum
{
    const FIND_TRANSACTIONS = 1;
    const ACTIVITY = 1 << 1;
    const TRANSACTION_DETAIL = 1 << 7;
}
