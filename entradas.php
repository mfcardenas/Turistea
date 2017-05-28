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

        <title>Turistea | Nuestras entradas</title>
	</head>
	<body>
		 <?php 
            include("navbar.php");
        ?>
        <div class="container">
            <div class="contenido">     
	            <h1 class="text-center"> Tickets y entradas</h1>
	            <h5 class="text-center">  Encuentra ya la entrada a tu lugar de ocio favorito </h5>
	            <div class="row">
	            	<!--Ruta donde te encuentras -->
	            	<ol class="breadcrumb">
					  	<li><a href="index.php">Inicio</a></li>
					  	<li class="active">Nuestras entradas</li>
					</ol>
	            </div>
	            <div class="row enMedio">
	               <form>
		    		<h5> Visita ya... </h5>
		    		<ul>
		    			<li><b> Nuestras entradas a museos </b></li>
		    		</ul>
		    		<p> Tipo: </p>
	    			<ul class="nav nav-pills" role="tablist">
						<li> 
				    		<select class="form-control" id="sel1" style="width: 150px">
							    <option> - Cualquiera - </option>
							    <option> Arte </option>
							    <option> Gratuito </option>
							    <option> Niños </option>
							    <option> Temático </option>
							</select> </a>
						</li>
						<li><button type="submit" class="btn btn-default">Aplicar</button></li>
					</ul>
		    	</form>
	            </div>

	            <div class="row">
	            	<table class ="enMedio">
	            		<tbody>
							<tr>
				    			<td>
				    				<p> Entrada reducida Planetario Madrid </p>
				    				<img src="img/entrada.jpg">
				    				<p> Precio: 1,65 € </p>
				    			</td>
				    			<td>
				    				<p> Entrada infantil Planetario Madrid </p>
				    				<img src="img/entrada.jpg">
				    				<p> Precio: 1,65 € </p>
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
	            <div class="row enMedio">
	               <form>
			    		<h5> Visita ya... </h5>
			    		<ul>
			    			<li><b> Nuestras entradas a cines </b></li>
			    		</ul>
			    		<p> Tipo: </p>
		    			<ul class="nav nav-pills" role="tablist">
							<li> 
					    		<select class="form-control" id="sel1" style="width: 150px">
								    <option> - Cualquiera - </option>
								    <option> Arte </option>
								    <option> Gratuito </option>
								    <option> Niños </option>
								    <option> Temático </option>
								</select> </a>
							</li>
							<li><button type="submit" class="btn btn-default">Aplicar</button></li>
						</ul>
		    		</form>
	            </div>

	            <div class="row">
	            	<table class ="enMedio">
	            		<tbody>
							<tr>
				    			<td>
				    				<p> Entrada Cines Victoria </p>
				    				<img src="img/entrada.jpg">
				    				<p> Precio: 6,00 € </p>
				    			</td>
				    			<td>
				    				<p> Entrada Cines Verdi </p>
				    				<img src="img/entrada.jpg">
				    				<p> Precio: 6,00 € </p>
				    			</td>
				    			<td>
				    				<p> Entrada Cines La Vaguada </p>
				    				<img src="img/entrada.jpg">
				    				<p> Precio: 6,00 € </p>
				    			</td>
				    			<td>
				    				<p> Entrada Cines Reinoir Retiro </p>
				    				<img src="img/entrada.jpg">
				    				<p> Precio: 6,00 € </p>
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
	            <div class="row enMedio">
	            	<form>
		    			<h5> Visita ya... </h5>
			    		<ul>
			    			<li><b> Nuestras entradas a teatros </b></li>
			    		</ul>		    		
		    		</form>
	            </div>

	            <div class="row">
	            	<table class ="enMedio">
	            		<tbody>
							<tr>
				    			<td>
				    				<p> Entrada general Teatro Reina Victoria </p>
				    				<img src="img/entrada.jpg">
				    				<p> Precio: 15,00 € </p>
				    			</td>
				    			<td>
				    				<p> Entrada general Teatro Nuevo Apolo </p>
				    				<img src="img/entrada.jpg">
				    				<p> Precio: 15,00 € </p>
				    			</td>
				    			<td>
				    				<p> Entrada Teatro Marquina </p>
				    				<img src="img/entrada.jpg">
				    				<p> Precio: 15,00 € </p>
				    			</td>
				    			<td>
				    				<p> Entrada Teatro La Latina </p>
				    				<img src="img/entrada.jpg">
				    				<p> Precio: 15,00 € </p>
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
	            <div class="row enMedio">
		         	<form>
		    		<h5> Visita ya... </h5>
		    		<ul>
		    			<li><b> Nuestras entradas a parques temáticos </b></li>
		    		</ul>
		    		<p> Tipo: </p>
	    			<ul class="nav nav-pills" role="tablist">
						<li> 
				    		<select class="form-control" id="sel1" style="width: 150px">
							    <option> - Cualquiera - </option>
							    <option> Zoológico </option>
							    <option> Parque de atracciones </option>
							    <option> Parque acuático </option>
							</select> </a>
						</li>
						<li><button type="submit" class="btn btn-default">Aplicar</button></li>
					</ul>
		    	</form>
	            </div>

	            <div class="row">
	            	<table class ="enMedio">
	            		<tbody>
							<tr>
				    			<td>
				    				<p> Entrada Faunia </p>
				    				<img src="img/entrada.jpg">
				    				<p> Precio: 25,00 € </p>
				    			</td>
				    			<td>
				    				<p> Entrada general Zoológico </p>
				    				<img src="img/entrada.jpg">
				    				<p> Precio: 25,00 € </p>
				    			</td>
				    			<td>
				    				<p> Entrada general Parque Warner </p>
				    				<img src="img/entrada.jpg">
				    				<p> Precio: 20,00 € </p>
				    			</td>
				    			<td>
				    				<p> Entrada Aquopolis </p>
				    				<img src="img/entrada.jpg">
				    				<p> Precio: 18,00 € </p>
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
	           
	            <div class="row enMedio">
		         	<form>
			    		<h5> Visita ya... </h5>
			    		<ul>
			    			<li><b> Nuestras entradas a estadios </b></li>
			    		</ul>
			    		<p> Tipo: </p>
		    			<ul class="nav nav-pills" role="tablist">
							<li> 
					    		<select class="form-control" id="sel1" style="width: 150px">
								    <option> - Cualquiera - </option>
								    <option> Fútbol </option>
								    <option> Balonceso </option>
								</select> </a>
							</li>
							<li><button type="submit" class="btn btn-default">Aplicar</button></li>
					</ul>
		    		</form>
	            </div>

	            <div class="row">
	            	<table class ="enMedio">
	            		<tbody>
							<tr>
				    			<td>
				    				<p> Entrada Palacio de los Deportes </p>
				    				<img src="img/entrada.jpg">
				    				<p> Precio: 40,00 € </p>
				    			</td>
				    			<td>
				    				<p> Entrada caja Mágica </p>
				    				<img src="img/entrada.jpg">
				    				<p> Precio: 25,00 € </p>
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