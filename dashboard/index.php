<?php
// start session
session_start();

if(!isset($_SESSION['user'])){
	header("Location: ../login/");
	exit();
}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title><?php echo $_SESSION["firstname"];?> | Dashboard</title>
		<link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.css" type="text/css" media="screen">
		<link rel="shortcut icon" href="../assets/images/refinery.jpg" type="image/x-icon">
		<link rel="stylesheet" href="../assets/w3/w3_v4.css" type="text/css" media="screen">
		<link rel="stylesheet" href="../assets/libs/fitz_theme.css">
		<link rel='stylesheet' href="../assets/fonts.googleapis.com/family_Open+sans.css">
		<link rel="stylesheet" href="../assets/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<script src="../assets/libs/jquery/jquery.min.js"></script>
		<style>
			html,body,h1,h2,h3,h4,h5 {font-family: "Open Sans", sans-serif}
		</style>
	</head>
	<body class="fitz-theme-l5">
		<!-- Navbar -->
		<div class="fitz-top">
			<div class="fitz-bar fitz-theme-d2 fitz-left-align fitz-large">
				<a class="fitz-bar-item fitz-button fitz-hide-medium fitz-hide-large fitz-right fitz-padding-large fitz-hover-white fitz-large fitz-theme-d2" href="javascript:void(0);" onclick="openNav()"><i class="glyphicon glyphicon-menu-hamburger"></i></a>
				<a href="index.php" class="fitz-bar-item fitz-button fitz-padding-large fitz-theme-d4"><i class="glyphicon glyphicon-home fitz-margin-right"></i></a>
				<a href="user/news" class="fitz-bar-item fitz-button fitz-hide-small fitz-padding-large fitz-hover-white" title="News"><i class="glyphicon glyphicon-globe"></i></a>
				<a href="user/account_settings" class="fitz-bar-item fitz-button fitz-hide-small fitz-padding-large fitz-hover-white" title="Account Settings"><i class="glyphicon glyphicon-user"></i></a>
				<a href="user/messages" class="fitz-bar-item fitz-button fitz-hide-small fitz-padding-large fitz-hover-white" title="Messages"><i class="glyphicon glyphicon-inbox"></i></a>
				<div class="fitz-dropdown-hover fitz-hide-small">
					<button class="fitz-button fitz-padding-large" title="Notifications"><i class="glyphicon glyphicon-bell"></i><span class="fitz-badge fitz-right fitz-small fitz-green">3</span></button>     
					<div class="fitz-dropdown-content fitz-card-4 fitz-bar-block" style="width:300px">
					  <a href="#" class="fitz-bar-item fitz-button">One new friend request</a>
					  <a href="#" class="fitz-bar-item fitz-button">John Doe posted on your wall</a>
					  <a href="#" class="fitz-bar-item fitz-button">Jane likes your post</a>
					</div>
				</div>
				<a class="fitz-bar-item fitz-hide-small fitz-right fitz-padding-large" id="dropdown" title="My Account">
					<img src="images/avatar2.png" class="fitz-circle" style="height:25px;width:25px" alt="Avatar">
				</a>
			</div>
			<!-- Navbar on Large screens -->
			<div class="fitz-dropdown-content fitz-hide-small fitz-bar-block fitz-right" id="info" style="margin-left:90%">
				<a href="index.php" class="fitz-bar-item fitz-button"> Home </a>
				<a href="user/edit_profile/change_password" class="fitz-bar-item fitz-button"> Edit Profile </a>
				<a href="logout" class="fitz-bar-item fitz-button"> Logout </a>
			</div>
		</div>

		<!-- Navbar on small screens -->
		<div id="navDemo" class="fitz-bar-block fitz-theme-d2 fitz-hide fitz-hide-large fitz-hide-medium fitz-large">
			<a href="index.php" class="fitz-bar-item fitz-button fitz-padding-large"> Home </a>
			<a href="user/profile" class="fitz-bar-item fitz-button fitz-padding-large"> My Profile </a>
			<a href="user/edit_profile/change_password" class="fitz-bar-item fitz-button fitz-padding-large"> Edit Profile </a>
			<a href="logout" class="fitz-bar-item fitz-button fitz-padding-large"> Logout </a>
		</div>

		<!-- Page Container -->
		<div class="fitz-container fitz-content" style="max-width:1400px;margin-top:80px" id="contain">    
			<!-- The Grid -->
			<div class="fitz-row">
					<!-- Left Column -->
				<div class="fitz-col m3">
					<!-- Profile -->
					<div class="fitz-card-2 fitz-round fitz-white">
						<div class="fitz-container"><br>
							<p class="fitz-center"><img src="images/avatar3.png" class="fitz-circle" style="height:106px;width:106px" alt="Avatar"></p>
							<hr>
							<p><i class="glyphicon glyphicon-pencil fitz-margin-right fitz-text-theme"></i><?php echo $_SESSION["firstname"]  . " " . $_SESSION["lastname"];?></p>
							<p><i class="glyphicon glyphicon-home fitz-margin-right fitz-text-theme"></i><?php if(!isset($_SESSION["location"])){echo "<a href='edit_profile/'>Add Location</a>";} else{echo $_SESSION["location"];}?></p>
							<p><i class="glyphicon glyphicon-calendar fitz-margin-right fitz-text-theme"></i><?php if(!isset($_SESSION["birthday"])){echo "<a href='edit_profile/'>Add birthday</a>";} else{echo $_SESSION["birthday"];}?></p>
						</div>
					</div>
					<br>
				  
					<!-- Accordion -->
					<div class="fitz-card-2 fitz-round">
						<div class="fitz-white">
						
							<!-- Groups dropdown -->
							<button onclick="myFunction('Demo1')" class="fitz-button fitz-block fitz-theme-l1 fitz-left-align"><i class="glyphicon glyphicon-unchecked fitz-margin-right"></i> My Groups</button>
							<div id="Demo1" class="fitz-hide fitz-container">
								<p>Group 1</p>
								<hr>
								<p>Group 2</p>
							</div>
							
							<!-- Events dropdown -->
							<button onclick="myFunction('Demo2')" class="fitz-button fitz-block fitz-theme-l1 fitz-left-align"><i class="glyphicon glyphicon-calendar fitz-margin-right"></i> My Events</button>
							<div id="Demo2" class="fitz-hide fitz-container">
								<p>This event are coming up soon...</p>
							</div>
							
							<!-- Photos dropdown -->
							<button onclick="myFunction('Demo3')" class="fitz-button fitz-block fitz-theme-l1 fitz-left-align"><i class="	glyphicon glyphicon-picture fitz-margin-right"></i> My Photos</button>
							<div id="Demo3" class="fitz-hide fitz-container">
								<div class="fitz-row-padding">
								<br>
									<div class="fitz-half">
										<img src="images/lights.jpg" style="width:100%" class="fitz-margin-bottom">
									</div>
									<div class="fitz-half">
										<img src="images/nature.jpg" style="width:100%" class="fitz-margin-bottom">
									</div>
									<div class="fitz-half">
										<img src="images/mountains.jpg" style="width:100%" class="fitz-margin-bottom">
									</div>
									<div class="fitz-half">
										<img src="images/forest.jpg" style="width:100%" class="fitz-margin-bottom">
									</div>
									<div class="fitz-half">
										<img src="images/nature.jpg" style="width:100%" class="fitz-margin-bottom">
									</div>
									<div class="fitz-half">
										<img src="images/fjords.jpg" style="width:100%" class="fitz-margin-bottom">
									</div>
								</div>
							</div>
						</div>      
					</div>
					<br>

				  
					<!-- Alert Box -->
					<div class="fitz-container fitz-display-container fitz-round fitz-theme-l4 fitz-border fitz-theme-border fitz-margin-bottom fitz-hide-small">
						<span onclick="this.parentElement.style.display='none'" class="fitz-button fitz-theme-l3 fitz-display-topright">
						  <i class="glyphicon glyphicon-remove"></i>
						</span><br>
						<p><strong> Hey! </strong></p>
						<p>Check out this trending <a href="">info</a></p>
					</div>
				<!-- End Left Column -->
				</div>
				
				<!-- Middle Column -->
				<div class="fitz-col m7">
					<div class="fitz-row-padding">
						<div class="fitz-col m12">
							<div class="fitz-card-2 fitz-round fitz-white">
								<div class="fitz-container">
									<div class="fitz-row-padding"><br>
										<div class="fitz-half" style="padding-bottom:12px">
											<button type="button" class="fitz-btn fitz-block fitz-mobile fitz-ripple fitz-white fitz-border fitz-border-red fitz-round fitz-xlarge"><strong> PROVIDE </strong></button>
										</div>
										
										<div class="fitz-half">
											<button type="button" class="fitz-btn fitz-block fitz-mobile fitz-ripple fitz-white fitz-border fitz-border-red fitz-round fitz-xlarge"><strong> REQUEST </strong></button>
										</div>
										
									</div><br>
									<p> This continues... </p>
								</div>
							</div>
						</div>
					</div>
				<!-- End Middle Column -->
				</div>
				
				<!-- Right Column -->
				<div class="fitz-col m2">
					<div class="fitz-card-2 fitz-round fitz-white fitz-center fitz-hide-small">
						<div class="fitz-container"><br>
						  <p>Upcoming Events:</p>
						  <img src="images/forest.jpg" alt="Forest" style="width:100%;">
						  <br><br>
						  <p><strong>Holiday</strong></p>
						  <p>Friday 15:00</p>
						  <p><button class="fitz-button fitz-block fitz-theme-l4">Info</button></p>
						</div>
					</div>
					<br>
				<!-- End Right Column -->
				</div>
			  <!-- End Grid -->
			</div>
		<!-- End Page Container -->
		</div>
		<br>

		<!-- Footer -->
		<footer class="fitz-container fitz-theme-d3 fitz-padding-16">
		  <h5 class="fitz-center"> Copyright &copy; <?php echo date("Y");?> <a href="logout.php"> Mega Grazio LTD </a></h5>
		</footer>

		<footer class="fitz-container fitz-theme-d5">
		  <p class="fitz-center"> Powered by Tynx &reg; </p>
		</footer>
		 
		<script>
			//dropdown
			$(document).ready(function(){
				$("#dropdown").on("click", function(){
					$("#info").toggle();
					$("#info, a").css("textDecoration", "none");
					$(this).addClass("fitz-white");
				});
				$("#contain").on("click", function(){
					$("#info").hide();
					$("#dropdown").removeClass("fitz-white");
				});
			});
			
			// Accordion
			function myFunction(id) {
				var x = document.getElementById(id);
				if (x.className.indexOf("fitz-show") == -1) {
					x.className += " fitz-show";
					x.previousElementSibling.className += " fitz-theme-d1";
				} else { 
					x.className = x.className.replace("fitz-show", "");
					x.previousElementSibling.className = 
					x.previousElementSibling.className.replace(" fitz-theme-d1", "");
				}
			}

			// Used to toggle the menu on smaller screens when clicking on the menu button
			function openNav() {
				var x = document.getElementById("navDemo");
				if (x.className.indexOf("fitz-show") == -1) {
					x.className += " fitz-show";
				} else { 
					x.className = x.className.replace(" fitz-show", "");
				}
			}
		</script>
	</body>
</html> 
