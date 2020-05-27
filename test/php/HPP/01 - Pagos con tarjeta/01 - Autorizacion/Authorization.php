<?php

require_once('bootstrap.php');
require_once(FCPATH.'config.php');

// Cargamos el archivo que enruta las clases del SDK
require_once(FCPATH.'../../../../../vendor/autoload.php');

// Importamos las clases necesarias para la operación de autorización
use AddonPayments\Api\ServicesConfig;
use AddonPayments\Api\ServicesContainer;
use AddonPayments\Api\Entities\Exceptions\ApiException;
use AddonPayments\Api\HostedPaymentConfig;
use AddonPayments\Api\Services\HostedService;
use AddonPayments\Api\Entities\HostedPaymentData;
use AddonPayments\Api\Entities\Enums\HppVersion;

$config = new ServicesConfig();

$config->merchantId = MERCHANTID;
$config->accountId = ACCOUNTID;
$config->sharedSecret = SHAREDSECRET;

$config->serviceUrl = SERVICEURL;
$config->hostedPaymentConfig = new HostedPaymentConfig();
$config->hostedPaymentConfig->version = HppVersion::VERSION_2;
$service = new HostedService($config);


// Enviamos los datos al servidor de Addon Payments
try {
    $hppJson = $service->charge(19.99)
    ->withCurrency("EUR")
    ->serialize();
        
	echo $hppJson;
        
} catch (ApiException $e) {
    // Añada aquí el tratamiento de errores
    echo '<b>Error al procesar su solicitud: </b>'.$e->getMessage();
}

?>