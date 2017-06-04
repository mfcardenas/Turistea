<!DOCTYPE html>
<html>
	<head>
		<title>Valida Noticia</title>
	</head>
	<body>
		<?php
			
			include("../config/conn.php");

			if(isset($_POST['titulonoticia']) AND isset($_POST['subtitulonoticia']) AND isset($_POST['resumennoticia']) AND isset($_POST['descripcionnoticia']) AND isset($_POST['fuentenoticia'])){
				
				if($_POST['titulonoticia'] != "" AND $_POST['subtitulonoticia'] != "" AND $_POST['resumennoticia'] != "" AND $_POST['descripcionnoticia'] != ""  AND $_POST['fuentenoticia']) {

					//ESTA RUTA HAY QUE CAMIBARLA EN EL SERVIDOR Y EN CADA ORDENADOR!!!!!!!!!

					$target_dir = "imgNoticias/";  										//ruta

					$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);			//ruta completa (path + nombre de la img)

					$file_name = basename($_FILES["fileToUpload"]["name"]);

					$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);						//tipo de la img

					// Comprobamos que es una img nueva y si es una img falsa

					//AQUI DA EL ERROR!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!

					$check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);

					if($check !== false AND !file_exists($target_file) AND $_FILES["fileToUpload"]["size"] <= 500000){

						move_uploaded_file($_FILES['fileToUpload']['tmp_name'], '../imgNoticias/'.$file_name);  //subimos la imagen en el servidor

						$titulo = htmlspecialchars(trim(strip_tags($_POST['titulonoticia'])));
						$subtitulo = htmlspecialchars(trim(strip_tags($_POST['subtitulonoticia'])));
						$resumen = htmlspecialchars(trim(strip_tags($_POST['resumennoticia'])));
						$descp = htmlspecialchars(trim(strip_tags($_POST['descripcionnoticia'])));
						$fuente = htmlspecialchars(trim(strip_tags($_POST['fuentenoticia'])));
						$fecha = strftime( "%Y-%m-%d %H:%M:%S", time());


						//insertamos la nueva noticia en la base de datos
						$sql = "INSERT INTO noticias VALUES ('$titulo', null , '$subtitulo','$resumen','$descp', '$fuente', '$fecha','$target_file');";
						$consulta = mysqli_query($conn, $sql);
						header('Location: ../noticias.php');

					}
					else{
						header('Location: ../noticias.php?errorImg=si');
					}

				}
				else{
					header('Location: ../noticias.php?errorForm=si');
				}
			}
			else{
				header('Location: ../noticias.php?errorForm=si');
			}
		?>
	</body>
</html>

