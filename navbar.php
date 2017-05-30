    <?php session_start(); 
      if(!isset($_SESSION['usuLogeado'])){
        $_SESSION['usuLogeado'] = '';
      }
      if(!isset($_SESSION['autentificado'])){
        $_SESSION['autentificado'] = 'NO';
      }
      if(!isset($_SESSION["tipoUsuarioLog"])){
        $_SESSION["tipoUsuarioLog"] = '';
      }
    ?>
    <div class="navbar-wrapper">
      <div class="container">
        <nav class="navbar navbar-inverse navbar-static-top">
          <div class="container">
            <div class="navbar-header">
              <!--LOGO TURISTEA DE ARRIBA A LA IZQUIERDA-->
              <a href="index.php"> <img class="logo" src="img/LogotipoFinal.png" alt="Logo"> </a>
              <!--Esto es para cuando la pantalla se encoge-->
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
            </div>
            <!--Esto son los botones de la lista-->
            <div id="navbar" class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <!--Esto me parece interesante que esté si no os gusta lo quito -->
                <li><a href="quienSomos.php">¿Quiénes somos?</a></li>
                <li><a href="queEs.php">¿Qué es Turistea?</a></li>
                <li><a href="teatros.php">Teatros</a></li>
                <li><a href="museos.php">Museos</a></li>
                <li><a href="parques.php">Parques temáticos</a></li>
                <li><a href="cines.php">Cines</a></li> 
              </ul>
              <ul class="nav navbar-nav navbar-right">

                 <!-- Logearse -->

                <?php if(!isset($_SESSION["autentificado"]) || $_SESSION["autentificado"] == "NO"){ ?>
                  <li class="active">
                    <a href="index_login.php"> Logueate <span class="glyphicon glyphicon-log-in"></span> </a>
                  </li>
                <?php } ?>

                  <!-- crear una cuenta -->

                <?php if(!isset($_SESSION["autentificado"]) || $_SESSION["autentificado"] == "NO"){ ?>
                  <li class="active">
                    <a href="index_registro.php"> Registrate <span class="glyphicon glyphicon-pencil"></span> </a>
                  </li>
                <?php } ?>

                 <!-- Acceso a tu cuenta -->

                <?php if(isset($_SESSION["autentificado"]) && $_SESSION["autentificado"] == "SI"){ ?>
                  <li class="active">
                    <a href="pag_usu.php"> <?php echo $_SESSION["usuLogeado"]; ?> <span class="glyphicon glyphicon-user"></span> </a>
                  </li>
                <?php } ?>

                  <!-- Cerrar sesion -->

                <?php if(isset($_SESSION["autentificado"]) && $_SESSION["autentificado"] == "SI"){ ?>
                  <li>
                    <a href="function/validaLogout.php"> Cerrar Sesion <span class="glyphicon glyphicon-log-out"></span> </a>
                  </li>
                <?php }?>

              </ul>
              
            </div>
          </div>
        </nav>
        </div>
</div>