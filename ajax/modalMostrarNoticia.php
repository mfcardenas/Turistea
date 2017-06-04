
  <?php
    if (($id = filter_input(INPUT_POST, "id", FILTER_UNSAFE_RAW)) !== null){ //si se ha enviado el data 'grupo'
      include("../config/conn.php");
      $sql = "SELECT Titulo, Subtitulo, Descripcion, Fecha, Fuente, Imagen FROM noticias WHERE ID = '$id';";
      $consulta = mysqli_query($conn, $sql);
      $fila = mysqli_fetch_row($consulta);

      ?>

      <div class="row">
        <div class="col-sd-8 col-md-8">
            <img id="image-modal" class="img-responsive" src="<?php echo $fila[5]; ?>"/>
        </div>
        <div class="col-sd-4 col-md-4">
            <div class="row">
                <div class="col-sd-11 col-md-11">
                    <div class="page-header default">
                        <h1><?php echo $fila[0]; ?></h1>
                        <h2>- <?php echo $fila[1]; ?></h2>

                    </div>
                    <div class="comments-list pre-scrollable default">
                        <div class="media">
                           <p class="pull-right"><small><?php echo $fila[3]; ?></small></p>
                            
                           <div class="media-body">
                              <p class="media-heading user_name subtituloN"><?php echo $fila[2]; ?></p>
                              <p><small>Fuente: <?php echo $fila[4]; ?></small></p>
                           </div>

                        </div>                   
                    </div>
                </div>
            </div>
        </div>
      </div>

      <?php 
      
      mysqli_close($conn);
    }
  ?>

 
