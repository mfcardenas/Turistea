 <?php
   
      $db = mysqli_connect('localhost','root','','turistea');
      if(!$db){
        exit('Error en la conexion.');
      }
      $sql = "SELECT ID, Nombre, Descripcion, Mapa, Duracion, Punto_Partida, Punto_Destino FROM rutas ORDER BY ID DESC;";
      $consulta = mysqli_query($db, $sql);
      $fila = mysqli_fetch_row($consulta);
      $aux = 0;
      
      while($fila){
        if ($aux % 2 != 0) {  //si es impar
          echo '<div class="row">';

          echo '<div class="col-lg-6">'; ?>
          <a href="rutaDeportistas.php"> <img class="img-circle" src= "<?php echo $fila[3]; ?>" alt="Mapa Ruta" width="480" height="480"/> </a>
          <?php
          echo '</div>';
          echo '<div class="col-lg-6">';
          echo '<a href="rutaDeportistas.php"> <h2>' .$fila[1]. '</h2> </a>';
          echo '<h4>' .$fila[2]. '</h4>';
          echo '<p> <strong> Duración: </strong>' .$fila[4]. ' horas</p>';
          echo '<p> <strong> Punto de partida: </strong>' .$fila[5]. '</p>';
          echo '<p> <strong> Punto de destino: </strong>' .$fila[6]. '</p>';
          echo '<br>';
          //De haber slider iría aquí!!!!
          echo '</div>';
          echo '</div>';
          echo '<hr class="featurette-divider">';
        }
        else{                 //si es par
          echo '<div class="row">';
          echo '<div class="col-lg-6">';
          echo '<a href="rutaRetiro.php"> <h2>' .$fila[1]. '</h2> </a>';
          echo '<h4>' .$fila[2]. '</h4>';
            echo '<p> <strong> Duración: </strong>' .$fila[4]. '</p>';
            echo '<p> <strong> Punto de partida: </strong>' .$fila[5]. '</p>';
            echo '<p> <strong> Punto de destino: </strong>' .$fila[6]. '</p>';
            echo '<br>';
            
            //De haber slider iría aquí!!!!  
            echo '</div>';
            
          echo '<div class="col-lg-6">'; ?>
          <a href="rutaDeportistas.php"> <img class="img-circle" src= "<?php echo $fila[3]; ?>" alt="Mapa Ruta" width="480" height="480"/> </a>
          <?php
          echo '</div>';
          echo '</div>';
          echo '<hr class="featurette-divider">';

        }      
        $aux++;
        $fila = mysqli_fetch_row($consulta);
      }
      
      mysqli_close($db);
    
  ?>