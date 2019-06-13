<?php
	include 'basededatos.php';
  $id1  = $_POST['id1'];
  $id2  = $_POST['id2'];


        $sql = "DELETE FROM asignatura_igual where id_asignatura1=".$id1." AND id_asignatura2=".$id2;

        if ($conn->query($sql) === TRUE) {
          echo "Registro Eliminado de Manera Exitosa"."\n";
        } else {
          echo "Error: " . $sql . "<br>" . $conn->error;
        }
	
	
	$conn->close();
	die ('Finalizando...');

 
?>
