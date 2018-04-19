<?php 
	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		if(isset($err_verify)){
			echo '<br><div class="alert alert-danger alert-dismissible" role="alert">' . $err_verify . 
				'</div>';
		}
		else if(isset($success_verify)){
			echo '<br><div class="alert alert-info alert-dismissible" role="alert">' . $success_verify . 
				'</div>';
		}
	}
?>