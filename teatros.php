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

        <title>Turistea | Teatros</title>
        
    </head> 
    <body> 
        <?php 
            include("navbar.html");
        ?>
        <div class="container">
            <div class="contenido">
	            <h1 class="text-center">Teatros</h1>
	            <div class="row">
	            	<!--Ruta donde te encuentras -->
					<nav class="ruta">
						<a href="index.php"> Inicio </a>
						 >> Teatros
					</nav>
	            </div>
	            <hr class="featurette-divider">
	            <div class="row">
	                <div class="col-lg-6">
	                   <a href="teatroNuevoAlcala.php"> <img class="img-circle" src= "img/teatroNuevoAlcala.jpg" alt="teatroNuevoAlcala"> </a>                 
	                </div>
	                <div class="col-lg-6">
						<a href="teatroNuevoAlcala.php"> <h2> Teatro Nuevo Alcalá </h2> </a>
						<p class="subtitulo"> Dirección: </p>
						Calle de Jorge Juan, 62 <br>
						28009 Madrid Madrid <br>
						España <br>
						<br>
						<!--A mi forma de ver esto solo tiene que estar disponible para los que están logueados-->
						Precio: 15,00€ <br>
						Selección de entrada: <br>
							<select name="entrada">
								<option selected>Normal</option>
								<option>Niño</option>
								<option>Otro tipo de entrada</option>
							</select>
						<br><br><br><br>
						<button type="button" class="btn btn-success">Agregar a la cesta</button>
						Esto es un botón de agregar a la cesta <br>
	                </div>
	            </div>
	            <hr class="featurette-divider">
	            <div class="row">
	                <div class="col-lg-6">
		                <a href="teatroEspanol.php"> <h2> Teatro Español </h2> </a>
						<p class="subtitulo"> Dirección: </p>
						Calle del Príncipe, 25 <br>
						28012 Madrid Madrid <br>
						España <br>
						<br>
						<!--A mi forma de ver esto solo tiene que estar disponible para los que están logueados-->
						Precio: 15,00€ <br>
						Selección de entrada: <br>
							<select name="entrada">
								<option selected>Normal</option>
								<option>Niño</option>
								<option>Otro tipo de entrada</option>
							</select>
						<br><br><br><br>
						<button type="button" class="btn btn-success">Agregar a la cesta</button>
						Esto es un botón de agregar a la cesta <br>
	                </div>
	                <div class="col-lg-6">
						<a href="teatroEspanol.php"> <img class="img-circle" src= "img/teatroEspanol.jpg" alt="teatroEspanol"> </a>
	                </div>
	            </div>
	            <hr class="featurette-divider">
	            <div class="row">
	                <div class="col-lg-6">
	                   <a href="teatroMarquina.php"> <img class="img-circle" src= "img/teatroMarquina.jpg" alt="teatroMarquina"> </a>
	                </div>
	                <div class="col-lg-6">
						<a href="teatroMarquina.php"> <h2> Teatro Marquina </h2> </a>
						<p class="subtitulo"> Dirección: </p>
						Calle de Prim, 11 <br>
						28004 Madrid Madrid <br>
						España <br>
						<br>
						<!--A mi forma de ver esto solo tiene que estar disponible para los que están logueados-->
						Precio: 15,00€ <br>
						Selección de entrada: <br>
							<select name="entrada">
								<option selected>Normal</option>
								<option>Niño</option>
								<option>Otro tipo de entrada</option>
							</select>
						<br><br><br><br>
						<button type="button" class="btn btn-success">Agregar a la cesta</button>
						Esto es un botón de agregar a la cesta <br>
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
