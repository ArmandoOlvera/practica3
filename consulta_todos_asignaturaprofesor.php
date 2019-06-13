<?php
	include 'basededatos.php';	

	$usuario    = $_POST['usuario']; 
 
	
	//echo "Hello, World!"."\n";	

	
	
	$sql = "SELECT p2.nombre as asignatura,p.nombre as profesor ,a.id_asignatura as id2,a.id_profesor as id1 FROM asignatura_profesor as a, profesor as p, asignaturas as p2
  WHERE a.id_asignatura=p2.id_asignatura AND a.id_profesor=p.id_profesor";

	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
		// output data of each row
		while($row = $result->fetch_assoc()) {
			//echo "id: " . $row["id"]. " - Name: " . $row["nombre"]. " " . $row["apellidop"]. " " . $row["apellidom"]. "\n";
			echo "ID Asignatura: ".$row["id1"]."\nAsignatura: ".$row["asignatura"]."\n ID PROFESOR: ".$row["id2"]."\nProfesor: ".$row["profesor"]."\n";
		}
	} else {
		echo "0 results";
	}	
	
	$conn->close();
	//die ('Finalizando...');
	die ('');

 
?>
