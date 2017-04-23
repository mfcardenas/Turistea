<?php
			session_start();
			if(isset($_SESSION["autentificado"]) && $_SESSION["autentificado"] == "SI"){
				header('Location: pag_principal.php');
			}


?>
<!DOCTYPE html>
<html lang="es">
	<head>
		<title>Un día por os Jardines del Retiro</title>
		<meta charset="utf-8">
		<link href="estilo.css" rel="stylesheet" type="text/css">
		
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

		
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<script type="text/javascript">
			


		</script>
	</head>
	
	<body>

		<div id="bg"><img src="background.jpg"></div>
		<div id="cuerpo">
			<header id="cabecera">

				<div id="icono">
					<a href="/aw""><img src="LogotipoFinal.png" alt="logo" class="estiloimagenLogo"></a>
				</div>
				<div style="text-align: right;">
					<div class="btn-group menu_principal">
						<!--<a href="/"><h2 class="titulo">Turistea</h2></a>
						<p>De Madrid al cielo</p>-->
						<button type="button" src="index_login.php" class="btn btn-primary">Logeate</button>
					</div>
					<div class="btn-group menu_principal">
	 					<div class="btn-group">
						    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
						    Teatros <span class="caret"></span></button>
						    <ul class="dropdown-menu" role="menu">
						      <li><a href="#"></a></li>
						      <li><a href="#"></a></li>
						    </ul>
						 </div>
						 <div class="btn-group">
						    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
						    Museos <span class="caret"></span></button>
						    <ul class="dropdown-menu" role="menu">
						      <li><a href="#">Arte</a></li>
						      <li><a href="#">Clasicos</a></li>
						    </ul>
						 </div>
						 <button type="button" class="btn btn-primary">Cines</button>
						 <div class="btn-group">
						    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
						    Centros de Ocio <span class="caret"></span></button>
						    <ul class="dropdown-menu" role="menu">
						      <li><a href="#">Zoológicos</a></li>
						      <li><a href="#">Parques de Atracciones</a></li>
						    </ul>
						 </div>
					</div>
				</div>
				<!--<div id="
				menu_principal">
					<table>
						<tr><td id="moopio"><a href="" title="Regresa a la portada del sitio">Inicio</a></td></tr>
					</table>
				</div>-->
			</header>
			<articule id="contenido">
							<div>
					<nav id="navIzq">
						<div class="estiloMenus">
								<img src="homeicon.png" alt="iconHome" width="30" height="30"><span class="tituloMenu">Menú de Navegación</span>
								<ol id="lista2">
									<li>Quienes somos</li>
									<li>Contactanos</li>
									<li>Nuestra Tienda</li>
								</ol>
						</div>
						<div class="estiloMenus">
								<form action="login.php" method="POST">

									<label class="etiquetas">Nombre:</label>
									<div class="input-group">

									    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
									    <input id="nombre" type="text" class="form-control" name="nombre" value="" placeholder="Nombre de Usuario">
									</div>

									<label class="etiquetas">Contraseña:</label>
									<div class="input-group">
									    <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
									    <input id="contra" type="password" class="form-control" name="contra" placeholder="MyPassword">
									</div>

								    <input type="submit" id="buttonEnviar" value="Enviar">
									

								</form>							
						</div>
					</nav>
					<article class="publicaciones"> 
						<h1>Un Día Por Los Jardines Del Retiro</h1>
						<blockquote>
						<ul>
						<li><span class="negrita">Duración:</span>  11 horas</li>
						<li><span class="negrita">Punto de inicio de la ruta:</span> Plaza de Sol</li>
						<li><span class="negrita">Punto de destino de la ruta:</span> Museo de Arte Reina Sofía</li>
					</ul></blockquote>
						<p><span class="negrita">Descripción de la ruta:</span></p>
						<p>Buenos días ruteros para la ruta de hoy comenzaceros desde la Plaza de Sol, icono único de Madrid, para embarcarnos en una larga ruta hacia los jardines del Retiro.</p>
						<p>Comenzaremos recorriendo la calle de Alcalá, pasando por el metro de Sevilla hasta alcanzar la Plaza de Cibeles. Esta plaza es uno de los principales símbolos madrileños, la cual representa una importante cultura en nuestra ciudad.</p>
						<div class="fotoRuta"><img src=cibeles.jpg class="img-rounded auximg5"></div>
						<p> Continuaremos por la misma calle hasta llegar a la Puerta de Alcalá, otro gran símbolo de Madrid. Aquí, se encuentra la entrada al parque del Retiro.</p>
						<div class="fotoRuta"><img src=alcala.jpg class="img-rounded auximg5"></div>
						<p>Este parque es uno de los más grandes de nuestra ciudad donde podrás visitar monumentos como el de Alfonso XII o el Palacio de Velazquez, además de poder pasar un gran día de piknik con la familia y amigos. Y sin olvidarnos de la posibilidad de alquilar una barca para dar una vuelta por el estanque del Retiro.</p>
						<div class="fotoRuta"><img src=retiro.jpg class="img-rounded auximg5"></div>
						<p>Para por la tarde, nos espera una visita al Reina Sofía. Para llegar simplemente tendremos que recorrer la calle de Alfonso XII hasta llegar a Atocha. En la calle Ronda de Atocha se encuentra el aclamado Museo Nacional de Arte Reina Sofía, donde podremos disfrutar de un arte clásico y a la vez contemporáneo.</p>
						<div class="fotoRuta"><img src=reinaSofia.jpg class="img-rounded auximg5"></div>
						


					</articule>
			</div>
			<footer id="piepag">
				<div class="auxbloq1">
					<div id="copyright">
						<a href="Politica_Seguridad.html" ><img src="copyright.png" alt="copyright" width="125px" height="70px"></a><p> Copy Right by wwww.turistea.es</p>
					</div>
					<div class="auxbloq2">
						
					</div>
				</div>
			</footer>
		</div>
	</body>

</html>