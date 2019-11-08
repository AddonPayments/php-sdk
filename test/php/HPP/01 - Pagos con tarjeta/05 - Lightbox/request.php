<?php 

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Cargamos el archivo que enruta las clases del SDK
require_once('../../../../../../../autoload.php');

// Importamos las clases necesarias para la operación de autorización
use AddonPayments\Api\ServicesConfig;
use AddonPayments\Api\HostedPaymentConfig;
use AddonPayments\Api\Services\HostedService;
use AddonPayments\Api\Entities\Enums\HppVersion;
use AddonPayments\Api\Entities\Exceptions\ApiException;

$config = new ServicesConfig();
$config->merchantId = "addonphptest"; // Identificador
$config->accountId = "internet"; // Subcuenta
$config->sharedSecret = "secret"; // Shared Secret (contraseña para realizar transacciones)
$config->serviceUrl = "https://remote.sandbox.addonpayments.com/remote"; // URL de Addon Payments donde se envían las peticiones
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

}

?>