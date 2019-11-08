<?php

    // Indicamos el Timestamp actual
    $timestamp = date("YmdHis");

    // Indicamos nuestro identificador proporcionado por el equipo de soporte. Si tiene alguna duda puede contactar con el equipo de Addon Payments llamando al 914 353 028 o enviando un email a soporte@addonpayments.com.
    $MerchantID = "addonphptest";

    // Indicamos nuestro Shared Secret proporcionado por el equipo de soporte. Si tiene alguna duda puede contactar con el equipo de Addon Payments llamando al 914 353 028 o enviando un email a soporte@addonpayments.com.
    $ShSecret = "secret";

    // Generamos de forma aleatoria un número entre el "0" y el "1000" y le añadimos "-Pruebas"
    $Order = mt_rand(0, 1000)."-Pruebas";
    
    // Obtenemos el importe del formulario de ejemplo (Punto 3)
    $amount = $_POST['importe'];

    // Calculamos el Hash
    $json = $timestamp.".".$MerchantID.".".$Order.".".$amount.".EUR";

    // Convertimos el primer hash a SHA1
    $firma = sha1(sha1($json).".".$ShSecret);

    // URL de Addon Payments
    $url = 'https://hpp.sandbox.addonpayments.com/pay';

    // Indicamos el JSON con todos los datos de la operación
    $datos = array(
        "TIMESTAMP" => $timestamp,
        "AMOUNT" => $amount,
        "ORDER_ID" => $Order,
        "SHA1HASH" => $firma,
        "MERCHANT_RESPONSE_URL" => 'https://midominio.es/response.php',
        "MERCHANT_ID" => $MerchantID,
        "AUTO_SETTLE_FLAG" => '1',
        "CURRENCY" => 'EUR',
        "HPP_VERSION" => '2',
        "COMMENT1"=> $_POST['comment1'],
        "HPP_LANG"=> $_POST['lang'],
        "HPP_CUSTOMER_EMAIL"=> $_POST['email'],
        "HPP_CUSTOMER_PHONENUMBER_MOBILE"=> $_POST['tel'],
        "HPP_BILLING_STREET1"=> $_POST['bill1'],
        "HPP_BILLING_STREET2"=> $_POST['bill2'],
        "HPP_BILLING_STREET3"=> $_POST['bill3'],
        "HPP_BILLING_CITY"=> $_POST['billcity'],
        "HPP_BILLING_POSTALCODE"=> $_POST['billCP'],
        "HPP_SHIPPING_STREET1"=> $_POST['ship1'],
        "HPP_SHIPPING_STREET2"=> $_POST['ship2'],
        "HPP_SHIPPING_STREET3"=> $_POST['ship3'],
        "HPP_SHIPPING_CITY"=> $_POST['shipcity'],
        "HPP_SHIPPING_STATE"=> $_POST['shipstate'],
        "HPP_SHIPPING_POSTALCODE"=> $_POST['shipCP'],
        "CUST_NUM"=> $_POST['cust'],
        "VAR_REF"=> $_POST['varref'],
        "PROD_ID"=> $_POST['prodid'],
        "SUPPLEMENTARY_DATA"=> $_POST['supp']
    );

    // Codificamos en JSON los daots que vamos a enviar
    $datos_string = json_encode($datos);

    // Iniciamos la petición
    $ch = curl_init($url);

    // Indicamos que el método de envío es mediante POST
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");

    // Añadimos los datos datos en formato JSON                                                                  
    curl_setopt($ch, CURLOPT_POSTFIELDS, $datos_string);

    // TRUE para devolver el resultado de la transferencia como string del valor de curl_exec() en lugar de mostrarlo directamente                                                                 
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    // Indicamos en la cabecera que el formato en el que vamos a enviar los datos es en JSON y el tamaño del contenido
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        'Content-Type: application/json',                                                                
        'Content-Length: ' . strlen($datos_string))                                                                
    );

    // Resultado
    $resultado = curl_exec($ch);

    // Decodificamos el resultado
    $enlace = json_decode($resultado);

    // Mostramos el resultado
    print "Enlace = <a target='_blank' href='".$enlace->{'hppPayByLink'}."'>".$enlace->{'hppPayByLink'}."</a>";

?>