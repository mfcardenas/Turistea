<!DOCTYPE HTML>
<html>
	<head>
		<title> Insertar lugar </title>
		<meta charset="utf-8">
	</head>
	<body>
		<?php
			$lugar = isset($_GET['lugar'])?$_GET['lugar']:null;

			//Compruebo todos los campos del formulario
			$nombre = isset($_POST['nombre'])?$_POST['nombre']:null;
			$descripcion = isset($_POST['descripcion'])?$_POST['descripcion']:null;

			$localizacion1 = isset($_POST['localizacion1'])?$_POST['localizacion1']:null;
			$localizacion2 = isset($_POST['localizacion2'])?$_POST['localizacion2']:null;
			$localizacion3 = isset($_POST['localizacion3'])?$_POST['localizacion3']:null;

			$telefono = isset($_POST['telefonoteatro'])?$_POST['telefonoteatro']:null;

			$aLunes = isset($_POST['aperturaLunes'])?$_POST['aperturaLunes']:null;
			$aMartes = isset($_POST['aperturaMartes'])?$_POST['aperturaMartes']:null;
			$aMiercoles = isset($_POST['aperturaMiercoles'])?$_POST['aperturaMiercoles']:null;
			$aJueves = isset($_POST['aperturaJueves'])?$_POST['aperturaJueves']:null;
			$aViernes = isset($_POST['aperturaViernes'])?$_POST['aperturaViernes']:null;
			$aSabado = isset($_POST['aperturaSabado'])?$_POST['aperturaSabado']:null;
			$aDomingo = isset($_POST['aperturaDomingo'])?$_POST['aperturaDomingo']:null;

			$cLunes = isset($_POST['cierreLunes'])?$_POST['cierreLunes']:null;
			$cMartes = isset($_POST['cierreMartes'])?$_POST['cierreMartes']:null;
			$cMiercoles = isset($_POST['cierreMiercoles'])?$_POST['cierreMiercoles']:null;
			$cJueves = isset($_POST['cierreJueves'])?$_POST['cierreJueves']:null;
			$cViernes = isset($_POST['cierreViernes'])?$_POST['cierreViernes']:null;
			$cSabado = isset($_POST['cierreSabado'])?$_POST['cierreSabado']:null;
			$cDomingo = isset($_POST['cierreDomingo'])?$_POST['cierreDomingo']:null;

			$llegar = isset($_POST['comoLlegar'])?$_POST['comoLlegar']:null;
			$entradas = isset($_POST['entradas'])?$_POST['entradas']:null;


///////////////////////////////////////////////////
			echo $nombre;
			echo $descripcion;

			echo $localizacion1 ;
			echo $localizacion2 ;
			echo $localizacion3 ;

			echo $telefono;

			echo $aLunes;
			echo $aMartes;
			echo $aMiercoles;
			echo $aJueves;
			echo $aViernes;
			echo $aSabado;
			echo $aDomingo;

			echo $cLunes;
			echo $cMartes;
			echo $cMiercoles;
			echo $cJueves;
			echo $cViernes;
			echo $cSabado;
			echo $cDomingo;

			echo $llegar;
			echo $entradas;




			if($nombre != null AND $descripcion != null AND $localizacion1 != null AND $localizacion2 != null AND $localizacion3 != null AND $aLunes != null AND $aMartes != null AND $aMiercoles != null AND $aJueves != null AND $aViernes != null AND $aSabado != null AND $aDomingo != null AND $cLunes != null AND $cMartes != null AND $cMiercoles != null AND $cJueves != null AND $cViernes != null AND $cSabado != null AND $cDomingo != null AND $llegar != null AND $entradas != null){

				$direccion = $localizacion1 . " " . $localizacion2 . " " . $localizacion3;
				
				$horario = "L ". $aLunes . " ". $cLunes . " M " . $aMartes . " " . $cMartes . " X " . $aMiercoles . " " . $cMiercoles . " J " . $aJueves . " " . $cJueves . " V " . $aViernes . " " . $cViernes . " S " . $aSabado . " " . $cSabado . " D " . $aDomingo . " " . $cDomingo;
				
				//si todas las entradas son válidas
				// Conecto a la BBDD
				//$con;
				include("/../config/conn.php");
				//ESTA RUTA HAY QUE CAMIBARLA EN EL SERVIDOR Y EN CADA ORDENADOR!!!!!!!!!
				//$target_dir = "imgLugares/";  			
				//ESTA RUTA HAY QUE CAMIBARLA EN EL SERVIDOR Y EN CADA ORDENADOR!!!!!!!!!
				$target_dir = "imgLugares/";  										//ruta
				$target_file = $target_dir . basename($_FILES["imagen"]["name"]);			//ruta completa (path + nombre de la img)
				$file_name = basename($_FILES["imagen"]["name"]);
				$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);						//tipo de la img
					
				// Comprobamos que es una img nueva y si es una img falsa
					
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
				echo "Hay algún dato mal";
			}
			@mysqli_close($conn);
		?>
	</body>
</html>
