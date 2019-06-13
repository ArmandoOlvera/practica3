<?php
	include 'basededatos.php';
  $id1  = $_POST['id1'];
  $id2  = $_POST['id2'];


        $sql = "DELETE FROM asignatura_profesor where id_profesor=".$id2." AND id_asignatura=".$id1;

        if ($conn->query($sql) === TRUE) {
          echo "Registro Eliminado de Manera Exitosa"."\n";
        } else {
          echo "Error: " . $sql . "<br>" . $conn->error;
        }
	
	
	$conn->close();
	die ('Finalizando...');

 
?>
