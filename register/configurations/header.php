<?php
	if(isset($_POST['login'])){require("login_users.php");}
?>
<nav class="fitz-top">
	<div class="fitz-bar">
		<div class="topnav" id="myTopnav">
			<div class="fitz-row-padding fitz-win-phone-steel">
				<div class="fitz-container fitz-col" style="padding:4px 0px 0px 0px;width:42%">
					<a class="navbar-brand">
						<img alt="Brand" src="images/cash.img2.jpg">
					</a>
					<a href="#"><b> MEGA GRAZIO </b></a>
					<a id="tag" href="../"> Home </a>
				</div>
				<!--menu_icon-->
				<a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
				
				
				
				<a class="fitz-container fitz-hide-small fitz-col" style="width:58%">
					<form id="login" class="fitz-form" autocomplete="off" action="<?php echo $_SERVER['PHP_SELF'];?>" method="post" role="form">
						<div class="fitz-container fitz-col fitz-padding" style="width:27%">
							<div class="fitz-input-group">
								<input type="text" class="fitz-input fitz-mobile" name="usernm" style="color:black" value="" placeholder="Username" required="Enter Your username">
							</div>
						</div>
					
						<div class="fitz-container fitz-col fitz-padding" style="width:27%">
							<div class="fitz-input-group">
								<input type="password" class="fitz-input fitz-mobile" name="passkey" style="color:black" value="" placeholder="Password">
							</div>
						</div>
						
						<div class="fitz-container fitz-col fitz-padding" style="width:31%">
							<div class="checkbox fitz-mobile" style="color:white">
								<input type="checkbox"> Remember me
							</div>
						</div>
						
						<div class="fitz-container fitz-col fitz-padding" style="width:15%">
							<button type="submit" name="login" class="fitz-btn fitz-teal fitz-mobile"> Login </button>
						</div>
					</form>
				</a>
			</div>
		</div>
	</div>
</nav>