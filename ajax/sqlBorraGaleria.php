<?php
	if (($id = filter_input(INPUT_POST, "id", FILTER_UNSAFE_RAW)) !== null){ //si se ha enviado el data 'grupo'
		include("../config/conn.php");
		$sql = "DELETE FROM galeria WHERE ID = '$id';";
		$consulta = mysqli_query($conn, $sql);
	
	}
?>