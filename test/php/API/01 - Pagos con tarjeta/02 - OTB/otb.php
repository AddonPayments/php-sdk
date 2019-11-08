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

// Configuramos los datos de nuestro comercio. Los datos son proporcionados por el equipo de Addon Payments, en caso de dua debe llamar al 914 353 028 e indicar su número de comercio o Merchant ID
$config = new ServicesConfig();
$config->merchantId = "addonphptest"; // Identificador
$config->accountId = "internet"; // Subcuenta
$config->sharedSecret = "secret"; // Shared Secret (contraseña para realizar transacciones)
$config->serviceUrl = "https://remote.addonpayments.com/remote"; // URL de Addon Payments donde se envían las peticiones
ServicesContainer::configure($config);

// Información de la tarjeta
$numeroTarjeta = str_replace(' ', '', $_POST['cardNumber']);
$fechaMM = substr($_POST['fExpiry'],0, 2);
$fechaYY = substr($_POST['fExpiry'],-2);
$cvn = $_POST['cvn'];
$nombre = $_POST['cardholder-name'];

// Creamos el objeto "tarjeta"
$card = new CreditCardData();
$card->number = $numeroTarjeta;
$card->expMonth = $fechaMM;
$card->expYear = $fechaYY;
$card->cvn = $cvn;
$card->cvnPresenceIndicator = CvnPresenceIndicator::PRESENT;
$card->cardHolderName = $nombre;

try {
    // Comprobamos que una tarjeta es válida y está activa sin cargar ningún importe
    $response = $card->verify()
            ->execute();

    // Obtenemos la respuesta y la mostramos
    echo 'Resultado == '.$result = $response->responseCode.'<br>'; // 00 == Success
    echo 'Mensaje == '.$message = $response->responseMessage.'<br>'; // [ test system ] AUTHORISED

    // Aconsejamos guardar la respuesta de la operacion en su base de datos en caso de querer gestionar de forma interna sus transacciones

} catch (ApiException $e) {
    // Añada aquí el tratamiento de errores
    echo '<b>Error al procesar su solicitud: </b>'.$e->getMessage();
}

?>