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

        <title>Turistea | Faunia</title>
        
    </head> 
    <body> 
        <?php 
            include("navbar.html");
        ?>
        <div class="container">
            <div class="contenido">            
	            <h1 class="text-center">Faunia</h1>
	            <div class="row">
	            	<!--Ruta donde te encuentras -->
					<nav class="ruta">
						<a href="index.php"> Inicio </a>
						 >> <a href="parquesTematicos.php"> Parques temáticos </a>
						 >> Faunia
					</nav>
	            </div>
	            <hr class="featurette-divider">
	            <!--AHORA AQUÍ VA LA INFORMACIÓN DEL PARQUE -->
	            <div class="row">
	            	<nav class="text-center">
						<img src= "img/faunia_0.jpg" alt="faunia"><br><br>
						<p>Faunia es un jardín botánico y parque zoológico, de unas 14 ha de extensión ubicado en Madrid. Está organizado en áreas que representan diferentes ecosistemas como la jungla, los polos o bosque africano. Es propiedad de Parques Reunidos, SA</p><br>
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
								<td> 10:30 a 20:00 </td>
							</tr>
							<tr>
								<td> Martes: </td>
								<td> 10:30 a 20:00 </td>
							</tr>
							<tr>
								<td> Miércoles: </td>
								<td> 10:30 a 20:00 </td>
							</tr>
							<tr>
								<td> Jueves: </td>
								<td> 10:30 a 20:00 </td>
							</tr>
							<tr>
								<td> Viernes: </td>
								<td> 10:30 a 20:00 </td>
							</tr>
							<tr>
								<td> Sábado: </td30>
								<td> 10:30 a 20:00 </td>
							</tr>
							<tr>
								<td> Domingo: </td>
								<td> 10:30 a 20:00 </td>
							</tr>
						</table>
					</div>
					<div class="col-lg-1">
						<p class ="subtitulo"> Tarifas: </p>
					</div>
					<div class="col-lg-4">
			 			<ul>
			 				<li> Entrada General Adulto (8-64 años): 23,30€ </li>
			 				<li> Entrada Infantil (3-7 años): 18,90€ </li>
							<li> Entrada Senior (Mayores de 65 años): 18,90€ </li>
							<li> Entrada persona con discapacidad + acompañanante gratis: 18,90€ </li>
							<li> Entrada Familia Numerosa Adulto: 13,70€ </li>
							<li> Entrada Familia Numerosa Infantil: 9,40€ </li>
							<li> Menores de 3 años: GRATIS </li>
						</ul>
						<p class="ruta"> *Para cualquier entrada (que no sea la general) se deberá presentar un título oficial que verifique la tarifa </p>
					</div>
					<div class="col-lg-1">
						<p class="subtitulo"> Dirección: </p>
					</div>
					<div class="col-lg-3">
						<p> Casa de Campo s/n </p>
						<p> 28011 Madrid Madrid </p>
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
									<li> Autovía A3 dirección Valencia, salida 6 (Valdebernardo) </li>
									<li> Autovía M 40 dirección Norte (salida 13) </li>
									<li> Autovía M 40 dirección Sur (salida 12) </li>
									<li> Autovía M 23 prolongación de O’Donnell, salida Vicálvaro </li>
								</ul>
							</li>
			 				<li type="circle"> Metro: Metro Valdebernardo (Línea 9)</li>
			 				<li type="circle"> Cercanías: Vicálvaro (Línea C2) </li>
	    					<li type="circle"> Autobús: Línea 71 de la EMT </li>
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
								<option selected>General</option>
								<option>Infantil</option>
								<option>Senior</option>
								<option>Persona Discapacidad + acompañante </option>
								<option>Familia Numerosa Adulto </option>
								<option>Familia Numerosa Infantil </option>
								<option>Menores de 3 años</option>
							</select>
						<br><br><br><br>
						<!--ESTO CAMBIARÁ CON EL TIPO DE ENTRADA SELECCIONADO-->
						<p> Precio: 12,00€ </p>
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

