<?php require "login_users.php";?>
	<!-- Modal -->
	<head>
		<style>
			.fitz-my-modal, .fitz-my-modal:hover{
				height:440px; border-radius:30px"
			}
		</style>
	</head>
	<div id="id01" class="fitz-modal fitz-animate-opacity" style="z-index:200">
		<div class="fitz-modal-content fitz-card-4 fitz-animate-zoom fitz-my-modal" style="max-width:600px; height:430px; border-radius:15px">
			<header class="fitz-container">
				<span onclick="document.getElementById('id01').style.display='none'" class="fitz-button fitz-large fitz-display-topright">&times;</span>
			</header>
			<br>
			<div class="fitz-container fitz-center">
				<h2><span class="glyphicon glyphicon-user" style="color:red; height:inherit"></span>&nbsp;Login</h2>
			</div>
			<hr>
		  
			<form method="POST" class="fitz-container" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" autocomplete="off">
				<div class="fitz-section">
				  <label class="fitz-label fitz-validate"><b> Username </b></label>
				  <input class="fitz-input" type="text" name="usernm" >
				  <label class="fitz-label fitz-validate"><b> Password </b></label>
				  <input class="fitz-input" type="password" name="passkey" >
				  
				  <button class="fitz-button fitz-block fitz-green fitz-section fitz-padding fitz-right" name="modal_login" type="submit" style="width:30%"> Login </button>
				  
				  <input class="fitz-check fitz-margin-top" type="checkbox" name="remember"> Remember me
				</div>
			</form>
		  
			<footer class="fitz-container fitz-border-top fitz-padding-16 fitz-light-grey">
				<button onclick="document.getElementById('id01').style.display='none'" type="button" class="fitz-button fitz-red">Cancel</button>
				<span class="fitz-right fitz-padding fitz-hide-small">Forgot <a href="forgot_pass" style="text-decoration:none">password?</a></span>
			</footer>
		</div>
	</div>
	<!-- Modal Ends -->
	
	<script src="jquery/jquery3.min.js"></script>