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

