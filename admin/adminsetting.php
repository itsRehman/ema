<!DOCTYPE html>
<html>
<?php
session_start( );
?>
<head>
	<title>admin setting</title>
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

	<style type="text/css">
		
		#change-name{
			
			box-shadow: 10px 10px 5px  #307C94;
			border-style: groove;
			cursor: pointer;
			border-radius: 4px;
		}
		#change-password{
			border-style: groove;
			box-shadow: 10px 10px 5px  #307C94;
			cursor: pointer;
			border-radius: 4px;
		}
		.btn{
			font-size: 12px !important;
		}
	</style>
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

						<a href="login.html" class="navbar-brand">Logo</a>
					</div>
					<!-- Collect Nav links and Content for Toggling -->
					<div class="collapse navbar-collapse" id="myNavbar">
						<ul class="nav navbar-nav navbar-right">
							<li><a href="welcome.php" class="active">Home</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</nav>
	<!-- Navigation Ends -->

	<!-- Login Getting Start -->
	<div class="login" id="login">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-6 col-lg-offset-3">
					<div class="panel panel-default">
						<div class="panel-heading">
							<div class="panel-title">
								<h4>Edit Given Data</h4>
							</div>
						</div>
						<?php 
						 $con = mysql_connect("localhost","root","")or die('database connection  error');
						$db = mysql_select_db('ema',$con)or die('database selection error');
	
						$query = " SELECT * FROM `admin` " ;

							$run = mysql_query($query)or die('database selection  query error');

							if(mysql_num_rows($run)>0){
								$data=mysql_fetch_array($run);
						?>
						 
						<div class="panel-body" style="padding: 20px; ">
							<div id="change-name">
							<h5><a href="#" >Edit Name</a></h5><input type="text" name="username1" id="name1" class="form-control" value="<?php echo $data[0];?>" disabled >

							</div>
							
							<br>
							<div id="change-password">
								<h5><a href="#" id="change-pass">Change Password</a></h5><input type="password" name="adminpassword1" id="password1" class="form-control" value="<?php echo $data[1];?>" disabled >
							</div>
							
							<div class="password-update" style="display: none;">
							<form  method="post" action="adminsettingphp.php" name="updatepassword">
							<h5>Old Password</h5><input type="password" name="adminpasswordold" id="oldpass" class="form-control"  required >
							<h5>New Password</h5><input type="password" name="adminpasswordnew" id="newpass" class="form-control"  required >
							<h5>Password Again</h5><input type="password" name="adminpasswordconf" id="confpass" class="form-control" required>
							<input type="hidden" name="adminpassword1" id="password1" class="form-control" value="<?php echo $data[1];?>" >
							  <div class="row" style="padding: 0">
									<div class="col-sm-6">
										<a  name="cancel" class="btn btn-warning pass-cancel">Cancel</a> 
									</div>
									<div class="col-sm-6">
										<button type="submit"  name="updatepassword" class="btn btn-success">update</button>
									</div>
								</div>
								</form>
							</div>
							<div class="new-change"  style="display: none;">
							<form method="post"  action="adminsettingphp.php" name="updatename">
								<h5>New Name</h5><input type="text" name="username" id="name" class="form-control"  required >
								<div class="row">
									<div class="col-sm-6">
										<a  name="cancel" class="btn btn-warning name-cancel">Cancel</a> 
									</div>
									<div class="col-sm-6">
										<button type="submit"  name="updatename" class="btn btn-success">update</button>
									</div>
								</div>
								</form>
							</div>
						</div>
						<?php
					}
					?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Login Getting Start Ends -->
	<br>



	<!-- Footer Ends -->

	<script type="text/javascript">
		$(document).ready(function (argument) {
			$('#change-name').click(function(){
				$('.new-change').show('slow');
				$('#change-password').hide('slow');
			});

			$('#change-password').click(function(){
				$('.password-update').show('slow');
			});
			
			$('#change-password').click(function(){
				$('#change-name').hide('slow');
			});

			
			$('.name-cancel').click(function(){
				$('.new-change').hide('slow');
				$('#change-password').show('slow');
			});

			$('.pass-cancel').click(function(){
				$('.password-update').hide('slow');
				$('#change-name').show('slow');
			});
		});
	</script>

</body>
</html>