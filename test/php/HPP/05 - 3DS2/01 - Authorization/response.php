<?php

require_once('../../vendor/autoload.php');

use AddonPayments\Api\ServicesConfig;
use AddonPayments\Api\Services\HostedService;
use AddonPayments\Api\Entities\Exceptions\ApiException;

// configure client settings
$config = new ServicesConfig();
$config->merchantId = "addonphptest";
$config->accountId = "3ds2";
$config->sharedSecret = "secret";
$config->serviceUrl = "https://hpp.sandbox.addonpayments.com/pay";

$service = new HostedService($config);


// Mostramos la respuesta
try {
	
    foreach ($_POST as $key => $value) {
    	echo $key .'='. $value.'<br>';
    }

    // Aconsejamos guardar la respuesta de la operacion en su base de datos en caso de querer gestionar de forma interna sus transacciones

    echo '<br>
        <br>
        <a href="https://dominio.com3ds2/Hpp/Autorizacion/index.html">
            <button style="width: 100%;
                background-color: #1aa9e6;
                color: white;
                border-radius: 10px;
                border-color: #3bc0f9;
                margin-bottom: 15px;
                padding: 6px;">
                Volver a la documentación
            </button>
        </a>';
	
} catch (ApiException $e) {

}