<html lang="en">
<body>
<p>Redirecting...</p>
</body>
</html>
<?php
	session_start();
	
	
	session_unset($_SESSION['user']);
	session_destroy();
	
	// return to home page
	header("Location: ../../../login/");
	exit();
?>