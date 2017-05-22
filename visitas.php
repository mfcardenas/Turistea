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
    <body> 
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
						<tbody>
							<tr>
						        <td class="auxtd1">
						        	<a href="puerta_sol.php"><img src="img/puertaDelSol.jpg" alt="Puerta del Sol" class="img-rounded auximg2" width="100%" height="180px">
						        	<p class="tituloVisitas">Puerta del Sol</p></a>
						        </td>
						        <td class="auxtd1">
									<a href="circulo_bellas_artes.php"><img src="img/circuloBellasArtes.jpg" alt="Círculo de Bellas Artes" class="img-rounded auximg2" width="100%" height="180px">
									<p class="tituloVisitas">Círculo de Bellas Artes</p></a>
								</td>
						        <td class="auxtd1">
									<a href="puerta_europa.php"><img src="img/puertaDeEuropa.jpg" alt="Puerta de Europa" class="img-rounded auximg2" width="100%" height="180px">
									<p class="tituloVisitas">Puerta de Europa</p></a>
								</td>
						        <td class="auxtd1">
									<a href="gran_via.php"><img src="img/granVia.jpg" alt="Gran Vía" class="img-rounded auximg2" width="100%" height="180px">
									<p class="tituloVisitas">Gran Vía</p></a>
								</td>
					      	</tr>     
					      	<tr>
						        <td class="auxtd1">
									<a href="plaza_santa_ana.php"><img src="img/plazaDeSantaAna.jpg" alt="Plaza de Santa Ana" class="img-rounded auximg2" width="100%" height="180px">
									<p class="tituloVisitas">Plaza de Santa Ana</p></a>
								</td>
								<td class="auxtd1">
									<a href="las_ventas.php"><img src="img/lasventas.jpg" alt="Las ventas" class="img-rounded auximg2" width="100%" height="180px">
									<p class="tituloVisitas">Las ventas</p></a>
								</td>
								<td class="auxtd1">
									<a href="escorial.php"><img src="img/monasterioEscorial.jpg" alt="Monasterio del Escorial" class="img-rounded auximg2" width="100%" height="180px">
									<p class="tituloVisitas">Monasterio del Escorial</p></a>
								</td>
								<td class="auxtd1">
									<a href="puerta_alcala.php"><img src="img/puertaDeAlcala.jpg" alt="Puerta de Alcalá" class="img-rounded auximg2" width="100%" height="180px">
									<p class="tituloVisitas">Puerta de Alcalá</p></a>
								</td>
					      	</tr>  
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
                        <form action="#" method="post">
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
	</body>
</html>