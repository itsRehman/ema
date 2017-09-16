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
	<title>Event</title>
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
							<li><a href="user.php">User</a></li>
							<li><a href="event.php" class="active">Event</a></li>
							<li><a href="organizer.php">Organizer's</a></li>
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
				<div class="col-lg-7 ">
					<div class="panel-heading row">
							<div class="panel-title">
								<h4>All Events in EMA</h4>
							</div>
						</div>
					<div class="panel panel-default row">
						<div class="col-md-12">
							<br>
							<?php
							$con=mysql_connect("localhost","root", "") or die("database connectivity error");
							mysql_select_db("ema",$con)or die ('data base selection error');

							$query=mysql_query("  select event.id,event.title,event.event_logo,event_schedul.creater_email,event_schedul.todate,user.fristname,user.lastname from event join event_schedul join user where event.id=event_schedul.event_id and user.email=event_schedul.creater_email LIMIT 20,41 ") or die('event    table selection query error');
 
						if(mysql_num_rows($query)>0){
							 while($rows=mysql_fetch_array($query)){
							?>
							<div class="row pic-col-div">
								<div class="col-md-3" align="center">
									<div class="">
										<img src="../event_logo/<?php echo $rows[2];?>" class="img-responsive">
										<h5><?php echo $rows[1];?></h5>
									</div>
								</div>
								<div class="col-md-3">
									<h5>Event by</h5>
									<h5><?php echo $rows[5]." ".$rows[6];?> </h5>
									
								</div>
								<div class="col-md-3">
									<a href="admin-single-event.php?eventid=<?php echo $rows[0];?>&&email=<?php echo $rows[3];?>"><h5>Event Details</h5> </a>

									
								</div>
								<div class="col-md-3">
									<h5>End:<?php echo $rows[4];?></h5>
									<a href="admindelete_event.php?eventid=<?php echo $rows[0];?>&&page=<?php echo 'event1.php';?>" onclick=" return window.confirm('Are you sure to delete');"><button type="button"  class="btn btn-danger" style="float: right;">Delete</button></a>
								</div>
							</div>
							<?php
						}
						}
						else{
							echo "Event is Less Then 20.";
						}
						?>
					
							<br>
						
							 
						
						</div>
				</div> <!-- One Event Ends Here -->
				</div>
				<!-- All Events From/To Search Function -->
				<div class="col-lg-2 col-md-2 date">
					<h5> Delete Events</h5>
					 <form method="post" action="delete_eventbydate.php" name="deletform" onsubmit=" return validatedata();">
					<h6>From: <input type="date" name="fromdate" class="form-control" id="from"></h6>
					<h6>To: <input type="date" name="todate" class="form-control" id="to" ></h6>
					<button type="submit" name="submit" class="btn btn-warning" onclick=" return window.confirm('Are you sure to delete');">Delete</button>
					<input type="hidden" name="page" value="event1.php">
				</form>

				
				</div>
				
				<!-- All Events From/To Search Function -->
				
			
		</div>
	</div>
	<!-- Main Section with Sidebar-Menu and Main Content Ends -->
<!--pagenation -->
	<div class="row" align="center">
	<div class="pagination" style="align-content: center;">
  <a href="event.php">&laquo;</a>
  <a   href="event.php">1</a>
  <a  class="active" href="event1.php">2</a>
  <a href="event2.php">3</a>
  <a href="event2.php">&raquo;</a>
</div>
</div>

	<!-- Footer -->
	<div class="footer" id="footer">
		<p>&copy; CopyRight-2017 | All Right Reserved</p>
	</div>
	<!-- Footer Ends -->
	<script type="text/javascript">
		function validatedata(){ 
   var from = document.getElementById('from').value;
   var to = document.getElementById('to').value;

   if(from==""){
	   
            
			alert(' from dtae is required');
			return false;
        }
		if(to=="" ){
	   
            
			alert(' to date is required');
			return false;
        }
        if(from!=""){
	   var d = new Date();
  var year=d.getFullYear();
  var month=d.getMonth();
  var date=d.getDate();
  month=month+1;
  if(month<10){
	  month="0"+month;
  }
  if(date<10){
	  date="0"+date;
  }
  
  var ddd=year+"-"+month+"-"+date; 
if(from>ddd){
 alert('from date is invalid');
	   return false;
} 
	}
   
if(to<from){
alert('to date is invalid');
	   return false;	
}
         
		 else{
		 return true;
		 } 
	   
	  }
	</script>

</body>
</html>