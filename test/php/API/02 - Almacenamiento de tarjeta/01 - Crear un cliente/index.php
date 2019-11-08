<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="Víctor Cantera">
        <link rel="icon" href="../../../../assets/img/comercia_ico.png" type="image/x-icon"/ >
        <title>Crear un cliente (API) -SDK PHP</title>

        <!-- Bootstrap 4.3.1 -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <!-- CSS -->
        <link rel="stylesheet" href="../../../../assets/css/style.css">
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
                        <a class="nav-link dropdown-toggle active pl-2" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Almacenamiento de tarjeta
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <div class="dropdown-header text-center p-0">API</div>
                            <hr class="m-0 p-0">
                                <a class="dropdown-item pl-2 active" href="#">Crear un cliente</a>
                                <a class="dropdown-item pl-2" href="../02%20-%20Almacenar%20una%20tarjeta/index.php">Almacenar una tarjeta</a>
                                <a class="dropdown-item pl-2" href="../03%20-%20Editar%20tarjeta/index.php">Editar tarjetas</a>
                                <a class="dropdown-item pl-2" href="../04%20-%20Eliminar%20tarjeta/index.php">Eliminar tarjetas</a>
                                <a class="dropdown-item pl-2" href="../05%20-%20Auth/index.php">Autorización</a>
                                <a class="dropdown-item pl-2" href="../06%20-%20Credit/index.php">Credit</a>
                                <a class="dropdown-item pl-2" href="../07%20-%20DCC/index.php">Dynamic Currency Conversion</a>
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
                                <a class="nav-link" href="#newClient">1. Crear cliente</a>
                                <nav class="nav nav-pills flex-column">
                                    <a class="nav-link ml-3 my-1" href="#codigoEjemplo">1.1 Código de ejemplo</a>
                                </nav>
                                <a class="nav-link" href="#descripciones">2. Descripciones</a>
                                <nav class="nav nav-pills flex-column">
                                    <a class="nav-link ml-3 my-1" id="#ConfigTerminal" href="#ConfigTerminal">2.1 Configuración del terminal</a>
                                    <a class="nav-link ml-3 my-1" id="#ConfigCliente" href="#ConfigCliente">2.2 Datos del cliente</a>
                                    <a class="nav-link ml-3 my-1" id="#dirClient" href="#dirClient">2.3 Dirección del cliente</a>
                                    <a class="nav-link ml-3 my-1" id="#envioOP" href="#envioOP">2.4 Envío de la operación</a>
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
                        <div class="contenedor">
                            <div class="pl-3 pt-3 pr-3 pb-4 mb-3 text-justify">
                                <h3 id="newClient" class="titulo">
                                    1. Crear cliente
                                </h3>
                                <hr>

                                <p>
                                   Para almacenar una tarjeta, lo primero que tenemos que hacer es configurar una referencia de cliente (Payer). También puede elegir almacenar la dirección y los datos de contacto junto a ella.
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
                                            <span class="comments">// Imports necesarios para la creación de un cliente</span>
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
                                            <span class="pl-3 require">use <span class="imports">AddonPayments\Api\Entities\Address</span>;</span>
                                        <br>
                                            <span class="pl-3 require">use <span class="imports">AddonPayments\Api\Entities\Customer</span>;</span>
                                        <br>
                                            <span class="pl-3 require">use <span class="imports">AddonPayments\Api\Utils\GenerationUtils</span>;</span>
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
                                            <span class="pl-3 comments">// Creamos el objeto "Cliente"</span>
                                        <br>
                                            <span class="pl-3">$</span><span class="variables">customer</span> <span class="require">=</span> <span class="new">new</span> <span class="service">Customer()</span><span class="require">;</span>
                                        <br>
                                            <span class="pl-3">$</span><span class="variables">customer</span><span class="require">-></span><span class="variables">key</span> <span class="require">=</span> <span class="service">GenerationUtils</span><span class="require">::getGuid();</span>
                                        <br>
                                            <span class="pl-3">$</span><span class="variables">customer</span><span class="require">-></span><span class="variables">title</span> <span class="require">= "</span><span class="green">Mr.</span><span class="require">";</span>
                                        <br>
                                            <span class="pl-3">$</span><span class="variables">customer</span><span class="require">-></span><span class="variables">firstName</span> <span class="require">= "</span><span class="green">Víctor</span><span class="require">";</span>
                                        <br>
                                            <span class="pl-3">$</span><span class="variables">customer</span><span class="require">-></span><span class="variables">lastName</span> <span class="require">= "</span><span class="green">Cantera</span><span class="require">";</span>
                                        <br>
                                            <span class="pl-3">$</span><span class="variables">customer</span><span class="require">-></span><span class="variables">company</span> <span class="require">= "</span><span class="green">Addon Payments</span><span class="require">";</span>
                                        <br>
                                            <span class="pl-3">$</span><span class="variables">customer</span><span class="require">-></span><span class="variables">email</span> <span class="require">= "</span><span class="green">soporte@addonpayments.com</span><span class="require">";</span>
                                        <br>
                                            <span class="pl-3">$</span><span class="variables">customer</span><span class="require">-></span><span class="variables">dateOfBirth</span> <span class="require">= "</span><span class="green">01/02/1994</span><span class="require">";</span>
                                        <br>
                                            <span class="pl-3">$</span><span class="variables">customer</span><span class="require">-></span><span class="variables">customerPassword</span> <span class="require">= "</span><span class="green">Password</span><span class="require">";</span>
                                        <br>
                                        <br>
                                            <span class="pl-3 comments">// Creamos el objeto "Dirección" del cliente</span>
                                        <br>
                                            <span class="pl-3">$</span><span class="variables">customer</span><span class="require">-></span><span class="variables">address</span> <span class="require">=</span> <span class="new">new</span> <span class="service">Address()</span><span class="require">;</span>
                                        <br>
                                            <span class="pl-3">$</span><span class="variables">customer</span><span class="require">-></span><span class="variables">address</span><span class="require">-></span><span class="variables">streetAddress1</span> <span class="require">= "</span><span class="green">Dirección 1</span><span class="require">";</span>
                                        <br>
                                            <span class="pl-3">$</span><span class="variables">customer</span><span class="require">-></span><span class="variables">address</span><span class="require">-></span><span class="variables">streetAddress2</span> <span class="require">= "</span><span class="green">Dirección 2</span><span class="require">";</span>
                                        <br>
                                            <span class="pl-3">$</span><span class="variables">customer</span><span class="require">-></span><span class="variables">address</span><span class="require">-></span><span class="variables">streetAddress3</span> <span class="require">= "</span><span class="green">Dirección 3</span><span class="require">";</span>
                                        <br>
                                            <span class="pl-3">$</span><span class="variables">customer</span><span class="require">-></span><span class="variables">address</span><span class="require">-></span><span class="variables">city</span> <span class="require">= "</span><span class="green">Elche</span><span class="require">";</span>
                                        <br>
                                            <span class="pl-3">$</span><span class="variables">customer</span><span class="require">-></span><span class="variables">address</span><span class="require">-></span><span class="variables">province</span> <span class="require">= "</span><span class="green">Alicante</span><span class="require">";</span>
                                        <br>
                                            <span class="pl-3">$</span><span class="variables">customer</span><span class="require">-></span><span class="variables">address</span><span class="require">-></span><span class="variables">postalCode</span> <span class="require">= "</span><span class="green">03201</span><span class="require">";</span>
                                        <br>
                                            <span class="pl-3">$</span><span class="variables">customer</span><span class="require">-></span><span class="variables">address</span><span class="require">-></span><span class="variables">country</span> <span class="require">= "</span><span class="green">ES</span><span class="require">";</span>
                                        <br>
                                            <span class="pl-3">$</span><span class="variables">customer</span><span class="require">-></span><span class="variables">address</span><span class="require">-></span><span class="variables">mobilePhone</span> <span class="require">= "</span><span class="green">914 353 028</span><span class="require">";</span>
                                        <br>
                                            <span class="pl-3">$</span><span class="variables">customer</span><span class="require">-></span><span class="variables">address</span><span class="require">-></span><span class="variables">homePhone</span> <span class="require">= "</span><span class="green">914 353 028</span><span class="require">";</span>
                                        <br>
                                            <span class="pl-3">$</span><span class="variables">customer</span><span class="require">-></span><span class="variables">address</span><span class="require">-></span><span class="variables">workPhone</span> <span class="require">= "</span><span class="green">914 353 028</span><span class="require">";</span>
                                        <br>
                                            <span class="pl-3">$</span><span class="variables">customer</span><span class="require">-></span><span class="variables">address</span><span class="require">-></span><span class="variables">fax</span> <span class="require">= "</span><span class="green">914 353 028</span><span class="require">";</span>
                                        <br>
                                        <br>
                                            <span class="pl-3 comments">// Lanzamos la petición al servidor de Addon Payments</span>
                                        <br>
                                            <span class="pl-3 new">try</span><span class="require"> {</span>
                                        <br>
                                            <span class="pl-4">$</span><span class="variables">response</span> <span class="require">=</span> $<span class="variables">customer</span><span class="require">-></span><span class="configure">create</span><span class="require">();</span>
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
                                            <span class="pl-4 require">echo "</span><span class="green">Identificador del cliente == </span><span class="require">".</span>$<span class="variables">customer</span><span class="require">-></span><span class="variables">key</span><span class="require">."</span><span class="green"><</span><span class="green">br></span><span class="require">";</span> <span class="comments">// Identificador del cliente</span>
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
                                   <li>
                                       SubAccount = Subcuenta faciltiada en la llamada de cualificación (en caso de que se envíe la operación sin subcuenta, se usará la establecida por defecto en la creación de su terminal).
                                   </li>
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
                                            <span class="pl-3">$</span><span class="variables">config</span> <span class="require">=</span> <span class="new">new</span> <span class="service">ServicesConfig()</span><span class="require">;</span>
                                        <br>
                                            <span class="pl-3">$</span><span class="variables">config</span><span class="require">-></span><span class="variables">merchantId</span> <span class="require">= "</span><span class="green">Merchant_ID</span><span class="require">";</span> <span class="comments">// Identificador del comercio</span>
                                        <br>
                                            <span class="pl-3">$</span><span class="variables">config</span><span class="require">-></span><span class="variables">accountId</span> <span class="require">= "</span><span class="green">Sub_Account</span><span class="require">";</span> <span class="comments">// Subcuenta asociada a su identificador</span>
                                        <br>
                                            <span class="pl-3">$</span><span class="variables">config</span><span class="require">-></span><span class="variables">sharedSecret</span> <span class="require">= "</span><span class="green">Shared_Secret</span><span class="require">";</span> <span class="comments">// Contraseña del terminal</span>
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

                                <h5 id="ConfigCliente" class="mt-3">
                                    2.2 Datos del cliente
                                </h5>

                                    <p>
                                       Para crear el objeto "Customer" necesitamos los siguientes parámetros:
                                    </p>

                                    <ul>
                                        <li>
                                            Llamamos a la función <span class="arrow">new Customer()</span><span class="require">;</span>
                                        </li>

                                        <li>
                                            Generamos un ID único para cada cliente llamando a la función <span class="arrow">GenerationUtils::getGuid()</span><span class="require">;</span>
                                        </li>

                                        <ul>
                                            <li>
                                                En caso de querer enviar un identificador personalizado, debemos enviar la siguiente información:
                                            </li>

                                            <ul>
                                                <li>
                                                    <span class="arrow">$</span><span class="variableBgW">customer</span><span class="arrow">-></span><span class="variableBgW">key</span> <span class="arrow">=</span> <span class="comentariosBgW">"Valor personalizado"</span><span class="require">;</span> 
                                                </li>
                                            </ul>

                                            <li>
                                                El identificador lo podemos utilizar posteriormente para editar el cliente que deseemos.
                                            </li>
                                        </ul>

                                        <li>
                                            Nombre =
                                            <span class="comentariosBgW">"Víctor"</span><span class="arrow">;</span>
                                        </li>

                                        <li>
                                            Apellidos =
                                            <span class="comentariosBgW">"Cantera"</span><span class="arrow">;</span>
                                        </li>

                                        <li>
                                            Compañía =
                                            <span class="comentariosBgW">"Addon Payments"</span><span class="arrow">;</span>
                                        </li>

                                        <li>
                                            Dirección de correo electrónico =
                                            <span class="comentariosBgW">"soporte@addonpayments.com"</span><span class="arrow">;</span>
                                        </li>

                                        <li>
                                            Fecha de nacimiento =
                                            <span class="comentariosBgW">"01/02/1994"</span><span class="arrow">;</span>
                                        </li>

                                        <li>
                                            En caso de que la hubiera, indicamos la contraseña del cliente =
                                            <span class="comentariosBgW">"Clave_de_mi_web"</span><span class="arrow">;</span>
                                        </li>
                                    </ul>

                                    <div class="p-4 mb-4 panelCode">
                                        <code>
                                            <b>
                                                <span class="etiqueta">&lt;?php</span>
                                            </b>
                                            <br>
                                            <br>
                                                <span class="pl-3 comments">// Creamos el objeto "Cliente"</span>
                                            <br>
                                                <span class="pl-3">$</span><span class="variables">customer</span> <span class="require">=</span> <span class="new">new</span> <span class="service">Customer()</span><span class="require">;</span>
                                            <br>
                                                <span class="pl-3">$</span><span class="variables">customer</span><span class="require">-></span><span class="variables">key</span> <span class="require">=</span> <span class="service">GenerationUtils</span><span class="require">::getGuid();</span>
                                            <br>
                                                <span class="pl-3">$</span><span class="variables">customer</span><span class="require">-></span><span class="variables">title</span> <span class="require">= "</span><span class="green">Mr.</span><span class="require">";</span>
                                            <br>
                                                <span class="pl-3">$</span><span class="variables">customer</span><span class="require">-></span><span class="variables">firstName</span> <span class="require">= "</span><span class="green">Víctor</span><span class="require">";</span>
                                            <br>
                                                <span class="pl-3">$</span><span class="variables">customer</span><span class="require">-></span><span class="variables">lastName</span> <span class="require">= "</span><span class="green">Cantera</span><span class="require">";</span>
                                            <br>
                                                <span class="pl-3">$</span><span class="variables">customer</span><span class="require">-></span><span class="variables">company</span> <span class="require">= "</span><span class="green">Addon Payments</span><span class="require">";</span>
                                            <br>
                                                <span class="pl-3">$</span><span class="variables">customer</span><span class="require">-></span><span class="variables">email</span> <span class="require">= "</span><span class="green">soporte@addonpayments.com</span><span class="require">";</span>
                                            <br>
                                                <span class="pl-3">$</span><span class="variables">customer</span><span class="require">-></span><span class="variables">dateOfBirth</span> <span class="require">= "</span><span class="green">01/02/1994</span><span class="require">";</span>
                                            <br>
                                                <span class="pl-3">$</span><span class="variables">customer</span><span class="require">-></span><span class="variables">customerPassword</span> <span class="require">= "</span><span class="green">Password</span><span class="require">";</span>
                                            <br>
                                            <br>
                                            <b>
                                                <span class="etiqueta">?&gt;</span>
                                            </b>
                                        </code>
                                    </div>

                                <hr>

                                <h5 id="dirClient" class="mt-3">
                                    2.3 Dirección del cliente
                                </h5>

                                <p>
                                   Para crear el objeto "Address" necesitamos los siguientes parámetros:
                                </p>

                                <ul>
                                    <li>
                                        Llamamos a la función <span class="arrow">new Address()</span><span class="require">;</span>
                                    </li>

                                    <li>
                                        Dirección de envío 1 =
                                        <span class="comentariosBgW">"Dirección 1"</span><span class="arrow">;</span>
                                    </li>

                                    <li>
                                        Dirección de envío 2 =
                                        <span class="comentariosBgW">"Dirección 2"</span><span class="arrow">;</span>
                                    </li>

                                    <li>
                                        Dirección de envío 3 =
                                        <span class="comentariosBgW">"Dirección 3"</span><span class="arrow">;</span>
                                    </li>

                                    <li>
                                        Ciudad =
                                        <span class="comentariosBgW">"Elche"</span><span class="arrow">;</span>
                                    </li>

                                    <li>
                                        Provincia =
                                        <span class="comentariosBgW">"Alicante"</span><span class="arrow">;</span>
                                    </li>

                                    <li>
                                        Código Postal =
                                        <span class="comentariosBgW">"03201"</span><span class="arrow">;</span>
                                    </li>

                                    <li>
                                        ISO del país del cliente =
                                        <span class="comentariosBgW">"ES"</span><span class="arrow">;</span>
                                    </li>

                                    <li>
                                        Teléfono personal =
                                        <span class="comentariosBgW">"914353028"</span><span class="arrow">;</span>
                                    </li>

                                    <li>
                                        Teléfono de casa =
                                        <span class="comentariosBgW">"914353028"</span><span class="arrow">;</span>
                                    </li>

                                    <li>
                                        Teléfono del trabajo =
                                        <span class="comentariosBgW">"914353028"</span><span class="arrow">;</span>
                                    </li>

                                    <li>
                                        En caso de que lo hubiera, indicamos el fax del cliente =
                                        <span class="comentariosBgW">"914353028"</span><span class="arrow">;</span>
                                    </li>
                                </ul>

                                <div class="p-4 mb-4 panelCode">
                                    <code>
                                        <b>
                                            <span class="etiqueta">&lt;?php</span>
                                        </b>
                                        <br>
                                        <br>
                                            <span class="pl-3 comments">// Creamos el objeto "Dirección" del cliente</span>
                                        <br>
                                            <span class="pl-3">$</span><span class="variables">customer</span><span class="require">-></span><span class="variables">address</span> <span class="require">=</span> <span class="new">new</span> <span class="service">Address()</span><span class="require">;</span>
                                        <br>
                                            <span class="pl-3">$</span><span class="variables">customer</span><span class="require">-></span><span class="variables">address</span><span class="require">-></span><span class="variables">streetAddress1</span> <span class="require">= "</span><span class="green">Dirección 1</span><span class="require">";</span>
                                        <br>
                                            <span class="pl-3">$</span><span class="variables">customer</span><span class="require">-></span><span class="variables">address</span><span class="require">-></span><span class="variables">streetAddress2</span> <span class="require">= "</span><span class="green">Dirección 2</span><span class="require">";</span>
                                        <br>
                                            <span class="pl-3">$</span><span class="variables">customer</span><span class="require">-></span><span class="variables">address</span><span class="require">-></span><span class="variables">streetAddress3</span> <span class="require">= "</span><span class="green">Dirección 3</span><span class="require">";</span>
                                        <br>
                                            <span class="pl-3">$</span><span class="variables">customer</span><span class="require">-></span><span class="variables">address</span><span class="require">-></span><span class="variables">city</span> <span class="require">= "</span><span class="green">Elche</span><span class="require">";</span>
                                        <br>
                                            <span class="pl-3">$</span><span class="variables">customer</span><span class="require">-></span><span class="variables">address</span><span class="require">-></span><span class="variables">province</span> <span class="require">= "</span><span class="green">Alicante</span><span class="require">";</span>
                                        <br>
                                            <span class="pl-3">$</span><span class="variables">customer</span><span class="require">-></span><span class="variables">address</span><span class="require">-></span><span class="variables">postalCode</span> <span class="require">= "</span><span class="green">03201</span><span class="require">";</span>
                                        <br>
                                            <span class="pl-3">$</span><span class="variables">customer</span><span class="require">-></span><span class="variables">address</span><span class="require">-></span><span class="variables">country</span> <span class="require">= "</span><span class="green">ES</span><span class="require">";</span>
                                        <br>
                                            <span class="pl-3">$</span><span class="variables">customer</span><span class="require">-></span><span class="variables">address</span><span class="require">-></span><span class="variables">mobilePhone</span> <span class="require">= "</span><span class="green">914 353 028</span><span class="require">";</span>
                                        <br>
                                            <span class="pl-3">$</span><span class="variables">customer</span><span class="require">-></span><span class="variables">address</span><span class="require">-></span><span class="variables">homePhone</span> <span class="require">= "</span><span class="green">914 353 028</span><span class="require">";</span>
                                        <br>
                                            <span class="pl-3">$</span><span class="variables">customer</span><span class="require">-></span><span class="variables">address</span><span class="require">-></span><span class="variables">workPhone</span> <span class="require">= "</span><span class="green">914 353 028</span><span class="require">";</span>
                                        <br>
                                            <span class="pl-3">$</span><span class="variables">customer</span><span class="require">-></span><span class="variables">address</span><span class="require">-></span><span class="variables">fax</span> <span class="require">= "</span><span class="green">914 353 028</span><span class="require">";</span>
                                        <br>
                                        <br>
                                        <b>
                                            <span class="etiqueta">?&gt;</span>
                                        </b>
                                    </code>
                                </div>

                                <hr>

                                <h5 id="envioOP" class="mt-3">
                                    2.4 Envío de la operación
                                </h5>

                                <p>
                                    Para enviar la operación debemos emplear el modelo de excepciones "try - catch". 
                                    <small class="form-text text-muted alert alert-primary">
                                        --&gt;Para obtener más información sobre la excepción de "try - catch" puede ver la <a target="_blank" href="https://www.php.net/manual/es/language.exceptions.php">documentación oficial de PHP.</a>
                                    </small>
                                </p>

                                <ul>
                                    <li>
                                        Llamamos al objeto "$customer" y ejecutamos la función de creación de usuario = 
                                        <span class="arrow">$</span><span class="variableBgW">customer</span>
                                        <span class="arrow">->create();</span>
                                    </li>
                                </ul>
                                <ul>
                                    <li>
                                        En caso de que queramos actualizar el usuario, debemos ejecutar la función = <span class="arrow">$</span><span class="variableBgW">customer</span><span class="arrow">->saveChanges();</span>
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
                                            <span class="pl-4 ">$</span><span class="variables">response</span> <span class="require">=</span> $<span class="variables">customer</span><span class="require">-></span><span class="configure">create</span><span class="require">();</span> <span class="comments">// Creamos el usuario en la base de datos de Addon Payments</span>
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
                                            <span class="pl-4 require">echo "</span><span class="green">Identificador del cliente == </span><span class="require">".</span>$<span class="variables">customer</span><span class="require">-></span><span class="variables">key</span><span class="require">."</span><span class="green"><</span><span class="green">br></span><span class="require">";</span> <span class="comments">// Identificador del cliente</span>
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
                        
                        <div class="contenedor">
                            <div class="pl-3 pt-3 pr-3 pb-4 mb-3 text-justify">
                                <h3 class="pt-1" id="FormEjemplo1">
                                    3. Formulario de ejemplo
                                </h3>

                                <hr>

                                <p>
                                    Para poder procesar un ingreso con el formulario de ejemplo, debe modificar el archivo "CrearCliente.php" que se encuentra en la ruta "vendor\addonpayments\php-sdk\test\php\API\02 - Almacenamiento de tarjeta\01 - Crear un cliente".
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

                                <form id="formulario_envio" method="POST" autocomplete="off" class="offset-lg-3 pt-3 col-lg-6" action="CrearCliente.php">
                                    <div class="row justify-content-around">
                                    <!-- Datos del pagador-->
                                        <div class="col-lg-12 mt-2 formulario">
                                            <h4 class="pt-2">Datos del pagador</h4>

                                            <div class="form-row">
                                                <div class="form-group col-md-2">
                                                    <label for="titulo">Título</label>
                                                    <select class="custom-select" name="titulo" id="titulo" required>
                                                        <option value="Señor">Señor</option>
                                                        <option value="Señora">Señora</option>
                                                        <option value="Mr.">Mr.</option>
                                                        <option value="Ms.">Ms.</option>
                                                    </select>
                                                </div>
                                                <div class="form-group col-md-5">
                                                    <label for="nombre">Nombre</label>
                                                    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre" required/>
                                                </div>
                                                <div class="form-group col-md-5">
                                                    <label for="apellido">Apellidos</label>
                                                    <input type="text" class="form-control" id="apellido" name="apellido" placeholder="Apellidos" required/>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="company">Compañía</label>
                                                    <input type="text" class="form-control" id="company" name="company" placeholder="Addon Payments" required/>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="fax">Fax</label>
                                                    <input type="tel" class="form-control" id="fax" name="fax" placeholder="123456"/>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="email">Email</label>
                                                    <input type="email" class="form-control" id="email" name="email" value="email@ejemplo.com" />
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="tlf">Teléfono personal</label>
                                                    <input type="tel" class="form-control" id="tlf" name="tlf" value="123456789" />
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="hometlf">Teléfono de casa</label>
                                                    <input type="tel" class="form-control" id="hometlf" name="hometlf" value="987654321" />
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="workPhone">Teléfono del trabajo</label>
                                                    <input type="tel" class="form-control" id="workPhone" name="workPhone" value="976431852" />
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-5">
                                                    <label for="Birth">Cumpleaños</label>
                                                    <input type="date" class="form-control" id="birth" name="birth" />
                                                </div>
                                                <div class="form-group col-md-7">
                                                    <label for="pass">Contraseña</label>
                                                    <input type="password" class="form-control" id="clave" name="clave" value="Contraseña123" />
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="Comentarios">Comentarios</label>
                                                <textarea class="form-control" id="comments" name="comments" placeholder="Escriba el texto aquí" /></textarea>
                                            </div>
                                    <!-- /Datos del pagador-->

                                    <!-- Datos de envío del cliente -->
                                        <h4 class="pt-2">Datos de envío</h4>
                                        
                                            <div class="form-group">
                                                <label for="direccion1">Dirección 1 de envío</label>
                                                <input type="text" class="form-control" id="direccion1" name="direccion1" value="Envío 123" />
                                            </div>
                                            <div class="form-group">
                                                <label for="direccion2">Dirección 2 de envío</label>
                                                <input type="text" class="form-control" id="direccion2" name="direccion2" value="Envío 456" />
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-8">
                                                    <label for="direccion3">Dirección 3 de envío</label>
                                                    <input type="text" class="form-control" id="direccion3" name="direccion3" value="Envío 789" />
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label for="ciudad">Ciudad</label>
                                                    <input type="text" class="form-control" id="ciudad" name="ciudad" value="Elche" />
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-4">
                                                    <label for="provincia">Provincia</label>
                                                    <input type="text" class="form-control" id="provincia" name="provincia" value="Alicante" />
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label for="pais">País</label>
                                                    <select class="form-control" name="pais">
                                                        <option value="ES" name="pais">España</option>
                                                        <option value="GB" name="pais">Reino Unido</option>
                                                    </select>
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label for="CodigoPostal">Código Postal</label>
                                                    <input type="text" class="form-control" id="codigoPostal" name="codigoPostal" value="03201" />
                                                </div>
                                            </div>
                                    <!-- /Datos de envío del cliente -->
                                            <div class="form-group row">
                                                <div class="col-sm-12">
                                                    <button type="submit" class="btn btn-block btn-primary">Crear Cliente</button>
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