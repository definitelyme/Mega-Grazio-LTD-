<?php
	if (session_id() == "")
	{
	   session_start();
	}
?>
<!-- Calls the contact Validator from file -->
<?php require"configs/contact_validation.php";?>

<!DOCTYPE html>
<html>
<head>

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mega Grazio LTD, Megagrazio.com">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="contact_asset/images/logo2.jpg" type="image/x-icon">
  <meta name="description" content="">
  
  <title> Contact  |  Mega Grazio LTD </title>
  
  <link rel="stylesheet" href="bootstrap4/css/bootstrap.min.css">
  <link rel="stylesheet" href="contact_asset/web/assets/mobirise-icons/mobirise-icons.css">
  <link rel="stylesheet" href="contact_asset/tether/tether.min.css">
  <link rel="stylesheet" href="contact_asset/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="contact_asset/dropdown/css/style.css">
  <link rel="stylesheet" href="contact_asset/theme/css/style.css">
  <link rel="stylesheet" href="contact_asset/mobirise/css/mbr-additional.css" type="text/css">
  
  
  
</head>
<body style="font-family:calibri">
	<section class="menu cid-qtXYAgG2ls" id="menu2-7" data-rv-view="39">
	
		<!-- Block parameters controls (Blue "Gear" panel) -->

		<!-- End block parameters -->

		<nav class="navbar navbar-dropdown align-items-center navbar-fixed-top navbar-toggleable-sm">
			<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<div class="hamburger">
					<span></span>
					<span></span>
					<span></span>
					<span></span>
				</div>
			</button>
			<div class="menu-logo">
				<div class="navbar-brand">
					<span class="navbar-logo">
						<a href="##">
							<img src="contact_asset/images/logo.jpg" alt="Mega Grazio LTD" media-simple="true">
						</a>
					</span>
					
				</div>
			</div>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav nav-dropdown" data-app-modern-menu="true">
					<li class="nav-item">
						<a class="nav-link link text-black" href="www.megagrazio.com"> Home </a>
					</li>
					<li class="nav-item">
						<a class="nav-link link text-black" href="#about"> About Us </a>
					</li>
				</ul>
				<div class="navbar-buttons mbr-section-btn">
					<a class="btn btn-sm btn-primary" href="tel:+234-905-959-3675"> <span class="btn-icon mbri-mobile mbr-iconfont mbr-iconfont-btn"></span>+234-905-959-3675</a>
				</div>
			</div>
		</nav>
	</section>

	<!-- Block parameters controls (Blue "Gear" panel) -->   

	<!-- End block parameters -->
	<section class="mbr-section form1 cid-qtXYHA1lPJ" id="form1-8" data-rv-view="10">

		<div class="container">
			<div class="media-container-column title col-12 col-lg-8 offset-lg-2">
				<h2 class="mbr-section-title align-center display-2 pb-3">
					CONTACT US </h2>
				<h3 class="mbr-section-subtitle align-center mbr-light display-5 pb-3"><i> Feel free to contact us, we do wish to hear from you. </i></h3>
			</div>
		</div>

		<div class="container">
			<div class="media-container-column col-lg-8 offset-lg-2">
				
				<!-- Calls the contact Error Messenger from file -->
				<?php require"error_nd_success.php";?>
				
				<form class="mbr-form" action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">
					<div class="row row-sm-offset">
						<div class="col-md-4 multi-horizontal">
							<div class="form-group">
								<label class="form-control-label" for="name-form1-8"> Name </label>
								<input type="text" class="form-control" name="firstname" required id="name-form1-8">
							</div>
						</div>
						<div class="col-md-4 multi-horizontal">
							<div class="form-group">
								<label class="form-control-label" for="email-form1-8"> Email </label>
								<input type="email" class="form-control" name="email" required id="email-form1-8">
							</div>
						</div>
						<div class="col-md-4 multi-horizontal">
							<div class="form-group">
								<label class="form-control-label" for="phone-form1-8">Phone</label>
								<input type="tel" class="form-control" name="phone" id="phone-form1-8">
							</div>
						</div>
					</div>
					<div class="form-group">
						<label class="form-control-label" for="message-form1-8"> Message </label>
						<textarea type="text" class="form-control" name="message" rows="7" id="message-form1-8"></textarea>
					</div>
					
					<span class="group-btn">
						<button type="submit" class="btn btn-primary btn-form" name="contact"> SEND </button>
					</span>
					
				</form>
			</div>
		</div>
	</section>

	<section class="cid-qtXYPwn9eI" id="footer6-9" data-rv-view="44">

		<!-- Block parameters controls (Blue "Gear" panel) -->

		<!-- End block parameters -->
		
		<div class="container">
			<div class="media-container-row align-center mbr-white">
				<div class="col-12">
					<p class="mbr-text mb-0 display-7">
						Copyright &copy; <?php echo date("Y");?><a href="../../" style="color:white"> Mega Grazio LTD </a>- All Rights Reserved.
					</p>
				</div>
			</div>
		</div>
	</section>

  <script src="contact_asset/web/assets/jquery/jquery.min.js"></script>
  <script src="contact_asset/tether/tether.min.js"></script>
  <script src="contact_asset/bootstrap/js/bootstrap.min.js"></script>
  <script src="contact_asset/smooth-scroll/smooth-scroll.js"></script>
  <script src="contact_asset/dropdown/js/script.min.js"></script>
  <script src="contact_asset/touch-swipe/jquery.touch-swipe.min.js"></script>
  <script src="contact_asset/theme/js/script.js"></script>
  <script src="contact_asset/formoid/formoid.min.js"></script>
  
  
</body>
</html>