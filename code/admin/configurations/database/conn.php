<?php
	$host = "localhost";
	$user = "megagraz_qp";
	$password = "##echohellO000";
	$database = "megagraz_users";
	
	// create connection
	$conn = new mysqli($host, $user, $password);

	// check connection

	$sql = "CREATE DATABASE IF NOT EXISTS $database";

	if(!($conn->query($sql) === TRUE)){
		die("Database already exists!");
	}
	
	// create connection
	$conn = new mysqli($host, $user, $password, $database);
	if($conn->connect_error){
		die("Connection failed: " . $conn->connect_error);
	}
?>