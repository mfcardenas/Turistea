<!DOCTYPE html>
<html lang="es">
    <head> 
        
        <meta charset="utf-8">
    	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	    <link rel="sstylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg320mUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	    <!-- Bootstrap core CSS-->
	    <link rel="stylesheet" href="../css/bootstrap.min.css" crossorigin="anonymous">
	    <link rel="stylesheet" href="../css/bootstrap-theme.min.css" crossorigin="anonymous">

	    <!-- Custom styles for this template -->
	    <link href="../css/carousel.css" rel="stylesheet">

	    <link href="../css/estilo.css" rel="stylesheet" type="text/css">

	    <script src="../js/bootstrap.min.js" crossorigin="anonymous"></script>
	    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <title>Turistea | Museo Thyssen</title>
        
    </head> 
    <body> 
        <?php 
            include("../navbar.html");
        ?>
        <div class="container">
            <div class="contenido"> 
	            <h1 class="text-center">Museo Thyssen</h1>
	            <div class="row">
	            	<!--Ruta donde te encuentras -->
					<nav class="ruta">
						<a href="../index.php"> Inicio </a>
						 >> <a href="../museos.php"> Museos </a>
						 >> Museo Thyssen
					</nav>
	            </div>
	            <hr class="featurette-divider">
	            <!--AHORA AQUÍ VA LA INFORMACIÓN DEL MUSEO -->
	            <div class="row">
	            	<nav class="text-center">
						<img src= "../img/museoThyssen.jpg" alt="museoThyssen"><br><br>
						<p> El Museo Thyssen – Bornemisza se nutre de la antigua colección de los Barones Thyssen que pasó a manos del patrimonio del estado. Nos encontramos pinturas que van desde los primitivos flamencos o italianos hasta el siglo XX, destacando retratos del Renacimiento, Impresionismo, Expresionismo y de los grandes movimientos culturales del siglo XX. </p>
						<p>El Museo Thyssen cuenta con una colección permanente y exposiciones temporales </p><br>
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
								<td> 12:00-16:00 </td>
							</tr>
							<tr>
								<td> Martes: </td>
								<td> 10:00-19:00 </td>
							</tr>
							<tr>
								<td> Miércoles: </td>
								<td> 10:00-19:00 </td>
							</tr>
							<tr>
								<td> Jueves: </td>
								<td> 10:00-19:00 </td>
							</tr>
							<tr>
								<td> Viernes: </td>
								<td> 10:00-19:00 </td>
							</tr>
							<tr>
								<td> Sábado: </td>
								<td> 10:00-19:00 </td>
							</tr>
							<tr>
								<td> Domingo: </td>
								<td> 10:00-19:00 </td>
							</tr>
						</table>
					</div>
					<div class="col-lg-1">
						<p class ="subtitulo"> Tarifas: </p>
					</div>
					<div class="col-lg-4">
			 			<ul>
			 				<li> Entrada General: 12€ </li>
			 				<li> Entrada Reducida: 7€ (pensionistas, miembros de familias numerosas, ciudadanos con discapacidad superior al 33%) </li>
							<li> Entrada Gratis para menores de 12 años acompañados de adutos y ciudadanos en situación de desempleo </li>
						</ul>
						<p class="ruta"> *Para cualquier entrada (que no sea la general) se deberá presentar un título oficial que verifique la tarifa </p>
					</div>
					<div class="col-lg-1">
						<p class="subtitulo"> Dirección: </p>
					</div>
					<div class="col-lg-3">
						<p> Palacio de Villahermosa </p>
						<p> 28014 Madrid Madrid </p>
						<p> España </p>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-2">
						<p class ="subtitulo"> Cómo llegar: </p>
					</div>
					<div class="col-lg-5">
						<ul> 
			 				<li type="circle"> Metro: Banco de España (Línea 2) </li>
			 				<li type="circle"> Buses líneas: 1, 2 5, 9, 10 14, 15, 20, 27, 34, 37, 41, 51, 52, 53, 74, 146, 150 </li>
			 				<li type="circle"> Tren: Estación de Atocha, Estación de Recoletos </li>
			 			</ul>
					</div>
					<div class="col-lg-2">
						<p class="subtitulo"> Teléfono de contacto: </p>
					</div>
					<div class="col-lg-3">
						<p> Para más información: 913302800 </p>
			 		</div>
			 	</div>
				<div class="row">
					<div class="text-center">
			 			<p> <img src="../img/entrada.jpg" alt="entrada"> </p>
			 			<!--A mi forma de ver esto solo tiene que estar disponible para los que están logueados-->
						<p> Selección de entrada:</p>
							<select name="entrada">
								<option selected>General</option>
								<option>Reducida</option>
								<option>Gratis</option>
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
	                include("../footer.html");
	            ?>
	        </div>
        </div>
    
	    <!-- Bootstrap core JavaScript
	    ================================================== -->
	    <!-- Placed at the end of the document so the pages load faster -->
	    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
	    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

	    <!--<script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>-->
	    <script src="../js/bootstrap.min.js"></script>
	    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
	    <!--<script src="../../assets/js/vendor/holder.min.js"></script>-->
	    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
	    <!--<script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>-->
	</body>
</html>

