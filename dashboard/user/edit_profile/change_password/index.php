<?php

	require "configurations/change_pass.php";// creates connection to database

?>
<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="generator" content="DreamCash.com">
		<link rel="shortcut icon" href="../../../../assets/images/refinery.jpg" type="image/x-icon">
		<meta name="description" content="Change Password for Mega Grazio LTD">	
		<title> Password Reset | Mega Grazio LTD </title>
		
		<link rel="stylesheet" href="../../../../activate/css/bootstrap.css">
		<link rel="stylesheet" href="../../../../activate/css/style.css" type="text/css" media="screen">
	</head>

	<body>
		<div class="wrap">
			<div class="container-fluid">
				<div class="row">
					<div class="col-xs-1 col-md-2">
					</div>
					
					<div class="col-xs-10 col-md-8">
					<!--Form Start-->
						<form autocomplete="off" method="POST" role="form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"><!--Form Start-->
							<?php require "configurations/error_nd_success.php";?><br>
							
								<input name="password" type="password" placeholder="Old password" required>
								<br>
								<input name="newpassword" type="password" placeholder="New password" required>
								<br>
								<input name="confirmpassword" type="password" placeholder="Re-enter new password">
								<br>
							<button type="submit" name="verify">Change</button>
						</form>
					<!--Form End-->
					</div>
					
					<div class="col-xs-1 col-md-2">
					</div>
				</div>
			</div>
		</div>
	  
		<script  src="js/jquery-3.2.1.min.js"></script>
		<script  src="js/index.js"></script>
	</body>

</html>
