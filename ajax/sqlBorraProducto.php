<?php
	if (($nombre = filter_input(INPUT_POST, "nombre", FILTER_UNSAFE_RAW)) !== null){ //si se ha enviado el data 'grupo'
		include("../config/conn.php");
		$sql = "DELETE FROM tienda WHERE Nombre = '$nombre';";
		$consulta = mysqli_query($conn, $sql);
	
	}
?>