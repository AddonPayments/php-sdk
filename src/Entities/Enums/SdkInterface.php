<?php

namespace AddonPayments\Api\Entities\Enums;

use AddonPayments\Api\Entities\Enum;

class SdkInterface extends Enum
{
    const NATIVE = 'NATIVE';
    const BROWSER = 'BROWSER';
    const BOTH = 'BOTH';
}
