<?php 
	if(isset($_POST['modal_login'])){
		if(isset($err_login)){
			echo '<div class=".col-md-6 .col-md-offset-3"><div class="alert alert-danger alert-dismissible" role="alert">
			<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>' . $err_login . 
			'</div></div>';
		}
		elseif(isset($activate)){
			echo '<div class=".col-md-6 .col-md-offset-3"><div class="alert alert-info alert-dismissible" role="alert">
			<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>' . $activate . 
			'</div></div>';
		}
	}
?>