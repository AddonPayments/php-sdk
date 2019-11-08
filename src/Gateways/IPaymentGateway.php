<?php

namespace AddonPayments\Api\Gateways;

use AddonPayments\Api\Builders\AuthorizationBuilder;
use AddonPayments\Api\Builders\ManagementBuilder;
use AddonPayments\Api\Builders\ReportBuilder;
use AddonPayments\Api\Entities\Transaction;

interface IPaymentGateway
{
    /**
     * Serializes and executes authorization transactions
     *
     * @param AuthorizationBuilder $builder The transaction's builder
     *
     * @return Transaction
     */
    public function processAuthorization(AuthorizationBuilder $builder);

    /**
     * Serializes and executes follow up transactions
     *
     * @param ManagementBuilder $builder The transaction's builder
     *
     * @return Transaction
     */
    public function manageTransaction(ManagementBuilder $builder);

    public function processReport(ReportBuilder $builder);
    public function serializeRequest(AuthorizationBuilder $builder);
}
