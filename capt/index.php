<?php
	if (session_id() == "")
	{
	   session_start();
	}

	if ($_SERVER['REQUEST_METHOD'] == 'POST')
	{
	   if (isset($_POST['captcha_code'],$_SESSION['random_txt']) && md5($_POST['captcha_code']) == $_SESSION['random_txt'])
		{
			header("Location: ../login");
			exit;
		}
	   else{
		   $err = "The entered captcha code is wrong!";
		}
	}
?>
<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="generator" content="Dream Cash Works">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="shortcut icon" href="../assets/images/refinery.jpg" type="image/x-icon">
		<meta name="description" content="This Captcha page for Mega Grazio">
		<title> Waiting... </title>
		
		<link rel="stylesheet" href="../assets/w3/w3_v4.css" type="text/css" media="screen">
		<link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.css" type="text/css" media="screen">
		<style>
			.align_center {
				max-width: 600px;
				height: 370px;
				margin: auto;
				background: white;
				padding: 10px;
			}
		</style>
	</head>
	<body><br><br><br><br>
		<div class="fitz-container">
			<div class="fitz-row">
				<div class="fitz-center">
					<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" autocomplete="off" class="align_center fitz-card-2">
					<?php require("error_captcha.php");?>
					<br><br>
						<div class="fitz-input-group">
							<img src="captcha1.php" class="img-responsive" alt="Click for new image" style="cursor:pointer;margin:auto" id="capt"><br>
							<input class="fitz-input" type="text" style="width:50%;margin:auto" maxlength="9" name="captcha_code" value="" title="Captcha" autofocus>
						</div><br>
						<input class="fitz-btn fitz-grey" type="submit"  onclick="document.getElementById('id01').style.display='block'" name="submit" value="Submit"><br><br>
					</form>
				</div>
			</div>
		</div>
		<script src="../assets/libs/jquery/jquery.min.js"></script>
		<script>
			$(document).ready(function(){
				$("#capt").click(function(){
					this.src='captcha1.php?'+Math.random();
				});
			});
		</script>
	</body>
</html>