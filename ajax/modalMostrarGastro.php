<?php
    if (($nombreG = filter_input(INPUT_POST, "nombre", FILTER_UNSAFE_RAW)) !== null){ //si se ha enviado el data 'grupo'
      include("../config/conn.php");
      $db = mysqli_connect('localhost','ichthuse_paloma','Pa123456','ichthuse_turistea');
      if(!$conn){
        exit('Error en la conexion.');
      }
      $sqlG = "SELECT * FROM gastronomia WHERE Nombre = '$nombreG';";
      $consultaG = mysqli_query($conn, $sqlG);
      $filaG = mysqli_fetch_row($consultaG);
      /*echo '<div class="row">';
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
      echo '</div>'; */
      ?>
        <img id="image-gallery-image" src="<?php echo $filaG[2]; ?>" alt="<?php echo $filaG[1]; ?>" class="img-responsive enMedio">
      <?php
      echo "<br>";
      echo $filaG[1] . "<br><br>"; 
      echo '<div class="row">';
        echo '<div class="col-md-6">';
          echo "Dirección: <br>";
          echo $filaG[3] . "<br><br>";

          echo "Horarios: <br>";
          echo $filaG[5] . "<br><br>"; 

          echo "Teléfono: <br>";
          echo $filaG[4] . "<br><br>";

          echo "Plato estrella: <br>";
          echo $filaG[7] . "<br><br>";

          echo "Cómo llegar: <br>";
          echo $filaG[6] . "<br><br>";

        echo '</div>';
      echo '</div>';    
      
      mysqli_close($conn);
    }
  ?>