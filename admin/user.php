<!DOCTYPE html>
<html>

<?php
session_start();
?>
<style>
.pagination a {
    color: black;
    float: left;
    padding: 8px 16px;
    position: relative;
    top: 90px;
    text-decoration: none;
    transition: background-color .3s;
}

.pagination a.active {
    background-color:lightblue;
    color: white;
}

.pagination a:hover:not(.active) {background-color: #ddd;}
</style>
<head>
	<title>User</title>
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
							<li><a href="welcome.php">Home</a></li>
							<li><a href="user.php" class="active">User</a></li>
							<li><a href="event.php">Event</a></li>
							<li><a href="organizer.php">Organizer's</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</nav>
	<!-- Navigation Ends -->

	<!-- Main Section with Sidebar-Menu and Main Content -->
	<div class="main-user" id="main-user">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-3">
					<div class="list-group">
						<a href="welcome.php" class="list-group-item active"><i class="fa fa-cog"></i> Dashboard</a>
						<a href="suggestions.php" class="list-group-item"><i class="fa fa-globe"></i> Suggestions</a>
						<a href="upload-adds.php" class="list-group-item"><i class="fa fa-upload"></i> Upload ADD's</a>
						<a href="#" class="list-group-item"><i class="fa fa-handshake-o"></i> Transaction</a>
						<a href="adminsetting.php" class="list-group-item"><i class="fa fa-wrench"></i> Admin Setting</a>
						<a href="adminlogout.php" class="list-group-item"><i class="fa fa-sign-out"></i> Log Out</a>
					</div>
					<?php
					 $con=mysql_connect("localhost","root","") or die(' connection query error');
					 $db=mysql_select_db('ema',$con) or die('database selection  query error');
					$countuser=mysql_query("select count(email) from user")or die('count query error');
					$totaluser=mysql_fetch_array($countuser);

					?>
					<span><b>Total User:</b></span> <span style=" "> <b><?php echo $totaluser[0];?></b> </span>
				</div>
				<!-- Sidebar Ends Here -->

				<!-- User's on EMA Starts -->
				<div class="col-lg-9 col-md-9">
					<div class="panel panel-default">
						<div class="panel-heading">
							<div class="panel-title">
								<h4>User's on EMA</h4>
							</div>
						</div>
						<?php
						 
   $query=mysql_query(" select fristname,lastname,email,dateofbrith,joindate,profile_picture  from ema.user  LIMIT 0,20") or die('user    table selection query error');
 
if(mysql_num_rows($query)>0){
	   
	   	?>
						<div class="panel-body table-responsive">
							<table class="table">
								<tbody>
									<thead>
										<td>Profile</td>
										<td>Name</td>
										<td>Email</td>
										<td>Date OF Birth</td>
										<td>Join Date</td>
										<td>Options</td>
									</thead>
									<?php
									 while($rows=mysql_fetch_array($query)){
									?>
									<tr>
										<td>
										 
										<img src="../profile_pictures/<?php echo $rows[5];?>" class="img-responsive img-circle">
											 
										
										</td>
										<td><?php echo $rows[0]." ".$rows[1];?></td>
										<td><?php echo $rows[2];?></td>
										<td><?php echo $rows[3];?></td>
										<td><?php echo $rows[4];?></td>
										<td> <a href="deleteuser.php?email=<?php echo $rows[2];?>&&page=<?php echo 'user.php';?>" onclick="return window.confirm('Are you sure to delete')"> <button type="button" class="btn btn-danger">Delete</button></a></td>
									</tr>
									<?php
								}
								?>
								</tbody>
							</table>	
						</div>
						<?php
					}
					else{
						echo "NO User";
					}
					?>
					</div>
					 
				</div> <!-- User's on EMA Ends -->
			</div>
		</div>
	</div>
	<!-- Main Section with Sidebar-Menu and Main Content Ends -->
	 
	<!--pagenation -->
	<div class="row" align="center">
	<div class="pagination" style="align-content: center;">
   
  <a class="active" href="user.php">1</a>
  <a   href="user1.php">2</a>
  <a href="user2.php">3</a>
  <a href="user1.php">&raquo;</a>
   
  
</div>

	<!-- Footer -->

	<div class="footer" id="footer">
		<p>&copy; CopyRight-2017 | All Right Reserved</p>
	</div>
	<!-- Footer Ends -->

</body>
</html>