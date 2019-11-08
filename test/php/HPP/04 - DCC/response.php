<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Cargamos el archivo que enruta las clases del SDK
require_once('../../../../../../autoload.php');

// Importamos las clases necesarias para la operación de autorización
use AddonPayments\Api\ServicesConfig;
use AddonPayments\Api\Services\HostedService;
use AddonPayments\Api\Entities\Exceptions\ApiException;

// Configuramos los datos de nuestro comercio. Los datos son proporcionados por el equipo de Addon Payments, en caso de duda debe llamar al 914 353 028 e indicar su número de comercio o Merchant ID
$config = new ServicesConfig();
$config->merchantId = "addonphptest";
$config->accountId = "internet";
$config->sharedSecret = "secret";
$config->serviceUrl = "https://hpp.sandbox.addonpayments.com/pay";
$service = new HostedService($config);


// Lanzamos la petición al servidor de Addon Payments
try {
	//Cargamos los datos de la operación
	foreach ($_POST as $key => $value) {
    	echo $key .'='. $value.'<br>';
    }

    echo '<br><br><a href="https://midominio.es/index.php"><button>Volver a la documentación</button></a>';

    // Aconsejamos guardar la respuesta de la operacion en su base de datos en caso de querer gestionar de forma interna sus transacciones
	
} catch (ApiException $e) {

}

?>