<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="victoralejandroch">
        <link rel="icon" href="assets/img/comercia_ico.png" type="image/x-icon"/ >
        <title>Addon Payments SDK de PHP</title>

        <!-- Bootstrap 4.3.1 -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <!-- CSS -->
        <link rel="stylesheet" href="assets/css/style.css">
    </head>
    <body>
        <!-- NAVBAR -->
        <nav class="navbar navbar-expand-lg navbar-light navbar-rpdc mb-3">
            <a class="navbar-brand">
                <img src="assets/img/log2.svg" width="30" height="30" class="img-fluid" alt="Logo Addon Payments">
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
                    <li class="nav-item ml-1 dropdown">
                        <a class="nav-link pl-2 dropdown-toggle active" href="#" id="inicio" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Inicio
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item pl-2 active" href="#">Inicio</a>
                            <a class="dropdown-item pl-2" href="php/errores.php">Errores de Addon Payments</a>
                            <a class="dropdown-item pl-2" href="php/informe.html">Convertir informe</a>
                        </div>
                    </li>
                    <li class="nav-item ml-1 dropdown">
                        <a class="nav-link pl-2 dropdown-toggle" href="#" id="01-Pagos_con_tarjeta" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Pagos con tarjeta
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <div class="dropdown-header text-center p-0">API</div>
                            <hr class="m-0 p-0">
                                <a class="dropdown-item pl-2" href="php/API/01%20-%20Pagos%20con%20tarjeta/01%20-%20Authorization/index.php">Autorización</a>
                                <a class="dropdown-item pl-2" href="php/API/01%20-%20Pagos%20con%20tarjeta/01%20-%20Authorization/DatosDelCliente.php">Datos adicionales</a>
                                <a class="dropdown-item pl-2" href="php/API/01%20-%20Pagos%20con%20tarjeta/02%20-%20OTB/index.php">OTB</a>
                                <a class="dropdown-item pl-2" href="php/API/01%20-%20Pagos%20con%20tarjeta/03%20-%20Credit/index.php">Credit</a>
                            <hr class="m-0 p-0">
                            <div class="dropdown-header text-center p-0">HPP</div>
                            <hr class="m-0 p-0">
                                <a class="dropdown-item pl-2" href="php/HPP/01%20-%20Pagos%20con%20tarjeta/01%20-%20Authorization/index.php">Autorización</a>
                                <a class="dropdown-item pl-2" href="php/HPP/01%20-%20Pagos%20con%20tarjeta/02%20-%20OTB/index.php">OTB</a>
                                <a class="dropdown-item pl-2" href="php/HPP/01%20-%20Pagos%20con%20tarjeta/03%20-%20Pay%20By%20Link/index.php">Pay By Link</a>
                                <a class="dropdown-item pl-2" href="php/HPP/01%20-%20Pagos%20con%20tarjeta/04%20-%20Auth%20con%20iframe/index.php">Iframe</a>
                                <a class="dropdown-item pl-2" href="php/HPP/01%20-%20Pagos%20con%20tarjeta/05%20-%20Lightbox/index.php">Lightbox</a>
                        </div>
                    </li>
                    <li class="nav-item ml-1 dropdown">
                        <a class="nav-link pl-2 dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Almacenamiento de tarjeta
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <div class="dropdown-header text-center p-0">API</div>
                            <hr class="m-0 p-0">
                                <a class="dropdown-item pl-2" href="php/API/02%20-%20Almacenamiento%20de%20tarjeta/01%20-%20Crear%20un%20cliente/index.php">Crear un cliente</a>
                                <a class="dropdown-item pl-2" href="php/API/02%20-%20Almacenamiento%20de%20tarjeta/02%20-%20Almacenar%20una%20tarjeta/index.php">Almacenar una tarjeta</a>
                                <a class="dropdown-item pl-2" href="php/API/02%20-%20Almacenamiento%20de%20tarjeta/03%20-%20Editar%20tarjeta/index.php">Editar tarjetas</a>
                                <a class="dropdown-item pl-2" href="php/API/02%20-%20Almacenamiento%20de%20tarjeta/04%20-%20Eliminar%20tarjeta/index.php">Eliminar tarjetas</a>
                                <a class="dropdown-item pl-2" href="php/API/02%20-%20Almacenamiento%20de%20tarjeta/05%20-%20Auth/index.php">Autorización</a>
                                <a class="dropdown-item pl-2" href="php/API/02%20-%20Almacenamiento%20de%20tarjeta/06%20-%20Credit/index.php">Credit</a>
                                <a class="dropdown-item pl-2" href="php/API/02%20-%20Almacenamiento%20de%20tarjeta/07%20-%20DCC/index.php">Dynamic Currency Conversion</a>
                            <hr class="m-0 p-0">
                            <div class="dropdown-header text-center p-0">HPP</div>
                            <hr class="m-0 p-0">
                                <a class="dropdown-item pl-2" href="php/HPP/02%20-%20Almacenamiento%20de%20tarjeta/01%20-%20Crear%20un%20cliente/index.php">Crear un cliente</a>
                                <a class="dropdown-item pl-2" href="php/HPP/02%20-%20Almacenamiento%20de%20tarjeta/02%20-%20Mostrar%20Tarjetas/index.php">Mostrar tarjetas</a>
                        </div>
                    </li>
                    <li class="nav-item ml-1 dropdown">
                        <a class="nav-link pl-2 dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Gestión de transacciones
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item pl-2" href="php/API/03%20-%20Gestion%20de%20transacciones/01%20-%20Capturar/index.php">Settle (Capturar)</a>
                            <a class="dropdown-item pl-2" href="php/API/03%20-%20Gestion%20de%20transacciones/02%20-%20Rebate/index.php">Rebate (Devolución)</a>
                            <a class="dropdown-item pl-2" href="php/API/03%20-%20Gestion%20de%20transacciones/03%20-%20Void/index.php">Void (Anular transacción)</a>
                        </div>
                    </li>

                    <li class="nav-item ml-1 dropdown">
                        <a class="nav-link pl-2 dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Filtro de fraude
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            
                            <div class="dropdown-header text-center p-0">API</div>
                            <hr class="m-0 p-0">
                                <a class="dropdown-item pl-2"  href="php/API/05%20-%20Fraud%20Management/01%20-%20Fraud%20Filter/index.php">Filtro de fraude</a>
                                <a class="dropdown-item pl-2"  href="php/API/05%20-%20Fraud%20Management/02%20-%20Address%20Verification">Verificación de dirección</a>
                                <a class="dropdown-item pl-2"  href="php/API/05%20-%20Fraud%20Management/03%20-%20Hold">Retener transacción</a>
                                <a class="dropdown-item pl-2"  href="php/API/05%20-%20Fraud%20Management/04%20-%20Lanzamiento">Lanzar transacción</a>
                            <hr class="m-0 p-0">
                            <div class="dropdown-header text-center p-0">HPP</div>
                            <hr class="m-0 p-0">
                                <a class="dropdown-item pl-2"  href="php/HPP/03%20-%20Fraud%20Management/01%20-%20Fraud%20Filter/index.php">Filtro de fraude</a>
                        </div>
                    </li>

                    <li class="nav-item ml-1 dropdown">
                        <a class="nav-link pl-2 dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            DCC
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <div class="dropdown-header text-center p-0">API</div>
                            <hr class="m-0 p-0">
                                <a class="dropdown-item pl-2"  href="php/API/04%20-%20DCC/01%20-%20Comprobar%20DCC/index.php">Comprobar DCC</a>
                            <hr class="m-0 p-0">
                            <div class="dropdown-header text-center p-0">HPP</div>
                            <hr class="m-0 p-0">
                                <a class="dropdown-item pl-2"href="php/HPP/04%20-%20DCC/index.php">Operación con DCC</a>
                        </div>
                    </li>
                    <li class="nav-item ml-1 dropdown">
                        <a class="nav-link pl-2 dropdown-toggle" href="#" id="06-3DS2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            3DS2
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <div class="dropdown-header text-center p-0">API</div>
                            <hr class="m-0 p-0">
                                <a class="dropdown-item pl-2" href="php/API/06%20-%203DS2/01%20-%20Authorization/index.html">Autorización</a>
                            <hr class="m-0 p-0">
                            <div class="dropdown-header text-center p-0">HPP</div>
                            <hr class="m-0 p-0">
                                <a class="dropdown-item pl-2" href="php/HPP/05%20-%203DS2/01%20-%20Authorization/index.html">Autorización</a>
                                <a class="dropdown-item pl-2" href="php/HPP/05%20-%203DS2/02%20-%20Datos%20adicionales/index.html">Datos adicionales</a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- /NAVBAR -->

        <div class="col-lg-12">
            <div id="contenidoComun" class="row">
            	<!-- Contenido común -->
                <div class="col-lg-12 contenedor">
                    <!-- Index -->
                    <div class="row p-5" style="background-color: #007dc3; margin-top: -15px; z-index: -1;">
                        <div class="col-lg-6 pt-2" >
                            <img class="img-fluid mx-auto d-block" src="assets/img/her1.png" alt="img1">
                        </div>
                        <div class="col-lg-6 pt-2 justify-content-center text-center align-self-center" style="color: white;">
                            <div>
                                <h4>Acepta pagos online de forma segura</h4><br>
                                <h2>La solución de pago más completa para tu negocio</h2> <br>
                                <h4>Sin costes ocultos.</h4>
                                <div class="text-center pt-3" style="font-size: 1.2em;">
                                    <a target="_blank" href="https://www.addonpayments.com/es-es/registro" style="text-decoration: none; color: white;">
                                        <button type="button" class="btn btn-success">
                                            Obtener más información
                                        </button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--<div class="row pt-4 justify-content-center text-center align-self-center">
                        <p style="font-size: 26px !important;">
                            Elige cómo quieres integrar Addon Payments en tu negocio online
                        </p>
                    </div>-->
                    <div class="container">
                        <div class="row p-5">
                            <div class="col-lg-6 pt-2" >
                                <div>
                                    <h4 style="font-weight: 100;font-size: 36px; text-align: center;">HPP | iFrame</h4>
                                    <br>
                                    <div class="body-content-container">
                                        <div class="right-container">
                                            <div class="column-copy">
                                                <p>
                                                    Nuestra pasarela segura se muestra en modo iFrame, como si fuera una sección más de tu propia web. De esta forma, no es necesario que trates o transfieras datos de tarjeta delicados.
                                                </p>
                                                <ul>
                                                    <li>Se integra en cinco minutos</li>
                                                    <li>El cliente nunca abandona tu sitio web</li>
                                                    <li>Adapta la pasarela al look and feel de tu página</li>
                                                    <li>Activa servicios adicionales fácilmente</li>
                                                    <ul>
                                                        <li>Multidivisa</li>
                                                        <li>3D Secure</li>
                                                        <li>Almacenamiento de tarjetas</li>
                                                        <li>Métodos de pago alternativos</li>
                                                        <li>PayPal</li>
                                                    </ul>
                                                    <li>Minimiza tu responsabilidad de cumplimiento de la normativa PCI</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 pt-4">
                               <img class="img-fluid mx-auto d-block" src="https://www.addonpayments.com/-/media/comercia-new/hosted-payment-page-and-api/iframehppspanish480es.jpg?la=es-es&modified=20170803111738&hash=CD29FC1053AEF3E3B8E6253A702F7C14" alt="img2">
                            </div>
                        </div>

                        <div class="row pb-5">
                            <div class="col-lg-6 pt-2">
                               <img class="img-fluid mx-auto d-block" src="https://www.addonpayments.com/-/media/comercia-new/hosted-payment-page-and-api/integration-api-011-en.png?h=404&la=es-es&w=480&modified=20170705111510&hash=99F4FACE68784800E0E1F2ABFE1CE7A8" alt="img2">
                            </div>
                            <div class="col-lg-6 pt-2" >
                                <div>
                                    <h4 style="font-weight: 100;font-size: 36px; text-align: center;">Integración vía API</h4>
                                    <br>
                                    <div class="body-content-container">
                                        <div class="right-container">
                                            <div class="column-copy" style="float: right;">
                                                <p>
                                                    La pasarela de pago se encuentra alojada en tu sistema. Solo tendrás que transferirnos los datos de la transacción y los detalles de pago del cliente para que los procesemos.
                                                </p>
                                                <ul>
                                                    <li>Integración en cinco minutos</li>
                                                    <li>Todo el control de la experiencia de pago en tus manos</li>
                                                    <li>Gestiona las transacciones directamente en tu sistema</li>
                                                    <li>Activa servicios adicionales facilmente</li>
                                                    <ul>
                                                        <li>
                                                            Multidivisa
                                                        </li>
                                                        <li>
                                                            3D Secure
                                                        </li>
                                                        <li>
                                                            Almacenamiento de tarjetas
                                                        </li>
                                                        <li>
                                                            Métodos de pago alternativos
                                                        </li>
                                                    </ul>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="container-fluid p-2">
                            <div class="row justify-content-center text-center align-self-center">
                                <p class="col-lg-12 p-4" style="font-size: 26px !important;">
                                    Productos y servicios de un vistazo
                                </p>
                                <div class="col-xs-12 services-section">
                                    <div class="table-wrapper">
                                        <table class="table table-striped table-services">
                                            <thead class="thead-dark">
                                                <tr>
                                                    <th>Servicios</th>
                                                    <th>HPP</th>
                                                    <th>SDK</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        Procesar un pago (autorización)
                                                    </td>
                                                    <td>
                                                        <img src="assets/img/tick.png" class="imagenTick" alt="">
                                                    </td>
                                                    <td>
                                                        <img src="assets/img/tick.png" class="imagenTick" alt="">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        3D Secure
                                                    </td>
                                                    <td>
                                                        <img src="assets/img/tick.png" class="imagenTick" alt="">
                                                    </td>
                                                    <td>
                                                        <img src="assets/img/tick.png" class="imagenTick" alt="">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        Almacenamiento de tarjetas
                                                    </td>
                                                    <td>
                                                        <img src="assets/img/tick.png" class="imagenTick" alt="">
                                                    </td>
                                                    <td>
                                                        <img src="assets/img/tick.png" class="imagenTick" alt="">
                                                    </td>
                        
                                                </tr>
                                                <tr>
                                                    <td>
                                                        Administración de transacciones
                                                    </td>
                                                    <td>
                                                        <img src="assets/img/tick.png" class="imagenTick" alt="">
                                                    </td>
                                                    <td>
                                                        <img src="assets/img/tick.png" class="imagenTick" alt="">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        Administración antifraude
                                                    </td>
                                                    <td>
                                                        <img src="assets/img/tick.png" class="imagenTick" alt="">
                                                    </td>
                                                    <td>
                                                        <img src="assets/img/tick.png" class="imagenTick" alt="">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        Conversión dinámica de divisas (DCC)
                                                    </td>
                                                    <td>
                                                        <img src="assets/img/tick.png" class="imagenTick" alt="">
                                                    </td>
                                                    <td>
                                                        <img src="assets/img/tick.png" class="imagenTick" alt="">
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row pt-5 justify-content-center text-center align-self-center">
                            <p style="font-size: 26px !important;">
                                Lucha contra el fraude y protege tu negocio con potentes herramientas de prevención de fraude.
                            </p>
                        </div>

                        <div class="row pl-5 pr-5">
                            <div class="col-lg-6" >
                                <img class="img-fluid mx-auto d-block" src="https://www.addonpayments.com/-/media/comercia-new/fraud-management/comprehensive_360.png?modified=20170707083912" alt="img2">
                            </div>
                            <div class="col-lg-6 pt-5">
                                <div>
                                    <h4 style="font-weight: 100;font-size: 36px;">Control total del fraude de tu negocio</h4>
                                    <br>
                                    <div class="body-content-container">
                                        <div class="right-container">
                                            <div class="column-copy">
                                                <ul>
                                                    <li>Más de 30 reglas antifraude configurables con el objetivo de detectar las transacciones fraudulentas de forma eficaz.</li>
                                                    <li>Comprobación de transacciones frente a tu propia lista negra de usuarios fraudulentos.</li>
                                                    <li>Detecta anomalías mediante comprobaciones de patrones y de normalidad de datos.</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row pb-5 pt-4">
                            <div class="col-lg-6" >
                                <div>
                                    <h4 class="pt-3" style="font-weight: 100;font-size: 36px; text-align: center;">Comprobación del número de verificación de la tarjeta (CVN*)</h4>
                                    <br>
                                    <div class="body-content-container">
                                        <div class="right-container">
                                            <div class="column-copy">
                                                <ul>
                                                    <li>El CVN, también denominado CSC, CVV o número de seguridad, son los 3 dígitos que se muestran en el reverso de la tarjeta del cliente. Solicita esta verificación para una mayor seguridad.</li>
                                                    <li>* Siempre y cuando sea compatible con el emisor de la tarjeta.</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                               <img class="img-fluid mx-auto d-block" src="https://www.addonpayments.com/-/media/comercia-new/fraud-management/3d-secure.png?modified=20170707083838&h=232&w=300&la=es-ES&hash=7145A7E0633411AA4EE89991D95710EC" alt="img2">
                            </div>
                        </div>
                    </div>

                    <div class="row p-5 justify-content-center text-center align-self-center" style="background-image: url(https://prod-globalpay.azureedge.net/-/media/comercia-new/homepage/dev_backup1.jpg?modified=20170626090639); color: white; background-size: cover;">
                        <div class="col-lg-12 pt-4" style="background-color:#000000d4">
                            <p style="font-size: 26px !important;">
                                Integración mediante SDK
                            </p>
                            <hr style="background-color: white; width: 50%;">
                            <div class="col-lg-12 text-justify">
                                <p>
                                    Hosted Payment Page (HPP) es nuestro PCI DSS v3.2 que cumple con la solución Redirect. Permite a los comercios aceptar fácilmente los datos de las tarjetas en su aplicación, al mismo tiempo que reducen considerablemente los requisitos de cumplimiento de PCI asociados a la recopilación de datos de tarjetas. Los comercios que utilizan la HPP pueden acreditar su cumplimiento de PCI rellenando un breve Cuestionario de autoevaluación de la PCI DSS (SAQ) A.
                                </p>

                               <ul>
                                   <li>
                                       Los clientes deben tener activado Javascript en sus navegadores para que la HPP funcione correctamente.
                                   </li>
                               </ul>

                                <p>
                                    Nuestra referencia de API describe el conjunto completo de funcionalidades de Addon Payments, desde el procesamiento de un pago hasta la administración antifraude y el almacenamiento de tarjetas. En cada apartado, realizaremos un recorrido por los servicios disponibles, cada tipo de solicitud XML y los valores permitidos para cada elemento. También cubriremos cada respuesta y los valores que tu aplicación puede esperar recibir. Finalmente, abordaremos la creación y comprobación de los valores hash de seguridad de la solicitud y la respuesta.
                                </p>

                                <p>
                                    Mediante nuestro SDK, puedes procesar fácilmente las transacciones a través de PHP. Los extremos de URL a los que se van a enviar las transacciones son:
                                </p>
                                <ul>
                                    <li>
                                        Entorno real: https://remote.addonpayments.com/remote
                                    </li>

                                    <br>

                                    <li>
                                        Entorno sandbox: https://remote.sandbox.addonpayments.com/remote
                                    </li>
                                </ul>

                                <p>
                                    Cuando apunte al entorno real, solo aceptaremos transacciones de direcciones IP incluidas en listas blancas de la cuenta (esto se puede llevar a cabo con el gestor de la cuenta). Incluso si el ID de cliente se ha definido como real, puedes enviar transacciones al entorno Prueba. Lo único que debes hacer es apuntar a la URL de Prueba.
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-12 pt-2 mt-5" style="background-color: #000000d4;">
                            <p class="pt-3 pb-3 justify-content-center text-center align-self-center" style="font-size: 26px !important;">
                                Firmas digitales (valores hash)
                            </p>
                            <hr style="background-color: white; width: 50%;">
                            <div class="col-lg-12">
                                <p>
                                    Para garantizar que cada solicitud de tu cuenta proceda de una fuente válida, requerimos que nos envíes un valor hash de ciertos elementos de la transacción mediante un secreto compartido. Además, nos aseguramos de que las solicitudes solo procedan de direcciones IP que estén incluidas en listas blancas de tu cuenta. De forma combinada, estas comprobaciones ayudan a garantizar que solo aceptamos solicitudes válidas mediante el ID de cliente.
                                </p>
                                <p>
                                    Cuando Addon Payments recibe la solicitud, realizamos el mismo procedimiento de conversión en valor hash con la información de la transacción y tu  secreto compartido. Solo aceptaremos la transacción si el valor hash resultante es el mismo que el que nos has enviado en la solicitud XML. Por lo tanto, es muy importante mantener el secreto compartido seguro y protegido.
                                </p>
                                <p>
                                    Lo mismo se puede aplicar a las respuestas de la transacción; en la respuesta XML, Addon Payments devolverá un valor hash con determinados elementos de respuesta combinados con el secreto compartido. Puedes realizar el mismo procedimiento en la aplicación y garantizar que la respuesta no ha sido manipulada durante la transmisión.
                                </p>
                                <p>
                                    En esta guía hemos explicado cómo crear el valor hash de la solicitud y la respuesta para cada tipo de transacción.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="row p-5 justify-content-center text-center align-self-center">
                        <div class="col-lg-12 pt-2">
                            <img class="img-fluid" src="https://www.addonpayments.com/-/media/comercia-new/comercia_vertical_color.png?modified=20180323065609&h=124&w=366&la=es-ES&hash=97BF067A692A85074886ECBBAFDCFD78" alt="">
                        </div>
                        <div class="col-lg-12 p-2">
                            <p><b>Comercia Global Payments surge del compromiso de dos grandes entidades por ofrecer el mejor y más eficiente servicio de gestión de pagos del mercado.</b></p>
                            <p>Fundada en diciembre de 2010 por CaixaBank y Global Payments, Comercia Global Payments centra todos sus esfuerzos en satisfacer las necesidades más exigentes de los negocios de hoy en día y de establecer los estándares para el futuro.</p>
                            <p>Nuestra misión: La misión de Comercia Global Payments es proporcionar el mejor servicio de gestión de pagos del mercado, a través de fuertes alianzas y un generoso compromiso con nuestros clientes y empleados.</p>
                            <p>Entre los valores que rigen nuestra compañía destacan la primacía de la innovación, la mejora continua y el firme propósito de superar las expectativas del cliente.</p>
                            <p>Todos estos valores y principios constituyen el eje de referencia de toda nuestra organización y la clave de nuestro modelo de gestión.</p>
                        </div>
                        
                    </div>
                <!-- /Index -->
                </div>
            <!-- /Contenido común -->
            </div>
        </div>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    </body>
</html>
