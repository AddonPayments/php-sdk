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

// Añadimos los campos obligatorios de 3DS2 del cliente
$hostedPaymentData = new HostedPaymentData();
$hostedPaymentData->customerEmail = "customer@email.com";
$hostedPaymentData->customerPhoneMobile = "34|914353028";
$hostedPaymentData->addressesMatch = True;

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

// Lanzamos la petición al servidor de Addon Payments
try {
    $hppJson = $service->charge(20)
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
