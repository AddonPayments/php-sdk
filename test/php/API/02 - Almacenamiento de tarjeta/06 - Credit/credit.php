<?php

  ini_set('display_errors', 1);
  ini_set('display_startup_errors', 1);
  error_reporting(E_ALL);
  
  // Cargamos el archivo que enruta las clases del SDK
  require_once('../../../../../../../autoload.php');

  // Importamos las clases necesarias para la operación de autorización
  use AddonPayments\Api\ServicesConfig;
  use AddonPayments\Api\ServicesContainer;
  use AddonPayments\Api\PaymentMethods\RecurringPaymentMethod;
  use AddonPayments\Api\Entities\Exceptions\ApiException;

  // Configuramos los datos de nuestro comercio. Los datos son proporcionados por el equipo de Addon Payments, en caso de duda debe llamar al 914 353 028 e indicar su número de comercio o Merchant ID
  $config = new ServicesConfig();
  $config->merchantId = "addonphptest"; // Identificador
  $config->accountId = "api"; // Subcuenta
  $config->sharedSecret = "secret"; // Shared Secret (contraseña para realizar transacciones)
  $config->refundPassword = "refund"; // Refund Password (contraseña para realizar ingresos a los clientes)
  $config->serviceUrl = "https://remote.sandbox.addonpayments.com/remote"; // URL de Addon Payments donde se envían las peticiones
  ServicesContainer::configure($config);

  // Asignamos a cada variable el valor recibido del formulario de ejemplo

  // Identificador del cliente
  $customerId = $_POST['key'];

  // Identificador del método de pago que deseamos eliminar
  $paymentId = $_POST['paymentRef'];

  // Creamos el objeto "RecurringPaymentMethod" con los valores "PAyerRef" y "PayerMethod"
  $paymentMethod = new RecurringPaymentMethod($customerId, $paymentId);

  try {
    // Proceso de autorización automática
    $response = $paymentMethod->refund($_POST['importe'])
                ->withCurrency("EUR")
                //->withCvn("123")
                ->execute();

    // Obtenemos la respuesta y la mostramos
    echo 'Resultado == '.$result = $response->responseCode.'<br>'; // 00 == Success
    echo 'Mensaje == '.$message = $response->responseMessage.'<br>'; // [ test system ] AUTHORISED
    echo 'Order ID == '.$orderId = $response->orderId.'<br>'; // Order ID de la transacción
    echo 'Código de autorización == '.$authCode = $response->authorizationCode.'<br>'; // Código de autorización
    echo 'Transaction ID (PasRef) == '.$paymentsReference = $response->transactionId.'<br>'; // Identificador de transacción (PASREF)

    // Aconsejamos guardar los datos de la operacion en su base de datos en caso de querer gestionar de forma interna sus transacciones

  } catch (ApiException $e) {
    // Añada aquí su tratamiento de errores
    echo '<b>Error al procesar su solicitud: </b>'.$e->getMessage();
  }

?>