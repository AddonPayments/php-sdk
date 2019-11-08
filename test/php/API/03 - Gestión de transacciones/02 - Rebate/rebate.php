<?php

  ini_set('display_errors', 1);
  ini_set('display_startup_errors', 1);
  error_reporting(E_ALL);
  
  // Cargamos el archivo que enruta las clases del SDK
  require_once('../../../../../../../autoload.php');

  // Importamos las clases necesarias para la operación de devolución
  use AddonPayments\Api\ServicesConfig;
  use AddonPayments\Api\ServicesContainer;
  use AddonPayments\Api\Entities\Transaction;
  use AddonPayments\Api\Entities\Exceptions\ApiException;

  // Configuramos los datos de nuestro comercio
  // Los datos son proporcionados por el equipo de Addon Payments
  $config = new ServicesConfig();
  $config->merchantId = "addonphptest"; // Identificador
  $config->accountId = "api"; // Subcuenta
  $config->sharedSecret = "secret"; // Shared Secret (contraseña para realizar transacciones)
  $config->rebatePassword = 'rebate'; // Rebate Password (contraseña para realizar devoluciones)
  $config->serviceUrl = "https://remote.sandbox.addonpayments.com/remote"; // URL de Addon Payments donde se envían las peticiones
  ServicesContainer::configure($config);

  // El Order ID, Pasref y el código de autorización de la operación original se obtiene en la respuesta de la transacción
  $OrderID = $_POST['orderid'];
  $paymentsReference = $_POST['pasref'];
  $codigoAuth = $_POST['authCode'];

  // Creamos el objeto de devolución
  $transaction = Transaction::fromId($paymentsReference, $OrderID);
  $transaction->authorizationCode = $codigoAuth;

  try {
    // Enviamos la solicitud de la devolución, debemos indicar el importe y la moneda
    $response = $transaction->refund($_POST['importe'])
            ->withCurrency("EUR")
            ->execute();

    // Obtenemos la respuesta y la mostramos
    echo 'Resultado == '.$result = $response->responseCode.'<br>'; // 00 == Success
    echo 'Mensaje == '.$message = $response->responseMessage.'<br>'; // CÓDIGO DE AUTORIZACIÓN

    // Aconsejamos guardar los datos de la operacion en su base de datos en caso de querer gestionar de forma interna sus transacciones

  } catch (ApiException $e) {
    // Añada aquí su tratamiento de errores
    echo '<b>Error al procesar su solicitud: </b>'.$e->getMessage();
  }

?>