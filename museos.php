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

        <title>Turistea | Museos</title>
        
    </head> 
    <body> 
        <?php 
            include("navbar.php");
            include("function/funciones.php");
        ?>
        <div class="container">
            <div class="contenido">           
	            <h1 class="text-center">Museos</h1>
	            <h3 class="text-center"> Conoce los museos madrileños </h3>
	            <div class="row">
	            	<!--Ruta donde te encuentras -->
	            	<ol class="breadcrumb">
					  	<li><a href="index.php">Inicio</a></li>
					  	<li class="active">Museos</li>
					</ol>
	            </div>
	            <div class="row">
	            	<div>
	            		<form action="buscar_lugar.php?tipo=museo" method="post" class="busqueda">
		            		<input type="text" placeholder="Búsqueda" id="buscar" name="buscar">
		            		<input type="submit" value="Buscar">
		            	</form>
	            	</div>
	            	<?php if(isset($_SESSION['tipoUsuarioLog']) AND $_SESSION['tipoUsuarioLog'] == 'admin'){ ?>
	                    <div class="aniadir">
	                        <a href="" onClick="$('#formularioMuseo').modal()" data-toggle="modal">
	                        <span class="glyphicon glyphicon-plus"></span><h4>Añadir</h4> </a>
	                        <div class="limpiar"></div> 
	                    </div>
	                <?php } ?>
	            </div>
	            <?php
	            	$tipo = "Museo";
	            	mostarLugares($tipo);
	            ?>
	            
	            <!-- FOOTER -->
	            <?php
	                include("footer.html");
	            ?>
	        </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="formularioMuseo" role="dialog">
            <div class="modal-dialog">

            <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">X</button>
                        <h4 class="modal-title text-center">Introduce un nuevo museo</h4>
                    </div>
                    <div class="modal-body">
                        <form action="function/insertar_lugar.php?lugar=museo" enctype="multipart/form-data" method="post" >
				      	    <p> Introduce el nombre*: </p>
                             <input type="text" class="form-control" placeholder="Nombre del museo" id ="nombre" name="nombre" aria-describedby="basic-addon2" required>
                            <br>
                            <p>Introduce una imagen*: </p>
                            <input type="file" id="imagen" name="imagen" required class="file-loading">
                            <br>
				      	     <p> Introduzca una descripción acerca del mismo: </p>
				      	     <textarea class="form-control" name="descripcion" rows="3" placeholder="Escriba aquí la descripcion"></textarea>
						    <br>
						     <p> Introduce la dirección*: </p>
						     <input type="text" class="form-control" placeholder="Calle, Nº" name="localizacion1" aria-describedby="basic-addon2" required>
							 <input type="text" class="form-control" placeholder="Localidad, Provincia" name="localizacion2" aria-describedby="basic-addon2" required>
							 <input type="text" class="form-control" placeholder="País" name="localizacion3" aria-describedby="basic-addon2" required>
							<br>
							 <p> Introduce el teléfono de contacto: </p>
							 <input type="text" class="form-control" placeholder="Teléfono" name="telefono" aria-describedby="basic-addon2">
							<br>
							<p> Introduce el horario*: (Primero la hora de apertura y después la de cierre</p>
								<ul>
								    <li><label> Lunes: </label> 
								    	<input type="time" name="aperturaLunes" value="10:00:00" max="24:00:00" min="08:00:00" step="1" required>
								    	<input type="time" name="cierreLunes" value="10:00:00" max="24:00:00" min="08:00:00" step="1" required>
								    </li>
								    <li> <label> Martes: </label> 
								    	<input type="time" name="aperturaMartes" value="10:00:00" max="24:00:00" min="08:00:00" step="1" required>
								    	<input type="time" name="cierreMartes" value="10:00:00" max="24:00:00" min="08:00:00" step="1" required> 
								    </li>
								    <li><label> Miércoles: </label> 
								    	<input type="time" name="aperturaMiercoles" value="10:00:00" max="24:00:00" min="08:00:00" step="1" required>
								    	<input type="time" name="cierreMiercoles" value="10:00:00" max="24:00:00" min="08:00:00" step="1" required> 
								    </li>
								    <li><label> Jueves: 
								    	</label> <input type="time" name="aperturaJueves" value="10:00:00" max="24:00:00" min="08:00:00" step="1" required>
								    	<input type="time" name="cierreJueves" value="10:00:00" max="24:00:00" min="08:00:00" step="1" required> 
								    </li>
								    <li><label> Viernes: </label> 
								    	<input type="time" name="aperturaViernes" value="10:00:00" max="24:00:00" min="08:00:00" step="1" required>
								    	<input type="time" name="cierreViernes" value="10:00:00" max="24:00:00" min="08:00:00" step="1" required> 
								    </li>
								    <li><label> Sábado: </label> 
								    	<input type="time" name="aperturaSabado" value="10:00:00" max="24:00:00" min="08:00:00" step="1" required>
								    	<input type="time" name="cierreSabado" value="10:00:00" max="24:00:00" min="08:00:00" step="1" required> 
								    </li>
								    <li><label> Domingo: </label> 
								    	<input type="time" name="aperturaDomingo" value="10:00:00" max="24:00:00" min="08:00:00" step="1" required>
								    	<input type="time" name="cierreDomingo" value="10:00:00" max="24:00:00" min="08:00:00" step="1" required> </li>
								</ul>
							<p> Introduce cómo llegar: </p>
							<textarea class="form-control" name="comoLlegar" rows="3" placeholder="Escriba aquí la cómo llegar"></textarea>
							<p> Precio entradas: </p>
							<textarea class="form-control" name="entradas" rows="3" placeholder="Escriba aquí la el tipo de entradas y sus respectivs precios"></textarea>

					      	<button type="submit" class="btn btn-default centrado">Añadir</button>
							<button type="reset" class="btn btn-default ">Borrar</button></center>
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
	</body>
</html>
