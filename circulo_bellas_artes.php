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

        <title>Turistea | Círculo de Bellas Artes</title>
        
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
					  	<li class="active">Círculo de Bellas Artes</li>
					</ol>
	            </div>
	            <div class="row">
	                <h1>Círculo de Bellas Artes</h1>
	            </div>
	            
	            <nav class="text-center">
	        	    <img src="img/circuloBellasArtes.jpg" alt="Círculo de Bellas Artes" class="img-visita">
	        	</nav>
	        	<hr class="featurette-divider">
	        	<div class="row">
	        		<p>El Círculo de Bellas Artes (CBA) es una entidad cultural privada sin ánimo de lucro localizada en la calle Alcalá, nº 42, 28014 Madrid, España, fundada en 1880. Desde 1921 está declarado “Centro de Protección de las Bellas Artes y de Utilidad Pública”. Es un centro multidisciplinar, en él se desarrollan actividades que abarcan desde las artes plásticas hasta la literatura pasando por la ciencia, la filosofía, el cine o las artes escénicas.</p>
					<p>Desde su creación, ha desarrollado una importante labor de alcance internacional en el campo de la creación, la difusión y la gestión cultural, siendo uno de los centros culturales privados más importantes de Europa. </p>
					
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