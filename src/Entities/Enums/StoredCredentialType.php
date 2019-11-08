<?php

namespace AddonPayments\Api\Entities\Enums;

use AddonPayments\Api\Entities\Enum;

class StoredCredentialType extends Enum
{
    const ONEOFF = 'oneoff';
    const INSTALLMENT = 'installment';
    const RECURRING = 'recurring';
}
