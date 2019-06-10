<?php
	include 'basededatos.php';
  $id  = $_POST['id'];
 


$sql = "DELETE FROM asignaturas WHERE id_asignatura='$id'";

        if ($conn->query($sql) === TRUE) {
          echo "Registro Eliminado de Manera Exitosa"."\n";
        } else {
          echo "Error: " . $sql . "<br>" . $conn->error;
        }

	$conn->close();
	die ('Finalizando...');

 
?>
