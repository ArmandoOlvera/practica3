<?php
	include 'basededatos.php';	

	$usuario    = $_POST['usuario'];
	$password = $_POST['password'];
 
	
	//echo "Hello, World!"."\n";	

	
	
	$sql = "SELECT  id_usuarios, usuario , password, nivel FROM usuarios where usuario=\"".$usuario."\" AND  password=\"".$password."\"";

	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
		// output data of each row
		while($row = $result->fetch_assoc()) {
			//echo "id: " . $row["id"]. " - Name: " . $row["nombre"]. " " . $row["apellidop"]. " " . $row["apellidom"]. "\n";
			echo $row["id_usuarios"].",".$row["usuario"].",".$row["password"].",".$row["nivel"]."\n";
		}
	} else {
		echo "0 results";
	}	
	
	$conn->close();
	//die ('Finalizando...');
	die ('');

 
?>
