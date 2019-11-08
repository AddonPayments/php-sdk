<?php

  ini_set('display_errors', 1);
  ini_set('display_startup_errors', 1);
  error_reporting(E_ALL);
  
  // Cargamos el archivo que enruta las clases del SDK
  require_once('../../../../../../../autoload.php');

  // Importamos las clases necesarias para la operación de autorización
  use AddonPayments\Api\ServicesConfig;
  use AddonPayments\Api\ServicesContainer;
  use AddonPayments\Api\PaymentMethods\CreditCardData;
  use AddonPayments\Api\Entities\Customer;
  use AddonPayments\Api\Utils\GenerationUtils;
  use AddonPayments\Api\Entities\Exceptions\ApiException;

  // Configuramos los datos de nuestro comercio. Los datos son proporcionados por el equipo de Addon Payments, en caso de duda debe llamar al 914 353 028 e indicar su número de comercio o Merchant ID
  $config = new ServicesConfig();
  $config->merchantId = "addonphptest"; // Identificador
  $config->accountId = "api"; // Subcuenta
  $config->sharedSecret = "secret"; // Shared Secret (contraseña para realizar transacciones)
  $config->serviceUrl = "https://remote.sandbox.addonpayments.com/remote"; // URL de Addon Payments donde se envían las peticiones
  ServicesContainer::configure($config);

  // Asignamos a cada variable el valor recibido del formulario de ejemplo

  // Referencia del cliente
  $customKey = $_POST['key'];

  // Tarjeta nueva
  $numeroTarjeta = str_replace(' ', '', $_POST['cardNumber']);
  $fechaMM = substr($_POST['fExpiry'],0, 2);
  $fechaYY = substr($_POST['fExpiry'],-2);
  $nombre = $_POST['cardholder-name'];



  // Obtenemos los detalles del pagador
  $customer = new Customer();
  $customer->key = $customKey;

  // Creamos una referencia sobre el nuevo método de pago
  $paymentMethodRef = GenerationUtils::getGuid();

  // Creamos el objeto tarjeta
  $card = new CreditCardData();
  $card->number = $numeroTarjeta;
  $card->expMonth = $fechaMM;
  $card->expYear = $fechaYY;
  $card->cardHolderName = $nombre;

  // Asociamos la tarjeta al cliente
  $paymentMethod = $customer->addPaymentMethod($paymentMethodRef, $card);

try {
    // Almacenamos la tarjeta
    $response = $paymentMethod->create();
    
    // Obtenemos la respuesta y la mostramos
    echo 'Resultado == '.$result = $response->responseCode.'<br>'; // 00 == Success
    echo 'Mensaje == '.$message = $response->responseMessage.'<br>'; // [ test system ] AUTHORISED
    echo 'PaymentMethod = '.$paymentMethodRef; 

    // Aconsejamos guardar los datos de la operacion en su base de datos en caso de querer gestionar de forma interna sus transacciones

  } catch (ApiException $e) {
    // Añada aquí su tratamiento de errores
    echo '<b>Error al procesar su solicitud: </b>'.$e->getMessage();
  }

?>