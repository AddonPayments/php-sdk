<?php

namespace AddonPayments\Api\Gateways;

use AddonPayments\Api\Builders\RecurringBuilder;

interface IRecurringService
{
    public function processRecurring(RecurringBuilder $builder);
}
