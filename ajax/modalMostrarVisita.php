
  <?php
    if (($titulo = filter_input(INPUT_POST, "titulo", FILTER_UNSAFE_RAW)) !== null){ //si se ha enviado el data 'grupo'

      $db = mysqli_connect('localhost','root','','turistea');
      if(!$db){
        exit('Error en la conexion.');
      }
      $sql = "SELECT * FROM visitas WHERE Nombre = '$titulo';";
      $consulta = mysqli_query($db, $sql);
      $fila = mysqli_fetch_row($consulta);
      echo '<div class="row">';
        echo '<div class="col-md-6">';
          ?>
          <img id="image-gallery-image" src="<?php echo $fila[1]; ?>" alt="<?php echo $fila[0]; ?>" class="img-responsive enMedio">
          <?php
        echo '<h2 class="centrado";>' .$fila[0]. '</h2>';
        echo '</div>';
        echo '<div class="col-md-6">';
          echo '<div class="cuerpoNoticia auxScroll">';
            
            echo '<br>';
            echo '<div class="textoNoticias">';
              echo '<p>' .$fila[2]. '</p>';
            echo '</div>';
            echo '<br>';
          echo '</div>';
        echo '</div>';
      echo '</div>';      
      
      mysqli_close($db);
    }
  ?>

