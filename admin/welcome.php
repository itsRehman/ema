<!DOCTYPE html>
<html>
<?php
 session_start();
?>
<head>
	<title>Welcome to Admin Panel</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://fonts.googleapis.com/css?family=Oswald|Raleway" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="Font-Awesome/css/font-awesome.min.css">
	<!-- Css Styling Links -->
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" type="text/css" href="css/animate.css">
	<!-- JavaScript Links -->
	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.js"></script>
</head>
<body>
	<!-- Navigation -->
	<nav class="navbar navbar-default navbar-fixed-top" role="navigation" id="navigation">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12">
					<!-- Brand and Toggle get Grouped -->
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#myNavbar" aria-expended="false">
							<span class="sr-only">Toggle Navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>

						<a href="#" class="navbar-brand">Logo</a>
					</div>
					<!-- Collect Nav links and Content for Toggling -->
					<div class="collapse navbar-collapse" id="myNavbar">
						<ul class="nav navbar-nav navbar-left">
							<li></li>
						</ul>
						<ul class="nav navbar-nav navbar-right">
							<li><a href="welcome.php" class="active">Home</a></li>
							<li><a href="user.php">User</a></li>
							<li><a href="event.php">Event</a></li>
							<li><a href="organizer.php">Organizer's</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</nav>
	<!-- Navigation Ends -->

	<!-- Dashboard Header -->
	<div class="header" id="header">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12">
					<h4><i class="fa fa-cog"></i> Dashboard <small>Manage Your site</small></h4>
				</div>
			</div>
		</div>
	</div>
	<!-- Dashboard Header Ends -->

	<!-- Main Section with Sidebar-Menu and Main Content -->
	<div class="main" id="main">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-3">
					<div class="list-group">
						<a href="welcome.php" class="list-group-item active"><i class="fa fa-cog"></i> Dashboard</a>
						<a href="suggestions.php" class="list-group-item"><i class="fa fa-globe"></i> Suggestions</a>
						<a href="upload-adds.php" class="list-group-item"><i class="fa fa-upload"></i> Upload ADD's</a>
						<a href="#" class="list-group-item"><i class="fa fa-handshake-o"></i> Transaction</a>
						<a href="adminsetting.php" class="list-group-item"><i class="fa fa-users"></i> Admin Account</a>
						<a href="adminlogout.php" class="list-group-item"><i class="fa fa-sign-out"></i> Log Out</a>
					</div>
				</div>
				<div class="col-lg-9 col-md-9">
					<div class="well text-center">
						<h1>Welcome</h1>
						<b>To</b>
						<h4>Admin Dashboard</h4>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Main Section with Sidebar-Menu and Main Content Ends -->

	<!-- Footer -->
	<div class="footer" id="footer">
		<p>&copy; CopyRight-2017 | All Right Reserved</p>
	</div>
	<!-- Footer Ends -->

</body>
</html>