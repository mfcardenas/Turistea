<!DOCTYPE html>
<html lang="es">
	<head>
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

        <title>Turistea | Nuestros souvenirs</title>
	</head>
	<body>
		 <?php 
            include("navbar.html");
        ?>
              <div class="container">
            <div class="contenido">     
	            <h1 class="text-center">Nuestros souvenirs</h1>
	            <h5 class="text-center">  Aquí podrás encontrar una amplia gama de productos que te podrán gustar</h5>
	            <div class="row">
	            	<!--Ruta donde te encuentras -->
	            	<ol class="breadcrumb">
					  	<li><a href="index.php">Inicio</a></li>
					  	<li class="active">Nuestros souvenirs</li>
					</ol>
	            </div>
	            <div class="row enMedio">
	               <form>
		    		<p> Ordenar por: </p>
	    			<ul class="nav nav-pills" role="tablist">
						<li> 
				    		<select class="form-control" id="sel1" style="width: 100px">
							    <option> Nombre </option>
							    <option> Precio</option>
							</select> </a>
						</li>
						<li><button type="submit" class="btn btn-default">Aplicar ordenación</button></li>
					</ul>
		    	</form>
	            </div>

	            <div class="row">
	            	<table class ="enMedio">
	            		<tbody>
						    <tr>
				    			<td>
				    				<p> Balón Adidas Real Madrid con líneas </p>
				    				<img src="img/balon1.jpg" class="img-circle">
				    				<p> Precio: 19,95 € </p>
				    			</td>
				    			<td>
				    				<p> Balón Baloncesto Adidas Morado </p>
				    				<img src="img/balon2.jpg" class="img-circle">
				    				<p> Precio: 29,95 € </p>
				    			</td>
				    			<td>
				    				<p> Balón Real Madrid Azul </p>
				    				<img src="img/balon3.jpg" class="img-circle">
				    				<p> Precio: 19,95 € </p>
				    			</td>
				    			<td>
				    				<p> Balón Real Madrid Capitano 2016 </p>
				    				<img src="img/balon4.jpg" class="img-circle">
				    				<p> Precio: 24,95 € </p>
				    			</td>
				    		</tr>
				    		<tr>
				    			<td>
				    				<p> Camiseta 2ª equipación Bale Real Madrid </p>
				    				<img src="img/camiseta1.jpg" class="img-circle">
				    				<p> Precio: 80,00 € </p>
				    			</td>
				    			<td>
				    				<p> Camiseta Baloncesto Real Madrid 2016/2017 </p>
				    				<img src="img/camiseta2.jpg" class="img-circle">
				    				<p> Precio: 50,00 € </p>
				    			</td>
				    			<td>
				    				<p> Camiseta básica Atlético de Madrid </p>
				    				<img src="img/camiseta3.jpg" class="img-circle">
				    				<p> Precio: 80,00 € </p>
				    			</td>
				    			<td>
				    				<p> Camiseta básica mujer Real Madrid </p>
				    				<img src="img/camiseta4.jpg" class="img-circle">
				    				<p> Precio: 35,00 € </p>
				    			</td>
				    		</tr>
			    		</tbody>
		    		</table>
	            </div>
	            <div class="row enMedio">
	            	<ul class="pagination enMedio">
				 		<li class="active"><a href="#">1</a></li>
				  		<li><a href="#">2</a></li>
				 		<li><a href="#">3</a></li>
				 		<li><a href="#">4</a></li>
				  		<li><a href="#">5</a></li>
					</ul>
	            </div>	            
	            <hr class="featurette-divider">
	            <!-- FOOTER -->
	            <?php
	                include("footer.html");
	            ?>
	        </div>
        </div>
	</body>
</html>