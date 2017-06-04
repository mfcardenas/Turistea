<?php
	include("../config/conn.php");
	if (($id = filter_input(INPUT_POST, "id", FILTER_UNSAFE_RAW)) !== null){ //si se ha enviado el data 'grupo'
		$sql = "DELETE FROM rutas WHERE ID = '$id';";
		$consulta = mysqli_query($conn, $sql);
	}
?>