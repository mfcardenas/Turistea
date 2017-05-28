  <?php
   // if (($id = $_GET['id'] >0){ //si se ha enviado el data 'grupo'
    $id=$_GET['id'];
      $db = mysqli_connect('localhost','root','','turistea');
      if(!$db){
        exit('Error en la conexion.');
      }
      $sql = "SELECT Id, Nombre, Descripcion, Mapa, Duracion, Punto_partida, Punto_destino, Parrafo1, Foto1, Parrafo2, Foto2, Parrafo3, Foto3, Parrafo4, Foto4, Parrafo5, Foto5 FROM rutas WHERE Id = '$id';";
      $consulta = mysqli_query($db, $sql);
      $fila = mysqli_fetch_row($consulta);
              
             echo'<div class="container">';
             echo '<div class="contenido">';
             echo '<h1 class="text-center">' .$fila[0]. '</h1>';
	         echo '<div class="row">';
	         echo '<ol class="breadcrumb">';
             echo '<li><a href="index.php"> Inicio </a></li>';
			 echo '<li><a href="Rutas.php">Rutas turísticas</a></li>';
			 echo '<li class="active">' .$fila[1]. '</li>';
			 echo '</ol>';
	         echo '</div>';
	         echo '<div class="row">';
	         echo '<nav class="text-center">';
             $i=7;
             while (!is_null($fila[$i]) and ($i < 17)) {
                echo '<p>' .$fila[$i]. '</p>';  
                if (!is_null($fila[$i+1])) { ?>
                  <img src= "<?php echo $fila[$i+1]; ?>" alt="<?php echo $fila[1]; ?>" class="img-rounded"> <br><br>
                    <?php
                }
                 $i=$i+2;

             
            }
                  
            echo '</nav>';  
	        echo '<hr class="featurette-divider">';
            mysqli_close($db);
   // }
  ?>

