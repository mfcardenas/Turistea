<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Formulario de login</title>


    <!-- Custom styles for this template -->
    <link href="estiloAndrea.css" rel="stylesheet">

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

  <body class="letra">
    <div id="bg"><img src="img/bg_login.jpg"></div>
    

                                              <!-- Poner aquí el menú de navegación -->

    <div class="container">

      <form class="form-signin" action="login.php" method="POST" style="margin-top: 22px;">
        <h2 class="form-signin-heading login">¡¡Loguéate!!</h2>
          <div class="sidebar-module sidebar-module-inset bloqueFondo" >


                  <!-- Si el php de validacion dectecta algun error saltará este bloque de advertencia -->
            
            <div <?php if(isset($_GET["errorusuario"]) && $_GET["errorusuario"]=="si"){ ?> class="panel panel-danger">
                <div class="panel-heading">El nombre de usuario o contraseña no coinciden.</div>
                <?php }else{ ?> > 
                <?php } ?>
            </div>

            <label for="inputEmail" class="nameLogin">Email:</label>
            <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                <input type="email" id="inputEmail" class="form-control" name="inputEmail" placeholder="Tu correo electrónico" required autofocus>
            </div>
            <br>

            <label for="inputPassword" class="nameLogin">Contraseña:</label>
            <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                <input type="password" id="inputPassword" class="form-control" name="inputPassword" placeholder="Password" required>
            </div>

            <div class="checkbox">
              <label class="nameLogin">
                <input type="checkbox" value="remember-me"> Recuerdame
              </label>
            </div>
            <input class="btn btn-lg btn-primary btn-block" name="Enviar" type="submit" value="Enviar">
          </div>
      </form>

    </div> <!-- /container -->

  </body>
</html>
