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
    <body onload="muestraRutas()"> 
        <?php 
            include("navbar.html");
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


     <!--                         Contenido de la página                         -->

	            <div id="rutas">

	            </div>

			<!-- FOOTER -->
		    <?php
		    	include("footer.html");
		    ?>
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
                        <form action="#" method="post">
				      	    <p>Nombre de la ruta: </p>
                            <input type="text" class="form-control" placeholder="Nombre de la ruta" name="nombreruta" aria-describedby="basic-addon2">
                            <br>
                            <p>Mapa: </p>
                            <input type="file" name="imagenMapa">
                            <br>
                        	<p>Duración </p>
                            <input type="number" min="0" class="form-control" placeholder="Horas" name="duracion" aria-describedby="basic-addon2">
                            <br>
                            <p>Punto de partida </p>
                            <input type="text" class="form-control" placeholder="Punto de partida" name="inicio" aria-describedby="basic-addon2">
                            <br>
                            <p>Punto de destino </p>
                            <input type="text" class="form-control" placeholder="Punto de destino" name="destino" aria-describedby="basic-addon2">
                            <br>
				      	    <p>Descripción: </p>
				      	    <textarea class="form-control" name="descripcion" rows="3" placeholder="Escriba aquí la descripcion"></textarea>
						    <br>
						    <p>Fotos: </p>
                            <input type="file" name="imagenes">
                            <br>
                            <p>Contenido: </p>
				      	    <textarea class="form-control" name="contenido" rows="10" placeholder="Escriba aquí el contenido"></textarea>
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
	</body>

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
	</script>

</html>
