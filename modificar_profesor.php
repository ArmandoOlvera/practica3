<?php
include 'basededatos.php'; 

$id        = $_POST['id'];
$id2        = $_POST['id2'];
$usuario    = $_POST['nombre']; 
	

	$sql = "UPDATE profesor SET nombre='$usuario' ,id_area=$id2  WHERE id_profesor=$id";

	if ($conn->query($sql) === TRUE) {
		echo "Registro Actualizado de Manera Exitosa"."\n";
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();
	die ('Finalizando...');

 
?>
