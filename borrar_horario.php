<?php
	include 'basededatos.php';
  $id  = $_POST['id'];
 

  //VALUES ('$nombre', '$apellidop', '$apellidom')";
                      $sql = "DELETE FROM horario WHERE id_profesor=$id";

                      if ($conn->query($sql) === TRUE) {
                        echo "Registro Eliminado de Manera Exitosa"."\n";
                      } else {
                        echo "Error: " . $sql . "<br>" . $conn->error;
                      }
	$conn->close();
	die ('Finalizando...');

 
?>
