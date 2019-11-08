<?php

  ini_set('display_errors', 1);
  ini_set('display_startup_errors', 1);
  error_reporting(E_ALL);

  require_once('../../../../../../../autoload.php');

  use AddonPayments\Api\ServicesConfig;
  use AddonPayments\Api\ServicesContainer;
  use AddonPayments\Api\Entities\Transaction;
  use AddonPayments\Api\Entities\Enums\ReasonCode;
  use AddonPayments\Api\Entities\Exceptions\ApiException;

  $config = new ServicesConfig();
  $config->merchantId = "addonphptest"; // Identificador
  $config->accountId = "api"; // Subcuenta
  $config->sharedSecret = "secret"; // Shared Secret (contraseña para realizar transacciones)
  $config->serviceUrl = "https://remote.sandbox.addonpayments.com/remote"; // URL de Addon Payments donde se envían las peticiones
  ServicesContainer::configure($config);

  // Order ID de la transacción a bloquear
  $OrderID = $_POST['OrderID'];

  // PASREF de la operación original
  $paymentsReference = $_POST['paymentsReference'];

  // Creamos el objeto para retener la operación
  $transaction = Transaction::fromId($paymentsReference, $OrderID);


  // Lanzamos la operación
  try {
      $response = $transaction->hold()
              ->withReasonCode(ReasonCode::FRAUD)
              ->execute();

    echo  "Resultado == ".$result = $response->responseCode."<br>"; // 00 == Success
    echo  "Mensaje == ".$message = $response->responseMessage."<br>"; // [ test system ] AUTHORISED

  } catch (ApiException $e) {
    // Añada aquí su tratamiento de errores
    echo '<b>Error al procesar su solicitud: </b>'.$e->getMessage();
  }

?>