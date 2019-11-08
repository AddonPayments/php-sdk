<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="Víctor Cantera">
        <link rel="icon" href="../../../../assets/img/comercia_ico.png" type="image/x-icon"/ >
        <title>Fraud Management (API) - SDK PHP</title>

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
                        <a class="nav-link dropdown-toggle pl-2" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Pagos con tarjeta
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <div class="dropdown-header text-center p-0">API</div>
                            <hr class="m-0 p-0">
                                <a class="dropdown-item pl-2" href="../../01%20-%20Pagos%20con%20tarjeta/01%20-%20Autorización/index.php">Autorización</a>
                                <a class="dropdown-item pl-2" href="../../01%20-%20Pagos%20con%20tarjeta/01%20-%20Autorización/DatosDelCliente.php">Datos adicionales</a>
                                <a class="dropdown-item pl-2" href="../../01%20-%20Pagos%20con%20tarjeta/02%20-%20OTB/index.php">OTB</a>
                                <a class="dropdown-item pl-2" href="../../01%20-%20Pagos%20con%20tarjeta/03%20-%20Credit/index.php">Credit</a>
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
                        <a class="nav-link dropdown-toggle pl-2" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
                        <a class="nav-link pl-2 dropdown-toggle active" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Filtro de fraude
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            
                            <div class="dropdown-header text-center p-0">API</div>
                            <hr class="m-0 p-0">
                                <a class="dropdown-item pl-2 active"  href="#">Filtro de fraude</a>
                                <a class="dropdown-item pl-2"  href="../02%20-%20Address%20Verification">Verificación de dirección</a>
                                <a class="dropdown-item pl-2"  href="../03%20-%20Hold">Retener transacción</a>
                                <a class="dropdown-item pl-2"  href="../04%20-%20Lanzamiento">Lanzar transacción</a>
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
                                   El filtro de Fraude le permite establecer reglas en el comercio electrónico mantener, bloquear o pasar transacciones. También puede proporcionar información adicional en la solicitud con la que puede establecer reglas. Esto incluye la dirección IP del cliente, los detalles de facturación y envío y los códigos específicos del producto.
                                </p>

                                <p class="alert alert-primary">
                                    Solo es posible establecer el modo Filtro de fraude en PASIVO o APAGADO para transacciones individuales en la solicitud. Si desea configurarlo como ACTIVO, debe configurarlo en el portal de comercio electrónico y se aplicará a todas las transacciones.
                                </p>

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
                                            <span class="pl-3 require">use <span class="imports">AddonPayments\Api\ServicesContainer</span>;</span>
                                        <br>
                                            <span class="pl-3 require">use <span class="imports">AddonPayments\Api\PaymentMethods\CreditCardData</span>;</span>
                                        <br>
                                            <span class="pl-3 require">use <span class="imports">AddonPayments\Api\Entities\Enums\CvnPresenceIndicator</span>;</span>
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
                                            <span class="pl-3 service">ServicesContainer</span><span class="configure">::configure</span><span class="require">(</span>$<span class="variables">config</span><span class="require">);</span>
                                        <br>
                                        <br>
                                            <span class="pl-3 comments">// Datos de la tarjeta del cliente</span>
                                        <br>
                                            <span class="pl-3">$</span><span class="variables">card</span> <span class="require">=</span> <span class="new">new</span> <span class="service">CreditCardData()</span><span class="require">;</span> <span class="comments">// Llamamos a la función CreditCardData()</span>
                                        <br>
                                            <span class="pl-3">$</span><span class="variables">card</span><span class="require">-></span><span class="variables">number</span> <span class="require">= "</span><span class="green">4263970000005262</span><span class="require">";</span> <span class="comments">// Tarjeta del cliente (en este caso una tarjeta de pruebas)</span>
                                        <br>
                                            <span class="pl-3">$</span><span class="variables">card</span><span class="require">-></span><span class="variables">expMonth</span> <span class="require">= "</span><span class="green">12</span><span class="require">";</span> <span class="comments">// Mes de expiración de la tarjeta</span>
                                        <br>
                                            <span class="pl-3">$</span><span class="variables">card</span><span class="require">-></span><span class="variables">expYear</span> <span class="require">= "</span><span class="green">2025</span><span class="require">";</span> <span class="comments">// Año de expiración de la tarjeta</span>
                                        <br>
                                            <span class="pl-3">$</span><span class="variables">card</span><span class="require">-></span><span class="variables">cvn</span> <span class="require">= "</span><span class="green">123</span><span class="require">";</span> <span class="comments">// Código de seguridad de la tarjeta</span>
                                        <br>
                                            <span class="pl-3">$</span><span class="variables">card</span><span class="require">-></span><span class="variables">cvnPresenceIndicator</span> <span class="require">=</span> <span class="service">CvnPresenceIndicator</span><span class="require">::PRESENT</span><span class="require">;</span> <span class="comments">// Función que indica que el cliente está presente a la hora de realizar el cargo (PRESENT)</span>
                                        <br>
                                            <span class="pl-3">$</span><span class="variables">card</span><span class="require">-></span><span class="variables">cardHolderName</span> <span class="require">= "</span><span class="green">Joan González</span><span class="require">";</span> <span class="comments">// Nombre del cliente</span>
                                        <br>
                                        <br>
                                            <span class="pl-3">$</span><span class="variables">billingAddress</span> <span class="require">=</span> <span class="new">new</span> <span class="service">Address()</span><span class="require">;</span>
                                        <br>
                                            <span class="pl-3">$</span><span class="variables">billingAddress</span><span class="require">-></span><span class="variables">postalCode</span> <span class="require">= "</span><span class="green">03201</span><span class="require">";</span>
                                        <br>
                                            <span class="pl-3">$</span><span class="variables">billingAddress</span><span class="require">-></span><span class="variables">country</span> <span class="require">= "</span><span class="green">ES</span><span class="require">";</span>
                                        <br>
                                        <br>
                                            <span class="pl-3">$</span><span class="variables">shippingAddress</span> <span class="require">=</span> <span class="new">new</span> <span class="service">Address()</span><span class="require">;</span>
                                        <br>
                                            <span class="pl-3">$</span><span class="variables">shippingAddress</span><span class="require">-></span><span class="variables">postalCode</span> <span class="require">= "</span><span class="green">03201</span><span class="require">";</span>
                                        <br>
                                            <span class="pl-3">$</span><span class="variables">shippingAddress</span><span class="require">-></span><span class="variables">country</span> <span class="require">= "</span><span class="green">ES</span><span class="require">";</span>
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
                                            <span class="pl-4">$</span><span class="variables">response</span> <span class="require">=</span> $<span class="variables">card</span><span class="require">-></span><span class="configure">charge</span><span class="require">(</span><span class="green">20</span><span class="require">)</span>
                                        <br>
                                            <span class="pl-5 require">-></span><span class="configure">withCurrency</span><span class="require">("</span><span class="green">EUR</span><span class="require">")</span>
                                        <br>
                                            <span class="pl-5 require">-></span><span class="configure">withAddress</span><span class="require">(</span>$<span class="variables">billingAddress</span><span class="require">,</span> <span class="service">AddressType</span><span class="require">::BILLING)</span>
                                        <br>
                                            <span class="pl-5 require">-></span><span class="configure">withAddress</span><span class="require">(</span>$<span class="variables">shippingAddress</span><span class="require">,</span> <span class="service">AddressType</span><span class="require">::SHIPPING)</span>
                                        <br>
                                            <span class="pl-5 require">-></span><span class="configure">withProductId</span><span class="require">("</span><span class="green">SKU</span><span class="require">")</span>
                                        <br>
                                            <span class="pl-5 require">-></span><span class="configure">withClientTransactionId</span><span class="require">("</span><span class="green">Car Part HV</span><span class="require">")</span>
                                        <br>
                                            <span class="pl-5 require">-></span><span class="configure">withCustomerId</span><span class="require">("</span><span class="green">E8953893489</span><span class="require">")</span>
                                        <br>
                                            <span class="pl-5 require">-></span><span class="configure">withCustomerIpAddress</span><span class="require">("</span><span class="green">123.123.123.123</span><span class="require">")</span>
                                        <br>
                                            <span class="pl-5 require">-></span><span class="configure">withFraudFilter</span><span class="require">(</span><span class="service">FraudFilterMode</span><span class="configure">::PASSIVE</span><span class="require">)</span>
                                        <br>
                                             <span class="pl-5 require">-></span><span class="configure">execute</span><span class="require">();</span>
                                        <br>
                                        <br>
                                            <span class="pl-4">$</span><span class="variables">fraudFilterResponse</span><span class="require"> = </span>$<span class="variables">response</span><span class="require">-></span><span class="variables">fraudFilterResponse</span> <span class="comments">// Asociamos el resultado a la variable "$fraudFilterResponse"</span>
                                        <br>
                                            <span class="pl-4">$</span><span class="variables">fraudResponseMode</span><span class="require"> = </span>$<span class="variables">fraudFilterResponse</span><span class="require">-></span><span class="variables">fraudResponseMode</span> <span class="comments">// Obtenemos el modo de filtro</span>
                                        <br>
                                            <span class="pl-4">$</span><span class="variables">fraudResponseOverallResult</span><span class="require"> = </span>$<span class="variables">fraudFilterResponse</span><span class="require">-></span><span class="variables">fraudResponseResult</span> <span class="comments">// El resultado total del filtro de fraude</span>
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
                                           <span class="pl-3">$</span><span class="variables">config</span><span class="require">-></span><span class="variables">serviceUrl</span> <span class="require">= "</span><span class="green">URL</span><span class="require">";</span> <span class="comments">// Se debe emplear una de las siguientes URL's:</span>
                                            <br>
                                                <span class="pl-5 comments">// Sandbox URL para el entorno de pruebas - <b>https://remote.sandbox.addonpayments.com/remote</b>.</span>
                                            <br>
                                                <span class="pl-5 comments">// Live URL para el entorno de producción - <b>https://remote.addonpayments.com/remote</b>.</span>
                                        <br>
                                            <span class="pl-3 service">ServicesContainer</span><span class="configure">::configure</span><span class="require">(</span>$<span class="variables">config</span><span class="require">);</span>
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
                                            Creamos un nuevo objeto tarjeta llamado "new CreditCardData()":
                                        </li>
                                        <ul>
                                            <li>
                                                <span class="arrow">new CreditCardData()</span><span class="require">;</span>
                                            </li>
                                        </ul>

                                        <br>

                                        <li>
                                            Indicamos cuál es el número de la tarjeta a la cual vamos a realizarle el cargo:
                                            <span class="comentariosBgW">"4263970000005262"</span><span class="arrow">;</span>
                                        </li>
                                        <ul>
                                            <li>
                                                <span class="arrow">$card-></span><span class="variableBgW">number</span><span class="require"> = "</span><span class="comentariosBgW">4263970000005262</span><span class="arrow">";</span>
                                            </li>
                                        </ul>

                                        <br>

                                        <li>
                                            Indicamos el mes de expiración:
                                        </li>
                                        <ul>
                                            <li>
                                                <span class="arrow">$card-></span><span class="variableBgW">expMonth</span><span class="require"> = "</span><span class="comentariosBgW">12</span><span class="arrow">";</span>
                                            </li>
                                        </ul>

                                        <br>

                                        <li>
                                            Indicamos la fecha de expiración:
                                        </li>
                                        <ul>
                                            <li>
                                                <span class="arrow">$card-></span><span class="variableBgW">expYear</span><span class="require"> = "</span><span class="comentariosBgW">2025</span><span class="arrow">";</span>
                                            </li>
                                        </ul>

                                        <br>

                                        <li>
                                            Indicamos el código de seguridad de la tarjeta:
                                        </li>
                                        <ul>
                                            <li>
                                                <span class="arrow">$card-></span><span class="variableBgW">cvn</span><span class="require"> = "</span><span class="comentariosBgW">123</span><span class="arrow">";</span>
                                            </li>
                                        </ul>

                                        <br>

                                        <li>
                                            <span class="arrow">CvnPresenceIndicator</span> Se utiliza para especificar si se está enviando el código de seguridad. Puede tener 4 valores:
                                            <br>

                                            <ul>
                                                <li>
                                                    "PRESENT" o "1" = El código de seguridad está presente.
                                                </li>
                                                <li>
                                                    "ILLEGIBLE" o "2" = El código de seguridad es ilegible.
                                                </li>
                                                <li>
                                                    "NOT_ON_CARD" o "3" = El código de seguridad no está en la tarjeta.
                                                </li>
                                                <li>
                                                    "NOT_REQUESTED" o "4" = No se solicita el código de seguridad.
                                                </li>
                                            </ul>
                                        </li>

                                        <br>

                                        <li>
                                            Nombre del titular de la tarjeta:
                                        </li>
                                        <ul>
                                            <li>
                                                <span class="arrow">$card-></span><span class="variableBgW">cardHolderName</span><span class="require"> = "</span><span class="comentariosBgW">Nombre del cliente</span><span class="arrow">";</span>
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
                                                <span class="pl-3 comments">// Datos de la tarjeta del cliente</span>
                                            <br>
                                                <span class="pl-3">$</span><span class="variables">card</span> <span class="require">=</span> <span class="new">new</span> <span class="service">CreditCardData()</span><span class="require">;</span> <span class="comments">// Llamamos a la función CreditCardData()</span>
                                            <br>
                                                <span class="pl-3">$</span><span class="variables">card</span><span class="require">-></span><span class="variables">number</span> <span class="require">= "</span><span class="green">4263970000005262</span><span class="require">";</span> <span class="comments">// Tarjeta del cliente (en este caso una tarjeta de pruebas)</span>
                                            <br>
                                                <span class="pl-3">$</span><span class="variables">card</span><span class="require">-></span><span class="variables">expMonth</span> <span class="require">= "</span><span class="green">12</span><span class="require">";</span> <span class="comments">// Mes de expiración de la tarjeta</span>
                                            <br>
                                                <span class="pl-3">$</span><span class="variables">card</span><span class="require">-></span><span class="variables">expYear</span> <span class="require">= "</span><span class="green">2025</span><span class="require">";</span> <span class="comments">// Año de expiración de la tarjeta</span>
                                            <br>
                                                <span class="pl-3">$</span><span class="variables">card</span><span class="require">-></span><span class="variables">cvn</span> <span class="require">= "</span><span class="green">123</span><span class="require">";</span> <span class="comments">// Código de seguridad de la tarjeta</span>
                                            <br>
                                                <span class="pl-3">$</span><span class="variables">card</span><span class="require">-></span><span class="variables">cvnPresenceIndicator</span> <span class="require">=</span> <span class="service">CvnPresenceIndicator</span><span class="require">::PRESENT</span><span class="require">;</span> <span class="comments">// Función que indica que el cliente está presente a la hora de realizar el cargo (PRESENT)</span>
                                            <br>
                                                <span class="pl-3">$</span><span class="variables">card</span><span class="require">-></span><span class="variables">cardHolderName</span> <span class="require">= "</span><span class="green">Joan González</span><span class="require">";</span> <span class="comments">// Nombre del cliente</span>
                                            <br>
                                            <br>
                                                <span class="pl-3">$</span><span class="variables">billingAddress</span> <span class="require">=</span> <span class="new">new</span> <span class="service">Address()</span><span class="require">;</span>
                                            <br>
                                                <span class="pl-3">$</span><span class="variables">billingAddress</span><span class="require">-></span><span class="variables">postalCode</span> <span class="require">= "</span><span class="green">03201</span><span class="require">";</span>
                                            <br>
                                                <span class="pl-3">$</span><span class="variables">billingAddress</span><span class="require">-></span><span class="variables">country</span> <span class="require">= "</span><span class="green">ES</span><span class="require">";</span>
                                            <br>
                                            <br>
                                                <span class="pl-3">$</span><span class="variables">shippingAddress</span> <span class="require">=</span> <span class="new">new</span> <span class="service">Address()</span><span class="require">;</span>
                                            <br>
                                                <span class="pl-3">$</span><span class="variables">shippingAddress</span><span class="require">-></span><span class="variables">postalCode</span> <span class="require">= "</span><span class="green">03201</span><span class="require">";</span>
                                            <br>
                                                <span class="pl-3">$</span><span class="variables">shippingAddress</span><span class="require">-></span><span class="variables">country</span> <span class="require">= "</span><span class="green">ES</span><span class="require">";</span>
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
                                        Cargamos el importe en la tarjeta: 
                                    </li>
                                    <ul>
                                        <li>
                                            <span class="arrow">$</span><span class="variableBgW">response</span>
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
                                        Añadimos el identificador del producto: 
                                    </li>
                                    <ul>
                                        <li>
                                            <span class="arrow">->withProductId("</span><span class="comentariosBgW">SKU</span><span class="arrow">")</span>
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
                                        Añadimos el identificador del cliente: 
                                    </li>
                                    <ul>
                                        <li>
                                            <span class="arrow">->withCustomerId("</span><span class="comentariosBgW">E8953893489</span><span class="arrow">")</span>
                                        </li>
                                    </ul>

                                    <br>

                                    <li>
                                        Añadimos la dirección IP del cliente: 
                                    </li>
                                    <ul>
                                        <li>
                                            <span class="arrow">->withCustomerIpAddress("</span><span class="comentariosBgW">123.123.123.123</span><span class="arrow">")</span>
                                        </li>
                                    </ul>

                                    <br>

                                    <li>
                                        Modo de filtro = Parámetro opcional utilizado para determinar en qué grado se ejecuta el Filtro de Fraude. Si no se envía, el Filtro de Fraude se comportará de acuerdo con la configuración del modo del Portal de Comercio Electrónico. Puede tomar 2 valores:
                                    </li>

                                    <ul>
                                        <li>
                                            <span class="arrow">->withFraudFilter(</span><span class="orangeBgW">FraudFilterMode</span><span class="arrow">::PASSIVE)</span>
                                        </li>

                                        <li>
                                            PASIVO - Ejecuta las reglas pero no ejecuta la acción detallada en el Fraude Filtrar el resultado general (por ejemplo, MANTENER o BLOQUEAR)
                                        </li>

                                        <li>
                                            DESACTIVADO: no ejecuta el Filtro de fraude para esta transacción, en este caso, solo se devuelve el modo en la respuesta.
                                        </li>
                                    </ul>

                                    <br>

                                    <li>
                                        Ejecutamos la operación contra los servidores de Addon Payments: 
                                    </li>
                                    <ul>
                                        <li>
                                            <span class="arrow">->execute();</span>
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
                                           <span class="pl-4">$</span><span class="variables">response</span> <span class="require">=</span> $<span class="variables">card</span><span class="require">-></span><span class="configure">charge</span><span class="require">(</span><span class="green">20</span><span class="require">)</span>
                                       <br>
                                           <span class="pl-5 require">-></span><span class="configure">withCurrency</span><span class="require">("</span><span class="green">EUR</span><span class="require">")</span>
                                       <br>
                                           <span class="pl-5 require">-></span><span class="configure">withAddress</span><span class="require">(</span>$<span class="variables">billingAddress</span><span class="require">,</span> <span class="service">AddressType</span><span class="require">::BILLING)</span>
                                       <br>
                                           <span class="pl-5 require">-></span><span class="configure">withAddress</span><span class="require">(</span>$<span class="variables">shippingAddress</span><span class="require">,</span> <span class="service">AddressType</span><span class="require">::SHIPPING)</span>
                                       <br>
                                           <span class="pl-5 require">-></span><span class="configure">withProductId</span><span class="require">(</span><span class="arrow">"</span><span class="green">SKU</span><span class="require">")</span>
                                       <br>
                                           <span class="pl-5 require">-></span><span class="configure">withClientTransactionId</span><span class="require">("</span><span class="green">Car Part HV</span><span class="require">")</span>
                                       <br>
                                           <span class="pl-5 require">-></span><span class="configure">withCustomerId</span><span class="require">(</span><span class="arrow">"</span><span class="green">E8953893489</span><span class="require">")</span>
                                       <br>
                                           <span class="pl-5 require">-></span><span class="configure">withCustomerIpAddress</span><span class="require">(</span><span class="arrow">"</span><span class="green">123.123.123.123</span><span class="require">")</span>
                                       <br>
                                           <span class="pl-5 require">-></span><span class="configure">withFraudFilter</span><span class="require">(</span><span class="service">FraudFilterMode</span><span class="configure">::PASSIVE</span><span class="require">)</span>
                                       <br>
                                            <span class="pl-5 require">-></span><span class="configure">execute</span><span class="require">();</span>
                                       <br>
                                       <br>
                                           <span class="pl-4">$</span><span class="variables">fraudFilterResponse</span><span class="require"> = </span>$<span class="variables">response</span><span class="require">-></span><span class="variables">fraudFilterResponse</span> <span class="comments">// Asociamos el resultado a la variable "$fraudFilterResponse"</span>
                                       <br>
                                           <span class="pl-4">$</span><span class="variables">fraudResponseMode</span><span class="require"> = </span>$<span class="variables">fraudFilterResponse</span><span class="require">-></span><span class="variables">fraudResponseMode</span> <span class="comments">// Obtenemos el modo de filtro</span>
                                       <br>
                                           <span class="pl-4">$</span><span class="variables">fraudResponseOverallResult</span><span class="require"> = </span>$<span class="variables">fraudFilterResponse</span><span class="require">-></span><span class="variables">fraudResponseResult</span> <span class="comments">// El resultado total del filtro de fraude</span>
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
                        <!-- Fin Punto 2 -->

                        <!-- Punto 3 -->
                        <div class="contenedor">
                            <div class="pl-3 pt-3 pr-3 pb-4 mb-3 text-justify">
                                <h3 class="pt-1" id="FormEjemplo1">
                                    3. Formulario de ejemplo
                                </h3>

                                <hr>

                                <p>
                                    Para poder procesar un ingreso con el formulario de ejemplo, debe modificar el archivo "fraud.php" que se encuentra en la ruta "vendor\addonpayments\php-sdk\test\php\API\03 - Fraud Management\01 - Fraud Filter".
                                </p>

                                <p>
                                    Debe introducir sus datos de configuración tal y como se muestra en el punto 2.1 "Configuración del terminal".
                                </p>

                                <hr>

                                <h5 id="Formulario" class="mt-3">
                                    3.1 Formulario
                                </h5>

                                <p>
                                    El siguiente formulario le permite enviar una operación contra el entorno de pruebas de Addon Payments.
                                </p>

                                <form id="formulario_envio" method="POST" autocomplete="off" class="col-lg-12" action="fraud.php">
                                    <div class="row justify-content-around">
                                        <div class="col-lg-4 pl-lg-4">
                                            <div class="row">
                                                <div class="col-lg-12 mt-2 mb-2 formulario">
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
                     
                                                    <div class="form-row">
                                                        <div class="form-group col-md-6">
                                                            <label for="custNum">Número de cliente</label>
                                                            <input type="text" class="form-control" id="custNum" name="custNum" placeholder="Número de cliente" required>
                                                        </div>
                                                        <div class="form-group col-md-6">
                                                            <label for="proId">Identificador de producto</label>
                                                            <input type="text" class="form-control" id="proId" name="proId" placeholder="ID Producto" required/>
                                                        </div>
                                                    </div>

                                                    <div class="form-row">
                                                        <div class="form-group col-md-6">
                                                            <label for="billCp">CP de facturación</label>
                                                            <input type="text" class="form-control" id="billCp" name="billCp" placeholder="03201" required>
                                                        </div>
                                                        <div class="form-group col-md-6">
                                                            <label for="billCo">País de facturación</label>
                                                            <input type="text" class="form-control" id="billCo" name="billCo" placeholder="ES" required/>
                                                        </div>
                                                    </div>
                                                    <div class="form-row">
                                                        <div class="form-group col-md-6">
                                                            <label for="shipCp">CP de envío</label>
                                                            <input type="text" class="form-control" id="shipCp" name="shipCp" placeholder="Código Postal" required>
                                                        </div>
                                                        <div class="form-group col-md-6">
                                                            <label for="shipCo">País de envío</label>
                                                            <input type="text" class="form-control" id="shipCo" name="shipCo" placeholder="ES" required/>
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="refvariable">Referencia variable</label>
                                                        <input type="text" class="form-control" id="refvariable" name="refvariable" placeholder="Referencia variable" required/>
                                                    </div>

                                                    <p>
                                                        <input type="hidden" id="importe" name="importe" value="20" />
                                                        <b>Importe:</b> <span>20€</span>
                                                    </p>
                                                    <!-- Datos de tarjeta -->
                                                    <div class="form-group row">
                                                        <div class="col-sm-12">
                                                            <button type="submit" class="btn btn-block btn-primary" onclick="validate();">Filtro de fraude</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>

                                <hr>

                                <h5 id="respuestaForm">
                                    3.2 Respuesta de la operación
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
                        <!-- Fin Punto 3 -->
                    
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
                }).done(function(respuesta){ //
                    $("#server-results").html(respuesta);
                });
            });
        </script>
    </body>
</html>
