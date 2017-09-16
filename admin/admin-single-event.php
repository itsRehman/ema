<!DOCTYPE html>
<html>
<?php
session_start();
$eventid=$_GET['eventid'];
$email=$_GET['email'];
?>
<head>
	<title>Single Event</title>
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

	div.panel-row{
		padding: 4px;
			}
		button.accordion {

    background-color: #eee;
    color: #286E88;
    cursor: pointer;
    padding: 18px;
    margin: 4px;
    width: 100%;
    border: none;
    border-radius: 4px;
    text-align: left;
    outline: none;
    font-size: 15px;
    transition: 0.4s;
    font-weight: bolder;
}

button.accordion.active, button.accordion:hover {
    background-color: #286E88;
    color: white;
}

button.accordion:after {
    content: '\002B';
    color: #286E88;
    font-weight: bold;
    float: right;
    margin-left: 5px;
}

button.accordion.active:after {
    content: "\2212";
    color: white;
}

div.acc-panel {
    padding: 0 18px;
    background-color: white;
    max-height: 0;
    overflow: hidden;
    transition: max-height 0.2s ease-out;
}


/*,,,,,,,,,,,, accordians style,,,,,,,,,,*/
.btn-delete-singleevent{

	width: 100%;
	height: 30px;
}
.reviewer-img{
	width: 60px; 
	height: 60px; 
	}
	.reviewer-img img{
		
	width: 60px; 
	height: 60px;
	}
.ticket-well{
	padding: 5px;
	margin: 5px;
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

						<a href="#" class="navbar-brand">Logo</a>
					</div>
					<!-- Collect Nav links and Content for Toggling -->
					<div class="collapse navbar-collapse" id="myNavbar">
						<ul class="nav navbar-nav navbar-left">
							<li></li>
						</ul>

						<ul class="nav navbar-nav navbar-right">
							<li><a href="welcome.php">Home</a></li>
							
							<li><a href="event.php">All Event</a></li>
							
						</ul>
					</div>
				</div>
			</div>
		</div>
	</nav>
	<!-- Navigation Ends -->

	<!-- Main Section with Sidebar-Menu and Main Content Starts -->
	<div class="main-events" >
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
				</div>
				<!-- Sidebar Ends Here -->

				<!-- All Events One by One Starts -->
				<div class="col-lg-9 ">
				<?php
				$con=mysql_connect("localhost","root", "") or die("database connectivity error");
							mysql_select_db("ema",$con)or die ('data base selection error');

							$query=mysql_query("  select event.id,event.title,event.discription,event.category,event.chargingtype,event.event_logo,event_schedul.creater_email,event_schedul.fromdate,event_schedul.todate,user.fristname,user.lastname from event join event_schedul join user where event.id=event_schedul.event_id and user.email=event_schedul.creater_email and event.id='$eventid' and user.email='$email' ") or die('event    table selection query error');
							  $rows=mysql_fetch_array($query);
							?>
					<div class="panel-heading row">
							<div class="panel-title">
								<div class="row">
									<div class="col-md-4">
										<h4><?php echo  $rows[1];?></h4>
									</div>
									<div class="col-md-4">
										<h5>Starts at <?php echo  $rows[7];?></h5>
									</div>
									<div class="col-md-4">
										<h5>End at <?php echo  $rows[8];?></h5>
									</div>
								</div>
							</div>
						</div>
					<div class="panel panel-default row">
						<div class="col-md-12">
							<br>
							<div class="row pic-col-div">
								<div class="col-md-3" align="center">
									<div class="">
										<img src="../event_logo/<?php echo  $rows[5];?>" class="img-responsive">
										<h5>Event by</h5>
										<h5> <?php echo  $rows[9]." ".$rows[10];?></h5>
									</div>
								</div>
								<div class="col-md-6">
									<div class="row">
										<div class="col-sm-3">
											<h5>About</h5>
										</div>
										<div class="col-sm-9">
											<h6> <?php echo  $rows[2];?></h6>
										</div>
									</div><br>
									<div class="row">
										<div class="col-sm-3">
											<h5>Catagory</h5>
										</div>
										<div class="col-sm-9">
											<h6> <?php echo  $rows[3];?></h6>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-12">
											<h5><?php echo  $rows[4]." ";?> Event</h5>
										</div>
									</div>
								</div>
								<div class="col-md-3">
									<div class="well ticket-well">
										<h5 align="center">Tickets Info</h5>
										<?php
							$ticketinfo= mysql_query("SELECT `ticketnumbers`,`ticketprice` FROM ema.`paid_event_detail` WHERE `event_id`='$eventid'")or die(' ticket  info selection  query error');
										 			if(mysql_num_rows($ticketinfo)>0){
													$info=mysql_fetch_array($ticketinfo);
													?>
										<span>Sold Tickets </span> <span style="float: right;">
										<?php
							  		$countticket=mysql_query(" SELECT COUNT(ticket_id) from ticket where  event_id='$eventid'")or die('ticket count query error') ;
							  			if(mysql_num_rows($countticket)>0){
													$ticket=mysql_fetch_array($countticket);
													 echo $ticket[0];
												
												}
													?>
										  
										 </span> <br>
										<span>Price / Ticket </span> <span style="float: right;"><?php echo $info[1];?> </span>
										<?php
									}
									else{
										echo "<center>"."NO ticket Info"."</center>";
									}
									?>
									</div>
									 
									
								</div>
							</div>
					
							
						</div>
					</div>
					<div class="row panel-row">
						<button class="accordion">Check reviews</button>
							<div class="acc-panel">
								<?php
										 $reviewquery=mysql_query("select * from ema.review where event_id='$eventid'  ORDER BY review_id DESC  ") or die('review selection query error');
										if(mysql_num_rows($reviewquery)>0){
										 while($review=mysql_fetch_array($reviewquery)){
										 	?>
								<div class="row">
									<div class="col-sm-3" align="center">
										<div class="reviewer-img">
							  		 		<?php
					 					$revieweremail=$review[1];	
										 $reviewernamequery = mysql_query(" SELECT fristname,lastname,profile_picture  FROM `user` WHERE email='$revieweremail'")or die('reviewer name a selection  query error');
										 
										$reviewername=mysql_fetch_array($reviewernamequery);
									?>
									<img src="../profile_pictures/<?php echo $reviewername[2];?>" class="img-responsive img-rounded">
												 	 
							  		 	</div>
									</div> 
									<div class="col-sm-6">
									 
										<p><?php echo $reviewername[0]." ".$reviewername[1];?></p>
										<p><?php echo $review[4];?></p>
									</div>
								</div>
								<?php
							}
						}
						else{
							echo " NO Review";
						}
						?>

							</div>
						 
						<button class="accordion">View participants</button>
							<div class="acc-panel">
							<?php
									 
									 $participants = mysql_query("SELECT  user.fristname,user.lastname,user.email,user.profile_picture FROM user join `participant` WHERE user.email=participant.participant_email and participant.event_id='$eventid'")or die('participants selection  query error');
									if(mysql_num_rows($participants)>0){
									 ?>
								
									 
									<?php
									while($rowss=mysql_fetch_array($participants)){
									$participantemail=	$rowss[2];
									 
									?>
								<div class="row">
									<div class="col-sm-3" align="center">
										<div class="reviewer-img">
							  		 		 
		  	<img src="../profile_pictures/<?php echo $rowss[3];?>"  class="img-responsive img-rounded" > 
		  
							  		 	</div>
							  		 	<p><?php echo $rowss[0]." ".$rowss[1];?></p>
									</div> 
									 
									 
								</div>
								<?php
							}
						}
						else{
							echo "NO Participants";
						}
							?>
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

	<script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].onclick = function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight){
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    } 
  }
}
</script>

</body>
</html>