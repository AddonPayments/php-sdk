<?php

namespace AddonPayments\Api\Services;

use AddonPayments\Api\Builders\TransactionReportBuilder;
use AddonPayments\Api\Entities\Reporting\TransactionSummary;
use AddonPayments\Api\Entities\Reporting\SearchCriteria;
use AddonPayments\Api\Entities\Enums\ReportType;

class ReportingService
{
    public static function findTransactions($transactionId = null)
    {
        $response = (new TransactionReportBuilder(ReportType::FIND_TRANSACTIONS))
            ->withTransactionId($transactionId);
        return $response;
    }

    public static function activity()
    {
        $response = (new TransactionReportBuilder(ReportType::ACTIVITY));
        return $response;
    }
    
    public static function transactionDetail($transactionId)
    {
        $response = (new TransactionReportBuilder(ReportType::TRANSACTION_DETAIL))
            ->withTransactionId($transactionId);
        return $response;
    }
}
