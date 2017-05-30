<?php
	if (($id = filter_input(INPUT_POST, "id", FILTER_UNSAFE_RAW)) !== null){ //si se ha enviado el data 'grupo'
		include("../config/conn.php");
		//$db = mysqli_connect('localhost','ichthuse_paloma','Pa123456','ichthuse_turistea');
		if (!$conn) {
			exit('Error en la conexión');
		}
		$sql = "DELETE FROM noticias WHERE ID = '$id';";
		$consulta = mysqli_query($conn, $sql);
	
	}
?>