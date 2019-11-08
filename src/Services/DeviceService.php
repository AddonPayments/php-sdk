<?php

namespace AddonPayments\Api\Services;

use AddonPayments\Api\Terminals\ConnectionContainer;
use AddonPayments\Api\Terminals\ConnectionConfig;

class DeviceService
{

    /**
     * Initiates a new object
     *
     * @param ServicesConfig $config Service config
     *
     * @return void
     */
    public static function create(ConnectionConfig $config)
    {
        ConnectionContainer::configure($config);
        return ConnectionContainer::instance()->device;
    }
}
