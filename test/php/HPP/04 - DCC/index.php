<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="Víctor Cantera">
        <link rel="icon" href="../../../assets/img/comercia_ico.png" type="image/x-icon"/ >
        <title>DCC (HPP) - SDK PHP</title>

        <!-- Bootstrap 4.3.1 -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <!-- CSS -->
        <link rel="stylesheet" href="../../../assets/css/style.css">

        <!-- Script para comprobar los datos de la tarjeta mediante HPP -->
        <script src="../../../assets/js/rxp-hpp.js"></script> <!-- Available at https://github.com/realexpayments -->
    </head>

    <body>
        <!-- NAVBAR -->
        <nav class="navbar navbar-expand-lg navbar-light navbar-rpdc mb-3">
            <a class="navbar-brand">
                <img src="../../../assets/img/log2.svg" width="30" height="30" class="img-fluid" alt="Logo Addon Payments">
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
                            <a class="dropdown-item pl-2" href="../../../index.php">Índice</a>
                            <a class="dropdown-item pl-2" href="../../errores.php">Errores de Addon Payments</a>
                            <a class="dropdown-item pl-2" href="../../informe.html">Convertir informe</a>
                        </div>
                    </li>
                    <li class="nav-item ml-1 dropdown">
                        <a class="nav-link pl-2 dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Pagos con tarjeta
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <div class="dropdown-header text-center p-0">API</div>
                            <hr class="m-0 p-0">
                                <a class="dropdown-item pl-2" href="../../API/01%20-%20Pagos%20con%20tarjeta/01%20-%20Authorization/index.php">Autorización</a>
                                <a class="dropdown-item pl-2" href="../../API/01%20-%20Pagos%20con%20tarjeta/01%20-%20Authorization/DatosDelCliente.php">Datos adicionales</a>
                                <a class="dropdown-item pl-2" href="../../API/01%20-%20Pagos%20con%20tarjeta/02%20-%20OTB/index.php">OTB</a>
                                <a class="dropdown-item pl-2" href="../../API/01%20-%20Pagos%20con%20tarjeta/03%20-%20Credit/index.php">Credit</a>
                            <hr class="m-0 p-0">
                            <div class="dropdown-header text-center p-0">HPP</div>
                            <hr class="m-0 p-0">
                                <a class="dropdown-item pl-2" href="../01%20-%20Pagos%20con%20tarjeta/01%20-%20Authorization/index.php">Autorización</a>
                                <a class="dropdown-item pl-2" href="../01%20-%20Pagos%20con%20tarjeta/02%20-%20OTB/index.php">OTB</a>
                                <a class="dropdown-item pl-2" href="../01%20-%20Pagos%20con%20tarjeta/02%20-%20OTB/index.php">Pay By Link</a>
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
                                <a class="dropdown-item pl-2" href="../../API/02%20-%20Almacenamiento%20de%20tarjeta/01%20-%20Crear%20un%20cliente/index.php">Crear un cliente</a>
                                <a class="dropdown-item pl-2" href="../../API/02%20-%20Almacenamiento%20de%20tarjeta/02%20-%20Almacenar%20una%20tarjeta/index.php">Almacenar una tarjeta</a>
                                <a class="dropdown-item pl-2" href="../../API/02%20-%20Almacenamiento%20de%20tarjeta/03%20-%20Editar%20tarjeta/index.php">Editar tarjetas</a>
                                <a class="dropdown-item pl-2" href="../../API/02%20-%20Almacenamiento%20de%20tarjeta/04%20-%20Eliminar%20tarjeta/index.php">Eliminar tarjetas</a>
                                <a class="dropdown-item pl-2" href="../../API/02%20-%20Almacenamiento%20de%20tarjeta/05%20-%20Auth/index.php">Autorización</a>
                                <a class="dropdown-item pl-2" href="../../API/02%20-%20Almacenamiento%20de%20tarjeta/06%20-%20Credit/index.php">Credit</a>
                                <a class="dropdown-item pl-2" href="../../API/02%20-%20Almacenamiento%20de%20tarjeta/07%20-%20DCC/index.php">Dynamic Currency Conversion</a>
                            <hr class="m-0 p-0">
                            <div class="dropdown-header text-center p-0">HPP</div>
                            <hr class="m-0 p-0">
                                <a class="dropdown-item pl-2" href="../../HPP/02%20-%20Almacenamiento%20de%20tarjeta/01%20-%20Crear%20un%20cliente/index.php">Crear un cliente</a>
                                <a class="dropdown-item pl-2" href="../../HPP/02%20-%20Almacenamiento%20de%20tarjeta/02%20-%20Mostrar%20Tarjetas/index.php">Mostrar tarjetas</a>
                        </div>
                    </li>
                      
                    <li class="nav-item ml-1 dropdown">
                        <a class="nav-link pl-2 dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Gestión de transacciones
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item pl-2" href="../../API/03%20-%20Gestion%20de%20transacciones/01%20-%20Capturar/index.php">Settle (Capturar)</a>
                            <a class="dropdown-item pl-2" href="../../API/03%20-%20Gestion%20de%20transacciones/02%20-%20Rebate/index.php">Rebate (Devolución)</a>
                            <a class="dropdown-item pl-2" href="../../API/03%20-%20Gestion%20de%20transacciones/03%20-%20Void/index.php">Void (Anular transacción)</a>
                        </div>
                    </li>

                    <li class="nav-item ml-1 dropdown">
                        <a class="nav-link pl-2 dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Filtro de fraude
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                              
                            <div class="dropdown-header text-center p-0">API</div>
                            <hr class="m-0 p-0">
                                <a class="dropdown-item pl-2"  href="../../API/05%20-%20Fraud%20Management/01%20-%20Fraud%20Filter/index.php">Filtro de fraude</a>
                                <a class="dropdown-item pl-2"  href="../../API/05%20-%20Fraud%20Management/02%20-%20Address%20Verification">Verificación de dirección</a>
                                <a class="dropdown-item pl-2"  href="../../API/05%20-%20Fraud%20Management/03%20-%20Hold">Retener transacción</a>
                                <a class="dropdown-item pl-2"  href="../../API/05%20-%20Fraud%20Management/04%20-%20Lanzamiento">Lanzar transacción</a>
                            <hr class="m-0 p-0">
                            <div class="dropdown-header text-center p-0">HPP</div>
                            <hr class="m-0 p-0">
                                <a class="dropdown-item pl-2"  href="../03%20-%20Fraud%20Management/01%20-%20Fraud%20Filter/index.php">Filtro de fraude</a>
                        </div>
                    </li>

                    <li class="nav-item ml-1 dropdown">
                        <a class="nav-link pl-2 dropdown-toggle active" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            DCC
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <div class="dropdown-header text-center p-0">API</div>
                            <hr class="m-0 p-0">
                                <a class="dropdown-item pl-2"  href="../../API/04%20-%20DCC/01%20-%20Comprobar%20DCC/index.php">Comprobar DCC</a>
                            <hr class="m-0 p-0">
                            <div class="dropdown-header text-center p-0">HPP</div>
                            <hr class="m-0 p-0">
                                <a class="dropdown-item pl-2 active" href="#">Operación con DCC</a>
                        </div>
                    </li>
                    <li class="nav-item ml-1 dropdown">
                        <a class="nav-link pl-2 dropdown-toggle" href="#" id="06-3DS2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            3DS2
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <div class="dropdown-header text-center p-0">API</div>
                            <hr class="m-0 p-0">
                                <a class="dropdown-item pl-2" href="../../API/06%20-%203DS2/01%20-%20Authorization/index.html">Autorización</a>
                            <hr class="m-0 p-0">
                            <div class="dropdown-header text-center p-0">HPP</div>
                            <hr class="m-0 p-0">
                                <a class="dropdown-item pl-2" href="../05%20-%203DS2/01%20-%20Authorization/index.html">Autorización</a>
                                <a class="dropdown-item pl-2" href="../05%20-%203DS2/02%20-%20Datos%20adicionales/index.html">Datos adicionales</a>
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
                                <a class="nav-link" href="#autorizacion">1. DCC</a>
                                <nav>
                                  <a class="nav-link ml-3 my-1" href="#codigoEjemplo">1.1 Código de ejemplo</a>
                                </nav>
                                <a class="nav-link" href="#descripciones">2. Descripciones</a>
                                <nav class="nav nav-pills flex-column">
                                  <a class="nav-link ml-3 my-1" href="#imports">2.1 Imports</a>
                                  <a class="nav-link ml-3 my-1" href="#ConfigTerminal">2.2 Configuración del terminal</a>
                                  <a class="nav-link ml-3 my-1" href="#envioOP">2.3 Envío de la operación archivo PHP</a>
                                  <a class="nav-link ml-3 my-1" href="#envioOPHTML">2.4 Envío de la operación archivo HTML</a>
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
                                <h3 id="autorizacion" class="titulo">
                                    1. Operación con DCC
                                </h3>
                                <hr>

                                <p>
                                    Conversión dinámica de divisas (DCC) es un servicio ofrecido por Global Payments que le permite ofrecer a los titulares de tarjetas internacionales la opción de pagar en la moneda de su propia tarjeta o en la moneda con la que intercambian. Al cliente se le ofrece un tipo de cambio en el momento de venta en lugar de en el punto de liquidación, que es lo que sucede si el DCC no está presente.
                                </p>
                                <p>
                                    Para aceptar transacciones DCC a través de HPP, no es necesario un trabajo de integración adicional de su parte. Sin embargo, al procesar transacciones DCC, recibirá campos adicionales en la respuesta POST. Su aplicación/sitio web debe estar configurado para manejar estos campos adicionales.
                                </p>

                                <h5 style="" class="pt-3" id="codigoEjemplo">1.1 Código de ejemplo</h5>

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
                                            <span class="pl-3 require">use <span class="imports">AddonPayments\Api\Entities\Exceptions\ApiException</span>;</span>
                                        <br>
                                            <span class="pl-3 require">use <span class="imports">AddonPayments\Api\HostedPaymentConfig</span>;</span>
                                        <br>
                                            <span class="pl-3 require">use <span class="imports">AddonPayments\Api\Services\HostedService</span>;</span>
                                        <br>
                                            <span class="pl-3 require">use <span class="imports">AddonPayments\Api\Entities\Enums\HppVersion</span>;</span>
                                        <br>
                                        <br>
                                            <span class="pl-3 comments">// Configuración del terminal</span>
                                        <br>
                                            <span class="pl-3">$</span><span class="variables">config</span> <span class="require">=</span> <span class="new">new</span> <span class="service">ServicesConfig()</span><span class="require">;</span>
                                        <br>
                                            <span class="pl-3">$</span><span class="variables">config</span><span class="require">-></span><span class="variables">merchantId</span><span class="require"> = "</span> <span class="green">Merchant_ID</span><span class="require">";</span>
                                        <br>
                                            <span class="pl-3">$</span><span class="variables">config</span><span class="require">-></span><span class="variables">accountId</span><span class="require"> = "</span><span class="green">Sub_Account</span><span class="require">";</span>
                                        <br>
                                            <span class="pl-3">$</span><span class="variables">config</span><span class="require">-></span><span class="variables">sharedSecret</span><span class="require"> = "</span><span class="green">Shared_Secret</span><span class="require">";</span>
                                        <br>
                                            <span class="pl-3">$</span><span class="variables">config</span><span class="require">-></span><span class="variables">serviceUrl</span><span class="require"> = "</span> <span class="green">URL</span><span class="require">";</span>
                                        <br>
                                            <span class="pl-3">$</span><span class="variables">config</span><span class="require">-></span><span class="variables">hostedPaymentConfig</span> <span class="require">=</span> <span class="new">new</span> <span class="service">HostedPaymentConfig</span><span class="require">()</span><span class="require">;</span>
                                        <br>
                                            <span class="pl-3">$</span><span class="variables">config</span><span class="require">-></span><span class="variables">hostedPaymentConfig</span><span class="require">-></span><span class="variables">version</span> <span class="require">=</span> <span class="service">HppVersion</span><span class="require">::</span><span class="variables">VERSION_2</span><span class="require">;</span>
                                        <br>
                                            <span class="pl-3">$</span><span class="variables">config</span><span class="require">-></span><span class="variables">hostedPaymentConfig</span><span class="require">-></span><span class="variables">dynamicCurrencyConversionEnabled</span><span class="require"> = </span><span class="orange">true</span><span class="require">;</span>
                                        <br>
                                            <span class="pl-3">$</span><span class="variables">service</span> <span class="require">=</span> <span class="new">new</span> <span class="service">HostedService</span><span class="require">(</span>$<span class="variables">config</span><span class="require">)</span><span class="require">;</span>
                                        <br>
                                        <br>
                                            <span class="pl-3 comments">// Lanzamos la petición al servidor de Addon Payments</span>
                                        <br>
                                            <span class="pl-3 new">try</span><span class="require"> {</span>
                                        <br>
                                            <span class="pl-4">$</span><span class="variables">hppJson</span> <span class="require">=</span> $<span class="variables">service</span><span class="require">-></span><span class="configure">Authorize</span><span class="require">(</span><span class="variables">20</span><span class="require">)</span>
                                        <br>
                                            <span class="pl-5 require">-></span><span class="configure">withCurrency</span><span class="require">("</span><span class="green">EUR</span><span class="require">")</span>
                                        <br>
                                            <span class="pl-5 require">-></span><span class="configure">serialize</span><span class="require">();</span>
                                        <br>
                                        <br>
                                            <span class="comments pl-4">// Mostramos el formulario</span>
                                        <br>
                                            <span class="pl-4 require">echo</span> $<span class="variables">hppJson</span><span class="require">;</span>
                                        <br>
                                        <br>
                                            <span class="pl-3 require">}</span><span class="new"> catch</span> (<span class="service">ApiException</span> $<span class="variables">e</span>) <span class="require">{</span>
                                        <br>
                                            <span class="comments pl-4">// Añada aquí su tratamiento de errores</span>
                                        <br>
                                            <span class="pl-4 require">echo</span> $<span class="variables">e</span><span class="require">-></span><span class="configure">getMessage</span><span class="require">();</span>
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
                            <div class="pl-3 pt-3 mb-4 pb-1 pr-3 text-justify">
                                <h3 class="pt-1" id="descripciones">
                                    2. Descripciones
                                </h3>
                                <hr>
                                
                                <h5 id="imports">2.1 Imports</h5>
                                    <p>
                                       Debemos cargar el archivo que enruta las clases del SDK e importar aquellas clases encesarias para realizar una operación:
                                    </p>
                                    <div class="p-4 mb-4 panelCode">
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
                                                <span class="pl-3 require">use <span class="imports">AddonPayments\Api\Entities\Exceptions\ApiException</span>;</span>
                                            <br>
                                                <span class="pl-3 require">use <span class="imports">AddonPayments\Api\HostedPaymentConfig</span>;</span>
                                            <br>
                                                <span class="pl-3 require">use <span class="imports">AddonPayments\Api\Services\HostedService</span>;</span>
                                            <br>
                                                <span class="pl-3 require">use <span class="imports">AddonPayments\Api\Entities\Enums\HppVersion</span>;</span>
                                            <br>
                                            <br>
                                            <b>
                                                <span class="etiqueta">?&gt;</span>
                                            </b>
                                        </code>
                                    </div>

                                <hr>

                                <h5 id="ConfigTerminal" class="mt-3">2.2 Configuración del terminal</h5>
                                    <p>
                                       Debemos introducir los datos de configuración que se facilitan en la llamada de cualificación del soporte técnico de Addon Payments.
                                    </p>
                                    <ul>
                                       <li>
                                           Merchant_ID = Identificador del comercio.
                                       </li>
                                       <li>
                                           SubAccount = Subcuenta faciltiada en la llamada de cualificación (si se deja en blanco se envía la subcuenta por defecto que le hayan creado).
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
                                            <br>
                                                <span class="pl-3 comments">// Debemos enviar la versión 2 de HPP_VERSION</span>
                                            <br>
                                                <span class="pl-3">$</span><span class="variables">config</span><span class="require">-></span><span class="variables">hostedPaymentConfig</span><span class="require">-></span><span class="variables">version</span> <span class="require">=</span> <span class="service">HppVersion</span><span class="require">::VERSION_2;</span>
                                            <br>
                                            <br>
                                                <span class="pl-3 comments">// Solciitamos el servicio DCC enviando a "true" la variable "$dynamicCurrencyConversionEnabled"</span>
                                            <br>
                                                <span class="pl-3">$</span><span class="variables">config</span><span class="require">-></span><span class="variables">hostedPaymentConfig</span><span class="require">-></span><span class="variables">dynamicCurrencyConversionEnabled</span> <span class="require">=</span> <span class="orange">true</span><span class="require">;</span>
                                            <br>
                                                <span class="pl-3">$</span><span class="variables">config</span><span class="require">-></span><span class="variables">hostedPaymentConfig</span> <span class="require">=</span> <span class="new">new</span> <span class="service">HostedService(</span><span class="require">$</span><span class="variables">config</span><span class="service">)</span><span class="require">;</span>
                                            <br>
                                            <br>
                                            <b>
                                                <span class="etiqueta">?&gt;</span>
                                            </b>
                                        </code>
                                    </div>

                                <hr>

                                <h5 id="envioOP" class="mt-3">
                                    2.3 Envío de la operación archivo PHP
                                </h5>

                                <p>
                                    Para enviar la operación debemos emplear el modelo de excepciones "try - catch". 
                                    <small class="form-text text-muted alert alert-primary">
                                        --&gt;Para obtener más información sobre la excepción de "try - catch" puede ver la <a target="_blank" href="https://www.php.net/manual/es/language.exceptions.php">documentación oficial de PHP.</a>
                                    </small>
                                </p>
                                <ul>
                                    <li>
                                        Llamamos al objeto "$hppJson" e indicamos el importe que queremos cargar: 
                                        <span class="arrow">$</span><span class="variableBgW">service</span>
                                        <span class="arrow">->Authorize(</span><span class="variableBgW">20</span><span class="arrow">)</span>
                                    </li>

                                    <br>

                                    <li>
                                        Posteriormente debemos indicar la moneda en la que vamos a realizar el cargo:
                                        <span class="arrow">->withCurrency(</span><span class="comentariosBgW">"EUR"</span><span class="arrow">)</span>
                                    </li>
                                    
                                    <br>

                                    <li>
                                        Por último, enviamos la petición:
                                        <span class="arrow">->serialize();</span>
                                    </li>
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
                                            <span class="pl-4">$</span><span class="variables">hppJson</span> <span class="require">=</span> $<span class="variables">service</span><span class="require">-></span><span class="configure">Authorize</span><span class="require">(</span><span class="variables">20</span><span class="require">)</span>
                                        <br>
                                            <span class="pl-5 require">-></span><span class="configure">withCurrency</span><span class="require">("</span><span class="green">EUR</span><span class="require">")</span>
                                        <br>
                                            <span class="pl-5 require">-></span><span class="configure">serialize</span><span class="require">();</span>
                                        <br>
                                        <br>
                                            <span class="comments pl-4">// Mostramos el formulario</span>
                                        <br>
                                            <span class="pl-4 require">echo</span> $<span class="variables">hppJson</span><span class="require">;</span>
                                        <br>
                                        <br>
                                            <span class="pl-3 require">}</span><span class="new"> catch</span> (<span class="service">ApiException</span> $<span class="variables">e</span>) <span class="require">{</span>
                                        <br>
                                            <span class="comments pl-4">// Añada aquí su tratamiento de errores</span>
                                        <br>
                                            <span class="pl-4 require">echo</span> $<span class="variables">e</span><span class="require">-></span><span class="configure">getMessage</span><span class="require">();</span>
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

                                <hr>

                                <h5 id="envioOPHTML" class="mt-3">
                                    2.4 Envío de la operación archivo HTML
                                </h5>

                                <p>
                                    Para lanzar la operación desde nuestro HTML, debemos emplear lo siguientes parámetros: 
                                </p>
                                <ul>
                                    <li>
                                        Indicamos la ruta del archivo PHP que realiza la petición al servidor de PHP: 
                                        <span class="arrow">$.getJSON(</span><span class="comentariosBgW">"request.php"</span><span class="arrow">)</span>
                                    </li>

                                    <br>

                                    <li>
                                        Posteriormente debemos indicar la URL del servidor de Addon Payments:
                                        <span class="arrow">setHppUrl(</span><span class="comentariosBgW">"https://hpp.sandbox.addonpayments.com/pay"</span><span class="arrow">);</span>
                                    </li>
                                    
                                    <br>

                                    <li>
                                        Por último, debemos indicar el identificador del botón y la ruta del archivo de respuesta:
                                        <span class="arrow">redirect.init(</span><span class="comentariosBgW">"payButtonId"</span><span class="arrow">,</span> <span class="comentariosBgW">"response.php"</span><span class="arrow">);</span>
                                    </li>
                                </ul>
                                <div class="p-4 mb-4 panelCode">
                                    <code>
                                            <span class="pl-2 new"><</span><span class="script">script</span><span class="new">></span>
                                        <br>
                                            <span class="pl-4">$</span><span class="require">(</span><span class="service">document</span><span class="require">).</span><span class="new">ready(</span><span class="function">function</span><span class="new">() {</span>
                                        <br>
                                            <span class="pl-5">$.</span><span class="new">getJSON(</span><span class="require">"</span><span class="green">request.php</span><span class="require">"</span><span class="new">,</span> <span class="function">function</span><span class="require">(</span><span class="orange">jsonFromRequestEndpoint</span><span class="require">) {</span>
                                        <br>
                                            <span class="pl-5 service">RealexHpp</span><span class="new">.setHppUrl(</span><span class="require">"</span><span class="green">https://hpp.sandbox.addonpayments.com/pay</span><span class="require">"</span><span class="new">);</span>
                                        <br>
                                            <span class="pl-5 service">RealexHpp</span><span class="new">.redirect.init(</span><span class="require">"</span><span class="green">payButtonId</span><span class="require">"</span><span class="new">,</span> <span class="require">"</span><span class="green">response.php</span><span class="require">"</span><span class="new">,</span> <span class="variables">jsonFromRequestEndpoint</span><span class="new">);</span>
                                        <br>
                                            <span class="pl-5 new">});</span>
                                        <br>
                                            <span class="pl-4 new">});</span>
                                        <br>
                                            <span class="pl-2 new"><</span><span class="script">/script</span><span class="new">></span>
                                    </code>
                                </div>
                            </div>            
                        </div>
                        <!-- /Punto 2 -->

                        <!-- Punto 3 -->
                        <div class="contenedor">
                            <div class="pl-3 pt-3 mb-2 pb-2 pr-3 text-justify">
                                <h3 class="pt-1" id="FormEjemplo1">
                                    3. Formulario de ejemplo
                                </h3>
                                
                                <hr>

                                <p>
                                    Para poder procesar la transacción con el formulario de ejemplo, debe modificar el archivo "dcc.php" que se encuentra en la ruta "vendor\addonpayments\php-sdk\test\php\HPP\04 - DCC".
                                </p>
                                <p>
                                    Debe introducir sus datos de configuración tal y como se muestra en el punto 2.2 de esta guía.
                                </p>

                                <hr>
                                <h5 id="Formulario" class="mt-3">3.1 Formulario</h5>

                                <p>
                                    El siguiente formulario le permite enviar una operación contra el entorno de pruebas de Addon Payments.
                                </p>

                                <div class="row justify-content-around">
                                    <div class="col-lg-4">
                                        <div class="row">
                                            <div class="col-lg-12 pt-3 mt-2 mb-2 formulario">
                                                <div class="form-group row">
                                                    <div class="col-sm-12">
                                                        <button type="submit" id="payButtonId" class="btn btn-block btn-primary">Enviar petición</button>
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
                                    --&gt; La respuesta se muestra al final de cada operación dentro del dominio de la pasarela de pagos. Si desea modificar dicha respuesta, puede acceder al archivo "response.php" y  modificar los valores que quiera mostrar en la pasarela de pagos. Para obtener más información sobre la excepción de "try - catch" puede ver la <a target="_blank" href="https://www.php.net/manual/es/language.exceptions.php">documentación oficial de PHP.</a>
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
        <script src="../../../assets/js/barraprogreso.js"></script>

        <script>
            $(document).ready(function() {
                $.getJSON("dcc.php", function(jsonFromRequestEndpoint) {
                  RealexHpp.setHppUrl("https://hpp.sandbox.addonpayments.com/pay");
                  // When using full page redirect your Response URL must be an absolute link
                  RealexHpp.redirect.init("payButtonId", "https://midominio.es/response.php", jsonFromRequestEndpoint);
                });
            });
        </script>
        
    </body>
</html>
