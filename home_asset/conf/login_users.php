<?php
	
	// open connection to sql database
	require "database/table_create.php";// creates connection to database
	
	// if statement checks if username and password from the form are set
	if(isset($_POST["modal_login"])){			
			// assigns the username and password from the form the variables
			$user = $_POST['usernm'];
			
			// query  database
			$results = $conn->query("SELECT * FROM sign_up_users WHERE username='$user'")
					or die("Error querying database: " . $conn->error());
			// get data from table
			$row = $results->fetch_assoc();
			
			$pass = $row['password'];
			$time = $row['reg_date'];
			$link1 = 'http://www.megagrazio.com/activate';
			$link2 = 'http://www.megagrazio.com/forgot_pass';
		
			// condition to compair inputted data with stored data
			if($row["email"] || $row["username"] == $user){
				//code for de-hashing password
				if(password_verify($_POST['passkey'], $pass)){
					//update content if condition proves true
					$result = $conn->query("UPDATE sign_in_users SET Last_seen=current_timestamp WHERE username='$user'")
							or die("Error updating database: " . $conn->error());
							
					if($row["username"] == 'fitz'){
						// updates the registration date in the database for admin
						$conn->query("UPDATE sign_in_users SET reg_date='$time' WHERE username='$user'");
						
						$_SESSION['firstname'] = $row['firstname'];
						$_SESSION['lastname'] = $row['lastname'];
						$_SESSION['user'] = $row['username'];
						
						if (session_id() == "")
						{
							session_start();
						}
						
							$_SESSION['expires_by'] = time() + $session_timeout;
							$_SESSION['expires_timeout'] = $session_timeout;
							$remember = isset($_POST['remember']) ? true : false;
						
						if ($remember)
						{
							setcookie('username', $user, time() + 60*15);
							setcookie('password', $pass, time() + 60*15);
						}
						
						$user = isset($_COOKIE['username']) ? $_COOKIE['username'] : '';
						$pass = isset($_COOKIE['password']) ? $_COOKIE['password'] : '';
						
						header("Location: /code/");			
					}
					
					else{
						// query for checking activated account
						$res = $conn->query("SELECT * FROM sign_in_users WHERE username='$user'") or die("Error querying database: " . $conn->error());
						$row_signin = $res->fetch_assoc();
						
						// redirect to dashboard if condition is met
						if($row_signin['Activated'] == '1'){
							$conn->query("UPDATE sign_in_users SET reg_date='$time' WHERE username='$user'");
							$_SESSION['firstname'] = $row['firstname'];
							$_SESSION['lastname'] = $row['lastname'];
							$_SESSION['user'] = $row['username'];
							
							
							if (session_id() == "")
							{
								session_start();
							}
							
								$_SESSION['expires_by'] = time() + $session_timeout;
								$_SESSION['expires_timeout'] = $session_timeout;
								$remember = isset($_POST['remember']) ? true : false;
							
							if ($remember)
							{
								setcookie('username', $user, time() + 60*15);
								setcookie('password', $pass, time() + 60*15);
							}
							
							$user = isset($_COOKIE['username']) ? $_COOKIE['username'] : '';
							$pass = isset($_COOKIE['password']) ? $_COOKIE['password'] : '';
							
							
							header("Location: /dashboard/");
						}
						else{
							$email = $row['email'];
							$firstname = $row['firstname'];
							$username = $row['username'];
							
							// call the PhpMailer apparatus to send e-mail
							require "mail/verify_account.php";
							
							//send the message, check for errors
							if ($mail->send()) {
								$activate = "This account is not yet activated!<br> Another email has been sent to you, please activate your account.";
								
								$text = "1,     \n\n";
								$fp = fopen('accounts.txt', 'a+');

								if(!fwrite($fp, $text))  {
									echo 'Error';
								}
								
								fclose ($fp);
							}
							else{
								$activate = "Email not sent an error occured!" . $mail->ErrorInfo;
							}
						}
					}
				}
				else{
					$err_login = "Password Invalid!<br> <a href='../forgot_pass'>Forgot password?</a>"; // error control if all above conditions fail
				}
			}
			else{
				$err_login = "Username does not exist!"; // error control if all above conditions fail
			}
	}
	$conn->close(); // close connection
?>