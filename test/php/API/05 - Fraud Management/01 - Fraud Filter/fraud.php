<?php

  ini_set('display_errors', 1);
  ini_set('display_startup_errors', 1);
  error_reporting(E_ALL);
  
  // Cargamos el archivo que enruta las clases del SDK
  require_once('../../../../../../../autoload.php');

  // Importamos las clases necesarias para la operación de autorización
  use AddonPayments\Api\ServicesConfig;
  use AddonPayments\Api\ServicesContainer;
  use AddonPayments\Api\Entities\Address;
  use AddonPayments\Api\PaymentMethods\CreditCardData;
  use AddonPayments\Api\Entities\Enums\CvnPresenceIndicator;
  use AddonPayments\Api\Entities\Exceptions\ApiException;
  use AddonPayments\Api\Entities\Enums\AddressType;
  use AddonPayments\Api\Entities\Enums\FraudFilterMode;

  // Configuramos los datos de nuestro comercio. Los datos son proporcionados por el equipo de Addon Payments, en caso de duda debe llamar al 914 353 028 e indicar su número de comercio o Merchant ID
  $config = new ServicesConfig();
  $config->merchantId = "addonphptest"; // Identificador
  $config->accountId = "api"; // Subcuenta
  $config->sharedSecret = "secret"; // Shared Secret (contraseña para realizar transacciones)
  $config->serviceUrl = "https://remote.sandbox.addonpayments.com/remote"; // URL de Addon Payments donde se envían las peticiones


  $numeroTarjeta = str_replace(' ', '', $_POST['cardNumber']);
  $fechaMM = substr($_POST['fExpiry'],0, 2);
  $fechaYY = substr($_POST['fExpiry'],-2);
  $cvn = $_POST['cvn'];
  $nombre = $_POST['cardholder-name'];

  $billcp = $_POST['billCp'];
  $billco = $_POST['billCo'];

  $shipcp = $_POST['shipCp'];
  $shipco = $_POST['shipCo'];

  $refvariable = $_POST['refvariable'];
  $custNum = $_POST['custNum'];
  $proId = $_POST['proId'];

  // Creamos el objeto tarjeta
  $card = new CreditCardData();
  $card->number = $numeroTarjeta;
  $card->expMonth = $fechaMM;
  $card->expYear = $fechaYY;
  $card->cvn = $cvn;
  $card->cvnPresenceIndicator = CvnPresenceIndicator::PRESENT;
  $card->cardHolderName = $nombre;

  // supply the customer's billing country and post code for avs checks
  $billingAddress = new Address();
  $billingAddress->postalCode = $billcp;
  $billingAddress->country = $billco;

  // supply the customer's shipping country and post code
  $shippingAddress = new Address();
  $shippingAddress->postalCode = "654|123";
  $shippingAddress->country = "GB";

  // fraud filter mode configuration coming soon

  try {
      // create the delayed settle authorization
      $response = $card->charge($_POST['importe'])
      ->withCurrency("EUR")
      ->withAddress($billingAddress, AddressType::BILLING)
      ->withAddress($shippingAddress, AddressType::SHIPPING)
      ->withProductId($proId) // prodid
      ->withClientTransactionId($refvariable) // varref
      ->withCustomerId($custNum) // custnum
      ->withCustomerIpAddress("123.123.123.123")
      ->withFraudFilter(FraudFilterMode::PASSIVE) // Can be set to PASSIVE or OFF
      ->execute();

        $fraudFilterResponse = $response->fraudFilterResponse;

        // Obtenemos el modo de filtro, puede ser ACTIVO o PASIVO (no hay respuesta cuando está en modo APAGADO)
        $fraudResponseMode = $fraudFilterResponse->fraudResponseMode;

        // El resultado total del filtro de fraude puede ser PASS, HOLD o BLOCK
        $fraudResponseOverallResult = $fraudFilterResponse->fraudResponseResult;
        
        /*
        $fraudFilterRules = $fraudFilterResponse->fraudResponseRules;
        foreach ($fraudFilterRules as $rule) {
          echo $rule["id"] . "\n";
          echo $rule["name"] . "\n";
          echo $rule["action"] . "\n";
        }
        */

    // Aconsejamos guardar los datos de la operacion en su base de datos en caso de querer gestionar de forma interna sus transacciones

  } catch (ApiException $e) {
    // Añada aquí su tratamiento de errores
    echo '<b>Error al procesar su solicitud: </b>'.$e->getMessage();
  }

?>