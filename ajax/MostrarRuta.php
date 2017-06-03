<?php
  if (($id = filter_input(INPUT_POST, "id", FILTER_UNSAFE_RAW)) !== null){ //si se ha enviado el data 'grupo'
      include("../config/conn.php");
      //$db = mysqli_connect('localhost','ichthuse_paloma','Pa123456','ichthuse_turistea');
      $sql = "SELECT Id, Nombre, Descripcion, Mapa, Duracion, Punto_partida, Punto_destino, Parrafo1, Foto1, Parrafo2, Foto2, Parrafo3, Foto3, Parrafo4, Foto4, Parrafo5, Foto5 FROM rutas WHERE Id = '$id';";
      $consulta = mysqli_query($conn, $sql);
      $fila = mysqli_fetch_row($consulta);
      ?>


        
        <div class="container">
          <div class="contenido"> 
            <h1 class="text-center"><a href="Rutas.php">Volver a las Rutas turísticas</a></h1>
              <div class="row">
                <!--Ruta donde te encuentras -->
                <ol class="breadcrumb">
              <li><a href="index.php">Inicio</a></li>
              <li><a href="Rutas.php">Rutas turísticas</a></li>
              <li class="active"><?php echo $fila[1]; ?></li>
          </ol>
        </div>

        <!--                         Contenido de la página                         -->

        <div id="rutas"> <?php
          echo '</div>';
          echo '<div class="row">';
          echo '<nav class="text-center">';
          echo '<h1>' .$fila[1]. '</h1>';
          //Parrafo1 y Foto1
          echo '<p>' .$fila[7]. '</p>'; 
          ?>
          <img src= "<?php echo $fila[8]; ?>" alt="<?php echo $fila[1]; ?>" class="img-rounded" width="500" height="490"> 
          <br>
          <br>
            
          <?php
          //Parrafo2 y Foto2
          if ($fila[9] != null) {
          echo '<p>' .$fila[9]. '</p>'; 
          }
          if ($fila[10] != null) {?>
          <img src= "<?php echo $fila[10]; ?>" alt="<?php echo $fila[1]; ?>" class="img-rounded" width="500" height="490">
          <br>
          <br>
          <?php }
          //Parrafo3 y Foto3
          if ($fila[11] != null) {
          echo '<p>' .$fila[11]. '</p>'; 
          }
          if ($fila[12] != null) {?>
          <img src= "<?php echo $fila[12]; ?>" alt="<?php echo $fila[1]; ?>" class="img-rounded" width="500" height="490">
          <br>
          <br>  
          <?php }
          //Parrafo4 y Foto4
          if ($fila[13] != null) {
          echo '<p>' .$fila[13]. '</p>'; 
          }
          if ($fila[14] != null) {?>
          <img src= "<?php echo $fila[14]; ?>" alt="<?php echo $fila[1]; ?>" class="img-rounded" width="500" height="490">
          <br>
          <br>
          <?php }
          //Parrafo5 y Foto5
          if ($fila[15] != null) {
          echo '<p>' .$fila[15]. '</p>'; 
          }
          if ($fila[16] != null) {?>
          <img src= "<?php echo $fila[16]; ?>" alt="<?php echo $fila[1]; ?>" class="img-rounded" width="500" height="490">
          <br>
          <br
          <?php  }
          echo '</nav>';  
          echo '<hr class="featurette-divider">'; ?>

        </div>


	     <?php
      mysqli_close($conn);
  }
?>
