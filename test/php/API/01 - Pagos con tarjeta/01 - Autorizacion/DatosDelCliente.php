<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="Víctor Cantera">
        <link rel="icon" href="../../../../assets/img/comercia_ico.png" type="image/x-icon"/ >
        <title>Autorización con datos adicionales (API) - SDK PHP</title>

        <!-- Bootstrap 4.3.1 -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <!-- CSS -->
        <link rel="stylesheet" href="../../../../assets/css/style.css">

        <!-- Script para comprobar los datos de la tarjeta mediante API -->
        <script src="../../../../assets/js/rxp-js.js"></script> <!-- Available at https://github.com/realexpayments -->
    </head>

    <body>
        <!-- NAVBAR -->
        <nav class="navbar navbar-expand-lg navbar-light navbar-rpdc mb-3">
            <a class="navbar-brand">
                <img src="../../../../assets/img/log2.svg" width="30" height="30" class="img-fluid" alt="Logo Addon Payments">
                <span class="addonNav">ADDON</span> <span>PAYMENTS</span>
                <span class="d-none d-sm-none d-lg-inline d-xl-inline sdkNav">
                    <span>
                        /SDK
                        <span class="barraNav">_</span>
                        de
                        <span class="barraNav">_</span>
                        PHP
                    </span>
                </span>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
          </a>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto pl-2 pr-2">
                    <li class="nav-item dropdown">
                        <a class="nav-link pl-2 dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Inicio
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item pl-2" href="../../../../index.php">Índice</a>
                            <a class="dropdown-item pl-2" href="../../../errores.php">Errores de Addon Payments</a>
                            <a class="dropdown-item pl-2" href="../../../informe.html">Convertir informe</a>
                        </div>
                    </li>
                    <li class="nav-item ml-1 dropdown">
                        <a class="nav-link pl-2 dropdown-toggle active" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Pagos con tarjeta
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <div class="dropdown-header text-center p-0">API</div>
                            <hr class="m-0 p-0">
                                <a class="dropdown-item pl-2" href="index.php">Autorización</a>
                                <a class="dropdown-item pl-2 active" href="#">Datos adicionales</a>
                                <a class="dropdown-item pl-2" href="../02%20-%20OTB/index.php">OTB</a>
                                <a class="dropdown-item pl-2" href="../03%20-%20Credit/index.php">Credit</a>
                            <hr class="m-0 p-0">
                            <div class="dropdown-header text-center p-0">HPP</div>
                            <hr class="m-0 p-0">
                                <a class="dropdown-item pl-2" href="../../../HPP/01%20-%20Pagos%20con%20tarjeta/01%20-%20Autorizacion/index.php">Autorización</a>
                                <a class="dropdown-item pl-2" href="../../../HPP/01%20-%20Pagos%20con%20tarjeta/02%20-%20OTB/index.php">OTB</a>
                                <a class="dropdown-item pl-2" href="../../../HPP/01%20-%20Pagos%20con%20tarjeta/03%20-%20Pay%20By%20Link/index.php">Pay By Link</a>
                                <a class="dropdown-item pl-2" href="../../../HPP/01%20-%20Pagos%20con%20tarjeta/04%20-%20Auth%20con%20iframe/index.php">Iframe</a>
                                <a class="dropdown-item pl-2" href="../../../HPP/01%20-%20Pagos%20con%20tarjeta/05%20-%20Lightbox/index.php">Lightbox</a>
                        </div>
                    </li>
                    <li class="nav-item ml-1 dropdown">
                        <a class="nav-link pl-2 dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Almacenamiento de tarjeta
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <div class="dropdown-header text-center p-0">API</div>
                            <hr class="m-0 p-0">
                                <a class="dropdown-item pl-2" href="../../02%20-%20Almacenamiento%20de%20tarjeta/01%20-%20Crear%20un%20cliente/index.php">Crear un cliente</a>
                                <a class="dropdown-item pl-2" href="../../02%20-%20Almacenamiento%20de%20tarjeta/02%20-%20Almacenar%20una%20tarjeta/index.php">Almacenar una tarjeta</a>
                                <a class="dropdown-item pl-2" href="../../02%20-%20Almacenamiento%20de%20tarjeta/03%20-%20Editar%20tarjeta/index.php">Editar tarjetas</a>
                                <a class="dropdown-item pl-2" href="../../02%20-%20Almacenamiento%20de%20tarjeta/04%20-%20Eliminar%20tarjeta/index.php">Eliminar tarjetas</a>
                                <a class="dropdown-item pl-2" href="../../02%20-%20Almacenamiento%20de%20tarjeta/05%20-%20Auth/index.php">Autorización</a>
                                <a class="dropdown-item pl-2" href="../../02%20-%20Almacenamiento%20de%20tarjeta/06%20-%20Credit/index.php">Credit</a>
                                <a class="dropdown-item pl-2" href="../../02%20-%20Almacenamiento%20de%20tarjeta/07%20-%20DCC/index.php">Dynamic Currency Conversion</a>
                            <hr class="m-0 p-0">
                            <div class="dropdown-header text-center p-0">HPP</div>
                            <hr class="m-0 p-0">
                                <a class="dropdown-item pl-2" href="../../../HPP/02%20-%20Almacenamiento%20de%20tarjeta/01%20-%20Crear%20un%20cliente/index.php">Crear un cliente</a>
                                <a class="dropdown-item pl-2" href="../../../HPP/02%20-%20Almacenamiento%20de%20tarjeta/02%20-%20Mostrar%20Tarjetas/index.php">Mostrar tarjetas</a>
                        </div>
                    </li>
                    <li class="nav-item ml-1 dropdown">
                        <a class="nav-link pl-2 dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Gestión de transacciones
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item pl-2" href="../../03%20-%20Gestión%20de%20transacciones/01%20-%20Capturar/index.php">Settle (Capturar)</a>
                            <a class="dropdown-item pl-2" href="../../03%20-%20Gestión%20de%20transacciones/02%20-%20Rebate/index.php">Rebate (Devolución)</a>
                            <a class="dropdown-item pl-2" href="../../03%20-%20Gestión%20de%20transacciones/03%20-%20Void/index.php">Void (Anular transacción)</a>
                        </div>
                    </li>

                    <li class="nav-item ml-1 dropdown">
                        <a class="nav-link pl-2 dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Filtro de fraude
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            
                            <div class="dropdown-header text-center p-0">API</div>
                            <hr class="m-0 p-0">
                                <a class="dropdown-item pl-2"  href="../../05%20-%20Fraud%20Management/01%20-%20Fraud%20Filter/index.php">Filtro de fraude</a>
                                <a class="dropdown-item pl-2"  href="../../05%20-%20Fraud%20Management/02%20-%20Address%20Verification">Verificación de dirección</a>
                                <a class="dropdown-item pl-2"  href="../../05%20-%20Fraud%20Management/03%20-%20Hold">Retener transacción</a>
                                <a class="dropdown-item pl-2"  href="../../05%20-%20Fraud%20Management/04%20-%20Lanzamiento">Lanzar transacción</a>
                            <hr class="m-0 p-0">
                            <div class="dropdown-header text-center p-0">HPP</div>
                            <hr class="m-0 p-0">
                                <a class="dropdown-item pl-2"  href="../../../HPP/03%20-%20Fraud%20Management/01%20-%20Fraud%20Filter/index.php">Filtro de fraude</a>
                        </div>
                    </li>

                    <li class="nav-item ml-1 dropdown">
                        <a class="nav-link pl-2 dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            DCC
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <div class="dropdown-header text-center p-0">API</div>
                            <hr class="m-0 p-0">
                                <a class="dropdown-item pl-2"  href="../../04%20-%20DCC/01%20-%20Comprobar%20DCC/index.php">Comprobar DCC</a>
                            <hr class="m-0 p-0">
                            <div class="dropdown-header text-center p-0">HPP</div>
                            <hr class="m-0 p-0">
                                <a class="dropdown-item pl-2"href="../../../HPP/04%20-%20DCC/index.php">Operación con DCC</a>
                        </div>
                    </li>
                    <li class="nav-item ml-1 dropdown">
                        <a class="nav-link pl-2 dropdown-toggle" href="#" id="06-3DS2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            3DS2
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <div class="dropdown-header text-center p-0">API</div>
                            <hr class="m-0 p-0">
                                <a class="dropdown-item pl-2" href="../../06%20-%203DS2/01%20-%20Autorización/index.html">Autorización</a>
                            <hr class="m-0 p-0">
                            <div class="dropdown-header text-center p-0">HPP</div>
                            <hr class="m-0 p-0">
                                <a class="dropdown-item pl-2" href="../../../HPP/05%20-%203DS2/01%20-%20Autorización/index.html">Autorización</a>
                                <a class="dropdown-item pl-2" href="../../../HPP/05%20-%203DS2/02%20-%20Datos%20adicionales/index.html">Datos adicionales</a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- /NAVBAR -->

        <div class="col-lg-12"> 
            <div id="contenidoComun" class="container-fluid">
                <div class="row">

                    <!-- Menú lateral -->
                    <div class="col-lg-2 sticky-top d-none d-sm-none d-lg-block d-xl-block MenuLateral">

                        <!-- Barra de progreso -->
                        <div class="progress-bar" id="progreso"></div>
                        <!-- /Barra de progreso -->

                        <nav class="navbar sticky-top navbar-light" style="padding: 0px;">
                            <nav class="nav nav-pills flex-column">
                                <a class="nav-link" href="#descripcion">1. Datos adicionales</a>
                                <nav>
                                  <a class="nav-link ml-3 my-1" href="#codigoEjemplo">1.1 Código de ejemplo</a>
                                </nav>
                                <a class="nav-link" href="#descripciones">2. Descripciones</a>
                                <nav class="nav nav-pills flex-column">
                                    <a class="nav-link ml-3 my-1" href="#Customer">2.1 new Customer()</a>
                                    <a class="nav-link ml-3 my-1" href="#Billing">2.2 new Address() - Billing</a>
                                    <a class="nav-link ml-3 my-1" href="#Shipping">2.3 new Address() - Shipping</a>
                                </nav>
                                <a class="nav-link" href="#envioOP">3. Envío de la operación</a>
                                <a class="nav-link" href="#f1">4. Formulario de ejemplo</a>
                                <nav>
                                    <a class="nav-link ml-3 my-1" href="#f2">4.1 Formulario</a>
                                    <a class="nav-link ml-3 my-1" href="#Respuesta">4.2 Respuesta de operación</a>
                                </nav>
                            </nav>
                        </nav>
                    </div>

                    <div class="col-lg-10" >
                    <!-- Col-lg-10 -->
                        <!-- Punto 1 -->
                        <div class="contenedor">
                            <div class="pl-3 pt-3 pr-3 pb-4 mb-3 text-justify">
                                <h3 id="descripcion" class="titulo">
                                    1. Datos adicionales
                                </h3>
                                <hr>

                                <p>
                                    Se pueden enviar los datos de cliente, envío y faturación en la solicitud de autorización. Para ello explicamos en este apartado cada campo, cómo integrarlo y por último un formulario de ejemplo para que puedan realizar pruebas.
                                </p>
                                <p class="alert alert-danger" role="alert">
                                    Recomendamos encarecidamente sanear los datos del titular de la tarjeta antes de enviarla en la solicitud. Por ejemplo, debe comprobar que el número de tarjeta es válido y que la fecha de caducidad es correcta. <a target="_blank" href="https://github.com/globalpayments/rxp-js">Nuestra biblioteca JS</a> contiene un conjunto de funciones útiles que le ayudan a procesar las solicitudes correctamente.
                                    <small class="form-text text-muted">
                                        --> En los ejemplos de esta documentación usamos el fichero de comprobación JS rxp-js.js de RealexPayments. Podrá ver el fichero en la carpeta de "assets/js".
                                    </small>
                                </p>

                                <h5 class="pt-3" id="codigoEjemplo">1.1 Código de ejemplo</h5>
                                
                                <hr>

                                <div class="p-4 panelCode">
                                    <code>
                                        <b>
                                            <span class="etiqueta">&lt;?php</span>
                                        </b>
                                        <br>
                                            <span class="comments">// Imports necesarios para realizar una aturoización</span>
                                        <br>
                                            <span class="require">require_once('<span class="green">vendor/autoload.php</span>');</span>
                                        <br>
                                        <br>
                                            <span class="pl-3 require">use <span class="imports">AddonPayments\Api\ServicesConfig</span>;</span>
                                        <br>
                                            <span class="pl-3 require">use <span class="imports">AddonPayments\Api\ServicesContainer</span>;</span>
                                        <br>
                                            <span class="pl-3 require">use <span class="imports">AddonPayments\Api\Entities\Exceptions\ApiException</span>;</span>
                                        <br>
                                            <span class="pl-3 require">use <span class="imports">AddonPayments\Api\PaymentMethods\CreditCardData</span>;</span>
                                        <br>
                                            <span class="pl-3 require">use <span class="imports">AddonPayments\Api\Entities\Enums\CvnPresenceIndicator</span>;</span>
                                        <br>
                                        <br>
                                            <span class="pl-3 comments">// Importamos las clases necesarias para enviar los datos del cliente</span>
                                        <br>
                                            <span class="pl-3 require">use <span class="imports">AddonPayments\Api\Entities\Address</span>;</span>
                                        <br>
                                            <span class="pl-3 require">use <span class="imports">AddonPayments\Api\Entities\Enums\AddressType</span>;</span>
                                        <br>
                                            <span class="pl-3 require">use <span class="imports">AddonPayments\Api\Entities\Customer</span>;</span>
                                        <br>
                                        <br>
                                            <span class="pl-3 comments">// Configuración del terminal</span>
                                        <br>
                                            <span class="pl-3">$</span><span class="variables">config</span> <span class="require">=</span> <span class="new">new</span> <span class="service">ServicesConfig()</span><span class="require">;</span>
                                        <br>
                                            <span class="pl-3">$</span><span class="variables">config</span><span class="require">-></span><span class="variables">merchantId</span> <span class="require">= "</span><span class="green">Merchant_ID</span><span class="require">";</span>
                                        <br>
                                            <span class="pl-3">$</span><span class="variables">config</span><span class="require">-></span><span class="variables">accountId</span> <span class="require">= "</span><span class="green">Sub_Account</span><span class="require">";</span>
                                        <br>
                                            <span class="pl-3">$</span><span class="variables">config</span><span class="require">-></span><span class="variables">sharedSecret</span> <span class="require">= "</span><span class="green">Shared_Secret</span><span class="require">";</span>
                                        <br>
                                            <span class="pl-3">$</span><span class="variables">config</span><span class="require">-></span><span class="variables">channel</span> <span class="require">= "</span><span class="green">ECOM</span><span class="require">";</span> <span class="comments">// Puede ser MOTO o ECOM según la operativa que quiera realizar</span>
                                        <br>
                                            <span class="pl-3">$</span><span class="variables">config</span><span class="require">-></span><span class="variables">serviceUrl</span> <span class="require">= "</span><span class="green">URL</span><span class="require">";</span>
                                        <br>
                                            <span class="pl-3 service">ServicesContainer</span><span class="configure">::configure</span><span class="require">(</span>$<span class="variables">config</span><span class="require">);</span>
                                        <br>
                                        <br>
                                            <span class="pl-3 comments">// Creamos el objeto tarjeta</span>
                                        <br>
                                            <span class="pl-3">$</span><span class="variables">card</span> <span class="require">=</span> <span class="new">new</span> <span class="service">CreditCardData()</span><span class="require">;</span>
                                        <br>
                                            <span class="pl-3">$</span><span class="variables">card</span><span class="require">-></span><span class="variables">number</span> <span class="require">= "</span><span class="green">4263970000005262</span><span class="require">";</span>
                                        <br>
                                            <span class="pl-3">$</span><span class="variables">card</span><span class="require">-></span><span class="variables">expMonth</span> <span class="require">= "</span><span class="green">12</span><span class="require">";</span>
                                        <br>
                                            <span class="pl-3">$</span><span class="variables">card</span><span class="require">-></span><span class="variables">expYear</span> <span class="require">= "</span><span class="green">2025</span><span class="require">";</span>
                                        <br>
                                            <span class="pl-3">$</span><span class="variables">card</span><span class="require">-></span><span class="variables">cvn</span> <span class="require">= "</span><span class="green">123</span><span class="require">";</span>
                                        <br>
                                            <span class="pl-3">$</span><span class="variables">card</span><span class="require">-></span><span class="variables">cvnPresenceIndicator</span> <span class="require">=</span> <span class="service">CvnPresenceIndicator</span><span class="require">::PRESENT;</span>
                                        <br>
                                            <span class="pl-3">$</span><span class="variables">card</span><span class="require">-></span><span class="variables">cardHolderName</span> <span class="require">= "</span><span class="green">Christian González</span><span class="require">";</span>
                                        <br>
                                        <br>
                                            <span class="pl-3 comments">// Creamos el objeto cliente</span>
                                        <br>
                                            <span class="pl-3">$</span><span class="variables">customer</span> <span class="require">=</span> <span class="new">new</span> <span class="service">Customer()</span><span class="require">;</span>
                                        <br>
                                            <span class="pl-3">$</span><span class="variables">customer</span><span class="require">-></span><span class="variables">firstName</span> <span class="require">= "</span><span class="green">Nombre de facturación</span><span class="require">";</span>
                                        <br>
                                            <span class="pl-3">$</span><span class="variables">customer</span><span class="require">-></span><span class="variables">lastName</span> <span class="require">= "</span><span class="green">Apellido de facturación</span><span class="require">";</span>
                                        <br>
                                            <span class="pl-3">$</span><span class="variables">customer</span><span class="require">-></span><span class="variables">dateOfBirth</span> <span class="require">= "</span><span class="green">01/02/1994</span><span class="require">";</span>
                                        <br>
                                            <span class="pl-3">$</span><span class="variables">customer</span><span class="require">-></span><span class="variables">customerPassword</span> <span class="require">= "</span><span class="green">Password del cliente</span><span class="require">";</span>
                                        <br>
                                            <span class="pl-3">$</span><span class="variables">customer</span><span class="require">-></span><span class="variables">email</span> <span class="require">= "</span><span class="green">soporte@addonpayments.com</span><span class="require">";</span>
                                        <br>
                                            <span class="pl-3">$</span><span class="variables">customer</span><span class="require">-></span><span class="variables">domainName</span> <span class="require">= "</span><span class="green">https://addonpayments.com</span><span class="require">";</span>
                                        <br>
                                            <span class="pl-3">$</span><span class="variables">customer</span><span class="require">-></span><span class="variables">homePhone</span> <span class="require">= "</span><span class="green">914353028</span><span class="require">";</span>
                                        <br>
                                            <span class="pl-3">$</span><span class="variables">customer</span><span class="require">-></span><span class="variables">deviceFingerPrint</span> <span class="require">= "</span><span class="green">Huella digital</span><span class="require">";</span>
                                        <br>
                                        <br>
                                            <span class="pl-3 comments">// Datos de facturación</span>
                                        <br>
                                            <span class="pl-3">$</span><span class="variables">billingAddress</span> <span class="require">=</span> <span class="new">new</span> <span class="service">Address()</span><span class="require">;</span>
                                        <br>
                                            <span class="pl-3">$</span><span class="variables">billingAddress</span><span class="require">-></span><span class="variables">streetAddress1</span> <span class="require">= "</span><span class="green">Dirección de facturación 1</span><span class="require">";</span>
                                        <br>
                                            <span class="pl-3">$</span><span class="variables">billingAddress</span><span class="require">-></span><span class="variables">streetAddress2</span> <span class="require">= "</span><span class="green">Dirección de facturación 2</span><span class="require">";</span>
                                        <br>
                                            <span class="pl-3">$</span><span class="variables">billingAddress</span><span class="require">-></span><span class="variables">streetAddress3</span> <span class="require">= "</span><span class="green">Dirección de facturación 3</span><span class="require">";</span>
                                        <br>
                                            <span class="pl-3">$</span><span class="variables">billingAddress</span><span class="require">-></span><span class="variables">city</span> <span class="require">= "</span><span class="green">Ciudad</span><span class="require">";</span>
                                        <br>
                                            <span class="pl-3">$</span><span class="variables">billingAddress</span><span class="require">-></span><span class="variables">province</span> <span class="require">= "</span><span class="green">Provincia</span><span class="require">";</span>
                                        <br>
                                            <span class="pl-3">$</span><span class="variables">billingAddress</span><span class="require">-></span><span class="variables">state</span> <span class="require">= "</span><span class="green">País</span><span class="require">";</span>
                                        <br>
                                            <span class="pl-3">$</span><span class="variables">billingAddress</span><span class="require">-></span><span class="variables">postalCode</span> <span class="require">= "</span><span class="green">Código Postal</span><span class="require">";</span>
                                        <br>
                                            <span class="pl-3">$</span><span class="variables">billingAddress</span><span class="require">-></span><span class="variables">country</span> <span class="require">= "</span><span class="green">ISO del país (ES, GB, US...)</span><span class="require">";</span>
                                        <br>
                                        <br>
                                            <span class="pl-3 comments">// Datos de envío</span>
                                        <br>
                                            <span class="pl-3">$</span><span class="variables">shippingAddress</span> <span class="require">=</span> <span class="new">new</span> <span class="service">Address()</span><span class="require">;</span>
                                        <br>
                                            <span class="pl-3">$</span><span class="variables">shippingAddress</span><span class="require">-></span><span class="variables">streetAddress1</span> <span class="require">= "</span><span class="green">Dirección de envío 1</span><span class="require">";</span>
                                        <br>
                                            <span class="pl-3">$</span><span class="variables">shippingAddress</span><span class="require">-></span><span class="variables">streetAddress2</span> <span class="require">= "</span><span class="green">Dirección de envío 2</span><span class="require">";</span>
                                        <br>
                                            <span class="pl-3">$</span><span class="variables">shippingAddress</span><span class="require">-></span><span class="variables">streetAddress3</span> <span class="require">= "</span><span class="green">Dirección de envío 3</span><span class="require">";</span>
                                        <br>
                                            <span class="pl-3">$</span><span class="variables">shippingAddress</span><span class="require">-></span><span class="variables">city</span> <span class="require">= "</span><span class="green">Ciudad</span><span class="require">";</span>
                                        <br>
                                            <span class="pl-3">$</span><span class="variables">shippingAddress</span><span class="require">-></span><span class="variables">province</span> <span class="require">= "</span><span class="green">Provincia</span><span class="require">";</span>
                                        <br>
                                            <span class="pl-3">$</span><span class="variables">shippingAddress</span><span class="require">-></span><span class="variables">state</span> <span class="require">= "</span><span class="green">País</span><span class="require">";</span>
                                        <br>
                                            <span class="pl-3">$</span><span class="variables">shippingAddress</span><span class="require">-></span><span class="variables">postalCode</span> <span class="require">= "</span><span class="green">Código Postal</span><span class="require">";</span>
                                        <br>
                                            <span class="pl-3">$</span><span class="variables">shippingAddress</span><span class="require">-></span><span class="variables">country</span> <span class="require">= "</span><span class="green">ISO del país (ES, GB, US...)</span><span class="require">";</span>
                                        <br>
                                        <br>
                                            <span class="pl-3 comments">// Lanzamos la petición al servidor de Addon Payments</span>
                                        <br>
                                            <span class="pl-3 new">try</span><span class="require"> {</span>
                                        <br>
                                            <span class="pl-4">$</span><span class="variables">response</span> <span class="require">=</span> $<span class="variables">card</span><span class="require">-></span><span class="configure">charge</span><span class="require">(</span><span class="variables">20</span><span class="require">)</span>
                                        <br>
                                            <span class="pl-5 require">-></span><span class="configure">withCurrency</span><span class="require">("</span><span class="green">EUR</span><span class="require">")</span>
                                        <br>
                                            <span class="pl-5 require">-></span><span class="configure">withAddress</span><span class="require">(</span>$<span class="variables">billingAddress</span><span class="require">, </span><span class="service">AddressType</span><span class="require">::BILLING)</span>
                                        <br>
                                            <span class="pl-5 require">-></span><span class="configure">withAddress</span><span class="require">(</span>$<span class="variables">shippingAddress</span><span class="require">, </span><span class="service">AddressType</span><span class="require">::BILLING)</span>
                                        <br>
                                            <span class="pl-5 require">-></span><span class="configure">withCustomerData</span><span class="require">(</span>$<span class="variables">customer</span><span class="require">)</span>
                                        <br>
                                            <span class="pl-5 require">-></span><span class="configure">execute</span><span class="require">(</span><span class="require">);</span>
                                        <br>
                                        <br>
                                            <span class="comments pl-4">// Obtenemos la respuesta y la mostramos</span>
                                        <br>
                                            <span class="pl-4 require">echo "</span><span class="green">Resultado == </span><span class="require">".</span>$<span class="variables">result</span> <span class="require">=</span> $<span class="variables">response</span><span class="require">-></span><span class="variables">responseCode</span><span class="require">."</span><span class="green"><</span><span class="green">br></span><span class="require">";</span> <span class="comments">// 00 == Success</span>
                                        <br>
                                            <span class="pl-4 require">echo "</span><span class="green">Mensaje == </span><span class="require">".</span>$<span class="variables">message</span> <span class="require">=</span> $<span class="variables">response</span><span class="require">-></span><span class="variables">responseMessage</span><span class="require">."</span><span class="green"><</span><span class="green">br></span><span class="require">";</span> <span class="comments">// [ test system ] AUTHORISED</span>
                                        <br>
                                            <span class="pl-4 require">echo "</span><span class="green">Order ID == </span><span class="require">".</span>$<span class="variables">orderId</span> <span class="require">=</span> $<span class="variables">response</span><span class="require">-></span><span class="variables">orderId</span><span class="require">."</span><span class="green"><</span><span class="green">br></span><span class="require">";</span> <span class="comments">// Order ID de la transacción</span>
                                        <br>
                                            <span class="pl-4 require">echo "</span><span class="green">Código de autorización == </span><span class="require">".</span>$<span class="variables">authCode</span> <span class="require">=</span> $<span class="variables">response</span><span class="require">-></span><span class="variables">authorizationCode</span><span class="require">."</span><span class="green"><</span><span class="green">br></span><span class="require">";</span> <span class="comments">// Código de autorización</span>
                                        <br>
                                            <span class="pl-4 require">echo "</span><span class="green">Transaction ID (PasRef) == </span><span class="require">".</span>$<span class="variables">paymentsReference</span> <span class="require">=</span> $<span class="variables">response</span><span class="require">-></span><span class="variables">transactionId</span><span class="require">;</span> <span class="comments">// Identificador de transacción (PASREF)</span>
                                        <br>
                                        <br>
                                            <span class="pl-3 require">}</span><span class="new"> catch</span> (<span class="service">ApiException</span> $<span class="variables">e</span>) <span class="require">{</span>
                                        <br>
                                            <span class="pl-3 comments pl-4">// Añada aquí su tratamiento de errores</span>
                                        <br>
                                            <span class="pl-4 configure">echo</span> $<span class="variables">e</span><span class="require">-></span><span class="configure">getMessage</span><span class="require">();</span>
                                        <br>
                                            <span class="pl-3 require">}</span>
                                        <br>
                                        <br>
                                        <b>
                                            <span class="etiqueta">?&gt;</span>
                                        </b>
                                    </code>
                                </div>
                            </div>
                        </div>
                        <!-- /Punto 1 -->

                        <!-- Punto 2 -->
                        <div class="contenedor">
                            <div class="pl-3 pt-3 pr-3 pb-1 mb-3 text-justify">
                                <h3 class="pt-1" id="descripciones">
                                    2. Descripciones
                                </h3>

                               <hr>
                               
                               <h5 id="Customer">2.1 new Customer() <small>Opcional</small></h5>
                                    <p>
                                        Los datos del cliente se asignan a las variables del objeto "$customer". Para crear el objeto debemos llamar a la función "new Customer()".
                                    </p>
                                    <small class="form-text text-muted alert alert-danger">
                                        --&gt;Las siguientes campos son opcionales y no bloquean la operativa en caso de no enviarse
                                    </small>
                                    <ul>
                                        <li>
                                           <span class="arrow">-></span><span class="variableBgW">firstName</span> = Nombre
                                        </li>
                                        <li>
                                           <span class="arrow">-></span><span class="variableBgW">lastName</span> = Apellidos
                                        </li>
                                        <li>
                                          <span class="arrow">-></span><span class="variableBgW">dateOfBirth</span> = Cumpleaños
                                        </li>
                                        <li>
                                           <span class="arrow">-></span><span class="variableBgW">customerPassword</span> = Contraseña
                                        </li>
                                        <li>
                                           <span class="arrow">-></span><span class="variableBgW">email</span> = Email
                                        </li>
                                        <li>
                                           <span class="arrow">-></span><span class="variableBgW">domainName</span> = Página web del cliente
                                        </li>
                                        <li>
                                           <span class="arrow">-></span><span class="variableBgW">homePhone</span> = Teléfono del cliente
                                        </li>
                                        <li>
                                           <span class="arrow">-></span><span class="variableBgW">deviceFingerPrint</span> = Huella digital en caso de que la hubiera
                                        </li>
                                    </ul>
                                    <div class="p-4 mb-4 panelCode">
                                        <code>
                                            <b>
                                               <span class="etiqueta">&lt;?php</span>
                                            </b>
                                            <br>
                                                <span class="pl-3 comments">// Creamos el objeto cliente</span>
                                            <br>
                                                <span class="pl-3">$</span><span class="variables">customer</span> <span class="require">=</span> <span class="new">new</span> <span class="service">Customer()</span><span class="require">;</span>
                                            <br>
                                                <span class="pl-3">$</span><span class="variables">customer</span><span class="require">-></span><span class="variables">firstName</span> <span class="require">= "</span><span class="green">Nombre de facturación</span><span class="require">";</span>
                                            <br>
                                                <span class="pl-3">$</span><span class="variables">customer</span><span class="require">-></span><span class="variables">lastName</span> <span class="require">= "</span><span class="green">Apellido de facturación</span><span class="require">";</span>
                                            <br>
                                                <span class="pl-3">$</span><span class="variables">customer</span><span class="require">-></span><span class="variables">dateOfBirth</span> <span class="require">= "</span><span class="green">01/02/1994</span><span class="require">";</span>
                                            <br>
                                                <span class="pl-3">$</span><span class="variables">customer</span><span class="require">-></span><span class="variables">customerPassword</span> <span class="require">= "</span><span class="green">Password del cliente</span><span class="require">";</span>
                                            <br>
                                                <span class="pl-3">$</span><span class="variables">customer</span><span class="require">-></span><span class="variables">email</span> <span class="require">= "</span><span class="green">soporte@addonpayments.com</span><span class="require">";</span>
                                            <br>
                                                <span class="pl-3">$</span><span class="variables">customer</span><span class="require">-></span><span class="variables">domainName</span> <span class="require">= "</span><span class="green">https://addonpayments.com</span><span class="require">";</span>
                                            <br>
                                                <span class="pl-3">$</span><span class="variables">customer</span><span class="require">-></span><span class="variables">homePhone</span> <span class="require">= "</span><span class="green">914353028</span><span class="require">";</span>
                                            <br>
                                                <span class="pl-3">$</span><span class="variables">customer</span><span class="require">-></span><span class="variables">deviceFingerPrint</span> <span class="require">= "</span><span class="green">Huella digital</span><span class="require">";</span>
                                           <br>
                                           <br>
                                           <b>
                                               <span class="etiqueta">?&gt;</span>
                                           </b>
                                       </code>
                                   </div>

                                <hr>
                                
                                <h5 id="Billing">2.2 new Address() - Billing <small>Opcional</small></h5>
                                    <p>
                                        Los datos de facturación se asignan a las variables del objeto "$billingAddress". Para crear el objeto debemos llamar a la función "new Address()".
                                    </p>
                                    <small class="form-text text-muted alert alert-danger">
                                        --&gt;Las siguientes campos son opcionales y no bloquean la operativa en caso de no enviarse
                                    </small>
                                    <ul>
                                        <li>
                                            <span class="arrow">-></span><span class="variableBgW">streetAddress1</span> = Dirección de facturación 1
                                        </li>
                                        <li>
                                            <span class="arrow">-></span><span class="variableBgW">streetAddress2</span> = Dirección de facturación 2
                                        </li>
                                        <li>
                                           <span class="arrow">-></span><span class="variableBgW">streetAddress3</span> = Dirección de facturación 3
                                        </li>
                                        <li>
                                            <span class="arrow">-></span><span class="variableBgW">city</span> = Ciudad
                                        </li>
                                        <li>
                                            <span class="arrow">-></span><span class="variableBgW">province</span> = Provincia
                                        </li>
                                        <li>
                                            <span class="arrow">-></span><span class="variableBgW">state</span> = País
                                        </li>
                                        <li>
                                            <span class="arrow">-></span><span class="variableBgW">postalCode</span> = Código Postal
                                        </li>
                                        <li>
                                            <span class="arrow">-></span><span class="variableBgW">country</span> = ISO del país de facturación
                                        </li>
                                    </ul>
                                    <div class="p-4 mb-4 panelCode">
                                        <code>
                                            <b>
                                                <span class="etiqueta">&lt;?php</span>
                                            </b>
                                            <br>
                                                <span class="pl-3 comments">// Datos de facturación</span>
                                            <br>
                                                <span class="pl-3">$</span><span class="variables">billingAddress</span> <span class="require">=</span> <span class="new">new</span> <span class="service">Address()</span><span class="require">;</span>
                                            <br>
                                                <span class="pl-3">$</span><span class="variables">billingAddress</span><span class="require">-></span><span class="variables">streetAddress1</span> <span class="require">= "</span><span class="green">Dirección de facturación 1</span><span class="require">";</span>
                                            <br>
                                                <span class="pl-3">$</span><span class="variables">billingAddress</span><span class="require">-></span><span class="variables">streetAddress2</span> <span class="require">= "</span><span class="green">Dirección de facturación 2</span><span class="require">";</span>
                                            <br>
                                                <span class="pl-3">$</span><span class="variables">billingAddress</span><span class="require">-></span><span class="variables">streetAddress3</span> <span class="require">= "</span><span class="green">Dirección de facturación 3</span><span class="require">";</span>
                                            <br>
                                                <span class="pl-3">$</span><span class="variables">billingAddress</span><span class="require">-></span><span class="variables">city</span> <span class="require">= "</span><span class="green">Ciudad</span><span class="require">";</span>
                                            <br>
                                                <span class="pl-3">$</span><span class="variables">billingAddress</span><span class="require">-></span><span class="variables">province</span> <span class="require">= "</span><span class="green">Provincia</span><span class="require">";</span>
                                            <br>
                                                <span class="pl-3">$</span><span class="variables">billingAddress</span><span class="require">-></span><span class="variables">state</span> <span class="require">= "</span><span class="green">País</span><span class="require">";</span>
                                            <br>
                                                <span class="pl-3">$</span><span class="variables">billingAddress</span><span class="require">-></span><span class="variables">postalCode</span> <span class="require">= "</span><span class="green">Código Postal</span><span class="require">";</span>
                                            <br>
                                                <span class="pl-3">$</span><span class="variables">billingAddress</span><span class="require">-></span><span class="variables">country</span> <span class="require">= "</span><span class="green">ISO del país (ES, GB, US...)</span><span class="require">";</span>
                                            <br>
                                            <br>
                                            <b>
                                                <span class="etiqueta">?&gt;</span>
                                            </b>
                                        </code>
                                    </div>

                                <hr>
                                
                                <h5 id="Shipping">2.3 new Address() - Shipping <small>Opcional</small></h5>
                                    <p>
                                        Los datos de envío se asignan a las variables del objeto "$shippingAddress". Para crear el objeto debemos llamar a la función "new Address()".
                                    </p>
                                    <small class="form-text text-muted alert alert-danger">
                                        --&gt;Las siguientes campos son opcionales y no bloquean la operativa en caso de no enviarse
                                    </small>
                                    <ul>
                                        <li>
                                            <span class="arrow">-></span><span class="variableBgW">streetAddress1</span> = Dirección de envío 1
                                        </li>
                                        <li>
                                            <span class="arrow">-></span><span class="variableBgW">streetAddress2</span> = Dirección de envío 2
                                        </li>
                                        <li>
                                           <span class="arrow">-></span><span class="variableBgW">streetAddress3</span> = Dirección de envío 3
                                        </li>
                                        <li>
                                            <span class="arrow">-></span><span class="variableBgW">city</span> = Ciudad
                                        </li>
                                        <li>
                                            <span class="arrow">-></span><span class="variableBgW">province</span> = Provincia
                                        </li>
                                        <li>
                                            <span class="arrow">-></span><span class="variableBgW">state</span> = País
                                        </li>
                                        <li>
                                            <span class="arrow">-></span><span class="variableBgW">postalCode</span> = Código Postal
                                        </li>
                                        <li>
                                            <span class="arrow">-></span><span class="variableBgW">country</span> = ISO del país de envío
                                        </li>
                                    </ul>
                                    <div class="p-4 mb-4 panelCode">
                                        <code>
                                            <b>
                                                <span class="etiqueta">&lt;?php</span>
                                            </b>
                                            <br>
                                                <span class="pl-3 comments">// Datos de envío</span>
                                            <br>
                                                <span class="pl-3">$</span><span class="variables">shippingAddress</span> <span class="require">=</span> <span class="new">new</span> <span class="service">Address()</span><span class="require">;</span>
                                            <br>
                                                <span class="pl-3">$</span><span class="variables">shippingAddress</span><span class="require">-></span><span class="variables">streetAddress1</span> <span class="require">= "</span><span class="green">Dirección de envío 1</span><span class="require">";</span>
                                            <br>
                                                <span class="pl-3">$</span><span class="variables">shippingAddress</span><span class="require">-></span><span class="variables">streetAddress2</span> <span class="require">= "</span><span class="green">Dirección de envío 2</span><span class="require">";</span>
                                            <br>
                                                <span class="pl-3">$</span><span class="variables">shippingAddress</span><span class="require">-></span><span class="variables">streetAddress3</span> <span class="require">= "</span><span class="green">Dirección de envío 3</span><span class="require">";</span>
                                            <br>
                                                <span class="pl-3">$</span><span class="variables">shippingAddress</span><span class="require">-></span><span class="variables">city</span> <span class="require">= "</span><span class="green">Ciudad</span><span class="require">";</span>
                                            <br>
                                                <span class="pl-3">$</span><span class="variables">shippingAddress</span><span class="require">-></span><span class="variables">province</span> <span class="require">= "</span><span class="green">Provincia</span><span class="require">";</span>
                                            <br>
                                                <span class="pl-3">$</span><span class="variables">shippingAddress</span><span class="require">-></span><span class="variables">state</span> <span class="require">= "</span><span class="green">País</span><span class="require">";</span>
                                            <br>
                                                <span class="pl-3">$</span><span class="variables">shippingAddress</span><span class="require">-></span><span class="variables">postalCode</span> <span class="require">= "</span><span class="green">Código Postal</span><span class="require">";</span>
                                            <br>
                                                <span class="pl-3">$</span><span class="variables">shippingAddress</span><span class="require">-></span><span class="variables">country</span> <span class="require">= "</span><span class="green">ISO del país (ES, GB, US...)</span><span class="require">";</span>
                                            <br>
                                            <br>
                                            <b>
                                                <span class="etiqueta">?&gt;</span>
                                            </b>
                                        </code>
                                    </div>

                            </div>
                        </div>            

                        <div class="contenedor">
                            <div class="pl-3 pt-3 pr-3 text-justify">
                                <h5 id="envioOP" class="pt-1">
                                    3. Envío de la operación
                                </h5>

                                <p>
                                    Para enviar la operación debemos emplear el modelo de excepciones "try - catch". 
                                    <small class="form-text text-muted alert alert-primary">
                                        --&gt;Para obtener más información sobre la excepción de "try - catch" puede ver la <a target="_blank" href="https://www.php.net/manual/es/language.exceptions.php">documentación oficial de PHP.</a>
                                    </small>
                                </p>
                                <ul>
                                    <li>
                                        Llamamos al objeto "$card" e indicamos el importe que queremos cargar: 
                                        <span class="arrow">$</span><span class="variableBgW">card</span>
                                        <span class="arrow">->charge(</span><span class="variableBgW">20</span><span class="arrow">)</span>
                                    </li>
                                    <li>
                                        Llamamos al objeto que contiene la información de facturación:
                                        <span class="arrow">->withAddress($</span><span class="variableBgW">billingAddress</span><span class="arrow">, AddressType::BILLING)</span>
                                    </li>
                                    <li>
                                        Llamamos al objeto que contiene la información de envío:
                                        <span class="arrow">->withAddress($</span><span class="variableBgW">shippingAddress</span><span class="arrow">, AddressType::BILLING)</span>
                                    </li>
                                    <li>
                                        Llamamos al objeto que contiene la información del cliente:
                                        <span class="arrow">->withCustomerData($</span><span class="variableBgW">customer</span><span class="arrow">)</span>
                                    </li>
                                    <li>
                                        Enviamos objeto que contiene los comentarios:
                                        <span class="arrow">->withCustomData($</span><span class="variableBgW">custom</span><span class="arrow">)</span>
                                    </li>
                                    <li>
                                        Por último, enviamos la petición:
                                        <span class="arrow">->execute()</span>
                                    </li>
                                </ul>
                                <div class="p-4 mb-4 panelCode">
                                    <code>
                                        <b>
                                            <span class="etiqueta">&lt;?php</span>
                                        </b>
                                        <br>
                                        <br>
                                            <span class="pl-3 new">try</span><span class="require"> {</span>
                                        <br>
                                            <span class="pl-4">$</span><span class="variables">response</span> <span class="require">=</span> $<span class="variables">card</span><span class="require">-></span><span class="configure">charge</span><span class="require">(</span><span class="variables">20</span><span class="require">)</span> <span class="comments">// En este ejemplo vamos a realizar un cargo con un importe de 20€</span>
                                        <br>
                                            <span class="pl-5 require">-></span><span class="configure">withCurrency</span><span class="require">("</span><span class="green">EUR</span><span class="require">")</span> <span class="comments">// Indicamos la moneda de la operación</span>
                                        <br>
                                            <span class="pl-5 require">-></span><span class="configure">withAddress</span><span class="require">(</span>$<span class="variables">billingAddress</span><span class="require">, </span><span class="service">AddressType</span><span class="require">::BILLING)</span> <span class="comments">// Objeto de los datos de facturación</span>
                                        <br>
                                            <span class="pl-5 require">-></span><span class="configure">withAddress</span><span class="require">(</span>$<span class="variables">shippingAddress</span><span class="require">, </span><span class="service">AddressType</span><span class="require">::BILLING)</span> <span class="comments">// Objeto de los datos de envío</span>
                                        <br>
                                            <span class="pl-5 require">-></span><span class="configure">withCustomerData</span><span class="require">(</span>$<span class="variables">customer</span><span class="require">)</span> <span class="comments">// Objeto de los datos del cliente</span>
                                        <br>
                                            <span class="pl-5 require">-></span><span class="configure">withCustomData</span><span class="require">(</span>$<span class="variables">custom</span><span class="require">)</span> <span class="comments">// Objeto de los campos personalizados</span>
                                        <br>
                                            <span class="pl-5 require">-></span><span class="configure">execute</span><span class="require">(</span><span class="require">);</span> <span class="comments">// Ejecutamos la operación</span>
                                        <br>
                                        <br>
                                            <span class="comments pl-4">// Obtenemos la respuesta y la mostramos</span>
                                        <br>
                                            <span class="pl-4 require">echo "</span><span class="green">Resultado == </span><span class="require">".</span>$<span class="variables">result</span> <span class="require">=</span> $<span class="variables">response</span><span class="require">-></span><span class="variables">responseCode</span><span class="require">."</span><span class="green"><</span><span class="green">br></span><span class="require">";</span> <span class="comments">// 00 == Success</span>
                                        <br>
                                            <span class="pl-4 require">echo "</span><span class="green">Mensaje == </span><span class="require">".</span>$<span class="variables">message</span> <span class="require">=</span> $<span class="variables">response</span><span class="require">-></span><span class="variables">responseMessage</span><span class="require">."</span><span class="green"><</span><span class="green">br></span><span class="require">";</span> <span class="comments">// [ test system ] AUTHORISED</span>
                                        <br>
                                            <span class="pl-4 require">echo "</span><span class="green">Order ID == </span><span class="require">".</span>$<span class="variables">orderId</span> <span class="require">=</span> $<span class="variables">response</span><span class="require">-></span><span class="variables">orderId</span><span class="require">."</span><span class="green"><</span><span class="green">br></span><span class="require">";</span> <span class="comments">// Order ID de la transacción</span>
                                        <br>
                                            <span class="pl-4 require">echo "</span><span class="green">Código de autorización == </span><span class="require">".</span>$<span class="variables">authCode</span> <span class="require">=</span> $<span class="variables">response</span><span class="require">-></span><span class="variables">authorizationCode</span><span class="require">."</span><span class="green"><</span><span class="green">br></span><span class="require">";</span> <span class="comments">// Código de autorización</span>
                                        <br>
                                            <span class="pl-4 require">echo "</span><span class="green">Transaction ID (PasRef) == </span><span class="require">".</span>$<span class="variables">paymentsReference</span> <span class="require">=</span> $<span class="variables">response</span><span class="require">-></span><span class="variables">transactionId</span><span class="require">;</span> <span class="comments">// Identificador de transacción (PASREF)</span>
                                        <br>
                                        <br>
                                            <span class="pl-3 require">}</span><span class="new"> catch</span> (<span class="service">ApiException</span> $<span class="variables">e</span>) <span class="require">{</span>
                                        <br>
                                            <span class="comments pl-4">// Añada aquí su tratamiento de errores</span>
                                        <br>
                                            <span class="pl-4 configure">echo</span> $<span class="variables">e</span><span class="require">-></span><span class="configure">getMessage</span><span class="require">();</span>
                                        <br>
                                            <span class="pl-3 require">}</span>
                                        <br>
                                        <br>
                                        <b>
                                            <span class="etiqueta">?&gt;</span>
                                        </b>
                                    </code>
                                </div>
                                <p class="pb-4">
                                    Para la respuesta realizamos un <span class="arrow">echo</span> de la función "<span class="arrow">getMessage()</span>".
                                <br>
                                <br>
                                    Con esta función obtenemos el motivo de la denegación del servidor. Para ver todos los errores de denegación actualizados, puede comprobar nuestra <a target="_blank" href="https://desarrolladores.addonpayments.com/#!/technical-resources/messages">documentación de Addon Payments.</a>
                                </p>
                            </div>
                        </div>
                        <!-- /Punto 2 -->

                        <!-- Punto 3 -->
                        <div class="contenedor">
                            <div class="pl-3 pt-3 pr-3 text-justify">  
                                <h3 class="pt-1" id="f1">
                                    4. Formulario de ejemplo
                                </h3>

                                <hr>

                                <p>
                                    Para poder procesar la transacción con el formulario de ejemplo, debe modificar el archivo "AuthorizationShipBill.php" que se encuentra en la ruta "vendor\addonpayments\php-sdk\test\php\API\01 - Pagos con tarjeta\01 - Autorización".
                                </p>

                                <p>
                                    Debe introducir sus datos de configuración tal y como se muestra en el punto 2.2 de la guía "Autorización".
                                </p>

                                <hr>
                                <h5 id="f2" class="mt-3">4.1 Formulario</h5>

                                <p>
                                    El siguiente formulario le permite enviar una operación contra el entorno de pruebas de Addon Payments introduciendo los datos adicionales del usuario.
                                </p>

                                <form id="formulario_envio" method="POST" autocomplete="off" class="col-lg-12" action="AuthorizationShipBill.php">
                                <!-- Caja 1 -->
                                <div class="row justify-content-around formulario">

                                    <!-- Datos del pagador-->
                                        <div class="col-lg-4">
                                            <div class="row">
                                                <div class="col-lg-12" >
                                                    <h4 class="pt-2">Datos del pagador</h4>

                                                    <div class="form-row">
                                                        <div class="form-group col-md-6">
                                                            <label for="firstName">Nombre</label>
                                                            <input type="text" class="form-control" id="firstName" name="firstName" placeholder="Nombre" required/>
                                                        </div>
                                                        <div class="form-group col-md-6">
                                                            <label for="lastname">Apellidos</label>
                                                            <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Apellidos" required/>
                                                        </div>
                                                    </div>
                                                    <div class="form-row">
                                                        <div class="form-group col-md-6">
                                                            <label for="birthday">Cumpleaños</label>
                                                            <input type="date" class="form-control" id="birthday" name="birthday" placeholder="01021994" required/>
                                                        </div>
                                                        <div class="form-group col-md-6">
                                                            <label for="tlf">Teléfono</label>
                                                            <input type="tel" class="form-control" id="tlf" name="tlf" value="123456789" />
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="email">Email</label>
                                                        <input type="email" class="form-control" id="customerEmail" name="customerEmail" value="email@ejemplo.com" />
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="customerDomain">Dominio web</label>
                                                        <input type="text" class="form-control" id="customerDomain" name="customerDomain" value="https://www.ejemplo.es" />
                                                    </div>
                                                    <!-- Campos hidden -->
                                                    <input type="hidden" id="customerPassword" name="customerPassword" value="passwordDelCliente" />
                                                    <input type="hidden" id="deviceFingerPrint" name="deviceFingerPrint" value="Huella del dispositivo" />
                                                </div>
                                            </div>
                                        </div>
                                    <!-- /Datos del pagador-->

                                    <!-- Datos del facturación-->
                                        <div class="col-lg-4 pl-lg-4">
                                            <div class="row">
                                                <div class="col-lg-12 mt-2">
                                                    <h4 class="pt-2">Datos de facturación</h4>

                                                    <div class="form-group">
                                                        <label for="direccion1B">Dirección 1 de facturación</label>
                                                        <input type="text" class="form-control" id="direccion1B" name="direccion1B" value="Los Preciados 123" />
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="direccion2B">Dirección 2 de facturación</label>
                                                        <input type="text" class="form-control" id="direccion2B" name="direccion2B" value="Plaza Catalunya 456" />
                                                    </div>

                                                    <div class="form-row">
                                                        <div class="form-group col-md-8">
                                                            <label for="direccion3B">Dirección 3 de facturación</label>
                                                            <input type="text" class="form-control" id="direccion3B" name="direccion3B" value="Sótano" />
                                                        </div>
                                                        <div class="form-group col-md-4">
                                                            <label for="paisB">País</label>
                                                            <input type="text" class="form-control" id="paisB" name="paisB" value="España" />
                                                            <input type="hidden" id="paisIsoB" name="paisIsoB" value="ES" />
                                                        </div>
                                                    </div>

                                                    <div class="form-row">
                                                        <div class="form-group col-md-4">
                                                            <label for="ciudadB">Ciudad</label>
                                                            <input type="text" class="form-control" id="ciudadB" name="ciudadB" value="Elche" />
                                                        </div>
                                                        <div class="form-group col-md-4">
                                                            <label for="provinciaB">Provincia</label>
                                                            <input type="text" class="form-control" id="provinciaB" name="provinciaB" value="Alicante" />
                                                        </div>
                                                        <div class="form-group col-md-4">
                                                            <label for="cpB">Código Postal</label>
                                                            <input type="text" class="form-control" id="cpB" name="cpB" value="03201" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <!-- /Datos del facturación-->

                                    <!-- Datos del envío-->
                                        <div class="col-lg-4 pl-lg-4">
                                            <div class="row">
                                                <div class="col-lg-12 mt-2">

                                                <h4 class="pt-2">Datos de envío</h4>
                                                
                                                    <div class="form-group">
                                                        <label for="direccion1S">Dirección 1 de envío</label>
                                                        <input type="text" class="form-control" id="direccion1S" name="direccion1S" value="Envío 123" />
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="direccion2S">Dirección 2 de envío</label>
                                                        <input type="text" class="form-control" id="direccion2S" name="direccion2S" value="Envío 456" />
                                                    </div>
                                                    <div class="form-row">
                                                        <div class="form-group col-md-8">
                                                            <label for="direccion3S">Dirección 3 de envío</label>
                                                            <input type="text" class="form-control" id="direccion3S" name="direccion3S" value="Azotea" />
                                                        </div>
                                                        <div class="form-group col-md-4">
                                                            <label for="paisS">País</label>
                                                            <input type="text" class="form-control" id="paisS" name="paisS" value="España" />
                                                            <input type="hidden" id="paisIsoS" name="paisIsoS" value="ES" />
                                                        </div>
                                                    </div>

                                                    <div class="form-row">
                                                        <div class="form-group col-md-4">
                                                            <label for="ciudadS">Ciudad</label>
                                                            <input type="text" class="form-control" id="ciudadS" name="ciudadS" value="Elche" />
                                                        </div>
                                                        <div class="form-group col-md-4">
                                                            <label for="provinciaS">Provincia</label>
                                                            <input type="text" class="form-control" id="provinciaS" name="provinciaS" value="Alicante" />
                                                        </div>
                                                        <div class="form-group col-md-4">
                                                            <label for="cpS">Código Postal</label>
                                                            <input type="text" class="form-control" id="cpS" name="cpS" value="03201" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <!-- /Datos del envío-->
                                </div>
                                <!-- /Caja 1 -->
                                <!-- Caja 2 -->
                                    <div class="row justify-content-around">
                                        <div class="col-lg-4 pl-lg-4">
                                            <div class="row">
                                                <div class="col-lg-12 mt-3 mb-2 formulario">
                                                    <!-- Datos de tarjeta -->

                                                    <h4 class="pt-2">Datos de tarjeta</h4>

                                                    <div class="form-group">
                                                        <label for="cardNumber">Número de tarjeta</label>
                                                        <input type="tel" onkeypress="return soloNumeros(event)" maxlength="20" class="form-control" id="cardNumber" name="cardNumber" placeholder="Número de tarjeta" required/>
                                                    </div>
                                                    <div class="form-row">
                                                        <div class="form-group col-md-6">
                                                            <label>Fecha de exipración</label>
                                                            <input type="tel" maxlength='5' placeholder="MM/YY" class="form-control" id="fExpiry" name="fExpiry" required>
                                                        </div>
                                                        <div class="form-group col-md-6">
                                                            <label for="cvn">Código de seguridad</label>
                                                            <input type="tel" onkeypress="return soloNumeros(event)" maxlength="4" class="form-control" id="cvn" name="cvn" placeholder="CVN" required/>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="cardholderName">Nombre del titular</label>
                                                        <input type="text" class="form-control" id="cardholderName" name="cardholder-name" placeholder="Nombre" required/>
                                                    </div>

                                                    <p>
                                                        <input type="hidden" id="importe" name="importe" value="564.20" />
                                                        <b>Importe:</b> <span>564.20€</span>
                                                    </p>
                                                    <!-- Datos de tarjeta -->
                                                    <div class="form-group row">
                                                        <div class="col-sm-12">
                                                            <button type="submit" class="btn btn-block btn-primary" onclick="validate();">Pagar ahora</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <!-- /Caja 2 -->
                                </form>

                                <hr>

                                <h5 id="Respuesta">
                                    4.2 Respuesta de la operación
                                </h5>

                                <small class="form-text text-muted alert alert-primary">
                                    --&gt; La respuesta se encuentra dentro del fichero. Para obtener más información sobre la excepción de "try - catch" puede ver la <a target="_blank" href="https://www.php.net/manual/es/language.exceptions.php">documentación oficial de PHP.</a>
                                </small>

                                <div id="server-results" class="pb-3 mb-2">
                                    <p>
                                        Su respuesta aparecerá aquí.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- /Punto 3 -->

                    </div>
                    <!-- /Contenido común -->

                </div>
            </div>
        </div>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <script src="../../../../assets/js/barraprogreso.js"></script>
        <script src="../../../../assets/js/tarjetaformat.js"></script>

        <script>
            // Función para comprobar la valdiez de la tarjeta
            function validate(){ // Basic form validation using the JS Library given as an example
                var cardNumberCheck = RealexRemote.validateCardNumber(document.getElementById('cardNumber').value);
                var cardHolderNameCheck = RealexRemote.validateCardHolderName(document.getElementById('cardholderName').value);
                var expiryDate = document.getElementById('fExpiry').value;
                var expiryDateFormatCheck = RealexRemote.validateExpiryDateFormat(expiryDate);
                var expiryDatePastCheck = RealexRemote.validateExpiryDateNotInPast(expiryDate);
                
                if ( document.getElementById('cardNumber').value.charAt(0) == "3" ) { 
                    cvnCheck = RealexRemote.validateAmexCvn(document.getElementById('cvn').value);
                } else { 
                    cvnCheck = RealexRemote.validateCvn(document.getElementById('cvn').value); 
                }

                if (cardNumberCheck == false || cardHolderNameCheck == false || expiryDateFormatCheck == false || expiryDatePastCheck == false || cvnCheck == false) {
                    // code here to inform the cardholder of an input error and prevent the form submitting
                    return false; 
                }else {
                    return true;
                }
            }

            // Petición AJAX para enviar el formulario sin recargar la web
            $("#formulario_envio").submit(function(event){
                event.preventDefault();
                var url = $(this).attr("action"); // Valor del campo "action" del formulario
                var method = $(this).attr("method"); // Valor del campo "method" del formulario
                var datos = $(this).serialize(); // Codifica los elementos del formulario
                
                $.ajax({
                    url : url,
                    type: method,
                    data : datos
                }).done(function(respuesta){
                    $("#server-results").html(respuesta);
                });
            });
        </script>
    </body>
</html>