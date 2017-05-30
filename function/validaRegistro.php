<!DOCTYPE html>
<html>
	<head>
		<title>Registro</title>
	</head>
	<body>
		<?php
			$db = mysqli_connect('localhost', 'ichthuse_paloma', 'Pa123456', 'ichthuse_turistea');
			//include("config/conn.php");
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
					$nombre = htmlspecialchars(trim(strip_tags($_REQUEST["inputNombre"])));
					$usu = htmlspecialchars(trim(strip_tags($_REQUEST["inputUsu"])));

					if($cont1 != $cont2){													//compruebo que las contraseñas son iguales
						header('Location: index_registro.php?errorusuario=cont');
					}
					else{
						$i = 0;
						$noEspaciosN = false;
						while($i<count($nombre) AND !$noEspaciosN){ 
						    if($nombre[$i] == ""){
						    	$noEspaciosN = true;
						    }
						    $i++;
						}																	//comprobamos que el nombre y el usuario no tienen espacios
						$i = 0;
						$noEspaciosU = false;
						while($i<count($usu) AND !$noEspaciosU){ 
						    if($usu[$i] == ""){
						    	$noEspaciosU = true;
						    }
						    $i++;
						}

						if($noEspaciosU || $noEspaciosN){
							header('Location: index_registro.php?errorusuario=espacios');
						}
						else{

							$sql = "SELECT Id_usuario FROM usuarios WHERE Id_usuario = '$usu';";      //compruebo que no existe ese usuario
							$consulta = mysqli_query($db, $sql);
							$fila= mysqli_fetch_row($consulta);
							
							
							if(!$fila){			
								//$contHash = password_hash($cont1, PASSWORD_BCRYPT);
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
