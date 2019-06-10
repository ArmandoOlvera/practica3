<?php
include 'basededatos.php'; 
	$id        = $_POST['id'];
	$nombre    = $_POST['nombre']; 

  $nombre2    = $_POST['id_area'];
$nombre3    = $_POST['id_titulacion'];
$nombre4    = $_POST['id_departamento'];
$nombre5    = $_POST['codigo'];
$nombre6    = $_POST['tipo'];
$nombre7    = $_POST['curso'];
$nombre8    = $_POST['creditos'];
$nombre9    = $_POST['grupo'];
	

	$sql = "UPDATE asignaturas SET nombre='$nombre', id_area='$nombre2',
  id_titulacion='$nombre3', id_departamento='$nombre4', codigo='$nombre5',
  tipo='$nombre6', curso='$nombre7',
  creditos_teoricos='$nombre8', grupo_teoria='$nombre9' WHERE id_asignatura=$id";

	if ($conn->query($sql) === TRUE) {
		echo "Registro Actualizado de Manera Exitosa"."\n";
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();
	die ('Finalizando...');

 
?>
