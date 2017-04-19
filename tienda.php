<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<title> Nuestra tienda </title>
		<link href="http://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	</head>
	<body>
		
		<div class="container-fluid text-center letra">    
		    <div class="col-sm-8 text-left"> 
		    	<h1> Nuestra tienda a un fácil acceso </h1>
		    	<p> Busca entre todos nuestros productos, el souvenir que más te gusta a un módico precio!! Seguro que no te arrepientes de comprarlo. </p>
		    	<p> ¡¡ Encuentra todo tipo de souvenirs relacionado con los lugares que visites!! </p>
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
		    	<br>
		    	<table>
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
		    	</table>
		    	<ul class="pagination">
				  <li class="active"><a href="#">1</a></li>
				  <li><a href="#">2</a></li>
				  <li><a href="#">3</a></li>
				  <li><a href="#">4</a></li>
				  <li><a href="#">5</a></li>
				</ul>
				<br>
				<p> Además ... </p>
				<p> Ya puedes conocer los precios de todas las entradas de los museos,cines y parques temáticos más famosos de nuestra ciudad. </p>
				<b> ¿Qué tipo de entradas estás buscando? </b>
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
		    	<br>
		    	<table>
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
		    	</table>
		    	<ul class="pagination" >
				  <li class="active"><a href="#">1</a></li>
				  <li><a href="#">2</a></li>
				  <li><a href="#">3</a></li>
				  <li><a href="#">4</a></li>
				  <li><a href="#">5</a></li>
				</ul>
		    </div>
		</div>
	</body>
</html>