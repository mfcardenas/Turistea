<!DOCTYPE HTML>
<html>
	<head>
		<title> Insertar visita </title>
		<meta charset="utf-8">
	</head>
	<body>
		<?php
			$nombreproducto = isset($_POST['nombreproducto'])?$_POST['nombreproducto']:null;
			$precioProducto = isset($_POST['precioProducto'])?$_POST['precioProducto']:null;
        
			if($nombreproducto != null AND $precioProducto != null){				
				//si todas las entradas son válidas
				// Conecto a la BBDD
				//$con;
				$db = mysqli_connect('localhost', 'root', '', 'turistea');
				if(!$db){
					exit('Fallo en la conexion');
				}
				//ESTA RUTA HAY QUE CAMIBARLA EN EL SERVIDOR Y EN CADA ORDENADOR!!!!!!!!!
				$target_dir = "C:\Users\GEMA\Desktop\UNIVERSIDAD\TERCERO\AW\xampp\htdocs\25.05.2017\imgVisitas";  										//ruta
				$target_file = $target_dir . basename($_FILES["imagenProducto"]["name"]);			//ruta completa (path + nombre de la img)
				$file_name = basename($_FILES["imagenProducto"]["name"]);
				$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);						//tipo de la img
					
				// Comprobamos que es una img nueva y si es una img falsa
					
				$check = getimagesize($_FILES["imagenProducto"]["tmp_name"]);
				if($check !== false AND $_FILES["imagenProducto"]["size"] <= 500000){
					move_uploaded_file($_FILES['imagenProducto']['tmp_name'], $target_dir.$file_name);  //subimos la imagen en el servidor
				    $sql = "INSERT INTO visitas (Nombre, Imagen, Descripcion) VALUES ('$nombrelugar', '$target_file', '$precioProducto')";
				
				    $consulta = mysqli_query($db, $sql);
					if($consulta != null){
                        //Quizá estaría bien que muestre un mensaje que se ha insertado correctamente
						header('Location: ../tienda.php');
                    }
				}
			}
			else {
                //Mostrar un mensaje que muestre que los datos introducidos no son correctos y volver al modal!
				header('Location: tienda.php?datos_incorrectos=si');
			}
			@mysqli_close($db);
		?>
	</body>
</html>
