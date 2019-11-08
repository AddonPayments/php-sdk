<?php

namespace AddonPayments\Api\PaymentMethods;

use AddonPayments\Api\Entities\Enums\CvnPresenceIndicator;
use AddonPayments\Api\PaymentMethods\Interfaces\ICardData;

class EBTCardData extends EBT implements ICardData
{
    /**
     * Approval code
     *
     * @var string
     */
    public $approvalCode;

    /**
     * Card number
     *
     * @var string
     */
    public $number;

    /**
     * Card expiration month
     *
     * @var string
     */
    public $expMonth;

    /**
     * Card expiration year
     *
     * @var string|float
     */
    public $expYear;

    /**
     * Card verification number
     *
     * @var string|float
     */
    public $cvn;

    /**
     * CVN presence indicator
     *
     * @var CvnPresenceIndicator
     */
    public $cvnPresenceIndicator;

    /**
     * Card holder name
     *
     * @var string
     */
    public $cardHolderName;

    /**
     * Card present
     *
     * @var bool
     */
    public $cardPresent;

    /**
     * Card reader present
     *
     * @var bool
     */
    public $readerPresent;

    /**
     * Card serial number
     *
     * @var string
     */
    public $serialNumber;

    /**
     * Instantiates a new credit card
     *
     * @return
     */
    public function __construct()
    {
        $this->cardPresent = false;
        $this->readerPresent = false;
        $this->cvnPresenceIndicator = CvnPresenceIndicator::NOT_REQUESTED;
    }
}
