<?php
	include 'basededatos.php';
  $id  = $_POST['id'];
 


	$sql = "SELECT * FROM asignaturas where id_area=".$id;

	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
		 	echo "Error: hay asignaturas asociadas a esta area, eliminelos y vuelva a intentar";
	} else {

                $sql = "SELECT * FROM profesor where id_area=".$id;

            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                echo "Error: hay Profesores asociados a esta area, eliminelos y vuelva a intentar";
            } else {
                                 //$sql = "INSERT INTO TablaAlumnos (Nombre, ApellidoP, ApellidoM)
                      //VALUES ('$nombre', '$apellidop', '$apellidom')";
                      $sql = "DELETE FROM area WHERE id_area='$id'";

                      if ($conn->query($sql) === TRUE) {
                        echo "Registro Eliminado de Manera Exitosa"."\n";
                      } else {
                        echo "Error: " . $sql . "<br>" . $conn->error;
                      }
 
            }
         
    
  }
	$conn->close();
	die ('Finalizando...');

 
?>
