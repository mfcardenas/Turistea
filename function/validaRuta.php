<!DOCTYPE html>
<html>
	<head>
		<title>Sigin</title>
	</head>
	<body>
		<?php
			
			
			include("/../config/conn.php");
			

			if(isset($_POST['nombreruta']) AND isset($_POST['duracion']) AND isset($_POST['inicio']) AND isset($_POST['destino']) AND isset($_POST['descripcion']) AND isset($_POST['parrafo1']) AND isset($_POST['parrafo2']) AND isset($_POST['parrafo3']) AND isset($_POST['parrafo4']) AND isset($_POST['parrafo5'])){
				//No se si las fotos funcionan así, con el Isset.
                
				if($_POST['nombreruta'] != "" AND $_POST['duracion'] != "" AND $_POST['inicio'] != "" AND $_POST['destino'] != ""  AND $_POST['descripcion'] != "" AND $_POST['parrafo1'] != "" AND $_POST['parrafo2'] != "" AND $_POST['parrafo3'] != "" AND $_POST['parrafo4'] != "" AND $_POST['parrafo5'] != "") {

					$target_dir = "imgRutas/";  									//ruta
					$target_file = $target_dir . basename($_FILES["imagenmapa"]["name"]);		
                    $target_file1 = $target_dir . basename($_FILES["foto1"]["name"]);			
                    $target_file2 = $target_dir . basename($_FILES["foto2"]["name"]);			//ruta completa (path + nombre de la img)
                    $target_file3 = $target_dir . basename($_FILES["foto3"]["name"]);			
                    $target_file4 = $target_dir . basename($_FILES["foto4"]["name"]);			
                    $target_file5 = $target_dir . basename($_FILES["foto5"]["name"]);			
					$file_name = basename($_FILES["imagenmapa"]["name"]);						
                    $file_name1 = basename($_FILES["foto1"]["name"]);									
                    $file_name2 = basename($_FILES["foto2"]["name"]);
                    $file_name3 = basename($_FILES["foto3"]["name"]);							//nombre de la img
                    $file_name4 = basename($_FILES["foto4"]["name"]);
                    $file_name5 = basename($_FILES["foto5"]["name"]);
                    
					$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);						
					$imageFileType = pathinfo($target_file1,PATHINFO_EXTENSION);	
                    $imageFileType = pathinfo($target_file2,PATHINFO_EXTENSION);	
                    $imageFileType = pathinfo($target_file3,PATHINFO_EXTENSION);				//tipo de la img
                    $imageFileType = pathinfo($target_file4,PATHINFO_EXTENSION);	
                    $imageFileType = pathinfo($target_file5,PATHINFO_EXTENSION);	

					// Comprobamos si las imagenes no son falsas.
					
					$check = getimagesize($_FILES["imagenmapa"]["tmp_name"]);
					$check1 = getimagesize($_FILES["foto1"]["tmp_name"]);
					$check2 = getimagesize($_FILES["foto2"]["tmp_name"]);
					$check3 = getimagesize($_FILES["foto3"]["tmp_name"]);
					$check4 = getimagesize($_FILES["foto4"]["tmp_name"]);
					$check5 = getimagesize($_FILES["foto5"]["tmp_name"]);


					if(!file_exists($target_file) AND !file_exists($target_file1) AND !file_exists($target_file2) AND !file_exists($target_file3) AND !file_exists($target_file4) AND !file_exists($target_file5) AND $check !== false AND $check1 !== false AND $check2 !== false AND $check3 !== false AND $check4 !== false AND $check5 !== false AND $_FILES["imagenmapa"]["size"] <= 800000 AND $_FILES["foto1"]["size"] <= 800000 AND $_FILES["foto2"]["size"] <= 800000 AND $_FILES["foto3"]["size"] <= 800000 AND $_FILES["foto4"]["size"] <= 800000 AND $_FILES["foto5"]["size"] <= 800000){

						$nombre = $_POST['nombreruta'];
						$descp = $_POST['descripcion'];
						$duracion = $_POST['duracion'];
						$inicio = $_POST['inicio'];
                        $destino = $_POST['destino'];
                        $parrafo1 = $_POST['parrafo1'];
                        $parrafo2 = $_POST['parrafo2'];
                        $parrafo3 = $_POST['parrafo3'];
                        $parrafo4 = $_POST['parrafo4'];
                        $parrafo5 = $_POST['parrafo5'];

						move_uploaded_file($_FILES['imagenmapa']['tmp_name'], 'imgRutas/'.$file_name);  //subimos la imagen en el servidor
                        move_uploaded_file($_FILES['foto1']['tmp_name'], 'imgRutas/'.$file_name1);  //subimos la imagen en el servidor
                        move_uploaded_file($_FILES['foto2']['tmp_name'], 'imgRutas/'.$file_name2);  //subimos la imagen en el servidor
                        move_uploaded_file($_FILES['foto3']['tmp_name'], 'imgRutas/'.$file_name3);  //subimos la imagen en el servidor
                        move_uploaded_file($_FILES['foto4']['tmp_name'], 'imgRutas/'.$file_name4);  //subimos la imagen en el servidor
                        move_uploaded_file($_FILES['foto5']['tmp_name'], 'imgRutas/'.$file_name5);  //subimos la imagen en el servidor

						//insertamos la nueva ruta en la base de datos
						$sql = "INSERT INTO rutas VALUES (null, '$nombre', '$descp' , '$target_file','$duracion','$inicio','$destino','$parrafo1', '$target_file1', '$parrafo2', '$target_file2', '$parrafo3', '$target_file3', '$parrafo4', '$target_file4', '$parrafo5', '$target_file5');";
						$consulta = mysqli_query($conn, $sql);
						header('Location: rutas.php');

					}
					else{
						header('Location: ../rutas.php?errorImg=si');
					}

				}
				else{
					header('Location: ../rutas.php?errorForm=si');
				}
			}
			else{
				header('Location: ../rutas.php?errorForm=si');
			}
		?>
	</body>
</html>

