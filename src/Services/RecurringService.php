<?php

namespace AddonPayments\Api\Services;

use AddonPayments\Api\Builders\RecurringBuilder;
use AddonPayments\Api\Entities\RecurringEntity;
use AddonPayments\Api\Entities\Enums\TransactionType;

class RecurringService
{
    public static function create(RecurringEntity $entity)
    {
        $response = (new RecurringBuilder(TransactionType::CREATE, $entity))
            ->execute();
        return $response;
    }

    public static function delete(RecurringEntity $entity, $force = false)
    {
        $response = (new RecurringBuilder(TransactionType::DELETE, $entity))
            ->execute();
        return $response;
    }

    public static function edit(RecurringEntity $entity)
    {
        $response = (new RecurringBuilder(TransactionType::EDIT, $entity))
            ->execute();
        return $response;
    }

    public static function get($entity)
    {
        $response = (new RecurringBuilder(TransactionType::FETCH, $entity))
            ->execute();
        return $response;
    }

    public static function search($entityType)
    {
        return new RecurringBuilder(TransactionType::SEARCH, new $entityType());
    }
}
