<?php
	
	if(isset($_POST["contact"])){
 
		// EDIT THE 2 LINES BELOW AS REQUIRED
		$email_to = "omsomega34@gmail.com";
		$email_subject = "Sir! You've got a message from Mega Grazio LTD";
		
		
		// get details from contact form
		$firstname = $_POST['firstname']; // required
		$email = $_POST['email']; // required
		$phone = $_POST['phone']; // not required
		$message = $_POST['message']; // required

		$email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
		$string_exp = "/^[A-Za-z .'-]+$/";
		
		
		// validation expected data exists
		if(!isset($_POST['firstname']) || !isset($_POST['email']) || !isset($_POST['phone']) || !isset($_POST['message'])) {
			$err = 'We are sorry, but there appears to be a problem with the form you submitted.';       
		}
		

		elseif(!preg_match($email_exp, $email)) {
			$err = 'The Email Address entered does not appear to be valid.<br />';
		}


		elseif(!preg_match($string_exp, $firstname)) {
			$err = 'The First Name you entered does not appear to be valid.<br />';
		}

		elseif(strlen($message) < 2) {
			$err = 'The Message you entered do not appear to be valid.<br />';
		}
		
		else{
			/**
			 * This example shows settings to use when sending via Google's Gmail servers.
			 */

			//SMTP needs accurate times, and the PHP time zone MUST be set
			//This should be done in your php.ini, but this is how to do it if you don't have access to that
			date_default_timezone_set('Etc/UTC');

			require 'PHPMailer-master/PHPMailerAutoload.php';

			//Create a new PHPMailer instance
			$mail = new PHPMailer;

			//Tell PHPMailer to use SMTP
			$mail->isSMTP();

			//Enable SMTP debugging
			// 0 = off (for production use)
			// 1 = client messages
			// 2 = client and server messages
			$mail->SMTPDebug = 0;

			//Ask for HTML-friendly debug output
			$mail->Debugoutput = 'html';

			//Set the hostname of the mail server
			$mail->Host = "mail.megagrazio.com";

			//Set the SMTP port number - likely to be 25, 465 or 587
			$mail->Port = 25;

			//Whether to use SMTP authentication
			$mail->SMTPAuth = true;

			//Username to use for SMTP authentication
			$mail->Username = "megagraz";

			//Password to use for SMTP authentication
			$mail->Password = "z2BtsO62s3";

			//Set who the message is to be sent from
			$mail->setFrom('info@megagrazio.com', 'Mega Grazio LTD');

			//Set an alternative reply-to address
			$mail->addReplyTo('replyto@example.com', 'Mega Grazio LTD');

			//Set who the message is to be sent to
			$mail->addAddress($email_to, 'Boss');

			//Set the subject line
			$mail->Subject = $email_subject;
			
			//Send HTML mails
			$mail->IsHTML(true);

			//Replace the plain text body with one created manually
			$mail->Body = "<html>
								<head>
									<link rel='shortcut icon' href='cash.exchange.jpg' type='image/x-icon'>
									<link rel='stylesheet' href='../assets/w3/w3_v4.css' type='text/css' media='screen'>
									<link rel='stylesheet' href='../assets/libs/fitz_theme.css'>
								</head>
								<body>
									
									<section class='fitz-container' style='margin-top:20px'>
										Hey " . $firstname . ",
										
										<br><br><br>
										
										You're seeing this email because you created an account at Megagrazio.com!<br><br>
										
										Your username is " . $username . "<br><br>
										
										<p align='center'>Yes! You're almost there.</p>
										
										<p style='background-color:lightgrey;height:30px;line-height:45px;border-radius:2px' align='center'>
											<a href='http://www.megagrazio.com/verify'> Confirm your email address here </a> before you <a href='http://www.megagrazio.com/login'> Login </a>.
										</p>
										
										<br>
										If you have forgotten your password, please <a href='http://www.megagrazio.com/forgot_pass'> recover your password here </a>.
										
										
										<p style='margin-top:20px'> - Regards <b> Mega Grazio LTD. </b></p>
										
										<br>
										
										<p style='float:right'> Thank You! </p>
										<br>
									</section>
									
								</body>
							</html>";
							
			// If mailer does not support HTML
			$mail->AltBody = "
			Hey " . $firstname . ",


			You're seeing this email because you created an account at Megagrazio.com!

			Your username is " . $username . "

			Yes! Yes!! You're almost there.

			Confirm your email address here -> http://www.megagrazio.com/verify before you Login here -> http://www.megagrazio.com/login

			If you have forgotten your password, please recover your password here -> http://www.megagrazio.com/forgot_pass



			- Regards Mega Grazio LTD.
			";

			
			//send the message, check for errors
			if (!$mail->send()) {
				$err = "Oops! Mail not sent please contact <a href='mailto:omsomega34@gmail.com'> Administrator</a>: " . $mail->ErrorInfo;
			}
			
			else{
				$success = "Thanks for reaching out. We'll reply shortly..";
			}
		}
	}
?>