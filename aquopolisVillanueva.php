<!DOCTYPE html>
<html lang="es">
    <head> 
        
        <meta charset="utf-8">
    	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	    <link rel="sstylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg320mUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	    <!-- Bootstrap core CSS-->
	    <link rel="stylesheet" href="css/bootstrap.min.css" crossorigin="anonymous">
	    <link rel="stylesheet" href="css/bootstrap-theme.min.css" crossorigin="anonymous">

	    <!-- Custom styles for this template -->
	    <link href="css/carousel.css" rel="stylesheet">

	    <link href="css/estilo.css" rel="stylesheet" type="text/css">

	    <script src="js/bootstrap.min.js" crossorigin="anonymous"></script>
	    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <title>Turistea | Aquopolis Villanueva</title>
        
    </head> 
    <body> 
        <?php 
            include("navbar.html");
        ?>
        <div class="container">
            <div class="contenido">
	            <h1 class="text-center">Aquopolis Villanueva de la Cañada</h1>
	            <div class="row">
					<ol class="breadcrumb">
					  	<li><a href="index.php">Inicio</a></li>
					  	<li><a href="parquesTematicos.php">Parques Temáticos</a></li>
					  	<li class="active">Aquopolis Villanueva</li>
					</ol>
	            </div>
	            <!--AHORA AQUÍ VA LA INFORMACIÓN DEL PARQUE -->
	            <div class="row">
	            	<nav class="text-center">
						<img src= "img/aquopolis.jpg" alt="aquopolisVillanueva"><br><br>
						<p>El Aquopolis es parque acuático con un montón de atracciones donde te lo pasarás genial. Es propiedad de Parques Reunidos, SA</p><br>
					</nav>
				</div>
				<div class="row">
					<div class="col-lg-1">
						<p class="subtitulo"> Horario: </p>
					</div>
					<div class="col-lg-2">
						<table> 
							<tr>
								<td> Lunes: </td>
								<td> 12:00 a 19:00 </td>
							</tr>
							<tr>
								<td> Martes: </td>
								<td> 12:00 a 19:00 </td>
							</tr>
							<tr>
								<td> Miércoles: </td>
								<td> 12:00 a 19:00 </td>
							</tr>
							<tr>
								<td> Jueves: </td>
								<td> 12:00 a 19:00 </td>
							</tr>
							<tr>
								<td> Viernes: </td>
								<td> 12:00 a 20:00 </td>
							</tr>
							<tr>
								<td> Sábado: </td30>
								<td> 12:00 a 20:00 </td>
							</tr>
							<tr>
								<td> Domingo: </td>
								<td> 12:00 a 20:00 </td>
							</tr>
						</table>
					</div>
					<div class="col-lg-1">
						<p class ="subtitulo"> Tarifas: </p>
					</div>
					<div class="col-lg-4">
			 			<ul>
			 				<li> Entrada General Adulto (+140cm de altura): 25,95€ </li>
			 				<li> Entrada Infantil (De 90 a 140cm de altura): 20,95€ </li>
							<li> Entrada Senior (Mayores de 65 años): 18,95€ </li>
							<li> Entrada persona con discapacidad: 18,95€ </li>
							<li> Entrada Menos de 90 cm: GRATIS </li>
						</ul>
						<p class="ruta"> *Para cualquier entrada (que no sea la general) se deberá presentar un título oficial que verifique la tarifa </p>
					</div>
					<div class="col-lg-1">
						<p class="subtitulo"> Dirección: </p>
					</div>
					<div class="col-lg-3">
						<p> Avenida de la Dehesa, s/n </p>
						<p> 28691 Villanueva de la Cañada Madrid </p>
						<p> España </p>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-2">
						<p class ="subtitulo"> Cómo llegar: </p>
					</div>
					<div class="col-lg-5">
						<ul> 
							<li type="circle"> Coche:
								<ul>
									<li> M-600: Une San Lorenzo de El Escorial con Brunete. </li>
									<li> M-501: Une M-40 y M-50 con Brunete a la M-600 Brunete el Escorial. </li>
									<li> M-503: Une Villanueva de la Cañada con la M-50/ Majadahonda</li>
								</ul>
							</li>
	    					<li type="circle"> Autobús: 
	    						<ul> 
	    							<li> Línea 627: MADRID – BRUNETE. Salidas desde el Intercambiador de Transportes de Moncloa (Metro Moncloa), cada 10 minutos aprox. A partir de las 07:00 hs. En días laborables pasan por la U. Alfonso X y por la U. Camilo José Cela. </li>
	    							<li> Línea 581: MADRID (PRíNCIPE PíO: INTERCAMBIADOR, Dársena 5 Planta -1 (nivel azul)) – QUIJORNA. Salidas desde el Paseo de la Florida (Metro Príncipe Pío) cada 40 minutos aprox en verano cada hora.</li>
	    						</ul>
	    					</li>
			 			</ul>
					</div>
					<div class="col-lg-2">
						<p class="subtitulo"> Teléfono de contacto: </p>
					</div>
					<div class="col-lg-3">
						<p> Para más información: 917741000 </p>
			 		</div>
			 	</div>
				<div class="row">
					<div class="text-center">
			 			<p> <img src="img/entrada.jpg" alt="entrada"> </p>
			 			<!--A mi forma de ver esto solo tiene que estar disponible para los que están logueados-->
						<p> Selección de entrada:</p>
							<select name="entrada">
								<option selected>General (+140cm)</option>
								<option>Infantil (90-140cm)</option>
								<option>Senior (>65 años)</option>
								<option>Persona Discapacidad </option>
								<option>Gratis (< 90 cm) </option>
							</select>
						<br><br><br><br>
						<!--ESTO CAMBIARÁ CON EL TIPO DE ENTRADA SELECCIONADO-->
						<p> Precio: 25,95€ </p>
						<button type="button" class="btn btn-success">Agregar a la cesta</button>
					</div>
	            </div>
	            
	            <hr class="featurette-divider">
	            <!-- FOOTER -->
	            <?php
	                include("footer.html");
	            ?>
	        </div>
        </div>
    
	    <!-- Bootstrap core JavaScript
	    ================================================== -->
	    <!-- Placed at the end of the document so the pages load faster -->
	    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
	    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

	    <!--<script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>-->
	    <script src="js/bootstrap.min.js"></script>
	    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
	    <!--<script src="../../assets/js/vendor/holder.min.js"></script>-->
	    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
	    <!--<script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>-->
	</body>
</html>
