<?php
	include 'basededatos.php';	

	$id=$_POST['id']; 
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
	
	$sql = "SELECT * FROM asignaturas where id_asignatura=".$id;

	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
		// output data of each row
		while($row = $result->fetch_assoc()) {
      $id_area=$row["id_area"];
      $id_titulacion=$row["id_titulacion"];
      $codigo=$row["codigo"];
      $tipo=$row["tipo"];
      $curso=$row["curso"];
      $creditos=$row["creditos_teoricos"];
      $grupo=$row["grupo_teoria"];
      $id_departamento=$row["id_departamento"];
			
		}
    //Se obtiene el nombre del area
    $sql = "SELECT * FROM area where id_area=".$id_area;
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) {
        $nombrearea=$row["nombre"];
      } 
    }
    
    //Se obtiene el nombre del departamento
    $sql = "SELECT * FROM departamentos where id_departamento=".$id_departamento;
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) {
        $nombredepartamento=$row["nombre"];
      } 
    }
    
    //Se obtiene el nombre de la titulacion
    $sql = "SELECT * FROM titulacion where id_titulacion=".$id_titulacion;
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) {
        $nombretitulo=$row["nombre"];
      } 
    }
    
   // echo $row["id_area"].",".$row["id_departamento"].",".$row["nombre"]."\n";
    echo $nombredepartamento.",".$nombrearea.",".$nombretitulo.",".$codigo.",".$tipo.",".$creditos.",".$grupo."\n";
	} else {
		echo "0 results";
	}	
	
	$conn->close();
	//die ('Finalizando...');
	die ('');

 
?>
