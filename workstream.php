<!DOCTYPE html>
<?php
session_start();
$id=$_GET['id'];
$email=$_GET['email'];
$page=$_GET['page'];
?>
<html>
<head>

	<title>workstream page</title>

<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/styling1.css">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="css/animate.css">

<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>


<link href='https://fonts.googleapis.com/css?family=BioRhyme Expanded' rel='stylesheet'>
<link href='https://fonts.googleapis.com/css?family=BenchNine' rel='stylesheet'>

<style type="text/css">
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


#date-div1{
	width: 130px;
	height: 130px;
	font-weight: bold;
	color: #286E88 !important;
	margin-top: 5px;
	margin-left: 0px;
	font-size: 9px;
	padding: 1px;
	letter-spacing: 1px;

}
#pic-div{
	width: 120px;
	height: 120px;
}
#pic-div img{
	width: 100%;
	height: 100%;
}

::-webkit-input-placeholder{
	font-family: 'BenchNine';
	letter-spacing: 1px;
}
.ticket-info-row{
	border-bottom: 2px solid #286E88;
}
.ticket-info{
	font-size: 18px;
}

.side-col{
	border-left: 5px solid #286E88;
}
 .form-control::placeholder{
	font-family: 'BenchNine';
	letter-spacing: 1px;
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
.proposal-btn{
	float: right;
}

</style>


</head>
<body>

<nav class="navbar navbar-default" id="custom-bootstrap-menu" role="navigation">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#"><img src="images/emanew2.png" class="img-responsive"></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">

      	
        <li class="active"><a href="home.php">Back to Home <span class="sr-only">(current)</span></a></li>
		<li class=" pro-img"><a><span class="glyphicon glyphicon-plus"></span></a></li>
</ul><?php
$con=mysql_connect("localhost","root", "") or die("database connectivity error");
                            mysql_select_db("ema",$con);
							$date= Date('20y-m-d');
							$name_joindate=mysql_query("select fristname ,lastname,joindate,profile_picture from user where email='$_SESSION[email]' ") or die('name and join date query error');
								$data=mysql_fetch_array($name_joindate);
								 
			 ?>
         <div id="show" class="color"  >
							
							<div>
								<div class="col-md-4" align="center">
								<br>
								             <span id="profile-img"> <a href="profile.php" ><img src="profile_pictures/<?php echo $data[3];?>" class= "img-responsive img-rounded" align="center" height="70%" width="70%" /> </a></span>
								<br>
								
								<a href="profile.php"><button class="btn btn-default" id="profile-btn"> My Profile</button></a>
								<br>	
								</div>
								<div class="col-md-5">
								 
								<p style="float: left; margin-top:30px; font-size: 11px; color: white; font-weight: bold;"><?php echo $data[0];echo " ".$data[1]; ?></p>
								<p style="float: left; font-weight: bold;font-size: 11px; color: white;">Member since <span><?php echo $data[2]; ?></span></p>
									
								</div>
								<div class="col-md-3">
								<div style="position: relative;">

								<a href="setting.php"><button class="btn btn-info" id="setting-btn"> Settings</button></a>
								<br>
								<a href="logout.php"><button class="btn btn-danger" id="logout-btn"> Log Out</button></a>
								</div>
								</div>
								
    						</div>
    						
    						
    						</div>
       
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<!--,,,,,,,,,,,,,, navbar end ,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,, -->

<section id="feed">
	<div class="container-fluid">
		<div class="row">
		
			<div class="col-md-5 ">
			<?php
			$event_requirement=mysql_query("select event.title,paid_event_detail.requirements,paid_event_detail.orgDescription,paid_event_detail.	ticketnumbers,paid_event_detail.ticketprice from event join paid_event_detail  where event.id=paid_event_detail.event_id and event.id='$id'") or die('reqirent selection query error');
								$requirements=mysql_fetch_array($event_requirement);
								?>
				<div>
					<h4><?php echo $requirements[0]."  ";?> requirements</h4>
					<br>
				</div>
				<div>
					 <?php echo $requirements[1];?>
				</div>
					<br>
				<div>
					<h4>Organizer they looking for</h4>
				</div>
				<br>
				<div>
					 <?php echo $requirements[2];?>
				</div>
				<br>
				<br>
				<div class="ticket-info-row">
					<h4>Tickets Info</h4>
				</div>
				<br>
				<div class="row ">
					<div class="col-md-3 col-md-offset-2 ticket-info">
						Price per ticket
					</div>
					<div class="col-md-2" style="color:#286E88; font-size: 16px; ">
						<b><?php echo $requirements[3];?></b>
					</div>
					<div class="col-md-5" >
						
					</div>
				</div>
				<br>
				<div class="row">
					<div class="col-md-3 col-md-offset-2 ticket-info">
						 TOtal Tickets :
					</div>
					 
					<div class="col-md-6" style="color:#286E88; font-size: 16px; ">
						<?php echo $requirements[4];?>
					</div>
				</div>
				<br>
				<div class="row">
					<div class="col-md-3 col-md-offset-2 ticket-info">
						Remaining tickets
					</div>
					 
					<div class="col-md-6" style="color:#286E88; font-size: 16px; ">
						<?php
						$countticket=mysql_query(" SELECT COUNT(ticket_id) from ticket where  event_id='$id'")or die('ticket count query error') ;
							  			if(mysql_num_rows($countticket)>0){
													$ticket=mysql_fetch_array($countticket);
													 echo $requirements[4]-$ticket[0];
												
												}
						?> 
					</div>
				</div>
			</div>
			<div class="col-md-7 side-col">
				<div style="border-bottom: 1px dashed #286E88;">
					<h4>Start your workstream by sending proposal</h4>
					
				</div>
				<br>
					<form  method="post" name="proposal" action="">
						<div class="row">
							<div class="col-sm-12">
								<div class="form-group">
								  	<label class="col-md-2 col-md-offset-1 control-label" for="company" style="color:#286E88; font-size: 16px;">Speciality</label>  
								  <div class="col-md-9">
								  	<input id="speciality" name="special" type="text" placeholder="Enter your master skill" class="form-control input-md"/>
								   </div>
								</div>
							</div>
						</div>
						<br>
						<br>
						<div class="row">
							<div class="col-sm-12">
								<div class="form-group">
								  	<label class="col-md-2 col-md-offset-1 control-label" for="textarea"  style="color:#286E88; font-size: 16px;">Why you</label>
								  <div class="col-md-9">                     
								    <textarea class="form-control" id="aboutcompany" rows="
								    10" name="about" placeholder="How you can organize this event , Describe your services"></textarea>
								  </div>
								  </div>
								  <br>
							</div>
						</div>
						<br>
						<div class="row">
							<div class="col-sm-12">
							    <button type="submit"  name="proposal" class="btn btn-info proposal-btn">Send Proposal</button>
							</div>
						</div>
						  
						
					</form>  
				</div>

			</div>
		</div>
		</div>
	 
</section>
<!--,,,,,,,,,,,,,,,, Footer End ,,,,,,,,,,,,,,,,,,, -->

<br>
<br>
<br>
<br>
<br>
<br>
<br>


<section id="footer">
						<div class="container-fluid">
							<div class="text-center">
            		 <span style="float: right;">CopyRight &copy; 2017</span>               
            </div>
						</div>
</section>


<script type="text/javascript">
				
				$('.pro-img').click(function() {

				$(this).next().slideToggle('500');
			$(this).find('span').toggleClass('glyphicon-plus glyphicon-minus');
			$('#show').css('visibility', ($('#show').css('visibility') != 'hidden') ? 'visible' : 'hidden').slideToggle("fast");
    
    
});

			</script>
			



<!--for comments div -->

<script type="text/javascript">

 $('.hide-show').click(function() {

 	$(".hide-show b").fadeOut(function () {

    $(this).text(($(this).text() != 'Hide comments') ? 'Hide comments' : 'Comments').fadeIn("slow");
       
       });

    $('#comments-div').css('visibility', ($('#comments-div').css('visibility') != 'hidden') ? 'visible' : 'hidden').slideToggle("slow");



});
</script>

<script type="text/javascript">

    $('.reply').click(function() {
   
    $('.comment-field').css('visibility', ($(this).css('visibility') != 'hidden') ? 'visible' : 'hidden').slideToggle("slow");
   
});
</script>

<!--for comments div End -->





</body>
</html>
<?php
if(isset($_POST['proposal'])){
 $special=$_POST['special'];
 $about=$_POST['about'];
 $emails=$_SESSION['email'];
if($emails==$email){
echo "<script>alert('you cannot send proposal for  himself ok! ')</script>";
 exit();	
}
if($special=="" or $about==""){
echo "<script>alert('fill all fields ok! ')</script>";
 exit();	
}
else{
$con=mysql_connect('localhost','root','') or die("database connectivity error");
mysql_select_db('ema',$con) or die('database selection error');
$date= Date('20y-m-d');

$run=mysql_query("select *from ema.proposal where sender_email='$_SESSION[email]' and event_id='$id'")or die('error in proposal selection query');
if(mysql_num_rows($run)>0){
     echo "<script>alert('you are already send proposal for this event ')</script>";
     echo"<script>window.open('$page','_self')</script>";
	  exit();
}
else{
	$query=mysql_query(" insert into proposal(sender_email,reciver_email,event_id, special,proposal,proposal_date)values('$_SESSION[email]' , '$email','$id','$special','$about','$date' )")or die('error in proposal  insertion query');
 if($query){
	 
	 
	echo "<script>alert('you are proposal send successfully')</script>";
	echo"<script>window.open('$page','_self')</script>";
	  exit();
	}
	  
else{
	echo "<script>alert('some thing go wrong please try agian ')</script>";

	  
}	
	}
	  
 	
	}
}

?>