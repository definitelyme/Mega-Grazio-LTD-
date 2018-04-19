<?php
/**
 * This example shows making an SMTP connection with authentication.
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
$mail->addAddress($email, $firstname);

//Set the subject line
$mail->Subject = 'Account Verification';

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