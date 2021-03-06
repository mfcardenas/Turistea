<?php

	include("config/conn.php");

	/*Nombres de los bares*/
	$query_nombresG = "SELECT Nombre FROM gastronomia";
  	$result0 = mysqli_query($conn, $query_nombresG);
  	$nombresG = array();

  	while($row = mysqli_fetch_assoc($result0)){
    	$nombresG[] = $row['Nombre'];
    }

    /*Direccion de los bares*/
	$query_direccionG = "SELECT Direccion FROM gastronomia";
  	$result1 = mysqli_query($conn, $query_direccionG);
  	$direccionG = array();

  	while($row = mysqli_fetch_assoc($result1)){
    	$direccionG[] = $row['Direccion'];
   	}

   	/*Telefono de los bares*/
	$query_telefonoG = "SELECT Telefono FROM gastronomia";
  	$result2 = mysqli_query($conn, $query_telefonoG);
  	$telefonoG = array();

  	while($row = mysqli_fetch_assoc($result2)){
    	$telefonoG[] = $row['Telefono'];
    }

    /*Plato estrella*/
	$query_estrellaG = "SELECT `Plato estrella` FROM gastronomia";
  	$result3 = mysqli_query($conn, $query_estrellaG);
  	$estrellaG = array();

  	while($row = mysqli_fetch_assoc($result3)){
    	$estrellaG[] = $row['Plato estrella'];
   	}

   	/*Imagen de los bares*/
	$query_imagenG = "SELECT `Imagen` FROM gastronomia";
  	$result4 = mysqli_query($conn, $query_imagenG);
  	$imagenG = array();

  	while($row = mysqli_fetch_assoc($result4)){
    	$imagenG[] = $row['Imagen'];
    }

	error_reporting(E_PARSE);

	//Al rellenar el formulario y darle a submit

  	if(isset($_POST['submit'])){

  		$nombreAdd = htmlspecialchars(trim(strip_tags($_POST['nombrebar'])));
	  	$llegarAdd = htmlspecialchars(trim(strip_tags($_POST['llegadabar'])));
	  	$horarioAdd = htmlspecialchars(trim(strip_tags($_POST['horariobar'])));
	  	$direccionAdd = htmlspecialchars(trim(strip_tags($_POST['localizacionbar1'])));
	  	$telefonoAdd = htmlspecialchars(trim(strip_tags($_POST['telefonobar'])));
	  	$estrellaAdd = htmlspecialchars(trim(strip_tags($_POST['estrellabar'])));

	  	$picture=$_FILES['fichero1'];

  		$target_dir = "imgGastro/";  										//ruta
		$target_file = $target_dir . basename($_FILES["fichero1"]["name"]);			//ruta completa (path + nombre de la img)
		$file_name = basename($_FILES["fichero1"]["name"]);
		$file_tmp = $_FILES['fichero1']['tmp_name'];
		$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);						//tipo de la img
			
		// Comprobamos que es una img nueva y si es una img falsa
			
		$check = getimagesize($_FILES["fichero1"]["tmp_name"]);
  				
		$query_add="INSERT INTO gastronomia (`Nombre`, `Imagen`, `Direccion`, `Telefono`, `Horario`, `Llegada`, `Plato estrella`) VALUES ('$nombreAdd', '$target_file', '$direccionAdd', '$telefonoAdd', '$horarioAdd', '$llegarAdd', '$estrellaAdd')";
		move_uploaded_file($file_tmp, $target_file);

		$inserta=mysqli_query($conn, $query_add);
		header('Location: gastronomia.php');
		
	}
	echo "$target_file";

?>
<!DOCTYPE html>
<html lang="es">
    <head> 
        
        <meta charset="utf-8">
    	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="wid=device-wid, initial-scale=1, shrink-to-fit=no">

	    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" crossorigin="anonymous">

	    <!-- Bootstrap core CSS-->
	    <link rel="stylesheet" href="css/bootstrap.min.css" crossorigin="anonymous">
	    <link rel="stylesheet" href="css/bootstrap-eme.min.css" crossorigin="anonymous">

	    <!-- Custom styles for is template -->
	    <link href="css/carousel.css" rel="stylesheet">

	    <link href="css/estilo.css" rel="stylesheet" type="text/css">

	    <script src="js/bootstrap.min.js" crossorigin="anonymous"></script>
	    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <title>Turistea | Gastronomía</title>
        
    </head> 
    <body> 
        <?php 
            include("navbar.php");
        ?>
        <div class="container">
            <div class="contenido">     
	            <h3 class="text-center">Gastronomía</h3>
	            <h3 class="text-center"> Nuestra mejor gastronomía</h3>
	            <div class="row">
	            	<!--Ruta donde te encuentras -->
	            	<ol class="breadcrumb">
					  	<li><a href="index.php">Inicio</a></li>
					  	<li class="active">Gastronomía</li>
					</ol>
	            </div>
	            <div class="row">
	                <h4>¡¡Conoce cuáles son los tres restaurantes y bares más valorados de Madrid!!</h4>
	                <p> A continuación podrás deleitarte con nuestro top 3 de los mejores restaurantes de Madrid de todos los estilos. </p>
	            </div>

	            <?php if(isset($_SESSION['tipoUsuarioLog']) AND $_SESSION['tipoUsuarioLog'] == 'admin'): ?>

		            <div class="row">
	                    <div class="aniadir">
	                        <a href="" onClick="$('#formularioGastronomia').modal()" data-toggle="modal">
	                        <span class="glyphicon glyphicon-cutlery"></span><h4>Añadir</h4> </a>
	                        <div class="limpiar"></div> 
	                    </div>
		            </div>
		        <?php endif; ?>

	            <div class="row">
	            	<!--LAS RESEÑAS FUNCIONARÁN MÁS ADELANTE -->
	            	<table class="table table-hover">  	
						<tr>
						    <td>Posición</td>
						    <td>Título</td> 
						    <td>Descripción</td>
						    <td>Localización</td>
						    <td>Reseñas</td>
	  					</tr>
					  	<tr>
					    	<td>1</td>
					    	<!--<td><a href="lambuzo.php"><?php //echo "$nombresG[0]"; ?></a></td>-->
					    	<td><a href="" onclick="muestraModalGastro('<?php echo $nombresG[0]; ?>')" data-toggle="modal" data-id=<?php echo "0"; ?> > <?php echo "$nombresG[0]"; ?></a></td>
					    	<td>El bar Lambuzo es uno de esos sitios que se nota que está montado con cariño. En Madrid existen dos locales de la misma compañía, uno en la calle Ponzano y otro en las Conchas. Para este post nos centraremos en el bar situado en la calle Ponzano que es el más concurrido en la ciudad. Este bar es ideal para ir de tapas con un toque andaluz. Podrás viajar directamente a Cadiz a través de las maravillosas tapas que este fantástico bar ofrece.</td>
					    	<td><?php
					    		echo "$direccionG[0]"; 
					    	?></td>
					    	<td>BRUH</td>
					  	</tr>
					  	<tr>
					    	<td>2</td>
					    	<!--<td><a href="elMandil.php"><?php //echo "$nombresG[1]"; ?></a></td>-->
					    	<td><a href="" onclick="muestraModalGastro('<?php echo $nombresG[1]; ?>')" data-toggle="modal" data-id=<?php echo "1"; ?>><?php echo "$nombresG[1]"; ?></a></td>
					    	<td>El Mandil es un restaurante situado en pleno corazón de Chueca. La decoración es rústica y elegante mezclandolo con un toque clásico a través de una enorme pared de ladrillo que recorre todo el local</td>
					    	<td><?php
					    		echo "$direccionG[1]"; 
					    	?></td>
					    	<td>BRUH</td>
					  	</tr>
					  	<tr>
					    	<td>3</td>
					    	<!--<td><a href="montesDeGalicia.php"><?php //echo "$nombresG[2]"; ?></a></td>-->
					 		<td><a href="" onclick="muestraModalGastro('<?php echo $nombresG[2]; ?>')" data-toggle="modal" data-id=<?php echo "2"; ?>><?php echo "$nombresG[2]"; ?></a></td>
					    	<td>Jose Espasandín, empresario y restaurador propietario de Los Montes de Galicia desde 1997 ha sido fiel a su compromiso con los comensales que han pasado por el restaurante de Azcona, 46. El concepto de Montes de Galicia es muy sencillo. Consiste en ofrecer una experiencia gastronómica completa, desde un picoteo en barra con vinos de prestigio por copas, variedad de recetas tanto clásicas como modernas y coctelería de autor. Y todo ello, en un entorno agradable y rodeados por un servicio que transmita pasión y ganas de hacer disfrutar al cliente.</td>
					    	<td><?php
					    		echo "$direccionG[2]"; 
					    	?></td>
					    	<td>BRUH</td>
					  	</tr>
					</table>
					<p> Deleítate con la mejor gastronomía que nuestra ciudad ofrece con maravillosos e increíbles platos que nuestro chefs madrileños preparan con amor y entusiasmos. ¿A que estás esperando para probarlos?</p>
					<p></p>
					
					<?php $count=0; ?>
					<?php foreach($nombresG as $key=>$value): ?>
                    	<div class="row">
                    	
                    	<hr>
                    		<?php if($count % 2 == 0): ?>
                    			<div class="col-lg-3">
									<a href="" onclick="muestraModalGastro('<?php echo $nombresG[$key]; ?>')" data-toggle="modal"> <h3> <?php echo "$nombresG[$key]"; ?> </h3> </a>
									<a href="" onclick="muestraModalGastro('<?php echo $nombresG[$key]; ?>')" data-toggle="modal"> <img src= "<?php echo "$imagenG[$key]" ?>" alt="<?php echo "$imagenG[$key]" ?>"> </a> 
								</div>
								<div class="col-lg-9">
									<p class="subtitulo"> Localización: </p>
							          	<?php echo "$direccionG[$key]"; ?> <br>
							          	
						        	<p class="subtitulo"> Teléfono: </p>
						          		<?php echo "$telefonoG[$key]"; ?> <br>
						          	<p class="subtitulo"> Plato estrella: </p>
						          		<?php echo "$estrellaG[$key]"; ?> <br>
						          	<p class=" subtitulo"> Reseñas: </p>
						          		BRUH <br> <!--ESTO FALTA POR IMPLEMENTAR-->
						        </div>
							<?php endif; ?>
							

				        	<?php if($count % 2 != 0): ?>
								<div class="col-lg-6"></div>
								<div class="col-lg-3"> 
									<p class="subtitulo"> Localización: </p>
							          	<?php echo "$direccionG[$key]"; ?> <br>
						        	<p class="subtitulo"> Teléfono: </p>
						          		<?php echo "$telefonoG[$key]"; ?> <br>
						          	<p class="subtitulo"> Plato estrella: </p>
						          		<?php echo "$estrellaG[$key]"; ?> <br>
						          	<p class=" subtitulo"> Reseñas: </p>
						          		BRUH <br> <!--ESTO FALTA POR IMPLEMENTAR-->
						         </div>
								<div class="col-lg-3">
									<a href="" onclick="muestraModalGastro('<?php echo $nombresG[$key]; ?>')" data-toggle="modal"> <h3> <?php echo "$nombresG[$key]"; ?> </h3> </a>
									<a href="" onclick="muestraModalGastro('<?php echo $nombresG[$key]; ?>')" data-toggle="modal"> <img src= "<?php echo "$imagenG[$key]"; ?>" alt="<?php echo "$imagenG[$key]"; ?>"></a>
								</div>
								<div class="col-lg-9">
									
						        </div>
							<?php endif; ?>
							<?php $count = $count+1; ?>
				   		</div>

				   		<?php if(isset($_SESSION['tipoUsuarioLog']) AND $_SESSION['tipoUsuarioLog'] == 'admin'): ?>
				   		<div class="centrado">

			                    <button type="button" onclick="eliminarGastro('<?php echo $nombresG[$key];?>')">Eliminar</button></div>
			            <?php endif;

			        endforeach; ?>

	            </div>
	            
	            <hr class="featurette-divider">
	            <!-- FOOTER -->
	            <?php
	                include("footer.html");
	            ?>
	        </div>
        </div>


        <!-- Modal1 -->
        <div class="modal fade" id="formularioGastronomia" role="dialog">
            <div class="modal-dialog">

            <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">X</button>
                        <h4 class="modal-title text-center">Introduce un nuevo lugar</h4>
                    </div>
                    <div class="modal-body">
                        <form action="#" method="post" enctype='multipart/form-data'>
				      	     <label for="nombrebar"> Introduce el nombre: </label>
                             <input type="text" class="form-control" placeholder="Nombre del lugar" id="nombrebar" name="nombrebar"  required>
                            <br>
                            <label for="fichero1" class="label">Seleccione una imagen: </label>
				            <div class="input-group">				             
				                <input id="fichero1" name="fichero1" type="file" multiple class="file-loading">
				            </div>
				            <br>
				      	     <label for="llegadabar"> Introduzca una forma de llegar: </label>
				      	     <textarea class="form-control" id="llegadabar" name="llegadabar" rows="3" placeholder="Escriba aquí la ruta"></textarea>
						    <br>
						     <label for="localizacionbar1"> Introduce la dirección: </label>
						     <input type="text" class="form-control" placeholder="Calle, Nº" id="localizacionbar1" name="localizacionbar1"  required>
						     <label for="horariobar"> Introduce algún horario: </label>
							 <input type="text" class="form-control" placeholder="L hh:mm:ss (apertura) hh:mm:ss (cierre) M hh:mm:ss (apertura) ...." id="horariobar" name="horariobar" >
							 <!--<input type="text" class="form-control" placeholder="País" name="localizacionbar3" >-->
							<br>
							 <label for="telefonobar"> Introduce el teléfono de contacto: </label>
							 <input type="text" class="form-control" placeholder="Teléfono" id="telefonobar" name="telefonobar" >
							<br>
							 <label for="estrellabar"> Introduce el plato estrella: </p>
						     <input type="text" class="form-control" placeholder="Plato estrella" id="estrellabar" name="estrellabar">

							<br>



				      	<button type="submit" class="btn btn-default centrado" name="submit" value="Upload">Añadir</button>
						  		<button type="reset" class="btn btn-default ">Borrar</button>
                        </form>
                    </div>

                </div>

            </div>
        </div> 

        <!-- Modal2 -->
        <div class="modal fade" id="infoGastronomia" role="dialog">
            <div class="modal-dialog">
            

            <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">X</button>
                        <h4 class="modal-title text-center">Conoce más sobre este lugar</h4>
                    </div>
                    <div class="modal-body">
                        <form method="post">
				      	     <label for="nombrebarInfo"> Nombre: </label>
                             <input type="text" class="form-control" placeholder="Nombre del lugar" id="nombrebarInfo" name="nombrebarInfo"  required>
                            <br>
                            <label for="ficheroInfo" class="label">Seleccione una imagen: </label>
				            <div class="input-group">				             
				                <input id="ficheroInfo" name="ficheroInfo" type="file" multiple class="file-loading">
				            </div>
				            <br>
				      	     <label for="llegadabarInfo"> Introduzca una forma de llegar: </label>
				      	     <textarea class="form-control" id="llegadabarInfo" name="llegadabarInfo" rows="3" placeholder="Escriba aquí la ruta"></textarea>
						    <br>
						     <label for="localizacionbarInfo"> Introduce la dirección: </label>
						     <input type="text" class="form-control" placeholder="Calle, Nº" id="localizacionbarInfo" name="localizacionbarInfo"  required>
						     <label for="horariobarInfo"> Introduce algún horario: </label>
							 <input type="text" class="form-control" placeholder="L hh:mm:ss (apertura) hh:mm:ss (cierre) M hh:mm:ss (apertura) ...." id="horariobarInfo" name="horariobarInfo" >
							 <!--<input type="text" class="form-control" placeholder="País" name="localizacionbar3" >-->
							<br>
							 <label for="telefonobarInfo"> Introduce el teléfono de contacto: </label>
							 <input type="text" class="form-control" placeholder="Teléfono" id="telefonobarInfo" name="telefonobarInfo" >
							<br>
							 <label for="estrellabarInfo"> Introduce el plato estrella: </label>
						     <input type="text" class="form-control" placeholder="Plato estrella" id="estrellabarInfo" name="estrellabarInfo" >

							<br>

					      	<button type="submit" class="btn btn-default centrado" name="submit" value="Upload">Añadir</button>
							<button type="reset" class="btn btn-default ">Borrar</button>
                        </form>
                    </div>

                </div>

            </div>
        </div>
    
	    <!-- Bootstrap core JavaScript
	    ================================================== -->
	    <!-- Placed at e end of e document so e pages load faster -->
	    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
	    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

	    <!--<script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>-->
	    <script src="js/bootstrap.min.js"></script>
	    <!-- Just to make our placeholder images work. Don't actually copy e next line! -->
	    <!--<script src="../../assets/js/vendor/holder.min.js"></script>-->
	    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
	    <!--<script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>-->
	    <script type="text/javascript">

		    function muestraModalGastro(nombre_gastro) {   //funcion ajax para enviar datos(usado en la modal)
	                // Send the value in PHP
	                
	                $.ajax({
	                    type: "POST",
	                    dataType: "html",
	                    url: "ajax/modalMostrarGastro.php",
	                    data: { "nombre": nombre_gastro},
	                    success: function(data, textStatus) {
	                        $("#infoGastronomia .modal-body").html(data);
	                        $("#infoGastronomia").modal('show');    
	                    }
	                }).done(function(msg) {
	            });
	        };

	        function eliminarGastro(nombre_gastro){

                $.ajax({
                    type: "POST",
                    dataType: "html",
                    url: 'ajax/sqlBorraGastro.php',
                    data: { "nombre": nombre_gastro},
                    success: function(data, textStatus) {
                           location.reload();
                    }
                }).done(function(msg) {});
            };
        </script>
	</body>
</html>