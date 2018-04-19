<?php
	// start session
	if (session_id() == "")
	{
	   session_start();
	}
	
	if(!isset($_SESSION['random_txt'])){
		header("Location: ../capt/");
		exit;		
	}
?>
<?php if(isset($_POST['login'])){require("configurations/login_users.php");}?>
<!DOCTYPE html>
<html lang="en">
	<head>
			<meta charset="UTF-8">
			<meta http-equiv="X-UA-Compatible" content="IE=edge">
			<meta name="generator" content="www.Megagrazio.com/login">
		<!--===============================================================================================-->	
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<link rel="shortcut icon" href="../assets/images/refinery.jpg" type="image/x-icon">
		<!--===============================================================================================-->	
			<meta name="description" content="Login Page of Mega Grazio LTD">
		<!--===============================================================================================-->	
			<title>Login | Mega Grazio</title>
		<!--===============================================================================================-->			
			<link rel="stylesheet" href="css/bootstrap.css">
		<!--===============================================================================================-->
			<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
		<!--===============================================================================================-->
			<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
		<!--===============================================================================================-->
			<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
		<!--===============================================================================================-->
			<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
		<!--===============================================================================================-->	
			<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
		<!--===============================================================================================-->
			<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
		<!--===============================================================================================-->
			<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
		<!--===============================================================================================-->	
			<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
		<!--===============================================================================================-->
			<link rel="stylesheet" type="text/css" href="css/util.css">
			<link rel="stylesheet" type="text/css" href="css/main.css">
		<!--===============================================================================================-->
		
		<style>
			.fitz-myfont{
				font-family:"Comic Sans MS", serif;
			}
		</style>
	</head>
	<body>
		<div class="limiter">
			<div class="wrap-login100" style="margin-top:0px;margin-bottom:0px">
				<?php require("configurations/error_nd_success.php")?>
			</div>
			
			<div class="container-login100">
				<div class="wrap-login100">
					<form class="login100-form validate-form" autocomplete="off" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" role="form">
						
						<div class="wrap-input100 validate-input" data-validate = "Valid email is: abc@email.com">
							<input class="input100" type="text" name="usernm" value="">
							<span class="focus-input100" data-placeholder="Username or Email"></span>
						</div>

						<div class="wrap-input100 validate-input" data-validate="Enter password">
							<span class="btn-show-pass">
								<i class="zmdi zmdi-eye"></i>
							</span>
							<input class="input100" type="password" name="passkey" value="">
							<span class="focus-input100" data-placeholder="Password"></span>
						</div>
						
						<div class="wrap-input100 validate-input">
							<label class="input100 fitz-myfont">
								<input type="checkbox" style="width:20px;height:20px" name="remember">&nbsp; Remember me
							</label>
						</div>

						<div class="container-login100-form-btn">
							<div class="wrap-login100-form-btn">
								<div class="login100-form-bgbtn"></div>
								<button class="login100-form-btn" type="submit" name="login" autocomplete="off">
									Login
								</button>
							</div>
						</div>

						<div class="text-center p-t-115">
							<a class="txt1" href="../forgot_pass">
								Forgot your password?
							</a>
						</div>
						
						<div class="text-center p-t-115">
							<span class="txt1">
								Don’t have an account?
							</span>

							<a class="txt2" href="../register">
								Sign Up
							</a>
						</div>
					</form>
				</div>
			</div>
		</div>
		

		<div id="dropDownSelect1"></div>
		
	<!--===============================================================================================-->
		<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
	<!--===============================================================================================-->
		<script src="vendor/animsition/js/animsition.min.js"></script>
	<!--===============================================================================================-->
		<script src="vendor/bootstrap/js/popper.js"></script>
		<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
	<!--===============================================================================================-->
		<script src="vendor/select2/select2.min.js"></script>
	<!--===============================================================================================-->
		<script src="vendor/daterangepicker/moment.min.js"></script>
		<script src="vendor/daterangepicker/daterangepicker.js"></script>
	<!--===============================================================================================-->
		<script src="vendor/countdowntime/countdowntime.js"></script>
	<!--===============================================================================================-->
		<script src="js/main.js"></script>

	</body>
</html>