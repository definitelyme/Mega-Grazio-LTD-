<?php
	$err = "";
	if ($_SERVER['REQUEST_METHOD'] == 'POST')
	{
		require "../assets/database/table_create.php";// creates connection to database
		

		//session username
		$value = $_POST['username'];
		//Query database for matching username
		$sql = $conn->query("SELECT * from sign_up_users WHERE username='$value' OR email='$value'")
				or die("Error querying database: " . $conn->error());
		
		$row = $sql->fetch_assoc();
		
		//email information from database
		$row["email"];
		
		//password information from form
		$newpassword = $_POST['newpassword'];
		$confirmpassword = $_POST['confirmpassword'];
		
		
		if($row["email"] == $value || $row["username"] == $value){
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
				$newpassword = password_hash($newpassword, PASSWORD_BCRYPT);
				
				//Query to update sign_in_users database
				$conn->query("UPDATE sign_in_users SET password='$newpassword' WHERE username='$value' OR email='$value'");
				//Query to update sign_up_users database
				$conn->query("UPDATE sign_up_users SET password='$newpassword' WHERE username='$value' OR email='$value'");
				
				//error check
				echo "Password reset done! Check your Email.";
				exit;
				
			}
		}
		else{
			$err = "User Account does not exist!";
		}
	}
?>