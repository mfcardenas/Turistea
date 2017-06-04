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
        
        <title>Turistea | Página no encontrada</title>

    </head> 
    <body> 
        <?php 
            include("navbar.php");
        ?>
        <div class="container">
            <div class="contenido">           
                <h1 class="text-center">¡Error de conexión! </h1>
                <div class="row">
                    <ol class="breadcrumb">
                        <li><a href="index.php">Inicio</a></li>
                        <li class="active">Error de conexión</li>
                    </ol>
                </div>
                <div class="row">
                    <hr><div class="col-lg-7">
                    <h3 class="text-center negrita"> ¡Algo ha fallado! </h3>
                    <h4 class="text-center"> Ha habido algún problema en nuestra web y no hemos podido conectar con nuestra base de datos.</h4>
                    <h4 class="text-center">Puedes ponerte en contacto con el administrador del sitio <a href="mailto:soporte@turistea.es">(soporte@turistea.es)</a> <!--ESE CORREO NO EXISTE--> y lo solucionaremos cuanto antes.</h4>
                    <p class="text-center"><a role="button" class="btn btn-lg btn-primary" href="index.php"> Inicio </a></p></div>
                    <div class="col-lg-5"> <br><a href="index.php"><p class="text-center"><img class="img-rounded" width="60%" height="60%" src="img/errbd.png" alt="turistea"></p></a></div>
                </div>
                                    
               
                <hr class="featurette-divider">
                <!-- FOOTER -->
                <?php
                    include("footer.html");
                ?>
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