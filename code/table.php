<?php
// start session
session_start();
if(!isset($_SESSION['user'])){
	header("Location: ../login/");
	exit();
}
require("scripts/php/data.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="generator" content="Megagrazio.com">
		<link rel="shortcut icon" href="images/cash.exchange.jpg" type="image/x-icon">
		<meta name="description" content="Admin Page">
		<title>Administrator <?php echo $_SESSION['firstname'];?></title>
		
		<link type="text/css" href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
		<link type="text/css" href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
		<link type="text/css" href="css/theme.css" rel="stylesheet">
		<link type="text/css" href="images/icons/css/font-awesome.css" rel="stylesheet">
		<link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600' rel='stylesheet'>
</head>
<body>
<?php require "includes/dashboard_header.php";?>
	<div class="wrapper">
		<div class="container">
			<div class="row">
			<?php require "includes/dashboard_sidebar.php";?>
				<div class="span9">
					<div class="content">

						<div class="module">
							<div class="module-head">
								<h3>Signed up users</h3>
							</div>
							<div class="module-body">
							<?php require("scripts/php/table_data.php");?>
							</div>
						</div>
					<br />
					</div><!--/.content-->
				</div><!--/.span9-->
			</div>
		</div><!--/.container-->
	</div><!--/.wrapper-->

	<?php require "includes/dashboard_footer.php";?>

	<script src="scripts/jquery-1.9.1.min.js"></script>
	<script src="scripts/jquery-ui-1.10.1.custom.min.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>
	<script src="scripts/datatables/jquery.dataTables.js"></script>
	<script>
		$(document).ready(function() {
			$('.datatable-1').dataTable();
			$('.dataTables_paginate').addClass("btn-group datatable-pagination");
			$('.dataTables_paginate > a').wrapInner('<span />');
			$('.dataTables_paginate > a:first-child').append('<i class="icon-chevron-left shaded"></i>');
			$('.dataTables_paginate > a:last-child').append('<i class="icon-chevron-right shaded"></i>');
		} );
	</script>
</body>