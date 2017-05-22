<?php
   
      $db = mysqli_connect('localhost','root','','turistea');
      if(!$db){
        exit('Error en la conexion.');
      }
      $sql = "SELECT * FROM visitas;";
      $consulta = mysqli_query($db, $sql);
      $fila = mysqli_fetch_row($consulta);
      $contador = 0;
      while($fila){
    
          if($contador == 0) echo '<tr>';
          echo '<td class="auxtd1">';
?><a role="button" onclick="muestraModalVisita('<?php echo $fila[0]; ?>')"><img src="<?php echo $fila[1]; ?>" alt="<?php echo $fila[0]; ?>" class="img-rounded auximg2" width="100%" height="180px"></a>
          <a  onclick="muestraModalVisita('<?php echo $fila[0]; ?>')"><p class="tituloVisitas centrado" > <?php echo $fila[0]; ?> <?php echo'</p></a>';
          echo '</td>';
          $contador = $contador+1;
          if($contador == 4) {
              echo '</tr><tr>';
              $contador = 0; 
          }
          $fila = mysqli_fetch_row($consulta);
        
      }
      
      mysqli_close($db);
    
  ?>

            