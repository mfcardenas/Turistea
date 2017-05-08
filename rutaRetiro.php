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

        <title>Turistea | Un día por los Jardines del Retiro</title>
        
    </head> 
    <body> 
        <?php 
            include("navbar.html");
        ?>
        <div class="container">
            <div class="contenido">
	            <h1 class="text-center">Un día por los Jardines del Retiro</h1>
	            <div class="row">
	            	<ol class="breadcrumb">
					  	<li><a href="index.php">Inicio</a></li>
					  	<li><a href="Rutas.php">Rutas turísticas</a></li>
					  	<li class="active">Un día por los Jardines del Retiro</li>
					</ol>
	            </div>
	            <!--AHORA AQUÍ VA LA INFORMACIÓN DE LA RUTA -->
	            <div class="row">
	            	<nav class="text-center">
	            	<p>Buenos días ruteros para la ruta de hoy comenzaceros desde la Plaza de Sol, icono único de Madrid, para embarcarnos en una larga ruta hacia los jardines del Retiro.</p>
					<p>Comenzaremos recorriendo la calle de Alcalá, pasando por el metro de Sevilla hasta alcanzar la Plaza de Cibeles. Esta plaza es uno de los principales símbolos madrileños, la cual representa una importante cultura en nuestra ciudad.</p>
					<img src= "img/cibeles.jpg " alt="Cibeles" class="img-rounded"><br><br>
					<p> Continuaremos por la misma calle hasta llegar a la Puerta de Alcalá, otro gran símbolo de Madrid. Aquí, se encuentra la entrada al parque del Retiro.</p>
					<img src= "img/alcala.jpg " alt="Alcalá" class="img-rounded"><br><br>
					<p>Este parque es uno de los más grandes de nuestra ciudad donde podrás visitar monumentos como el de Alfonso XII o el Palacio de Velazquez, además de poder pasar un gran día de piknik con la familia y amigos. Y sin olvidarnos de la posibilidad de alquilar una barca para dar una vuelta por el estanque del Retiro.</p>
					<img src= "img/retiro.jpg" alt="Retiro" class="img-rounded"><br><br>
					<p>Para por la tarde, nos espera una visita al Reina Sofía. Para llegar simplemente tendremos que recorrer la calle de Alfonso XII hasta llegar a Atocha. En la calle Ronda de Atocha se encuentra el aclamado Museo Nacional de Arte Reina Sofía, donde podremos disfrutar de un arte clásico y a la vez contemporáneo.</p>
					<img src= "img/reinaSofia.jpg" alt="ReinaSofia" class="img-rounded">
					</nav>            
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