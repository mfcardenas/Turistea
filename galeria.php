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

        <title>Turistea | Cines</title>
        
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
                <div class="row">
                    <div class="aniadir">
                        <a href="" onClick="$('#formularioGaleria').modal()" data-toggle="modal">
                        <span class="glyphicon glyphicon-camera"></span><h4>Añadir</h4> </a>
                        <div class="limpiar"></div> 
                    </div>
	            </div>
	            <div class="row">
				    <div class="col-xs-6 col-md-12 portfolio">
				    	<a href="experiencia1.php"><img src="img/experiencia1.jpg" alt="exp1"></a>
				    	<a href="experiencia2.php"><img src="img/experiencia2.jpg" alt="exp2"></a>
				    	<a href="#"><img src="img/muypronto.jpg" alt="muypronto"></a>
				    	<a href="#"><img src="img/muypronto.jpg" alt="muypronto"></a>
				    	<a href="#"><img src="img/muypronto.jpg" alt="muypronto"></a>
				    	<a href="#"><img src="img/muypronto.jpg" alt="muypronto"></a>
				    	<a href="#"><img src="img/muypronto.jpg" alt="muypronto"></a>
				    	<a href="#"><img src="img/muypronto.jpg" alt="muypronto"></a>
				    	<a href="#"><img src="img/muypronto.jpg" alt="muypronto"></a>
				    	<a href="#"><img src="img/muypronto.jpg" alt="muypronto"></a>
				    	<a href="#"><img src="img/muypronto.jpg" alt="muypronto"></a>
				    </div>
				</div>

	            <hr class="featurette-divider">
	            <!-- FOOTER -->
	            <?php
	                include("footer.html");
            	?>
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
                        <form action="#" method="post">
				      	     <p> Introduce un título*: </p>
                             <input type="text" class="form-control" placeholder="Título de la experiencia" name="experiencia" aria-describedby="basic-addon2" required>
                            <br>
                            <p>Introduce una imagen*: </p>
                            <input type="file" name="imagenexperiencia" required>
                            <br>
				      	     <p> ¿Alguna anécdota?: </p>
				      	     <textarea class="form-control" name="anecdotaExp" rows="3" placeholder="Escriba aquí su anécdota"></textarea>
						    <br>
						     <p> ¿Recuerda dónde fue?: </p>
						     <textarea class="form-control" name="anecdotaExp" rows="3" placeholder="Escriba aquí el lugar de la experiencia"></textarea>
							
							<br>
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
