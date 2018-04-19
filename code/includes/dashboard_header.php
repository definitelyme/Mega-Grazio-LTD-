<div class="navbar navbar-fixed-top">
	<div class="navbar-inner">
		<div class="container">
			<a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse">
				<i class="icon-reorder shaded"></i></a><a class="brand" href="index.php">Admin Panel</a>
			<div class="nav-collapse collapse navbar-inverse-collapse">
				<ul class="nav nav-icons">
					<li class="active"><a href="message.php"><i class="icon-envelope"></i></a></li>
					<li><a href="login_acc.php"><i class="icon-eye-open"></i></a></li>
					<li><a href="table"><i class="icon-bar-chart"></i></a></li>
				</ul>
				<form class="navbar-search pull-left input-append" action="<?php echo $_SERVER['PHP_SELF'];?>" method="get">
					<input type="text" name="search" class="span3">
					<button class="btn" type="button">
						<i class="icon-search"></i>
					</button>
				</form>
				<ul class="nav pull-right">
					<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">SETTINGS
						<b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="">Administer</a></li>
							<li><a href="admin/appendix/faq">Admin Manual</a></li>
							<li class="divider"></li>
							<li class="nav-header">Upgrades</li>
							<li><a href="admin/configurations">Configure</a></li>
						</ul>
					</li>
					<li class="nav-user dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">
						<img src="images/user.png" class="nav-avatar" />
						<b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="admin/profile">Your Profile</a></li>
							<li><a href="admin/profile/edit_profile">Edit Profile</a></li>
							<li><a href="admin/settings">Account Settings</a></li>
							<li class="divider"></li>
							<li><a href="admin/logout/">Logout</a></li>
						</ul>
					</li>
				</ul>
			</div>
			<!-- /.nav-collapse -->
		</div>
	</div>
	<!-- /navbar-inner -->
</div>
<!-- /navbar -->