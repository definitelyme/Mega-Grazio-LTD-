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
    <head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="generator" content="Megagrazio.com">
		<link rel="shortcut icon" href="../assets/images/refinery.jpg" type="image/x-icon">
		<meta name="description" content="Admin Page">
        <title>Administrator <?php echo $_SESSION['firstname'];?></title>
		
        <link type="text/css" href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link type="text/css" href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
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
                            <div class="btn-controls">
                                <div class="btn-box-row row-fluid">
                                    <a class="btn-box big span4"><i class=" icon-random"></i><b><?php echo $growth . "%";?></b>
                                        <p class="text-muted">
                                            Growth
										</p>
                                    </a>
									<a class="btn-box big span4"><i class="icon-user"></i><b><?php echo $reg_users;?></b>
                                        <p class="text-muted">
                                            Users
										</p>
                                    </a>
									<a class="btn-box big span4"><i class="icon-money"></i><b>15,152</b>
                                        <p class="text-muted">
                                            Profit
										</p>
                                    </a>
                                </div>
                                <div class="btn-box-row row-fluid">
                                    <div class="span8">
                                        <div class="row-fluid">
                                            <div class="span12">
                                                <a href="" class="btn-box small span4"><i class="icon-envelope"></i><b>Messages</b>
                                                </a>
												<a href="" class="btn-box small span4"><i class="icon-group"></i><b>Clients</b>
                                                </a>
												<a href="" class="btn-box small span4"><i class="icon-exchange"></i><b>Expenses</b>
                                                </a>
                                            </div>
                                        </div>
                                    </div>  
                                </div>
                            </div>
                        </div>
                        <!--/.content-->
                    </div>
                    <!--/.span9-->
                </div>
            </div>
            <!--/.container-->
        </div>
        <!--/.wrapper-->
		<?php require "includes/dashboard_footer.php";?>
        <script src="scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
        <script src="scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
        <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="scripts/flot/jquery.flot.js" type="text/javascript"></script>
        <script src="scripts/flot/jquery.flot.resize.js" type="text/javascript"></script>
        <script src="scripts/datatables/jquery.dataTables.js" type="text/javascript"></script>
        <script src="scripts/common.js" type="text/javascript"></script>
      
    </body>
</html>