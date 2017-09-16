<!DOCTYPE HTML>
 <?php
session_start();
$individulemail=$_GET['individualemail'];
 
?>
<html>
	<head>
		<title>search Profile page</title>
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

}
h3{
		 font-family: 'BioRhyme Expanded';
    color:#307C94;
	}


.view-more{
	color:#39B3D7;
	text-decoration: none;

}
.view-more:hover{
	color:#39B3D7; 
}
.fo{
	font-family: 'BenchNine';
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

.comments-div{
	display: none;
	z-index: 999;

}
#hide-show{
	cursor: pointer;
}
.reply{
	float: right;
	cursor: pointer;
}

/* ,,,,,,,,,,,, scroll bar styling ,,,,,,,,,, */

::-webkit-scrollbar {
    width: 12px;
}
 
/* Track */
::-webkit-scrollbar-track {
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3); 
    -webkit-border-radius: 10px;
    border-radius: 10px;
}
 
/* Handle */
::-webkit-scrollbar-thumb {
    -webkit-border-radius: 10px;
    border-radius: 10px;
    background: #286E88; 
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.5); 
}
::-webkit-scrollbar-thumb:window-inactive {
	background: #286E88; 
}
/* ,,,,,,,,,,,, scroll bar styling end ,,,,,,,,,, */


/* ,,,,,,,,,,,, Messaging Modal Start,,,,,,,,,, */

.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 999; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    -webkit-animation-name: fadeIn; /* Fade in the background */
    -webkit-animation-duration: 0.4s;
    animation-name: fadeIn;
    animation-duration: 0.4s
}

/* Modal Content */
.modal-content {
    position: fixed;
    bottom: 0;
    background-color: #fefefe;
    width: 100%;
    -webkit-animation-name: slideIn;
    -webkit-animation-duration: 0.4s;
    animation-name: slideIn;
    animation-duration: 0.4s
}

/* The Close Button */
.close {
    color: black !important;
    float: right;
    font-size: 35px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: black !important;;
    text-decoration: none;
    cursor: pointer;
}

.modal-header {
    padding: 2px 16px;
    background-color: #fff;
    height: 40px;
}

.modal-body {
	
	max-height: 300px;
	overflow: scroll;
	overflow-y: scroll;
overflow-x: hidden;
}

.modal-footer {
    padding: 2px 16px;
    background-color: #286E88;
    height: auto;
}

/* Add Animation */
@-webkit-keyframes slideIn {
    from {bottom: -300px; opacity: 0} 
    to {bottom: 0; opacity: 1}
}

@keyframes slideIn {
    from {bottom: -300px; opacity: 0}
    to {bottom: 0; opacity: 1}
}

@-webkit-keyframes fadeIn {
    from {opacity: 0} 
    to {opacity: 1}
}

@keyframes fadeIn {
    from {opacity: 0} 
    to {opacity: 1}
}

#inbox-msg-pic{
	max-width: 40px;
	max-height: 40px;
}
#inbox-msg-pic img{
	max-width: 40px; 
	max-height: 40px;
	float: right;
	padding-left: 20px;
}
#inbox-name p{
	margin-left: 5%;
	color:#286E88; 
	position: absolute; 
	margin-bottom:10%; 
	z-index: 1; 
	font-weight: bold;
}
.send-msg-btn{
	float: left;
	height: 40px;
	-webkit-border-radius: 0 !important;
     -moz-border-radius: 0 !important;
          border-radius: 0 !important;
}
.incoming-msg{
	margin-left: 1%;
	width: 10%;
	min-height: 20px;
	padding: 2px;
	background-color: #286E88; 
	border-radius:2px;
	max-height:auto;
	font-size: 12px;
	color: #fff;
	padding-left: 2px ;
	-webkit-animation: mymove 3s infinite; /* Chrome, Safari, Opera */
    animation: mymove 3s infinite;

}
 @-webkit-keyframes mymove {
    50% {box-shadow: 10px 15px 25px #318CE7;}
}

/* Standard syntax */
 @keyframes mymove {
    50% {box-shadow: 10px 15px 25px #318CE7;}
}

/*,,,,,,,,,,,,,,,, incoming message styling end ,,,,,,,,, */ 
.outgoing-msg{
	margin-left: 75%;
	width:10%;
	min-height: 20px;
	padding: 2px;	
	background-color: #fff;
	border: 1px solid #998888;
	border-radius:4px;
	max-height:auto;
	font-size: 12px;
	color: #998888;	
	-webkit-animation: mylove 3s infinite; /* Chrome, Safari, Opera */
    animation: mlmove 3s infinite;
}

 @-webkit-keyframes mylove {
    50% {box-shadow: 10px 15px 25px #998888;}
}

/* Standard syntax */
 @keyframes mlmove {
    50% {box-shadow: 10px 15px 25px #998888;}
}


  /*,,,,,,,,,,,,,,,, outgoing message styling end ,,,,,,,,, */  
#msg-typing input{
	width: 100%; 	
	margin-bottom: 35px;
}
/* ,,,,,,,,,,,, Messaging Modal end,,,,,,,,,, */

/* ,,,,,,,,,,,, New appearing div style,,,,,,,,,, */

        
    /* THE NOTIFICAIONS WINDOW. THIS REMAINS HIDDEN WHEN THE PAGE LOADS. */
    #notifications {
        display:none;
        width:364px;
        position:absolute;
        top:310px;
        left:0;
        background:#FFF;
        border:solid 1px rgba(100, 100, 100, .20);
        -webkit-box-shadow:0 3px 8px rgba(0, 0, 0, .20);
        z-index: 1;
    }
    /* AN ARROW LIKE STRUCTURE JUST OVER THE NOTIFICATIONS WINDOW */
    #notifications:before {         
        content: '';
        display:block;
        width:0;
        height:0;
        color:transparent;
        border:10px solid #CCC;
        border-color:transparent transparent #FFF;
        margin-top:-20px;
        margin-left:205px;
    }
    
  #notifications h3 {
        display:block;
        color:#286E88 !important; 
        background:#FFF;
        font-weight:bold;
        font-size:15px;    
        padding-left: 160px;
        margin:0;
        border-bottom:solid 1px rgba(100, 100, 100, .30);
    }
        
    .seeAll {
        background:#F6F7F8;
        

        font-size:15px;
        font-weight:bold;
        text-align:center;
    }
    .seeAll a {
        color:#286E88 !important;
        padding-left:270px;
    }
    .seeAll a:hover {
        background:;
        color:#286E88 !important;
    }
	/* ,,,,,,,,,,,, Messaging div start ,,,,,,,,,, */
      
    /* THE messaging WINDOW. THIS REMAINS HIDDEN WHEN THE PAGE LOADS. */
    #messaging {
        display:none;
        width:355px;
        position:absolute;
        top:310px;
        left:0;
        background:#FFF;
        border:solid 1px rgba(100, 100, 100, .20);
        -webkit-box-shadow:0 3px 8px rgba(0, 0, 0, .20);
        z-index: 1;
    }

  #messaging:before {         
        content: '';
        display:block;
        width:0;
        height:0;
        color:transparent;
        border:10px solid #CCC;
        border-color:transparent transparent #FFF;
        margin-top:-20px;
        margin-left:285px;
    }
    
  #messaging h3 {
        display:block;
        color:#286E88 !important; 
        background:#FFF;
        font-weight:bold;
        font-size:15px;    
        padding-left: 190px;
        margin:0;
        border-bottom:solid 1px rgba(100, 100, 100, .30);
    }

.past-title{
	text-transform: uppercase;
	font-size: 20px;
	letter-spacing: 2px;
	font-weight: bolder;

}
.con-div{
	width: 55;
	 height: 40px;
	  font-size: 14px;
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
.new-pro-div{
	width: 140px;
	height: 140px;
	border-radius: 100%;
	align-content: center;
	margin-left: 25%;

}
.new-pro-div img{
	width: 100%;
	height: 100%;
	border-radius: 100%;
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
                            $username = mysql_query("SELECT `fristname`,`lastname`,`profile_picture` FROM `user` WHERE email='$individulemail' ")or die('user selection  query error');
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
					<div class="row">
					<div class="col-sm-6" align="center">
					  <?php
					  if($individulemail!=$_SESSION['email']){
								$fallow = mysql_query("SELECT `fallowby_email` FROM `fallow` WHERE `fallowby_email`='$_SESSION[email]' and `fallowed_email`='$individulemail'")or die('fallow selection  query error');
										 if(mysql_num_rows($fallow)>0){
								?>
        						 
        						<form method="post" name="-connect">
        						<button class="btn btn-warning" name="disconnect" type="submit" style="width: 120px; font-size: 13px;"> - Connected</button>
        						</form>

								<?php
								if(isset($_POST['disconnect'])){
									$run=mysql_query("DELETE from ema.fallow where fallowby_email='$_SESSION[email]' and fallowed_email='$individulemail'")or die('error in fallow deletion query');
										     ?>

										     <meta http-equiv="refresh" content="0">
										     <?php

								}
										 }
								else{
									?>  
									 
									<form method="post" name="connect">
									<button ton class="btn btn-info" name="connect" type="submit" style="width: 120px; font-size: 13px;"> + Connect</button>
									</form>
									<?php
									if(isset($_POST['connect'])){
										$runconnect=mysql_query(" select * from ema.fallow where fallowby_email='$_SESSION[email]' and fallowed_email='$individulemail'")or die('error in fallow selection query');
if(mysql_num_rows($runconnect)>0){
     echo "<script>alert('you are already fallow this user ')</script>";
	  
      exit();
}
else{
	$query=mysql_query(" insert into fallow(fallowby_email,fallowed_email )values('$_SESSION[email]' , '$individulemail' )")or die('error in fallow  insertion query');
	      
  ?>

										     <meta http-equiv="refresh" content="0">
										     <?php

									}
								}
							}
						}
								?>
					</div>
					<div class="col-sm-6" >
					<?php
					$checkorg=mysql_query(" select * from  organizer where organizer_email='$individulemail' ")or die('error in fallow selection query');
if(mysql_num_rows($checkorg)>0){
					   ?>
							<a href="profile-view.php?email=<?php echo $individulemail;?>&&page=<?php echo "organizers.php";?>"><button ton class="btn btn-info" name="" type="" style="width: 120px; font-size: 13px;">As Organizer </button></a>
							<?php
							}
							?>		 
						 
    					</div>
    			     				
						
			</div> 
		 
                
					<!--.... end  div ,,,,, -->





					 
				</header>
				
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
									<div class="col-md-4" id="logo">
										
											<img src="images/emanew2.png" class="img-responsive">
										
									</div>
									<div class="col-md-8">
										
											<ul id="menu-bar">
											<li><a href="create-event.php">Create Event</a></li>
												<li><a href="as-organizer.php">As Organizer</a></li>
												<li><a href="comp-details.php">Org Details</a></li>
												<li><a href="home.php" title="Home" style="text-decoration: none !important;"><i class="fa fa-home fa-2x" aria-hidden="true"></i></a></li>
												
											</ul>
										
									</div>
								</div>
								</div>	
							</header>
<!--................................... End of header div.............................. -->	

										
									
						
							<h3>&nbsp;Upcoming Events</h3>
						
							<div class="container"> 
							<?php
								$date= Date('20y-m-d');
   $result=mysql_query(" select user.fristname,user.lastname,event.id,event.title,event.category,event.country,event.city,event.address,event_schedul.fromdate,event_schedul.todate,event_schedul.time,event.discription,event.event_logo from user join event_schedul join event where user.email='$individulemail' and event_schedul.creater_email='$individulemail'  and event.id=event_schedul.event_id and event_schedul.fromdate >'$date' ORDER BY event_schedul.fromdate ASC") or die("Error in event selection query");
  if(mysql_num_rows($result)>0){
	  while($rows=mysql_fetch_array($result)){
		  $eventid= $rows[2];
							?>
								<div class="well">
									<div class="row" style=" color: black !important">
										<div class="col-sm-3" align="center" style="border-right: 2px solid gray;">
											<div style=" width: 140px; height: 120px;">
										 		 
												<img src="event_logo/<?php echo $rows[12];?>" alt="" class= "img-responsive" style="width: 100%; height: 100%;"/>
												 
											</div>

													 
												<p align="center" style="color: #307C94 !important" >Event By: <br>
										<span align="center" style="color: black; font-weight: bolder; "><?php echo $rows[0]." ".$rows[1]; ?> </span> </p>

								
											<div class="data-div">
												
												<span style="color: #307C94 !important"> Starts at</span> 
												<span style="color: black !important"><?php echo $rows[8];?> </span> <br>
												<!--<i style="color: black !important">2017</i>-->
											</div>
											<div class="data-div">
												<span style="color: #307C94 !important"> End at </span> 
												<span style="color: black !important"><?php echo $rows[9];?> </span> <br>
												<!--<i style="color: black !important">2017</i>-->
												
											</div>

											<div class="data-div">
												<span style="color: #307C94 !important">	On </span>  <span style="color: black !important"><?php echo $rows[10];?></span>
												</div>
												
											<div><span style="color: #307C94 !important"> Catagory  <span style="color: black !important;"><?php echo $rows[4];?></span></span>
											</div>
										


										</div>
										<div class="col-sm-9">
											<div class="row">
												<div class="col-sm-12">
													<span style="color: black !important; text-transform: uppercase; letter-spacing: 1px; font-weight: bolder; font-size: 18px;"><?php echo $rows[3];?></span> 
												</div>
											</div>
											<br>
											
											<div class="row">
												<div class="col-sm-2">
													<span style="color: #307C94 !important">About </span>
												</div>
												<div class="col-sm-10">
													 <span><?php echo $rows[11];?></span>
												</div>
											</div>
											<div class="row" style="border-bottom: 2px solid gray;">
												 
												 <div class="col-sm-2">
												 	<span style="color: #307C94 !important">Held at </span>
												 </div>
												 
												<div class="col-sm-10">
													  <span><?php echo $rows[7];?></span>  <span><?php echo $rows[6];?></span> <span><?php echo $rows[5];?></span>
												</div>
											</div>	 
												 
											 
											<!---review section start-->
										
											<?php
										 $reviewquery=mysql_query("select  * from ema.review where event_id='$eventid' ORDER BY review_id DESC LIMIT 3") or die('review jion  event selection query error');
										if(mysql_num_rows($reviewquery)>0){
										 while($review=mysql_fetch_array($reviewquery)){
										 	?>
					 							<div class="row" style="padding: 4px; margin-top: 4px;">
										<div class="col-md-2 " >
										<div style="width: 80px; height: 60px; float: right; ">
										<?php
					 					$revieweremail=$review[1];	
										 $reviewernamequery = mysql_query(" SELECT fristname,lastname,profile_picture  FROM `user` WHERE email='$revieweremail'")or die('reviewer  name selection  query error');
										 
										$reviewername=mysql_fetch_array($reviewernamequery);
									?>
											 
												<img src="profile_pictures/<?php echo $reviewername[2];?>" class="img-responsive img-rounded" style="width: 80px; height: 60px;">
												 
										 
											
										</div>
										</div>
										<div class="col-md-10">
										 
											<div class="row">
												<div class="col-md-8">
													<strong style="font-weight: bolder; color:#307C94;position: relative; left: -10px; ">
													 <?php
													 echo $reviewername[0]." ".$reviewername[1];?>
													  </strong>
												</div>
												<div class="col-md-4">
													<span style="float: right;  ">
													<a href="view_review.php?reviewid=<?php echo $review[3];?>&&eventid=<?php echo $eventid;?>">
													 View
													 </a>
													 </span>
												</div>
											</div>
											<div class="row">
												<div>
													  <?php
													 	if(strlen($review[4])>40){
													  echo substr($review[4],0,40).
													 "<span style='color:#307C94; font-size:10px;'> Read more ... </span>";
													}
													else{
														 echo $review[4];
													  
													}
													 ?>
												</div>
											</div>
											
										</div>
												</div>
												<?php
								}
							}else
							{
								?>
							 <span style="padding-left: 40%; color: gray; font-weight: bolder;">No  review added yet </span>
							<?php	
							}
							?>
									<!---review section end-->
									<div class="row">
					
					 	<div  class="col-md-12" align="center">
						  <?php
									$totalreview=mysql_query("SELECT COUNT(review) from review where  event_id='$eventid' ") or die('  event count review selection query error');
									if(mysql_num_rows($totalreview)>0){
									$count=mysql_fetch_array($totalreview)
									?>
										<span > <p id="hide-show" > <b style="color: black !important"><a href="view_review.php?reviewid=<?php echo $review[3];?>&&eventid=<?php echo $eventid;?>"> <?php echo $count[0];?> reviews </a></b></p></span>
										<?php
										}
									else{
									?>
										<span><p id="hide-show">  <b  style="color: black !important"> 0 review </b><p></span>
									<?php
									}
									?>
					</div>
					 
					  
				</div>		
										 

								 
										</div>
									</div>
								</div> <!--end of well-->
<?php
	  }
  }
  else{
	  ?>
	  <p><font color="gray" size="5">
	  <center> No upcoming event of this USER </center>
	  </font>
	  </p>
	  <?php
  }
?>
 
 			</div>
							
</section><!--one end-->

<h3>&nbsp;Past Events</h3>
						<!-- Three -->
<section id="three" class="container ">
	<br>
							
							<?php $your=mysql_query(" select user.fristname,user.lastname,event.id,event.title,event.category,event.discription,event.event_logo from user join event_schedul join event where user.email='$individulemail' and event_schedul.creater_email='$individulemail'  and event.id=event_schedul.event_id and event_schedul.fromdate <='$date'") or die("Error in event selection query");
  if(mysql_num_rows($your)>0){
	  while($yr=mysql_fetch_array($your)){
		  $yreventid= $yr[2];?>
								<div class="well" style=" color: black !important">
									<div class="row" >
									
										<div class="col-sm-3" align="center" style="border-right: 2px dashed gray">
										  

											<div style="width: 120px; height: 140px">
												<span>
													<img src="event_logo/<?php echo $yr[6];?>" alt="" class= "img-responsive img-rounded" align="center" style="width: 100%; height: 100%" />
												</span>
											</div>
					
					 
										<br>
										<p align="center"  style="color: #307C94 !important" class="sponsor">Event By:<br>
										
										<span align="center" style="color: black"><?php echo $yr[0]." ".$yr[1]; ?></span></p>

										
										</div>
										<div class="col-sm-9">
												<div class="row">
													<div class="col-sm-12 past-title">
														<span><?php echo $yr[3];?></span>
													</div>
												</div>
												<br>
												<div class="row">
													<div class="col-sm-3">
														<span style="color: #307C94 !important"> About event </span>
													</div>
													<div class="col-sm-9">
														<?php echo $yr[5];?>
													</div>
												</div>
												<br>
												 
											 
									</div>

										


												</div>
															</div>
															
															<?php
								  }
							  }
							  else{
								  ?>
								  <p><font color="green" size="5">
								  <center>There is no any past event of this user</center>
								  </font>
								  </p>
								  <?php
							  }
							?>
 								
									 
										 	
								 
							</section>
							<hr>

						<!-- Four -->
							<section id="four">
								<div class="container">
									 <h4 style="color:#286E88; font-family: 'BioRhyme Expanded';">Improve EMA  </h4>
                  <p style="color:#286E88; font-family: 'BioRhyme Expanded'; ">Lets do it...  </p>
									<form method="post" class="form-group" action="#" >
										<div class="row uniform">
											<div class="12u"> <input type="text" name="subject" id="subject" class="form-control" placeholder="Subject" /></div>
										</div>
										<div class="row uniform">
											<div class="12u"><textarea name="message" id="message" class="form-control" placeholder="Message" rows="6"></textarea></div>
										</div>
										<div class="row uniform">
											<div class="12u">
												<ul class="actions">
													<li><input type="submit" class="special" value="Send Message" style="background-color: #31B0D5" /></li>
												</ul>
											</div>
										</div>
									</form>
								</div>
							</section>
						 </div>
					
						 
				<!-- Footer -->
					<section id="footer">
						<div class="container-fluid">
							<div>
								 <span style="float: right;">CopyRight &copy; 2017</span> 
							</div>
						</div>
						
           
					</section>
				
			</div>
			</div>
	  
						 
			 

			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.rateyo.min.js"></script>
			<script src="assets/js/bootstrap.min.js"></script>
			<script src="assets/js/jquery.scrollzer.min.js"></script>

		<!-- Scripts -->
			<script type="text/javascript">
   $(function () {
 
  var $rateYo = $(".rateYo").rateYo();
 
  $(".rateYo").click(function () {
 
    /* get rating */
    var rating = $rateYo.rateYo("rating");
 
    window.alert("you rate " + rating + " ok!");
	  
  });
 
});
    
			</script>
			
			 <script type="text/javascript">
				
				$('.btn-link').click(function() {
    $('#show').css('visibility', ($('#show').css('visibility') == 'visible') ? 'hidden' : 'visible');
});
			</script>

<!--for Messaging model -->
<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

<!--for comments div -->

<script type="text/javascript">

 $('#hide-show').click(function() {
    $('.comments-div').css('visibility', ($('.comments-div').css('visibility') != 'hidden') ? 'visible' : 'hidden').slideToggle("slow");

});
</script>

<script type="text/javascript">
	 
      
    $("#hide-show").click(function () {
        $("b").fadeOut(function () {
            $("b").text(($("b").text() != 'Hide comments') ? 'Hide comments' : 'Show comments').fadeIn("slow");
        })
    });


</script>
<script type="text/javascript">

    $('.reply').click(function() {
    $('.comment-field').css('visibility', ($('.comment-field').css('visibility') != 'hidden') ? 'visible' : 'hidden').slideToggle("slow");
});
</script>

<!--for comments div End -->

<!--for notification div new -->

<script>
    $(document).ready(function () {

        // ANIMATEDLY DISPLAY THE NOTIFICATION COUNTER.
        $('#noti_Counter')
            .css({ opacity: 0 })
            .text('7')              // ADD DYNAMIC VALUE (YOU CAN EXTRACT DATA FROM DATABASE OR XML).
            .css({ top: '-10px' })
            .animate({ top: '-2px', opacity: 1 }, 500);

        $('#noti_Button').click(function () {
        	$('#messaging').hide();
            // TOGGLE (SHOW OR HIDE) NOTIFICATION WINDOW.
            $('#notifications').fadeToggle('fast', 'linear', function () {
                if ($('#notifications').is(':hidden')) {
                    $('#noti_Button').css('background-color', '#2E467C');
                }
                else $('#noti_Button').css('background-color', '#39B3D7');        // CHANGE BACKGROUND COLOR OF THE BUTTON.
            });

            $('#noti_Counter').fadeOut('slow');                 // HIDE THE COUNTER.

            return false;
        });

        // HIDE NOTIFICATIONS WHEN CLICKED ANYWHERE ON THE PAGE.
        $(document).click(function () {
            $('#notifications').hide();

            // CHECK IF NOTIFICATION COUNTER IS HIDDEN.
            if ($('#noti_Counter').is(':hidden')) {
                // CHANGE BACKGROUND COLOR OF THE BUTTON.
                $('#noti_Button').css('background-color', '#FFF');
            } 
            else $('#noti_Button').css('background-color', '#39B3D7'); 
        });

        $('#notifications').click(function () {
            return false;       // DO NOTHING WHEN CONTAINER IS CLICKED.
        });
    });
</script>
<script>
    $(document).ready(function () {

        // ANIMATEDLY DISPLAY THE messaging COUNTER.
        $('#msg_Counter')
            .css({ opacity: 0 })
            .text('7')              // ADD DYNAMIC VALUE (YOU CAN EXTRACT DATA FROM DATABASE OR XML).
            .css({ top: '-10px' })
            .animate({ top: '-2px', opacity: 1 }, 500);

        $('#msg_Button').click(function () {
        	$('#notifications').hide();
            // TOGGLE (SHOW OR HIDE) NOTIFICATION WINDOW.
            $('#messaging').fadeToggle('fast', 'linear', function () {
                if ($('#messaging').is(':hidden')) {
                    $('#msg_Button').css('background-color', '#2E467C');
                }
                else $('#msg_Button').css('background-color', '#39B3D7');        // CHANGE BACKGROUND COLOR OF THE BUTTON.
            });

            $('#msg_Counter').fadeOut('slow');                 // HIDE THE COUNTER.

            return false;
        });

        // HIDE NOTIFICATIONS WHEN CLICKED ANYWHERE ON THE PAGE.
        $(document).click(function () {
            $('#messaging').hide();

            // CHECK IF NOTIFICATION COUNTER IS HIDDEN.
            if ($('#msg_Counter').is(':hidden')) {
                // CHANGE BACKGROUND COLOR OF THE BUTTON.
                 $('#msg_Button').css('background-color', '#FFF');
            } 
            else $('#msg_Button').css('background-color', '#39B3D7'); 
        });

        $('#messaging').click(function () {
            return false;       // DO NOTHING WHEN CONTAINER IS CLICKED.
        });
    });
</script>
			
			 


			<script src="assets/js/bootstrap.min.js"></script>
			<script src="assets/js/jquery.scrollzer.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>
 
 