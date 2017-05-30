<?php
	$conn = @mysqli_connect('localhost', 'root', '', 'turistea'); 
	if(!$conn){
		exit("Error en la conexión con la base de datos");
	}
?>