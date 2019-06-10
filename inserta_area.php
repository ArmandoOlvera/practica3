<?php
	include 'basededatos.php';

$id = $_POST["id"];
	$nombre    = $_POST['nombre'];

	$sql = "INSERT INTO area (id_departamento, nombre) VALUES ($id,'$nombre')";

	if ($conn->query($sql) === TRUE) {
		echo "Registro Insertado de Manera Exitosa"."\n";
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();
	die ('Finalizando...');

 
?>
