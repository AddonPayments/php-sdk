<?php
require_once ('../../../../../../../autoload.php');

// if you're using the Global Payments JS Library and SDK solution for 3D Secure 2
// you can skip below to the try/catch

use AddonPayments\Api\ServicesConfig;
use AddonPayments\Api\ServicesContainer;
use AddonPayments\Api\Entities\Exceptions\ApiException;
use AddonPayments\Api\PaymentMethods\CreditCardData;
use AddonPayments\Api\Entities\ThreeDSecure;



// configure client & request settings
$config = new ServicesConfig();
$config->merchantId = "addonphptest";
$config->accountId = "3ds2";
$config->sharedSecret = "secret";
$config->serviceUrl = "https://api.sandbox.realexpayments.com/epage-remote.cgi";
ServicesContainer::configure($config);

// Información de la tarjeta
$numeroTarjeta = str_replace(' ', '', $_POST['cardNumber']);
$fechaMM = substr($_POST['fExpiry'],0, 2);
$fechaYY = substr($_POST['fExpiry'],-2);
$cvn = $_POST['cvn'];
$nombre = $_POST['cardholderName'];
$importe  = $_POST['amount'];

// create the card object
$card = new CreditCardData();
$card->number = $numeroTarjeta;
$card->expMonth = $fechaMM;
$card->expYear = $fechaYY;
$card->cvn = $cvn;
$card->cardHolderName = $nombre;

// Datos obtenidos por el front
$authValue = $_POST['authenticationValue'];
$serverTransId = $_POST['directoryServerTransactionId'];
$eciValue = $_POST['eci'];
$msgVersion = $_POST['messageVersion'];

// add obtained 3D Secure 2 authentication data
$threeDSecureData = new ThreeDSecure();
$threeDSecureData->authenticationValue = $authValue;
$threeDSecureData->directoryServerTransactionId = $serverTransId;
$threeDSecureData->eci = $eciValue;
$threeDSecureData->messageVersion = $msgVersion;

// add the 3D Secure 2 data to the card object
$card->threeDSecure = $threeDSecureData;

try {
    // process an auto-settle authorization
    $response = $card->charge($importe)
        ->withCurrency("EUR")
        ->execute();
} catch (ApiException $e) {
    // TODO: Add your error handling here
    echo 'Error = '.$e;
}

if (isset($response)) {
   $result = $response->responseCode; // 00 == Success
   $message = $response->responseMessage; // [ test system ] AUTHORISED

   // get the details to save to the DB for future requests
   $orderId = $response->orderId; // N6qsk4kYRZihmPrTXWYS6g
   $authCode = $response->authorizationCode; // 12345
   $paymentsReference = $response->transactionId; // 14610544313177922
   $schemeReferenceData = $response->schemeId; // MMC0F00YE4000000715

   echo json_encode($response);
}