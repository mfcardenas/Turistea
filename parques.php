<!DOCTYPE html>
<html lang="es">
    <head> 
        
        <meta charset="utf-8">
    	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"  crossorigin="anonymous">

	    <!-- Bootstrap core CSS-->
	    <link rel="stylesheet" href="css/bootstrap.min.css" crossorigin="anonymous">
	    <link rel="stylesheet" href="css/bootstrap-theme.min.css" crossorigin="anonymous">

	    <!-- Custom styles for this template -->
	    <link href="css/carousel.css" rel="stylesheet">

	    <link href="css/estilo.css" rel="stylesheet" type="text/css">

	    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <title>Turistea | Parques temáticos</title>
        
    </head> 
    <body> 
        <?php 
            include("navbar.php");
            include("function/funciones.php");
        ?>
        <div class="container">
            <div class="contenido">           
	            <h1 class="text-center">Parques temáticos</h1>
	            <h2 class="text-center"> Conoce los parques de Madrid </h2>
	            <div class="row">
	            	<!--Ruta donde te encuentras -->
	            	<ol class="breadcrumb">
					  	<li><a href="index.php">Inicio</a></li>
					  	<li class="active">Parques temáticos</li>
					</ol>
	            </div>
	            <div class="row">
	            	<div>
	            		<form action="buscar_lugar.php?tipo=parque" method="post" class="busqueda">
	            			<label for="buscar" class="invisible">Buscar</label> <!--ESTO ES ASÍ PARA QUE NO DE ERROR EN EL VALIDADOR-->
		            		<input type="text" placeholder="Búsqueda" id="buscar" name="buscar">
		            		<input type="submit" value="Buscar">
		            	</form>
	            	</div>
	            	 <?php if(isset($_SESSION['tipoUsuarioLog']) AND $_SESSION['tipoUsuarioLog'] == 'admin'){ ?>
	                    <div class="aniadir">
	                        <a href="" onClick="$('#formularioParques').modal()" data-toggle="modal">
	                        <span class="glyphicon glyphicon-plus"></span><h4>Añadir</h4> </a>
	                        <div class="limpiar"></div> 
	                    </div>
                    <?php } ?>
	            </div>
	            <?php
	            	$tipo = "Parque";
	            	mostarLugares($tipo);
	            ?>
	            
	            <!-- FOOTER -->
	            <?php
	                include("footer.html");
	            ?>
	        </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="formularioParques" role="dialog">
            <div class="modal-dialog">

            <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">X</button>
                        <h4 class="modal-title text-center">Introduce un nuevo parque</h4>
                    </div>
                    <div class="modal-body">
                        <form action="function/insertar_lugar.php?lugar=parque" enctype="multipart/form-data" method="post" >
				      	    <label for="nombre"> Introduce el nombre*: </label>
                             <input type="text" class="form-control" placeholder="Nombre del parque" id ="nombre" name="nombre" required>
                            <br>
                            <label for="imagen">Introduce una imagen*: </label>
                            <input type="file" id="imagen" name="imagen" required class="file-loading">
                            <br>
				      	     <label for="descripcion"> Introduzca una descripción acerca del mismo: </label>
				      	     <textarea class="form-control" id="descripcion" name="descripcion" rows="3" placeholder="Escriba aquí la descripcion"></textarea>
						    <br>
						     <label> Introduce la dirección*: </label>
							     <label for="localizacion1" class="invisible">Calle y número </label><input type="text" class="form-control" placeholder="Calle, Nº" id="localizacion1" name="localizacion1"  required>
								 <label for="localizacion2" class="invisible">Localidad y provincia</label><input type="text" class="form-control" placeholder="Localidad, Provincia" id="localizacion2" name="localizacion2"  required>
								 <label for="localizacion3" class="invisible">País</label><input type="text" class="form-control" placeholder="País" id="localizacion3" name="localizacion3"  required>
							 
							<br>
							 <label for="telefono"> Introduce el teléfono de contacto: </label>
							 <input type="text" class="form-control" placeholder="Teléfono" id="telefono" name="telefono" >
							<br>
							<p> Introduce el horario*: (Primero la hora de apertura y después la de cierre</p>
								<ul>
								    <li><label> Lunes: </label>
								    	<label class="invisible" for="aperturaLunes">AL</label><input type="time" id="aperturaLunes" name="aperturaLunes" value="10:00:00" max="23:59:59" min="08:00:00" step="1" required>
								    	<label class="invisible" for="cierreLunes">CL</label><input type="time" id="cierreLunes" name="cierreLunes" value="10:00:00" max="23:59:59" min="08:00:00" step="1" required>
								    </li>
								    <li><label> Martes: </label>
								    	<label class="invisible" for="aperturaMartes">AM</label><input type="time" id="aperturaMartes" name="aperturaMartes" value="10:00:00" max="23:59:59" min="08:00:00" step="1" required>
								    	<label class="invisible" for="cierreMartes">CM</label><input type="time" id="cierreMartes" name="cierreMartes" value="10:00:00" max="23:59:59" min="08:00:00" step="1" required> 
								    </li>
								    <li><label> Miércoles: </label>
								    	<label class="invisible" for="aperturaMiercoles">AX</label><input type="time" id="aperturaMiercoles" name="aperturaMiercoles" value="10:00:00" max="23:59:59" min="08:00:00" step="1" required>
								    	<label class="invisible" for="cierreMiercoles">CX</label><input type="time" id="cierreMiercoles" name="cierreMiercoles" value="10:00:00" max="23:59:59" min="08:00:00" step="1" required> 
								    </li>
								    <li><label> Jueves: </label>
								    	<label class="invisible" for="aperturaJueves">AJ</label><input type="time" id="aperturaJueves" name="aperturaJueves" value="10:00:00" max="23:59:59" min="08:00:00" step="1" required>
								    	<label class="invisible" for="cierreJueves">CJ</label><input type="time" id="cierreJueves" name="cierreJueves" value="10:00:00" max="23:59:59" min="08:00:00" step="1" required> 
								    </li>
								    <li><label> Viernes: </label>
								    	<label class="invisible" for="aperturaViernes">AV</label><input type="time" id="aperturaViernes" name="aperturaViernes" value="10:00:00" max="23:59:59" min="08:00:00" step="1" required>
								    	<label class="invisible" for="cierreViernes">CV</label><input type="time" id="cierreViernes" name="cierreViernes" value="10:00:00" max="23:59:59" min="08:00:00" step="1" required> 
								    </li>
								    <li><label> Sábado: </label>
								    	<label class="invisible" for="aperturaSabado">AS</label><input type="time" id="aperturaSabado" name="aperturaSabado" value="10:00:00" max="23:59:59" min="08:00:00" step="1" required>
								    	<label class="invisible" for="cierreSabado">CS</label><input type="time" id="cierreSabado" name="cierreSabado" value="10:00:00" max="23:59:59" min="08:00:00" step="1" required> 
								    </li>
								    <li><label> Domingo: </label>
								    	<label class="invisible" for="aperturaDomingo">AD</label><input type="time" id="aperturaDomingo" name="aperturaDomingo" value="10:00:00" max="23:59:59" min="08:00:00" step="1" required>
								    	<label class="invisible" for="cierreDomingo">CD</label><input type="time" id="cierreDomingo" name="cierreDomingo" value="10:00:00" max="23:59:59" min="08:00:00" step="1" required> 
								    </li>
								</ul>
							<label for="comoLlegar"> Introduce cómo llegar: </label>
							<textarea class="form-control" id="comoLlegar" name="comoLlegar" rows="3" placeholder="Escriba aquí la cómo llegar"></textarea>
							<label for="entradas"> Precio entradas: </label>
							<textarea class="form-control" id="entradas" name="entradas" rows="3" placeholder="Escriba aquí la el tipo de entradas y sus respectivs precios"></textarea>

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

	    <script type=text/javascript>
		    function eliminarLugar(identificador){

		        $.ajax({
		            type: "POST",
		            dataType: "html",
		            url: "ajax/sqlBorraLugar.php",
		            data: { "id": identificador},
		            success: function(data, textStatus) {
		                   location.reload();
		            }
		        }).done(function(msg) {


	        	});
	    	}
		</script>
	</body>
</html>
