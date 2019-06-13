<?php
	include 'basededatos.php';	

	$id=$_POST['id'];
$id2=$_POST['id2']; 
 $nombreasignatura=$_POST['nombre']; 
	
	//echo "Hello, World!"."\n";	
$id_area="";
$id_titulacion="";
$id_codigo="";
$id_tipo="";
$id_curso="";
$id_creditos="";
$id_grupo="";
$id_departamento="";
////COSAS QUE NECESITO
$nombredepartamento="";
$nombrearea="";
$nombretitulo="";
	
	$sql = "SELECT * FROM area where id_area=".$id2;

	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
		// output data of each row
		while($row = $result->fetch_assoc()) {
      $nombrearea=$row["nombre"];
      $id_departamento=$row["id_departamento"];
			
		}
    //Se obtiene el nombre del area
    $sql = "SELECT * FROM departamentos where id_departamento=".$id_departamento;
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) {
        $nombredepartamento=$row["nombre"];
      } 
    }
    
    
   
    
   // echo $row["id_area"].",".$row["id_departamento"].",".$row["nombre"]."\n";
    echo $nombredepartamento.",".$nombrearea."\n";
	} else {
		echo "0 results";
	}	
	
	$conn->close();
	//die ('Finalizando...');
	die ('');

 
?>
