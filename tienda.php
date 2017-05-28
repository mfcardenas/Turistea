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

        <title>Turistea | Nuestra tienda</title>
	</head>
	<body>
		 <?php 
            include("navbar.html");
        ?>
        <div class="container">
            <div class="contenido">     
	            <h1 class="text-center">Nuestra tienda a un fácil acceso</h1>
	            <h5 class="text-center">  Busca entre todos nuestros productos, el souvenir que más te gusta a un módico precio!! Seguro que no te arrepientes de comprarlo. </h5>
	            <h5 class="text-center"> ¡¡ Encuentra todo tipo de souvenirs relacionado con los lugares que visites!! </h5>
	            <div class="row">
	            	<!--Ruta donde te encuentras -->
	            	<ol class="breadcrumb">
					  	<li><a href="index.php">Inicio</a></li>
					  	<li class="active">Nuestra tienda</li>
					</ol>
	            </div>
                 <div class="row">
                    <div class="aniadir">
                        <a href="" onClick="$('#formularioTienda').modal()" data-toggle="modal">
                        <span class="glyphicon glyphicon-plus"></span><h4>Añadir</h4> </a>
                        <div class="limpiar"></div> 
                    </div>
	            </div>
	            <div class="row enMedio">
                    <!--TENGO QUE PONER Y DARLE FUNCIONALIDAD A ESTE BOTÓN<*/?php 
                        include("function/funciones.php");
                        mostrarFormularioProducto(); 
                    */?>-->
	               
	            </div>

	            <div class="row">
	            	<table class ="enMedio">
	            		<tbody>
                        <?php 
                            include("function/funciones.php");
                            mostrarProductos(); 
                        ?>
			    		</tbody>
		    		</table>
	            </div>

	            <hr class="featurette-divider">
                 <!-- Modal -->
        <div class="modal fade" id="formularioTienda" role="dialog">
            <div class="modal-dialog">

            <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">X</button>
                        <h4 class="modal-title text-center">Introduce un nuevo producto</h4>
                    </div>
                    <div class="modal-body">
                        <form action="function/insertar_producto.php" method="post">
				      	     
                            <p> Introduce el nombre del producto:</p>
                             <input type="text" class="form-control" placeholder="Nombre del producto" name="nombreproducto" aria-describedby="basic-addon2">
                            <br>
                            <p>Introduce una imagen: </p>
                            <input type="file" name="imagenProducto">
                            <br>
				      	     <p> Introduce el precio: </p>
				      	      <input type="text" class="form-control" placeholder="Precio del producto €" name="precioProducto" aria-describedby="basic-addon2">
						      <br>
				      	<button type="submit" class="btn btn-default centrado">Añadir</button>
						  		<button type="reset" class="btn btn-default ">Borrar</button></center>
                     
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
	</body>
</html>