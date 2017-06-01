<!DOCTYPE HTML>
<html>
	<head>
		<title> Insertar lugar </title>
		<meta charset="utf-8">
	</head>
	<body>
		<?php

			if(isset($_GET['lugar'])){
				$lugar = htmlspecialchars(trim(strip_tags($_GET['lugar'])));
			}

			//Comprobamos que los datos requeridos no estén vacíos
			if(isset($_POST['nombre']) AND isset($_POST['localizacion1']) AND isset($_POST['localizacion2']) AND isset($_POST['localizacion3']) AND isset($_POST['aperturaLunes']) AND isset($_POST['aperturaMartes']) AND isset($_POST['aperturaMiercoles']) AND isset($_POST['aperturaJueves']) AND isset($_POST['aperturaViernes']) AND isset($_POST['aperturaSabado']) AND isset($_POST['aperturaDomingo']) AND isset($_POST['cierreLunes']) AND isset($_POST['cierreMartes']) AND isset($_POST['cierreMiercoles']) AND isset($_POST['cierreJueves']) AND isset($_POST['cierreViernes']) AND isset($_POST['cierreSabado']) AND isset($_POST['cierreDomingo'])){
				//Compruebo todos los campos del formulario
				$nombre = htmlspecialchars(trim(strip_tags($_POST['nombre'])));
				
				$localizacion1 = htmlspecialchars(trim(strip_tags($_POST['localizacion1'])));
				$localizacion2 = htmlspecialchars(trim(strip_tags($_POST['localizacion2'])));
				$localizacion3 = htmlspecialchars(trim(strip_tags($_POST['localizacion3'])));


				$aLunes = htmlspecialchars(trim(strip_tags($_POST['aperturaLunes'])));
				$aMartes = htmlspecialchars(trim(strip_tags($_POST['aperturaMartes'])));
				$aMiercoles = htmlspecialchars(trim(strip_tags($_POST['aperturaMiercoles'])));
				$aJueves = htmlspecialchars(trim(strip_tags($_POST['aperturaJueves'])));
				$aViernes = htmlspecialchars(trim(strip_tags($_POST['aperturaViernes'])));
				$aSabado = htmlspecialchars(trim(strip_tags($_POST['aperturaSabado'])));
				$aDomingo = htmlspecialchars(trim(strip_tags($_POST['aperturaDomingo'])));

				$cLunes = htmlspecialchars(trim(strip_tags($_POST['cierreLunes'])));
				$cMartes = htmlspecialchars(trim(strip_tags($_POST['cierreMartes'])));
				$cMiercoles = htmlspecialchars(trim(strip_tags($_POST['cierreMiercoles'])));
				$cJueves = htmlspecialchars(trim(strip_tags($_POST['cierreJueves'])));
				$cViernes = htmlspecialchars(trim(strip_tags($_POST['cierreViernes'])));
				$cSabado = htmlspecialchars(trim(strip_tags($_POST['cierreSabado'])));
				$cDomingo = htmlspecialchars(trim(strip_tags($_POST['cierreDomingo'])));

				echo "Validados los datos requeridos";

				$descripcion = htmlspecialchars(trim(strip_tags(isset($_POST['descripcion'])?$_POST['descripcion']:null)));
				if($descripcion == null){
					$descripcion = "No definida";
				}
				$llegar = htmlspecialchars(trim(strip_tags(isset($_POST['comoLlegar'])?$_POST['comoLlegar']:null)));
				if($llegar == null){
					$llegar = "No definido";
				}
				$entradas = htmlspecialchars(trim(strip_tags(isset($_POST['entradas'])?$_POST['entradas']:null)));
				if($entradas == null){
					$entradas = "No definidas";
				}
				$telefono = htmlspecialchars(trim(strip_tags(isset($_POST['telefono'])?$_POST['telefono']:null)));


				$direccion = $localizacion1 . " " . $localizacion2 . " " . $localizacion3;
				
				$horario = "L ". $aLunes . " ". $cLunes . " M " . $aMartes . " " . $cMartes . " X " . $aMiercoles . " " . $cMiercoles . " J " . $aJueves . " " . $cJueves . " V " . $aViernes . " " . $cViernes . " S " . $aSabado . " " . $cSabado . " D " . $aDomingo . " " . $cDomingo;

				//si todas las entradas son válidas
				// Conecto a la BBDD
				//$con;
				include("../config/conn.php");
				//ESTA RUTA HAY QUE CAMIBARLA EN EL SERVIDOR Y EN CADA ORDENADOR!!!!!!!!!
				$target_dir = "imgLugares/";  										//ruta
				$target_file = $target_dir . basename($_FILES["imagen"]["name"]);			//ruta completa (path + nombre de la img)
				$file_name = basename($_FILES["imagen"]["name"]);
				$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);						//tipo de la img
					
				// Comprobamos que es una img nueva y si es una img falsa
				//AQUI DA EL ERROR!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
				var_dump($_FILES);
				$check = getimagesize($_FILES["imagen"]["tmp_name"]);
				if($check !== false AND !file_exists($target_file) AND $_FILES["imagen"]["size"] <= 500000){
					move_uploaded_file($_FILES['imagen']['tmp_name'], '../imgLugares/'.$file_name);  //subimos la imagen en el servidor
				    
					$sql = "INSERT INTO lugares(Tipo, Nombre, Imagen, Direccion, Telefono, Horario, Llegada, Precio, Descripcion) VALUES ('$lugar', '$nombre', '$target_file', '$direccion' , '$telefono', '$horario', '$llegar', '$entradas', '$descripcion')";
					$consulta = mysqli_query($conn, $sql);
					if($consulta != null){
						switch($lugar){
						case null:
							echo "La has liado";
							break;
						case "teatro":
							header('Location: ../teatros.php');
							break;
						case "cine":
							header('Location: ../cines.php');
							break;
						case "parque":
							header('Location: ../parques.php');
							break;
						case "museo":
							header('Location: ../museos.php');
							break;
						}
					}
					else {
						echo "LLORAAAA";
					}
				}
				else {
					echo "No sabemos por qué falla llora";
				}
			}
			else {
				echo "No se inserta";
			}	
			@mysqli_close($conn);
		?>
	</body>
</html>
