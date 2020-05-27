<?php

require_once('bootstrap.php');
require_once(FCPATH.'config.php');

// Cargamos el archivo que enruta las clases del SDK
require_once(FCPATH.'../../../../../vendor/autoload.php');

use AddonPayments\Api\ServicesConfig;
use AddonPayments\Api\Services\HostedService;
use AddonPayments\Api\Entities\Exceptions\ApiException;

// configure client settings
$config = new ServicesConfig();
$config->merchantId = MERCHANTID;
$config->accountId = ACCOUNTID;
$config->sharedSecret = SHAREDSECRET;
$config->serviceUrl = SERVICEURL;

$service = new HostedService($config);

//DEBUG POST
foreach ($_POST as $key => $value) {
    echo $key .'='. $value.'<br>';
}

//Comprobamos la firma de la petición
try {
    // Mostramos la respuesta de la transacción
    $jsonPostString = json_encode($_POST);

    $parsedResponse = $service->parseResponse($jsonPostString,false);

    $orderId = $parsedResponse->orderId; // GTI5Yxb0SumL_TkDMCAxQA
    $responseCode = $parsedResponse->responseCode; // 00
    $responseMessage = $parsedResponse->responseMessage; // [ test system ] Authorised
    $responseValues = $parsedResponse->responseValues; // get values accessible by key

    echo '<p>Order Id:'.$orderId.'</p>';
    echo '<p>Response Code:'.$responseCode.'</p>';

    echo '<a href="https://midominio.es"><button>Volver a la documentación</button></a>';
	
	// Aconsejamos guardar la respuesta de la operacion en su base de datos en caso de querer gestionar de forma interna sus transacciones

} catch (ApiException $e) {
    echo 'Error: '.$e->getMessage();
}

?>