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

    <script type="text/javascript" src="js/validator.js"></script>


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
            
          <form class="form-signin" name="registerForm" action="validaRegistro.php" method="post" data-toggle="validator" role="form" onsubmit="return prueba()">

            <div class="sidebar-module sidebar-module-inset bloqueFondoRegistro">

                         <!-- Si el php de validacion dectecta algun error saltará aluno de estos bloques de advertencia -->
     

                <?php if(isset($_GET["errorusuario"]) && $_GET["errorusuario"]=="si"){ ?>
                    <div class="panel panel-danger auxbloq1">
                        <div class="panel-heading">El usuario introducido ya existe prueba con otro.</div>
                    </div>
                <?php } ?>

                <?php if(isset($_GET["errorusuario"]) && $_GET["errorusuario"]=="cont"){ ?>
                    <div class="panel panel-danger auxbloq1">
                        <div class="panel-heading">La contraseñas no coinciden,asegurate de que están bien escritas.</div>
                    </div>
                <?php } ?>
                

                <?php if(isset($_GET["errorcampos"]) && $_GET["errorcampos"]=="si"){ ?>
                    <div class="panel panel-danger auxbloq1">
                        <div class="panel-heading">Ha ocurrido un error al enviar el formulario, pruebe de nuevo.</div>
                    </div>
                <?php } ?>

                <?php if(isset($_GET["errorusuario"]) && $_GET["errorusuario"]=="esapcios"){ ?>
                    <div class="panel panel-danger auxbloq1">
                        <div class="panel-heading">El nombre o el usuario contienen espacios. Asegurate de que no hay espacios en blanco.</div>
                    </div>
                <?php } ?>

                <label for="inputNombre" class="nameLogin">Nombre:</label>
                <div class="input-group auxbloq1">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-piggy-bank"></i></span>
                    <input type="text" id="inputNombre" class="form-control" name="inputNombre" placeholder="Tu nombre" required="true" autofocus>
                </div>
                <br>

                <label for="inputUsu" class="nameLogin">Usuario:</label>
                <div class="input-group auxbloq1">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                    <input type="text" id="inputUsu" class="form-control" name="inputUsu" placeholder="Tu id usuario" required="true" autofocus>
                </div>
                <br>

                <label for="inputPassword" class="nameLogin">Contraseña:</label>
                <div class="input-group auxbloq1">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                    <input type="password" id="inputPassword" class="form-control" name="inputPassword" placeholder="Password" required="true">
                </div>
                <br>

                <label for="inputPassword2" class="nameLogin">Escribe de nuevo la contraseña:</label>
                <div class="input-group auxbloq1">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                    <input type="password" id="inputPassword2" class="form-control" name="inputPassword2" placeholder="Verifique la contraseña" required="true"="true">
                </div>
                                
                <br>

                <label for="inputEmail" class="nameLogin">Email:</label>
                <div class="input-group auxbloq1">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                    <input type="email" id="inputEmail" class="form-control" name="inputEmail" placeholder="Tu correo electrónico" required="true" autofocus>
                </div>
                <br>

                <div id="botonEnviar"><button class="btn btn-lg btn-primary btn-block auxbloq1" type="submit" style="width: 280px; margin-top: 14px;">Enviar</button></div>
                <div class="auxbloq"></div>
              </form>
            </div>
        </div> <!-- /container -->
     </body>

    <script type="application/javascript">

        //Comprobacion de campos

        
        document.getElementById('inputNombre').addEventListener("change", function () {
            var usuario = document.getElementById("inputNombre").value;
            var espacios = false;
            var cont = 0;
             while (!espacios && (cont < usuario.length)) {
                 if (usuario.charAt(cont) == " ")
                    espacios = true;
                  cont++;
             }
         
            if (espacios || usuario.length == 0) {
              document.getElementById('inputNombre').style.border = "1px solid red";
            }
            else{
                document.getElementById('inputNombre').style.border = "1px solid green";                
            }
        }, false);

        document.getElementById('inputUsu').addEventListener("change", function () {
            var usuario = document.getElementById("inputUsu").value;
            var espacios = false;
            var cont = 0;
             while (!espacios && (cont < usuario.length)) {
                 if (usuario.charAt(cont) == " ")
                    espacios = true;
                  cont++;
             }
         
            if (espacios || usuario.length == 0) {
                document.getElementById('inputUsu').style.border = "1px solid red";
            }
            else{
                document.getElementById('inputUsu').style.border = "1px solid green";                
            }
        }, false);



        document.getElementById('inputPassword2').addEventListener("change", function () {
            var p1 = document.getElementById("inputPassword").value;
            var p2 = document.getElementById("inputPassword2").value;
            if ( p1 != p2){
               // alert("Las contraseñas no coinciden.");
                
                document.getElementById('inputPassword2').style.border = "1px solid red";
                //document.getElementById('inputPassword2').focus();
                
            }
            else{
                document.getElementById('inputPassword2').style.border = "1px solid green";
                
                
            }

        }, false);

        document.getElementById('inputPassword').addEventListener("change", function () {
            var pp1 = document.getElementById("inputPassword").value;
            var pp2 = document.getElementById("inputPassword2").value;
            if ( pp1 != pp2){
               // alert("Las contraseñas no coinciden.");
                
                document.getElementById('inputPassword2').style.border = "1px solid red";
                
            }
            else{
                document.getElementById('inputPassword2').style.border = "1px solid green";
                
            }

        }, false);

        //Funcion de comprobación tras enviar el formulario

        function prueba(){
            var pp1 = document.getElementById("inputPassword").value;
            var pp2 = document.getElementById("inputPassword2").value;
            if ( pp1 != pp2){
                alert('Hay campos incorrectos.');
                return false;                
            }
            else{
                var usuario = document.getElementById("inputNombre").value;
                var espacios = false;
                var cont = 0;
                 while (!espacios && (cont < usuario.length)) {
                     if (usuario.charAt(cont) == " ")
                        espacios = true;
                      cont++;
                 }
             
                if (espacios || usuario.length == 0) {
                    alert('Hay campos incorrectos.');
                    return false; 
                }
                else{
                    var usu = document.getElementById("inputUsu").value;
                    var espacio = false;
                    var contador = 0;
                     while (!espacio && (contador < usu.length)) {
                         if (usu.charAt(contador) == " ")
                            espacio = true;
                          contador++;
                     }
                 
                    if (espacio || usu.length == 0) {
                        alert('Hay campos incorrectos.');
                        return false; 
                    }
                    else{
                        return true;
                    }
                }
            }
        }


    </script>
</html>
