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

        <title>Turistea | Nuestra tienda</title>
	</head>
	<body>
		 <?php 
            include("navbar.html");
        ?>
        <div class="container">
            <div class="contenido">     
	            <h1 class="text-center">Nuestra tienda a un fácil acceso</h1>
	            <h5 class="text-center">  Busca entre todos nuestros productos, el souvenir que más te gusta a un módico precio!! Seguro que no te arrepientes de comprarlo. </h5>
	            <h5 class="text-center"> ¡¡ Encuentra todo tipo de souvenirs relacionado con los lugares que visites!! </h5>
	            <div class="row">
	            	<!--Ruta donde te encuentras -->
					<nav class="ruta">
						<a href="index.php"> Inicio </a>
						 >> Nuestra tienda
					</nav>
	            </div>
	            <hr class="featurette-divider">
	            <div class="row enMedio">
	                <form>
			    		<ul class="nav nav-pills" role="tablist">
			    			<li style="width: 150px" > Tipo: </li>
			    			<li style="width: 100px"> Ordenar por: </li>
			    			<li style="width: 80px"> Pedido: </li>
			    		</ul>
			    		<ul class="nav nav-pills" role="tablist">
	  						<li> 
						    	<select class="form-control" id="sel1" style="width: 150px">
									    <option> - Cualquiera - </option>
									    <option> Parque temático</option>
									    <option> Museo </option>
									    <option> Teatro</option>
									    <option> Estadios </option>
									    <option> Cine </option>
								</select>
							</li>
	  						<li> 
						    	<select class="form-control" id="sel1" style="width: 100px">
									    <option> Título </option>
									    <option> Precio </option>
								</select> 
							</li>
	  						<li> 
						    	<select class="form-control" id="sel1" style="width: 80px">
									    <option> Desc </option>
									    <option> Asc </option>
								</select>
							</li>
	  						<li><button type="submit" class="btn btn-default"> Aplicar </button></li>
						</ul>
		    		</form>
	            </div>

	            <div class="row">
	            	<table class ="enMedio">
	            		<tbody>
				    		<tr>
				    			<td>
				    				<p> Taza con relieve </p>
				    				<img src="img/taza1.jpg" class="img-circle">
				    				<p> Precio: 14,00 € </p>
				    				<button type="submit" class="btn btn-default"> Agregar a la cesta </button>
				    			</td>
				    			<td>
				    				<p> Taza con letras Madrid </p>
				    				<img src="img/taza2.jpg" class="img-circle">
				    				<p> Precio: 14,00 € </p>
				    				<button type="submit" class="btn btn-default"> Agregar a la cesta </button>
				    			</td>
				    			<td>
				    				<p> Taza I love Madrid </p>
				    				<img src="img/taza3.jpg" class="img-circle">
				    				<p> Precio: 14,00 € </p>
				    				<button type="submit" class="btn btn-default"> Agregar a la cesta </button>
				    			</td>
				    			<td>
				    				<p> Polo manga larga Real Madrid </p>
				    				<img src="img/polo1.jpg" class="img-circle">
				    				<p> Precio: 64,95 € </p>
				    				<button type="submit" class="btn btn-default"> Agregar a la cesta </button>
				    			</td>
				    		</tr>
				    		<tr>
				    			<td>
				    				<p> Polo básico Real Madrid </p>
				    				<img src="img/polo2.jpg" class="img-circle">
				    				<p> Precio: 50,00 € </p>
				    				<button type="submit" class="btn btn-default"> Agregar a la cesta </button>
				    			</td>
				    			<td>
				    				<p> Polo azul Real Madrid </p>
				    				<img src="img/polo3.jpg" class="img-circle">
				    				<p> Precio: 50,00 € </p>
				    				<button type="submit" class="btn btn-default"> Agregar a la cesta </button>
				    			</td>
				    			<td>
				    				<p> Plato cerámica con relieve  </p>
				    				<img src="img/plato1.jpg" class="img-circle">
				    				<p> Precio: 20,00 € </p>
				    				<button type="submit" class="btn btn-default"> Agregar a la cesta </button>
				    			</td>
				    			<td>
				    				<p> Llavero Puerta de Alcalá </p>
				    				<img src="img/llavero1.jpg" class="img-circle">
				    				<p> Precio: 4,00 € </p>
				    				<button type="submit" class="btn btn-default"> Agregar a la cesta </button>
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
	            <h4 class="text-center">  Además ...</h4>
	            <h5 class="text-center"> Ya puedes conocer los precios de todas las entradas de los museos,cines y parques temáticos más famosos de nuestra ciudad. </h5>
	            <h5 class="text-center"> ¿Qué tipo de entradas estás buscando? </h5>
	            <div class="row enMedio">
	               <form>
		    			<ul class="nav nav-pills" role="tablist">
  							<li> 
					    		<select class="form-control" id="sel1" style="width: 150px">
								    <option> - Cualquiera - </option>
								    <option> Parque temático</option>
								    <option> Museo </option>
								    <option> Teatro</option>
								    <option> Estadios </option>
								    <option> Cine </option>
								</select>
							</li>
  							<li><button type="submit" class="btn btn-default"> Aplicar </button></li>
						</ul>
		    		</form>
	            </div>
	            <div class="row">
	            	<table class ="enMedio">
	            		<tbody>
				    		<tr>
				    			<td>
				    				<p> Entrada Parque Warner </p>
				    				<p> Precio: 20,00 € </p>
				    				<button type="submit" class="btn btn-default"> Agregar a la cesta </button>
				    			</td>
				    			<td>
				    				<p> Entrada Museo del Prado + guía </p>
				    				<p> Precio: 24,00 € </p>
				    				<button type="submit" class="btn btn-default"> Agregar a la cesta </button>
				    			</td>
				    			<td>
				    				<p> Entrada "2 visitas" Museo del Prado </p>
				    				<p> Precio: 22,00 € </p>
				    				<button type="submit" class="btn btn-default"> Agregar a la cesta </button>
				    			</td>
				    			<td>
				    				<p> Entrada 3ª edad, niños Museo de Cera </p>
				    				<p> Precio: 12,00 € </p>
				    				<button type="submit" class="btn btn-default"> Agregar a la cesta </button>
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