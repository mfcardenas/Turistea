<!DOCTYPE html>
<html>
	<head>
		<title>Compartir experiencia</title>
	</head>
	<body>
		<?php
			
			include("/../config/conn.php");
			if(isset($_POST['experiencia'])){
				
				if($_POST['experiencia'] != "") {

					$target_dir = "imgGaleria/";  										//ruta
					$target_file = $target_dir . basename($_FILES["imagenexperiencia"]["name"]);			//ruta completa (path + nombre de la img)
					$file_name = basename($_FILES["imagenexperiencia"]["name"]);
					$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);						//tipo de la img
					
					// Comprobamos que es una img nueva y si es una img falsa
					
					$check = getimagesize($_FILES["imagenexperiencia"]["tmp_name"]);
					if($check !== false AND !file_exists($target_file) AND $_FILES["imagenexperiencia"]["size"] <= 500000){

						$titulo = htmlspecialchars(trim(strip_tags($_POST['experiencia'])));
						$lugar = htmlspecialchars(trim(strip_tags($_POST['lugarExp'])));
						$anecdota = htmlspecialchars(trim(strip_tags($_POST['anecdotaExp'])));
						session_start();
						$autor = $_SESSION["usuLogeado"]; //USUARIO EN CONCRETO
						

						move_uploaded_file($_FILES['imagenexperiencia']['tmp_name'], '../imgGaleria/'.$file_name);  //subimos la imagen en el servidor

						//insertamos la nueva noticia en la base de datos
						$sql = "INSERT INTO galeria VALUES ('', '$titulo', '$target_file', '$lugar','$autor','$anecdota');";
						$consulta = mysqli_query($conn, $sql);
						header('Location: ../galeria.php');	

					}
					else{
						header('Location: ../galeria.php?errorImg=si');
					}

				}
				else{
					header('Location: ../galeria.php?errorForm=si');
				}
			}
			else{
				header('Location: ../galeria.php?errorForm=si');
			}
		?>
	</body>
</html>

