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

        <title>Turistea | Museo Reina Sofía</title>
        
    </head> 
    <body> 
        <?php 
            include("navbar.html");
        ?>
        <div class="container">
            <div class="contenido">           
	            <h1 class="text-center">Museo Reina Sofía</h1>
	            <div class="row">
	            	<!--Ruta donde te encuentras -->
	            	<ol class="breadcrumb">
					  	<li><a href="index.php">Inicio</a></li>
					  	<li><a href="museos.php">Museos</a></li>
					  	<li class="active">Museo Reina Sofía</li>
					</ol>
	            </div>
	            <!--AHORA AQUÍ VA LA INFORMACIÓN DEL MUSEO -->
	            <div class="row">
	            	<nav class="text-center">
						<img src= "img/museoReinaSofia.jpg" alt="museoReinaSofia"><br><br>
						<p>El Museo Nacional Centro de Arte Reina Sofía, conocido popularmente por el Museo Reina Sofía, es un museo centrado en el arte del siglo XX y contemporáneo. En la colección permanente del museo destaca un núcleo de obras de grandes artistas españoles del siglo XX, especialmente Pablo Picasso, Salvador Dalí y Joan Miró, representados ampliamente y con algunas de sus mejores obras.</p>
						<p>El Museo Nacional Centro de Arte Reina Sofía forma parte junto con el Museo del Prado y el Museo Thyssen  el conocido Triangulo del Arte de Madrid </p><br>
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
								<td> 10:00-21:00 </td>
							</tr>
							<tr>
								<td> Martes: </td>
								<td> Cerrado </td>
							</tr>
							<tr>
								<td> Miércoles: </td>
								<td> 10:00-21:00 </td>
							</tr>
							<tr>
								<td> Jueves: </td>
								<td> 10:00-21:00 </td>
							</tr>
							<tr>
								<td> Viernes: </td>
								<td> 10:00-21:00 </td>
							</tr>
							<tr>
								<td> Sábado: </td>
								<td> 10:00-21:00 </td>
							</tr>
							<tr>
								<td> Domingo: </td>
								<td> 10:00-14:30 </td>
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
						<p class="ruta"> **La entrada para exposiciones temporales tendrá un coste de 4€. </p>
					</div>
					<div class="col-lg-1">
						<p class="subtitulo"> Dirección: </p>
					</div>
					<div class="col-lg-3">
						<p> C/Santa Isabel, 52 </p>
						<p> 28012 Madrid Madrid </p>
						<p> España </p>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-2">
						<p class ="subtitulo"> Cómo llegar: </p>
					</div>
					<div class="col-lg-5">
						<ul> 
			 				<li type="circle"> Metro: Atocha (Linea 1) </li>
			 				<li type="circle"> Cercanías: Atocha-RENFE </li>
	    					<li type="circle"> Aparcamiento de bicicletas: En la entrada de la Plaza Nouvel y a ambos lados del edificio Sabatini </li>
	    					<li type="circle"> Aparcamiento para coches: Estación de Atocha Plaza Emperador Carlos V s/n. </li>
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

