<?php
require_once('../../../../../../../autoload.php');

use AddonPayments\Api\ServicesConfig;
use AddonPayments\Api\ServicesContainer;
use AddonPayments\Api\Services\Secure3dService;
use AddonPayments\Api\PaymentMethods\CreditCardData;
use AddonPayments\Api\Entities\Enums\Secure3dVersion;
use AddonPayments\Api\Entities\Exceptions\ApiException;
use AddonPayments\Api\Entities\Enums\CvnPresenceIndicator;

// configure client & request settings
$config = new ServicesConfig();
$config->merchantId = "addonphptest";
$config->accountId = "3ds2";
$config->sharedSecret = "secret";
$config->methodNotificationUrl = "https://dominio.com3ds2/Api/n3ds.php";
$config->challengeNotificationUrl = "https://dominio.com3ds2/Api/nACS.php";
$config->merchantContactUrl = "https://dominio.com/about";
$config->secure3dVersion = Secure3dVersion::TWO;
ServicesContainer::configure($config);

// Información de la tarjeta
$numeroTarjeta = str_replace(' ', '', $_POST['cardNumber']);

// Creamos el objeto tarjeta
$card = new CreditCardData();
$card->number = $numeroTarjeta;

try {
   $threeDSecureData = Secure3dService::checkEnrollment($card)->execute('TWO', Secure3dVersion::TWO);
} catch (ApiException $e) {
   // TODO: add your error handling here
   echo 'Error = '.$e;
}

// echo 'enrolled = '.$enrolled = $threeDSecureData->enrolled .'<br>'; // TRUE
// // if enrolled, the available response data
// echo 'serverTransactionId = '.$serverTransactionId = $threeDSecureData->serverTransactionId .'<br>'; // af65c369-59b9-4f8d-b2f6-7d7d5f5c69d5
// echo 'dsStartProtocolVersion = '.$dsStartProtocolVersion = $threeDSecureData->directoryServerStartVersion .'<br>'; // 2.1.0
// echo 'dsEndProtocolVersion = '.$dsEndProtocolVersion = $threeDSecureData->directoryServerEndVersion .'<br>'; // 2.1.0
// echo 'acsStartProtocolVersion = '.$acsStartProtocolVersion = $threeDSecureData->acsStartVersion .'<br>'; // 2.1.0
// echo 'acsEndProtocolVersion = '.$acsEndProtocolVersion = $threeDSecureData->acsEndVersion .'<br>'; // 2.1.0
// echo 'methodUrl = '.$methodUrl = $threeDSecureData->issuerAcsUrl .'<br>'; // https://www.acsurl.com/method
// echo 'encodedMethodData= '.$encodedMethodData = $threeDSecureData->payerAuthenticationRequest .'<br>'; // Base64 encoded string

echo json_encode($threeDSecureData);
