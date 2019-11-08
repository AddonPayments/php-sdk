<?php

  ini_set('display_errors', 1);
  ini_set('display_startup_errors', 1);
  error_reporting(E_ALL);

  // Importamos las clases necesarias para la operación de autorización
  require_once('../../../../../../../autoload.php');

  // Importamos las clases necesarias para la operación de autorización
  use AddonPayments\Api\ServicesConfig;
  use AddonPayments\Api\ServicesContainer;
  use AddonPayments\Api\PaymentMethods\CreditCardData;
  use AddonPayments\Api\Entities\Exceptions\ApiException;
  use AddonPayments\Api\Utils\GenerationUtils;

  // Configuración de los datos de nuestro comercio. Los datos son proporcionados por el equipo de Addon Payments, en caso de duda debe llamar al 914 353 028 e indicar su número de comercio o Merchant ID
  $config = new ServicesConfig();
  $config->merchantId = "addonphptest"; // Identificador
  $config->accountId = "dcc"; // Subcuenta
  $config->sharedSecret = "secret"; // Shared Secret (contraseña para realizar transacciones)
  $config->serviceUrl = "https://remote.sandbox.addonpayments.com/remote"; // URL de Addon Payments donde se envían las peticiones
  ServicesContainer::configure($config);

  // Información de la tarjeta
  $numeroTarjeta = str_replace(' ', '', $_POST['cardNumber']);
  $fechaMM = substr($_POST['fExpiry'],0, 2);
  $fechaYY = substr($_POST['fExpiry'],-2);
  $cvn = $_POST['cvn'];
  $nombre = $_POST['cardholder-name'];


  // Creamos el objeto tarjeta
  $card = new CreditCardData();
  $card->number = $numeroTarjeta;
  $card->expMonth = $fechaMM;
  $card->expYear = $fechaYY;
  $card->cvn = $cvn;
  $card->cardHolderName = $nombre;

  try {
      // Comprobamos si el DCC está disponible
      $response = $card->getDccRate("1", $_POST['importe'], "EUR", "fexco", GenerationUtils::getGuid());
      
      // Obtenemos la respuesta y la mostramos
      $dccResponseResult = $response->dccResponseResult;
      echo 'Order ID == '.$orderID = $response->orderId.'<br>';
      echo 'El tipo de cambio ofrecido por el procesador de conversión de moneda para esta transacción == '.$cardHolderRate = $dccResponseResult->cardHolderRate.'<br>';
      echo 'Moneda de la tarjeta == '.$cardHolderCurrency = $dccResponseResult->cardHolderCurrency.'<br>';
      echo 'Cantidad que se ofrece al titular == '.$customerAmount = $dccResponseResult->cardHolderAmount.'<br>';
      echo 'Moneda del comercio == '.$exchangeRate = $dccResponseResult->merchantCurrency.'<br>';
      echo 'Fuente del tipo de cambio == '.$exchangeRateSourceName = $dccResponseResult->exchangeRateSourceName.'<br>';
      echo 'Tiempo de la fuente del tipo de cambio == '.$exchangeRateSourceTimestamp = $dccResponseResult->exchangeRateSourceTimestamp.'<br>';

    // Aconsejamos guardar los datos de la operacion en su base de datos en caso de querer gestionar de forma interna sus transacciones

  } catch (ApiException $e) {
    // Añada aquí su tratamiento de errores
    echo '<b>Error al procesar su solicitud: </b>'.$e->getMessage();
  }

?>