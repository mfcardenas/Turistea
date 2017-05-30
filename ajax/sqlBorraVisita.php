<?php
	if (($titulo = filter_input(INPUT_POST, "titulo", FILTER_UNSAFE_RAW)) !== null){ //si se ha enviado el data 'grupo'
		include("../config/conn.php");
		$sql = "DELETE FROM visitas WHERE nombre = '$titulo';";
		$consulta = mysqli_query($conn, $sql);
	
	}
?>