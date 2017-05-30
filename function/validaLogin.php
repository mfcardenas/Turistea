<!DOCTYPE html>
<html>
	<head>
		<title>Login</title>
	</head>
	<body>
		<?php
			//$db = mysqli_connect('localhost', '', 'Pa123456', 'ichthuse_turistea');
			include("/../config/conn.php");
			//Compruebo que todos los campos esten marcados
			if(isset($_POST['inputEmail']) AND isset($_POST['inputPassword'])){
				//Compruebo que no hay ningún campo vacio
				if($_POST['inputEmail'] != "" AND $_POST['inputPassword'] != "") {
					
					$usuEmail = $_POST['inputEmail'];
					$cont = $_POST['inputPassword'];
					$sql = "SELECT Contrasenia, Id_usuario, Tipo FROM usuarios WHERE Email = '$usuEmail';";
					$consulta = mysqli_query($conn, $sql);
					$fila = mysqli_fetch_row($consulta);
					//$contHash = password_hash($cont, PASSWORD_BCRYPT);

					//Compruebo que el email introducido está asociado con la contraseña indicada
					if($fila[0] == $cont){
						mysqli_close($conn);
						session_start(); 
						$_SESSION["autentificado"]= "SI"; //varibale de sesion para saber si el suario está autenticado
						$_SESSION["usuLogeado"]= $fila[1]; //variable de sesion que contiene el id del usuario logeado
						$_SESSION["tipoUsuarioLog"] = $fila[2]; //variable de sesion que tiene el tipo del usuario logeado(para saber si es admin o no)
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
