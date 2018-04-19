<?php
if(isset($_POST['verify'])){
	require("../assets/database/table_create.php");// creates connection
	
	// assigns the username and password from the form the variables
	$user = $_POST["username"];
	
	if(isset($user)){		
		$result = $conn->query("SELECT * FROM sign_in_users WHERE username='$user' OR email='$user'")
					or die("Error querying database: " . $conn->error());
		
		// Get data from sign_in_users table
		$row1 = $result->fetch_assoc();
		
		//fetch data from database
		$pass = $row1["password"];
		$activated = $row1["Activated"];
		
		if($row1["username"] == $user || $row1["email"] == $user){
			if($activated == 1){
				$err_verify = "This account is already verified! Please proceed to the <a href='../login'>Login Page</a>";
			}
			
			else{
				
				//Check password input with that in database
				if(password_verify($_POST['passkey'], $pass)){
					
					// query the database
					$results = $conn->query("SELECT * FROM sign_up_users WHERE username='$user' OR email='$user'")
								or die("Error querying database: " . $conn->error());
								
					// get data from sign_up_users table
					$row = $results->fetch_assoc();
					$reg_date = $row["reg_date"];
					
					// Update data stored in database e.g. Activated--section, reg_date--section
					$sql = $conn->query("UPDATE sign_in_users SET Activated='1', reg_date='$reg_date', Last_seen=current_timestamp WHERE username='$user' OR email='$user'") or die("Error updating database: " . $conn->error());
					
					// Success message after storage 
					$success_verify = "Congratulations your account has been verified, proceed to <a href='../login'>Login Page</a>!";
				}
				else{
					$err_verify = "Wrong Password!!</br> Forgot Password? <a href='../forgot_pass'>Click Here</a>";
				}
			}
		}
		else{
			$err_verify = "Username or Email does not exist!";
		}
	}
	$conn->close(); // close connection
}
?>