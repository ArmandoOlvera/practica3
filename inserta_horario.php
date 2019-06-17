<?php
	include 'basededatos.php';

$id = $_POST["id"];
	$h1    = $_POST['h1'];
$h2    = $_POST['h2'];
$dia    = $_POST['dia'];
	$sql = "INSERT INTO horario (h1,h2,dia,id_profesor) VALUES ('$h1','$h2','$dia',$id)";

	if ($conn->query($sql) === TRUE) {
		echo "Registro Insertado de Manera Exitosa"."\n";
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();
	die ('Finalizando...');

 
?>
