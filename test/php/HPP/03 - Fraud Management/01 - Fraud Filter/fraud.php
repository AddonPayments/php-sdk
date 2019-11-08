<?php

  ini_set('display_errors', 1);
  ini_set('display_startup_errors', 1);
  error_reporting(E_ALL);
  
  // Cargamos el archivo que enruta las clases del SDK
  require_once('../../../../../../../autoload.php');

  // Importamos las clases necesarias para la operación de autorización
  use AddonPayments\Api\ServicesConfig;
  use AddonPayments\Api\HostedPaymentConfig;
  use AddonPayments\Api\Services\HostedService;
  use AddonPayments\Api\Entities\Address;
  use AddonPayments\Api\Entities\HostedPaymentData;
  use AddonPayments\Api\Entities\Enums\AddressType;
  use AddonPayments\Api\Entities\Enums\FraudFilterMode;
  use AddonPayments\Api\Entities\Enums\HppVersion;
  use AddonPayments\Api\Entities\Exceptions\ApiException;

  // Configuramos los datos de nuestro comercio. Los datos son proporcionados por el equipo de Addon Payments, en caso de duda debe llamar al 914 353 028 e indicar su número de comercio o Merchant ID
  $config = new ServicesConfig();
  $config->merchantId = "addonphptest"; // Identificador
  $config->accountId = "api"; // Subcuenta
  $config->sharedSecret = "secret"; // Shared Secret (contraseña para realizar transacciones)
  $config->serviceUrl = "https://remote.sandbox.addonpayments.com/remote"; // URL de Addon Payments donde se envían las peticiones
  $config->hostedPaymentConfig = new HostedPaymentConfig();
  $config->hostedPaymentConfig->version = HppVersion::VERSION_2;

  // Ejecuta las reglas pero no ejecuta la acción detallada en el Fraude Filtrar el resultado general (por ejemplo, MANTENER o BLOQUEAR)
  $config->hostedPaymentConfig->FraudFilterMode = FraudFilterMode::PASSIVE;
  $service = new HostedService($config);

  // Asignamos a cada variable el valor recibido del formulario de ejemplo

    // Datos que deben transferirse a la HPP junto con las opciones de nivel de transacción
    $hostedPaymentData = new HostedPaymentData();
    $hostedPaymentData->customerNumber = "E8953893489";
    $hostedPaymentData->productId = "SID9838383";

    // billing address
    $billingAddress = new Address();
    $billingAddress->postalCode = "50001|Flat 123";
    $billingAddress->country = "822";

    // shipping address
    $shippingAddress = new Address();
    $shippingAddress->postalCode = "654|123";
    $shippingAddress->country = "822";

    $variableReference = "Car Part HV";

  // Lanzamos la petición al servidor de Addon Payments
  try {
    // Proceso de creación del cliente
    $hppJson = $service->charge(1999)
              ->withCurrency("EUR")
              ->withHostedPaymentData($hostedPaymentData)
              ->withAddress($billingAddress, AddressType::BILLING)
              ->withAddress($shippingAddress, AddressType::SHIPPING)
              ->withClientTransactionId($variableReference)
              ->serialize();

      echo $hppJson;

    // Aconsejamos guardar los datos de la operacion en su base de datos en caso de querer gestionar de forma interna sus transacciones

  } catch (ApiException $e) {
    // Añada aquí su tratamiento de errores
    echo '<b>Error al procesar su solicitud: </b>'.$e->getMessage();
  }

?>