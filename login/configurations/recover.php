<?php
	require "../assets/database/table_create.php";// creates connection to database
	
	// if statement checks if username and password from the form are set
	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		$email = $_POST["email"];
		
		$result = $conn->query("SELECT * FROM sign_up_users WHERE email='$email'")
				or die("Error querying database: " . $conn->error());
		
		$row = $result->fetch_assoc();
		$fname = $row["firstname"];
		$lname = $row["lastname"];
		if($email == $row['email']){
			echo"Yesss";
		}
		else{
			echo "Email does not exist!";
		}
	}
?>