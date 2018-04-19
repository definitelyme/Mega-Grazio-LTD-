<?php 
	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		if(isset($err)){
			echo '<div class="alert alert-danger alert-dismissible" role="alert">
			<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>' . $err . 
			'</div>';
		}
		elseif(isset($activate)){
			echo '<link rel="stylesheet" href="bootstrap/css/bootstrap.css" type="text/css" media="screen">
			<div><div class="alert alert-info alert-dismissible" role="alert">
			<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>' . $activate . 
			'</div>';
		}
	}
?>