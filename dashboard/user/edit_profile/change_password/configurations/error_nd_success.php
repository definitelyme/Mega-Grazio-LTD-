<?php 
	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		if(isset($err)){
			echo '<br><div class="alert alert-danger alert-dismissible" role="alert">
				<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>' . $err . 
				'</div>';
		}
		else if(isset($success)){
			echo '<br><div class="alert alert-success alert-dismissible" role="alert">
				<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>' . $success . 
				'</div>';
		}
	}
?>
<?php 
	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		if(isset($err_login)){
			echo '<br><div class="alert alert-danger alert-dismissible" role="alert">
				<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>' . $err_login . 
				'</div>';
		}
		else if(isset($activate)){
			echo '<br><div class="alert alert-info alert-dismissible" role="alert">
				<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>' . $activate . 
				'</div>';
		}
	}
?>