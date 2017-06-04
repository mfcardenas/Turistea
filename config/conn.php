<?php
	$conn = mysqli_connect('localhost', 'ichthuse_paloma', 'Pa123456', 'ichthuse_turistea'); 
	if(!$conn){
		echo '<meta http-equiv="Refresh" content="0.1;url=http://turistea.ichthus.es/errorbd.php">';
	}
?>