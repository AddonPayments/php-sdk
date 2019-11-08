<?php 

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Cargamos el archivo que enruta las clases del SDK
require_once('../../../../../../autoload.php');


// Importamos las clases necesarias para la operación de autorización
use AddonPayments\Api\ServicesConfig;
use AddonPayments\Api\HostedPaymentConfig;
use AddonPayments\Api\Services\HostedService;
use AddonPayments\Api\Entities\Enums\HppVersion;
use AddonPayments\Api\Entities\Exceptions\ApiException;

// Configuramos los datos de nuestro comercio. Los datos son proporcionados por el equipo de Addon Payments, en caso de duda debe llamar al 914 353 028 e indicar su número de comercio o Merchant ID
$config = new ServicesConfig();
$config->merchantId = "addonphptest";
$config->accountId = "dcc";
$config->sharedSecret = "secret";
$config->serviceUrl = "https://hpp.sandbox.addonpayments.com/pay";
$config->hostedPaymentConfig = new HostedPaymentConfig();
$config->hostedPaymentConfig->version = HppVersion::VERSION_2;
$config->hostedPaymentConfig->dynamicCurrencyConversionEnabled = true;
$service = new HostedService($config);

// Lanzamos la petición al servidor de Addon Payments
try {
    $hppJson = $service->Authorize(1)
        ->withCurrency("EUR")
        ->serialize();
    
    // Mostramos el JSON
	echo $hppJson;
        
} catch (ApiException $e) {
        // TODO: Add your error handling here
}

?>