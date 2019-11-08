<?php

namespace AddonPayments\Api\PaymentMethods;

use AddonPayments\Api\PaymentMethods\Interfaces\ITrackData;

class CreditTrackData extends Credit implements ITrackData
{
    public $entryMethod;
    public $value;
}
