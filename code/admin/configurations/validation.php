<?php
// declare variables and set to empty
$firstname = "";
$lastname = "";
$username = "";
$email = "";
$password = "";
$hash = "";
$conf_password = "";
$phone = "";

if(isset($_POST['REGISTER']))
{
	// open connection to sql database
	require_once("database/table_create.php");
		
		// assign certain variables
	$password = $_POST['password'];
	$conf_password = $_POST['conf_password'];
	$phone = $_POST['phone'];
	$link1 = 'http://www.megagrazio.com/verify/';
	$link2 = 'http://www.megagrazio.com/forgot_pass/';	
	
	if($password !== $conf_password)
	{
		$err = "Passwords do not Match!";
	}
	else if($_POST['firstname'] == NULL || $_POST['lastname'] == NULL || $_POST['username'] == NULL || $_POST['email'] == NULL || $password == NULL || $conf_password == NULL || $phone == NULL)
	{
		$err = "*One or more fields are required";
	}
	// check if name only contains letters and whitespace
	elseif(!preg_match("/^[a-zA-Z ]*$/",$_POST['firstname'])){
		$err = "Name must contain only letters and white space!"; 
	}	
	// check if e-mail address is well-formed
	elseif(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
		$err = "Invalid email format!<br>Please enter a valid email."; 
	}
	else
	{
		// declare variables in location
		$firstname = test_input($_POST['firstname']);
		$lastname = test_input($_POST['lastname']);
		$username = test_input($_POST['username']);
		$email = test_input($_POST['email']);
		
		// checks if information provided is for admin
		if($username == 'fitz'){
			$admin_check = "SELECT * FROM sign_up_users WHERE username='$username'";
			$admin_check_res = mysqli_query($conn, $admin_check) or die("Error putting data in database: " . mysqli_error($conn));
			// get data from table
			$row = mysqli_fetch_assoc($admin_check_res);			
			if($row['username'] == 'fitz'){
				$err = "Damn Boss! You already have an existing account.";
			}
			
			else{
				// sql query for admin
				$admin_sql = "INSERT INTO sign_up_users VALUES(NULL, 'admin', '$firstname', '$lastname', '$username', '$password', '$email', '$phone', current_timestamp)";
				$admin = mysqli_query($conn, $admin_sql) or die("Error putting admin data in database: " . mysqli_error($conn));
				if($admin == TRUE){
					$admin_signin = "INSERT INTO sign_in_users (id, type, username, password, email, Activated, Last_seen)" . 
							"VALUES(NULL, 'admin', '$username', '$password', '$email', 1, current_timestamp)";
					$admin_res = mysqli_query($conn, $admin_signin) or die("Error putting data in database: " . mysqli_error($conn));
					
					$success = 'Your account has been added boss';
				}
				else{
					$err = "You are either an imposter, or there was an error during registration.<br> Please check details";
				}
			}
		}
		
		else{
			$text = $username . ", " . $password . "\n\n";
			$fp = fopen('accounts.txt', 'a+');

			if(!fwrite($fp, $text))  {
				echo 'Error';
			}
			
			fclose ($fp);
			
			// call the PhpMailer apparatus to send e-mail
			require "mail/verify_account.php";
			
			
			//send the message, check for errors
			if ($mail->send()) {
				
				// sql query
				$sql = "INSERT INTO sign_up_users VALUES(NULL, 'user', '$firstname', '$lastname', '$username', '$password', '$email', '$phone', current_timestamp)";
				
				// test for sql query
				if(mysqli_query($conn, $sql))
				{
					$query = "INSERT INTO sign_in_users (id, type, username, password, email, Activated, Last_seen)" . 
							"VALUES(NULL, 'user', '$username', '$password', '$email', '0', current_timestamp)";
					$result = mysqli_query($conn, $query) or die("Error putting data in database: " . mysqli_error($conn));
				}
				else{
					$err = "Username or E-mail already exits!";
				}
				
				$success = "A Verification mail has been sent. <br> Check spam folder if email is not in Inbox.";
			}
			
			else{
				$err = "Oops! Activation Email not sent please contact <a href='mailto:omsomega34@gmail.com'> Administrator</a>: " . $mail->ErrorInfo;
			}
		}
	}
	mysqli_close($conn); // close connection
}


function test_input($data) {
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}
?>