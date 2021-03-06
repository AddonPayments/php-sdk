<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="Víctor Cantera">
        <link rel="icon" href="../../../../assets/img/comercia_ico.png" type="image/x-icon"/ >
        <title>Fraud Management (HPP) -SDK PHP</title>

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
                        <a class="nav-link pl-2 dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
                                <a class="dropdown-item pl-2" href="../../01%20-%20Pagos%20con%20tarjeta/01%20-%20Authorization/index.php">Autorización</a>
                                <a class="dropdown-item pl-2" href="../../01%20-%20Pagos%20con%20tarjeta/02%20-%20OTB/index.php">OTB</a>
                                <a class="dropdown-item pl-2" href="../../01%20-%20Pagos%20con%20tarjeta/03%20-%20Pay%20By%20Link/index.php">Pay By Link</a>
                                <a class="dropdown-item pl-2" href="../../01%20-%20Pagos%20con%20tarjeta/04%20-%20Auth%20con%20iframe/index.php">Iframe</a>
                                <a class="dropdown-item pl-2" href="../../01%20-%20Pagos%20con%20tarjeta/05%20-%20Lightbox/index.php">Lightbox</a>
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
                        <a class="nav-link pl-2 dropdown-toggle active" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
                                <a class="dropdown-item pl-2 active"  href="#">Filtro de fraude</a>
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
                                <a class="dropdown-item pl-2" href="../../05%20-%203DS2/03%20-%20OTB/index.php">OTB con 3DS2</a>
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
                                <a class="nav-link" href="#fraud">1. Filtro de fraude</a>
                                <nav class="nav nav-pills flex-column">
                                    <a class="nav-link ml-3 my-1" href="#codigoEjemplo">1.1 Código de ejemplo</a>
                                </nav>
                                <a class="nav-link" href="#descripciones">2. Descripciones</a>
                                <nav class="nav nav-pills flex-column">
                                    <a class="nav-link ml-3 my-1" id="#ConfigTerminal" href="#ConfigTerminal">2.1 Configuración del terminal</a>
                                    <a class="nav-link ml-3 my-1" id="#customerData" href="#customerData">2.2 Datos del cliente</a>
                                    <a class="nav-link ml-3 my-1" id="#envioOP" href="#envioOP">2.3 Envío de la operación</a>
                                </nav>
                                <a class="nav-link" href="#FormEjemplo1">3. Formulario de ejemplo</a>
                                <nav>
                                    <a class="nav-link ml-3 my-1" href="#Formulario">3.1 Formulario</a>
                                    <a class="nav-link ml-3 my-1" href="#respuestaForm">3.2 Respuesta de operación</a>
                                </nav>
                            </nav>
                        </nav>
                    </div>

                    <div class="col-lg-10" >
                        <!-- Punto 1 -->
                        <div class="contenedor">
                            <div class="pl-3 pt-3 pr-3 pb-4 mb-3 text-justify">
                                <h3 id="fraud" class="titulo">
                                    1. Filtro de fraude
                                </h3>
                                <hr>

                                <p>
                                   Esta guía describe cómo puede configurar el modo de filtro de fraude en la solicitud de HPP y cómo acceder a los resultados devueltos en la respuesta de HPP.
                                </p>

                                <ul>
                                    <li>
                                        Si en el portal de comercio electrónico el filtro de fraude está desactivado, ninguno de los campos relevantes se devolverá en la respuesta de HPP. De manera similar, si el modo se cambia entre Activo y Pasivo, este cambio también se reflejará en el campo HPP_FRAUDFILTER_MODE en la respuesta de HPP.
                                    </li>

                                    <br>

                                    <li>
                                        Si se agrega una regla, se devolverá un nuevo campo de respuesta, HPP_FRAUDFILTER_RULE_ <ID> en la respuesta.
                                    </li>

                                    <br>

                                    <li>
                                        Si se elimina una regla, el HPP_FRAUDFILTER_RULE_ <ID> correspondiente se eliminará de la respuesta
                                    </li>
                                </ul>

                                <h5 style="" class="pt-3" id="codigoEjemplo">
                                    1.1 Código de ejemplo
                                </h5>
                                
                                <hr>

                                <div class="p-4 panelCode">
                                    <code>
                                        <b>
                                            <span class="etiqueta">&lt;?php</span>
                                        </b>
                                        <br>
                                            <span class="comments">// Imports necesarios para la creación de un cliente</span>
                                        <br>
                                            <span class="require">require_once('<span class="green">vendor/autoload.php</span>');</span>
                                        <br>
                                        <br>
                                            <span class="pl-3 require">use <span class="imports">AddonPayments\Api\ServicesConfig</span>;</span>
                                        <br>
                                            <span class="pl-3 require">use <span class="imports">AddonPayments\Api\HostedPaymentConfig</span>;</span>
                                        <br>
                                            <span class="pl-3 require">use <span class="imports">AddonPayments\Api\Services\HostedService</span>;</span>
                                        <br>
                                            <span class="pl-3 require">use <span class="imports">AddonPayments\Api\Entities\HostedPaymentData</span>;</span>
                                        <br>
                                            <span class="pl-3 require">use <span class="imports">AddonPayments\Api\Entities\Enums\HppVersion</span>;</span>
                                        <br>
                                            <span class="pl-3 require">use <span class="imports">AddonPayments\Api\Entities\Address</span>;</span>
                                        <br>
                                            <span class="pl-3 require">use <span class="imports">AddonPayments\Api\Entities\Enums\AddressType</span>;</span>
                                        <br>
                                            <span class="pl-3 require">use <span class="imports">AddonPayments\Api\Entities\Enums\FraudFilterMode</span>;</span>
                                        <br>
                                            <span class="pl-3 require">use <span class="imports">AddonPayments\Api\Entities\Exceptions\ApiException</span>;</span>
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
                                            <span class="pl-3">$</span><span class="variables">config</span><span class="require">-></span><span class="variables">serviceUrl</span> <span class="require">= "</span><span class="green">URL</span><span class="require">";</span>
                                        <br>
                                            <span class="pl-3">$</span><span class="variables">config</span><span class="require">-></span><span class="variables">hostedPaymentConfig</span> <span class="require">=</span> <span class="new">new</span> <span class="service">HostedPaymentConfig()</span><span class="require">;</span>
                                        <br>
                                            <span class="pl-3">$</span><span class="variables">config</span><span class="require">-></span><span class="variables">hostedPaymentConfig</span><span class="require">-></span><span class="variables">version</span> <span class="require">=</span> <span class="service">HppVersion</span><span class="require">::VERSION_2;</span>
                                        <br>
                                            <span class="pl-3">$</span><span class="variables">config</span><span class="require">-></span><span class="variables">hostedPaymentConfig</span><span class="require">-></span><span class="variables">FraudFilterMode</span> <span class="require">=</span> <span class="service">FraudFilterMode</span><span class="require">::PASSIVE;</span>
                                        <br>
                                            <span class="pl-3">$</span><span class="variables">service</span> <span class="require">=</span> <span class="new">new</span> <span class="service">HostedService(</span>$<span class="variables">config</span><span class="service">)</span><span class="require">;</span>
                                        <br>
                                        <br>
                                            <span class="pl-3 comments">// Datos que deben transferirse a la HPP junto con las opciones de nivel de transacción</span>
                                        <br>
                                            <span class="pl-3">$</span><span class="variables">hostedPaymentData</span> <span class="require">=</span> <span class="new">new</span> <span class="service">HostedPaymentData()</span><span class="require">;</span>
                                        <br>
                                            <span class="pl-3">$</span><span class="variables">hostedPaymentData</span><span class="require">-></span><span class="variables">customerNumber</span> <span class="require">= "</span><span class="green">E8953893489</span><span class="require">";</span>
                                        <br>
                                            <span class="pl-3">$</span><span class="variables">hostedPaymentData</span><span class="require">-></span><span class="variables">productId</span> <span class="require">= "</span><span class="green">SKU</span><span class="require">";</span>
                                        <br>
                                        <br>
                                            <span class="pl-3">$</span><span class="variables">billingAddress</span> <span class="require">=</span> <span class="new">new</span> <span class="service">Address()</span><span class="require">;</span>
                                        <br>
                                            <span class="pl-3">$</span><span class="variables">billingAddress</span><span class="require">-></span><span class="variables">postalCode</span> <span class="require">= "</span><span class="green">03201</span><span class="require">";</span>
                                        <br>
                                            <span class="pl-3">$</span><span class="variables">billingAddress</span><span class="require">-></span><span class="variables">country</span> <span class="require">= "</span><span class="green">724</span><span class="require">";</span> <span class=" comments">// ISO 3166-1</span>
                                        <br>
                                        <br>
                                            <span class="pl-3">$</span><span class="variables">shippingAddress</span> <span class="require">=</span> <span class="new">new</span> <span class="service">Address()</span><span class="require">;</span>
                                        <br>
                                            <span class="pl-3">$</span><span class="variables">shippingAddress</span><span class="require">-></span><span class="variables">postalCode</span> <span class="require">= "</span><span class="green">03201</span><span class="require">";</span>
                                        <br>
                                            <span class="pl-3">$</span><span class="variables">shippingAddress</span><span class="require">-></span><span class="variables">country</span> <span class="require">= "</span><span class="green">724</span><span class="require">";</span> <span class=" comments">// ISO 3166-1</span>
                                        <br>
                                        <br>
                                            <span class="pl-3 comments">// Referencia variable</span>
                                        <br>
                                            <span class="pl-3">$</span><span class="variables">variableReference</span> <span class="require">= "</span><span class="green">Car Part HV</span><span class="require">";</span>
                                        <br>
                                        <br>
                                            <span class="pl-3 comments">// Lanzamos la petición al servidor de Addon Payments</span>
                                        <br>
                                            <span class="pl-3 new">try</span><span class="require"> {</span>
                                        <br>
                                            <span class="pl-4">$</span><span class="variables">hppJson</span> <span class="require">=</span> $<span class="variables">service</span><span class="require">-></span><span class="configure">charge</span><span class="require">(</span><span class="variables">20</span><span class="require">)</span>
                                        <br>
                                            <span class="pl-5 require">-></span><span class="configure">withCurrency</span><span class="require">("</span><span class="green">EUR</span><span class="require">")</span>
                                        <br>
                                            <span class="pl-5 require">-></span><span class="configure">withHostedPaymentData</span><span class="require">(</span>$<span class="variables">hostedPaymentData</span><span class="require">)</span>
                                        <br>
                                            <span class="pl-5 require">-></span><span class="configure">withAddress</span><span class="require">(</span>$<span class="variables">billingAddress</span><span class="require">,</span> <span class="service">AddressType</span><span class="require">::BILLING)</span>
                                        <br>
                                            <span class="pl-5 require">-></span><span class="configure">withAddress</span><span class="require">(</span>$<span class="variables">shippingAddress</span><span class="require">,</span> <span class="service">AddressType</span><span class="require">::SHIPPING)</span>
                                        <br>
                                            <span class="pl-5 require">-></span><span class="configure">withClientTransactionId</span><span class="require">(</span>$<span class="variables">variableReference</span><span class="require">)</span>
                                        <br>
                                             <span class="pl-5 require">-></span><span class="configure">serialize</span><span class="require">();</span>
                                        <br>
                                        <br>
                                            <span class="pl-4 configure">echo</span> $<span class="variables">hppJson</span><span class="require">;</span>
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
                                <!-- Fin código ejemplo-->
                            </div>
                        </div>
                        <!-- Fin punto 1 -->

                        <!-- Punto 2 -->
                        <div class="contenedor">
                            <div class="pl-3 pt-3 pr-3 pb-1 mb-3 text-justify">
                                <h3 class="pt-1" id="descripciones">
                                    2. Descripciones
                                </h3>

                                <hr>

                                <h5 id="ConfigTerminal" class="mt-3">
                                    2.1 Configuración del terminal
                                </h5>

                                <p>
                                   Debemos introducir los datos de configuración que se facilitan en la llamada de cualificación del soporte técnico de Addon Payments.
                                </p>

                                <ul>
                                   <li>
                                       Merchant_ID = Identificador del comercio.
                                   </li>

                                   <br>

                                   <li>
                                       SubAccount = Subcuenta faciltiada en la llamada de cualificación (en caso de que se envíe la operación sin subcuenta, se usará la establecida por defecto en la creación de su terminal).
                                   </li>

                                   <br>

                                   <li>
                                       Shared Secret = Contraseña de seguridad del terminal.
                                   </li>

                                   <br>

                                   <li>
                                       Modo de filtro = Parámetro opcional utilizado para determinar en qué grado se ejecuta el Filtro de Fraude. Si no se envía, el Filtro de Fraude se comportará de acuerdo con la configuración del modo del Portal de Comercio Electrónico. Puede tomar 2 valores:
                                   </li>

                                   <ul>
                                       <li>
                                           PASIVO - Ejecuta las reglas pero no ejecuta la acción detallada en el Fraude Filtrar el resultado general (por ejemplo, MANTENER o BLOQUEAR)
                                       </li>

                                       <br>

                                       <li>
                                           DESACTIVADO: no ejecuta el Filtro de fraude para esta transacción, en este caso, solo se devuelve el modo en la respuesta.
                                       </li>
                                   </ul>

                                </ul>
                                <small class="form-text text-muted alert alert-primary">
                                    --&gt; En caso de que le falte algún dato de los mencionados arriba, debe contactar con su soporte técnico de Addon Payments llamando al teléfono 914 353 028 (opción 2) o enviando un email al correo electrónico <a target="_blank" href="mailto:soporteaddonpayments.com">soporteaddonpayments.com</a>.
                                </small>
                                <div class="p-4 mb-4 panelCode">
                                    <code>
                                        <b>
                                            <span class="etiqueta">&lt;?php</span>
                                        </b>
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
                                            <span class="pl-3">$</span><span class="variables">config</span><span class="require">-></span><span class="variables">serviceUrl</span> <span class="require">= "</span><span class="green">URL</span><span class="require">";</span>
                                        <br>
                                        <br>
                                            <span class="pl-3 comments">// Debemos enviar la versión 2 de HPP_VERSION</span>
                                        <br>
                                            <span class="pl-3">$</span><span class="variables">config</span><span class="require">-></span><span class="variables">hostedPaymentConfig</span> <span class="require">=</span> <span class="new">new</span> <span class="service">HostedPaymentConfig()</span><span class="require">;</span>
                                        <br>
                                            <span class="pl-3">$</span><span class="variables">config</span><span class="require">-></span><span class="variables">hostedPaymentConfig</span><span class="require">-></span><span class="variables">version</span> <span class="require">=</span> <span class="service">HppVersion</span><span class="require">::VERSION_2;</span>
                                        <br>
                                        <br>
                                            <span class="pl-3 comments">// Modo de filtro = Pasivo</span>
                                        <br>
                                            <span class="pl-3">$</span><span class="variables">config</span><span class="require">-></span><span class="variables">hostedPaymentConfig</span><span class="require">-></span><span class="variables">FraudFilterMode</span> <span class="require">=</span> <span class="service">FraudFilterMode</span><span class="require">::PASSIVE;</span>
                                        <br>
                                            <span class="pl-3">$</span><span class="variables">service</span> <span class="require">=</span> <span class="new">new</span> <span class="service">HostedService(</span><span class="require">$</span><span class="variables">config</span><span class="service">)</span><span class="require">;</span>
                                        <br>
                                        <br>
                                        <b>
                                            <span class="etiqueta">?&gt;</span>
                                        </b>
                                    </code>
                                </div>

                                <hr>

                                <h5 id="customerData" class="mt-3">
                                    2.2 Datos del cliente
                                </h5>

                                    <p>
                                       La información que debemos pasar al servidor es la siguiente:
                                    </p>

                                    <ul>
                                        <li>
                                            Creamos un nuevo objeto llamado "new HostedPaymentData()":
                                        </li>
                                        <ul>
                                            <li>
                                                <span class="arrow">$hostedPaymentData</span><span class="arrow"> = </span> <span class="orangeBgW">new </span><span class="arrow">HostedPaymentData();</span>
                                            </li>
                                        </ul>

                                        <br>

                                        <li>
                                            Indicamos el número de identificación del cliente y del producto: 
                                        </li>


                                        <ul>
                                            <li>
                                                <span class="arrow">$hostedPaymentData-></span><span class="variableBgW">customerNumber</span><span class="require"> = "</span><span class="comentariosBgW">E8953893489</span><span class="arrow">";</span>
                                            </li>

                                            <li>
                                                <span class="arrow">$hostedPaymentData-></span><span class="variableBgW">productId</span><span class="require"> = "</span><span class="comentariosBgW">SID9838383</span><span class="arrow">";</span>
                                            </li>
                                        </ul>

                                        <br>

                                        <li>
                                            Creamos un nuevo objeto para la dirección de facturación llamado "new Address()": 
                                        </li>
                                        <ul>
                                            <li>
                                                <span class="arrow">$billingAddress</span><span class="arrow"> = </span> <span class="orangeBgW">new </span><span class="arrow">Address();</span>
                                            </li>
                                        </ul>

                                        <br>

                                        <li>
                                            Indicamos el código postal del cliente y el país de facturación: 
                                        </li>

                                        <ul>
                                            <li>
                                                <span class="arrow">$billingAddress-></span><span class="variableBgW">postalCode</span><span class="require"> = "</span><span class="comentariosBgW">03201</span><span class="arrow">";</span>
                                            </li>

                                            <li>
                                                <span class="arrow">$billingAddress-></span><span class="variableBgW">country</span><span class="require"> = "</span><span class="comentariosBgW">ES</span><span class="arrow">";</span>
                                            </li>
                                        </ul>

                                        <br>

                                        <li>
                                            Creamos un nuevo objeto para la dirección de envío llamado "new Address()": 
                                        </li>

                                        <ul>
                                            <li>
                                                <span class="arrow">$shippingAddress-></span><span class="variableBgW">postalCode</span><span class="require"> = "</span><span class="comentariosBgW">03201</span><span class="arrow">";</span>
                                            </li>

                                            <li>
                                                <span class="arrow">$shippingAddress-></span><span class="variableBgW">country</span><span class="require"> = "</span><span class="comentariosBgW">ES</span><span class="arrow">";</span>
                                            </li>
                                        </ul>

                                        <br>

                                        <li>
                                            Indicamos la referencia variable = Cualquier referencia que también desee asignar a esta operación. También se puede utilizar para pasar la referencia del Adquirente, cuando sea posible.
                                        </li>
                                        <ul>
                                            <li>
                                                <span class="arrow">$variableReference-></span><span class="require"> = </span><span class="comentariosBgW">"Car Part HV"</span><span class="arrow">;</span>
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
                                                <span class="pl-3 comments">// Datos que deben transferirse a la HPP junto con las opciones de nivel de transacción</span>
                                            <br>
                                                <span class="pl-3">$</span><span class="variables">hostedPaymentData</span> <span class="require">=</span> <span class="new">new</span> <span class="service">HostedPaymentData()</span><span class="require">;</span>
                                            <br>
                                                <span class="pl-3">$</span><span class="variables">hostedPaymentData</span><span class="require">-></span><span class="variables">customerNumber</span> <span class="require">= "</span><span class="green">E8953893489</span><span class="require">";</span>
                                            <br>
                                                <span class="pl-3">$</span><span class="variables">hostedPaymentData</span><span class="require">-></span><span class="variables">productId</span> <span class="require">= "</span><span class="green">SKU</span><span class="require">";</span>
                                            <br>
                                            <br>
                                                <span class="pl-3">$</span><span class="variables">billingAddress</span> <span class="require">=</span> <span class="new">new</span> <span class="service">Address()</span><span class="require">;</span>
                                            <br>
                                                <span class="pl-3">$</span><span class="variables">billingAddress</span><span class="require">-></span><span class="variables">postalCode</span> <span class="require">= "</span><span class="green">03201</span><span class="require">";</span>
                                            <br>
                                                <span class="pl-3">$</span><span class="variables">billingAddress</span><span class="require">-></span><span class="variables">country</span> <span class="require">= "</span><span class="green">724</span><span class="require">";</span> <span class=" comments">// ISO 3166-1</span>
                                            <br>
                                            <br>
                                                <span class="pl-3">$</span><span class="variables">shippingAddress</span> <span class="require">=</span> <span class="new">new</span> <span class="service">Address()</span><span class="require">;</span>
                                            <br>
                                                <span class="pl-3">$</span><span class="variables">shippingAddress</span><span class="require">-></span><span class="variables">postalCode</span> <span class="require">= "</span><span class="green">03201</span><span class="require">";</span>
                                            <br>
                                                <span class="pl-3">$</span><span class="variables">shippingAddress</span><span class="require">-></span><span class="variables">country</span> <span class="require">= "</span><span class="green">724</span><span class="require">";</span> <span class=" comments">// ISO 3166-1</span>
                                            <br>
                                            <br>
                                                <span class="pl-3 comments">// Referencia variable</span>
                                            <br>
                                                <span class="pl-3">$</span><span class="variables">variableReference</span> <span class="require">= "</span><span class="green">Car Part HV</span><span class="require">";</span>
                                            <br>
                                            <br>
                                            <b>
                                                <span class="etiqueta">?&gt;</span>
                                            </b>
                                        </code>
                                    </div>

                                <hr>

                                <h5 id="envioOP" class="mt-3">
                                    2.3 Envío de la operación
                                </h5>

                                <p>
                                    Para enviar la operación debemos emplear el modelo de excepciones "try - catch". 
                                    <small class="form-text text-muted alert alert-primary">
                                        --&gt;Para obtener más información sobre la excepción de "try - catch" puede ver la <a target="_blank" href="https://www.php.net/manual/es/language.exceptions.php">documentación oficial de PHP.</a>
                                    </small>
                                </p>

                                <ul>
                                    <li>
                                        Comprobamos la tarjeta realizándole un cargo de mínimo 10 céntimos: 
                                    </li>
                                    <ul>
                                        <li>
                                            <span class="arrow">$</span><span class="variableBgW">service</span>
                                            <span class="arrow">->charge(</span><span class="comentariosBgW">20</span><span class="arrow">);</span>
                                        </li>
                                    </ul>

                                    <br>

                                    <li>
                                        Indicamos la moneda con la que vamos a realizar la operación: 
                                    </li>
                                    <ul>
                                        <li>
                                            <span class="arrow">->withCurrency("</span><span class="comentariosBgW">EUR</span><span class="arrow">")</span>
                                        </li>
                                    </ul>

                                    <br>

                                    <li>
                                        Indicamos los datos de configuración de la tarjeta: 
                                    </li>
                                    <ul>
                                        <li>
                                            <span class="arrow">->withHostedPaymentData($</span><span class="variableBgW">hostedPaymentData</span><span class="arrow">)</span>
                                        </li>
                                    </ul>

                                    <br>

                                    <li>
                                        Añadimos la dirección de facturación: 
                                    </li>
                                    <ul>
                                        <li>
                                            <span class="arrow">->withAddress($</span><span class="variableBgW">billingAddress</span><span class="arrow">, AddressType::BILLING)</span>
                                        </li>
                                    </ul>

                                    <br>

                                    <li>
                                        Añadimos la dirección de envío: 
                                    </li>
                                    <ul>
                                        <li>
                                            <span class="arrow">->withAddress($</span><span class="variableBgW">shippingAddress</span><span class="arrow">, AddressType::SHIPPING)</span>
                                        </li>
                                    </ul>

                                    <br>

                                    <li>
                                        Añadimos la dirección de envío: 
                                    </li>
                                    <ul>
                                        <li>
                                            <span class="arrow">->withClientTransactionId($</span><span class="variableBgW">variableReference</span><span class="arrow">)</span>
                                        </li>
                                    </ul>

                                    <br>

                                    <li>
                                        Serializamos los datos: 
                                    </li>
                                    <ul>
                                        <li>
                                            <span class="arrow">->serialize();</span>
                                        </li>
                                    </ul>

                                    <br>

                                    <li>
                                        Mostramos el formulario realizando un "echo" del JSON generado:
                                    </li>
                                    <ul>
                                        <li>
                                            <span class="arrow">echo $</span><span class="variableBgW">hppJson</span><span class="arrow">;</span>
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
                                           <span class="pl-3 comments">// Lanzamos la petición al servidor de Addon Payments</span>
                                       <br>
                                           <span class="pl-3 new">try</span><span class="require"> {</span>
                                       <br>
                                           <span class="pl-4">$</span><span class="variables">hppJson</span> <span class="require">=</span> $<span class="variables">service</span><span class="require">-></span><span class="configure">charge</span><span class="require">(</span><span class="variables">20</span><span class="require">)</span>
                                       <br>
                                           <span class="pl-5 require">-></span><span class="configure">withCurrency</span><span class="require">("</span><span class="green">EUR</span><span class="require">")</span>
                                       <br>
                                           <span class="pl-5 require">-></span><span class="configure">withHostedPaymentData</span><span class="require">(</span>$<span class="variables">hostedPaymentData</span><span class="require">)</span>
                                       <br>
                                           <span class="pl-5 require">-></span><span class="configure">withAddress</span><span class="require">(</span>$<span class="variables">billingAddress</span><span class="require">,</span> <span class="service">AddressType</span><span class="require">::BILLING)</span>
                                       <br>
                                           <span class="pl-5 require">-></span><span class="configure">withAddress</span><span class="require">(</span>$<span class="variables">shippingAddress</span><span class="require">,</span> <span class="service">AddressType</span><span class="require">::SHIPPING)</span>
                                       <br>
                                           <span class="pl-5 require">-></span><span class="configure">withClientTransactionId</span><span class="require">(</span>$<span class="variables">variableReference</span><span class="require">)</span>
                                       <br>
                                            <span class="pl-5 require">-></span><span class="configure">serialize</span><span class="require">();</span>
                                       <br>
                                       <br>
                                           <span class="pl-4 configure">echo</span> $<span class="variables">hppJson</span><span class="require">;</span>
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

                                <p class="pb-4">
                                    Para la respuesta realizamos un <span class="arrow">echo</span> de la función "<span class="arrow">getMessage()</span>".
                                    <br>
                                    <br>
                                    Con esta función obtenemos el motivo de la denegación del servidor. Para ver todos los errores de denegación actualizados, puede comprobar nuestra <a target="_blank" href="https://desarrolladores.addonpayments.com/#!/technical-resources/messages">documentación de Addon Payments.</a>
                                </p>

                            </div>
                        </div>

                        <!-- Punto 3 -->
                        <div class="contenedor">
                            <div class="pl-3 pt-3 pr-3 pb-4 mb-3 text-justify">
                                <h3 class="pt-1" id="FormEjemplo1">
                                    3. Formulario de ejemplo
                                </h3>

                                <hr>

                                <p>
                                    Para poder procesar un ingreso con el formulario de ejemplo, debe modificar el archivo "fraud.php" que se encuentra en la ruta "vendor\addonpayments\php-sdk\test\php\HPP\03 - Fraud Management\01 - Fraud Filter".
                                </p>

                                <p>
                                    Debe introducir sus datos de configuración tal y como se muestra en el punto 2.1 "Configuración del terminal".
                                </p>

                                <hr>

                                <h5 id="Formulario" class="mt-3">
                                    3.1 Formulario
                                </h5>

                                <p>
                                    El siguiente formulario le permite crear un cliente contra el entorno de pruebas de Addon Payments. Puede acceder al panel de administración ingresando en la siguiente URL e introduciendo sus datos de inicio de sesión:
                                    <ul>
                                         <li><a target="_blank" href="https://admin.sandbox.addonpayments.com">https://admin.sandbox.addonpayments.com.</a></li>
                                    </ul>
                                </p>

                                <div class="row justify-content-around">
                                    <div class="col-lg-4">
                                        <div class="row">
                                            <div class="col-lg-12 pt-3 mt-2 mb-2 formulario">
                                                <div class="form-group row">
                                                    <div class="col-sm-12">
                                                        <button type="submit" id="payButtonId" class="btn btn-block btn-primary">Filtro de fraude</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <hr>

                                <h5 id="respuestaForm">
                                    3.2 Respuesta de la operación
                                </h5>

                                <small class="form-text text-muted alert alert-primary">
                                    --&gt; La respuesta se encuentra dentro del fichero. Para obtener más información sobre la excepción de "try - catch" puede ver la <a target="_blank" href="https://www.php.net/manual/es/language.exceptions.php">documentación oficial de PHP.</a>
                                </small>
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

        <script>
          $(document).ready(function() {
            $.getJSON("fraud.php", function(jsonFromRequestEndpoint) {
              RealexHpp.setHppUrl("https://hpp.sandbox.addonpayments.com/pay");
              // When using full page redirect your Response URL must be an absolute link
              RealexHpp.redirect.init("payButtonId", "https://midominio.es/response.php", jsonFromRequestEndpoint);
              });
          });
        </script>

    </body>
</html>