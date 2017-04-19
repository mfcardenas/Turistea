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

        <title>Turistea | Zoológico</title>
        
    </head> 
    <body> 
        <?php 
            include("navbar.html");
        ?>
        <div class="container">
            <div class="contenido">          
	            <h1 class="text-center">Zoológico</h1>
	            <div class="row">
	            	<!--Ruta donde te encuentras -->
					<nav class="ruta">
						<a href="index.php"> Inicio </a>
						 >> <a href="parquesTematicos.php"> Parques temáticos </a>
						 >> Zoo
					</nav>
	            </div>
	            <hr class="featurette-divider">
	            <!--AHORA AQUÍ VA LA INFORMACIÓN DEL PARQUE -->
	            <div class="row">
	            	<nav class="text-center">
						<img src= "img/zooDeMadrid.jpg" alt="zooDeMadrid"><br><br>
						<p>El Zoo Aquarium de Madrid es un zoológico de Madrid que se encuentra en la Casa de Campo, gran parque forestal de la ciudad de Madrid. El parque pertenece a Parques Reunidos.</p><br>
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
								<td> Cerrado </td>
							</tr>
							<tr>
								<td> Martes: </td>
								<td> 12:00-20:30 </td>
							</tr>
							<tr>
								<td> Miércoles: </td>
								<td> 12:00-20:30 </td>
							</tr>
							<tr>
								<td> Jueves: </td>
								<td> 12:00-20:30 </td>
							</tr>
							<tr>
								<td> Viernes: </td>
								<td> 12:00-22:00 </td>
							</tr>
							<tr>
								<td> Sábado: </td30>
								<td> 12:00-22:00 </td>
							</tr>
							<tr>
								<td> Domingo: </td>
								<td> 12:00-20:30 </td>
							</tr>
						</table>
					</div>
					<div class="col-lg-1">
						<p class ="subtitulo"> Tarifas: </p>
					</div>
					<div class="col-lg-4">
			 			<ul>
			 				<li> Entrada General Adulto (8-64 años): 26,45€ </li>
			 				<li> Entrada Reducida (3-7 años y mayores de 65): 19,95€ </li>
							<li> Entrada Familia Numerosa general: 19,95€ </li>
							<li> Entrada Familia Numersoa reducida: 18,45€ </li>
							<li> Entrada persona con discapacidad + acompañanante gratis: 18,45€ </li>
							<li> Menores de 3 años(acompañados por un adulto): GRATIS </li>
						</ul>
						<p class="ruta"> *Para cualquier entrada (que no sea la general) se deberá presentar un título oficial que verifique la tarifa </p>
					</div>
					<div class="col-lg-1">
						<p class="subtitulo"> Dirección: </p>
					</div>
					<div class="col-lg-3">
						<p> Casa de Campo, s/n </p>
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
							<li type="circle"> Coche: Estamos en la A-5/N-V salida 5A. </li>
							<li type="circle"> Metro: Casa de Campo (Líneas 5 y 10) </li>
	    					<li type="circle"> Autobús: Línea 33 </li>
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
								<option>Reducida</option>
								<option>Familia Numerosa general(>65 años)</option>
								<option>Familia Numerosa reducida </option>
								<option>Persona discapacitada + acompañante gratis</option>
								<option>Gratuita</option>
							</select>
						<br><br><br><br>
						<!--ESTO CAMBIARÁ CON EL TIPO DE ENTRADA SELECCIONADO-->
						<p> Precio: 26,45€ </p>
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