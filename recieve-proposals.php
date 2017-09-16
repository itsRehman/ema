<!DOCTYPE HTML>
<?php
session_start();
$eventid=$_GET['eventid'];
?>
<html>
	<head>
		<title>recive proposal</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
			<link rel="stylesheet" type="text/css" href="assets/css/jquery.rateyo.min.css">
			<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
		<link rel="stylesheet" href="assets/css/main.css" />
		<link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet">
		
		
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->

	<style type="text/css">
	
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

					<div class="row">
								<div class="col-sm-12">
									<div class="new-pro-div" align="center">
										<img src="profile_pictures/<?php echo $name[2];?>" class="img-responsive" alt=""  />
									</div>
								</div>
							</div>
					 
					<br>
					<h1 id="logo"><?php echo $name[0]." ".$name[1]; ?></h1>
					<br>
					

				</header>
				<nav id="nav">
					<ul>
						
						<li class="activ"><a href="#four">Proposals </a></li>
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
<!--................................... End of header div.............................. -->						</section>

										
									


							
								<!-- Four -->
							<section id="four">
							 
								<div class="container">
								 <h3 align="center" style="color: #307C94;">Proposals</h3>
								<?php
								$update=mysql_query("UPDATE `ema`.`proposal` SET `state` = 'read' WHERE `proposal`.event_id='$eventid' ")or die('proposal table updation  query error');
								$proposal = mysql_query("SELECT * from proposal where event_id='$eventid' ORDER BY  proposal_date DESC ")or die('proposal table selection  query error');
									if(mysql_num_rows($proposal)>0){
									  
									while($rowss=mysql_fetch_array($proposal)){
									$email=	$rowss[0];
									 
									?>
									<div class="well">
										<div class="row">
											<div class="col-md-3" >
												<div align="center">
												<?php
									  $user=mysql_query("SELECT `fristname`,`lastname`,`profile_picture` FROM `user` WHERE email='$email'") or die(' user name selection querr error');
												$username=mysql_fetch_array($user)
												  ?>
													<div style="width: 140px; height: 120px;  " >
														<img src="profile_pictures/<?php echo $username[2];?>" style="width: 140px; height: 120px;  " class="img-responsive img-rounded">
													</div>
									 
													<div>
													 
														<span style=" color:#307C94; font-size: 18px; font-weight: bolder; "><?php echo $username[0]." ".$username[1];?></span>
													</div> 
												</div>
											</div>
											<div class="col-md-9">
												<div class="row">
													<div class="col-sm-9">
													 <?php
												$eventtitle=mysql_query("SELECT `title`  FROM `event` WHERE id='$eventid'") or die(' title selection querr error');
												$title=mysql_fetch_array($eventtitle)
												?>
														<span style=" color:#307C94; font-size: 18px; font-weight: bolder; ">Proposal for  <?php echo " ".$title[0];?></span>
													</div> 
													<div class="col-sm-3">
														<div style="float: right; font-size: 14px;">
															<span style="
															color: #307C94;">Date</span> <span style="
															color: gray;" ><?php echo $rowss[6];?></span>
														</div>
													</div>
												</div>
												<br>
												<div class="row">
													<div class="col-sm-4">
														Organizer's breifing
													</div>
													<div class="col-sm-8" >
														<div style="">
															 <?php echo $rowss[4];?> 
														</div>
													</div>
												</div>

												<div class="row">
													<div class="col-sm-4">
														 Speciality
													</div>
													<div class="col-sm-8" >
														<div>
															 <?php echo $rowss[3];?>
														</div>
													</div>
												</div>
												<br>
												<div class="row">
													<div class="col-sm-8">
														
													</div>
													<div class="col-sm-4">
														<div style="float: right;">
														<a href="orderpage.php?email=<?php echo $email;?>&&id=<?php echo $eventid;?>&&page=<?php echo "profile.php";?>">
															<button class="btn btn-success">Order Now</button></a>
															<a href="delete_proposal.php?senderemail=<?php echo $email;?>&&id=<?php echo $eventid;?>&&reciveremail=<?php echo $rowss[1];?>" onclick="return window.confirm('are you sure to reject  this proposal')">
															<button class="btn btn-danger" style="letter-spacing: 2px;">Reject</button>
															</a>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<?php
								}
							}
								else{
									?>
									<div class="well">
										<h2 align="center" style="color: gray;"> 0 Proposals recived</h2>
									</div>
									<?php
								}
								?>
								</div>
							</section>
							</div>

							<br>
							<br>
							<br>
							<br>
							<br>
							<br>
				<!-- Footer -->
					<section id="footer">
						<div class="container">
							<div>
								 <span style="float: right;">CopyRight &copy; 2017</span>
							</div>
						</div>
						
           
					</section>
					
									
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