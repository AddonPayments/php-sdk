<?php

namespace AddonPayments\Api\Entities;

use AddonPayments\Api\Entities\Enums\StoredCredentialInitiator;
use AddonPayments\Api\Entities\Enums\StoredCredentialSequence;
use AddonPayments\Api\Entities\Enums\StoredCredentialType;

class StoredCredential
{
    /** @var StoredCredentialType */
    public $type;
    /** @var StoredCredentialInitiator */
    public $initiator;
    /** @var StoredCredentialSequence */
    public $sequence;
    /** @var string */
    public $schemeId;
}
