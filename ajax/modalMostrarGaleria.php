
  <?php
    if (($id = filter_input(INPUT_POST, "id", FILTER_UNSAFE_RAW)) !== null){ //si se ha enviado el data 'grupo'

      include("../config/conn.php");
      
      $sql = "SELECT * FROM galeria WHERE id = '$id';";
      $consulta = mysqli_query($conn, $sql);
      $fila = mysqli_fetch_row($consulta);

      ?>

      <div class="row">
        <div class="col-sd-8 col-md-8">
            <img id="image-modal" class="img-responsive" src="<?php echo $fila[2]; ?>" alt="<?php echo $fila[1]; ?>"/>
        </div>
        <div class="col-sd-4 col-md-4">
            <div class="row">
                <div class="col-sd-11 col-md-11">
                    <div class="page-header default">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">Cerrar</button>
                        <br>
                        <h4><?php echo $fila[1]; ?></h4>                                                
                    </div>
                    <div class="comments-list pre-scrollable default">
                        <div class="media">
                           <p class="pull-right"><small>Autor: <?php echo $fila[4]; ?></small></p>
                            <br>
                           <div class="media-body">
                              <p class="media-heading user_name">En: <?php echo $fila[3]; ?></p>
                              <p class="subtituloN"><?php echo $fila[5]; ?></p>
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
