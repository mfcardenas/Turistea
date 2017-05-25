<?php

	function limpia_espacios($cadena){
		$cadena = str_replace(' ', '', $cadena);
		return $cadena;
	}

	function mostarLugares($tipo){
		
    	if($tipo != null){ //Si los parámetros son válidos saca de la base de datos la bandeja tipo
            $db = @mysqli_connect('localhost', 'root', '', 'turistea');

            $sql = "SELECT * FROM lugares WHERE Tipo like '$tipo'";
            $consulta = mysqli_query($db, $sql);
            if($consulta != null){
            	if(mysqli_num_rows($consulta) != 0){
		            $lugares = mysqli_fetch_object($consulta);
		            $cont = 0;
		            while($lugares){

		            	$nombreSinEspacios = limpia_espacios(strtolower($lugares->Nombre));
		                $url = $nombreSinEspacios . ".php";
		                $imagen = $lugares->Imagen;

		            	if($cont % 2 == 0){
			            	echo '<div class="row">
		                			<div class="col-lg-6">
		                   				<a href="';

		                   	echo $url . '"> 
		                   		<img class="img-circle" src= "';

		                   	echo $imagen . '" alt="' . $nombreSinEspacios . '"> </a>                 
		                		</div>
		                		<div class="col-lg-6">
									<a href="'. $url . '"> <h2>' . $lugares->Nombre . '</h2> </a>
									<p class="subtitulo"> Dirección: </p>' . $lugares->Direccion . '
							    </div>
		            		</div>
		            		<hr class="featurette-divider">';
			            }
			            else {
			            	echo '<div class="row">
			            			<div class="col-lg-6">
			            				<a href="' . $url . '"> <h2>' . $lugares->Nombre . '</h2></a>
			            				<p class="subtitulo"> Dirección: </p>' . $lugares->Direccion . '
			            			</div>
			            			<div class="col-lg-6">
			            				<a href="' .$url. '">
			            				<img class="img-circle" src="' . $imagen . '" alt="' . $nombreSinEspacios . '"></a>
			            			</div>
			            		</div>';
			            }
			            $lugares = mysqli_fetch_object($consulta);
			            $cont = $cont + 1;
			        }
		        }
		    }
	        @mysql_close($db);
      	}
	}
?>
  <?php

    function mostrarVisitas(){
      
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

    }


    /*function mostrarFormularioProducto(){
        $db = mysqli_connect('localhost','root','','turistea');
        if(!$db){
         exit('Error en la conexion.');
        }
        echo '<form>
        <ul class="nav nav-pills" role="tablist">
            <li style="width: 150px" > Tipo: </li>
            <li style="width: 100px"> Ordenar por: </li>
            <li style="width: 80px"> Pedido: </li>
        </ul>
        <ul class="nav nav-pills" role="tablist">
            <li> 
                <select class="form-control" id="sel1" style="width: 150px">
                        <option> - Cualquiera - </option>
                        <option> Parque temático</option>
                        <option> Museo </option>
                        <option> Teatro</option>
                        <option> Estadios </option>
                        <option> Cine </option>
                </select>
            </li>
            <li> 
                <select class="form-control" id="sel1" style="width: 100px">
                        <option> Título </option>
                        <option> Precio </option>
                </select> 
            </li>
            <li> 
                <select class="form-control" id="sel1" style="width: 80px">
                        <option> Desc </option>
                        <option> Asc </option>
                </select>
            </li>
            <li><button type="submit" class="btn btn-default"> Aplicar </button></li>
        </ul>
    </form>';
        
          mysqli_close($db);
    }*/

    function mostrarProductos(){
        $db = mysqli_connect('localhost','root','','turistea');
        if(!$db){
            exit('Error en la conexion.');
        }
        $sql = "SELECT * FROM tienda";
        $consulta = mysqli_query($db, $sql);
        if($consulta != null){
            	if(mysqli_num_rows($consulta) != 0){
		            $productos = mysqli_fetch_object($consulta);
		            $contador = 0;
                    echo '<tr>';
		            while($productos){
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
                        echo '<img src= "'; echo $imagen . '" alt="' . $nombreSinEspacios . '">';
                        echo '<p> Precio: ';
                        echo $productos->Precio;
                        echo ' € </p>';
                        echo '<button type="submit" class="btn btn-default"> Agregar a la cesta </button>';
                        echo '</td>';
                        $contador = $contador + 1;
                       
			            $productos = mysqli_fetch_object($consulta);
			        }
                    echo '<tr>';
		        }   
            
  
                
        }
        mysqli_close($db);
    }
?>
