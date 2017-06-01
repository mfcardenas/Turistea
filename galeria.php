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

	    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <title>Turistea | Galería</title>
        
    </head> 
    <body> 
        <?php 
            include("navbar.php");
        ?>



        <div class="container">
            <div class="contenido">  
	            <h1 class="text-center">Galería</h1>
	            <h3 class="text-center"> Compartir es vivir </h3>
	            <div class="row">
	            	<!--Ruta donde te encuentras -->
	            	<ol class="breadcrumb">
					  	<li><a href="index.php">Inicio</a></li>
					  	<li class="active">Galería</li>
					</ol>
	            </div>
	            <div class="row">
	               <h4 class="tituloVisita">Comparte con tod@s tu experiencia en Madrid. Una imagen vale más que mil palabras </h4>
                </div>

                <!-- div que se mostrará solo cuando haya algun error relativo a la img en el formulario de compartir experiencia  -->

	            <div class="row">	            	
	            	<div <?php if(isset($_GET["errorDatos"]) && $_GET["errorDatos"]=="si"){ ?> class="panel panel-danger">
			            <div class="panel-heading">La imagen de tu experiencia no cumple con alguno de los siguientes requisitos:
			            	<ul>
			            		<li>La imagen no puede superar los 5KB permitidos.</li>
			            		<li>Debe ser una imagen que no exista.</li>
			            		<li>Debe ser una imagen de tipo PNG o JPG.</li>
			            	</ul>
			            </div>
			            <?php }else{ ?> > 
			            <?php } ?>
			        </div>
	            </div>

	            <!-- div que se mostrará solo cuando haya algun error en los datos en el formulario  de compartir experiencia -->

	            <div class="row">	            	
	            	<div <?php if(isset($_GET["errorForm"]) && $_GET["errorForm"]=="si"){ ?> class="panel panel-danger">
			            <div class="panel-heading">Los campos del formulario no son corretos.</div>
			            <?php }else{ ?> > 
			            <?php } ?>
			        </div>
	            </div>
	            
		            <div class="row">
		                <div class="aniadir">
		                    <a href="" onClick="$('#formularioGaleria').modal()" data-toggle="modal">
		                    <span class="glyphicon glyphicon-camera"></span><h4>Añadir</h4> </a>
		                    <div class="limpiar"></div> 
		                </div>
		            </div>
		        
	            <div class="row">
                        <table class="enMedio">  	
						<tbody id="cuerpoTabla">
                            <?php 
                                include("function/funciones.php");
                                mostrarGaleria() 
                            ?>
					    </tbody>
					</table>				    	
				</div>

	            <hr class="featurette-divider">
	            <!-- FOOTER -->
	            <?php
	                include("footer.html");
            	?>
            </div>
        </div>

          <!--                            Modal Galeria                              -->

	            <div class="modal fade" id="modalGaleria" tabindex="-1" role="dialog" aria-hidden="true">
			        <div class="modal-dialog modalNegro" role="document">
			          <div class="modal-content">
			            <div class="modal-header">
			            	<h4 class="tituloVisita centrado">Una experiencia inolvidable</h4>
			                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			                <span aria-hidden="true" class="modalNegro">&times;</span>
			              </button>
			            </div>
			            
			            <div class="modal-body">
			            

			            </div>
			           
			          </div>
			        </div>
			      </div> 

        <!-- Modal -->
        <div class="modal fade" id="formularioGaleria" role="dialog">
            <div class="modal-dialog">

            <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">X</button>
                        <h4 class="modal-title text-center">Introduce una nueva experiencia</h4>
                    </div>
                    <div class="modal-body">
                        <form action="function/validaGaleria.php" enctype="multipart/form-data" method="POST">
				      	     <p> Introduce un título*: </p>
                             <input type="text" class="form-control" placeholder="Título de la experiencia" name="experiencia" required>
                            <br>
                            <p>Introduce una imagen*: </p>
                            <input type="file" name="imagenexperiencia" required>
                            <br>
				      	     <p> ¿Alguna anécdota?*: </p>
				      	     <textarea class="form-control" name="anecdotaExp" rows="3" placeholder="Escriba aquí su anécdota" required></textarea>
						    <br>
						     <p> ¿Recuerda dónde fue?*: </p>
						     <textarea class="form-control" name="lugarExp" rows="3" placeholder="Escriba aquí el lugar de la experiencia" required></textarea>
							
							<br>
					      	<button type="submit" class="btn btn-default centrado">Añadir</button>
							<button type="reset" class="btn btn-default ">Borrar</button>
						</form>
						<p class="ruta"> *Campos obligatorios </p>
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
    
         <script type="text/javascript">
	
            function muestraModalGaleria(id) {   //funcion ajax para enviar datos(usado en la modal)
                // Send the value in PHP
                
                $.ajax({
                    type: "POST",
                    dataType: "html",
                    url: "ajax/modalMostrarGaleria.php",
                    data: { "id": id},
                    success: function(data, textStatus) {
                        $("#modalGaleria .modal-body").html(data);
                        $("#modalGaleria").modal('show');    
                    }
                    }).done(function(msg) {


                });
            };
               function eliminarExperiencia(id){
                $.ajax({
                    type: "POST",
                    dataType: "html",
                    url: 'ajax/sqlBorraGaleria.php',
                    data: { "id": id},
                    success: function(data, textStatus) {
                           location.reload();
                    }
                }).done(function(msg) {


               });

	       };
        </script>
	</body>
</html>
