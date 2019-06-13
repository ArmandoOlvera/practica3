<?php
	include 'basededatos.php';
  $id  = $_POST['id'];
 


	$sql = "SELECT * FROM asignaturas where id_profesor=".$id;

	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
		 	echo "Error: hay asignaturas asociadas a este profesor, eliminelas y vuelva a intentar";
	} else {
                      $sql = "DELETE FROM profesor WHERE id_profesor='$id'";
                      if ($conn->query($sql) === TRUE) {
                        echo "Registro Eliminado de Manera Exitosa"."\n";
                      } else {
                        echo "Error: " . $sql . "<br>" . $conn->error;
                      }
    
  }
	$conn->close();
	die ('Finalizando...');

 
?>
