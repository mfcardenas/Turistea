<?php

	function limpia_espacios($cadena){
		$cadena = str_replace(' ', '', $cadena);
		return $cadena;
	}

	function mostarLugares($tipo){
		
    	if($tipo != null){ //Si los parámetros son válidos saca de la base de datos la bandeja tipo
            //$db = @mysqli_connect('localhost', 'ichthuse_paloma', 'Pa123456', 'ichthuse_turistea');
            include("config/conn.php");
            $sql = "SELECT * FROM lugares WHERE Tipo like '$tipo'";
            $consulta = mysqli_query($conn, $sql);
            if($consulta != null){
            	if(mysqli_num_rows($consulta) != 0){
		            $lugares = mysqli_fetch_object($consulta);
		            $cont = 0;
		            while($lugares){
                  $id = $lugares->id;
                  verUnLugar($id, $cont);
			            $lugares = mysqli_fetch_object($consulta);
			            $cont = $cont + 1;
                }
			        }
		        }
		    }
	        mysqli_close($conn);
	}

   function verUnLugar($id, $cont){
    include("config/conn.php");
    $sql = "SELECT * FROM lugares WHERE id = '$id'";
    $consulta = mysqli_query($conn, $sql);
    $lugares = mysqli_fetch_object($consulta);
    $nombreSinEspacios = limpia_espacios(strtolower($lugares->Nombre));
    $imagen = $lugares->Imagen;
    $tipoDeLugar = strtolower($lugares->Tipo);
      if($cont % 2 == 0){
        echo '<div class="row">
                <div class="col-lg-6">
                  <a href="'.$tipoDeLugar. '.php?id=' . $id . '">';

        echo      '<img class="img-circle imagenesLugares" src= "';
        echo        $imagen . '" alt="' . $nombreSinEspacios . '"> </a>                 
                </div>
                <div class="col-lg-6">
                    <a href="'.$tipoDeLugar. '.php?id=' . $id . '"> <h2>'. $lugares->Nombre . '</h2> </a>
                    <p class="subtitulo"> Dirección: </p>' . $lugares->Direccion;?>
                    <?php if(isset($_SESSION['tipoUsuarioLog']) AND $_SESSION['tipoUsuarioLog'] == 'admin'){ ?>
                            <button type="button" onclick="eliminarLugar('<?php echo $lugares->id;?>')">Eliminar</button><?php }
        echo '</div>;
            </div>
              <hr class="featurette-divider">';
      }
      else {
        echo '<div class="row">
                <div class="col-lg-6">
                    <a href="'.$tipoDeLugar. '.php?id=' . $id . '"> <h2>' . $lugares->Nombre . '</h2></a>
                    <p class="subtitulo"> Dirección: </p>' . $lugares->Direccion;?>
                    <?php if(isset($_SESSION['tipoUsuarioLog']) AND $_SESSION['tipoUsuarioLog'] == 'admin'){ ?>
                            <button type="button" onclick="eliminarLugar('<?php echo $lugares->id;?>')">Eliminar</button><?php }
        echo '</div>
                <div class="col-lg-6">
                    <a href="'.$tipoDeLugar. '.php?id=' . $id . '">
                    <img class="img-circle imagenesLugares" src="' . $imagen . '" alt="' . $nombreSinEspacios . '"></a>
                </div>
              </div>
              <hr class="featurette-divider">';
      }
       
  }

    function mostrarVisitas(){
          include("config/conn.php");
          $sql = "SELECT * FROM visitas;";
          $consulta = mysqli_query($conn, $sql);
          $fila = mysqli_fetch_row($consulta);
          $contador = 0;
          while($fila){

              if($contador == 0) echo '<tr>';
              echo '<td class="auxtd1">';
                ?><a role="button" onclick="muestraModalVisita('<?php echo $fila[0]; ?>')"><img src="<?php echo $fila[1]; ?>" alt="<?php echo $fila[0]; ?>" class="img-rounded auximg2 imagenVisitas"></a>
              <a  onclick="muestraModalVisita('<?php echo $fila[0]; ?>')"><p class="tituloVisitas centrado" > <?php echo $fila[0]; ?> <?php echo'</p></a>';
              ?>
              <?php if(isset($_SESSION['tipoUsuarioLog']) AND $_SESSION['tipoUsuarioLog'] == 'admin'){ ?>
                <div class="centrado">
                    <button type="button" onclick="eliminarVisita('<?php echo $fila[0];?>')">Eliminar</button></div><?php }
              echo '</td>';
              $contador = $contador+1;
              if($contador == 4) {
                  echo '</tr>';
                  $contador = 0; 
              }
              $fila = mysqli_fetch_row($consulta);

          }
        while($contador < 4 AND $contador != 0){
            echo '<td></td>';
            $contador = $contador + 1;
        }
        if($contador == 4){     
            echo '</tr>';
        }
          mysqli_close($conn);

    }

    function mostrarProductos(){
        include("config/conn.php");
        $sql = "SELECT * FROM tienda";
        $consulta = mysqli_query($conn, $sql);
        if($consulta != null){
                $contador = 0;
              if(mysqli_num_rows($consulta) != 0){
                $productos = mysqli_fetch_object($consulta);
                while($productos){
                        if($contador == 0){
                            echo '<tr>';
                        }
                        if($contador == 4) {
                            $contador = 0;
                            echo '</tr><tr>';
                        }
                        echo '<td>';
                  $nombreSinEspacios = limpia_espacios(strtolower($productos->Nombre));
                    $url = $nombreSinEspacios . ".php";
                    $imagen = $productos->Imagen;
                        echo '<p>'; 
                        echo $productos->Nombre;
                        echo '</p>';
                        echo '<img src= "'; echo $imagen . '" alt="' . $imagen . '">';
                        echo '<p> Precio: ';
                        echo $productos->Precio;
                        echo ' € </p>';
                        echo '<div class="centrado">';
                        echo '<button type="submit" class="btn btn-default"> Agregar a la cesta </button><br>'; ?>
                         <?php if(isset($_SESSION['tipoUsuarioLog']) AND $_SESSION['tipoUsuarioLog'] == 'admin'){ ?>
                        <button type="button" class="btn btn-default" onclick="eliminarProducto('<?php echo $productos->Nombre;?>')">Eliminar</button><?php }
                         echo '</div>';
                        echo '</td>';
                        $contador = $contador+1;
                        if($contador == 4) {
                             echo '</tr>';
                            $contador = 0;
                        }
                        $productos = mysqli_fetch_object($consulta);
                    }
                    
           }
                while($contador < 4 AND $contador != 0){
                        echo '<td></td>';
                        $contador = $contador + 1;
                }
                if($contador == 4){     
                    echo '</tr>';
                }                  
            }
        mysqli_close($conn);
    }

    function cargarLugar($id){
      include("config/conn.php");
      $sql = "SELECT * FROM lugares WHERE id = '$id'";
      $consulta = mysqli_query($conn, $sql);
      $lugar = mysqli_fetch_object($consulta);
      $nombreSinEspacios = limpia_espacios(strtolower($lugar->Nombre));
      $tipoDeLugar = strtolower($lugar->Tipo) .'s';
      $nombreTipoDeLugar = strtoupper($tipoDeLugar);
      $horarios = explode(" ", $lugar->Horario);

      echo '<h1 class="text-center">' . $lugar->Nombre . '</h1>
              <div class="row">
                <ol class="breadcrumb">
                  <li><a href="index.php">Inicio</a></li>
                  <li><a href="'. $tipoDeLugar . '.php">' .$nombreTipoDeLugar. '</a></li>
                  <li class="active">' . $lugar->Nombre . '</li>
                </ol>
              </div>
              
              <div class="row">
                <nav class="text-center">
                  <img src= "' .$lugar->Imagen . '" alt="'. $nombreSinEspacios . '"><br><br>
                  <p>' . $lugar->Descripcion . '</p><br>
                </nav>
              </div>
              <div class="row">
                <div class="col-lg-1">
                  <p class="subtitulo"> Horario: </p>
                </div>
                <div class="col-lg-2">
                  <table> 
                    <tr>
                      <td> Lunes: </td>';
                      if($horarios[1] == $horarios[2]){
                        echo '<td> Cerrado </td>';
                      }
                      else{
                       echo '<td> ' .$horarios[1]. ' a ' . $horarios[2] .'</td>';
                      }
                    echo '</tr>
                    <tr>
                      <td> Martes: </td>';
                      if($horarios[4] == $horarios[5]){
                        echo '<td> Cerrado </td>';
                      }
                      else{
                        echo '<td> ' .$horarios[4]. ' a ' .$horarios[5] . '</td>';
                      }
                    echo '</tr>
                    <tr>
                      <td> Miércoles: </td>';
                      if($horarios[7] == $horarios[8]){
                        echo '<td> Cerrado </td>';
                      }
                      else{
                        echo '<td> ' .$horarios[7]. ' a ' .$horarios[8] . '</td>';
                      }
                    echo '</tr>
                    <tr>
                      <td> Jueves: </td>';
                      if($horarios[10] == $horarios[11]){
                        echo '<td> Cerrado </td>';
                      }
                      else{
                        echo '<td> ' .$horarios[10]. ' a ' .$horarios[11] . '</td>';
                      }
                      echo '</tr>
                    <tr>
                      <td> Viernes: </td>';
                      if($horarios[13] == $horarios[14]){
                        echo '<td> Cerrado </td>';
                      }
                      else{
                        echo '<td> ' .$horarios[4]. ' a ' .$horarios[5] . '</td>';
                      }
                      echo '</tr>
                    <tr>
                      <td> Sábado: </td>';
                      if($horarios[16] == $horarios[17]){
                        echo '<td> Cerrado </td>';
                      }
                      else{
                        echo '<td> ' .$horarios[16]. ' a ' .$horarios[17] . '</td>';
                      }
                      echo '</tr>
                    <tr>
                      <td> Domingo: </td>';
                      if($horarios[19] == $horarios[20]){
                        echo '<td> Cerrado </td>';
                      }
                      else{
                        echo '<td> ' .$horarios[19]. ' a ' .$horarios[20] . '</td>';
                      }
                    echo '</tr>
                  </table>
                </div>
                <br>
                <div class="col-lg-1">
                  <p class ="subtitulo"> Tarifas: </p>
                </div>
                <div class="col-lg-4">
                  ' . nl2br($lugar->Precio) . '
                </div>
                <div class="col-lg-1">
                  <p class="subtitulo"> Dirección: </p>
                </div>
                <div class="col-lg-3">
                  <p> ' . $lugar->Direccion . ' </p>
                </div>
              </div>
              <br><br>
              <div class="row">
                <div class="col-lg-2">
                  <p class ="subtitulo"> Cómo llegar: </p>
                </div>
                <div class="col-lg-5">
                  <p> ' . nl2br($lugar->Llegada). '</p>
                </div>
                <div class="col-lg-2">
                  <p class="subtitulo"> Teléfono de contacto: </p>
                </div>
                <div class="col-lg-3">
                  <p> Para más información: ' . $lugar->Telefono . '</p>
                </div>
              </div>
              <br><br><br><br>              
              <hr class="featurette-divider">';
        mysqli_close($conn);
    } 

    function mostrarResultados($tipo, $busqueda){
      include("config/conn.php");
      $sql = "SELECT id FROM lugares WHERE Tipo = '$tipo' AND (Nombre LIKE '%" . $busqueda ."%' OR Imagen LIKE '%" . $busqueda ."%' OR Direccion LIKE '%" . $busqueda ."%' OR Descripcion LIKE '%" . $busqueda ."%')";
      $consulta = mysqli_query($conn, $sql);
      if($consulta != null){
        $resultados = mysqli_fetch_object($consulta);
        $cont = 0;
        while($resultados){
          verUnLugar($resultados->id, $cont);
          $cont = $cont + 1;
          $resultados = mysqli_fetch_object($consulta);
        }
      }
      mysqli_close($conn);
    }

 function mostrarGaleria(){
      
      include("config/conn.php");
      $sql = "SELECT * FROM galeria;";
      $consulta = mysqli_query($conn, $sql);
      $fila = mysqli_fetch_row($consulta);
      $contador = 0;
      while($fila){

          if($contador == 0) echo '<tr>';
          echo '<td class="auxtd1">';
            ?><a role="button" onclick="muestraModalGaleria('<?php echo $fila[0];?>')"><img src="<?php echo $fila[2]; ?>" alt="<?php echo $fila[1]; ?>" class="img-rounded auximg2 imagenGaleria"></a>
          <?php if(isset($_SESSION['tipoUsuarioLog']) AND $_SESSION['tipoUsuarioLog'] == 'admin'){ ?>
                  <div class="centrado"><button type="button" class="btn btn-default " onclick="eliminarExperiencia('<?php echo $fila[0];?>')">Eliminar</button></div>
          <?php }
          echo '</td>';
          $contador = $contador+1;
          if($contador == 4) {
              echo '</tr><tr>';
              $contador = 0; 
          }
          $fila = mysqli_fetch_row($consulta);

      }

      mysqli_close($conn);

    }
?>
