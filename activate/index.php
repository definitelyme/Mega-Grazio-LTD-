<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="generator" content="DreamCash.com">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="verification Page of Dream Cash">
		<link rel="shortcut icon" href="../assets/images/refinery.jpg" type="image/x-icon">
		
		<title>Mega Grazio | Activate</title>
		
		<link rel="stylesheet" href="css/bootstrap.css">
		<link rel="stylesheet" href="css/style.css">
	</head>

	<body>
	<?php require "configurations/validate_data.php";?>
		<div class="wrap">
			<div class="container-fluid">
				<div class="row">
					<div class="col-xs-1 col-md-2">
					</div>
					
					<div class="col-xs-10 col-md-8">
						<div class="avatar">
							<p><b> Activiate </b></p>
						</div>
						<form class="login" autocomplete="off" method="POST" role="form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"><!--Form Start-->
							<?php require "configurations/error_nd_success.php";?><br>
							<input type="text" name="username" placeholder="Email" required>
							
							<div class="bar">
								<i></i>
							</div>
							
							<input type="password" name="passkey" placeholder="password" required>
							
							<a href="../forgot_pass" class="forgot_link">forgot ?</a>
							
							<button type="submit" name="verify">GO</button>
						</form>
					</div>
					
					<div class="col-xs-1 col-md-2">
					</div>
				</div>
			</div>
		</div>
	  
		<script  src="js/index.js"></script>
	</body>

</html>
