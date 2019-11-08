<?php

namespace AddonPayments\Api\PaymentMethods;

use AddonPayments\Api\PaymentMethods\Interfaces\IEncryptable;
use AddonPayments\Api\PaymentMethods\Interfaces\ITrackData;

class EBTTrackData extends EBT implements ITrackData, IEncryptable
{
    public $encryptionData;
    public $entryMethod;
    public $value;
}
