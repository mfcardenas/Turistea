<!DOCTYPE html>
<html>
	<head>
		<title>Sigin</title>
	</head>
	<body>
		<?php
			
			
			include("../config/conn.php");
            
			if(isset($_POST['nombreruta']) AND isset($_POST['duracion']) AND isset($_POST['inicio']) AND isset($_POST['destino']) AND isset($_POST['descripcion']) AND isset($_POST['parrafo1'])){
				//No se si las fotos funcionan así, con el Isset.
                
				if($_POST['nombreruta'] != "" AND $_POST['duracion'] != "" AND $_POST['inicio'] != "" AND $_POST['destino'] != ""  AND $_POST['descripcion'] != "" AND $_POST['parrafo1'] != "") {
                    
                    $target_dir = "imgRutas/";  									//ruta
                    
                    //A las imágenes obligatorias las doy el ok si se han subido (debería ser siempre porque es required) Y además están correctas.
                    //A las imágenes NO obligatorias las doy el ok si no se han subido O si se han subido y están correctas.
                    $ok=false; $ok1=false; $ok2=false; $ok3=false; $ok4=false; $ok5=false; $subido2=false; $subido3=false; $subido4=false; $subido5=false;
       
                    if (is_uploaded_file($_FILES['imagenMapa']['tmp_name'])) {
                        $target_file = $target_dir . basename($_FILES["imagenMapa"]["name"]);
                        $file_name = basename($_FILES["imagenMapa"]["name"]);
                        $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);	 
                        $check = getimagesize($_FILES["imagenMapa"]["tmp_name"]);   
                        if ((!file_exists($target_file)) AND (check !== false) AND $_FILES["imagenMapa"]["size"] <= 800000) {
                            $ok=true;
                        }
                    }
                    if (is_uploaded_file($_FILES['foto1']['tmp_name'])) {
                        $target_file1 = $target_dir . basename($_FILES["foto1"]["name"]);			
                        $file_name1 = basename($_FILES["foto1"]["name"]);									
                        $imageFileType = pathinfo($target_file1,PATHINFO_EXTENSION);	
                        $check1 = getimagesize($_FILES["foto1"]["tmp_name"]);
                        if ((!file_exists($target_file1)) AND (check1 !== false) AND $_FILES["foto1"]["size"] <= 800000) {
                            $ok1=true;
                        }
                    }
                    
                    if (is_uploaded_file($_FILES['foto2']['tmp_name'])) {
                        $target_file2 = $target_dir . basename($_FILES["foto2"]["name"]);
                        $file_name2 = basename($_FILES["foto2"]["name"]);
                        $imageFileType = pathinfo($target_file2,PATHINFO_EXTENSION);	 
                        $check2 = getimagesize($_FILES["foto2"]["tmp_name"]);  
                        if ((!file_exists($target_file2)) AND (check2 !== false) AND $_FILES["foto2"]["size"] <= 800000) {
                            $ok2=true;
                            $subido2=true;
                            
                        }
                    }
                    else {
                        $ok2=true;
                    }
                        
                    if (is_uploaded_file($_FILES['foto3']['tmp_name'])) {
                        $target_file3 = $target_dir . basename($_FILES["foto3"]["name"]);
                        $file_name3 = basename($_FILES["foto3"]["name"]);
                        $imageFileType = pathinfo($target_file3,PATHINFO_EXTENSION);	 
                        $check3 = getimagesize($_FILES["foto3"]["tmp_name"]);
                         if ((!file_exists($target_file3)) AND (check3 !== false) AND $_FILES["foto3"]["size"] <= 800000) {
                            $ok3=true;
                            $subido3=true;
                        }
                    }
                    else {
                        $ok3=true;
                    }
                    
                    if (is_uploaded_file($_FILES['foto4']['tmp_name'])) {
                        $target_file4 = $target_dir . basename($_FILES["foto4"]["name"]);
                        $file_name4 = basename($_FILES["foto4"]["name"]);
                        $imageFileType = pathinfo($target_file4,PATHINFO_EXTENSION);	 
                        $check4 = getimagesize($_FILES["foto4"]["tmp_name"]);
                        if ((!file_exists($target_file4)) AND (check4 !== false) AND $_FILES["foto4"]["size"] <= 800000) {
                            $ok4=true;
                            $subido4=true;
                        }
                    }
                    else {
                        $ok4=true;
                    }
                    
                    if (is_uploaded_file($_FILES['foto5']['tmp_name'])) {
                        $target_file5 = $target_dir . basename($_FILES["foto5"]["name"]);
                        $file_name5 = basename($_FILES["foto5"]["name"]);
                        $imageFileType = pathinfo($target_file5,PATHINFO_EXTENSION);	 
                        $check5 = getimagesize($_FILES["foto5"]["tmp_name"]);
                        if ((!file_exists($target_file5)) AND (check5 !== false) AND $_FILES["foto5"]["size"] <= 800000) {
                            $ok5=true;
                            $subido5=true;
                        }
                    }
                    else {
                        $ok5=true;
                    }
					
                    //Si todo ok
					if(($ok==true) AND ($ok1==true) AND ($ok2==true) AND ($ok3==true) AND ($ok4==true) AND ($ok5==true)){

						$nombre = htmlspecialchars(trim(strip_tags($_POST['nombreruta'])));
						$descp = htmlspecialchars(trim(strip_tags($_POST['descripcion'])));
						$duracion = htmlspecialchars(trim(strip_tags($_POST['duracion'])));
						$inicio = htmlspecialchars(trim(strip_tags($_POST['inicio'])));
                        $destino = htmlspecialchars(trim(strip_tags($_POST['destino'])));
                        $parrafo1 = htmlspecialchars(trim(strip_tags($_POST['parrafo1'])));
                        $parrafo2 = htmlspecialchars(trim(strip_tags($_POST['parrafo2'])));
                        $parrafo3 = htmlspecialchars(trim(strip_tags($_POST['parrafo3'])));
                        $parrafo4 = htmlspecialchars(trim(strip_tags($_POST['parrafo4'])));
                        $parrafo5 = htmlspecialchars(trim(strip_tags($_POST['parrafo5'])));

						move_uploaded_file($_FILES['imagenMapa']['tmp_name'], '../imgRutas/'.$file_name);  //subimos la imagen en el servidor
                        move_uploaded_file($_FILES['foto1']['tmp_name'], '../imgRutas/'.$file_name1);  //subimos la imagen en el servidor
                        if ($subido2==true) {
                            move_uploaded_file($_FILES['foto2']['tmp_name'], '../imgRutas/'.$file_name2);  //subimos la imagen en el servidor
                        }
                        else {
                            $target_file2=null;
                        }
                        if ($subido3==true) {
                            move_uploaded_file($_FILES['foto3']['tmp_name'], '../imgRutas/'.$file_name3);  //subimos la imagen en el servidor
                        }
                        else {
                            $target_file3=null;
                        }
                        if ($subido4==true) {
                            move_uploaded_file($_FILES['foto4']['tmp_name'], '../imgRutas/'.$file_name4);  //subimos la imagen en el servidor
                        }
                        else {
                            $target_file4=null;
                        }
                        if ($subido5==true) {
                             move_uploaded_file($_FILES['foto5']['tmp_name'], '../imgRutas/'.$file_name5);  //subimos la imagen en el servidor
                        }
                        else {
                            $target_file5=null;
                        }
                       
						//insertamos la nueva ruta en la base de datos
						$sql = "INSERT INTO rutas (Nombre, Descripcion, Mapa, Duracion, Punto_partida, Punto_destino, Parrafo1, Foto1, Parrafo2, Foto2, Parrafo3, Foto3, Parrafo4, Foto4, Parrafo5, Foto5) VALUES ('$nombre', '$descp' , '$target_file','$duracion','$inicio','$destino','$parrafo1', '$target_file1', '$parrafo2', '$target_file2', '$parrafo3', '$target_file3', '$parrafo4', '$target_file4', '$parrafo5', '$target_file5');";
						$consulta = mysqli_query($conn, $sql);
                        echo "Se ha insertado??";
                        if($consulta != null){
                            echo "Insertado";
                        }
                        else{
                            echo "NO insertado";
                        }
						header('Location: ../Rutas.php');

					}
					else{
                        header('Location: ../Rutas.php?errorImg=si');
					}

				}
				else{
					header('Location: ../Rutas.php?errorForm=si');
				}
			}
			else{
				header('Location: ../Rutas.php?errorForm=si');
			}
		?>
	</body>
</html>

