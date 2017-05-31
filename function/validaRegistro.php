<!DOCTYPE html>
<html>
	<head>
		<title>Registro</title>
	</head>
	<body>
		<?php
			include("/../config/conn.php");
				//comprobamos que estan marcados todos los campos
			if(isset($_POST['inputEmail']) AND isset($_POST['inputPassword']) AND isset($_POST['inputPassword2'])  AND isset($_POST['inputUsu'])){
					//comprobamos que no hay ningún campo vacío
				if($_POST['inputEmail'] != "" AND $_POST['inputPassword'] != "" AND $_POST['inputPassword2'] != "" AND $_POST['inputUsu'] != "" AND $_POST['inputNombre'] != "") {
					
					$email = htmlspecialchars(trim(strip_tags($_POST['inputEmail'])));
					$cont1 = htmlspecialchars(trim(strip_tags($_POST['inputPassword'])));
					$cont2 = htmlspecialchars(trim(strip_tags($_POST['inputPassword2'])));
					$nombre = htmlspecialchars(trim(strip_tags($_REQUEST["inputNombre"])));
					$usu = htmlspecialchars(trim(strip_tags($_REQUEST["inputUsu"])));

					if($cont1 != $cont2){													//compruebo que las contraseñas son iguales
						header('Location: ../index_registro.php?errorusuario=cont');
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
							$consulta = mysqli_query($conn, $sql);
							$fila= mysqli_fetch_row($consulta);
							
							
							if(!$fila){			
								//$contHash = password_hash($cont1, PASSWORD_BCRYPT);
								$sql1 = "INSERT INTO usuarios VALUES ('$nombre','$usu','$cont1','$email','normal');";
								$consulta1 = mysqli_query($conn, $sql1);
								
								mysqli_close($conn);
								session_start(); 
								$_SESSION["autentificado"]= "SI"; //varibale de sesion para saber si el suario está autenticado
								$_SESSION["usuLogeado"]= $usu; //variable de sesion que contiene el id del usuario logeado
								$_SESSION["tipoUsuarioLog"] = "normal"; //variable de sesion que tiene el tipo del usuario logeado(para saber si es admin o no)
								header('Location: ../index.php');
								//header('Location: ../index_login.php');
								
							}else{
								mysqli_close($conn);
								header('Location: ../index_registro.php?errorusuario=si');
							
							}
						}
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
