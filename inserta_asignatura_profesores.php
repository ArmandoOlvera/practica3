<?php
	include 'basededatos.php';

	$id1    = $_POST['id1'];
$id2    = $_POST['id2'];

	$sql = "INSERT INTO asignatura_profesor (id_profesor,id_asignatura)
	VALUES ($id1,$id2)";
echo "$sql";
	if ($conn->query($sql) === TRUE) {
		echo "Registro Insertado de Manera Exitosa"."\n";
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();
	die ('Finalizando...');

 
?>
