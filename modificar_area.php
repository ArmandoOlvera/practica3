<?php
include 'basededatos.php'; 

$id        = $_POST['id'];
$id2        = $_POST['id2'];
$usuario    = $_POST['nombre']; 
	

	$sql = "UPDATE area SET nombre='$usuario' ,id_departamento=$id2  WHERE id_area=$id";

	if ($conn->query($sql) === TRUE) {
		echo "Registro Actualizado de Manera Exitosa"."\n";
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();
	die ('Finalizando...');

 
?>
