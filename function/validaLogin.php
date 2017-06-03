<!DOCTYPE html>
<html>
	<head>
		<title>Login</title>
	</head>
	<body>
		<?php
			//$db = mysqli_connect('localhost', '', 'Pa123456', 'ichthuse_turistea');
			include("../config/conn.php");
			var_dump($conn);
			//Compruebo que todos los campos esten marcados
			if(isset($_POST['inputUsuario']) AND isset($_POST['inputPassword'])){
				//Compruebo que no hay ningún campo vacio
				if($_POST['inputUsuario'] != "" AND $_POST['inputPassword'] != "") {
					
					$usu = htmlspecialchars(trim(strip_tags($_POST['inputUsuario'])));
					$cont = htmlspecialchars(trim(strip_tags($_POST['inputPassword'])));
					$sql = "SELECT Contrasenia, Tipo FROM usuarios WHERE Id_usuario = '$usu';";
					$consulta = mysqli_query($conn, $sql);
					$fila = mysqli_fetch_row($consulta);
					//$contHash = password_hash($cont, PASSWORD_BCRYPT);

					//Compruebo que el email introducido está asociado con la contraseña indicada
					$contVerificada = password_verify($cont, $fila[0]);
					if($contVerificada){
						mysqli_close($conn);
						session_start(); 
						$_SESSION["autentificado"]= "SI"; //varibale de sesion para saber si el suario está autenticado
						$_SESSION["usuLogeado"]= $usu; //variable de sesion que contiene el id del usuario logeado
						$_SESSION["tipoUsuarioLog"] = $fila[1]; //variable de sesion que tiene el tipo del usuario logeado(para saber si es admin o no)
						header('Location: ../index.php');
						
					}else{
						mysqli_close($conn);
						header('Location: ../index_login.php?errorusuario=si');
					
					}
				}
				else{
					mysqli_close($conn);
					header('Location: ../index_login.php?errorcampos=si');
				}
			}
			else{
				mysqli_close($conn);
				header('Location: ../index_login.php?errorcampos=si');
			}

			
			
		?>
	</body>
</html>
