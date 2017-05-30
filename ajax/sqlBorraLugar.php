<?php
	if (($id = filter_input(INPUT_POST, "id", FILTER_UNSAFE_RAW)) !== null){ 
		include("../config/conn.php");
		$sql = "DELETE FROM lugares WHERE id = '$id';";
		$consulta = mysqli_query($conn, $sql);
	
	}
?>