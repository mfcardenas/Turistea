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

    <!-- Custom styles for this template -->
    <link href="css/carousel.css" rel="stylesheet">

    <link href="css/estilo.css" rel="stylesheet" type="text/css">

    <script src="js/bootstrap.min.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <title>Turistea | Pag. Principal</title>
  </head>

  <body>
    <!-- NAVBAR
    ================================================== -->
    <?php
      include("navbar.php");
    ?>

    <!-- Carousel
    ================================================== -->
    <!-- /.carousel -->
    <?php 
      include("carousel.html");
    ?>

    <!-- Circulitos
    =================================================== -->
    <?php
      include("circulos.html");
    ?>
    <!-- START THE FEATURETTES -->

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading"> Noticias de interés</h2>
          <p class="lead">Entérate de los acontecimientos más importantes de Madrid; festivales, desfiles, manifestaciones..</p> <p class="lead"> <a href="noticias.php"> Todo al alacance de un click </a></p>
        </div>
        <div class="col-md-5">
          <a href="noticias.php"> <img class="featurette-image img-responsive center-block" src="img/noticias.jpg" alt="noticias"> </a>
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7 col-md-push-5">
          <h2 class="featurette-heading">Galería</h2>
          <p class="lead">En esta sección encontrarás imágenes de las experiencias de otras personas, anímate a ver qué tal se lo han pasado otros y sus sitios favoritos...</p>
          <p class="lead"> <a href="galeria.php"> ¿Qué esperas para verlos? </a> </p>
        </div>
        <div class="col-md-5 col-md-pull-7">
          <a href="galeria.php"> <img class="featurette-image img-responsive center-block" src="img/galeria.jpg" alt="galeria"> </a>
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading"> Nuestra tienda </h2>
          <p class="lead">Compra de manera rápida entradas para acceder a los distintos sitios, así como una serie de souvenirs relacionados con Madrid.</p> 
          <p class="lead"> <a href="tienda.php"> Accede de manera rápida, cómoda y sencilla </a></p>
        </div>
        <div class="col-md-5">
          <a href="tienda.php"> <img class="featurette-image img-responsive center-block" src="img/tienda.jpg" alt="tienda"> </a>
        </div>
      </div>


      <hr class="featurette-divider">
      <!-- /END THE FEATURETTES -->

      <!-- Modal -->
      <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">
        
          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">X</button>
              <h4 class="modal-title">¡Lo siento!</h4>
            </div>
            <div class="modal-body">
              <p><img src="img/caritallorando.png" alt="Carita llorando"></p>
              <p> Lo sentimos, esto aún no está disponible </p>
            </div>
            
          </div>
          
        </div>
      </div>

      <!-- FOOTER -->
      <?php
        include("footer.html");
      ?>

    </div><!-- /.container -->




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