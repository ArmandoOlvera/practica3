<?php
	include 'basededatos.php';	

	$usuario    = $_POST['usuario']; 
 
	
	//echo "Hello, World!"."\n";	

	
	
	$sql = "SELECT DISTINCT * from incompatible";

	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
		// output data of each row
		while($row = $result->fetch_assoc()) {
			//echo "id: " . $row["id"]. " - Name: " . $row["nombre"]. " " . $row["apellidop"]. " " . $row["apellidom"]. "\n";
			echo $row["id_asignatura1"].",".$row["id_asignatura2"]."\n";
		}
	} else {
		echo "0 results";
	}	
	
	$conn->close();
	//die ('Finalizando...');
	die ('');

 
?>
