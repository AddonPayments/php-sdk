<?php

namespace AddonPayments\Api\Entities\Enums;

use AddonPayments\Api\Entities\Enum;

class TaxType extends Enum
{
    const NOT_USED = 'NOTUSED';
    const SALES_TAX = 'SALESTAX';
    const TAX_EXEMPT = 'TAXEXEMPT';
}
