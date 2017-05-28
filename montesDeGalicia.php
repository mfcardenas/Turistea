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

        <title>Turistea | Restaurante Los Montes de Galicia</title>
        
    </head> 

    <body> 
        <?php 
            include("navbar.php");
        ?>
        <div class="container">
            <div class="contenido">
	            <h1 class="text-center">Restaurante Los Montes de Galicia</h1>
	            <div class="row">
	            	<!--Ruta donde te encuentras -->
	            	<ol class="breadcrumb">
					  	<li><a href="index.php">Inicio</a></li>
					  	<li><a href="gastronomia.php">Gastronomía</a></li>
					  	<li class="active">Restaurante Los Montes de Galicia</li>
					</ol>
	            </div>
	            <!--AHORA AQUÍ VA LA INFORMACIÓN DEL PARQUE -->
	            <div class="row">
	            	<nav class="text-center">
						<img src= "img/losMontesDeGalicia.jpg" alt="restauranteMontesdeGalicia"><br><br>
						<p> Jose Espasandín, empresario y restaurador propietario de Los Montes de Galicia desde 1997 ha sido fiel a su compromiso con los comensales que han pasado por el restaurante de Azcona, 46. El concepto de Montes de Galicia es muy sencillo. Consiste en ofrecer una experiencia gastronómica completa, desde un picoteo en barra con vinos de prestigio por copas, variedad de recetas tanto clásicas como modernas y coctelería de autor. Y todo ello, en un entorno agradable y rodeados por un servicio que transmita pasión y ganas de hacer disfrutar al cliente. </p><br>
					</nav>
				</div>
				<div class="row">
					<div class="col-lg-1">
						<p class="subtitulo"> Horario: </p>
					</div>
					<div class="col-lg-2">
						<table> 
							<tr>
								<td> Desayunos: </td>
								<td> 09:00-12:00 </td>
							</tr>
							<tr>
								<td> Cocina abierta: </td>
								<td> 13:30-16:00 y 20:30-24:00 </td>
							</tr>
							<tr>
								<td> Barra Bar: </td>
								<td> 09:00-02:30 </td>
							</tr>
							<tr>
								<td> Cocktail Bar: </td>
								<td> 13:00-02:30 </td>
							</tr>
							
						</table>
					</div>
					<div class="col-lg-1">
						<p class="subtitulo"> Dirección: </p>
					</div>
					<div class="col-lg-2">
						<p>Calle Azcona, 46</p>
						<p>28028 Madrid Madrid </p>
						<p>España </p>
					</div>
					<div class="col-lg-2">
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
						<p> Para más información: 913552786 </p>
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