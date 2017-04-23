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

        <title>Turistea | Una ruta por las calles del centro de Madrid</title>
        
    </head> 
    <body> 
        <?php 
            include("navbar.html");
        ?>
        <div class="container">
            <div class="contenido">
	            <h1 class="text-center">Una ruta por las calles del centro de Madrid</h1>
	            <div class="row">
	            	<!--Ruta donde te encuentras -->
					<nav class="ruta">
						<a href="index.php"> Inicio </a>
						 >> <a href="Rutas.php"> Rutas turísticas </a>
						 >> Una ruta por las calles del centro de Madrid
					</nav>
	            </div>
	            <hr class="featurette-divider">
	            <!--AHORA AQUÍ VA LA INFORMACIÓN DE LA RUTA -->
	            <div class="row">
	            	<nav class="text-center">
	            	<p>¡¡Hola ruteros!! Para esta ruta nos pondremos las botas de andar para recorrer las calles madrileñas del centro. </p>
					<p>Comenzaremos en la famosa Plaza de Sol, donde podremos ver el kilómetro 1 (donde comienzan todas las carreteras madrileñas). A partir de allí, bajaremos toda la calle Arenal donde podemos vistar muchas tiendas y comprar algún que otro recuerdo. Al final de esta calle llegaremos a Plaza España donde se situa el gran Teatro Real, teatro de pera de Madrid, considerado uno de los más importantes de España y Europa, y es uno de los monumentos más emblemáticos de la ciudad.</p>
					<img src= "img/sol.png " alt="Sol" class="img-rounded"><br><br>
					<p>Tras su visita, es hora de un descanso, por ello nos dirijiremos callejeando hasta llegar a Callao. Desde allí bajaremos hacia la calle Postigo de San Martín donde encontraremos una de las mejores chocolaterias de Madrid, La Chocolatería Valor. Aquí podremos tomar un chocolate caliente con churros que viene bien en los días de invierno.</p>
					<img src= "img/callao.jpg " alt="Alcalá" class="img-rounded"><br><br>
					<p>Una vez recargadas las pilas volveremos a Callao para poder alcanzar la calle Gran Vía, una de las calles más famosas de Madríd, por no decir la que más. En esta larga calle se sitian una larga lista de tiendas en las que poder comprar, como: Primark, Berska, Pull & Bear... y sin olvidarnos de un monton de restaurantes en los que podemos comer. Para los apasionados de la comida asiática cerca de Gran Vía, en la calle Hortaleza, se encuentra un restaurante muy conocido entre los apasionados del sushi llamado Miss Sushi Hortaleza (¡¡Recordar!! Deberemos recorrer la Gran Vía en dir. Banco de España).</p>
					<img src= "img/gvia2.jpg" alt="GranVía" class="img-rounded"><br><br>
					<p>Al final de esta calle alcanzaremos la Plaza de Cibeles, muy conocida entre los madrileños (sobre todo los madridistas).</p>
					<img src= "img/cibeles2.jpg" alt="Cibeles" class="img-rounded"><br><br>
					<p>Para concluir decir que esta ruta, pese a ser intensa, esta nos lleganará de cultura madrileña de todos los tipos, donde podremos difrutar de los sitios más importantes de Madrid y sin olvidarnos de que podremos comprar algún que otro regalito!!</p>
					<p>Recorreremos finalmente el Paseo del Prado para llegar al Museo del Prado, uno de los museos más importantes de la ciudad.</p><br>
					<img src= "img/museodelPrado.jpg" alt="Cibeles" class="img-rounded"><br><br>
					<p>Para concluir decir que esta ruta, pese a ser intensa, esta nos lleganará de cultura madrileña de todos los tipos, donde podremos difrutar de los sitios más importantes de Madrid y sin olvidarnos de que podremos comprar algún que otro regalito!!</p>
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