<?php
require_once('../../../../../../../autoload.php');

use AddonPayments\Api\ServicesConfig;
use AddonPayments\Api\ServicesContainer;
use AddonPayments\Api\Services\Secure3dService;
use AddonPayments\Api\PaymentMethods\CreditCardData;
use AddonPayments\Api\Entities\Enums\Secure3dVersion;
use AddonPayments\Api\Entities\Exceptions\ApiException;
use AddonPayments\Api\Entities\Enums\ColorDepth;
use AddonPayments\Api\Entities\ThreeDSecure;
use AddonPayments\Api\Entities\Address;
use AddonPayments\Api\Entities\BrowserData;
use AddonPayments\Api\Entities\Enums\AddressType;
use AddonPayments\Api\Entities\Enums\ChallengeWindowSize;
use AddonPayments\Api\Entities\Enums\MethodUrlCompletion;

// Configure client & request settings
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
$fechaMM = substr($_POST['fExpiry'],0, 2);
$fechaYY = substr($_POST['fExpiry'],-2);
$cvn = $_POST['cvn'];
$nombre = $_POST['cardholderName'];
$importe  = $_POST['amount'];

// Add the cardholder data
$card = new CreditCardData();
$card->number = $numeroTarjeta;
$card->expMonth = $fechaMM;
$card->expYear = $fechaYY;
$card->cvn = $cvn;
$card->cardHolderName = $nombre;

// Add the customer's billing address
$billingAddress = new Address();
$billingAddress->streetAddress1 = "Apartment 852";
$billingAddress->streetAddress2 = "Complex 741";
$billingAddress->streetAddress3 = "Unit 4";
$billingAddress->city = "Chicago";
$billingAddress->state = "IL";
$billingAddress->postalCode = "50001";
$billingAddress->countryCode = "840";

// Add the customer's shipping address
$shippingAddress = new Address();
$shippingAddress->streetAddress1 = "Flat 456";
$shippingAddress->streetAddress2 = "House 789";
$shippingAddress->streetAddress3 = "Basement Flat";
$shippingAddress->city = "Halifax";
$shippingAddress->postalCode = "W5 9HR";
$shippingAddress->countryCode = "826";

$colorDepth = $_POST['colorDepth'];
$javaEnabled = $_POST['javaEnabled'];
$browserLanguage = $_POST['browserLanguage'];
$screenHeight = $_POST['screenHeight'];
$screenWidth = $_POST['screenWidth'];
$userAgent = $_POST['userAgent'];
$browserTimezoneZoneOffset = $_POST['browserTimezoneZoneOffse'];
$customerIp = $_SERVER['REMOTE_ADDR'];
$acceptHeader = $_SERVER['HTTP_ACCEPT']; 

// Add captured browser data from the client-side and server-side 
$browserData = new BrowserData();
$browserData->acceptHeader = $acceptHeader;
$browserData->colorDepth = $colorDepth;
$browserData->ipAddress = $customerIp;
$browserData->javaEnabled = $javaEnabled;
$browserData->language = $browserLanguage;
$browserData->screenHeight = $screenHeight;
$browserData->screenWidth = $screenWidth;
$browserData->challengWindowSize = ChallengeWindowSize::FULL_SCREEN;
$browserData->timeZone = $browserTimezoneZoneOffset;
$browserData->userAgent = $userAgent;

$threeDS = $_POST['transId'];
$threeDSecureData = new ThreeDSecure();
$threeDSecureData->serverTransactionId = $threeDS;

try {
   $threeDSecureData = Secure3dService::initiateAuthentication($card, $threeDSecureData)
      ->withAmount($importe)
      ->withCurrency("EUR")
      ->withOrderCreateDate(date("Y-m-d H:i:s"))
      ->withCustomerEmail("james.mason@example.com")
      ->withAddress($billingAddress, AddressType::BILLING)
      ->withAddress($shippingAddress, AddressType::SHIPPING)
      ->withBrowserData($browserData)
      ->withMethodUrlCompletion(MethodUrlCompletion::YES)
      ->withMobileNumber("44", "7123456789")
      ->execute(Secure3dVersion::TWO);

      echo json_encode($threeDSecureData);
} catch (ApiException $e) {
   echo 'Error = '.$e;
}

$status = $threeDSecureData->status;