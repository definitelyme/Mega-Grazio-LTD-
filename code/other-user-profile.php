<?php
// start session
session_start();
if(!isset($_SESSION['user'])){
	header("Location: ../login/");
	exit();
}
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
<?php require "includes/dashboard_header.php";?> <!-- include page header -->
    <div class="wrapper">
        <div class="container">
            <div class="row">
			<?php require "includes/dashboard_sidebar.php";?> <!-- include page side-bar -->
                <div class="span9">
                    <div class="content">
                        <div class="module">
                            <div class="module-body">
                                <div class="profile-head media">
                                    <a href="#" class="media-avatar pull-left">
                                        <img src="images/user.png">
                                    </a>
                                    <div class="media-body">
                                        <h4>
                                            <?php echo $_SESSION['firstname']?> <small>Online</small>
                                        </h4>
                                        <p class="profile-brief">
											Admin is a cool guy
                                        </p>
                                        <div class="profile-details muted">
                                            <a href="#" class="btn"><i class="icon-plus shaded"></i>Send Friend Request </a>
                                            <a href="#" class="btn"><i class="icon-envelope-alt shaded"></i>Send message </a>
                                        </div>
                                    </div>
                                </div>
                                <ul class="profile-tab nav nav-tabs">
                                    <li class="active"><a href="#friends" data-toggle="tab">Users</a></li>
                                </ul>
                                <div class="profile-tab-content tab-content">
                                    <div class="tab-pane fade active in" id="friends">
                                        <div class="module-option clearfix">
                                            <form auutocomplete="off" class="form-control" method="GET" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" role="form">
                                            <div class="input-append pull-left">
                                                <input type="text" class="span3" name="search_name" placeholder="Search user..." autofocus>
                                                <button type="submit" class="btn" name="search">
                                                    <i class="icon-search"></i>
                                                </button>
                                            </div>
                                            </form>
                                            <div class="btn-group pull-right" data-toggle="buttons-radio">
												<form method="GET" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
													<button name="all" type="submit" class="btn" onclick="all()">
														All
													</button>
													<button name="male" type="submit" class="btn" onclick="male()">
														Male
													</button>
													<button name="female" type="submit" class="btn" onclick="female()">
														Female
													</button>
												</form>
                                            </div>
                                        </div>
										<?php 
											if(isset($_GET['search'])){
												require("scripts/php/data.php");
												if(isset($profile)){
													echo $profile;
												}
												elseif(isset($err)){
													include "admin/configurations/error_nd_success.php";
												}
											}
										?>
										<?php if(isset($_GET['all'])){ require("scripts/php/data.php")?>
												<?php while($list_array = $all_users->fetch_assoc()){
												?>
										<div class="datatable-1 table">
											<div class="row-fluid">
												<div class="span6">
													<div class="media user">
														<a class="media-avatar pull-left" href="#">
															<img src="images/user.png">
														</a>
														<div class="media-body">
															<h3 class="media-title">
																<?php echo $list_array['firstname']; ?>
															</h3>
															<p>
																<small class="muted"><?php echo $list_array['lastname']; ?></small></p>
															<div class="media-option btn-group shaded-icon">
																<button class="btn btn-small" name="msg">
																	<i class="icon-envelope"></i>
																</button>
																<button class="btn btn-small" name="share">
																	<i class="icon-share-alt"></i>
																</button>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div><?php }?>
										<?php
											}
										?><!-- User's searched profile -->
                                    </div>
                                </div>
                            </div>
                            <!--/.module-body-->
                        </div>
                        <!--/.module-->
                    </div>
                    <!--/.content-->
                </div>
                <!--/.span9-->
            </div>
        </div>
        <!--/.container-->
    </div>
    <!--/.wrapper-->
	
	<?php require "includes/dashboard_footer.php";?> <!-- include page footer -->
	
	<script>
		function all(){
			var x = document.getElementById('all_profiles');
			if(x.style.display === 'none'){
				x.style.display = 'block';
			}
			else{
				x.style.display = 'none';
			}
		}
	</script>
    <script src="scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
    <script src="scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
    <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="scripts/datatables/jquery.dataTables.js" type="text/javascript"></script>
</body>
