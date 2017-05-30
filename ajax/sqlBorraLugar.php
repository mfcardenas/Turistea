<?php
	if (($id = filter_input(INPUT_POST, "id", FILTER_UNSAFE_RAW)) !== null){ 
		$db = mysqli_connect('localhost','root','','turistea');
		if (!$db) {
			exit('Error en la conexión');
		}
		$sql = "DELETE FROM lugares WHERE id = '$id';";
		$consulta = mysqli_query($db, $sql);
	
	}
?>