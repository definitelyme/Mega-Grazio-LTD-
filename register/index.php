<?php
// start session
session_start();
?>
<?php require "configurations/validation.php";?>
<!DOCTYPE Html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="generator" content="Megagrazio.com">
		<link rel="shortcut icon" href="../assets/images/refinery.jpg" type="image/x-icon">
		<meta name="description" content="The Sign Up Page for Mega Grazio LTD">	
		<title> Register | Mega Grazio LTD </title>
		<link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.css" type="text/css" media="screen">
		<link rel="stylesheet" href="../assets/w3/w3_v4.css" type="text/css" media="screen">
		<link rel="stylesheet" href="../assets/w3/w3_colors_nd_theme.css" type="text/css" media="screen">
		<link rel="stylesheet" href="../assets/index.css" type="text/css">
		<link rel="stylesheet" href="configurations/style.css" type="text/css">
	</head>
<body id="reg">

	<?php require "configurations/header.php";?>
	
	<br><br><br><br><br>
	<section id="mainWrapper"> <!-- Start Section -->
		<div class="container-fluid">
			<div class="row">
				<div class="col-xs-1 col-md-2">
				</div>
				<div class="col-xs-10 col-md-8">
					<!--Alert Label-->
					<?php require "configurations/error_nd_success.php";?>
					<form class="fitz-form" autocomplete="off" method="post" role="form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"><!--Form Start-->
					  <div class="fitz-input-group">
						<label class="fitz-label fitz-validate">First Name</label> <!--First name-->
						<input class="fitz-input" type="text" name="firstname" value="<?php echo $firstname;?>" id="fname">
					  </div>
					  
					  <div class="fitz-input-group">
						<label class="fitz-label fitz-validate">Last Name</label> <!--Last name-->
						<input class="fitz-input" type="text" name="lastname" value="<?php echo $lastname;?>" id="lname">
					  </div>
					  
					  <div>
						<label class="fitz-label fitz-validate">Username*</label><!-- Username -->
						<input class="fitz-input" type="text" name="username" value="<?php echo $username;?>" id="usernm" >
					  </div>
					  
					  <div class="fitz-input-group">
						<label class="fitz-label fitz-validate">E-mail*</label>	<!--Email-->	
						<div class="input-group">
							<input type="email" class="fitz-input" name="email" value="<?php echo $email;?>" id="email" >
							<span class="input-group-addon" >@email.com</span>
						</div>
					  </div>
					  
					  <div class="fitz-input-group">
						<label class="fitz-label fitz-validate">Password*</label> <!--Password-->
						<input class="fitz-input" type="password" name="password" minlength="6" id="pass" >
					  </div>
					  
					  <div class="fitz-input-group">
						<label class="fitz-label fitz-validate">Re-enter Password</label> <!--Re-enter Password-->
						<input class="fitz-input" type="password" name="conf_password">
					  </div>
					  
					  <div class="fitz-input-group">
						<label class="fitz-label fitz-validate"> Phone </label> <!--Phone-->
						<input class="fitz-input" type="tel" style="width:50%" name="phone" value="<?php echo $phone;?>" maxlength="11" >
					  </div>
					  
					  <div class="fitz-row">
						<div class="fitz-half">
							<input class="fitz-check fitz-validate" id="rem" type="checkbox" >
							<label class=""> I Agree to the <a style="text-decoration:none" href="terms.php">Terms and Conditions</a>. </label>
						</div>
					  </div>
					  <br><br>
					  
					  <!--Submit Button-->
				
						<div class="fitz-row">
							<div class="fitz-col l2 s6 m4">
								<button type="submit" id="myButton" name="REGISTER" data-loading-text="Loading..." class="fitz-btn fitz-teal" autocomplete="off">
								  REGISTER
								</button>
							</div>
							
							<div class="fitz-rest">
								<p style="margin-top:7px">Already have an account? <a style="text-decoration:none" href="../login">Login</a>.</p><br>
							</div>
						</div>
						<br><br>

						
					</form><!--Form End-->
				</div>
				<div class="col-xs-1 col-md-2">
				</div>
			</div>		
		</div>
	</section><br>
	
	<div class="fitz-bottom">
		<div class="fitz-bar">
			<footer class="fitz-container fitz-win-phone-steel fitz-padding">
			  <p class="fitz-center"> Copyright &copy; <?php echo date("Y");?> <a style="text-decoration:none" href="../"> Megagrazio.com </a></p>
			</footer>
		</div>
	</div>
	
	
	<script src="../assets/libs/jquery/jquery.min.js"></script>
	<script src="../assets/bootstrap/js/bootstrap.min.js"></script>
	<script src="../assets/libs/fitz.js"></script>
	<script>
		function myFunction() {
			var x = document.getElementById("myTopnav");
			if (x.className === "topnav") {
				x.className += " responsive";
			} else {
				x.className = "topnav";
			}
		}
	</script>
 </body>
</html>