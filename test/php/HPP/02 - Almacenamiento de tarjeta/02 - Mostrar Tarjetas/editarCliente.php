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
  $config->hostedPaymentConfig->displaySavedCards = true;
  $service = new HostedService($config);

  // Asignamos a cada variable el valor recibido del formulario de ejemplo

  // Datos que deben transferirse a la HPP junto con las opciones de nivel de transacción
    // data to be passed to the HPP along with transaction level settings
    $hostedPaymentData = new HostedPaymentData();
    $hostedPaymentData->offerToSaveCard = true;
    $hostedPaymentData->customerExists = true;
    $hostedPaymentData->customerKey = "d110e502-6c92-428f-b502-fd0173d2acf5";
    // supply your own reference for any new card saved
    // $hostedPaymentData->paymentKey = "376a2598-412d-4805-9f47-c177d5605853"

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