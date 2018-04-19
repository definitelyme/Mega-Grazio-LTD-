<?php 
	if(isset($_POST["contact"])){
		if(isset($err)){
			echo '<br><div class="alert alert-danger alert-dismissible" style="background-color:#878787;height:auto" role="alert">
				<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>' . $err . 
				'</div>';
		}
		
		elseif(isset($success)) {
			echo '<br><div class="alert alert-success alert-dismissible" style="height:auto" role="alert">
					<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>' . $success . 
					'</div>';
		}
	}
?>