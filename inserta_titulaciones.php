<?php
	include 'basededatos.php';

	$nombre    = $_POST['usuario'];

	$sql = "INSERT INTO titulacion (nombre)
	VALUES ('$nombre')";

	if ($conn->query($sql) === TRUE) {
		echo "Registro Insertado de Manera Exitosa"."\n";
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();
	die ('Finalizando...');

 
?>
