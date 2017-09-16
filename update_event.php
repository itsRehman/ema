<!DOCTYPE HTML>
<?php
session_start();
?>
<html>
	<head>
		<title>update event page</title> 
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
			<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
		<link rel="stylesheet" href="assets/css/main.css" />
		


		<script type="text/javascript" src="assets/css/bootstrap.min.js"></script>
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->

<link href='https://fonts.googleapis.com/css?family=BioRhyme Expanded' rel='stylesheet'>
<link href='https://fonts.googleapis.com/css?family=BenchNine' rel='stylesheet'>

	<style type="text/css">
		body{
	font-family: 'BenchNine';
	letter-spacing: 1px;

}
h3{
		 font-family: 'BioRhyme Expanded';
    color:#307C94;
	}
	

#logo img{
	width: 45%;
	
	padding-bottom: 10px;
}

.form-group.fo{
	font-family: 'Kaushan Script', cursive;
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
#titleerror{
 color:red;
 font-size:90%; !important;
 }
 #titlesuccess{
 color:green;
 font-size:90%; !important;
 }
   #startdateerror{
 color:red;
 font-size:90%; !important;
 }
 #startdatesuccess{
 color:green;
 font-size:90%; !important;
 }
  #endingdateerror{
 color:red;
 font-size:90%; !important;
 }
 #endingdatesuccess{
 color:green;
 font-size:90%; !important;
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
									$name=mysql_fetch_array($username);
									?>

					<div><span class="image avatar"><img src="profile_pictures/<?php echo $name[2];?>" alt="" /></span></div>
					
					 
					
					<h1 id="logo"><?php echo $name[0]." ".$name[1]; ?></h1>
					 
					<br>
					 
				</header>
				<nav id="nav">
					<ul>
						<li><a href="#one" class="active"> Event update</a></li>
						  
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
									<div class="col-md-4" id="logo">
										
											<img src="images/emanew2.png" class="img-responsive">
										
									</div>
									<div class="col-md-8">
										
											<ul id="menu-bar">
											<li><a href="profile.php">Profile</a></li>
												<li><a href="as-organizer.php">As Organizer</a></li>
												<li><a href="comp-details.php">Company Details</a></li>
												<li><a href="home.php">Home</a></li>
												
											</ul>
										
									</div>
								</div>
								</div>	
							</header> <!-- End of header div -->	


							<div class="row">
								<div class="col-md-12">
								<h3 align="center"  style="color:#286E88; ">Update your event here</h3>
									<br>
									<br>
									<?php
									$id=$_GET['id'];
			 $eventupdate = mysql_query(" select event.id,event.title,event.category,event.country,event.city,event.address ,event_schedul.fromdate,event_schedul.todate,event_schedul.time,event.discription from event join event_schedul  where  event.id=event_schedul.event_id and event.id='$id'") or die("Error in  event selection  query in updation page");
  if(mysql_num_rows($eventupdate)>0){
	  while($event = mysql_fetch_array($eventupdate)){
									?>
									
			<form class="form-horizontal" name="create-event" method="post" action="update_event_php.php"  onsubmit=" return validatedata();">
<fieldset>

<!-- Form Name -->
 
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label fo" for="textinput" style="color:#286E88; ">Title</label>  
  <div class="col-md-4">
  <input  name="title" type="text"  class="form-control input-md" value="<?php echo $event[1];?>"  id=eventtitle oninput="titlevalidat();"><span id="titleerror"></span><span id="titlesuccess"></span>
    
  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="selectbasic"  style="color:#286E88; ">Category </label>
  <div class="col-md-4">
    <select id="eventcategory" name="category" class="form-control">
      <option value="<?php echo $event[2];?>"><?php echo $event[2];?></option>
      <option value="birthday">Birthday</option>
      <option value="conference">Conference</option>
      <option value="concert">Concert</option>
      <option value="meeting">Meeting</option>
      <option value="party">Party</option>
      <option value="sports">Sports</option>
      <option value="seminer">Seminar</option>
      <option value="webinar">Webinar</option>
      <option value="wedding">Wedding</option>
      <option value="work shop">Work shop</option>
      <option value="other">Other</option>
    </select>
  </div>
</div>

 <!-- Select country -->
<div class="form-group">
  <label class="col-md-4 control-label" for="selectbasic"  style="color:#286E88;  ">Select Contry</label>
  <div class="col-md-4">
    <select id="eventcountry" name="country" class="form-control" >
      <option value="<?php echo $event[3];?>"><?php echo $event[3];?></option>
      <option value="pakistan">Pakistan</option>
      <option value="india">India</option>
    </select>
  </div>
</div>
<!-- Select city -->
<div class="form-group">
  <label class="col-md-4 control-label" for="selectbasic"  style="color:#286E88; ">Select City</label>
  <div class="col-md-4">
    <select id="eventcity" name="city" class="form-control" >
      <option value="<?php echo $event[4];?>"><?php echo $event[4];?></option>
      <option value="peshawar">Peshawar</option>
      <option value="lahore">Lahore</option>
	  <option value="swat">Swat</option>
	  <option value="banglor">banglor</option>
	  
    </select>
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput"  style="color:#286E88; ">Address</label>  
  <div class="col-md-4">
  <input id="eventaddress" name="address" type="text" value="<?php echo $event[5];?>" class="form-control input-md" >
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput"  style="color:#286E88;">Starting date</label>  
  <div class="col-md-4">
  <input id="startdate" name="fromdate" value="<?php echo $event[6];?>" type="date"   class="form-control input-md"  oninput="startdatevalidat();"><span id="startdateerror"></span><span id="startdatesuccess"></span>
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput"  style="color:#286E88;">Ending date</label>  
  <div class="col-md-4">
  <input id="enddate" name="todate" value="<?php echo $event[7];?>" type="date"   class="form-control input-md" required oninput="endingdatevalidat();"><span id="endingdateerror"></span><span id="endingdatesuccess"></span>
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput"  style="color:#286E88; ">Time</label>  
  <div class="col-md-2">
  <input id="eventtime" name="time" type="time" value="<?php echo $event[8];?>"   class="form-control input-md" >
    
  </div>
</div>

<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="textarea"  style="color:#286E88; ">Description</label>
  <div class="col-md-4">                     
    <textarea class="form-control" id="eventdiscription" name="discription"  ><?php echo $event[9];?></textarea>
  </div>
</div>

<input type="hidden" name="eventid" value="<?php echo $id;?>">

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="singlebutton"></label>
  <div class="col-md-4">
    <button id="singlebutton" style="float: right;" type="submit" name="update" class="btn btn-success">Update Event</button>
  </div>
</div>

</fieldset>
</form>
<?php
	  }  
  }
  
  else{
	  
  }
?>
	</div>
		</div>
			</section> <!-- section one end -->

						 
							 
						<!-- Three -->
							
							<hr>
							<!-- Footer -->
					<section id="footer">
						<div class="container">
							<div >
								 <span style="float: right;">CopyRight &copy; 2017</span> 
							</div>
						</div>
						
           
					</section>
						 

						</div> <!-- Main End -->

				

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/css/bootstrap.min.js"></script>
			<script src="assets/js/jquery.scrollzer.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

			<script type="text/javascript"> 

//validation for title
 function titlevalidat(){
		var titleReg = /^[A-Za-z ]+$/;
      var title = $('#eventtitle').val();
	  var massage = "";
	  if(titleReg.test(title)){
	  massage= " Title is valid";
            $("#titlesuccess").html(massage); 
			  $("#titleerror").html(''); 
			  
        }
		if(!titleReg.test(title)){
	  massage= "Title is invalid";
            $("#titleerror").html(massage); 
			 $("#titlesuccess").html(''); 
			  
        }
		if(title==""){
	 $("#titleerror").html(''); 
	 $("#titlesuccess").html('');
	  
	 }
	   
	  }
	  //starting date validation
function startdatevalidat(){
var startingdate= $("#startdate").val();
 

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
if(startingdate<ddd){
$("#startdateerror").html('  invalid');
$("#startdatesuccess").html('');
} 
if(startingdate>=ddd){
 $("#startdateerror").html('');
$("#startdatesuccess").html('  Valid');

} 
if(startingdate==""){
 $("#startdateerror").html('');
$("#startdatesuccess").html('');

} 

}
//ending date validation
function endingdatevalidat(){
var endingdate= $("#enddate").val();

 var startingdate= $("#startdate").val();

  
if(endingdate<startingdate){
$("#endingdateerror").html('  invalid');
$("#endingdatesuccess").html('');
} 
 else{
 $("#endingdateerror").html('');
$("#endingdatesuccess").html('  Valid');

} 
if(endingdate==""){
 $("#endingdateerror").html('');
$("#endingdatesuccess").html('');

} 

}

			//validate form on submition

   function validatedata(){ 
   var eventtitle = document.getElementById('eventtitle').value;
    var category = document.getElementById('eventcategory').value;
   var country = document.getElementById('eventcountry').value;
   var city = document.getElementById('eventcity').value;
   var address = document.getElementById('eventaddress').value;
   var startdate = document.getElementById('startdate').value;
var enddate = document.getElementById('enddate').value;
   var eventtime = document.getElementById('eventtime').value;
   var discription = document.getElementById('eventdiscription').value;
     
	  var eventtitleReg = /^[A-Za-z ]+$/;
    
		if(eventtitle==""){
	   
            
			alert(' Title is required');
			return false;
        }
		  if(category==""){
	   
            
			alert(' Category is required');
			return false;
        } 
		if(country==""){
	   
            
			alert(' Country is required');
			return false;
        } 
		 if(city==""){
	   
            
			alert(' city is required');
			return false;
        }
		 if(address==""){
	   
            
			alert(' address/url is required');
			return false;
        }
		if(startdate==""){
	   
            
			alert(' start is required');
			return false;
        }
		if(enddate=="" ){
	   
            
			alert(' End date is required');
			return false;
        }
		if(eventtime==""){
	   
            
			alert(' time is required');
			return false;
        }
		
		 if(discription==""){
		alert(' discription is required');
	   return false;
             
	}
	if(!eventtitle.match(eventtitleReg)){
		alert('title formate is invalid');
	   return false;
             
	}
	 
	 
	if(startdate!=""){
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
if(startdate<ddd){
 alert('start date is invalid');
	   return false;
} 
	}
if(enddate<startdate){
alert('end date is invalid');
	   return false;	
}
         
		 else{
		 return true;
		 } 
	   
	  }
    
 
	  </script>

	</body>
</html>