
  <?php
    if (($id = filter_input(INPUT_POST, "id", FILTER_UNSAFE_RAW)) !== null){ //si se ha enviado el data 'grupo'

      $db = mysqli_connect('localhost','root','','turistea');
      if(!$db){
        exit('Error en la conexion.');
      }
      $sql = "SELECT Titulo, Subtitulo, Descripcion, Fecha, Fuente, Imagen FROM noticias WHERE ID = '$id';";
      $consulta = mysqli_query($db, $sql);
      $fila = mysqli_fetch_row($consulta);

      echo '<div class="row">';
        echo '<div class="col-md-6">';
          ?>
          <img id="image-gallery-image" src="<?php echo $fila[5]; ?>" alt="Imagen Noticia" class="img-responsive">
          <?php
        echo '</div>';
        echo '<div class="col-md-6">';
          echo '<div class="cuerpoNoticia auxScroll">';
            echo '<h2>' .$fila[0]. '</h2>';
            echo '<h4>' .$fila[1]. '</h4>';
            echo '<br>';
            echo '<div class="textoNoticias">';
              echo '<p>' .$fila[2]. '</p>';
            echo '</div>';
            echo '<br>';
            echo '<p>Fuente de la noticia: <span style="color: blue;">' .$fila[4]. '</span></p>';
            echo '<p>' .$fila[3]. '</p>';
          echo '</div>';
        echo '</div>';
      echo '</div>';      
      
      mysqli_close($db);
    }
  ?>

