
<!DOCTYPE html>
<html lang="es">
    <head> 
        
        <meta charset="utf-8">
    	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" crossorigin="anonymous">

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

        <script type="text/javascript">
		
			function muestraRutas(){
				
				$.ajax({
			        type: "POST",
			        dataType: "html",
			        url: "ajax/sqlRutas.php",
			        data: {},
			        success: function(data, textStatus) {
						$("#rutas").html(data);
					}
			    }).done(function(msg) {
			        
			    });
			};
			
			function muestraRuta(id_ruta){
				$.ajax({
			        type: "POST",
			        dataType: "html",
			        url: "ajax/MostrarRuta.php",
			        data: {"id": id_ruta},
			        success: function(data, textStatus) {
			        	$(".contenido").html(data);
			        	window.scrollTo(0,0);
					}
			    }).done(function(msg) {
			 
			        
			    });
			}

			function borraRuta(id_ruta){
				$.ajax({
			        type: "POST",
			        dataType: "html",
			        url: "ajax/sqlBorraRuta.php",
			        data: { "id": id_ruta},
			        success: function(data, textStatus) {
			               location.reload();
			        }
			    }).done(function(msg) {
			 
			        
			    });

			}
		</script>
    </head> 
    <body onload="muestraRutas()"> 
        <?php 
            include("navbar.php");
        ?>
        <div class="container">
        	<div class="contenido"> 
	        	<h1 class="text-center">Rutas turísticas</h1>
	            <div class="row">
	            	<!--Ruta donde te encuentras -->
	            	<ol class="breadcrumb">
					  	<li><a href="index.php">Inicio</a></li>
					  	<li class="active">Rutas turísticas</li>
					</ol>
				</div>
				
				<article class="publicaciones"> 
					<p>Descubre a continuación las maravillosas rutas que nosotros ofrecemos. 
						Así, podrás recorrer las enormes y largas <span class="cursiva">calles de Madrid</span>, pasando por los mejores puntos de interés que nuestra ciudad ofrece como palacios, cines de éxito o museos que te harán pasar uno de los mejores días de tu vida. 
						Y como no, no olvidarnos de la posibilidad de degustar la mejor gastronomía madrileña en restaurantes económicos e incluso con <span class="negrita">estrellas michelin!!!</span></p>
					<p>Porque recuerda...</p>
					<div><blockquote>De Madrid al Cielo.</blockquote></div>
				</article>
			   <div class="row">
			   	<hr class="featurette-divider">
                    <div class="aniadir">
                        <a href="" onClick="$('#formularioRutas').modal()" data-toggle="modal">
                        <span class="glyphicon glyphicon-plus"></span><h4>Añadir</h4> </a>
                        <div class="limpiar"></div> 
                    </div>
	            </div>

	            <!-- div que se mostrará solo cuando haya algun error relativo a la img en el formulario de crear una noticia  -->

	            <div class="row">	            	
	            	<div <?php if(isset($_GET["errorDatos"]) && $_GET["errorDatos"]=="si"){ ?> class="panel panel-danger">
			            <div class="panel-heading">La imagen que has intentado subir para la ruta no cumple con alguno de los siguientes requisitos:
			            	<ul>
			            		<li>La imagen no puede superar los 5KB permitidos.</li>
			            		<li>Debe ser una imagen que no exista.</li>
			            		<li>Debe ser estrictamente una imagen de tipo PNG o JPG.</li>
			            	</ul>
			            </div>
			            <?php }else{ ?> > 
			            <?php } ?>
			        </div>
	            </div>

	            <!-- div que se mostrará solo cuando haya algun error en los datos en el formulario de crear una noticia -->

	            <div class="row">	            	
	            	<div <?php if(isset($_GET["errorForm"]) && $_GET["errorForm"]=="si"){ ?> class="panel panel-danger">
			            <div class="panel-heading">Los campos del formulario no son corretos.</div>
			            <?php }else{ ?> > 
			            <?php } ?>
			        </div>
	            </div>

     <!--                         Contenido de la página                         -->

	            <div id="rutas">

	            </div>

			<!-- FOOTER -->
		    <?php
		    	include("footer.html");
		    ?>
		    </div>
		</div>

     <!-- Modal -->
        <div class="modal fade" id="formularioRutas" role="dialog">
            <div class="modal-dialog">

            <!-- Modal content-->
                 <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">X</button>
                        <h4 class="modal-title text-center">Añadir Nueva Ruta</h4>
                    </div>
                    <div class="modal-body">
                        <form action="function/validaRuta.php" enctype="multipart/form-data" method="POST">
				      	    <p>Nombre de la ruta: </p>
                            <input type="text" class="form-control" placeholder="Nombre de la ruta" name="nombreruta" required>
                            <br>
                            <p>Mapa: </p>
                            <input type="file" name="imagenMapa" required>
                            <br>
                        	<p>Duración </p>
                            <input type="number" min="0" class="form-control" placeholder="Horas" name="duracion" required>
                            <br>
                            <p>Punto de partida </p>
                            <input type="text" class="form-control" placeholder="Punto de partida" name="inicio" required>
                            <br>
                            <p>Punto de destino </p>
                            <input type="text" class="form-control" placeholder="Punto de destino" name="destino" required>
                            <br>
				      	    <p>Descripción: </p>
				      	    <textarea class="form-control" name="descripcion" rows="3" placeholder="Escriba aquí la descripcion" required></textarea>
						    <br>
                             <p>Párrafo 1: </p>
                             <textarea class="form-control" name="parrafo1" rows="10" placeholder="Escriba aquí el contenido" required></textarea>
                             <br>
                             <p>Foto 1: </p>
                             <input type="file" name="foto1" required>
                             <br>
                            <?php
                            
                            for ($i=2; $i <= 5; $i++) {
                                echo '<p>Párrafo ' .$i. ': </p>'; ?>
                                <textarea class="form-control" name="<?php echo 'parrafo' .$i; ?>" rows="10" placeholder="Escriba aquí el contenido"></textarea>
                                <br>
                                <?php echo '<p>Foto ' .$i. ': </p>'; ?>
                                <input type="file" name="<?php echo 'foto' .$i; ?>">
                                <?php 
                                echo '<br>';
                            }
                            ?>
				      	    
				      	<button type="submit" class="btn btn-default centrado">Añadir</button>
                            <button type="reset" class="btn btn-default ">Borrar</button></form>
						
                    </div>
                </div>

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