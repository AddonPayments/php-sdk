<?php

namespace AddonPayments\Api\Entities\Enums;

use AddonPayments\Api\Entities\Enum;

/**
 * Identifies eCommerce vs mail order / telephone order (MOTO) transactions.
 */
class EcommerceChannel extends Enum
{
    /**
     * Identifies eCommerce transactions.
     */
    const ECOM = 'ECOM';

    /**
     * Identifies mail order / telephone order (MOTO) transactions.
     */
    const MOTO = 'MOTO';
}
