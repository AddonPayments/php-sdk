<?php

namespace AddonPayments\Api\Entities\Enums;

use AddonPayments\Api\Entities\Enum;

class StoredCredentialInitiator extends Enum
{
    const CARDHOLDER = 'cardholder';
    const MERCHANT = 'merchant';
    const SCHEDULED = 'scheduled';
}
