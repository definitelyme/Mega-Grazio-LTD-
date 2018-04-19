<?php
// start session
session_start();
if(!isset($_SESSION['user'])){
	header("Location: ../login/");
	exit();
}
require("admin/configurations/validation.php")
?>
<!DOCTYPE html>
<html lang="en">


<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="generator" content="DreamCash.com">
		<link rel="shortcut icon" href="images/cash.exchange.jpg" type="image/x-icon">
		<meta name="description" content="Admin Page">
		<title>Administrator <?php echo $_SESSION['firstname'];?></title>
		
		<link type="text/css" href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
		<link type="text/css" href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
		<link type="text/css" href="css/theme.css" rel="stylesheet">
		<link type="text/css" href="images/icons/css/font-awesome.css" rel="stylesheet">
		<link type="text/css" href="bootstrap/css/style.css" rel="stylesheet">
		<link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600' rel='stylesheet'>
	
</head>
<body>
<?php require "includes/dashboard_header.php";?>
	<div class="wrapper">
		<div class="container">
			<div class="row">
				<?php require "includes/dashboard_sidebar.php";?>
				<div class="span9">
					<div class="content">

						<div class="module">
							<div class="module-head">
								<h3> Register New User From Panel </h3>
							</div>
							<div class="module-body">
								<div class="container-fluid">
									<div class="row">
										<div class="col-xs-1 col-md-2">
										</div>
										<div class="col-xs-10 col-md-6">
										<?php include("admin/configurations/error_nd_success.php");?>
											<!--Alert Label-->
											<form class="form-horizontal" autocomplete="off" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" role="form"><!--Form Start-->
												<div class="form-group"> <!--First name-->
													<label>First Name*</label>
													<input type="text" class="form-control" style="width:100%" name="firstname" value="" autofocus required>
												</div>

												<div class="form-group"> <!--Last name-->
													<label>Last Name</label>
													<input type="text" class="form-control" style="width:100%" name="lastname" value="">
												</div>

												<div class="form-group"> <!--Username-->
													<label>Username*</label>
													<input type="text" class="form-control" style="width:100%" name="username" value="" required>
												</div>

												<div class="form-group"> <!--Password-->
													<label>Password*</label>
													<input type="password" class="form-control" style="width:100%" name="password" min="6" required>
												</div>

												<div class="form-group"><!--Re-enter password-->
													<label>Re-enter Password</label>
													<input type="password" class="form-control" style="width:100%" name="conf_password">
												</div>

												<div class="form-group"><!--Email-->
													<label>E-mail*</label>
													<input type="email" class="form-control" style="width:100%" name="email" value="" required>
												</div>


												<div class="form-group"> <!--Phone-->
													<label>Phone*</label>
													<input type="tel" class="form-control" style="width:100%" name="phone" value="" max-length="11" required>
												</div><br>

												<!--Submit Button-->
												<div class="dog">
												<input type="submit" class="btn btn-primary" name="REGISTER" value="INSERT NEW USER">
												</div>
											</form><!--Form End-->
										</div>
										<div class="col-xs-1 col-md-2">
										</div>
									</div>
								</div>	
							</div>
						</div>
					</div><!--/.content-->
				</div><!--/.span9-->
			</div>
		</div><!--/.container-->
	</div><!--/.wrapper-->

	<?php require "includes/dashboard_footer.php";?>

	<script src="scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
	<script src="scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
	<script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="scripts/flot/jquery.flot.js" type="text/javascript"></script>
</body>