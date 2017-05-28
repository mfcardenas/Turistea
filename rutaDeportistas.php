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

        <title>Turistea | Ruta de los deportistas</title>
        
    </head> 
    <body> 
        <?php 
            include("navbar.php");
        ?>
        <div class="container">
            <div class="contenido">
	            <h1 class="text-center">Ruta de los Deportistas</h1>
	            <div class="row">
	            	<!--Ruta donde te encuentras -->
	            	<ol class="breadcrumb">
					  	<li><a href="index.php">Inicio</a></li>
					  	<li><a href="Rutas.php">Rutas turísticas</a></li>
					  	<li class="active">Ruta de los deportistas</li>
					</ol>
	            </div>
	            <!--AHORA AQUÍ VA LA INFORMACIÓN DE LA RUTA -->
	            <div class="row">
	            	<nav class="text-center">
	            	<p>Bueno ruteros para esta ruta comenzaremos en Plaza Castilla donde podremos ver las Torres Esquio muy importantes en nuestra ciudad.</p>
					<img src= "img/plazaCastilla.jpg" alt="PlazaCastilla" class="img-rounded"><br><br>
					<p> A continuación, bajaremos toda la Castellana hasta llegar al estadio Santiago Bernabeu, donde haremos un tour por el estadio donde podremos visitar los vestuarios y la colección de copas del Real Madrid entre otros. Por ello, es imprescindible que el día que vayamos a hacer esta ruta, no haya partido del Real del Madrid en el Santiago Bernabeu, ya que el tour no se realiza durante esas horas.</p>
					<img src= "img/bernabeu.jpg" alt="SantiagoBernabeu" class="img-rounded"><br><br>
					<p>Tras la visita, es ¡hora de comer! Uno de los sitios más recomendados se situa en la calle Raimundo Fernández Villaverde número 44, llamado La Imperial, donde hacen unos boquerones adobados riquísimos. Otra opción, es a lo largo de la castellana pasado el Santiago Bernabeu, llamado Complejo Azca, donde hay una larga lista de restaurantes para comer, desde italianos como el Ginos hasta restaurantes de comida rápida como el Burguer King.</p>
					<p>La tarde la dedicaremos visitar Nuevos Ministerios y la Calle Orense. La plaza de Nuevos Ministerios esta respleta de puestecitos artesanales encantadores, donde poder comprar algún regalo a un familiar o pareja. Por si no nos hemos cansado de compras, la calle Orense esta llena de tiendas, pero esta vez de marcas famosas como Zara o Mango. De entre medias, también podemos tomar algún café o tentenpie a lo largo de esta calle en sitios como Rodilla o el Starbucks.</p>
					<img src= "img/nuevosmin3.jpg" alt="NuevosMinisterios" class="img-rounded"><br><br>
					<p>Espero que os guste esta recomendación de ruta, donde podréis visitar el famoso Santiago Bernabeu, uno de los lugares culturales más importantes de Madrid.</p>
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