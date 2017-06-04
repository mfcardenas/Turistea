
  <?php
    if (($titulo = filter_input(INPUT_POST, "titulo", FILTER_UNSAFE_RAW)) !== null){ //si se ha enviado el data 'grupo'

      include("../config/conn.php");
      //$db = mysqli_connect('localhost','ichthuse_paloma','Pa123456','ichthuse_turistea');
      $sql = "SELECT * FROM visitas WHERE Nombre = '$titulo';";
      $consulta = mysqli_query($conn, $sql);
      $fila = mysqli_fetch_row($consulta);
      
      ?>

      <div class="row">
        <div class="col-sd-8 col-md-8">
            <img id="image-modal" class="img-responsive" src="<?php echo $fila[1]; ?>" alt="<?php echo $fila[0]; ?>">
        </div>
        <div class="col-sd-4 col-md-4">
            <div class="row">
                <div class="col-sd-11 col-md-11">
                    <div class="page-header default">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">Cerrar</button>
                        <br>
                        <h4><?php echo $fila[0]; ?></h4>
                    </div>
                    <div class="comments-list pre-scrollable default">
                        <div class="media">                            
                           <div class="media-body">
                              <p class="subtituloN"><?php echo $fila[2]; ?></p>
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

