 <!DOCTYPE HTML>
<?php
session_start();
//$reviewid=$_GET['reviewid'];
$eventid=$_GET['id'];
?>
<html>
	<head>
		<title>view review</title>
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
						
						<li class="activ"><a href="#four">All Reviews </a></li>
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
							 
 
								<!-- event div start-->
							<div class="row">
					<?php
					$id=$_GET['id'];
					$result=mysql_query(" select user.fristname,user.lastname,event.id,event.title,event.category,event.country,event.city,event.address,event_schedul.fromdate,event_schedul.todate,event_schedul.time,event.discription,event.event_logo from user join event_schedul join event where user.email='$_SESSION[email]' and event_schedul.creater_email='$_SESSION[email]'  and event.id=event_schedul.event_id and event.id='$eventid'") or die("Error in event selection query");
  if(mysql_num_rows($result)>0){
	   $rows=mysql_fetch_array($result); 
		  ?>
								<div class="col-md-9 col-md-offset-1">
							<div class="well">
								<div class="row">
									<div class="col-sm-3" align="center" style="border-right: 2px solid gray;">

										<div style=" width: 140px; height: 100px;">
										 
											<img  src="event_logo/<?php echo $rows[12];?>" alt="" class= "img-responsive" style="width: 100%; height: 100%;"/>
											 
										</div>
											<p align="center" style="color: #307C94 !important" >Event By: <br>
										<span align="center" style="color: black"> <?php echo $rows[0]." ".$rows[1];?> </span> </p>
										<div class="data-div">
											<span style="color: #307C94 !important"> Starts at</span> 
											<span style="color: black !important"><?php echo $rows[8];?></span> <br>
										</div>
										<div class="data-div">
											<span style="color: #307C94 !important"> End at</span> 
											<span style="color: black !important"> <?php echo $rows[9];?> </span> <br>
										</div>
										<div class="data-div">
											<span style="color: #307C94 !important"> ON</span> 
											<span style="color: black !important"> <?php echo $rows[10];?></span> <br>
										</div>
										<div class="data-div">
											<span style="color: #307C94 !important"> Catagory</span> 
											<span style="color: black !important"> <?php echo $rows[4];?></span> <br>
										</div>
									</div>
									<div class="col-sm-9">
										<div class="row">
											<div class="col-sm-12">
												<span style="color: black !important; text-transform: uppercase; font-weight: bolder;"> <?php echo $rows[3];?></span> 
											</div>
										</div>
										<div class="row">
											<div class="col-sm-2">
												<span style="color: #307C94 !important"> Discription </span>
											</div>
											<div class="col-sm-10">
												<span> <?php echo $rows[11];?></span>
											</div>
										</div>
										<div class="row" style=" border-bottom: 1px solid gray">	 
											<div class="col-sm-2">
												<span style="color: #307C94 !important">Held at </span>
											</div>	 
											<div class="col-sm-10">
												<span> <?php echo $rows[7];?></span>  <span><?php echo $rows[6];?></span> <span>C<?php echo $rows[5];?></span>
											</div>
										</div>
										<br>
								 			<br>

									</div>

								</div>
							</div>
						</div>
						<?php
					}
					else{
					echo "No details";	
					}
						?>
						</div>

							<!--event div end-->

							<!--review div-->
								<div class="container">

								<div class="row">
											<div class="col-sm-12" align="center">
												<h3 style="color:#31B0D5; ">All reviews</h3>
											</div>
										</div>
								<?php
								$update=mysql_query("UPDATE `ema`.`review` SET `state` = 'read' WHERE `review`.event_id='$eventid' ")or die('review table updation  query error');
								$updatenoty=mysql_query("UPDATE `ema`.`notification` SET `state` = 'read' WHERE `notification`.event_id='$eventid' and `type`='review' ")or die('review table updation  query error');
								$review = mysql_query("SELECT * from review where event_id='$eventid' ORDER BY on_date DESC ")or die('review table selection  query error');
									if(mysql_num_rows($review)>0){
									  
									while($rowss=mysql_fetch_array($review)){
									$email=	$rowss[1];

									 
									?>

									<div class="row" style="padding: 10px; border-bottom: 1px solid gray;">
										<div class="col-md-2">
										<?php
	  										$user=mysql_query("SELECT `fristname`,`lastname`,`profile_picture` FROM `user` WHERE email='$email'") or die(' revier name selection querr error');
												$username=mysql_fetch_array($user)
		 								 ?>
											<div  style="width: 140px; height: 120px;  ">
												<img src="profile_pictures/<?php echo $username[2];?>" class="img-responsive img-rounded" style="width: 140px; height: 120px;  ">
											</div>
											 
										</div>
										<div class="col-md-9">
										
											<div class="row">
												<div class="col-sm-9">
												 
													<span style="font-weight: bolder; color:#307C94; font-size: 24px; font-weight: bolder; "><?php echo $username[0]." ".$username[1];?></span>
												</div> 
												<div class="col-sm-3">
													<div style="float: right; font-size: 14px;">
														<span style="
														color: #307C94;">Date</span> <span style="
														color: gray;" ><?php echo $rowss[6];?></span>
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-sm-12" >
													<div style="font-size: 18px; padding: 10px;">
														 <?php echo $rowss[4];?> 
													</div>
												</div>
											</div>
										</div>

										
									</div>
									<?php
								}
								?>
								 
									 	<br>
									 	<br>
									 	<br>
									 	<br>
									 	<br>
									 	<br>
									 	<br>

								<?php
								} 
								else{
									 ?>
									
									 
									 	<br>
									 	<br>
									 	<br>
									 	<br>
									 	<br>
									 	<div class="well" align="center" style="font-size: 20px">
									 	<br>
									 		No one Review's your event
									 	</div>
									 	<br>
									 	<br>
									 	<br>
									 	<br>
									 	<br>
									 <?php
								}
								?>
								</div>
							</section>
							</div>

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