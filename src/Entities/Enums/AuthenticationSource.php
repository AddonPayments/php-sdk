<?php

namespace AddonPayments\Api\Entities\Enums;

use AddonPayments\Api\Entities\Enum;

class AuthenticationSource extends Enum
{
    const BROWSER = "BROWSER";
    const STORED_RECURRING = "STORED_RECURRING";
    const MOBILE_SDK = "MOBILE_SDK";
}
