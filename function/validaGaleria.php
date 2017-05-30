<!DOCTYPE html>
<html>
	<head>
		<title>Compartir experiencia</title>
	</head>
	<body>
		<?php
			
			$db = mysqli_connect('localhost', 'root', '', 'turistea');
			if(!$db){
				exit('Fallo en la conexion');
			}

			if(isset($_POST['experiencia'])){
				
				if($_POST['experiencia'] != "") {

					$target_dir = "../Turistea/imgGaleria/";  										//ruta
					$target_file = $target_dir . basename($_FILES["imagenexperiencia"]["name"]);			//ruta completa (path + nombre de la img)
					$file_name = basename($_FILES["imagenexperiencia"]["name"]);
					$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);						//tipo de la img
					
					// Comprobamos que es una img nueva y si es una img falsa
					
					$check = getimagesize($_FILES["imagenexperiencia"]["tmp_name"]);
					if($check !== false AND !file_exists($target_file) AND $_FILES["imagenexperiencia"]["size"] <= 500000){

						$titulo = $_POST['experiencia'];
						$lugar = $_POST['lugarExp'];
						$anecdota = $_POST['anecdotaExp'];
						session_start();
						$autor = $_SESSION["usuLogeado"]; //USUARIO EN CONCRETO
						

						move_uploaded_file($_FILES['imagenexperiencia']['tmp_name'], 'imgGaleria/'.$file_name);  //subimos la imagen en el servidor

						//insertamos la nueva noticia en la base de datos
						$sql = "INSERT INTO imgGaleria VALUES ('$titulo', '$target_file', '$lugar','$autor','$anecdota');";
						$consulta = mysqli_query($db, $sql);
						header('Location: galeria.php');	

					}
					else{
						header('Location: galeria.php?errorImg=si');
					}

				}
				else{
					header('Location: galeria.php?errorForm=si');
				}
			}
			else{
				header('Location: galeria.php?errorForm=si');
			}
		?>
	</body>
</html>

