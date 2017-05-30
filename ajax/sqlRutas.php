 <?php
      include("../config/conn.php");
      //$db = mysqli_connect('localhost','ichthuse_paloma','Pa123456','ichthuse_turistea');
      if(!$conn){
        exit('Error en la conexion.');
      }
      $sql = "SELECT ID, Nombre, Descripcion, Mapa, Duracion, Punto_Partida, Punto_Destino FROM rutas ORDER BY ID DESC;";
      $consulta = mysqli_query($conn, $sql);
      $fila = mysqli_fetch_row($consulta);
      $aux = 0;
      session_start();
      
      while($fila){
        if ($aux % 2 != 0) {  //si es impar
          echo '<div class="row">';

          echo '<div class="col-lg-6">';
          ?>
          <img class="img-circle" src= "<?php echo $fila[3]; ?>" alt="Mapa Ruta" width="480" height="480">
          <?php
          echo '</div>';
          echo '<div class="col-lg-6">';
          echo '<h2>' .$fila[1]. '</h2>';
          echo '<h4 class="subtituloN">' .$fila[2]. '</h4>';
          echo '<p> <strong>- Duración: </strong>' .$fila[4]. ' horas</p>';
          echo '<p> <strong>- Punto de partida: </strong>' .$fila[5]. '</p>';
          echo '<p> <strong>- Punto de destino: </strong>' .$fila[6]. '</p>';          
          ?>
            <a role="button" class="btn btn-lg btn-primary" onclick="muestraRuta('<?php echo $fila[0]; ?>')"> Ver Ruta </a>
            <?php if(isset($_SESSION["tipoUsuarioLog"]) AND $_SESSION["tipoUsuarioLog"] == "admin"){  //si es admin puede eliminar la ruta
              ?> <a role="button" class="btn btn-lg btn-primary" onclick="borraRuta('<?php echo $fila[0]; ?>')"> Eliminar Ruta </a>
            <?php } 
          echo '<br>';
          //De haber slider iría aquí!!!!
          echo '</div>';
          echo '</div>';
          echo '<hr class="featurette-divider">';
        }
        else{                 //si es par
          echo '<div class="row">';
          echo '<div class="col-lg-6">';
          echo '<h2>' .$fila[1]. '</h2>';
          echo '<h4 class="subtituloN">' .$fila[2]. '</h4>';
          echo '<p> <strong>- Duración: </strong>' .$fila[4]. '</p>';
          echo '<p> <strong>- Punto de partida: </strong>' .$fila[5]. '</p>';
          echo '<p> <strong>- Punto de destino: </strong>' .$fila[6]. '</p>';
          ?>
            <a role="button" class="btn btn-lg btn-primary" onclick="muestraRuta('<?php echo $fila[0]; ?>')"> Ver Ruta </a>
            <?php if(isset($_SESSION["tipoUsuarioLog"]) AND $_SESSION["tipoUsuarioLog"] == "admin"){  //si es admin puede eliminar la ruta
              ?> <a role="button" class="btn btn-lg btn-primary" onclick="borraRuta('<?php echo $fila[0]; ?>')"> Eliminar Ruta </a>
            <?php } 
          echo '<br>';
          
          //De haber slider iría aquí!!!!  
          echo '</div>';
            
          echo '<div class="col-lg-6">';
          ?>
          <img class="img-circle" src= "<?php echo $fila[3]; ?>" alt="Mapa Ruta" width="480" height="480">
          <?php
          echo '</div>';
          echo '</div>';
          echo '<hr class="featurette-divider">';

        }      
        $aux++;
        $fila = mysqli_fetch_row($consulta);
      }
      
      mysqli_close($conn);
    
  ?>