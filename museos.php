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
	    <!--<link href="css/carousel.css" rel="stylesheet">-->

	    <link href="css/estilo.css" rel="stylesheet" type="text/css">

	    <script src="js/bootstrap.min.js" crossorigin="anonymous"></script>
	    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <title>Turistea | Museos</title>
        
    </head> 
    <body> 
        <?php 
            include("navbar.html");
        ?>
        <div class="container">
            <div class="contenido">           
	            <h1 class="text-center">Museos</h1>
	            <h3 class="text-center"> Conoce los museos madrileños </h3>
	            <div class="row">
	            	<!--Ruta donde te encuentras -->
					<nav class="ruta">
						<a href="index.php"> Inicio </a>
						 >> Museos
					</nav>
	            </div>
	            <hr class="featurette-divider">
	            <div class="row">
	                <div class="col-lg-6">
	                	<a href="museoDelPrado.php"> <img class="img-circle" src= "img/museoDelPrado.jpg" alt="museoDelPrado"> </a>
	                </div>
	                <div class="col-lg-6">
						<a href="museoDelPrado.php"> <h2> Museo del Prado </h2> </a>
						<p class="subtitulo"> Dirección: </p>
						Paseo del Prado s/n <br>
						28014 Madrid Madrid <br>
						España <br>
						<br>
						<!--A mi forma de ver esto solo tiene que estar disponible para los que están logueados-->
						Precio: 16,00€ <br>
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
	                	<a href="museoThyssen.php"> <h2> Museo Thyssen </h2> </a>
	                    <p class="subtitulo"> Dirección: </p>
	                   		Palacio de Villahermosa<br>
							28014 Madrid Madrid <br>
							España <br>
						<br>
						Precio: 12,00€ <br>
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
						<a href="museoThyssen.php"> <img class="img-circle" src= "img/museoThyssen.jpg" alt="museoThyssen"> </a>
	                </div>
	            </div>
	            <hr class="featurette-divider">
	            <div class="row">
	                <div class="col-lg-6">
	                   <a href="museoReinaSofia.php"> <img class="img-circle" src= "img/museoReinaSofia.jpg" alt="museoReinaSofia"> </a>
	                </div>
	                <div class="col-lg-6">
						<a href="museoReinaSofia.php"> <h2> Museo Reina Sofía </h2> </a>
						<p class="subtitulo"> Dirección: </p>
						Calla Santa Isabel, 52<br>
						28012 Madrid Madrid <br>
						España <br>
						<br>
						<!--A mi forma de ver esto solo tiene que estar disponible para los que están logueados-->
						Precio: 8,00€ <br>
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
