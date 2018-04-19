<?php
// start session
session_start();
?>
<!DOCTYPE html>
<html lang="en">
	<head>
			<meta charset="UTF-8">
			<meta http-equiv="X-UA-Compatible" content="IE=edge">
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<meta name="generator" content="DreamCash.com">
			<meta name="description" content="Admin Page">
			<link rel="shortcut icon" href="images/cash.exchange.jpg" type="image/x-icon">
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
					<?php require "includes/dashboard_sidebar.php";?>
                    <div class="span9">
                        <div class="content">
                            <div class="module message">
                                <div class="module-head">
                                    <h3>
                                        Message</h3>
                                </div>
                                <div class="module-option clearfix">
                                    <div class="pull-left">
                                        <div class="btn-group">
                                            <button class="btn">
                                                Inbox
											</button>
                                            <button class="btn dropdown-toggle" data-toggle="dropdown">
                                                <span class="caret"></span>
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a href="<?php echo $_SERVER['PHP_SELF'];?>">Inbox(11)</a></li>
                                                <li><a href="">Sent</a></li>
                                                <li><a href="">Draft(2)</a></li>
                                                <li><a href="">Trash</a></li>
                                                <li class="divider"></li>
                                                <li><a href="admin/settings">Settings</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="pull-right">
                                        <a href="compose.php" class="btn btn-primary">Compose</a>
                                    </div>
                                </div>
                                <div class="module-body table">
                                    <table class="table table-message">
                                        <tbody>
                                            <tr class="heading">
                                                <td class="cell-check">
                                                    <input type="checkbox" class="inbox-checkbox">
                                                </td>
                                                <td class="cell-icon">
                                                </td>
                                                <td class="cell-author hidden-phone hidden-tablet">
                                                    Sender
                                                </td>
                                                <td class="cell-title">
                                                    Subject
                                                </td>
                                                <td class="cell-icon hidden-phone hidden-tablet">
                                                </td>
                                                <td class="cell-time align-right">
                                                    Date
                                                </td>
                                            </tr>
                                            <tr class="unread">
                                                <td class="cell-check">
                                                    <input type="checkbox" class="inbox-checkbox">
                                                </td>
                                                <td class="cell-icon">
                                                    <i class="icon-star"></i>
                                                </td>
                                                <td class="cell-author hidden-phone hidden-tablet">
                                                    John Donga
                                                </td>
                                                <td class="cell-title">
                                                    Sample Work
                                                </td>
                                                <td class="cell-icon hidden-phone hidden-tablet">
                                                    <i class="icon-paper-clip"></i>
                                                </td>
                                                <td class="cell-time align-right">
                                                    18:24
                                                </td>
                                            </tr>
                                            <tr class="unread starred">
                                                <td class="cell-check">
                                                    <input type="checkbox" class="inbox-checkbox">
                                                </td>
                                                <td class="cell-icon">
                                                    <i class="icon-star"></i>
                                                </td>
                                                <td class="cell-author hidden-phone hidden-tablet">
                                                    John Donga
                                                </td>
                                                <td class="cell-title">
                                                    Test Title
                                                </td>
                                                <td class="cell-icon hidden-phone hidden-tablet">
                                                    <i class="icon-paper-clip-no"></i>
                                                </td>
                                                <td class="cell-time align-right">
                                                    18:01
                                                </td>
                                            </tr>
                                            <tr class="unread">
                                                <td class="cell-check">
                                                    <input type="checkbox" class="inbox-checkbox">
                                                </td>
                                                <td class="cell-icon">
                                                    <i class="icon-star"></i>
                                                </td>
                                                <td class="cell-author hidden-phone hidden-tablet">
                                                    Facebook
                                                </td>
                                                <td class="cell-title">
                                                    Dongi sents you a friend request!
                                                </td>
                                                <td class="cell-icon hidden-phone hidden-tablet">
                                                    <i class="icon-paper-clip"></i>
                                                </td>
                                                <td class="cell-time align-right">
                                                    23:58
                                                </td>
                                            </tr>
                                            <tr class="unread">
                                                <td class="cell-check">
                                                    <input type="checkbox" class="inbox-checkbox">
                                                </td>
                                                <td class="cell-icon">
                                                    <i class="icon-star"></i>
                                                </td>
                                                <td class="cell-author hidden-phone hidden-tablet">
                                                    John Donga
                                                </td>
                                                <td class="cell-title">
                                                    Something
                                                </td>
                                                <td class="cell-icon hidden-phone hidden-tablet">
                                                    <i class="icon-paper-clip"></i>
                                                </td>
                                                <td class="cell-time align-right">
                                                    22:17
                                                </td>
                                            </tr>
                                            <tr class="read starred">
                                                <td class="cell-check">
                                                    <input type="checkbox" class="inbox-checkbox">
                                                </td>
                                                <td class="cell-icon">
                                                    <i class="icon-star"></i>
                                                </td>
                                                <td class="cell-author hidden-phone hidden-tablet">
                                                    John Donga
                                                </td>
                                                <td class="cell-title">
                                                    Someone wants to talk to you!
                                                </td>
                                                <td class="cell-icon hidden-phone hidden-tablet">
                                                    <i class="icon-paper-clip-no"></i>
                                                </td>
                                                <td class="cell-time align-right">
                                                    May 21
                                                </td>
                                            </tr>
                                            <tr class="read">
                                                <td class="cell-check">
                                                    <input type="checkbox" class="inbox-checkbox">
                                                </td>
                                                <td class="cell-icon">
                                                    <i class="icon-star"></i>
                                                </td>
                                                <td class="cell-author hidden-phone hidden-tablet">
                                                    John Doe
                                                </td>
                                                <td class="cell-title">
                                                    Doe wants to talk to you!
                                                </td>
                                                <td class="cell-icon hidden-phone hidden-tablet">
                                                    <i class="icon-paper-clip"></i>
                                                </td>
                                                <td class="cell-time align-right">
                                                    May 15
                                                </td>
                                            </tr>
                                            <tr class="read starred">
                                                <td class="cell-check">
                                                    <input type="checkbox" class="inbox-checkbox">
                                                </td>
                                                <td class="cell-icon">
                                                    <i class="icon-star"></i>
                                                </td>
                                                <td class="cell-author hidden-phone hidden-tablet">
                                                    Social Network
                                                </td>
                                                <td class="cell-title">
                                                    An example message from a social network
                                                </td>
                                                <td class="cell-icon hidden-phone hidden-tablet">
                                                    <i class="icon-paper-clip"></i>
                                                </td>
                                                <td class="cell-time align-right">
                                                    May 15
                                                </td>
                                            </tr>
                                            <tr class="unread">
                                                <td class="cell-check">
                                                    <input type="checkbox" class="inbox-checkbox">
                                                </td>
                                                <td class="cell-icon">
                                                    <i class="icon-star"></i>
                                                </td>
                                                <td class="cell-author hidden-phone hidden-tablet">
                                                    John Donga
                                                </td>
                                                <td class="cell-title">
                                                    Sample Work
                                                </td>
                                                <td class="cell-icon hidden-phone hidden-tablet">
                                                    <i class="icon-paper-clip"></i>
                                                </td>
                                                <td class="cell-time align-right">
                                                    18:24
                                                </td>
                                            </tr>
                                            <tr class="unread starred">
                                                <td class="cell-check">
                                                    <input type="checkbox" class="inbox-checkbox">
                                                </td>
                                                <td class="cell-icon">
                                                    <i class="icon-star"></i>
                                                </td>
                                                <td class="cell-author hidden-phone hidden-tablet">
                                                    John Donga
                                                </td>
                                                <td class="cell-title">
                                                    Test Title
                                                </td>
                                                <td class="cell-icon hidden-phone hidden-tablet">
                                                    <i class="icon-paper-clip-no"></i>
                                                </td>
                                                <td class="cell-time align-right">
                                                    18:01
                                                </td>
                                            </tr>
                                            <tr class="unread">
                                                <td class="cell-check">
                                                    <input type="checkbox" class="inbox-checkbox">
                                                </td>
                                                <td class="cell-icon">
                                                    <i class="icon-star"></i>
                                                </td>
                                                <td class="cell-author hidden-phone hidden-tablet">
                                                    Facebook
                                                </td>
                                                <td class="cell-title">
                                                    Dongi sents you a friend request!
                                                </td>
                                                <td class="cell-icon hidden-phone hidden-tablet">
                                                    <i class="icon-paper-clip"></i>
                                                </td>
                                                <td class="cell-time align-right">
                                                    23:58
                                                </td>
                                            </tr>
                                            <tr class="unread">
                                                <td class="cell-check">
                                                    <input type="checkbox" class="inbox-checkbox">
                                                </td>
                                                <td class="cell-icon">
                                                    <i class="icon-star"></i>
                                                </td>
                                                <td class="cell-author hidden-phone hidden-tablet">
                                                    John Donga
                                                </td>
                                                <td class="cell-title">
                                                    Something
                                                </td>
                                                <td class="cell-icon hidden-phone hidden-tablet">
                                                    <i class="icon-paper-clip"></i>
                                                </td>
                                                <td class="cell-time align-right">
                                                    22:17
                                                </td>
                                            </tr>
                                            <tr class="read starred">
                                                <td class="cell-check">
                                                    <input type="checkbox" class="inbox-checkbox">
                                                </td>
                                                <td class="cell-icon">
                                                    <i class="icon-star"></i>
                                                </td>
                                                <td class="cell-author hidden-phone hidden-tablet">
                                                    John Donga
                                                </td>
                                                <td class="cell-title">
                                                    Someone wants to talk to you!
                                                </td>
                                                <td class="cell-icon hidden-phone hidden-tablet">
                                                    <i class="icon-paper-clip-no"></i>
                                                </td>
                                                <td class="cell-time align-right">
                                                    May 21
                                                </td>
                                            </tr>
                                            <tr class="read">
                                                <td class="cell-check">
                                                    <input type="checkbox" class="inbox-checkbox">
                                                </td>
                                                <td class="cell-icon">
                                                    <i class="icon-star"></i>
                                                </td>
                                                <td class="cell-author hidden-phone hidden-tablet">
                                                    John Doe
                                                </td>
                                                <td class="cell-title">
                                                    Doe wants to talk to you!
                                                </td>
                                                <td class="cell-icon hidden-phone hidden-tablet">
                                                    <i class="icon-paper-clip"></i>
                                                </td>
                                                <td class="cell-time align-right">
                                                    May 15
                                                </td>
                                            </tr>
                                            <tr class="read starred">
                                                <td class="cell-check">
                                                    <input type="checkbox" class="inbox-checkbox">
                                                </td>
                                                <td class="cell-icon">
                                                    <i class="icon-star"></i>
                                                </td>
                                                <td class="cell-author hidden-phone hidden-tablet">
                                                    Social Network
                                                </td>
                                                <td class="cell-title">
                                                    An example message from a social network
                                                </td>
                                                <td class="cell-icon hidden-phone hidden-tablet">
                                                    <i class="icon-paper-clip"></i>
                                                </td>
                                                <td class="cell-time align-right">
                                                    May 15
                                                </td>
                                            </tr>
                                            <tr class="read">
                                                <td class="cell-check">
                                                    <input type="checkbox" class="inbox-checkbox">
                                                </td>
                                                <td class="cell-icon">
                                                    <i class="icon-star"></i>
                                                </td>
                                                <td class="cell-author hidden-phone hidden-tablet">
                                                    Greepit.com
                                                </td>
                                                <td class="cell-title">
                                                    An email from Greepit.com
                                                </td>
                                                <td class="cell-icon hidden-phone hidden-tablet">
                                                    <i class="icon-paper-clip-no"></i>
                                                </td>
                                                <td class="cell-time align-right">
                                                    Jan 12
                                                </td>
                                            </tr>
                                            <tr class="read starred">
                                                <td class="cell-check">
                                                    <input type="checkbox" class="inbox-checkbox">
                                                </td>
                                                <td class="cell-icon">
                                                    <i class="icon-star"></i>
                                                </td>
                                                <td class="cell-author hidden-phone hidden-tablet">
                                                    EGrappler.com
                                                </td>
                                                <td class="cell-title">
                                                    An email from EGrappler.com
                                                </td>
                                                <td class="cell-icon hidden-phone hidden-tablet">
                                                    <i class="icon-paper-clip"></i>
                                                </td>
                                                <td class="cell-time align-right">
                                                    Jan 11
                                                </td>
                                            </tr>
                                            <tr class="read">
                                                <td class="cell-check">
                                                    <input type="checkbox" class="inbox-checkbox">
                                                </td>
                                                <td class="cell-icon">
                                                    <i class="icon-star"></i>
                                                </td>
                                                <td class="cell-author hidden-phone hidden-tablet">
                                                    An unread message
                                                </td>
                                                <td class="cell-title">
                                                    This is how an unread message looks alike.
                                                </td>
                                                <td class="cell-icon hidden-phone hidden-tablet">
                                                    <i class="icon-paper-clip-no"></i>
                                                </td>
                                                <td class="cell-time align-right">
                                                    Jan 10
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="module-foot">
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
        <div class="footer">
            <div class="container">
                <b class="copyright">&copy; 2014 Edmin - EGrappler.com </b>All rights reserved.
            </div>
        </div>
        <script src="scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
        <script src="scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
        <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    </body>
</html>