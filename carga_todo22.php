<?php
	include 'basededatos.php';	

	$id_asignatura    = $_POST['usuario']; 
 
	
	//echo "Hello, World!"."\n";	
 $valores="";
	$theVariable = array();
	
	$sql = "SELECT DISTINCT * FROM asignatura_profesor where id_profesor=".$id_asignatura;

	$result = $conn->query($sql);
  
	if ($result->num_rows > 0) {
		// output data of each row
		while($row = $result->fetch_assoc()) {
      array_push($theVariable,$row["id_asignatura"]);
			//echo $row["id_area"].",".$row["id_departamento"].",".$row["nombre"]."\n";
		}
    $a=0;
    foreach ($theVariable as $value ){
                          $sql = "SELECT * FROM asignaturas where id_asignatura=".$value;
                            $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                      while($row = $result->fetch_assoc()) {
                        $valores=$valores.$row["nombre"].",";
                        //echo $row["id_area"].",".$row["id_departamento"].",".$row["nombre"]."\n";
                      }
                }  
	}
    /////////////////////////
    echo $valores."fin"."\n";
  }else {
		echo "0-results";
	}	
	
	$conn->close();
	//die ('Finalizando...');
	die ('');

 
?>
