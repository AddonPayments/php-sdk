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
  use AddonPayments\Api\Entities\HostedPaymentData;
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
  $config->hostedPaymentConfig->cardStorageEnabled = "1";
  $service = new HostedService($config);

  // Datos que deben transferirse a la HPP junto con las opciones de nivel de transacción
    $hostedPaymentData = new HostedPaymentData();
    $hostedPaymentData->offerToSaveCard = true; // Mostramos la casilla al cliente donde solicitamos que verifique si desea guardar su tarjeta
    $hostedPaymentData->customerExists = false; // Nuevo cliente
  
  // Puede proporcionar una referencia personalizada por usted para el cliente y la tarjeta descomentando las líneas de abajo e indicando las referencias
    // $hostedPaymentData->setCustomerKey = "a7960ada-3da9-4a5b-bca5-7942085b03c6";
    // $hostedPaymentData->setPaymentKey = "48fa69fe-d785-4c27-876d-6ccba660fa2b";

  // Lanzamos la petición al servidor de Addon Payments
  try {
    // Proceso de creación del cliente
    $hppJson = $service->charge(100)
            ->withCurrency("EUR")
            ->withHostedPaymentData($hostedPaymentData)
            ->serialize();

            echo $hppJson;

    // Aconsejamos guardar los datos de la operacion en su base de datos en caso de querer gestionar de forma interna sus transacciones

  } catch (ApiException $e) {
    // Añada aquí su tratamiento de errores
    echo '<b>Error al procesar su solicitud: </b>'.$e->getMessage();
  }

?>