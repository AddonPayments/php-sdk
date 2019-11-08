<?php

namespace AddonPayments\Api\PaymentMethods;

use AddonPayments\Api\PaymentMethods\Interfaces\ITrackData;

class DebitTrackData extends Debit implements ITrackData
{
    public $entryMethod;
    public $value;
}
