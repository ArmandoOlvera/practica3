<?php
	include 'basededatos.php';	

	$id_asignatura    = $_POST['usuario']; 
 
	
	//echo "Hello, World!"."\n";	
 $valores="";
	$theVariable = array();
	
	$sql = "SELECT DISTINCT * FROM horario where id_profesor=".$id_asignatura;

	$result = $conn->query($sql);
  
	if ($result->num_rows > 0) {
		// output data of each row
		while($row = $result->fetch_assoc()) {
       
		 echo $row["dia"]." > ".$row["h1"]."-".$row["h2"]."\n";
		}
     
  }else {
		echo "0-results";
	}	
	
	$conn->close();
	//die ('Finalizando...');
	die ('');

 
?>
