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

        <title>Turistea | Visitas</title>
        
    </head> 
    <body onload="muestraVisitas()"> 
        <?php 
            include("navbar.html");
        ?>
        <div class="container">
            <div class="contenido"> 
	            <h1 class="text-center">Visitas</h1>
	            <h3 class="text-center"> ¿A qué estás esperando? ¡A visitar Madrid! </h3>
	            <div class="row">
	            	<!--Ruta donde te encuentras -->
	            	<ol class="breadcrumb">
					  	<li><a href="index.php">Inicio</a></li>
					  	<li class="active">Visitas</li>
					</ol>
	            </div>
	            <div class="row">
	               <h4 class="tituloVisita">¡¡No olvides visitar, estos maravillosos lugares de Madrid!! :) </h4>
                </div>
                <div class="row">
                    <div class="aniadir">
                        <a href="" onClick="$('#formularioVisitas').modal()" data-toggle="modal">
                        <span class="glyphicon glyphicon-plus"></span><h4>Añadir</h4> </a>
                        <div class="limpiar"></div> 
                    </div>
	            </div>
	            <div class="row">
	        	    <table class="enMedio">  	
						<tbody id="cuerpoTabla">
                            <?php 
                                include("function/funciones.php");
                                mostrarVisitas() 
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
        
	            <!--                            Modal Visitas                              -->

	            <div class="modal fade" id="modalVisita" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			        <div class="modal-dialog" role="document" style="color: black;">
			          <div class="modal-content">
			            <div class="modal-header">
			            	<h4 class="tituloVisita centrado">Conoce este lugar un poco más.</h4>
			                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			                <span aria-hidden="true" style="color: black;">&times;</span>
			              </button>
			            </div>
			            
			            <div class="modal-body">
			            

			            </div>
			           
			          </div>
			        </div>
			      </div>      
	            
    
        <!-- Modal -->
        <div class="modal fade" id="formularioVisitas" role="dialog">
            <div class="modal-dialog">

            <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">X</button>
                        <h4 class="modal-title text-center">Introduce un nuevo lugar</h4>
                    </div>
                    <div class="modal-body">
                        <form action="function/insertar_visita.php" enctype="multipart/form-data" method="post">
				      	     <p> Introduce el nombre: </p>
                             <input type="text" class="form-control" placeholder="Nombre del lugar" name="nombrelugar" aria-describedby="basic-addon2">
                            <br>
                            <p>Introduce una imagen: </p>
                            <input type="file" name="imagenVisita">
                            <br>
				      	     <p> Introduzca una descripción acerca del mismo: </p>
				      	     <textarea class="form-control" name="descripcion" rows="3" placeholder="Escriba aquí la descripcion"></textarea>
						      <br>
				      	<button type="submit" class="btn btn-default centrado">Añadir</button>
						  		<button type="reset" class="btn btn-default ">Borrar</button></center>
                     
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
	
            function muestraModalVisita(titulo_visita) {   //funcion ajax para enviar datos(usado en la modal)
                // Send the value in PHP
                
                $.ajax({
                    type: "POST",
                    dataType: "html",
                    url: "ajax/modalMostrarVisita.php",
                    data: { "titulo": titulo_visita},
                    success: function(data, textStatus) {
                        $("#modalVisita .modal-body").html(data);
                        $("#modalVisita").modal('show');    
                    }
                    }).done(function(msg) {


                });
            };
        </script>
	</body>
</html>