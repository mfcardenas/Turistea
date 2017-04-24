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

        <title>Turistea | Gran Vía</title>
        
    </head> 
    <body> 
        <?php 
            include("navbar.html");
        ?>
        <div class="container">
            <div class="contenido">      
	            <div class="row">
	            	<!--Ruta donde te encuentras -->
	            	<ol class="breadcrumb">
					  	<li><a href="index.php">Inicio</a></li>
					  	<li><a href="visitas.php">Visita Madrid</a></li>
					  	<li class="active">Gran Vía</li>
					</ol>
	            </div>
	            <div class="row">
	                <h1>Gran Vía</h1>
	            </div>
	            
	            <nav class="text-center">
	        	    <img src="img/granVia.jpg" alt="Gran Vía" class="img-visita">
	        	</nav>
	        	<hr class="featurette-divider">
	        	<div class="row">
	        		<p>La Gran Vía es una de las principales calles de Madrid (España). Comienza en la calle de Alcalá y termina en la plaza de España. Es un importante hito en la ciudad desde su construcción a principios de siglo XX visto desde el punto de vista comercial, turístico y de ocio. En este último aspecto es famosa por sus cines, si bien en los últimos años algunos de ellos han cerrado y otros se han reconvertido con gran éxito al teatro musical, por lo que el tramo comprendido entre la plaza de Callao y la de España se conoce como el Broadway madrileño. </p> 
					<p>El tramo comprendido entre la red de San Luis y la plaza de Callao alberga en la actualidad numerosas tiendas de cadenas internacionales de moda.</p>

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
