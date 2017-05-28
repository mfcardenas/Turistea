<?php
	if (($id = filter_input(INPUT_POST, "id", FILTER_UNSAFE_RAW)) !== null){ //si se ha enviado el data 'grupo'
		$db = mysqli_connect('localhost','root','','turistea');
		if (!$db) {
			exit('Error en la conexión');
		}
		$sql = "DELETE FROM noticias WHERE ID = '$id';";
		$consulta = mysqli_query($db, $sql);
	
	}
?>