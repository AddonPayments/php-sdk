<?php

namespace AddonPayments\Api\Entities\Enums;

use AddonPayments\Api\Entities\Enum;

class ChallengeRequestIndicator extends Enum
{
    const NO_PREFERENCE = "NO_PREFERENCE";
    const NO_CHALLENGE_REQUESTED = "NO_CHALLENGE_REQUESTED";
    const CHALLENGE_PREFERRED = "CHALLENGE_PREFERRED";
    const CHALLENGE_MANDATED = "CHALLENGE_MANDATED";
}
