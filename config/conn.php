<?php
	$conn = @mysqli_connect('localhost', 'ichthuse_paloma', 'Pa123456', 'ichthuse_turistea'); 
	if($conn == NULL){
		exit("Error en la conexión con la base de datos");
	}
?>