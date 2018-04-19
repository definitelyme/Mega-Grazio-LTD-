<?php
require "configurations/forgot_pass.php";// creates connection to database
?>
<!Doctype html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="generator" content="Megagrazio.com">
		<link rel="shortcut icon" href="../assets/images/refinery.jpg" type="image/x-icon">
		<meta name="description" content="Change Password for Mega Grazio LTD">	
		<title> Forgot Password </title>
		<link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.css" type="text/css" media="screen">
		<link rel="stylesheet" href="../assets/w3/w3_v4.css" type="text/css" media="screen">
		<link rel="stylesheet" href="../assets/index.css" type="text/css">
		<link rel="stylesheet" href="../assets/libs/fitz_theme.css">
		<link rel='stylesheet' href="../assets/fonts.googleapis.com/family_Open+sans.css">
		<link rel="stylesheet" href="../assets/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">		
	</head>
	<body>
		<section id="mainWrapper"> <!-- Start Section -->
			<div class="container-fluid">
				<div class="row">
					<div class="col-xs-1 col-md-2">
					</div>
					<div class="col-xs-10 col-md-8">
						<!--Alert Label-->
						<?php require "configurations/error_nd_success.php";?>
						<!--Form Start-->
						<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
							<div class="fitz-input-group">
								<label class="fitz-label fitz-validate"> Username/Email: </label>
								<input class="fitz-input" name="username" type="text" required value="<?php if(isset($_POST['changepassword'])){echo $value;} ?>">
							</div>
							<div class="fitz-input-group">
								<label class="fitz-label fitz-validate"> New Password: </label>
								<input class="fitz-input" name="newpassword" type="password" required>
							</div>
							<div class="fitz-input-group">
								<label class="fitz-label fitz-validate"> Confirm New Password: </label>
								<input class="fitz-input" name="confirmpassword" type="password" required>
							</div><br>
							<input class="fitz-btn fitz-teal" type="submit" name="changepassword" value="Change Password" autocomplete="off">
						</form><!--Form End-->
					</div>
					<div class="col-xs-1 col-md-2">
					</div>		
				</div>
			</div>
		</section><br>
		
		<footer class="footer">
		  <div class="container">
			<p class="text-muted">2017 &copy; Copyright Megagrazio.com</p>
		  </div>
		</footer>
		
		
		<script src="../assets/libs/jquery/jquery.min.js"></script>
		<script src="../assets/bootstrap/js/bootstrap.min.js"></script>
		<script src="../assets/libs/fitz.js"></script>		
	</body>
</html>