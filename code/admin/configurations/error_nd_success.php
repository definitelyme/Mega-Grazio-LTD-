<?php
	if(isset($err)){
		echo '<br><div class="alert alert-danger alert-dismissible" role="alert">
			<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>' . $err . 
			'</div>';}
	elseif(isset($success)){
		echo '<br><div class="alert alert-success alert-dismissible" role="alert">
			<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>' . $success . 
			'</div>';}
?>