<?php
	include("../config/conn.php");
	if (($id = filter_input(INPUT_POST, "id", FILTER_UNSAFE_RAW)) !== null){ //si se ha enviado el data 'grupo'
		//$db = mysqli_connect('localhost','ichthuse_paloma','Pa123456','ichthuse_turistea');
		if (!$conn) {
			exit('Error en la conexión');
		}
		$sql = "DELETE FROM rutas WHERE ID = '$id';";
		$consulta = mysqli_query($conn, $sql);
	}
?>