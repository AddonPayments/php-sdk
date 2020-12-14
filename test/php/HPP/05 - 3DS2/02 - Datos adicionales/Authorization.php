<?php
require_once('../../../../../../../autoload.php');

use AddonPayments\Api\Entities\Address;
use AddonPayments\Api\Entities\Enums\AddressType;
use AddonPayments\Api\ServicesConfig;
use AddonPayments\Api\HostedPaymentConfig;
use AddonPayments\Api\Entities\HostedPaymentData;
use AddonPayments\Api\Entities\Enums\HppVersion;
use AddonPayments\Api\Entities\Exceptions\ApiException;
use AddonPayments\Api\Services\HostedService;

// Configure client & request settings
$config = new ServicesConfig();
$config->merchantId = "addonphptest";
$config->accountId = "3ds2";
$config->sharedSecret = "secret";
$config->serviceUrl = "https://hpp.sandbox.addonpayments.com/pay";
$config->hostedPaymentConfig = new HostedPaymentConfig();
$config->hostedPaymentConfig->version = HppVersion::VERSION_2;
$service = new HostedService($config);

// Añadimos los campos obligatorios de 3DS2 de dirección de facturación
$billingAddress = new Address();
$billingAddress->streetAddress1 = "Dirección de facturación 1";
$billingAddress->streetAddress2 = "Dirección de facturación 2";
$billingAddress->streetAddress3 = "Dirección de facturación 3";
$billingAddress->city = "Ciudad de facturación";
$billingAddress->postalCode = "03201";
$billingAddress->country = "840";

// Añadimos los campos obligatorios de 3DS2 de dirección de envío
$shippingAddress = new Address();
$shippingAddress->streetAddress1 = "Dirección de envío 1";
$shippingAddress->streetAddress2 = "Dirección de envío 2";
$shippingAddress->streetAddress3 = "Dirección de envío 3";
$shippingAddress->city = "Ciudad de envío";
$shippingAddress->state = "ES";
$shippingAddress->postalCode = "03201";
$shippingAddress->country = "840";

// Añadimos los campos obligatorios de 3DS2 del cliente
$hostedPaymentData = new HostedPaymentData();
$hostedPaymentData->customerEmail = "customer@email.com";
$hostedPaymentData->customerPhoneMobile = "34|914353028";
$hostedPaymentData->addressesMatch = True;
// Datos adicionales
$hostedPaymentData->challengeRequest = "NO_PREFERENCE";
$hostedPaymentData->customerWorkNumber = "44|07123456789";
$hostedPaymentData->accountAgeDate = "20190110";
$hostedPaymentData->accountAgeIndicator = "NO_ACCOUNT";
$hostedPaymentData->accountChangeDate = "20190128";
$hostedPaymentData->customerHomeNumber = "44|07123456789";
$hostedPaymentData->accountChangeIndicator = "THIS_TRANSACTION";
$hostedPaymentData->accountPassChangeDate = "20190115";
$hostedPaymentData->accountPassChangeIndicator = "THIS_TRANSACTION";
$hostedPaymentData->accountPurchaseCount = "3";
$hostedPaymentData->transactionType = "GOODS_SERVICE_PURCHASE";
$hostedPaymentData->cardholderAccountIdentifier = "1f0aae6b-0bac-479f-9ee5-29b9b6cf3aa0";
$hostedPaymentData->suspiciousActivity = "SUSPICIOUS_ACTIVITY";
$hostedPaymentData->provisionAttemptsDay = "1";
$hostedPaymentData->paymentAccountAge = "201901101";
$hostedPaymentData->paymentAccountAgeIndicator = "NO_ACCOUNT";
$hostedPaymentData->deliveryEmail = "deliveryemail@email.com";
$hostedPaymentData->deliveryTimeframe = "TWO_DAYS_OR_MORE";
$hostedPaymentData->shipIndicator = "UNVERIFIED_ADDRESS";
$hostedPaymentData->shippingAddressUsage = "20190128";
$hostedPaymentData->shippingAddressUsageIndicator = "THIS_TRANSACTION";
$hostedPaymentData->shippingNameIndicator = "TRUE";
$hostedPaymentData->preorderDate = "20190212";
$hostedPaymentData->reorderItemIndicator = "FIRST_TIME_ORDER";
$hostedPaymentData->transactionActivityDay = "1";
$hostedPaymentData->transactionActivityYear = "3";
// $hostedPaymentData->giftCardAmount = "250";
// $hostedPaymentData->giftCardCount = "1";
// $hostedPaymentData->giftCardCurrency = "EUR";
$hostedPaymentData->recurringMaxInstallments = "5";
$hostedPaymentData->recurringExpiry = "20190205";
$hostedPaymentData->recurringFrequency = "25";
$hostedPaymentData->priorTransAuthMethod = "FRICTIONLESS_AUTHENTICATION";
$hostedPaymentData->priorTransAuthIdentifier = "26c3f619-39a4-4040-bf1f-6fd433e6d615";
$hostedPaymentData->priorTransAuthTimestamp = "20190110125733";
$hostedPaymentData->priorTransAuthData = "string";
$hostedPaymentData->cardLoginAuthType = "MERCHANT_SYSTEM_AUTHENTICATION";
$hostedPaymentData->cardLoginAuthTimestamp = "20180613110212";
$hostedPaymentData->cardLoginAuthData = "string";
$hostedPaymentData->whiteListStatus = "False";

// Lanzamos la petición al servidor de Addon Payments
try {
   $hppJson = $service->charge(19.99)
      ->withCurrency("EUR")
      ->withHostedPaymentData($hostedPaymentData)
      ->withAddress($billingAddress, AddressType::BILLING)
      ->withAddress($shippingAddress, AddressType::SHIPPING)
      ->serialize();  

// Mostramos el formulario
echo $hppJson;

} catch (ApiException $e) {
// Añada aquí su tratamiento de errores
echo $e->getMessage();
}

?>