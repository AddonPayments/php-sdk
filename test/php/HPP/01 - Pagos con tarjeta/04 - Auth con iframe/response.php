<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Cargamos el archivo que enruta las clases del SDK
require_once('../../../../../../../autoload.php');

use AddonPayments\Api\ServicesConfig;
use AddonPayments\Api\Services\HostedService;
use AddonPayments\Api\Entities\Exceptions\ApiException;

// Configuración del cliente
$config = new ServicesConfig();
$config->merchantId = "addonphptest";
$config->accountId = "internet";
$config->sharedSecret = "secret";
$config->serviceUrl = "https://hpp.sandbox.addonpayments.com/pay";

$service = new HostedService($config);


// Mostramos todos los valores de respuesta
try {
	
    foreach ($_POST as $key => $value) {
    	echo $key .'='. $value.'<br>';
    }

    // Aconsejamos guardar la respuesta de la operacion en su base de datos en caso de querer gestionar de forma interna sus transacciones
	
} catch (ApiException $e) {

}