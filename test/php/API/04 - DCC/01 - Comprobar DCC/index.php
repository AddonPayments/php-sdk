<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="Víctor Cantera">
        <link rel="icon" href="../../../../assets/img/comercia_ico.png" type="image/x-icon"/ >
        <title>DCC (API) - SDK PHP</title>

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
                        <a class="nav-link pl-2 dropdown-toggle active" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            DCC
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <div class="dropdown-header text-center p-0">API</div>
                            <hr class="m-0 p-0">
                                <a class="dropdown-item pl-2 active"  href="#">Comprobar DCC</a>
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
                                <a class="nav-link" href="#tDCC">1. Dynamic Currency Conversion (DCC)</a>
                                <nav class="nav nav-pills flex-column">
                                    <a class="nav-link ml-3 my-1" href="#codigoEjemplo">1.1 Código de ejemplo</a>
                                </nav>
                                <a class="nav-link" href="#descripciones">2. Descripciones</a>
                                <nav class="nav nav-pills flex-column">
                                    <a class="nav-link ml-3 my-1" id="#ConfigTerminal" href="#ConfigTerminal">2.1 Configuración del terminal</a>
                                    <a class="nav-link ml-3 my-1" id="#refExist" href="#refExist">2.2 Datos de la tarjeta</a>
                                    <a class="nav-link ml-3 my-1" id="#envioOP" href="#envioOP">2.3 Envío de la petición de DCC</a>
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
                                <h3 id="tDCC" class="titulo">
                                    1. Dynamic Currency Conversion (DCC)
                                </h3>
                                <hr>

                                <p>
                                    Esta solicitud determina si una tarjeta es elegible para DCC y, de ser así, devuelve el tipo de cambio más actualizado junto con la información de conversión de moneda adicional.
                                </p>

                                <p>
                                    Si la tarjeta no es elegible para DCC o la moneda de la tarjeta es la misma que la base del comerciante, se devolverá un código de resultado de 105. En este caso, puede proceder con una autorización regular sin incluir ninguna información de DCC.
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
                                            <span class="pl-3 require">use <span class="imports">AddonPayments\Api\PaymentMethods\CreditCardData</span>;</span>
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
                                            <span class="pl-3 comments">// Creamos el objeto tarjeta</span>
                                        <br>
                                            <span class="pl-3">$</span><span class="variables">card</span> <span class="require">=</span> <span class="new">new</span> <span class="service">CreditCardData()</span><span class="require">;</span>
                                        <br>
                                            <span class="pl-3">$</span><span class="variables">card</span><span class="require">-></span><span class="variables">number</span> <span class="require">= "</span><span class="green">4006097467207025</span><span class="require">";</span>
                                        <br>
                                            <span class="pl-3">$</span><span class="variables">card</span><span class="require">-></span><span class="variables">expMonth</span> <span class="require">= "</span><span class="green">12</span><span class="require">";</span>
                                        <br>
                                            <span class="pl-3">$</span><span class="variables">card</span><span class="require">-></span><span class="variables">expYear</span> <span class="require">= "</span><span class="green">2025</span><span class="require">";</span>
                                        <br>
                                            <span class="pl-3">$</span><span class="variables">card</span><span class="require">-></span><span class="variables">cvn</span> <span class="require">= "</span><span class="green">123</span><span class="require">";</span>
                                        <br>
                                            <span class="pl-3">$</span><span class="variables">card</span><span class="require">-></span><span class="variables">cardHolderName</span> <span class="require">= "</span><span class="green">Víctor Cantera</span><span class="require">";</span>
                                        <br>
                                        <br>
                                            <span class="pl-3 comments">// Lanzamos la petición al servidor de Addon Payments</span>
                                        <br>
                                            <span class="pl-3 new">try</span><span class="require"> {</span>
                                        <br>
                                            <span class="pl-4">$</span><span class="variables">response</span> <span class="require">=</span> $<span class="variables">card</span><span class="require">-></span><span class="configure">getDccRate</span><span class="require">(</span>
                                            <span class="require">"</span><span class="green">1</span><span class="require">",</span>
                                            <span class="require">"</span><span class="green">10</span><span class="require">",</span>
                                            <span class="require">"</span><span class="green">EUR</span><span class="require">",</span>
                                            <span class="require">"</span><span class="green">fexco</span><span class="require">",</span>
                                            <span class="service">GenerationUtils</span><span class="configure">::getGuid()</span><span class="require">);</span>
                                        <br>
                                        <br>
                                            <span class="comments pl-4">// Obtenemos la respuesta y la mostramos</span>
                                        <br>
                                            <span class="pl-4">$</span><span class="variables">dccResponseResult</span> <span class="require">=</span> $<span class="variables">response</span><span class="require">-></span><span class="variables">dccResponseResult</span><span class="require">;</span>
                                        <br>
                                            <span class="pl-4 require">echo "</span><span class="green">Order ID == </span><span class="require">".</span>$<span class="variables">orderID</span> <span class="require">=</span> $<span class="variables">response</span><span class="require">-></span><span class="variables">orderId</span><span class="require">."</span><span class="green"><</span><span class="green">br></span><span class="require">";</span>
                                        <br>
                                            <span class="pl-4 require">echo "</span><span class="green">El tipo de cambio ofrecido por el procesador de conversión de moneda para esta transacción == </span><span class="require">".</span>$<span class="variables">cardHolderRate</span> <span class="require">=</span> $<span class="variables">dccResponseResult</span><span class="require">-></span><span class="variables">cardHolderRate</span><span class="require">."</span><span class="green"><</span><span class="green">br></span><span class="require">";</span>
                                        <br>
                                            <span class="pl-4 require">echo "</span><span class="green">Moneda de la tarjeta == </span><span class="require">".</span>$<span class="variables">cardHolderCurrency</span> <span class="require">=</span> $<span class="variables">dccResponseResult</span><span class="require">-></span><span class="variables">cardHolderCurrency</span><span class="require">."</span><span class="green"><</span><span class="green">br></span><span class="require">";</span>
                                        <br>
                                            <span class="pl-4 require">echo "</span><span class="green">Cantidad que se ofrece al titular == </span><span class="require">".</span>$<span class="variables">customerAmount</span> <span class="require">=</span> $<span class="variables">dccResponseResult</span><span class="require">-></span><span class="variables">cardHolderAmount</span><span class="require">."</span><span class="green"><</span><span class="green">br></span><span class="require">";</span>
                                        <br>
                                            <span class="pl-4 require">echo "</span><span class="green">Moneda del comercio == </span><span class="require">".</span>$<span class="variables">exchangeRate</span> <span class="require">=</span> $<span class="variables">dccResponseResult</span><span class="require">-></span><span class="variables">merchantCurrency</span><span class="require">."</span><span class="green"><</span><span class="green">br></span><span class="require">";</span>
                                        <br>
                                            <span class="pl-4 require">echo "</span><span class="green">Fuente del tipo de cambio == </span><span class="require">".</span>$<span class="variables">exchangeRateSourceName</span> <span class="require">=</span> $<span class="variables">dccResponseResult</span><span class="require">-></span><span class="variables">exchangeRateSourceName</span><span class="require">."</span><span class="green"><</span><span class="green">br></span><span class="require">";</span>
                                        <br>
                                            <span class="pl-4 require">echo "</span><span class="green">Tiempo de la fuente del tipo de cambio == </span><span class="require">".</span>$<span class="variables">exchangeRateSourceTimestamp</span> <span class="require">=</span> $<span class="variables">dccResponseResult</span><span class="require">-></span><span class="variables">exchangeRateSourceTimestamp</span><span class="require">;</span>
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

                                <h5 id="refExist" class="mt-3">
                                    2.2 Datos de la tarjeta
                                </h5>

                                    <p>
                                       Para crear el objeto "tarjeta" necesitamos los siguientes parámetros:
                                    </p>
                                    <ul>
                                        <li>
                                            Llamamos a la función <span class="arrow">new CreditCardData()</span><span class="require">;</span>
                                        </li>

                                        <li>
                                            Indicamos cuál es el número de la tarjeta a la cual vamos a realizarle el cargo:
                                            <span class="comentariosBgW">"4006097467207025"</span><span class="arrow">;</span>
                                        </li>

                                        <li>
                                            Indicamos el mes de expiración:
                                            <span class="comentariosBgW">"12"</span><span class="arrow">;</span>
                                        </li>

                                        <li>
                                            Indicamos la fecha de expiración:
                                            <span class="comentariosBgW">"2025"</span><span class="arrow">;</span>
                                        </li>

                                        <li>
                                            Indicamos el código de seguridad de la tarjeta:
                                          <span class="comentariosBgW">"123"</span><span class="arrow">;</span>
                                        </li>

                                        <li>
                                            Nombre del titular de la tarjeta:
                                          <span class="comentariosBgW">"Nombre del titular"</span><span class="arrow">;</span>
                                        </li>
                                    </ul>
                                    <div class="p-4 mb-4 panelCode">
                                        <code>
                                            <b>
                                                <span class="etiqueta">&lt;?php</span>
                                            </b>
                                            <br>
                                            <br>
                                                <span class="pl-3">$</span><span class="variables">card</span> <span class="require">=</span> <span class="new">new</span> <span class="service">CreditCardData()</span><span class="require">;</span> <span class="comments">// Llamamos a la función CreditCardData()</span>
                                            <br>
                                                <span class="pl-3">$</span><span class="variables">card</span><span class="require">-></span><span class="variables">number</span> <span class="require">= "</span><span class="green">4006097467207025</span><span class="require">";</span> <span class="comments">// Tarjeta del cliente (en este caso una tarjeta de pruebas)</span>
                                            <br>
                                                <span class="pl-3">$</span><span class="variables">card</span><span class="require">-></span><span class="variables">expMonth</span> <span class="require">= "</span><span class="green">12</span><span class="require">";</span> <span class="comments">// Mes de expiración de la tarjeta</span>
                                            <br>
                                                <span class="pl-3">$</span><span class="variables">card</span><span class="require">-></span><span class="variables">expYear</span> <span class="require">= "</span><span class="green">2025</span><span class="require">";</span> <span class="comments">// Año de expiración de la tarjeta</span>
                                            <br>
                                                <span class="pl-3">$</span><span class="variables">card</span><span class="require">-></span><span class="variables">cvn</span> <span class="require">= "</span><span class="green">123</span><span class="require">";</span> <span class="comments">// Código de seguridad de la tarjeta</span>
                                            <br>
                                                <span class="pl-3">$</span><span class="variables">card</span><span class="require">-></span><span class="variables">cardHolderName</span> <span class="require">= "</span><span class="green">Víctor Cantera</span><span class="require">";</span> <span class="comments">// Nombre del cliente</span>
                                            <br>
                                            <br>
                                            <b>
                                                <span class="etiqueta">?&gt;</span>
                                            </b>
                                        </code>
                                    </div>

                                <hr>

                                <h5 id="envioOP" class="mt-3">
                                    2.3 Envío de la petición DCC
                                </h5>

                                <p>
                                    Para enviar la solicitud a los servidores de Addon Payments, debemos emplear el modelo de excepciones "try - catch". 
                                    <small class="form-text text-muted alert alert-primary">
                                        --&gt;Para obtener más información sobre la excepción de "try - catch" puede ver la <a target="_blank" href="https://www.php.net/manual/es/language.exceptions.php">documentación oficial de PHP.</a>
                                    </small>
                                </p>
                               <p>
                                    Para obtener los datos DCC debemos enviar los siguientes parámetros:
                               </p>
                                <ul>
                                    <li>
                                        <span class="arrow">$</span><span class="variableBgW">response</span>
                                         <span class="arrow">=</span>
                                         <span class="arrow">$</span><span class="variableBgW">card</span>
                                         <span class="arrow">->getDccRate(</span>
                                         <span class="comentariosBgW">"1"</span><span class="arrow">,</span>
                                         <span class="comentariosBgW">"10"</span><span class="arrow">,</span>
                                         <span class="comentariosBgW">"EUR"</span><span class="arrow">,</span>
                                         <span class="comentariosBgW">"fexco"</span><span class="arrow">,</span>
                                         <span class="arrow">GenerationUtils::getGuid());</span>
                                         <br>
                                        <ul>
                                            <li>
                                                <span class="comentariosBgW">"1"</span> = Tipo de conversión. Siempre debe establecerse en 1.
                                            </li>
                                            <li>
                                                <span class="comentariosBgW">"10"</span> = Importe que deseamos comprobar.
                                            </li>
                                            <li>
                                                <span class="comentariosBgW">"EUR"</span> = Moneda en la que enviamos la operación.
                                            </li>
                                            <li>
                                                <span class="comentariosBgW">"fexco"</span> = El nombre del PCM (Procesador de conversión de moneda) al que se enviará la solicitud.
                                            </li>
                                            
                                        </ul>
                                    </li>
                                        
                                </ul>

                                <p>
                                    En entorno de pruebas utilizamos el procesador "fexco", para el entorno de producción debemos usar el procesador "comercia".
                                </p>

                                <div class="p-4 mb-4 panelCode">
                                    <code>
                                        <b>
                                            <span class="etiqueta">&lt;?php</span>
                                        </b>
                                        <br>
                                        <br>
                                            <span class="pl-3 new">try</span><span class="require"> {</span>
                                        <br>
                                            <span class="comments pl-4">// Solicitamos la comprobación del DCC</span>
                                        <br>
                                            <span class="pl-4">$</span><span class="variables">response</span> <span class="require">=</span> $<span class="variables">card</span><span class="require">-></span><span class="configure">getDccRate</span><span class="require">(</span>
                                            <span class="require">"</span><span class="green">1</span><span class="require">",</span>
                                            <span class="require">"</span><span class="green">10</span><span class="require">",</span>
                                            <span class="require">"</span><span class="green">EUR</span><span class="require">",</span>
                                            <span class="require">"</span><span class="green">fexco</span><span class="require">",</span>
                                            <span class="service">GenerationUtils</span><span class="configure">::getGuid()</span><span class="require">);</span>
                                        <br>
                                        <br>
                                            <span class="comments pl-4">// Obtenemos la respuesta y la mostramos</span>
                                        <br>
                                            <span class="pl-4">$</span><span class="variables">dccResponseResult</span> <span class="require">=</span> $<span class="variables">response</span><span class="require">-></span><span class="variables">dccResponseResult</span><span class="require">;</span>
                                        <br>
                                            <span class="pl-4 require">echo "</span><span class="green">Order ID == </span><span class="require">".</span>$<span class="variables">orderID</span> <span class="require">=</span> $<span class="variables">response</span><span class="require">-></span><span class="variables">orderId</span><span class="require">."</span><span class="green"><</span><span class="green">br></span><span class="require">";</span>
                                        <br>
                                            <span class="pl-4 require">echo "</span><span class="green">El tipo de cambio ofrecido por el procesador de conversión de moneda para esta transacción == </span><span class="require">".</span>$<span class="variables">cardHolderRate</span> <span class="require">=</span> $<span class="variables">dccResponseResult</span><span class="require">-></span><span class="variables">cardHolderRate</span><span class="require">."</span><span class="green"><</span><span class="green">br></span><span class="require">";</span>
                                        <br>
                                            <span class="pl-4 require">echo "</span><span class="green">Moneda de la tarjeta == </span><span class="require">".</span>$<span class="variables">cardHolderCurrency</span> <span class="require">=</span> $<span class="variables">dccResponseResult</span><span class="require">-></span><span class="variables">cardHolderCurrency</span><span class="require">."</span><span class="green"><</span><span class="green">br></span><span class="require">";</span>
                                        <br>
                                            <span class="pl-4 require">echo "</span><span class="green">Cantidad que se ofrece al titular == </span><span class="require">".</span>$<span class="variables">customerAmount</span> <span class="require">=</span> $<span class="variables">dccResponseResult</span><span class="require">-></span><span class="variables">cardHolderAmount</span><span class="require">."</span><span class="green"><</span><span class="green">br></span><span class="require">";</span>
                                        <br>
                                            <span class="pl-4 require">echo "</span><span class="green">Moneda del comercio == </span><span class="require">".</span>$<span class="variables">exchangeRate</span> <span class="require">=</span> $<span class="variables">dccResponseResult</span><span class="require">-></span><span class="variables">merchantCurrency</span><span class="require">."</span><span class="green"><</span><span class="green">br></span><span class="require">";</span>
                                        <br>
                                            <span class="pl-4 require">echo "</span><span class="green">Fuente del tipo de cambio == </span><span class="require">".</span>$<span class="variables">exchangeRateSourceName</span> <span class="require">=</span> $<span class="variables">dccResponseResult</span><span class="require">-></span><span class="variables">exchangeRateSourceName</span><span class="require">."</span><span class="green"><</span><span class="green">br></span><span class="require">";</span>
                                        <br>
                                            <span class="pl-4 require">echo "</span><span class="green">Tiempo de la fuente del tipo de cambio == </span><span class="require">".</span>$<span class="variables">exchangeRateSourceTimestamp</span> <span class="require">=</span> $<span class="variables">dccResponseResult</span><span class="require">-></span><span class="variables">exchangeRateSourceTimestamp</span><span class="require">;</span>
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
                        <!-- Fin punto 2 -->

                        <!-- Punto 3 -->
                        <div class="contenedor">
                            <div class="pl-3 pt-3 pr-3 pb-4 mb-3 text-justify">
                                <h3 class="pt-1" id="FormEjemplo1">
                                    3. Formulario de ejemplo
                                </h3>
                                
                                <hr>

                                <p>
                                    Para realizar una comprobación con la operativa DCC en el siguiente formulario de ejemplo, debe modificar el archivo "dcc.php" que se encuentra en la ruta "vendor\addonpayments\php-sdk\test\php\API\04 - DCC\01 - Comprobar DCC".
                                </p>
                                <p>
                                    Debe introducir sus datos de configuración tal y como se muestra en el punto 2.1 de esta guía.
                                </p>

                                <hr>
                                <h5 id="Formulario" class="mt-3">3.1 Formulario</h5>

                                <p>
                                    El siguiente formulario le permite comprobar el cambio de moneda de la tarjeta del cliente en entorno de pruebas. Puede acceder al panel de administración ingresando en la siguiente URL e introduciendo sus datos de inicio de sesión:
                                    <ul>
                                         <li><a target="_blank" href="https://admin.sandbox.addonpayments.com">https://admin.sandbox.addonpayments.com.</a></li>
                                    </ul>
                                </p>

                                <form id="formulario_envio" method="POST" autocomplete="off" class="col-lg-12" action="dcc.php">
                                    <div class="row justify-content-around">
                                        <div class="col-lg-4 pl-lg-4">
                                            <div class="row">
                                                <div class="col-lg-12 mt-2 mb-2 formulario">
                                                    <!-- Datos de tarjeta -->

                                                    <h4 class="pt-2">DCC</h4>

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
                                                        <input type="hidden" id="importe" name="importe" value="10" />
                                                        <b>Importe:</b> <span>10€</span>
                                                    </p>
                                                    <div class="form-group row">
                                                        <div class="col-sm-12">
                                                            <button type="submit" class="btn btn-block btn-primary" onclick="validate();">Comprobar DCC</button>
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