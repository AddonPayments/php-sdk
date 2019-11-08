<?php

  ini_set('display_errors', 1);
  ini_set('display_startup_errors', 1);
  error_reporting(E_ALL);
  
  // Cargamos el archivo que enruta las clases del SDK
  require_once('../../../../../../../autoload.php');

  // Importamos las clases necesarias para la operación de autorización
  use AddonPayments\Api\ServicesConfig;
  use AddonPayments\Api\ServicesContainer;
  use AddonPayments\Api\Entities\Exceptions\ApiException;
  use AddonPayments\Api\PaymentMethods\CreditCardData;
  use AddonPayments\Api\Entities\Enums\CvnPresenceIndicator;
  use AddonPayments\Api\Entities\Address;
  use AddonPayments\Api\Entities\Enums\AddressType;
  use AddonPayments\Api\Entities\Customer;

  // Configuramos los datos de nuestro comercio. Los datos son proporcionados por el equipo de Addon Payments, en caso de dua debe llamar al 914 353 028 e indicar su número de comercio o Merchant ID
  $config = new ServicesConfig();
  $config->merchantId = "addonphptest"; // Identificador
  $config->accountId = "api"; // Subcuenta
  $config->sharedSecret = "secret"; // Shared Secret (contraseña para realizar transacciones)
  $config->rebatePassword = 'rebate'; // Rebate Password (contraseña para realizar devoluciones)
  $config->serviceUrl = "https://remote.sandbox.addonpayments.com/remote"; // URL de Addon Payments donde se envían las peticiones

  ServicesContainer::configure($config);

  // Asignamos a cada variable el valor recibido del formulario de ejemplo

  // Información de la tarjeta
  $numeroTarjeta = str_replace(' ', '', $_POST['cardNumber']);
  $fechaMM = substr($_POST['fExpiry'],0, 2);
  $fechaYY = substr($_POST['fExpiry'],-2);
  $cvn = $_POST['cvn'];
  $nombre = $_POST['cardholder-name'];

  // Información del cliente
  $firstName = $_POST['firstName'];
  $lastName = $_POST['lastname'];
  $Birth = $_POST['birthday'];
  $customerPassword = $_POST['customerPassword'];
  $email = $_POST['customerEmail'];
  $domainName = $_POST['customerDomain'];
  $homePhone = $_POST['tlf'];
  $deviceFingerPrint = $_POST['deviceFingerPrint'];

  // Información de facturación
  $direccion1Billing = $_POST['direccion1B'];
  $direccion2Billing = $_POST['direccion2B'];
  $direccion3Billing = $_POST['direccion3B'];
  $ciudadBilling = $_POST['ciudadB'];
  $provinciaBilling = $_POST['provinciaB'];
  $paisBilling = $_POST['paisB'];
  $postalCodeBilling = $_POST['cpB'];
  $paisIsoBilling = $_POST['paisIsoB'];

  // Información de envío
  $direccion1Shipping = $_POST['direccion1S'];
  $direccion2Shipping = $_POST['direccion2S'];
  $direccion3Shipping = $_POST['direccion3S'];
  $ciudadShipping = $_POST['ciudadS'];
  $provinciaShipping = $_POST['provinciaS'];
  $paisShipping = $_POST['paisS'];
  $postalCodeShipping = $_POST['cpS'];
  $paisIsoShipping = $_POST['paisIsoS'];

  // Creamos el objeto tarjeta
  $card = new CreditCardData();
  $card->number = $numeroTarjeta;
  $card->expMonth = $fechaMM;
  $card->expYear = $fechaYY;
  $card->cvn = $cvn;
  $card->cvnPresenceIndicator = CvnPresenceIndicator::PRESENT;
  $card->cardHolderName = $nombre;

  // Creamos el objeto "cliente"
  $customer = new Customer();
  $customer->firstName = $firstName;
  $customer->lastName = $lastName;
  $customer->dateOfBirth = $Birth;
  $customer->customerPassword = $customerPassword;
  $customer->email = $email;
  $customer->domainName = $domainName;
  $customer->homePhone = $homePhone;
  $customer->deviceFingerPrint = $deviceFingerPrint;

  // Direcciones
    // Recogemos los datos de facturación y los suministramos al comprobador AVS
    $billingAddress = new Address();
    $billingAddress->streetAddress1 = $direccion1Billing;
    $billingAddress->streetAddress2 = $direccion2Billing;
    $billingAddress->streetAddress3 = $direccion3Billing;
    $billingAddress->city = $ciudadBilling;
    $billingAddress->province = $provinciaBilling;
    $billingAddress->state = $paisBilling;
    $billingAddress->postalCode = $postalCodeBilling;
    $billingAddress->country = $paisIsoBilling;

    // Recogemos los datos de envío del cliente y los enviamos en la petición al servidor
    $shippingAddress = new Address();
    $shippingAddress->streetAddress1 = $direccion1Shipping;
    $shippingAddress->streetAddress2 = $direccion2Shipping;
    $shippingAddress->streetAddress3 = $direccion3Shipping;
    $shippingAddress->city = $ciudadShipping;
    $shippingAddress->province = $provinciaShipping;
    $shippingAddress->state = $paisShipping;
    $shippingAddress->postalCode = $postalCodeShipping;
    $shippingAddress->country = $paisIsoShipping;

  // Lanzamos la petición al servidor de Addon Payments
  try {
    // Proceso de autorización automática Auto Settle Flag = 1
    $response = $card->charge($_POST['importe'])
            ->withCurrency("EUR")
            ->withAddress($billingAddress, AddressType::BILLING)
            ->withAddress($shippingAddress, AddressType::BILLING)
            ->withCustomerData($customer)
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