<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <!--<link rel="icon" href="../../favicon.ico">-->

    <title>Turistea | Formulario de login</title>


    
    <link href="css/estilo.css" rel="stylesheet">
    <link href="css/estiloLogin.css" rel="stylesheet">
    
    <!-- Custom styles for this template -->
    <link href="css/carousel.css" rel="stylesheet">


    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
    
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body class="idbody">
    <div id="bg"><img src="img/bg_login.jpg" alt="Imagen de login"></div>
    
    <?php 
      include("navbar.php");
    ?>

    <div class="container">

      <form class="form-signin" action="function/validaLogin.php" method="POST">
          <div class="sidebar-module sidebar-module-inset bloqueFondo " >

                  <!-- Si el php de validacion dectecta algun error saltará aluno de estos bloques de advertencia -->
            
            <?php if(isset($_GET["errorusuario"]) && $_GET["errorusuario"]=="si"){ ?>
              <div class="panel panel-danger">
                <div class="panel-heading">El nombre de usuario o contraseña no coinciden.</div>
              </div>
            <?php } ?>

            <?php if(isset($_GET["errorcampos"]) && $_GET["errorcampos"]=="si"){ ?>
              <div class="panel panel-danger auxbloq1">
                <div class="panel-heading">Ha ocurrido un error al enviar el formulario, pruebe de nuevo.</div>
              </div> 
            <?php } ?>
            

            <label for="inputEmail" class="nameLogin">Id usuario:</label>
            <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                <input type="text" id="inputUsuario" class="form-control" name="inputUsuario" placeholder="Id de usuario" required autofocus>
            </div>
            <br>

            <label for="inputPassword" class="nameLogin">Contraseña:</label>
            <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                <input type="password" id="inputPassword" class="form-control" name="inputPassword" placeholder="Contraseña" required>
            </div>

            <div class="checkbox">
              <label class="nameLogin">
                <input type="checkbox" value="remember-me"> Recuerdame
              </label>
            </div>
            <input class="btn btn-lg btn-primary btn-block" name="Enviar" type="submit" value="Entrar">
          </div>
      </form>
      
    </div> <!-- /container -->

  </body>
</html>
