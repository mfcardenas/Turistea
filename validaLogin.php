<!DOCTYPE html>
<html>
	<head>
		<title>Login</title>
	</head>
	<body>
		<?php
			$db = mysqli_connect('localhost', 'root', '', 'turistea');
			if(!$db){
				exit('Fallo en la conexion');
			}
			//Compruebo que todos los campos esten marcados
			if(isset($_POST['inputEmail']) AND isset($_POST['inputPassword'])){
				//Compruebo que no hay ningún campo vacio
				if($_POST['inputEmail'] != "" AND $_POST['inputPassword'] != "") {
					
					$usuEmail = $_POST['inputEmail'];
					$cont = $_POST['inputPassword'];
					$sql = "SELECT Contrasenia, Id_usuario, Tipo FROM usuarios WHERE Email = '$usuEmail';";
					$consulta = mysqli_query($db, $sql);
					$fila= mysqli_fetch_row($consulta);
					
					//Compruebo que el email introducido está asociado con la contraseña indicada
					if($fila[0] == $cont){
						mysqli_close($db);
						session_start(); 
						echo $usuEmail;
						echo $cont;
						$_SESSION["autentificado"]= "SI"; //varibale de sesion para saber si el suario está autenticado
						$_SESSION["usuLogeado"]= $fila[1]; //variable de sesion que contiene el id del usuario logeado
						$_SESSION["tipoUsuarioLog"] = $fila[2]; //variable de sesion que tiene el tipo del usuario logeado(para saber si es admin o no)
						header('Location: ../Turistea');
						
					}else{
						mysqli_close($db);
						header('Location: index_login.php?errorusuario=si');
					
					}
				}
				else{
					mysqli_close($db);
					header('Location: index_login.php?errorcampos=si');
				}
			}
			else{
				mysqli_close($db);
				header('Location: index_login.php?errorcampos=si');
			}

			
			
		?>
	</body>
</html>
