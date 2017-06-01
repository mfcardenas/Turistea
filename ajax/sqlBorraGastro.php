<?php
	if (($nombreEG = filter_input(INPUT_POST, "nombre", FILTER_UNSAFE_RAW)) !== null){ //si se ha enviado el data 'grupo'
		include("../config/conn.php");
		$sqlEG = "DELETE FROM gastronomia WHERE Nombre = '$nombreEG';";
		$consultaEG = mysqli_query($conn, $sqlEG);
	
	}
?>