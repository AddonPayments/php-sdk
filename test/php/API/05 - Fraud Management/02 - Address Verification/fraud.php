<?php

  ini_set('display_errors', 1);
  ini_set('display_startup_errors', 1);
  error_reporting(E_ALL);

require_once('../../../../../../../autoload.php');

use AddonPayments\Api\ServicesConfig;
use AddonPayments\Api\ServicesContainer;
use AddonPayments\Api\PaymentMethods\CreditCardData;
use AddonPayments\Api\Entities\Enums\CvnPresenceIndicator;
use AddonPayments\Api\Entities\Address;
use AddonPayments\Api\Entities\Enums\AddressType;
use AddonPayments\Api\Entities\Exceptions\ApiException;

$config = new ServicesConfig();
  $config->merchantId = "addonphptest"; // Identificador
  $config->accountId = "api"; // Subcuenta
  $config->sharedSecret = "secret"; // Shared Secret (contraseña para realizar transacciones)
  $config->serviceUrl = "https://remote.sandbox.addonpayments.com/remote"; // URL de Addon Payments donde se envían las peticiones
ServicesContainer::configure($config);

$numeroTarjeta = str_replace(' ', '', $_POST['cardNumber']);
$fechaMM = substr($_POST['fExpiry'],0, 2);
$fechaYY = substr($_POST['fExpiry'],-2);
$cvn = $_POST['cvn'];
$nombre = $_POST['cardholder-name'];

$billcp = $_POST['billCp'];
$billco = $_POST['billCo'];

// create the card object
$card = new CreditCardData();
$card->number = $numeroTarjeta;
$card->expMonth = $fechaMM;
$card->expYear = $fechaYY;
$card->cvn = $cvn;
$card->cvnPresenceIndicator = CvnPresenceIndicator::PRESENT;
$card->cardHolderName = $nombre;

// supply the customer's billing country and post code for avs checks
$billingAddress = new Address();
$billingAddress->postalCode = $billcp;
$billingAddress->country = $billco;

try {
    // create the delayed settle authorization
    $response = $card->charge($_POST['importe'])
            ->withCurrency("EUR")
            ->withAddress($billingAddress, AddressType::BILLING)
            ->execute();

  echo  "Resultado == ".$result = $response->responseCode."<br>"; // 00 == Success
  echo  "Mensaje == ".$message = $response->responseMessage."<br>"; // [ test system ] AUTHORISED
    
    // get the result of the AVS check
  echo  "Resultado del AVS == ".$avsPostCodeCheck = $response->avsResponseCode. " Para obtener más información sobre los posibles resultados, puede visitar <a href='https://desarrolladores.addonpayments.com/#!/api/fraud-management/fraud-filter' target='__blank'>nuestra documentación oficial.</a>"; // M = Coincide

} catch (ApiException $e) {
    // Añada aquí su tratamiento de errores
    echo '<b>Error al procesar su solicitud: </b>'.$e->getMessage();
}