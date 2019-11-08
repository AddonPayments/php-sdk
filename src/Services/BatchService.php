<?php

namespace AddonPayments\Api\Services;

use AddonPayments\Api\Builders\ManagementBuilder;
use AddonPayments\Api\Entities\BatchSummary;
use AddonPayments\Api\Entities\Enums\TransactionType;

class BatchService
{
    public static function closeBatch()
    {
        $response = (new ManagementBuilder(TransactionType::BATCH_CLOSE))->execute();
        return new BatchSummary();
    }
}
