<!DOCTYPE HTML>
<?php
session_start();
?>
<html>
	<head>
		<title>participants</title>
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
					<div><span class="image avatar"><img src="profile_pictures/<?php echo $name[2];?>" alt="" /></span></div>
					
					 
									 
					
					<h1 id="logo"><?php echo $name[0]." ".$name[1]; ?></h1>
					<br>
					 
				</header>
				<nav id="nav">
					<ul>
						
						<li class="activ"><a href="#four">Requests For Joining </a></li>
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
											<li><a href="home.php" title="Home"><i class="fa fa-home fa-2x" aria-hidden="true"></i></a></li>
												
											</ul>
										
									</div>
								</div>
								</div>	
							</header>
<!--................................... End of header div.............................. -->						</section>

							</div>
							<!-- event div start-->
							<div class="row">
					<?php
					$id=$_GET['id'];
					$result=mysql_query(" select user.fristname,user.lastname,event.id,event.title,event.category,event.country,event.city,event.address,event_schedul.fromdate,event_schedul.todate,event_schedul.time,event.discription,event.event_logo,event.chargingtype from user join event_schedul join event where user.email='$_SESSION[email]' and event_schedul.creater_email='$_SESSION[email]'  and event.id=event_schedul.event_id and event.id='$id'") or die("Error in event selection query");
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

								<!-- Four -->
							<section id="four">
							<div  class="row">
							<div class="col-md-12">
								<div class="container table-responsive">
								<!--- free event participants-->
								<?php
								if($rows[13]=='free'){
									 $updatenoty=mysql_query("UPDATE `ema`.`notification` SET `state` = 'read' WHERE `notification`.event_id='$id' and `type`='participant' ")or die('review table updation  query error');
									 $participants = mysql_query("SELECT  user.fristname,user.lastname,user.email, participant.participat_date,user.profile_picture FROM user join `participant` WHERE user.email=participant.participant_email and participant.event_id='$id' ORDER BY  participant.participat_date ASC ")or die('participants selection  query error');
									if(mysql_num_rows($participants)>0){
									 ?>
								
									<table class="table table-hover">
									<?php
									while($rowss=mysql_fetch_array($participants)){
									$email=	$rowss[2];
									 
									?>
    <tbody>
      <tr>
	  
		  					<td><img src="profile_pictures/<?php echo $rowss[4];?>"  class="img-responsive img-rounded" style="height: 80px; width: 80px;border-radius: 20%;  "></td>
		 
        <td style="padding:25px"><?php echo $rowss[0];?></td>
        <td style="padding:25px"><?php echo $rowss[1];?></td>
        <td style="padding:25px"><?php echo $rowss[2];?></td>
        <td style="padding:25px"><?php echo $rowss[3];?></td>
        <td style="padding:25px"> <a href="reject_participant.php?id=<?php echo $id;?> && email=<?php echo $email;?>" onclick="return window.confirm('are you sure to reject this participate in this event')"> 
		<button><i class="fa fa-times" aria-hidden="true"></i></button></a>
		</td>
      </tr>
       </tbody>
	   <?php
		}
	   ?>
  </table>
  <?php
}
else{
	?>
	<p><font size="5" color="gray">
	<center> There is no participants in this event</center>
	</font>
	</p>
	<?php
}
}
  ?>
  <!--- free event  participant end-->

  <!--paid event participant start-->
<?php
								if($rows[13]=='paid'){
									 $updatenoty=mysql_query("UPDATE `ema`.`notification` SET `state` = 'read' WHERE `notification`.event_id='$id' and `type`='participant' ")or die('notification  table updation  query error in paid section');
									 $participants = mysql_query("SELECT  user.fristname,user.lastname,user.email,ticket.ticket_id,user.profile_picture FROM user join ticket WHERE user.email=ticket.user_email and ticket.event_id='$id' ORDER BY  ticket.ticket_id ASC ")or die('ticket info selection  query error');
									if(mysql_num_rows($participants)>0){
									 ?>
								
									<table class="table table-hover">
									<?php
									while($rowss=mysql_fetch_array($participants)){
									$email=	$rowss[2];
									 
									?>
    <tbody>
      <tr>
	  
		  					<td><img src="profile_pictures/<?php echo $rowss[4];?>"  class="img-responsive img-rounded" style="height: 80px; width: 80px;border-radius: 20%;  "></td>
		 
        <td style="padding:25px"><?php echo $rowss[0];?></td>
        <td style="padding:25px"><?php echo $rowss[1];?></td>
        <td style="padding:25px"><?php echo $rowss[2];?></td>
        <td style="padding:25px"><?php echo "Ticket No : ".$rowss[3];?></td>
         
      </tr>
       </tbody>
	   <?php
		}
	   ?>
  </table>
  <?php
}
else{
	?>
	<p><font size="5" color="gray">
	<center> There is no ticket info of  this event</center>
	</font>
	</p>
	<?php
}
}
  ?>
  <!-- paid event participant end -->

								</div>
								</div>
								</div>
							</section>
							

						<br>
							<br>
							<br>
							<br>
							<br>
							<br>
							<br>
							<br>
							<br>
							<br>
							<br>
							<br>
				<!-- Footer -->
					 <section id="footer">
            <div class="container">
              <div class="copyright">
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