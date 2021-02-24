<?php
require_once('../../../../../../../autoload.php');

use AddonPayments\Api\ServicesConfig;
use AddonPayments\Api\ServicesContainer;
use AddonPayments\Api\Services\Secure3dService;
use AddonPayments\Api\Entities\Enums\Secure3dVersion;
use AddonPayments\Api\Entities\Exceptions\ApiException;

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

$transactionId = $_POST['acsResponse'];
try {
   $threeDSecureData = Secure3dService::getAuthenticationData()
      ->withServerTransactionId($transactionId)
      ->execute(Secure3dVersion::TWO);
} catch (ApiException $e) { 
   // TODO: add your error handling here 
   echo 'Error = '.$e;
}

if (isset($threeDSecureData)) {
   $status = $threeDSecureData->status; // for example AUTHENTICATION_SUCCESSFUL or AUTHENTICATION_FAILED  
   // Data required for authorization or database record
   $authenticationValue = $threeDSecureData->authenticationValue; // ODQzNjgwNjU0ZjM3N2JmYTg0NTM=s
   $dsTransId = $threeDSecureData->directoryServerTransactionId; // c272b04f-6e7b-43a2-bb78-90f4fb94aa25
   $messageVersion = $threeDSecureData->messageVersion; // 2.1.0
   $eci = $threeDSecureData->eci; // 05
   // Additional response data
   $acsTransID = $threeDSecureData->acsTransactionId; // 13c701a3-5a88-4c45-89e9-ef65e50a8bf9
   $statusReason - $threeDSecureData->statusReason; // LOW_CONFIDENCE
   $authenticationSource = $threeDSecureData->authenticationSource; // BROWSER
   $messageCategory = $threeDSecureData->messageCategory; // PAYMENT_AUTHENTICATION

   echo json_encode($threeDSecureData);
}