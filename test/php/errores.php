<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="Víctor Cantera">
        <link rel="icon" href="../assets/img/comercia_ico.png" type="image/x-icon"/ >
        <title>Addon Payments SDK de PHP</title>

        <!-- Bootstrap 4.3.1 -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <!-- CSS -->
        <link rel="stylesheet" href="../assets/css/style.css">

        <!-- Iconos -->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    </head>
    <body>
        <!-- NAVBAR -->
        <nav class="navbar navbar-expand-lg navbar-light navbar-rpdc mb-3">
            <a class="navbar-brand">
                <img src="../assets/img/log2.svg" width="30" height="30" class="img-fluid" alt="Logo Addon Payments">
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
                            <a class="dropdown-item pl-2" href="../index.php">Índice</a>
                            <a class="dropdown-item pl-2 active" href="#">Errores de Addon Payments</a>
                            <a class="dropdown-item pl-2" href="informe.html">Convertir informe</a>
                        </div>
                    </li>
                    <li class="nav-item ml-1 dropdown">
                        <a class="nav-link pl-2 dropdown-toggle" href="#" id="01-Pagos_con_tarjeta" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Pagos con tarjeta
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <div class="dropdown-header text-center p-0">API</div>
                            <hr class="m-0 p-0">
                                <a class="dropdown-item pl-2" href="API/01%20-%20Pagos%20con%20tarjeta/01%20-%20Authorization/index.php">Autorización</a>
                                <a class="dropdown-item pl-2" href="API/01%20-%20Pagos%20con%20tarjeta/01%20-%20Authorization/DatosDelCliente.php">Datos adicionales</a>
                                <a class="dropdown-item pl-2" href="API/01%20-%20Pagos%20con%20tarjeta/02%20-%20OTB/index.php">OTB</a>
                                <a class="dropdown-item pl-2" href="API/01%20-%20Pagos%20con%20tarjeta/03%20-%20Credit/index.php">Credit</a>
                            <hr class="m-0 p-0">
                            <div class="dropdown-header text-center p-0">HPP</div>
                            <hr class="m-0 p-0">
                                <a class="dropdown-item pl-2" href="HPP/01%20-%20Pagos%20con%20tarjeta/01%20-%20Authorization/index.php">Autorización</a>
                                <a class="dropdown-item pl-2" href="HPP/01%20-%20Pagos%20con%20tarjeta/02%20-%20OTB/index.php">OTB</a>
                                <a class="dropdown-item pl-2" href="HPP/01%20-%20Pagos%20con%20tarjeta/03%20-%20Pay%20By%20Link/index.php">Pay By Link</a>
                                <a class="dropdown-item pl-2" href="HPP/01%20-%20Pagos%20con%20tarjeta/04%20-%20Auth%20con%20iframe/index.php">Iframe</a>
                                <a class="dropdown-item pl-2" href="HPP/01%20-%20Pagos%20con%20tarjeta/05%20-%20Lightbox/index.php">Lightbox</a>
                        </div>
                    </li>
                    <li class="nav-item ml-1 dropdown">
                        <a class="nav-link pl-2 dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Almacenamiento de tarjeta
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <div class="dropdown-header text-center p-0">API</div>
                            <hr class="m-0 p-0">
                                <a class="dropdown-item pl-2" href="API/02%20-%20Almacenamiento%20de%20tarjeta/01%20-%20Crear%20un%20cliente/index.php">Crear un cliente</a>
                                <a class="dropdown-item pl-2" href="API/02%20-%20Almacenamiento%20de%20tarjeta/02%20-%20Almacenar%20una%20tarjeta/index.php">Almacenar una tarjeta</a>
                                <a class="dropdown-item pl-2" href="API/02%20-%20Almacenamiento%20de%20tarjeta/03%20-%20Editar%20tarjeta/index.php">Editar tarjetas</a>
                                <a class="dropdown-item pl-2" href="API/02%20-%20Almacenamiento%20de%20tarjeta/04%20-%20Eliminar%20tarjeta/index.php">Eliminar tarjetas</a>
                                <a class="dropdown-item pl-2" href="API/02%20-%20Almacenamiento%20de%20tarjeta/05%20-%20Auth/index.php">Autorización</a>
                                <a class="dropdown-item pl-2" href="API/02%20-%20Almacenamiento%20de%20tarjeta/06%20-%20Credit/index.php">Credit</a>
                                <a class="dropdown-item pl-2" href="API/02%20-%20Almacenamiento%20de%20tarjeta/07%20-%20DCC/index.php">Dynamic Currency Conversion</a>
                            <hr class="m-0 p-0">
                            <div class="dropdown-header text-center p-0">HPP</div>
                            <hr class="m-0 p-0">
                                <a class="dropdown-item pl-2" href="HPP/02%20-%20Almacenamiento%20de%20tarjeta/01%20-%20Crear%20un%20cliente/index.php">Crear un cliente</a>
                                <a class="dropdown-item pl-2" href="HPP/02%20-%20Almacenamiento%20de%20tarjeta/02%20-%20Mostrar%20Tarjetas/index.php">Mostrar tarjetas</a>
                        </div>
                    </li>
                    <li class="nav-item ml-1 dropdown">
                        <a class="nav-link pl-2 dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Gestión de transacciones
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item pl-2" href="API/03%20-%20Gestion%20de%20transacciones/01%20-%20Capturar/index.php">Settle (Capturar)</a>
                            <a class="dropdown-item pl-2" href="API/03%20-%20Gestion%20de%20transacciones/02%20-%20Rebate/index.php">Rebate (Devolución)</a>
                            <a class="dropdown-item pl-2" href="API/03%20-%20Gestion%20de%20transacciones/03%20-%20Void/index.php">Void (Anular transacción)</a>
                        </div>
                    </li>

                    <li class="nav-item ml-1 dropdown">
                        <a class="nav-link pl-2 dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Filtro de fraude
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            
                            <div class="dropdown-header text-center p-0">API</div>
                            <hr class="m-0 p-0">
                                <a class="dropdown-item pl-2"  href="API/05%20-%20Fraud%20Management/01%20-%20Fraud%20Filter/index.php">Filtro de fraude</a>
                                <a class="dropdown-item pl-2"  href="API/05%20-%20Fraud%20Management/02%20-%20Address%20Verification">Verificación de dirección</a>
                                <a class="dropdown-item pl-2"  href="API/05%20-%20Fraud%20Management/03%20-%20Hold">Retener transacción</a>
                                <a class="dropdown-item pl-2"  href="API/05%20-%20Fraud%20Management/04%20-%20Lanzamiento">Lanzar transacción</a>
                            <hr class="m-0 p-0">
                            <div class="dropdown-header text-center p-0">HPP</div>
                            <hr class="m-0 p-0">
                                <a class="dropdown-item pl-2"  href="HPP/03%20-%20Fraud%20Management/01%20-%20Fraud%20Filter/index.php">Filtro de fraude</a>
                        </div>
                    </li>

                    <li class="nav-item ml-1 dropdown">
                        <a class="nav-link pl-2 dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            DCC
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <div class="dropdown-header text-center p-0">API</div>
                            <hr class="m-0 p-0">
                                <a class="dropdown-item pl-2"  href="API/04%20-%20DCC/01%20-%20Comprobar%20DCC/index.php">Comprobar DCC</a>
                            <hr class="m-0 p-0">
                            <div class="dropdown-header text-center p-0">HPP</div>
                            <hr class="m-0 p-0">
                                <a class="dropdown-item pl-2" href="HPP/04%20-%20DCC/index.php">Operación con DCC</a>
                        </div>
                    </li>
                    <li class="nav-item ml-1 dropdown">
                        <a class="nav-link pl-2 dropdown-toggle" href="#" id="06-3DS2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            3DS2
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <div class="dropdown-header text-center p-0">API</div>
                            <hr class="m-0 p-0">
                                <a class="dropdown-item pl-2" href="API/06%20-%203DS2/01%20-%20Authorization/index.html">Autorización</a>
                            <hr class="m-0 p-0">
                            <div class="dropdown-header text-center p-0">HPP</div>
                            <hr class="m-0 p-0">
                                <a class="dropdown-item pl-2" href="HPP/05%20-%203DS2/01%20-%20Authorization/index.html">Autorización</a>
                                <a class="dropdown-item pl-2" href="HPP/05%20-%203DS2/02%20-%20Datos%20adicionales/index.html">Datos adicionales</a>
                                <a class="dropdown-item pl-2" href="HPP/05%20-%203DS2/03%20-%20OTB/index.php">OTB con 3DS2</a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- /NAVBAR -->

		<div class="container mb-3">
			<div class="row">
				<span class="col-lg-12">
		            <div class="">
		                <div class="col-lg-12 inner-addon left-addon">
		                    <i class="icono material-icons">search</i>
		                    <input type="text" id="buscar" placeholder="Buscar errores de Addon Payments" class="form-control">
		                </div>
		            </div>
		        </span>

	        </div>
	    </div>

        <div class="container-fluid col-lg-7 col-11 formulario p-3 mb-2 pt-4" id="desc" style="background-color: white;">
            <div>
                <p class="text-left">
                    En caso de que su transacción falle, puede utilizar este buscador para ver una descripción completa del error y una solución a su incidencia.
                </p>

                <div>
                    <p class="alert alert-primary">
                        <small>
                            Si no encuentra el código de error o una atención personalizada, por favor, llame al <a target="_blank" href="tel:914353028">teléfono de soporte</a> o envíenos un email con toda la información que nos pueda facilitar al correo electrónico <a target="_blank" href="mailto:soporte@addonpayments.com">soporte@addonpayments.com.</a>
                        </small>
                    </p>
                </div>
            </div>
        </div>
		
		<div class="container formulario" style="background-color: white;">
			<div class="p-lg-3 pb-3 mb-3 pt-4">
                <table class="table table-hover table-responsive-sm table-bordered">
                    <thead class="thead-dark">
                        <tr>
                          <th class="text-center"> Código</th>
                          <th class="text-center">Descripción</th>
                          <th class="text-center">Solución</th>
                        </tr>
                    </thead>
                    <tbody id="result">
                    </tbody>
                </table>
			</div>
		</div>



  		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    	<script>
        	$(document).ready(function(){
        		$.ajaxSetup({ cache: false });
        		$('#result').ready(function(){
         			$('#result').html('');
        			var expresion = new RegExp(buscar, "i");
        			$.getJSON('datos.json', function(data) {
        				var datos = data;
        				$.each(data, function(key, value){
            				if (value.codigo.search(expresion) != -1 || value.descripcion.search(expresion) != -1){
             					$('#result').append('<tr><th class="text-center">'+value.codigo+'</th><td class="text-justify">'+value.descripcion+'</td><td class="text-justify">'+value.solucion+'</td></tr>');
            				}

           				}); 

           				consoledatos(data);

          			});
         		});
        	});

        	function consoledatos(data){
				$('#buscar').keyup(function(){
		 			$('#result').html('');
		 			var buscar = $('#buscar').val();
					var expresion = new RegExp(buscar, "i");

					$.each(data, function(key, value){
	    				if (value.codigo.search(expresion) != -1 || value.descripcion.search(expresion) != -1){
	     					$('#result').append('<tr><th class="text-center">'+value.codigo+'</th><td class="text-justify">'+value.descripcion+'</td><td class="text-justify">'+value.solucion+'</td></tr>');
                        }
	   				});

                    if ( $('#buscar').val() === '' ) {
                        $('#desc').fadeIn( "fast" );
                    } else {
                        $('#desc').fadeOut( "fast" );
                    }

                    // En caso de que no haya ningún resultado mostrar un mensaje de aviso
                    if ( $('#result').html() === '' ) {
                        $('#result').html('<tr class="text-center"><td>--</td><td>No hay resultados para valor introducido.</td><td>--</td></tr>');
                    }

		 		});
        	}
        </script>

		
    </body>
</html>