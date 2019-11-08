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

  //Cliente
  $titulo = $_POST['titulo'];
  $nombre = $_POST['nombre'];
  $apellido = $_POST['apellido'];
  $company = $_POST['company'];
  $email = $_POST['email'];

  //Dirección del cliente
  $direccion1 = $_POST['direccion1'];
  $direccion2 = $_POST['direccion2'];
  $direccion3 = $_POST['direccion3'];
  $ciudad = $_POST['ciudad'];
  $provincia = $_POST['provincia'];
  $codigoPostal = $_POST['codigoPostal'];
  $pais = $_POST['pais'];
  $tlf = $_POST['tlf'];
  $hometlf = $_POST['hometlf']; 
  $workPhone = $_POST['workPhone'];
  $fax = $_POST['fax'];
  $comentarios = $_POST['comments'];
  $dateOfBirth = $_POST['birth'];
  $customerPassword = $_POST['clave'];

  if ($fax === ' ' || $fax === null || $fax === '') {
    $fax = 'No tiene fax';
  }


  // Creamos el objeto Cliente
  $customer = new Customer();
  $customer->key = GenerationUtils::getGuid();
  $customer->title = $titulo;
  $customer->firstName = $nombre;
  $customer->lastName = $apellido;
  $customer->company = $company;
  $customer->email = $email;
  $customer->dateOfBirth = $dateOfBirth;
  $customer->customerPassword = $customerPassword;

  // Creamos el objeto Dirección del cliente
  $customer->address = new Address();
  $customer->address->streetAddress1 = $direccion1;
  $customer->address->streetAddress2 = $direccion2;
  $customer->address->streetAddress3 = $direccion3;
  $customer->address->city = $ciudad;
  $customer->address->province = $provincia;
  $customer->address->postalCode = $codigoPostal;
  $customer->address->country = $pais;
  $customer->mobilePhone = $tlf;
  $customer->homePhone = $hometlf;
  $customer->workPhone = $workPhone;
  $customer->fax = $fax;

  // Lanzamos la petición al servidor de Addon Payments
  try {
    // Proceso de creación del cliente
    $response = $customer->create();
    
    // Obtenemos la respuesta y la mostramos
    echo 'Resultado == '.$result = $response->responseCode.'<br>'; // 00 == Success
    echo 'Mensaje == '.$message = $response->responseMessage.'<br>'; // [ test system ] AUTHORISED
    echo 'Order ID == '.$orderId = $response->orderId.'<br>'; // Order ID de la transacción
    echo 'Identificador del cliente == '.$customer->key.'<br>'; // Identificador del cliente
    echo 'Transaction ID (PasRef) == '.$paymentsReference = $response->transactionId.'<br>'; // Identificador de transacción (PASREF)

    // Aconsejamos guardar los datos de la operacion en su base de datos en caso de querer gestionar de forma interna sus transacciones

  } catch (ApiException $e) {
    // Añada aquí su tratamiento de errores
    echo '<b>Error al procesar su solicitud: </b>'.$e->getMessage();
  }

?>