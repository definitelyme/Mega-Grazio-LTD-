<?php 
	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		if(isset($err_login)){
			echo '<link rel="stylesheet" href="css/exit.css">
			<div class=".col-md-6 .col-md-offset-3"><div class="alert alert-danger alert-dismissible" role="alert"><div style="margin-top:10px;margin-bottom:10px">' . $err_login . 
			'</div></div></div>
			
			<script src="css/jquery-3.3.1.min.js"></script>
			<script>
				$(".exit").click(function(){
					$(this).parent().css("display","none");
				});
			</script>';
		}
		elseif(isset($activate)){
			echo '<link rel="stylesheet" href="css/exit.css">
			<div class=".col-md-6 .col-md-offset-3"><div class="alert alert-info alert-dismissible" role="alert"><div style="margin-top:10px;margin-bottom:10px">' . $activate . 
			'</div></div></div>
			
			<script src="css/jquery-3.3.1.min.js"></script>
			<script>
				$(".exit").click(function(){
					$(this).parent().css("display","none");
				});
			</script>';
		}
	}
?>