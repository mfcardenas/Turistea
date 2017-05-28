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

        <title>Turistea | Restaurante El Mandil</title>
        
    </head> 

    <body> 
        <?php 
            include("navbar.php");
        ?>
        <div class="container">
            <div class="contenido">
	            <h1 class="text-center">Restaurante El Mandil</h1>
	            <div class="row">
	            	<!--Ruta donde te encuentras -->
	            	<ol class="breadcrumb">
					  	<li><a href="index.php">Inicio</a></li>
					  	<li><a href="gastronomia.php">Gastronomía</a></li>
					  	<li class="active">Restaurante El Mandil</li>
					</ol>
	            </div>
	            <!--AHORA AQUÍ VA LA INFORMACIÓN DEL PARQUE -->
	            <div class="row">
	            	<nav class="text-center">
						<img src= "img/elMandil.jpg" alt="restauranteElMandil"><br><br>
						<p> El Mandil es un restaurante situado en pleno corazón de Chueca. La decoración es rústica y elegante mezclandolo con un toque clásico a través de una enorme pared de ladrillo que recorre todo el local. </p><br>
					</nav>
				</div>
				<div class="row">
					<div class="col-lg-1">
						<p class="subtitulo"> Horario: </p>
					</div>
					<div class="col-lg-3">
						<table> 
							<tr>
								<td> Lunes a Miércoles:  </td>
								<td> 8:00-12:30 </td>
							</tr>
							<tr>
								<td> Jueves: </td>
								<td> 8:00-1:30 </td>
							</tr>
							<tr>
								<td> Viernes: </td>
								<td> 8:00-2:30 </td>
							</tr>
							<tr>
								<td> Sábado: </td>
								<td> 11:00-2:30 </td>
							</tr>
							<tr>
								<td> Domingo: </td>
								<td> 11:00-12:30 </td>
							</tr>
						</table>
					</div>
					<div class="col-lg-1">
						<p class="subtitulo"> Dirección: </p>
					</div>
					<div class="col-lg-2">
						<p>Calle Colón, 5</p>
						<p>28040 Madrid Madrid </p>
						<p>España </p>
					</div>
					<div class="col-lg-1">
						<p class ="subtitulo"> Cómo llegar: </p>
					</div>
					<div class="col-lg-4">
						<ul> 
							<li type="circle"> Metro: Metro La Rambla (Línea 7)</li>
			 				<li type="circle"> Cercanías: Coslada (Líneas C2 o C7) </li>
			 			</ul>
					</div>
				</div>
				<div class="row">
					
				</div>
				<div class="row">
					<div class="col-lg-3"></div>
					<div class="col-lg-2">
						<p class="subtitulo"> Teléfono de contacto: </p>
					</div>
					<div class="col-lg-3">
						<p> Para más información: 915316255 </p>
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