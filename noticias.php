<!DOCTYPE html>
<html lang="es">
    <head> 
        
        <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg320mUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Bootstrap core CSS-->
    <link rel="stylesheet" href="css/bootstrap.min.css" crossorigin="anonymous">
    <link rel="stylesheet" href="css/bootstrap-theme.min.css" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/carousel.css" rel="stylesheet">

    <link href="css/estilo.css" rel="stylesheet" type="text/css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <title>Turistea | Noticias</title>

        <script type="text/javascript">
		
	function muestraNoticias(){
		
		$.ajax({
	        type: "POST",
	        dataType: "html",
	        url: "ajax/sqlNoticias.php",
	        data: {},
	        success: function(data, textStatus) {
				$(".noticias").html(data);
			}
	    }).done(function(msg) {
	 
	        
	    });

	}

	function borraNoticia(id_noticia){

		$.ajax({
	        type: "POST",
	        dataType: "html",
	        url: "ajax/sqlBorraNoticia.php",
	        data: { "id": id_noticia},
	        success: function(data, textStatus) {
	               location.reload();
	        }
	    }).done(function(msg) {
	 
	        
	    });

	}

	function muestraModalNoticia(id_noticia) {   //funcion ajax para enviar datos(usado en la modal)
	    // Send the value in PHP
	    $.ajax({
	        type: "POST",
	        dataType: "html",
	        url: "ajax/modalMostrarNoticia.php",
	        data: { "id": id_noticia},
	        success: function(data, textStatus) {
	            $("#myModal2 .modal-body").html(data);
	            $("#myModal2").modal('show');    
	        }
	    }).done(function(msg) {
	 
	        
	    });
	};

	</script>
        
    </head> 
    <body onload="muestraNoticias()"> 
        <?php 
            include("navbar.php");
            if(isset($_SESSION['autentificado']) AND $_SESSION['autentificado'] == 'SI'){

            }
            else{header('Location: index.php');}
        ?>
        <div class="container">
            <div class="contenido">
	            <h1 class="text-center">Noticias</h1>
	            <div class="row">
	            	<!--Ruta donde te encuentras -->
	            	<ol class="breadcrumb">
					  	<li><a href="index.php">Inicio</a></li>
					  	<li class="active">Noticias</li>
					</ol>
	            </div>

	            <!-- Si eres admin puedes añadir una noticia -->

	            <?php if(isset($_SESSION['tipoUsuarioLog']) AND $_SESSION['tipoUsuarioLog'] == 'admin'){ ?>
		            <div class="row">
	                    <div class="aniadir">
	                        <a href="" onClick="$('#formularioNoticias').modal()" data-toggle="modal">
	                        <span class="glyphicon glyphicon-plus"></span><h4>Añadir</h4> </a>
	                        <div class="limpiar"></div> 
	                    </div>
		            </div>
		         <?php } ?>

	            <!-- div que se mostrará solo cuando haya algun error relativo a la img en el formulario de crear una noticia  -->

	            <div class="row">	            	
	            	<?php if(isset($_GET["errorImg"]) && $_GET["errorImg"]=="si"){ ?>
	            		<div class="panel panel-danger">
			            	<div class="panel-heading">La imagen que has intentado subir para la noticia no cumple con alguno de los siguientes requisitos:
				            	<ul>
				            		<li>La imagen no puede superar los 5KB permitidos.</li>
				            		<li>La imagen debe tiner un nombre que ya existe en nuestra base de datos.</li>
				            		<li>Debe ser extrictamente una imagen de tipo PNG o JPG.</li>
				            	</ul>
			           		</div>
			            </div> 
			        <?php } ?>
	            </div>

	            <!-- div que se mostrará solo cuando haya algun error en los datos en el formulario de crear una noticia -->

	            <div class="row">	            	
	            	<?php if(isset($_GET["errorForm"]) && $_GET["errorForm"]=="si"){ ?>
	            		<div class="panel panel-danger">
			            	<div class="panel-heading">Los campos del formulario no son corretos.</div>
			            </div>
			        <?php } ?>
			        
	            </div>

	            <!--                         Contenido de la página                         -->

	            <div class="noticias">

	            </div>


	            <!--                            Modal Noticias                              -->

	            

			     <div class="row">
			        <div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-hidden="true">
			            <div class="modal-dialog long-size">
			                <div class="modal-content img-container">
			                    <div class="modal-body modal-instagram">
			                       
			                    </div>
			                </div>
			            </div>
			        </div>
			    </div>
    
	            
	            <!-- FOOTER -->
	            <?php
	                include("footer.html");
	            ?>
	        </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="formularioNoticias" role="dialog">
            <div class="modal-dialog">

            <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">X</button>
                        <h4 class="modal-title text-center">Introduce una nueva noticia</h4>
                    </div>
                    <div class="modal-body">
                        <form action="validaNoticia.php" enctype="multipart/form-data" method="POST">

                        	<label for="titulonoticia" class="label">· Introduce el título de la noticia: </label>
				            <div class="input-group">
				                <span class="input-group-addon"><i class="glyphicon glyphicon-leaf"></i></span>
				                <input type="text" class="form-control" placeholder="Título de la noticia" id="titulonoticia" name="titulonoticia" required>
				            </div>
				            <br>

				            <label for="subtitulonoticia" class="label">· Introduce el subtítulo de la noticia: </label>
				            <div class="input-group">
				                <span class="input-group-addon"><i class="glyphicon glyphicon-leaf"></i></span>
				                <input type="text" class="form-control" placeholder="Subtítulo de la noticia" id="subtitulonoticia" name="subtitulonoticia" required>
				            </div>
				            <br>

				            <label for="fileToUpload" class="label">· Seleccione una imagen: </label>
				            <div class="input-group">				             
				                <input id="fileToUpload" name="fileToUpload" type="file" multiple class="file-loading">
				            </div>
				            <br>

				            <label for="descripcionnoticia" class="label">· Introduzca un resumen de la misma: </label>
				            <div class="input-group">
				                <span class="input-group-addon"><i class="glyphicon glyphicon-align-left"></i></span>
				            	<textarea class="form-control" id="resumennoticia" name="resumennoticia" rows="3" placeholder="Escriba aquí el resumen de la noticia" required></textarea>
				            </div>
				            <br>

				            <label for="descripcionnoticia" class="label">· Introduzca una descripción acerca de la misma: </label>
				            <div class="input-group">
				                <span class="input-group-addon"><i class="glyphicon glyphicon-align-left"></i></span>
				            	<textarea class="form-control" id="descripcionnoticia" name="descripcionnoticia" rows="3" placeholder="Escriba aquí la descripcion" required></textarea>
				            </div>
				            <br>

				            <label for="fuentenoticia" class="label">· Indique la fuente de la noticia: </label>
				            <div class="input-group">
				                <span class="input-group-addon"><i class="glyphicon glyphicon-globe"></i></span>
				                <input type="text" class="form-control" placeholder="url del sitio donde encontraste la noticia" id="fuentenoticia" name="fuentenoticia" required>
				            </div>
				            <br>
				            <div class="centrado">
				            	<input name="botonEnviarNoticia" class="btn btn-lg btn-primary" type="submit" value="Enviar">
				            	<input name="botonResetearNoticia" class="btn btn-lg btn-primary" type="reset" value="Restaurar campos">
						      	
							</div>
						</form>
						
                    </div>
                </div>
            </div>
        </div> 
    
	</body>

	
</html>
