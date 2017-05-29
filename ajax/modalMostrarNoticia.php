
  <?php
    if (($id = filter_input(INPUT_POST, "id", FILTER_UNSAFE_RAW)) !== null){ //si se ha enviado el data 'grupo'

      $db = mysqli_connect('localhost','root','','turistea');
      if(!$db){
        exit('Error en la conexion.');
      }
      $sql = "SELECT Titulo, Subtitulo, Descripcion, Fecha, Fuente, Imagen FROM noticias WHERE ID = '$id';";
      $consulta = mysqli_query($db, $sql);
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
                      <small class="pull-right"><?php echo $fila[3]; ?></small>
                      <br>
                      <h4><?php echo $fila[0]; ?> </h4>
                  </div>
                  <div class="comments-list pre-scrollable default">
                      <div class="media">
                          <div class="media-body ">

                              <h5 class="media-heading user_name"><?php echo $fila[1]; ?></h5>
                              <br>

                              <p class="subtituloN"><?php echo $fila[2]; ?></p>

                              <br>
                              <p><small>Fuente de la noticia: <?php echo $fila[4]; ?></small></p>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
        </div>
      </div>

      <?php 
      
      mysqli_close($db);
    }
  ?>



        
 
