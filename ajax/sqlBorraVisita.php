<?php
	if (($titulo = filter_input(INPUT_POST, "titulo", FILTER_UNSAFE_RAW)) !== null){ //si se ha enviado el data 'grupo'
		$db = mysqli_connect('localhost','root','','turistea');
		if (!$db) {
			exit('Error en la conexión');
		}
		$sql = "DELETE FROM visitas WHERE nombre = '$titulo';";
		$consulta = mysqli_query($db, $sql);
	
	}
?>