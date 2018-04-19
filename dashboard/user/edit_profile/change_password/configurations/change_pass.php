<?php
	$err = "";
	if ($_SERVER['REQUEST_METHOD'] == 'POST')
	{
		require "../../../../assets/database/table_create.php";// creates connection to database
		$success_page = '../../../../login';
		if (!isset($_SESSION['user']))
		{
			$err = 'Not logged in!';
		}
		else
		{
			//session username
			$username_value = $_SESSION['user'];
			//Query database for matching username
			$sql = $conn->query("SELECT * from sign_up_users WHERE username='$username_value'")
					or die("Error querying database: " . $conn->error());
			
			$row = $sql->fetch_assoc();
			//password information from database
			$password_value = $row['password'];
			
			//password information from form
			$newpassword = $_POST['newpassword'];
			$confirmpassword = $_POST['confirmpassword'];
			
			if(password_verify($_POST['password'], $password_value)){
				if ($newpassword != $confirmpassword)
				{
					$err = 'Both passwords do not match!';
				}
				elseif (!preg_match("/^[A-Za-z0-9_!@$]{1,50}$/", $newpassword))
				{
					$err = 'New password is not valid, please check and try again!';
				}
				else
				{
					//hash new password to be inputted in database
					$newpassword = password_hash($_POST['newpassword'], PASSWORD_BCRYPT);
					
					//Query to update sign_in_users database
					$conn->query("UPDATE sign_in_users SET password='$newpassword' WHERE username='$username_value'");
					//Query to update sign_up_users database
					$conn->query("UPDATE sign_up_users SET password='$newpassword' WHERE username='$username_value'");
					
					//error check
					echo "Password Changed! Check your Email.";
					
					session_unset($_SESSION['user']);
					session_destroy();
					header("Location: ../../../login/");
					
					exit;
				}
			}
			else{
				$err = "Invalid Old Password!";
			}
		}
	}
?>