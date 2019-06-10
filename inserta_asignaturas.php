<?php
	include 'basededatos.php';

	$nombre    = $_POST['nombre'];
  $nombre2    = $_POST['id_area'];
$nombre3    = $_POST['id_titulacion'];
$nombre4    = $_POST['id_departamento'];
$nombre5    = $_POST['codigo'];
$nombre6    = $_POST['tipo'];
$nombre7    = $_POST['curso'];
$nombre8    = $_POST['creditos'];
$nombre9    = $_POST['grupo'];
	$sql = "INSERT INTO asignaturas 
  (nombre,id_area,id_titulacion,id_departamento,codigo,tipo,curso,creditos_teoricos,grupo_teoria)
	VALUES
  ('$nombre','$nombre2','$nombre3','$nombre4','$nombre5','$nombre6','$nombre7','$nombre8','$nombre9')";

	if ($conn->query($sql) === TRUE) {
		echo "Registro Insertado de Manera Exitosa"."\n";
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();
	die ('Finalizando...');

 
?>
