<!DOCTYPE HTML>
<html>
	<head>
		<title> Insertar visita </title>
		<meta charset="utf-8">
	</head>
	<body>
		<?php
			$nombrelugar = htmlspecialchars(trim(strip_tags(isset($_POST['nombrelugar'])?$_POST['nombrelugar']:null)));
			$descripcion = htmlspecialchars(trim(strip_tags(isset($_POST['descripcion'])?$_POST['descripcion']:null)));
        
			if($nombrelugar != null AND $descripcion != null){				
				//si todas las entradas son válidas
				// Conecto a la BBDD
				//$con;
				include("../config/conn.php");
				//ESTA RUTA HAY QUE CAMIBARLA EN EL SERVIDOR Y EN CADA ORDENADOR!!!!!!!!!
				$target_dir = "imgVisitas/";  										//ruta
				$target_file = $target_dir . basename($_FILES["imagenVisita"]["name"]);			//ruta completa (path + nombre de la img)
				$file_name = basename($_FILES["imagenVisita"]["name"]);
				$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);						//tipo de la img
					
				// Comprobamos que es una img nueva y si es una img falsa
					
				$check = getimagesize($_FILES["imagenVisita"]["tmp_name"]);
				if($check !== false AND $_FILES["imagenVisita"]["size"] <= 500000){
					move_uploaded_file($_FILES['imagenVisita']['tmp_name'], '../imgVisitas/'.$file_name);  //subimos la imagen en el servidor
				    $sql = "INSERT INTO visitas (Nombre, Imagen, Descripcion) VALUES ('$nombrelugar', '$target_file', '$descripcion')";
				
				    $consulta = mysqli_query($conn, $sql);
					if($consulta != null){
                        //Quizá estaría bien que muestre un mensaje que se ha insertado correctamente
						header('Location: ../visitas.php');
                    }
				}
			}
			else {
                //Mostrar un mensaje que muestre que los datos introducidos no son correctos y volver al modal!
				header('Location: ../visitas.php?datos_incorrectos=si');
			}
			@mysqli_close($conn);
		?>
	</body>
</html>
