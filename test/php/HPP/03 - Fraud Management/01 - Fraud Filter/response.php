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

	/*
	* TODO: Coge la respuesta JSOn del lado cliente.
	* Respuesta JSON (el valor estará codificado en Base64):
	* $responseJson ='{"MERCHANT_ID":"MerchantId","ACCOUNT":"internet","ORDER_ID":"GTI5Yxb0SumL_TkDMCAxQA","AMOUNT":"1999",' .
	* '"TIMESTAMP":"20170725154824","SHA1HASH":"843680654f377bfa845387fdbace35acc9d95778","RESULT":"00","AUTHCODE":"12345",' .
	* '"CARD_PAYMENT_BUTTON":"Place Order","AVSADDRESSRESULT":"M","AVSPOSTCODERESULT":"M","BATCHID":"445196",' .
	* '"MESSAGE":"[ test system ] Authorised","PASREF":"15011597872195765","CVNRESULT":"M","HPP_FRAUDFILTER_RESULT":"PASS",' .
	* '"HPP_FRAUDFILTER_RULE_56257838-4590-4227-b946-11e061fb15fe":"HOLD","HPP_FRAUDFILTER_RULE_cf609cf9-9e5a-4700-ac69-8aa09c119305":"PASS"}";
	*/

// Mostramos todos los valores de respuesta
try {
	
    foreach ($_POST as $key => $value) {
    	echo $key .'='. $value.'<br>';
    }

    echo '<br><br><a href="https://midominio.es/index.php"><button>Volver a la documentación</button></a>';
	
} catch (ApiException $e) {

}