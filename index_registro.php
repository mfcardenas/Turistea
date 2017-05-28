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
        <div id="bg"><img src="img/bg_login.jpg"></div>
    
        <?php 
            include("navbar.php");
        ?>

        <div class="container">
            
          <form class="form-signin" name="registerForm" action="registro_aw.php" method="post">

            <div class="sidebar-module sidebar-module-inset bloqueFondoRegistro">
                 

                 <div <?php if(isset($_GET["errorusuario"]) && $_GET["errorusuario"]=="si"){ ?> class="panel panel-danger auxbloq1">
                        <div class="panel-heading">El usuario introducido ya existe prueba con otro.</div>
                        <?php }else{ ?> > 
                        <?php } ?>
                </div>

                <label for="inputNombre" class="nameLogin">Nombre:</label>
                <div class="input-group auxbloq1">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-piggy-bank"></i></span>
                    <input type="text" id="inputNombre" class="form-control" name="inputNombre" placeholder="Tu nombre" required autofocus>
                </div>
                <br>

                <label for="inputUsu" class="nameLogin">Usuario:</label>
                <div class="input-group auxbloq1">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                    <input type="text" id="inputUsu" class="form-control" name="inputUsu" placeholder="Tu id usuario" required autofocus>
                </div>
                <br>

                <label for="inputPassword" class="nameLogin">Contraseña:</label>
                <div class="input-group auxbloq1">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                    <input type="password" id="inputPassword" class="form-control" name="inputPassword" placeholder="Password" required>
                </div>
                <br>

                <label for="inputPassword2" class="nameLogin">Escribe de nuevo la contraseña:</label>
                <div class="input-group auxbloq1">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                    <input type="password" id="inputPassword2" class="form-control" name="inputPassword2" placeholder="Verifique la contraseña" required>
                </div>
                <div class="auximg5">
                    <img id="error_cont2" class="hidden" src="img/error.png" alt="Error" title="Error" width="20px" height="20px">
                    <img id="ok_cont2" class="hidden" src="img/ok.png" alt="Ok" title="Ok" width="20px" height="20px">
                </div>
                
                <br>

                <label for="inputEmail" class="nameLogin">Email:</label>
                <div class="input-group auxbloq1">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                    <input type="email" id="inputEmail" class="form-control" name="inputEmail" placeholder="Tu correo electrónico" required autofocus>
                </div>
                <br>

                <div id="botonEnviar" class="hidden"><button class="btn btn-lg btn-primary btn-block auxbloq1" type="submit" style="width: 280px; margin-top: 14px;">Enviar</button></div>
                <div class="auxbloq"></div>
              </form>
            </div>
        </div> <!-- /container -->
     </body>

    <script type="application/javascript">

        document.getElementById('inputPassword2').addEventListener("change", function () {
            var p1 = document.getElementById("inputPassword").value;
            var p2 = document.getElementById("inputPassword2").value;
            if ( p1 != p2){
               // alert("Las contraseñas no coinciden.");
                
                document.getElementById('inputPassword2').style.border = "1px solid red";
                //document.getElementById('inputPassword2').focus();
                
                
                document.getElementById('error_cont2').setAttribute("disabled", "show");
                document.getElementById('ok_cont2').setAttribute("class", "hidden");
                document.getElementById('botonEnviar').setAttribute("class", "hidden");
            }
            else{
                document.getElementById('inputPassword2').style.border = "1px solid green";
                
                
                document.getElementById('error_cont2').setAttribute("class", "hidden");
                document.getElementById('ok_cont2').setAttribute("class", "show");
                document.getElementById('botonEnviar').setAttribute("class", "show");
            }

        }, false);

        document.getElementById('inputPassword').addEventListener("change", function () {
            var pp1 = document.getElementById("inputPassword").value;
            var pp2 = document.getElementById("inputPassword2").value;
            if ( pp1 != pp2){
               // alert("Las contraseñas no coinciden.");
                
                document.getElementById('inputPassword2').style.border = "1px solid red";
                
                
                document.getElementById('error_cont2').setAttribute("class", "show");
                document.getElementById('ok_cont2').setAttribute("class", "hidden");
                 document.getElementById('botonEnviar').setAttribute("class", "hidden");
            }
            else{
                document.getElementById('inputPassword2').style.border = "1px solid green";
                
                
                document.getElementById('error_cont2').setAttribute("class", "hidden");
                document.getElementById('ok_cont2').setAttribute("class", "show");
                 document.getElementById('botonEnviar').setAttribute("class", "show");
            }

        }, false);

    </script>
</html>
