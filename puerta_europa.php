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

        <title>Turistea | Puerta de Europa</title>
        
    </head> 
    <body> 
        <?php 
            include("navbar.html");
        ?>
        <div class="container">
            <div class="contenido">      
	            <div class="row">
	            	<!--Ruta donde te encuentras -->
					<nav class="ruta">
						<a href="index.php"> Inicio </a>
						 >> <a href="visitas.php"> Visita Madrid </a>
						 >> Puerta de Europa
					</nav>
	            </div>
	            <hr class="featurette-divider">
	            <div class="row">
	                <h1>Puerta de Europa</h1>
	            </div>
	            
	            <nav class="text-center">
	        	    <img src="img/puertaDeEuropa.jpg" alt="Puerta de Europa" class="img-visita">
	        	</nav>
	        	<hr class="featurette-divider">
	        	<div class="row">
	        		<p>Las dos torres que conforman la llamada Puerta de Europa, también conocidas como Torres KIO (debido a que fueron promovidas por la empresa kuwaití KIO, Kuwait Investments Office) son dos torres inclinadas la una hacia la otra, 15° respecto a la vertical, con una altura de 114 m y 26 plantas. La Puerta de Europa son las segundas torres gemelas más altas de España, tras las Torres de Santa Cruz en Santa Cruz de Tenerife, con 120 metros sin contar los pararrayos. Están situadas en la Plaza de Castilla de Madrid (España), entre el centro financiero de AZCA y las Cuatro Torres Business Area.</p>

					<!--ESTO EN UN FUTURO SERÁ UN BOTÓN QUE CUENTE LOS LIKES DE CADA SITIO-->	 
					<img src="img/like.png" alt="Like" class="img-emotion">
	           
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
