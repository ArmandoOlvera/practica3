<?php
	include 'basededatos.php';
  $id  = $_POST['id'];
 



	$sql = "SELECT * FROM asignaturas where id_titulacion=".$id;

	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
		 	echo "Error: hay asignaturas asignadas a esta titulación, eliminelas y vuelva a intentar";
	} else {
            //$sql = "INSERT INTO TablaAlumnos (Nombre, ApellidoP, ApellidoM)
        //VALUES ('$nombre', '$apellidop', '$apellidom')";
        $sql = "DELETE FROM titulacion WHERE id_titulacion='$id'";

        if ($conn->query($sql) === TRUE) {
          echo "Registro Eliminado de Manera Exitosa"."\n";
        } else {
          echo "Error: " . $sql . "<br>" . $conn->error;
        }
	
	}	

	$conn->close();
	die ('Finalizando...');

 
?>
