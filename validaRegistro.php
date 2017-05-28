<!DOCTYPE html>
<html>
	<head>
		<title>Registro</title>
	</head>
	<body>
		<?php
			$db = mysqli_connect('localhost', 'root', '', 'turistea');
			if(!$db){
				exit('Fallo en la conexion');
			}
				//comprobamos que estan marcados todos los campos
			if(isset($_POST['inputEmail']) AND isset($_POST['inputPassword']) AND isset($_POST['inputPassword2'])  AND isset($_POST['inputUsu'])){
					//comprobamos que no hay ningún campo vacío
				if($_POST['inputEmail'] != "" AND $_POST['inputPassword'] != "" AND $_POST['inputPassword2'] != "" AND $_POST['inputUsu'] != "" AND $_POST['inputNombre'] != "") {
					
					$email = $_POST['inputEmail'];
					$cont1 = $_POST['inputPassword'];
					$cont2 = $_POST['inputPassword2'];
					$nombre = $_POST['inputNombre'];
					$usu = $_POST['inputUsu'];
					
					if($cont1 != $cont2){													//compruebo que las contraseñas son iguales
						header('Location: index_registro.php?errorusuario=cont');
					}
					else{
						$sql = "SELECT usuario FROM usuarios WHERE usuario = '$usu';";      //compruebo que no existe ese usuario
						$consulta = mysqli_query($db, $sql);
						$fila= mysqli_fetch_row($consulta);
						
						
						if(!$fila){															
							$sql1 = "INSERT INTO usuarios VALUES ('$nombre','$usu','$cont1','$email','normal');";
							$consulta1 = mysqli_query($db, $sql1);
							
							mysqli_close($db);
							header('Location: index_login.php');
							
						}else{
							mysqli_close($db);
							header('Location: index_registro.php?errorusuario=si');
						
						}
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
