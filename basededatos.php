<?php 
	$servername = "localhost";
	$username = "ejercicio6";
	$dbname   = "ejercicio6";
	$password = "ejercicio6";	

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	} 
?>