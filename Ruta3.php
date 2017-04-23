<?php
			session_start();
			if(isset($_SESSION["autentificado"]) && $_SESSION["autentificado"] == "SI"){
				header('Location: pag_principal.php');
			}


?>
<!DOCTYPE html>
<html lang="es">
	<head>
		<title>Una ruta por las Calles del Centro de Madrid</title>
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
						<h1>Una ruta por las Calles del Centro de Madrid</h1>
						<blockquote>
						<ul>
						<li><span class="negrita">Duración:</span>  10 horas</li>
						<li><span class="negrita">Punto de inicio de la ruta:</span> Plaza de Sol</li>
						<li><span class="negrita">Punto de destino de la ruta:</span> Museo del Prado</li>
					</ul></blockquote>
						<div class="fotoRuta"><img src=maparuta3.png></div>
						<p><span class="negrita">Descripción de la ruta:</span></p>
						<p>¡¡Hola ruteros!! Para esta ruta nos pondremos las botas de andar para recorrer las calles madrileñas del centro. </p>
						<p>Comenzaremos en la famosa Plaza de Sol, donde podremos ver el kilómetro 1 (donde comienzan todas las carreteras madrileñas). A partir de allí, bajaremos toda la calle Arenal donde podemos vistar muchas tiendas y comprar algún que otro recuerdo. Al final de esta calle llegaremos a Plaza España donde se situa el gran Teatro Real, teatro de pera de Madrid, considerado uno de los más importantes de España y Europa, y es uno de los monumentos más emblemáticos de la ciudad.</p>
						<div class="fotoRuta"><img src=sol.png class="img-rounded auximg5"></div>
						<p>Tras su visita, es hora de un descanso, por ello nos dirijiremos callejeando hasta llegar a Callao. Desde allí bajaremos hacia la calle Postigo de San Martín donde encontraremos una de las mejores chocolaterias de Madrid, La Chocolatería Valor. Aquí podremos tomar un chocolate caliente con churros que viene bien en los días de invierno.</p>
						<p>Una vez recargadas las pilas volveremos a Callao para poder alcanzar la calle Gran Vía, una de las calles más famosas de Madríd, por no decir la que más. En esta larga calle se sitian una larga lista de tiendas en las que poder comprar, como: Primark, Berska, Pull & Bear... y sin olvidarnos de un monton de restaurantes en los que podemos comer. Para los apasionados de la comida asiática cerca de Gran Vía, en la calle Hortaleza, se encuentra un restaurante muy conocido entre los apasionados del sushi llamado Miss Sushi Hortaleza (¡¡Recordar!! Deberemos recorrer la Gran Vía en dir. Banco de España).</p>
						<div class="fotoRuta"><img src=granvia.jpg class="img-rounded auximg5"></div>
						<p>Al final de esta calle alcanzaremos la Plaza de Cibeles, muy conocida entre los madrileños (sobre todo los madridistas).</p>
						<div class="fotoRuta"><img src=cibeles2.jpg class="img-rounded auximg5"></div>
						<p>Recorreremos finalmente el Paseo del Prado para llegar al Museo del Prado, uno de los museos más importantes de la ciudad.</p>
						<p>Para concluir decir que esta ruta, pese a ser intensa, esta nos lleganará de cultura madrileña de todos los tipos, donde podremos difrutar de los sitios más importantes de Madrid y sin olvidarnos de que podremos comprar algún que otro regalito!!</p>
						


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