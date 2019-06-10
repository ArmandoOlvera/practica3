<?php
include 'basededatos.php'; 
	$id        = $_POST['id'];
	$usuario    = $_POST['nombre']; 
	

	$sql = "UPDATE departamentos SET nombre='$usuario'  WHERE id_departamento=$id";

	if ($conn->query($sql) === TRUE) {
		echo "Registro Actualizado de Manera Exitosa"."\n";
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();
	die ('Finalizando...');

 
?>
