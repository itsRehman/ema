<!DOCTYPE HTML>
<?php
session_start();
?>
<html>
	<head>
		<title>invitation</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
			<link rel="stylesheet" type="text/css" href="assets/css/jquery.rateyo.min.css">
			<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
		<link rel="stylesheet" href="assets/css/main.css" />


    <link href='https://fonts.googleapis.com/css?family=BioRhyme Expanded' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=BenchNine' rel='stylesheet'>
		
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->

	<style type="text/css">

		 body{
  font-family: 'BenchNine';
  letter-spacing: 1px;
  color: black !important;
}
  h4{
     font-family: 'BioRhyme Expanded';
    color:#307C94;
  }

#logo img{
	width: 45%;
	
	padding-bottom: 10px;
}

.view-more{
	color:#39B3D7;
	text-decoration: none;

}
.view-more:hover{
	color:#39B3D7; 
}
.fo{
	font-family: 'Kaushan Script', cursive !important;
	color: #286E88; 
}
.badge-notify{
   background:red;
   position:relative;
   top: -55px;
   left: -10px;
}
.badge-notifi{
	background:red;
   position:relative;
   top: -55px;
   left: -15px;
}
.sponsor{
	color:white;
	padding-top: 20px;
}

.form-group .form-control{
	border-radius: 0;
	border: 0;
	border-bottom: 2px solid  #196E88;
	box-shadow: none;
	background: white;
}
.form-group .form-control:focus{
	border-radius: 0;
	border: 0;
	border-bottom: 2px solid  #AAAAAA;
	background: white;
	box-shadow: none;
}

	</style>
	</head>
	<body>

		<!-- Header -->
			<section id="header">
				<header>

					 							<?php
							$con=mysql_connect("localhost","root", "") or die("database connectivity error");
                            mysql_select_db("ema",$con);

                             $username = mysql_query("SELECT `fristname`,`lastname`,`profile_picture` FROM `user` WHERE email='$_SESSION[email]' ")or die('user selection  query error');
									$name=mysql_fetch_array($username)
								 
								?>

					<div><span class="image avatar"><img src="profile_pictures/<?php echo $name[2];?>" alt="" /></span></div>
					
					  
					<h1 id="logo"><?php echo $name[0]." ".$name[1]; ?></h1>
					<br>
					 

				</header>
				<nav id="nav">
					<ul>
						
						<li class="activ"><a href="#four">Invitation </a></li>
					</ul>
				</nav>
				
			</section>

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Main -->
					<div id="main">

						<!-- One -->
							<section id="one">

							<header class="majr">

								<div class="jumbotron top-menu-div">
								<div class="row">
									<div class="col-md-3" id="logo">
										
											<img src="images/emanew2.png" class="img-responsive">
										
									</div>
									<div class="col-md-9">
										
											<ul id="menu-bar">
											<li><a href="profile.php">Profile</a></li>
											<li><a href="create-event.php">Create Event</a></li>
												<li><a href="as-organizer.php">As Organizer</a></li>
												<li><a href="comp-details.php">Company Details</a></li>
												<li><a href="home.php">Home</a></li>
												
											</ul>
										
									</div>
								</div>
								</div>	
							</header>
<!--................................... End of header div.............................. -->	

										
									


							
									
								</div>









							</section>

						

						<!-- Four -->
							<section id="four">
								<div class="container">
									 <h4 style="color:#286E88; ">Invite Someone Special  </h4>
                  <h5 style="color:#286E88;  ">Mail Them </h5>
									<form method="post" class="form-group" name="invitationform" action="">
										<div class="row uniform">
											
											<div class="12u 12u(xsmall)"><input type="email" name="email" id="email" class="form-control" placeholder="Email" /></div>
										</div>
										<div class="row uniform">
											<div class="12u"> <input type="text" name="subject" id="subject" class="form-control" placeholder="About " /></div>
										</div>
										<div class="row uniform">
											<div class="12u"><textarea name="message" id="message" placeholder="Message" class="form-control" rows="6"></textarea></div>
										</div>
										<div class="row uniform">
											<div class="12u">
												
													<input type="submit" class="special" name="invitation" value="Send Message" style="background-color: #31B0D5; float: right;" />
												
											</div>
										</div>
									</form>
								</div>
							</section>
						

				<!-- Footer -->
					<section id="footer">
						<div class="container-fluid">
							<div class="text-center">
            		 <span style="float: right;">CopyRight &copy; 2017</span>               
            </div>
						</div>
</section>
</div>

			</div>

			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.rateyo.min.js"></script>

		<!-- Scripts -->


			<script src="assets/js/bootstrap.min.js"></script>
			<script src="assets/js/jquery.scrollzer.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>
<?php
if(isset($_POST['invitation'])){
	$email=$_POST['email'];
		$subject=$_POST['subject'];
			$message=$_POST['message'];
			$fromname= $name[0]." ".$name[1];
			$fromemail=$_SESSION['email'];
			$headers="From: $fromname<$fromemail>";
			if($email=="" or $subject=="" or $message==""){
				echo "<script>window.alert( 'please file all field')</script>";
				 exit();
			}
			else{
				
			if(mail($email,$subject,$message,$headers)){
				
				 echo "<script>window.alert( 'invitation is send successfully')</script>";
				 echo "<script>window.open( 'profile.php','_self')</script>";
				 exit();
			}
				else{
				 echo "<script>window.alert( 'please tray again invitation filed')</script>";
				 echo "<script>window.open( 'profile.php','_self')</script>";
				 exit();
				}
				
			}
	
}
?>