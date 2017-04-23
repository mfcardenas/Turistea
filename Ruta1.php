<?php
			session_start();
			if(isset($_SESSION["autentificado"]) && $_SESSION["autentificado"] == "SI"){
				header('Location: pag_principal.php');
			}


?>
<!DOCTYPE html>
<html lang="es">
	<head>
		<title>La Ruta de los Deportistas</title>
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
						<h1>La Ruta De Los Deportistas</h1>
						<blockquote>
						<ul>
						<li><span class="negrita">Duración:</span>  8 horas</li>
						<li><span class="negrita">Punto de inicio de la ruta:</span>  Plaza Castilla</li>
						<li><span class="negrita">Punto de destino de la ruta:</span> Calle Orense</li>
					</ul></blockquote>
						<p><span class="negrita">Descripción de la ruta:</span></p>
						<p>Bueno ruteros para esta ruta comenzaremos en Plaza Castilla donde podremos ver las Torres Esquio muy importantes en nuestra ciudad.</p>
						<div class="fotoRuta"><img src=plazaCastilla.jpg class="img-rounded auximg5"></div>
						<p> Bajaremos toda la Castella hasta llegar al estadio Santiago Bernabeu, donde haremos un tour por el estadio donde podremos visitar los vestuarios y la colección de copas del Real Madrid entre otros. Por ello, es imprescindible que el día que vayamos a hacer esta ruta, no haya partido del Real del Madrid en el Santiago Bernabeu, ya que el tour no se realiza durante esas horas.</p>
						<div class="fotoRuta"><img src=bernabeu.jpg class="img-rounded auximg5"></div>
						<p>Tras la visita, es ¡hora de comer! Uno de los sitios más recomendados se situa en la calle Raimundo Fernández Villaverde número 44, llamado La Imperial, donde hacen unos boquerones adobados riquísimos. Otra opción, es a lo largo de la castellana pasado el Santiago Bernabeu, llamado Complejo Azca, donde hay una larga lista de restaurantes para comer, desde italianos como el Ginos hasta restaurantes de comida rápida como el Burguer King.</p>
						<p>La tarde la dedicaremos visitar Nuevos Ministerios y la Calle Orense. La plaza de Nuevos Ministerios esta respleta de puestecitos artesanales encantadores, donde poder comprar algún regalo a un familiar o pareja. Por si no nos hemos cansado de compras, la calle Orense esta llena de tiendas, pero esta vez de marcas famosas como Zara o Mango. De entre medias, también podemos tomar algún café o tentenpie a lo largo de esta calle en sitios como Rodilla o el Starbucks.</p>
						<p>Espero que os guste esta recomendación de ruta, donde podréis visitar el famoso Santiago Bernabeu, uno de los lugares culturales más importantes de Madrid.</p>
						


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