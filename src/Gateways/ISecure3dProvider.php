<?php

namespace AddonPayments\Api\Gateways;

use AddonPayments\Api\Builders\Secure3dBuilder;
use AddonPayments\Api\Entities\Transaction;
use AddonPayments\Api\Entities\Enums\Secure3dVersion;
use AddonPayments\Api\Entities\Exceptions\ApiException;

interface ISecure3dProvider
{
    /** @return Secure3dVersion */
    public function getVersion();

    /**
     * @throws ApiException
     * @return Transaction
     */
    public function processSecure3d(Secure3dBuilder $builder);
}
