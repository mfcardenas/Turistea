<!DOCTYPE HTML>
<html>
	<head>
		<title> Insertar visita </title>
		<meta charset="utf-8">
	</head>
	<body>
		<?php
			$nombreproducto = htmlspecialchars(trim(strip_tags(isset($_POST['nombreproducto'])?$_POST['nombreproducto']:null)));
			$precioProducto = htmlspecialchars(trim(strip_tags(isset($_POST['precioProducto'])?$_POST['precioProducto']:null)));
        
			if($nombreproducto != null AND $precioProducto != null){				
				//si todas las entradas son válidas
				// Conecto a la BBDD
				//$con;
				include("../config/conn.php");
				//ESTA RUTA HAY QUE CAMIBARLA EN EL SERVIDOR Y EN CADA ORDENADOR!!!!!!!!!
				$target_dir = "imgTienda/";  										//ruta
				$target_file = $target_dir . basename($_FILES["imagenProducto"]["name"]);			//ruta completa (path + nombre de la img)
				$file_name = basename($_FILES["imagenProducto"]["name"]);
				$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);						//tipo de la img
					
				// Comprobamos que es una img nueva y si es una img falsa
					
				$check = getimagesize($_FILES["imagenProducto"]["tmp_name"]);
				if($check !== false AND !file_exists($target_file) AND $_FILES["imagenProducto"]["size"] <= 500000){
					move_uploaded_file($_FILES['imagenProducto']['tmp_name'], '../imgTienda/'.$file_name);  //subimos la imagenProducto en el servidor
					
				    $sql = "INSERT INTO tienda (Nombre, Imagen, Precio) VALUES ('$nombreproducto', '$target_file', '$precioProducto')";
				    				
				    $consulta = mysqli_query($conn, $sql);
					if($consulta != null){
                        //Quizá estaría bien que muestre un mensaje que se ha insertado correctamente
                        echo "Ahora debería hacer el header";
						header('Location: ../tienda.php');
                    }
				}
			}
			else {
                //Mostrar un mensaje que muestre que los datos introducidos no son correctos y volver al modal!
                echo "Algo ha ido fatal";
				header('Location: ../tienda.php?datos_incorrectos=si');
			}
			@mysqli_close($conn);
		?>
	</body>
</html>
