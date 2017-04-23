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
        
        <title>Turistea | Rutas Turísticas</title>



    </head> 
    <body> 
        <?php 
            include("navbar.html");
        ?>
        <div class="container">
        	 <div class="contenido"> 
	            <h1 class="text-center">Rutas turísticas</h1>
	            <div class="row">
	            	<!--Ruta donde te encuentras -->
					<nav class="ruta">
						<a href="index.php"> Inicio </a>
						 >> Rutas turísticas
					</nav>
	            </div>
	            <hr class="featurette-divider">
					<article class="publicaciones"> 
						<p>Descubre a continuación las maravillosas rutas que nosotros ofrecemos. 
							Así, podrás recorrer las enormes y largas <span class="cursiva">calles de Madrid</span>, pasando por los mejores puntos de interés que nuestra ciudad ofrece como palacios, cines de éxito o museos que te harán pasar uno de los mejores días de tu vida. 
							Y como no, no olvidarnos de la posibilidad de degustar la mejor gastronomía madrileña en restaurantes económicos e incluso con <span class="negrita">estrellas michelin!!!</span></p>
						<p>Porque recuerda...</p>
						<div><blockquote>De Madrid al Cielo.</blockquote></div><br>

				<!--Ruta1-->	 
	            <div class="row">
	                <div class="col-lg-6">
	                	<a href="rutaDeportistas.php"> <img class="img-circle" src= "img/rutaDeportistas.png" alt="RutaDeportistas" width="480" height="480"/> </a>
	                </div>
	                <div class="col-lg-6">
						<a href="rutaDeportistas.php"> <h2>La ruta de los deportistas</h2> </a>
						<h4>Con esta ruta podréis disfrutar del ámbito deportivo madrileño asi como de una tarde de compras para los más aficionados.</h4>
						<p> <strong> Duración: </strong> 8 horas</p>
						<p> <strong> Punto de partida: </strong> Plaza de Castilla</p>
						<p> <strong> Punto de destino: </strong> Calle Orense</p>
						<br>
					</div>
					<div class="col-lg-6">
					<div class="divSliderRutas">
						      <div class="carousel slide media-carousel" id="media">
				        <div class="carousel-inner">
				          <div class="item  active">
				            <div class="row">
				              <div class="col-md-4">
				                <a class="thumbnail"><img src="img/kio.jpg"></a>
				              </div>          
				              <div class="col-md-4">
				                <a class="thumbnail"><img src="img/bernabeu.jpg"></a>
				              </div>
				              <div class="col-md-4">
				                <a class="thumbnail"><img src="img/bernabeu2.jpg"></a>
				              </div>        
				            </div>
				          </div>
				          <div class="item">
				            <div class="row">
				              <div class="col-md-4">
				                <a class="thumbnail"><img src="img/nuevosmin.jpg"></a>
				              </div>          
				              <div class="col-md-4">
				                <a class="thumbnail"><img alt="" src="img/nuevosmin2.jpg"></a>
				              </div>
				              <div class="col-md-4">
				                <a class="thumbnail"><img alt="" src="img/orense.jpg"></a>
				              </div>        
				            </div>
				          </div>
				        </div>
				        <a data-slide="prev" href="#media" class="left carousel-control">‹</a>
				        <a data-slide="next" href="#media" class="right carousel-control">›</a>
				      </div> 
	                </div>
	                   </div> 
	                </div>
	                <hr class="featurette-divider">
	        <!--Ruta2-->
	             <div class="row">
	                <div class="col-lg-6">
						<a href="rutaRetiro.php"> <h2>Un día por los Jardines del Retiro</h2> </a>
						<h4>En esta ruta comenzaremos desde la Plaza de Sol, icono único de Madrid, para embarcarnos en una larga ruta hacia los jardines del Retiro.</h4>
						<p> <strong> Duración: </strong> 11 horas</p>
						<p> <strong> Punto de partida: </strong> Plaza de Sol</p>
						<p> <strong> Punto de destino: </strong> Museo Reina Sofía</p>
						<br>
					</div>
					<div class="col-lg-6">
	                	<a href="rutaRetiro.php"> <img class="img-circle" src= "img/rutaRetiro.png" alt="rutaRetiro" width="480" height="480"/> </a>
	                </div>
	                <div class="row">
					<div class="col-lg-6">
					<div class="divSliderRutas">
						      <div class="carousel slide media-carousel" id="media2">
				        <div class="carousel-inner">
				          <div class="item  active">
				            <div class="row">
				              <div class="col-md-4">
				                <a class="thumbnail"><img src="img/osomadroño.jpg"></a>
				              </div>          
				              <div class="col-md-4">
				                <a class="thumbnail"><img src="img/cibelesmini.jpg"></a>
				              </div>
				              <div class="col-md-4">
				                <a class="thumbnail"><img src="img/entradaretiro.jpg"></a>
				              </div>        
				            </div>
				          </div>
				          <div class="item">
				            <div class="row">
				              <div class="col-md-4">
				                <a class="thumbnail"><img src="img/atocha.jpg"></a>
				              </div>          
				              <div class="col-md-4">
				                <a class="thumbnail"><img alt="" src="img/reinasofiaext.jpg"></a>
				              </div>
				              <div class="col-md-4">
				                <a class="thumbnail"><img alt="" src="img/reinasofia.jpg"></a>
				              </div>        
				            </div>
				          </div>
				        </div>
				        <a data-slide="prev" href="#media2" class="left carousel-control">‹</a>
				        <a data-slide="next" href="#media2" class="right carousel-control">›</a>
				   </div> 
	                </div>
	                   </div> 
	                </div>
	                <hr class="featurette-divider">
	<!--Ruta3-->	 
			<div class="row">
	                <div class="col-lg-6">
	                	<a href="rutaCentro.php"> <img class="img-circle" src= "img/rutaCentro.png" alt="rutaCentro" width="480" height="480"/> </a>
	                </div>
	                <div class="col-lg-6">
						<a href="rutaCentro.php"> <h2>Una Ruta Por Las Calles Del Centro De Madrid</h2> </a>
						<h4>En esta apasionada ruta tendremos que madrugar para recorrer el centro de Madrid donde conoceremos y visitaremos maravillosos monumentos y sitios de interés.</h4>
						<p> <strong> Duración: </strong> 10 horas</p>
						<p> <strong> Punto de partida: </strong> Plaza de Sol</p>
						<p> <strong> Punto de destino: </strong> Museo del Prado</p>
						<br>
					</div>
					<div class="col-lg-6">
					<div class="divSliderRutas">
						      <div class="carousel slide media-carousel" id="media3">
				        <div class="carousel-inner">
				          <div class="item  active">
				            <div class="row">
				              <div class="col-md-4">
				                <a class="thumbnail"><img src="img/sol.png"></a>
				              </div>          
				              <div class="col-md-4">
				                <a class="thumbnail"><img src="img/teatroReal.jpg"></a>
				              </div>
				              <div class="col-md-4">
				                <a class="thumbnail"><img src="img/callao.jpg"></a>
				              </div>        
				            </div>
				          </div>
				          <div class="item">
				            <div class="row">
				              <div class="col-md-4">
				                <a class="thumbnail"><img src="img/gvia.jpg"></a>
				              </div>          
				              <div class="col-md-4">
				                <a class="thumbnail"><img alt="" src="img/cibelesmini.jpg"></a>
				              </div>
				              <div class="col-md-4">
				                <a class="thumbnail"><img alt="" src="img/museodelprado.jpg"></a>
				              </div>        
				            </div>
				          </div>
				        </div>
				        <a data-slide="prev" href="#media3" class="left carousel-control">‹</a>
				        <a data-slide="next" href="#media3" class="right carousel-control">›</a>
				      </div> 
	                </div>
	                   </div> 
	                </div>
	                <hr class="featurette-divider">
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
