
  <?php
    if (($id = filter_input(INPUT_POST, "id", FILTER_UNSAFE_RAW)) !== null){ //si se ha enviado el data 'grupo'

      include("../config/conn.php");
      $sql = "SELECT * FROM galeria WHERE id = '$id';";
      $consulta = mysqli_query($conn, $sql);
      $fila = mysqli_fetch_row($consulta);
      echo '<div class="row">';
        echo '<div class="col-md-6">';
          ?>
          <img id="image-gallery-image" src="<?php echo $fila[2]; ?>" alt="<?php echo $fila[1]; ?>" class="img-responsive enMedio">
          <?php
        echo '<h2 class="centrado";>' .$fila[1]. '</h2>';
        echo '</div>';
        echo '<div class="col-md-6">';
          echo '<div class="cuerpoNoticia auxScroll">';
            
            echo '<br>';
            echo '<div class="textoNoticias">';
              echo '<p> Por: ' .$fila[4]. '</p>';
              echo '<p> En: ' .$fila[3].' </p>';
              echo '<p>' .$fila[5]. '</p>';
            echo '</div>';
            echo '<br>';
          echo '</div>';
        echo '</div>';
      echo '</div>';      
      
      mysqli_close($conn);
    }
  ?>
