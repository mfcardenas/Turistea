<!DOCTYPE html>
<html>
	<head>
		<title>Logout</title>
	</head>
	<body>
		<?php
			session_start(); 
				$_SESSION["autentificado"]= "NO"; 
				$_SESSION["usuLogeado"] = "";
				$_SESSION["tipoUsuarioLog"] = "";
			header('Location: ../index.php');		
		?>
	</body>
</html>