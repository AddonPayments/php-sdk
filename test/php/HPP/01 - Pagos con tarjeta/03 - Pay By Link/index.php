<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="Víctor Cantera">
        <link rel="icon" href="../../../../assets/img/comercia_ico.png" type="image/x-icon"/ >
        <title>Pay By Link - SDK PHP</title>

        <!-- Bootstrap 4.3.1 -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <!-- CSS -->
        <link rel="stylesheet" href="../../../../assets/css/style.css">

        <!-- Script para comprobar los datos de la tarjeta mediante HPP -->
        <script src="../../../../assets/js/rxp-hpp.js"></script> <!-- Available at https://github.com/realexpayments -->
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
                                <a class="dropdown-item pl-2" href="../../../API/01%20-%20Pagos%20con%20tarjeta/01%20-%20Authorization/index.php">Autorización</a>
                                <a class="dropdown-item pl-2" href="../../../API/01%20-%20Pagos%20con%20tarjeta/01%20-%20Authorization/DatosDelCliente.php">Datos adicionales</a>
                                <a class="dropdown-item pl-2" href="../../../API/01%20-%20Pagos%20con%20tarjeta/02%20-%20OTB/index.php">OTB</a>
                                <a class="dropdown-item pl-2" href="../../../API/01%20-%20Pagos%20con%20tarjeta/03%20-%20Credit/index.php">Credit</a>
                            <hr class="m-0 p-0">
                            <div class="dropdown-header text-center p-0">HPP</div>
                            <hr class="m-0 p-0">
                                <a class="dropdown-item pl-2" href="../01%20-%20Authorization/index.php">Autorización</a>
                                <a class="dropdown-item pl-2" href="../02%20-%20OTB/index.php">OTB</a>
                                <a class="dropdown-item pl-2 active" href="#">Pay By Link</a>
                                <a class="dropdown-item pl-2" href="../04%20-%20Auth%20con%20iframe/index.php">Iframe</a>
                                <a class="dropdown-item pl-2" href="../05%20-%20Lightbox/index.php">Lightbox</a>
                        </div>
                    </li>
                    <li class="nav-item ml-1 dropdown">
                        <a class="nav-link pl-2 dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Almacenamiento de tarjeta
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <div class="dropdown-header text-center p-0">API</div>
                            <hr class="m-0 p-0">
                                <a class="dropdown-item pl-2" href="../../../API/02%20-%20Almacenamiento%20de%20tarjeta/01%20-%20Crear%20un%20cliente/index.php">Crear un cliente</a>
                                <a class="dropdown-item pl-2" href="../../../API/02%20-%20Almacenamiento%20de%20tarjeta/02%20-%20Almacenar%20una%20tarjeta/index.php">Almacenar una tarjeta</a>
                                <a class="dropdown-item pl-2" href="../../../API/02%20-%20Almacenamiento%20de%20tarjeta/03%20-%20Editar%20tarjeta/index.php">Editar tarjetas</a>
                                <a class="dropdown-item pl-2" href="../../../API/02%20-%20Almacenamiento%20de%20tarjeta/04%20-%20Eliminar%20tarjeta/index.php">Eliminar tarjetas</a>
                                <a class="dropdown-item pl-2" href="../../../API/02%20-%20Almacenamiento%20de%20tarjeta/05%20-%20Auth/index.php">Autorización</a>
                                <a class="dropdown-item pl-2" href="../../../API/02%20-%20Almacenamiento%20de%20tarjeta/06%20-%20Credit/index.php">Credit</a>
                                <a class="dropdown-item pl-2" href="../../../API/02%20-%20Almacenamiento%20de%20tarjeta/07%20-%20DCC/index.php">Dynamic Currency Conversion</a>
                            <hr class="m-0 p-0">
                            <div class="dropdown-header text-center p-0">HPP</div>
                            <hr class="m-0 p-0">
                                <a class="dropdown-item pl-2" href="../../02%20-%20Almacenamiento%20de%20tarjeta/01%20-%20Crear%20un%20cliente/index.php">Crear un cliente</a>
                                <a class="dropdown-item pl-2" href="../../02%20-%20Almacenamiento%20de%20tarjeta/02%20-%20Mostrar%20Tarjetas/index.php">Mostrar tarjetas</a>
                        </div>
                    </li>
                      
                    <li class="nav-item ml-1 dropdown">
                        <a class="nav-link pl-2 dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Gestión de transacciones
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item pl-2" href="../../../API/03%20-%20Gestion%20de%20transacciones/01%20-%20Capturar/index.php">Settle (Capturar)</a>
                            <a class="dropdown-item pl-2" href="../../../API/03%20-%20Gestion%20de%20transacciones/02%20-%20Rebate/index.php">Rebate (Devolución)</a>
                            <a class="dropdown-item pl-2" href="../../../API/03%20-%20Gestion%20de%20transacciones/03%20-%20Void/index.php">Void (Anular transacción)</a>
                        </div>
                    </li>

                    <li class="nav-item ml-1 dropdown">
                        <a class="nav-link pl-2 dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Filtro de fraude
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                              
                            <div class="dropdown-header text-center p-0">API</div>
                            <hr class="m-0 p-0">
                                <a class="dropdown-item pl-2"  href="../../../API/05%20-%20Fraud%20Management/01%20-%20Fraud%20Filter/index.php">Filtro de fraude</a>
                                <a class="dropdown-item pl-2"  href="../../../API/05%20-%20Fraud%20Management/02%20-%20Address%20Verification">Verificación de dirección</a>
                                <a class="dropdown-item pl-2"  href="../../../API/05%20-%20Fraud%20Management/03%20-%20Hold">Retener transacción</a>
                                <a class="dropdown-item pl-2"  href="../../../API/05%20-%20Fraud%20Management/04%20-%20Lanzamiento">Lanzar transacción</a>
                            <hr class="m-0 p-0">
                            <div class="dropdown-header text-center p-0">HPP</div>
                            <hr class="m-0 p-0">
                                <a class="dropdown-item pl-2"  href="../../03%20-%20Fraud%20Management/01%20-%20Fraud%20Filter/index.php">Filtro de fraude</a>
                        </div>
                    </li>

                    <li class="nav-item ml-1 dropdown">
                        <a class="nav-link pl-2 dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            DCC
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <div class="dropdown-header text-center p-0">API</div>
                            <hr class="m-0 p-0">
                                <a class="dropdown-item pl-2"  href="../../../API/04%20-%20DCC/01%20-%20Comprobar%20DCC/index.php">Comprobar DCC</a>
                            <hr class="m-0 p-0">
                            <div class="dropdown-header text-center p-0">HPP</div>
                            <hr class="m-0 p-0">
                                <a class="dropdown-item pl-2"href="../../04%20-%20DCC/index.php">Operación con DCC</a>
                        </div>
					</li>
					<li class="nav-item ml-1 dropdown">
                        <a class="nav-link pl-2 dropdown-toggle" href="#" id="06-3DS2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            3DS2
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <div class="dropdown-header text-center p-0">API</div>
                            <hr class="m-0 p-0">
                                <a class="dropdown-item pl-2" href="../../../API/06%20-%203DS2/01%20-%20Authorization/index.html">Autorización</a>
                            <hr class="m-0 p-0">
                            <div class="dropdown-header text-center p-0">HPP</div>
                            <hr class="m-0 p-0">
                                <a class="dropdown-item pl-2" href="../../05%20-%203DS2/01%20-%20Authorization/index.html">Autorización</a>
                                <a class="dropdown-item pl-2" href="../../05%20-%203DS2/02%20-%20Datos%20adicionales/index.html">Datos adicionales</a>
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
                	            <a class="nav-link" href="#PBLink">1. Pay By Link</a>
                	            <nav>
                	                <a class="nav-link ml-3 my-1" href="#codigoEjemplo">1.1 Código de ejemplo</a>
                	            </nav>
                	            <a class="nav-link" href="#descripciones">2. Descripciones</a>
                	            <nav>
                	                <a class="nav-link ml-3 my-1" id="#variables" href="#variables">2.1 Declaración de variables</a>
                	                <a class="nav-link ml-3 my-1" id="#envPetition" href="#envPetition">2.2 Envío de la petición</a>
                	            </nav>
                	            <a class="nav-link" href="#form3">3. Formulario de ejemplo</a>
                	            <nav>
                	                <a class="nav-link ml-3 my-1" href="#form3.1">3.1 Formulario</a>
                	                <a class="nav-link ml-3 my-1" href="#response">3.2 Respuesta de operación</a>
                	            </nav>
                	        </nav>
                	    </nav>
                	</div>
                	<div class="col-lg-10" >
                	    <!-- Punto 1 -->
                	    <div class="contenedor">
                	        <div class="pl-3 pt-3 pr-3 pb-4 mb-3 text-justify">
                	            <h3 id="PBLink" class="titulo">
                	              1. Pay By Link
                	            </h3>
                	            <hr>

                	            <p>
                	              Para los comercios que deseen insertar un enlace de pago en un SMS o un correo electrónico, puede enviar una solicitud a HPP para crear un enlace de transacción que se pagará dentro de las 24 horas. HPP responderá con el enlace de pago dedicado que luego se puede enviar a su cliente.
                	            </p>
                	            <p class="alert alert-primary" role="alert">
                	              Para crear el enlace, puede enviar la solicitud JSON con los detalles de la transacción al HPP, la solicitud debe enviarse con el siguiente encabezado: <b>"Content-Type: application/JSON"</b>
                	            </p>

                	            <h5 style="" class="pt-3" id="codigoEjemplo">
                	                1.1 Código de ejemplo
                	            </h5>
                	            
                	            <hr>

                	            <!-- Código ejemplo-->
                	            <div class="p-4 panelCode">
                	                <code>
                	                    <b>
                	                        <span class="etiqueta">&lt;?php</span>
                	                    </b>
                	                    <br>
                	                    <br>
                	                        <span class="pl-3 comments">// Indicamos el Timestamp actual</span>
                	                    <br>
                	                        <span class="pl-3">$</span><span class="variables">timestamp</span> <span class="require">=</span> <span class="new">date(</span><span class="new">"</span><span class="green">YmdHis</span><span class="new">");</span>
                                        <br>
                                        <br>
                                            <span class="pl-3 comments">// Indicamos nuestro identificador proporcionado por el equipo de soporte. Si tiene alguna duda puede contactar con el equipo de Addon Payments llamando al <a class="comments" target="_blank" href="tel:914353028">914 353 028</a> o enviando <a class="comments" target="_blank" href="mailto:soporte@addonpayments.com">un email a soporte@addonpayments.com.</a></span>
                                        <br>
                                            <span class="pl-3">$</span><span class="variables">MerchantID</span> <span class="require">= "</span><span class="green">Identificador</span><span class="new">";</span>
                	                    <br>
                	                    <br>
                                            <span class="pl-3 comments">// Indicamos nuestro Shared Secret proporcionado por el equipo de soporte. Si tiene alguna duda puede contactar con el equipo de Addon Payments llamando al <a class="comments" target="_blank" href="tel:914353028">914 353 028</a> o enviando <a class="comments" target="_blank" href="mailto:soporte@addonpayments.com">un email a soporte@addonpayments.com.</a></span>
                                        <br>
                                            <span class="pl-3">$</span><span class="variables">ShSecret</span> <span class="require">= "</span><span class="green">Secreto_Compartido</span><span class="new">";</span>
                                        <br>
                                        <br>
                	                        <span class="pl-3 comments">// Generamos de forma aleatoria un número entre el "0" y el "1000" y le añadimos "-Pruebas"</span>
                	                    <br>
                	                        <span class="pl-3">$</span><span class="variables">Order</span> <span class="require">=</span> <span class="new">mt_rand(</span><span class="orange">0</span><span class="new">,</span> <span class="orange">1000</span><span class="new">)."</span><span class="green">-Pruebas</span><span class="new">";</span>
                	                    <br>
                	                    <br>
                	                        <span class="pl-3 comments">// Obtenemos el importe del formulario de ejemplo (Punto 3)</span>
                	                    <br>
                	                        <span class="pl-3">$</span><span class="variables">amount</span> <span class="require">=</span> <span class="orange">12</span><span class="new">;</span>
                	                    <br>
                	                    <br>
                	                        <span class="pl-3 comments">// Calculamos el Hash</span>
                	                    <br>
                	                        <span class="pl-3">$</span><span class="variables">json</span> <span class="require">=</span> $<span class="variables">timestamp</span><span class="new">."</span><span class="green">.</span><span class="new">".</span>$<span class="variables">MerchantID</span><span class="new">."</span><span class="green">.</span><span class="new">".</span>$<span class="variables">Order</span><span class="new">."</span><span class="green">.</span><span class="new">".</span>$<span class="variables">amount</span><span class="new">."</span><span class="green">.EUR</span><span class="new">";</span>
                	                    <br>
                	                    <br>
                	                        <span class="pl-3 comments">// Convertimos el primer hash a SHA1</span>
                	                    <br>
                	                        <span class="pl-3">$</span><span class="variables">firma</span> <span class="require">=</span> <span class="new">sha1(sha1(</span>$<span class="variables">json</span><span class="new">)."</span><span class="green">.</span><span class="new">".</span>$<span class="variables">ShSecret</span><span class="new">);</span>
                	                    <br>
                	                    <br>
                	                        <span class="pl-3 comments">// URL de Addon Payments</span>
                	                    <br>
                	                        <span class="pl-3">$</span><span class="variables">url</span> <span class="require">=</span> <span class="new">"</span><span class="green">https://hpp.sandbox.addonpayments.com/pay</span><span class="new">";</span>
                	                    <br>
                	                    <br>
                	                        <span class="pl-3 comments">// Indicamos el JSON con todos los datos de la operación</span>
                	                    <br>
                	                        <span class="pl-3">$</span><span class="variables">datos</span> <span class="require">=</span> <span class="new">array(</span>
                	                    <br>
                	                        <span class="pl-5 new">"</span><span class="green">TIMESTAMP</span><span class="new">" => </span>$<span class="variables">timestamp</span><span class="require">,</span>
                	                    <br>
                	                        <span class="pl-5 new">"</span><span class="green">AMOUNT</span><span class="new">" => </span>$<span class="variables">amount</span><span class="require">,</span>
                	                    <br>
                	                        <span class="pl-5 new">"</span><span class="green">ORDER_ID</span><span class="new">" => </span>$<span class="variables">Order</span><span class="require">,</span>
                	                    <br>
                	                        <span class="pl-5 new">"</span><span class="green">SHA1HASH</span><span class="new">" => </span>$<span class="variables">firma</span><span class="require">,</span>
                	                    <br>
                	                        <span class="pl-5 new">"</span><span class="green">MERCHANT_RESPONSE_URL</span><span class="new">" => </span><span class="new">"</span><span class="green">https://www.example.com/responseUrl</span><span class="new">"</span><span class="require">,</span>
                	                    <br>
                	                        <span class="pl-5 new">"</span><span class="green">MERCHANT_ID</span><span class="new">" => </span>$<span class="variables">MerchantID</span><span class="require">,</span>
                	                    <br>
                	                        <span class="pl-5 new">"</span><span class="green">AUTO_SETTLE_FLAG</span><span class="new">" => </span><span class="new">"</span><span class="green">1</span><span class="new">"</span><span class="require">,</span>
                	                    <br>
                	                        <span class="pl-5 new">"</span><span class="green">CURRENCY</span><span class="new">" => </span><span class="new">"</span><span class="green">EUR</span><span class="new">"</span><span class="require">,</span>
                	                    <br>
                	                        <span class="pl-5 new">"</span><span class="green">HPP_VERSION</span><span class="new">" => </span><span class="new">"</span><span class="green">2</span><span class="new">"</span><span class="require">,</span>
                	                    <br>
                	                        <span class="pl-5 new">"</span><span class="green">COMMENT1</span><span class="new">" => </span><span class="new">"</span><span class="green">Comentarios</span><span class="new">"</span><span class="require">,</span>
                	                    <br>
                	                        <span class="pl-5 new">"</span><span class="green">HPP_LANG</span><span class="new">" => </span><span class="new">"</span><span class="green">es</span><span class="new">"</span><span class="require">,</span>
                	                    <br>
                	                        <span class="pl-5 new">"</span><span class="green">HPP_CUSTOMER_EMAIL</span><span class="new">" => </span><span class="new">"</span><span class="green">soporte@addonpayments.com</span><span class="new">"</span><span class="require">,</span>
                	                    <br>
                	                        <span class="pl-5 new">"</span><span class="green">HPP_CUSTOMER_PHONENUMBER_MOBILE</span><span class="new">" => </span><span class="new">"</span><span class="green">914353028</span><span class="new">"</span><span class="require">,</span>
                	                    <br>
                	                        <span class="pl-5 new">"</span><span class="green">HPP_BILLING_STREET1</span><span class="new">" => </span><span class="new">"</span><span class="green">Los Preciados 123</span><span class="new">"</span><span class="require">,</span>
                	                    <br>
                	                        <span class="pl-5 new">"</span><span class="green">HPP_BILLING_STREET2</span><span class="new">" => </span><span class="new">"</span><span class="green">Plaza Catalunya 456</span><span class="new">"</span><span class="require">,</span>
                	                    <br>
                	                        <span class="pl-5 new">"</span><span class="green">HPP_BILLING_STREET3</span><span class="new">" => </span><span class="new">"</span><span class="green">Sótano</span><span class="new">"</span><span class="require">,</span>
                	                    <br>
                	                        <span class="pl-5 new">"</span><span class="green">HPP_BILLING_CITY</span><span class="new">" => </span><span class="new">"</span><span class="green">Elche</span><span class="new">"</span><span class="require">,</span>
                	                    <br>
                	                        <span class="pl-5 new">"</span><span class="green">HPP_BILLING_POSTALCODE</span><span class="new">" => </span><span class="new">"</span><span class="green">03201</span><span class="new">"</span><span class="require">,</span>
                	                    <br>
                	                        <span class="pl-5 new">"</span><span class="green">HPP_SHIPPING_STREET1</span><span class="new">" => </span><span class="new">"</span><span class="green">Envío 123</span><span class="new">"</span><span class="require">,</span>
                	                    <br>
                	                        <span class="pl-5 new">"</span><span class="green">HPP_SHIPPING_STREET2</span><span class="new">" => </span><span class="new">"</span><span class="green">Envío 456</span><span class="new">"</span><span class="require">,</span>
                	                    <br>
                	                        <span class="pl-5 new">"</span><span class="green">HPP_SHIPPING_STREET3</span><span class="new">" => </span><span class="new">"</span><span class="green">Azotea</span><span class="new">"</span><span class="require">,</span>
                	                    <br>
                	                        <span class="pl-5 new">"</span><span class="green">HPP_SHIPPING_CITY</span><span class="new">" => </span><span class="new">"</span><span class="green">Elche</span><span class="new">"</span><span class="require">,</span>
                	                    <br>
                	                        <span class="pl-5 new">"</span><span class="green">HPP_SHIPPING_STATE</span><span class="new">" => </span><span class="new">"</span><span class="green">España</span><span class="new">"</span><span class="require">,</span>
                	                    <br>
                	                        <span class="pl-5 new">"</span><span class="green">HPP_SHIPPING_POSTALCODE</span><span class="new">" => </span><span class="new">"</span><span class="green">03201</span><span class="new">"</span><span class="require">,</span>
                	                    <br>
                	                        <span class="pl-5 new">"</span><span class="green">CUST_NUM</span><span class="new">" => </span><span class="new">"</span><span class="green">2394jadi-Q23R2Q-D21234</span><span class="new">"</span><span class="require">,</span>
                	                    <br>
                	                        <span class="pl-5 new">"</span><span class="green">VAR_REF</span><span class="new">" => </span><span class="new">"</span><span class="green">QBCT5478-6h6fq7ed6-f9f3qwf</span><span class="new">"</span><span class="require">,</span>
                	                    <br>
                	                        <span class="pl-5 new">"</span><span class="green">PROD_ID</span><span class="new">" => </span><span class="new">"</span><span class="green">152468748</span><span class="new">"</span><span class="require">,</span>
                	                    <br>
                	                        <span class="pl-5 new">"</span><span class="green">SUPPLEMENTARY_DATA</span><span class="new">" => </span><span class="new">"</span><span class="green">Datos adicionales</span><span class="new">"</span><span class="require">,</span>
                	                    <br>
                	                        <span class="pl-3 new">);</span>
                	                    <br>
                	                    <br>
                	                        <span class="pl-3 comments">// Codificamos en JSON los daots que vamos a enviar</span>
                	                    <br>
                	                        <span class="pl-3">$</span><span class="variables">datos_string</span> <span class="require">=</span> <span class="new">json_encode(</span>$<span class="variables">datos</span><span class="new">);</span>
                	                    <br>
                	                    <br>
                	                        <span class="pl-3 comments">// Iniciamos la petición</span>
                	                    <br>
                	                        <span class="pl-3">$</span><span class="variables">ch</span> <span class="require">=</span> <span class="new">curl_init(</span>$<span class="variables">url</span><span class="new">);</span>
                	                    <br>
                	                    <br>
                	                        <span class="pl-3 comments">// Indicamos que el método de envío es mediante POST</span>
                	                    <br>
                	                        <span class="pl-3 new">curl_setopt(</span>$<span class="variables">ch</span><span class="require">,</span> <span class="orange">CURLOPT_CUSTOMREQUEST</span><span class="require">,</span> <span class="new">"</span><span class="green">POST</span><span class="new">");</span>
                	                    <br>
                	                    <br>
                	                        <span class="pl-3 comments">// Añadimos los datos datos en formato JSON</span>
                	                    <br>
                	                        <span class="pl-3 new">curl_setopt(</span>$<span class="variables">ch</span><span class="require">,</span> <span class="orange">CURLOPT_POSTFIELDS</span><span class="require">,</span> $<span class="variables">datos_string</span><span class="new">);</span>
                	                    <br>
                	                    <br>
                	                        <span class="pl-3 comments">// TRUE para devolver el resultado de la transferencia como string del valor de curl_exec() en lugar de mostrarlo directamente</span>
                	                    <br>
                	                        <span class="pl-3 new">curl_setopt(</span>$<span class="variables">ch</span><span class="require">,</span> <span class="orange">CURLOPT_RETURNTRANSFER</span><span class="require">,</span> <span class="orange">true</span><span class="new">);</span>
                	                    <br>
                	                    <br>
                	                        <span class="pl-3 comments">// Indicamos en la cabecera que el formato en el que vamos a enviar los datos es en JSON y el tamaño del contenido</span>
                	                    <br>
                	                        <span class="pl-3 new">curl_setopt(</span>$<span class="variables">ch</span><span class="require">,</span> <span class="orange">CURLOPT_HTTPHEADER</span><span class="require">,</span> <span class="new">array(</span>
                	                    <br>
                	                        <span class="pl-5 new">'</span><span class="green">Content-Type: application/json</span><span class="new">'</span><span class="require">,</span>
                	                    <br>
                	                        <span class="pl-5 new">'</span><span class="green">Content-Length: </span><span class="new">'.strlen</span><span class="new">(</span>$<span class="variables">datos_string</span><span class="new">))</span>
                	                    <br>
                	                        <span class="pl-3 new">);</span>
                	                    <br>
                	                    <br>
                	                        <span class="pl-3 comments">// Resultado</span>
                	                    <br>
                	                        <span class="pl-3">$</span><span class="variables">resultado</span> <span class="require">=</span> <span class="new">curl_exec(</span>$<span class="variables">ch</span><span class="new">);</span>
                	                    <br>
                	                    <br>
                	                        <span class="pl-3 comments">// Decodificamos el resultado</span>
                	                    <br>
                	                        <span class="pl-3">$</span><span class="variables">enlace</span> <span class="require">=</span> <span class="new">json_decode(</span>$<span class="variables">resultado</span><span class="new">);</span>
                	                    <br>
                	                    <br>
                	                        <span class="pl-3 comments">// Mostramos el resultado</span>
                	                    <br>
                	                        <span class="pl-3 new">print "</span><span class="green">Enlace = </span><span class="green"><</span><span class="green">a href='</span><span class="new">".</span>$<span class="variables">enlace</span><span class="new">->{'</span><span class="green">hppPayByLink</span><span class="new">'}."</span><span class="green">'></span><span class="new">".</span>$<span class="variables">enlace</span><span class="new">->{'</span><span class="green">hppPayByLink</span><span class="new">'}."</span><span class="green"><</span><span class="green">/a></span><span class="new">";</span>
                	                    <br>
                	                    <br>
                	                    <b>
                	                        <span class="etiqueta">?&gt;</span>
                	                    </b>
                	                </code>
                	            </div>
                	            <!-- Fin código ejemplo-->
                	        </div>            
                	    </div>
                	    <!-- Punto 2 -->
                	    <div class="contenedor">
                	        <div class="pl-3 pt-3 mb-4 pb-1 pr-3 text-justify">
                	           <h3 class="pt-1" id="descripciones">
                	                2. Descripciones
                	           </h3>
                	           <hr>
                	           
                	           <h5 id="variables">2.1 Declaración de variables</h5>
                	              <p>
                	                Para calcular la clave SHA1 debemos declarar las variables necesarias para realizar la cadena:
                	              </p>
                	              <ul>
                	                <li>
                	                  Timestamp = Formato de la fecha actual indicando el año, la hora, los minutos y los segundos. Debemos elegir el formato "YmdHis" que corresponde con los siguientes parámetros:
                	                </li>
                	                  <ul>
                	                    <li>
                	                      <span class="arrow">$</span><span class="variableBgW">timestamp</span><span class="arrow"> = date("</span><span class="comentariosBgW">YmdHis</span><span class="arrow"> ");</span>
                	                    </li>
                	                    <li>
                	                      Y = Una representación numérica completa de un año, 4 dígitos.
                	                    </li>

                	                    <li>
                	                      m = Representación numérica de un mes, con ceros iniciales.
                	                    </li>

                	                    <li>
                	                      d = Día del mes, 2 dígitos con ceros iniciales.
                	                    </li>

                	                    <li>
                	                      H = Formato de 24 horas de una hora con ceros iniciales.
                	                    </li>

                	                    <li>
                	                      i = Minutos con ceros iniciales.
                	                    </li>

                	                    <li>
                	                      s = Segundos con ceros iniciales.
                	                    </li>
                	                  </ul>

                                      <br>

                                      <li>
                                        Merchant ID = Identificador porporcionado por Addon Payments.
                                      </li>
                                      <ul>
                                        <li>
                                          <span class="arrow">$</span><span class="variableBgW">MerchantID</span><span class="arrow"> = "</span><span class="comentariosBgW">Identificador</span><span class="arrow">";</span>
                                        </li>
                                      </ul>

                                      <br>

                                      <li>
                                        Shared Srecet = Shared Secret porporcionado por Addon Payments.
                                      </li>
                                      <ul>
                                        <li>
                                          <span class="arrow">$</span><span class="variableBgW">ShSecret</span><span class="arrow"> = "</span><span class="comentariosBgW">Secreto_compartido</span><span class="arrow">";</span>
                                        </li>
                                      </ul>

                	                  <br>

                	                  <li>
                	                    Order ID = Identificador de la transacción que lanzamos al servidor de Addon Payments.
                	                  </li>
                	                  <ul>
                	                    <li>
                	                      <span class="arrow">$</span><span class="variableBgW">Order</span><span class="arrow"> = mt_rand(</span><span class="comentariosBgW">0</span><span class="arrow">,</span> <span class="comentariosBgW">1000</span><span class="arrow">)."</span><span class="comentariosBgW">-Pruebas</span><span class="arrow">";</span>
                	                    </li>
                	                  </ul>

                	                  <br>

                	                  <li>
                	                    Amount = Indicamos el importe de la operación.
                	                  </li>
                	                  <ul>
                	                    <li>
                	                      <span class="arrow">$</span><span class="variableBgW">amount</span><span class="arrow"> = </span><span class="comentariosBgW">20</span><span class="arrow">;</span>
                	                    </li>
                	                  </ul>

                	                  <br>

                	                  <li>
                	                    JSON = Concatenamos los componentes necesarios para realizar posteriormente el cálculo SHA1.
                	                  </li>
                	                  <ul>
                	                    <li>
                	                      <span class="arrow">$</span><span class="variableBgW">json</span><span class="arrow"> = </span><span class="arrow">$</span><span class="comentariosBgW">timestamp</span><span class="arrow">."</span><span class="comentariosBgW">.Merchant_ID.</span><span class="arrow">".$</span><span class="comentariosBgW">Order</span><span class="arrow">."</span><span class="comentariosBgW">.</span><span class="arrow">".</span><span class="arrow">$</span><span class="comentariosBgW">amount</span><span class="arrow">."</span><span class="comentariosBgW">.EUR</span><span class="arrow">";</span>
                	                    </li>
                	                  </ul>

                	                  <br>

                	                  <li>
                	                    Firma SHA1 = Calculamos la clave SHA1 con nuestro Shared Secret y la cadena que hemos concatenado anteriormente.
                	                  </li>

                	                  <ul>
                	                    <li>
                	                      <span class="arrow">$</span><span class="variableBgW">firma</span><span class="arrow"> = </span><span class="arrow">sha1(sha1($</span><span class="comentariosBgW">json</span><span class="arrow">)."</span><span class="comentariosBgW">.</span><span class="arrow">"."</span><span class="comentariosBgW">Shared_Secret</span><span class="arrow">";</span>
                	                    </li>
                	                  </ul>

                	                  <br>

                	                <li>
                	                  URL = Indicamos la URL de Addon Payments del entorno snadbox.
                	                </li>
                	              </ul>
                	              <div class="p-4 mb-4 panelCode">
                	                <code>
                	                  <b>
                	                     <span class="etiqueta">&lt;?php</span>
                	                  </b>
                	                  <br>
                	                  <br>
                	                      <span class="pl-3 comments">// Indicamos el Timestamp actual</span>
                                        <br>
                                            <span class="pl-3">$</span><span class="variables">timestamp</span> <span class="require">=</span> <span class="new">date(</span><span class="new">"</span><span class="green">YmdHis</span><span class="new">");</span>
                                        <br>
                                        <br>
                                            <span class="pl-3 comments">// Indicamos nuestro identificador proporcionado por el equipo de soporte. Si tiene alguna duda puede contactar con el equipo de Addon Payments llamando al <a class="comments" target="_blank" href="tel:914353028">914 353 028</a> o enviando <a class="comments" target="_blank" href="mailto:soporte@addonpayments.com">un email a soporte@addonpayments.com.</a></span>
                                        <br>
                                            <span class="pl-3">$</span><span class="variables">MerchantID</span> <span class="require">= "</span><span class="green">Identificador</span><span class="new">";</span>
                                        <br>
                                        <br>
                                            <span class="pl-3 comments">// Indicamos nuestro Shared Secret proporcionado por el equipo de soporte. Si tiene alguna duda puede contactar con el equipo de Addon Payments llamando al <a class="comments" target="_blank" href="tel:914353028">914 353 028</a> o enviando <a class="comments" target="_blank" href="mailto:soporte@addonpayments.com">un email a soporte@addonpayments.com.</a></span>
                                        <br>
                                            <span class="pl-3">$</span><span class="variables">ShSecret</span> <span class="require">= "</span><span class="green">Secreto_Compartido</span><span class="new">";</span>
                                        <br>
                                        <br>
                                            <span class="pl-3 comments">// Generamos de forma aleatoria un número entre el "0" y el "1000" y le añadimos "-Pruebas"</span>
                                        <br>
                                            <span class="pl-3">$</span><span class="variables">Order</span> <span class="require">=</span> <span class="new">mt_rand(</span><span class="orange">0</span><span class="new">,</span> <span class="orange">1000</span><span class="new">)."</span><span class="green">-Pruebas</span><span class="new">";</span>
                                        <br>
                                        <br>
                                            <span class="pl-3 comments">// Obtenemos el importe del formulario de ejemplo (Punto 3)</span>
                                        <br>
                                            <span class="pl-3">$</span><span class="variables">amount</span> <span class="require">=</span> <span class="orange">12</span><span class="new">;</span>
                                        <br>
                                        <br>
                                            <span class="pl-3 comments">// Calculamos el Hash</span>
                                        <br>
                                            <span class="pl-3">$</span><span class="variables">json</span> <span class="require">=</span> $<span class="variables">timestamp</span><span class="new">."</span><span class="green">.</span><span class="new">".</span>$<span class="variables">MerchantID</span><span class="new">."</span><span class="green">.</span><span class="new">".</span>$<span class="variables">Order</span><span class="new">."</span><span class="green">.</span><span class="new">".</span>$<span class="variables">amount</span><span class="new">."</span><span class="green">.EUR</span><span class="new">";</span>
                                        <br>
                                        <br>
                                            <span class="pl-3 comments">// Convertimos el primer hash a SHA1</span>
                                        <br>
                                            <span class="pl-3">$</span><span class="variables">firma</span> <span class="require">=</span> <span class="new">sha1(sha1(</span>$<span class="variables">json</span><span class="new">)."</span><span class="green">.</span><span class="new">".</span>$<span class="variables">ShSecret</span><span class="new">);</span>
                                        <br>
                                        <br>
                                            <span class="pl-3 comments">// URL de Addon Payments</span>
                                        <br>
                                            <span class="pl-3">$</span><span class="variables">url</span> <span class="require">=</span> <span class="new">"</span><span class="green">https://hpp.sandbox.addonpayments.com/pay</span><span class="new">";</span>
                	                  <br>
                	                  <br>
                	                  <b>
                	                    <span class="etiqueta">?&gt;</span>
                	                  </b>
                	                </code>
                	              </div>

                	                <ul>
                	                  <li>
                	                    Datos = Realizamos un array con todos los datos que vamos a enviar al servidor de Addon Payments. <a target="_blank" href="https://desarrolladores.addonpayments.com/#!/hosted-payments/pay-by-link">Puede ver nuestra documentación para obtener más información al respecto.</a>
                	                  </li>
                	                </ul>
                	                <div class="p-4 mb-4 panelCode">
                	                  <code>
                	                    <b>
                	                      <span class="etiqueta">&lt;?php</span>
                	                    </b>
                	                    <br>
                	                    <br>
                	                        <span class="pl-3 comments">// Información de la operación</span>
                	                    <br>
                	                        <span class="pl-3">$</span><span class="variables">datos</span> <span class="require">=</span> <span class="new">array(</span>
                	                    <br>
                	                        <span class="pl-5 new">"</span><span class="green">TIMESTAMP</span><span class="new">" => </span>$<span class="variables">timestamp</span><span class="require">,</span>
                	                    <br>
                	                        <span class="pl-5 new">"</span><span class="green">AMOUNT</span><span class="new">" => </span>$<span class="variables">amount</span><span class="require">,</span>
                	                    <br>
                	                        <span class="pl-5 new">"</span><span class="green">ORDER_ID</span><span class="new">" => </span>$<span class="variables">Order</span><span class="require">,</span>
                	                    <br>
                	                        <span class="pl-5 new">"</span><span class="green">SHA1HASH</span><span class="new">" => </span>$<span class="variables">firma</span><span class="require">,</span>
                	                    <br>
                	                        <span class="pl-5 new">"</span><span class="green">MERCHANT_RESPONSE_URL</span><span class="new">" => </span><span class="new">"</span><span class="green">https://www.example.com/responseUrl</span><span class="new">"</span><span class="require">,</span>
                	                    <br>
                	                        <span class="pl-5 new">"</span><span class="green">MERCHANT_ID</span><span class="new">" => </span>$<span class="variables">MerchantID</span><span class="require">,</span>
                	                    <br>
                	                        <span class="pl-5 new">"</span><span class="green">AUTO_SETTLE_FLAG</span><span class="new">" => </span><span class="new">"</span><span class="green">1</span><span class="new">"</span><span class="require">,</span>
                	                    <br>
                	                        <span class="pl-5 new">"</span><span class="green">CURRENCY</span><span class="new">" => </span><span class="new">"</span><span class="green">EUR</span><span class="new">"</span><span class="require">,</span>
                	                    <br>
                	                        <span class="pl-5 new">"</span><span class="green">HPP_VERSION</span><span class="new">" => </span><span class="new">"</span><span class="green">2</span><span class="new">"</span><span class="require">,</span>
                	                    <br>
                	                        <span class="pl-5 new">"</span><span class="green">COMMENT1</span><span class="new">" => </span><span class="new">"</span><span class="green">Comentarios</span><span class="new">"</span><span class="require">,</span>
                	                    <br>
                	                        <span class="pl-5 new">"</span><span class="green">HPP_LANG</span><span class="new">" => </span><span class="new">"</span><span class="green">es</span><span class="new">"</span><span class="require">,</span>
                	                    <br>
                	                        <span class="pl-5 new">"</span><span class="green">HPP_CUSTOMER_EMAIL</span><span class="new">" => </span><span class="new">"</span><span class="green">soporte@addonpayments.com</span><span class="new">"</span><span class="require">,</span>
                	                    <br>
                	                        <span class="pl-5 new">"</span><span class="green">HPP_CUSTOMER_PHONENUMBER_MOBILE</span><span class="new">" => </span><span class="new">"</span><span class="green">914353028</span><span class="new">"</span><span class="require">,</span>
                	                    <br>
                	                        <span class="pl-5 new">"</span><span class="green">HPP_BILLING_STREET1</span><span class="new">" => </span><span class="new">"</span><span class="green">Los Preciados 123</span><span class="new">"</span><span class="require">,</span>
                	                    <br>
                	                        <span class="pl-5 new">"</span><span class="green">HPP_BILLING_STREET2</span><span class="new">" => </span><span class="new">"</span><span class="green">Plaza Catalunya 456</span><span class="new">"</span><span class="require">,</span>
                	                    <br>
                	                        <span class="pl-5 new">"</span><span class="green">HPP_BILLING_STREET3</span><span class="new">" => </span><span class="new">"</span><span class="green">Sótano</span><span class="new">"</span><span class="require">,</span>
                	                    <br>
                	                        <span class="pl-5 new">"</span><span class="green">HPP_BILLING_CITY</span><span class="new">" => </span><span class="new">"</span><span class="green">Elche</span><span class="new">"</span><span class="require">,</span>
                	                    <br>
                	                        <span class="pl-5 new">"</span><span class="green">HPP_BILLING_POSTALCODE</span><span class="new">" => </span><span class="new">"</span><span class="green">03201</span><span class="new">"</span><span class="require">,</span>
                	                    <br>
                	                        <span class="pl-5 new">"</span><span class="green">HPP_SHIPPING_STREET1</span><span class="new">" => </span><span class="new">"</span><span class="green">Envío 123</span><span class="new">"</span><span class="require">,</span>
                	                    <br>
                	                        <span class="pl-5 new">"</span><span class="green">HPP_SHIPPING_STREET2</span><span class="new">" => </span><span class="new">"</span><span class="green">Envío 456</span><span class="new">"</span><span class="require">,</span>
                	                    <br>
                	                        <span class="pl-5 new">"</span><span class="green">HPP_SHIPPING_STREET3</span><span class="new">" => </span><span class="new">"</span><span class="green">Azotea</span><span class="new">"</span><span class="require">,</span>
                	                    <br>
                	                        <span class="pl-5 new">"</span><span class="green">HPP_SHIPPING_CITY</span><span class="new">" => </span><span class="new">"</span><span class="green">Elche</span><span class="new">"</span><span class="require">,</span>
                	                    <br>
                	                        <span class="pl-5 new">"</span><span class="green">HPP_SHIPPING_STATE</span><span class="new">" => </span><span class="new">"</span><span class="green">España</span><span class="new">"</span><span class="require">,</span>
                	                    <br>
                	                        <span class="pl-5 new">"</span><span class="green">HPP_SHIPPING_POSTALCODE</span><span class="new">" => </span><span class="new">"</span><span class="green">03201</span><span class="new">"</span><span class="require">,</span>
                	                    <br>
                	                        <span class="pl-5 new">"</span><span class="green">CUST_NUM</span><span class="new">" => </span><span class="new">"</span><span class="green">2394jadi-Q23R2Q-D21234</span><span class="new">"</span><span class="require">,</span>
                	                    <br>
                	                        <span class="pl-5 new">"</span><span class="green">VAR_REF</span><span class="new">" => </span><span class="new">"</span><span class="green">QBCT5478-6h6fq7ed6-f9f3qwf</span><span class="new">"</span><span class="require">,</span>
                	                    <br>
                	                        <span class="pl-5 new">"</span><span class="green">PROD_ID</span><span class="new">" => </span><span class="new">"</span><span class="green">152468748</span><span class="new">"</span><span class="require">,</span>
                	                    <br>
                	                        <span class="pl-5 new">"</span><span class="green">SUPPLEMENTARY_DATA</span><span class="new">" => </span><span class="new">"</span><span class="green">Datos adicionales</span><span class="new">"</span><span class="require">,</span>
                	                    <br>
                	                        <span class="pl-3 new">);</span>
                	                    <br>
                	                    <br>
                	                    <b>
                	                      <span class="etiqueta">?&gt;</span>
                	                    </b>
                	                </code>
                	            </div>
                	                  

                	                <ul>
                	                  <li>
                	                    Datos codificados = Codificamos los datos antes de enviarlos al servidor de Addon Payments.
                	                  </li>
                	                  <ul>
                	                    <li>
                	                      <span class="arrow">$</span><span class="variableBgW">datos_string</span><span class="arrow"> = </span><span class="arrow">json_encode($</span><span class="comentariosBgW">datos</span><span class="arrow">);</span>
                	                    </li>
                	                  </ul>
                	                </ul>
                	                <div class="p-4 mb-4 panelCode">
                	                  <code>
                	                    <b>
                	                      <span class="etiqueta">&lt;?php</span>
                	                    </b>
                	                    <br>
                	                    <br>
                	                        <span class="pl-3 comments">// Codificación de los datos</span>
                	                    <br>
                	                        <span class="pl-3">$</span><span class="variables">datos_string</span> <span class="require">=</span> <span class="new">json_encode(</span>$<span class="variables">datos</span><span class="new">);</span>
                	                    <br>
                	                    <br>
                	                    <b>
                	                      <span class="etiqueta">?&gt;</span>
                	                    </b>
                	                  </code>
                	                </div>

                	            <hr>

                	            <h5 id="envPetition" class="mt-3">
                	                2.2 Envío de la petición
                	            </h5>

                	              <p>
                	                Para realizar el envío de la petición al servidor de Addon Payments, usamos el método cURL en PHP.
                	              </p>

                	              <ul>
                	                <li>
                	                  Variable $ch = Iniciamos la petición indicando la URL del servidor de pruebas de Addon Payments:
                	                </li>
                	                <ul>
                	                  <li>
                	                    <span class="arrow">$</span><span class="variableBgW">ch</span><span class="arrow"> = </span><span class="arrow">curl_init($</span><span class="comentariosBgW">url</span><span class="arrow">);</span>
                	                  </li>
                	                </ul>

                	                <br>

                	                <li>
                	                  curl_setopt = Define opciones para nuestra sesión cURL. Configuramos "CURLOPT_CUSTOMREQUEST" indicando que el método que vamos a enviar es "POST".
                	                </li>
                	                <ul>
                	                  <li>
                	                    <span class="arrow">curl_setopt($</span><span class="comentariosBgW">ch</span><span class="arrow">,</span> <span class="orangeBgW">CURLOPT_CUSTOMREQUEST</span><span class="arrow">, "</span><span class="comentariosBgW">POST</span><span class="arrow">");</span>
                	                  </li>
                	                </ul>

                	                <br>

                	                <li>
                	                  Configuramos "CURLOPT_POSTFIELDS" añandiendo la variable que contiene los datos en formato JSON.
                	                </li>
                	                <ul>
                	                  <li>
                	                    <span class="arrow">curl_setopt($</span><span class="comentariosBgW">ch</span><span class="arrow">,</span> <span class="orangeBgW">CURLOPT_POSTFIELDS</span><span class="arrow">, $</span><span class="comentariosBgW">datos_string</span><span class="arrow">);</span>
                	                  </li>
                	                </ul>

                	                <br>

                	                <li>
                	                  Configuramos "CURLOPT_RETURNTRANSFER" como "true" para devolver el resultado de la transferencia como string del valor de curl_exec() en lugar de mostrarlo directamente.
                	                </li>
                	                <ul>
                	                  <li>
                	                    <span class="arrow">curl_setopt($</span><span class="comentariosBgW">ch</span><span class="arrow">,</span> <span class="orangeBgW">CURLOPT_POSTFIELDS</span><span class="arrow">, </span><span class="orangeBgW">true</span><span class="arrow">);</span>
                	                  </li>
                	                </ul>

                	                <br>

                	                <li>
                	                  Indicamos en la cabecera que el formato en el que vamos a enviar los datos es en JSON y el tamaño del contenido.
                	                </li>
                	                <ul>
                	                  <li>
                	                    <span class="arrow">curl_setopt($</span><span class="comentariosBgW">ch</span><span class="arrow">,</span> <span class="orangeBgW">CURLOPT_HTTPHEADER</span><span class="arrow">, array(</span>
                	                    <br>
                	                    <span class="pl-2 arrow">'</span><span class="comentariosBgW">Content-Type: application/json</span><span class="arrow">',</span>
                	                    <br>
                	                    <span class="pl-2 arrow">'</span><span class="comentariosBgW">Content-Length:</span><span class="arrow"> '.strlen($</span><span class="comentariosBgW">datos_string</span><span class="arrow">))</span>
                	                    <br>
                	                    <span class="arrow">);</span>
                	                  </li>
                	                </ul>

                	                <br>

                	                <li>
                	                  Obtenemos el resultado y lo asociamos a la variable "resultado".
                	                </li>
                	                <ul>
                	                  <li>
                	                    <span class="arrow">$</span><span class="comentariosBgW">resultado</span><span class="arrow"> = curl_exec($</span><span class="comentariosBgW">ch</span><span class="arrow">);</span>
                	                  </li>
                	                </ul>

                	                <br>

                	                <li>
                	                  Decodificamos el resultado y lo asociamos a la variable "enlace".
                	                </li>
                	                <ul>
                	                  <li>
                	                    <span class="arrow">$</span><span class="comentariosBgW">enlace</span><span class="arrow"> = json_decode($</span><span class="comentariosBgW">resultado</span><span class="arrow">);</span>
                	                  </li>
                	                </ul>

                	                <br>

                	                <li>
                	                  Mostramos el enlace llamando al objeto que contiene esta información "hppPayByLink".
                	                </li>
                	                <ul>
                	                  <li>
                	                    <span class="arrow">print $</span><span class="comentariosBgW">enlace</span><span class="arrow">->{'</span><span class="comentariosBgW">hppPayByLink</span><span class="arrow">'};</span>
                	                  </li>
                	                </ul>

                	              </ul>

                	              <div class="p-4 mb-4 panelCode">
                	                <code>
                	                    <b>
                	                        <span class="etiqueta">&lt;?php</span>
                	                    </b>
                	                    <br>
                	                    <br>
                	                        <span class="pl-3 comments">// Iniciamos la petición</span>
                	                    <br>
                	                        <span class="pl-3">$</span><span class="variables">ch</span> <span class="require">=</span> <span class="new">curl_init(</span>$<span class="variables">url</span><span class="new">);</span>
                	                    <br>
                	                    <br>
                	                        <span class="pl-3 comments">// Indicamos que el método de envío es mediante POST</span>
                	                    <br>
                	                        <span class="pl-3 new">curl_setopt(</span>$<span class="variables">ch</span><span class="require">,</span> <span class="orange">CURLOPT_CUSTOMREQUEST</span><span class="require">,</span> <span class="new">"</span><span class="green">POST</span><span class="new">");</span>
                	                    <br>
                	                    <br>
                	                        <span class="pl-3 comments">// Añadimos los datos datos en formato JSON</span>
                	                    <br>
                	                        <span class="pl-3 new">curl_setopt(</span>$<span class="variables">ch</span><span class="require">,</span> <span class="orange">CURLOPT_POSTFIELDS</span><span class="require">,</span> $<span class="variables">datos_string</span><span class="new">);</span>
                	                    <br>
                	                    <br>
                	                        <span class="pl-3 comments">// TRUE para devolver el resultado de la transferencia como string</span>
                	                    <br>
                	                        <span class="pl-3 new">curl_setopt(</span>$<span class="variables">ch</span><span class="require">,</span> <span class="orange">CURLOPT_RETURNTRANSFER</span><span class="require">,</span> <span class="orange">true</span><span class="new">);</span>
                	                    <br>
                	                    <br>
                	                        <span class="pl-3 comments">// Formato JSON</span>
                	                    <br>
                	                        <span class="pl-3 new">curl_setopt(</span>$<span class="variables">ch</span><span class="require">,</span> <span class="orange">CURLOPT_HTTPHEADER</span><span class="require">,</span> <span class="new">array(</span>
                	                    <br>
                	                        <span class="pl-5 new">'</span><span class="green">Content-Type: application/json</span><span class="new">'</span><span class="require">,</span>
                	                    <br>
                	                        <span class="pl-5 new">'</span><span class="green">Content-Length: </span><span class="new">'.strlen</span><span class="new">(</span>$<span class="variables">datos_string</span><span class="new">))</span>
                	                    <br>
                	                        <span class="pl-3 new">);</span>
                	                    <br>
                	                    <br>
                	                        <span class="pl-3 comments">// Resultado</span>
                	                    <br>
                	                        <span class="pl-3">$</span><span class="variables">resultado</span> <span class="require">=</span> <span class="new">curl_exec(</span>$<span class="variables">ch</span><span class="new">);</span>
                	                    <br>
                	                    <br>
                	                        <span class="pl-3 comments">// Decodificamos el resultado</span>
                	                    <br>
                	                        <span class="pl-3">$</span><span class="variables">enlace</span> <span class="require">=</span> <span class="new">json_decode(</span>$<span class="variables">resultado</span><span class="new">);</span>
                	                    <br>
                	                    <br>
                	                        <span class="pl-3 comments">// Mostramos el resultado</span>
                	                    <br>
                	                        <span class="pl-3 new">print "</span><span class="green">Enlace = </span><span class="green"><</span><span class="green">a href='</span><span class="new">".</span>$<span class="variables">enlace</span><span class="new">->{'</span><span class="green">hppPayByLink</span><span class="new">'}."</span><span class="green">'></span><span class="new">".</span>$<span class="variables">enlace</span><span class="new">->{'</span><span class="green">hppPayByLink</span><span class="new">'}."</span><span class="green"><</span><span class="green">/a></span><span class="new">";</span>
                	                    <br>
                	                    <br>
                	                    <b>
                	                        <span class="etiqueta">?&gt;</span>
                	                    </b>
                	                </code>
                	            </div>
                	        </div>            
                	    </div>
                	    <!-- Fin punto 2 -->
                	
                	    <!-- Punto 3 -->
                	    <div class="contenedor">
                	        <div class="pl-3 pt-3 mb-2 pb-2 pr-3 text-justify">
                	            <h3 class="pt-1" id="form3">
                	                3. Formulario de ejemplo
                	            </h3>

                	            <hr>

                	            <p>
                	                Para poder procesar la transacción con el formulario de ejemplo, debe modificar el archivo "pay.php" que se encuentra en la ruta "test\php\HPP\01 - Pagos con tarjeta\03 - Pay By Link".
                	            </p>

                	            <p>
                	                Debe introducir sus datos de configuración tal y como se muestra en el punto 2.1 "Configuración del terminal".
                	            </p>

                	            <hr>

                	            <h5 id="form3.1" class="mt-3">
                	                3.1 Formulario
                	            </h5>

                	            <p>
                	                El siguiente formulario le permite enviar una validación contra el entorno de pruebas de Addon Payments introduciendo los datos adicionales del usuario.
                	            </p>

                	            <form id="formulario_envio" method="POST" autocomplete="off" class="col-lg-12" action="pay.php">
                	            <!-- Caja 1 -->
                	            <div class="row justify-content-around formulario">
                	                <!-- Datos del pagador-->
                	                    <div class="col-lg-4">
                	                        <div class="row">
                	                            <div class="col-lg-12 mt-2">
                	                                <h4 class="pt-2">Datos del pagador</h4>
                	                                <div class="form-row">
                	                                  <div class="form-group col-md-4">
                	                                      <label for="tel">Teléfono</label>
                	                                      <input type="tel" class="form-control" id="tel" name="tel" value="123456789" />
                	                                  </div>
                	                                  <div class="form-group col-md-8">
                	                                      <label for="email">Email</label>
                	                                      <input type="email" class="form-control" id="email" name="email" value="email@ejemplo.com" />
                	                                  </div>
                	                                </div>

                	                                <div class="form-group">
                	                                     <label for="lang">Lenguaje de la pasarela</label>
                	                                    <select class="form-control" name="lang">
                	                                        <option value="es" name="lang">Español</option>
                	                                        <option value="es_ca" name="lang">Catalan</option>
                	                                        <option value="es_eu" name="lang">Vasco</option>
                	                                        <option value="en" name="lang">Inglés</option>
                	                                    </select>
                	                                </div>

                	                                <div class="form-group">
                	                                    <label for="comment1">Comentarios</label>
                	                                    <textarea type="textarea" maxlength="255" placeholder="Comentarios" class="form-control" id="comment1" name="comment1" value="comment1" style="height: 124px;"></textarea>
                	                                </div>
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
                	                                    <label for="bill1">Dirección 1 de facturación</label>
                	                                    <input type="text" class="form-control" id="bill1" name="bill1" value="Los Preciados 123" />
                	                                </div>
                	                                <div class="form-group">
                	                                    <label for="bill2">Dirección 2 de facturación</label>
                	                                    <input type="text" class="form-control" id="bill2" name="bill2" value="Plaza Catalunya 456" />
                	                                </div>

                	                                <div class="form-row">
                	                                    <div class="form-group col-md-8">
                	                                        <label for="bill3">Dirección 3 de facturación</label>
                	                                        <input type="text" class="form-control" id="bill3" name="bill3" value="Sótano" />
                	                                    </div>
                	                                    <div class="form-group col-md-4">
                	                                        <label for="pais">País</label>
                	                                        <select class="form-control" name="pais">
                	                                            <option value="ES" name="pais">España</option>
                	                                            <option value="GB" name="pais">Reino Unido</option>
                	                                        </select>
                	                                    </div>
                	                                </div>

                	                                <div class="form-row">
                	                                    <div class="form-group col-md-6">
                	                                        <label for="billcity">Ciudad</label>
                	                                        <input type="text" class="form-control" id="billcity" name="billcity" value="Elche" />
                	                                    </div>
                	                                    <div class="form-group col-md-6">
                	                                        <label for="billCP">Código Postal</label>
                	                                        <input type="text" class="form-control" id="billCP" name="billCP" value="03201" />
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
                	                                    <label for="ship1">Dirección 1 de envío</label>
                	                                    <input type="text" class="form-control" id="ship1" name="ship1" value="Envío 123" />
                	                                </div>
                	                                <div class="form-group">
                	                                    <label for="ship2">Dirección 2 de envío</label>
                	                                    <input type="text" class="form-control" id="ship2" name="ship2" value="Envío 456" />
                	                                </div>
                	                                <div class="form-row">
                	                                    <div class="form-group col-md-8">
                	                                        <label for="ship3">Dirección 3 de envío</label>
                	                                        <input type="text" class="form-control" id="ship3" name="ship3" value="Azotea" />
                	                                    </div>
                	                                    <div class="form-group col-md-4">
                	                                        <label for="shipstate">País</label>
                	                                        <select class="form-control" name="shipstate">
                	                                            <option value="ES" name="shipstate">España</option>
                	                                            <option value="GB" name="shipstate">Reino Unido</option>
                	                                        </select>
                	                                    </div>
                	                                </div>

                	                                <div class="form-row">
                	                                    <div class="form-group col-md-6">
                	                                        <label for="shipcity">Ciudad</label>
                	                                        <input type="text" class="form-control" id="shipcity" name="shipcity" value="Elche" />
                	                                    </div>
                	                                    <div class="form-group col-md-6">
                	                                        <label for="shipCP">Código Postal</label>
                	                                        <input type="text" class="form-control" id="shipCP" name="shipCP" value="03201" />
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

                	                                <h4 class="pt-2">Datos del producto</h4>

                	                                <div class="form-group">
                	                                  <label for="varref">VAR_REF</label>
                	                                  <input type="text" maxlength="50" class="form-control" id="varref" name="varref" value="QBCT5478-6h6fq7ed6-f9f3qwf" required/>
                	                                </div>

                	                                <div class="form-row">
                	                                    <div class="form-group col-md-6">
                	                                      <label>PROD_ID</label>
                	                                      <input type="text" maxlength='50' class="form-control" id="prodid" name="prodid" value="152468748" required>
                	                                    </div>
                	                                    <div class="form-group col-md-6">
                	                                      <label for="cust">CUST_NUM</label>
                	                                      <input type="text" maxlength="50" class="form-control" id="cust" name="cust" value="2394jadi-Q23R2Q-D21234" required/>
                	                                    </div>
                	                                </div>

                	                                <div class="form-group">
                	                                  <label for="">Datos adicionales</label>
                	                                  <textarea type="text" class="form-control" id="" name="supp" placeholder="Datos adicionales"></textarea>
                	                                </div>

                	                              <p>
                	                                <input type="hidden" id="importe" name="importe" value="56420" />
                	                                <b>Importe:</b> <span>564.20€</span>
                	                              </p>
                	                                <!-- Datos de tarjeta -->
                	                                <div class="form-group row">
                	                                    <div class="col-sm-12">
                	                                        <button type="submit" class="btn btn-block btn-primary">Crear enlace</button>
                	                                    </div>
                	                                </div>
                	                            </div>
                	                        </div>
                	                    </div>
                	                </div>
                	            <!-- /Caja 2 -->
                	            </form>
                	            
                	            <hr>

                	            <h5 id="response">
                	                3.2 Respuesta de la operación
                	            </h5>

                	            <small class="form-text text-muted alert alert-primary">
                	                --&gt; La respuesta se muestra al final de cada operación dentro del dominio de la pasarela de pagos. Si desea modificar dicha respuesta, puede acceder al archivo "response.php" y  modificar los valores que quiera mostrar en la pasarela de pagos. Para obtener más información sobre la excepción de "try - catch" puede ver la <a target="_blank" href="https://www.php.net/manual/es/language.exceptions.php">documentación oficial de PHP.</a>
                	            </small>

                	            <div id="server-results" class="pb-2">
                	                <p>
                	                    Su respuesta aparecerá aquí.
                	                </p>
                	            </div>
                	        </div>
                	    </div>
                	    <!-- Fin punto 3 -->
            	   
                    </div>
                    <!-- /Contenido común -->

                </div>
            </div>
        </div>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <script src="../../../../assets/js/barraprogreso.js"></script>

        <script>
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
