<?php
	include 'basededatos.php';
  $id  = $_POST['id'];
 



	$sql = "SELECT * FROM departamentos where id_departamento=".$id;

	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
		 	echo "Error: hay áreas de conocimiento asociadas a este departamento, eliminelos y vuelva a intentar";
	} else {
            //$sql = "INSERT INTO TablaAlumnos (Nombre, ApellidoP, ApellidoM)
        //VALUES ('$nombre', '$apellidop', '$apellidom')";
        $sql = "DELETE FROM departamentos WHERE id_departamento='$id'";

        if ($conn->query($sql) === TRUE) {
          echo "Registro Eliminado de Manera Exitosa"."\n";
        } else {
          echo "Error: " . $sql . "<br>" . $conn->error;
        }
	
	}	

	$conn->close();
	die ('Finalizando...');

 
?>
