<?php
	include 'basededatos.php';

	$nombre    = $_POST['usuario'];

	$sql = "INSERT INTO departamentos (nombre)
	VALUES ('$nombre')";

	if ($conn->query($sql) === TRUE) {
		echo "Registro Insertado de Manera Exitosa"."\n";
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();
	die ('Finalizando...');

 
?>
