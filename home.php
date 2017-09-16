<!DOCTYPE html>
<?php
session_start();
?>
<html>
<head>

	<title>home page</title>

<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/styling1.css">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="css/animate.css">

<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>


<link href='https://fonts.googleapis.com/css?family=BioRhyme Expanded' rel='stylesheet'>
<link href='https://fonts.googleapis.com/css?family=BenchNine' rel='stylesheet'>

<style type="text/css">


.default-well{
	margin-top : 164px;
}

.trend ul li a {
	color: black;
}
.trend ul li a:hover{
	text-decoration: none;
	color: #307C94;
	
}

.top-person{
	border-style: groove;
	margin: 1px;
}

#searching-people{
	border-style: inset;
	padding: 5px;
	 background-image: url('https://static.vecteezy.com/system/resources/previews/000/140/018/non_2x/kids-avatar-icons-vector.jpg');
 	background-size: cover; 

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
	width: 140px;
	height: 120px;
}
#pic-div img{
	width: 100%;
	height: 100%;
}
#description-div{
	width: 100%;
	height: auto;
	border-bottom: 2px solid gray;

}
#description-div a button{
	margin-top: px;
}
::-webkit-input-placeholder{
	font-family: 'BenchNine';
	letter-spacing: 1px;
}
 .form-control::placeholder{
	font-family: 'BenchNine';
	letter-spacing: 1px;
	}
.data-div{
	border-bottom: 1px solid gray;
	margin-top: 1px;
	font-size: 14px;
}
.data-div1{
	border-bottom: 1px solid gray;
}

/*..,,,,, comments css ,,,,,,,*/

#comments-div{
	 
	z-index: 999;


	border-top : none;
	border-right: none;
	
}
.single-comment{
}
.hide-show{
	cursor: pointer;
}
.reply{
	float: right;
	cursor: pointer;
	color: #286E88 !important;
} 
.image-name{

	width: auto;
	margin-left: 5px;
}
.search-name{
	color:#286E88;
	font-weight: bolder;
	font-size: 14px; 
}
#nameerror{
 color:red;
 font-size:90%; !important;
 }
 #namesuccess{
 color:green;
 font-size:90%; !important;
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

      	
        <li class="active"><a href="#">Home <span class="sr-only">(current)</span></a></li>
        <li><a href="explore.php">Explore</a></li>
        <li><a href="organizers.php">Organizer's</a></li>
		<li class=" pro-img"><a><span class="glyphicon glyphicon-plus"></span></a></li>
</ul><?php
$con=mysql_connect("localhost","root", "") or die("database connectivity error");
                            mysql_select_db("ema",$con);
							$date= Date('20y-m-d');
								  
								$name_joindate=mysql_query("select fristname ,lastname,joindate,profile_picture from user where email='$_SESSION[email]' ") or die('name and join date query error');
								$data=mysql_fetch_array($name_joindate);
								?>
								 
                      
			 
			 
         <div id="show" class="color">
							
						<div class="row">
								<div class="col-md-4" align="center">
							 
 											<span id="profile-img"> <a href="profile.php" ><img src="profile_pictures/<?php echo $data[3];?>" class= "img-responsive img-rounded" align="center" height="100%" width="100%" /> </a></span>
								<br>
									
								</div>
								<div class="col-md-6">
								 
									<p class="p1" style=""><?php echo $data[0];echo " ".$data[1]; ?></p>
									<p class="p2" style="">Member since <span><?php echo $data[2]; ?></span></p>
									
								</div>
									<div class="col-md-2">
										 

											<a href="setting.php"><button class="btn btn-info" title="Settings" id="setting-btn"><i class="fa fa-cogs" aria-hidden="true"></i></button></a>
										 
								 
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
								 
										<a href="profile.php"><button class="btn btn-default" title="Go to profile" id="profile-btn"> Profile</button></a>
								
									</div>
									<div class="col-md-6">
								 
										<a href="logout.php"><button class="btn btn-danger" id="logout-btn"> <i class="fa fa-power-off" aria-hidden="true"></i>&nbsp; Log Out</button></a>
								
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
		
	<div class="col-md-2" style="border-right: 2px solid #AAAAAA;">
		<div  class="trend">
				<h4>  Ads </h4>
				<hr>
				<div class="row">
					<div class="col-md-12"> 
						<div class="well" style="height: 300px">
							 Uploaded addvertisements
						</div>
					</div>
				</div>
		</div>

		<br>
		 		
			
		
	</div>

		 <div class="col-md-6">
		<?php
       
  $run=mysql_query("select fallowed_email from fallow where fallowby_email='$_SESSION[email]'") or die(' selection query error');
  
  if(mysql_num_rows($run)>0){
	  while($row=mysql_fetch_array($run))
		  
{
	$fallowed_email=$row[0];
	 
   $result=mysql_query(" select user.fristname,user.lastname,event.id, event.title,event.category,event.discription,event.country,event.city,event.address, event_schedul.fromdate,event_schedul.todate,event_schedul.time,event.chargingtype,event.event_logo from user join event_schedul join event where user.email='$fallowed_email' and event_schedul.creater_email='$fallowed_email'  and event.id=event_schedul.event_id and event_schedul.fromdate >'$date' ORDER BY event_schedul.fromdate ASC") or die("Error in 1 query");
  if(mysql_num_rows($result)>0){
	  while($rows=mysql_fetch_array($result)){
	 $eventid= $rows[2];
	  ?>
		 <div class="well">
			<div class="row">
              <div class="col-md-12 ">
				 <div class="row">
				 
					<div class="col-sm-3">
										 <div id="pic-div">
										 
										 <img src="event_logo/<?php echo $rows[13];?>" class="img-responsive">
										 
										</div>
										<br>
										<p align="center" style="top: -20px; color: #307C94;" class="sponsor">Event By: <br>
										<span align="center" style="color: black; font-size: 16px; font-weight: bolder;"><?php echo $rows[0];echo " ".$rows[1]; ?></span> </p>
										
										<div id="date-div1">
										

											<div class="data-div">
												
												<span> Starts at</span> 
												<span style="color: black !important"><?php echo $rows[9];?> </span> <br>
												<!--<i style="color: black !important">2017</i>-->
											</div>
											<div class="data-div">
												<span> End at </span> 
												<span style="color: black !important"><?php echo $rows[10];?> </span> <br>
												<!--<i style="color: black !important">2017</i>-->
												
											</div>

											<div class="data-div">
												<span>	On </span>  <span style="color: black !important"><?php echo $rows[11];?></span>
												</div>
												
											<div class="data-div">
												<span> Catagory  <span style="color: black !important; font-size: px"><?php echo $rows[4];?></span></span>
											</div>
										</div>
										<br>

						</div>
					
						 
						<div class="col-sm-9 ">
												 
												<div id="description-div">
													<div class="row">
														<div class="col-sm-9">
															<span style="color: black !important; font-size: 22px; text-transform: uppercase; font-weight: bolder;">
																<?php echo $rows[3];?>
															</span>
														</div>
														<div class="col-sm-3">
														<?php
														if($rows[12]=='paid'){
														?>

															<a href="workstream.php?id=<?php echo $rows[2];?>&&email=<?php echo $fallowed_email;?>&&page=<?php echo 'home.php' ?>"> 
															<button class="btn btn-info" style="border-radius: 50%; margin-left: 55px;" title="Bid its paid">B</button>
															</a>
															<?php
														}
															?>
														</div>
													</div>
													<br>
													
														<div class="row">
															<div class="col-sm-2">
																<span style="color:#286E88 !important; font-weight: bolder; font-size: 16px;">About </span> 
															</div> 
															<div class="col-sm-10">
																<span style="font-size: 16px;"> <?php echo $rows[5];?></span>
															</div>
														</div>
														<div class="row">
															<div class="col-sm-2">
																<span style="color:#286E88 !important; font-weight: bolder; font-size: 16px;">Held at  </span>
															</div> 
															<div class="col-sm-10">
																<span style="font-size: 16px;"><?php echo $rows[8];?></span>
															</div>
														</div>
													
												
												<br>
												
												<?php
												if($rows[12]=='paid'){
													$participant = mysql_query(" SELECT `user_email` FROM `ticket` WHERE `user_email`='$_SESSION[email]' and `event_id`='$eventid'")or die('ticket parchese hom page selection  query error');
										 if(mysql_num_rows($participant)>0){
												?>
													 <span> <a href="#"  onclick="return window.confirm('you are already purchased ticket of  this event')"><button class="btn btn-warning" title="You already bought a ticket" style="float: right; letter-spacing: 1px; font-size: 14px; width: 80px;"> Purchased</button></a>
												</span>
												<?php
										 }
										 else{
											 ?>
											  <span> <a href="ticketsapge.php?id=<?php echo $eventid;?>&&page=<?php echo 'home.php';?>"  onclick="return window.confirm('You want to purchased ticket of this Event??')"> <button class="btn btn-info " title="Buy a ticket" style="font-size: 14px; letter-spacing: 1px; width: 80px; float: right;">Purchase</button></a>
												</span>
										 <?php
										 }
										}
										else{
												$participant = mysql_query("SELECT `participant_email` FROM `participant` WHERE `participant_email`='$_SESSION[email]' and `event_id`='$eventid'")or die('participant selection  query error');
										 if(mysql_num_rows($participant)>0){
												?>
													 <span> <a href="#"  onclick="return window.confirm('you are already join in this event')"><button class="btn btn-warning" title="Participated in this event" style="font-size: 14px; letter-spacing: 1px; width: 80px; float: right;"> Joined</button></a>
												</span>
												<?php
										 }
										 else{
											 ?>
											  <span> <a href="participete_in_event.php?id=<?php echo $eventid;?>&&page=<?php echo 'home.php';?>&&email=<?php echo $fallowed_email;?>"  onclick="return window.confirm('You want to participate in this Event')"> <button class="btn btn-info" title="Participate in this event" style="font-size: 14px; width: 80px; letter-spacing: 1px; float: right;">+ Join</button></a>
												</span>
										 <?php
										 }
											}	?>
												
												<br>
												<br>
												</div>

											<!---review section start-->
										
											<?php
										 $reviewquery=mysql_query("select  * from ema.review where event_id='$eventid' ORDER BY review_id DESC LIMIT 3") or die('review jion  event selection query error');
										if(mysql_num_rows($reviewquery)>0){
										 while($review=mysql_fetch_array($reviewquery)){
										 	?>
					 							<div class="row" style="padding: 5px 5px 5px 12px; ">
										<div class="col-md-2" >
										<div style="width: 60px; height: 50px; float: right; ">
										<?php
					 					$revieweremail=$review[1];	
										 $reviewernamequery = mysql_query(" SELECT fristname,lastname,profile_picture  FROM `user` WHERE email='$revieweremail'")or die('reviewer  name selection  query error');
										 
										$reviewername=mysql_fetch_array($reviewernamequery);
									?>
											 
												<img src="profile_pictures/<?php echo $reviewername[2];?>" class="img-responsive img-rounded" style="width: 60px; height: 50px; float: right; " >
												 
										 
											
										</div>
										</div>
										<div class="col-md-10">
										 
											<div class="row">
												<div class="col-md-8">
													<strong style="font-weight: bolder; color:#307C94;position: relative; left: -15px; ">
													 <?php
													 echo $reviewername[0]." ".$reviewername[1];?>
													  </strong>
												</div>
												<div class="col-md-4">
													<span style="float: right;">
													<a href="view_review.php?reviewid=<?php echo $review[3];?>&&eventid=<?php echo $eventid;?>" title="View review">
													 View
													 </a>
													 </span>
												</div>
											</div>
											<div class="row">
												<div style="padding: 2px; letter-spacing: 1px;">
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
									
									<br>
										<div class="row">
											<div class="col-sm-12">
											<form method="post" name="jion" action="review.php">
    											<div class="input-group">
      												<input type="text" class="form-control" name="review" title="Write review" placeholder="Review ..." required>
     												 <span class="input-group-btn">
        												<button class="btn btn-default" type="submit" name="do" title="Add review" ><i class="fa fa-paper-plane-o fa-lg" aria-hidden="true"></i></button>
     												</span>
													<input type="hidden" name="eventid" value="<?php echo $eventid;?>">
													<input type="hidden" name="page" value="<?php echo "home.php";?>">
													<input type="hidden" name="createremail" value="<?php echo $fallowed_email;?>">
    											</div><!-- /input-group -->
												</form>
											 
  											</div><!-- /.col-sm-12 -->
										</div><!-- /.row -->

										
										<br>


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
						
					</div>


				</div>
			
				
			 

			

				
				</div>
				<?php


  
  
  
	  }
  }
  }
}
  else{
	 ?> <center>
			<div class="well default-well">
			<br>
	       <font size="7"  color="gray"> OOP'S! No Activity Yet ...
			</font>
			<br>
			<br>
			</div>
			</center>
					<br>
			<br>
			<br>
			<br>
					<br>
			<br>
			<br>		<br>
			<br>
			<br>
			
			<?php
  }
 
  ?>

</div>

		 <div class="col-md-4">
		 <h4>Find people</h4>
		 <hr>
		<div id="searching-people">
		<form method="post" name="searchform" onsubmit=" return validatedata();">
			 
<div class="input-group" style="z-index: 0; margin: 5px;">
     			<input type="text" class="form-control" name="searchpeople" oninput="namevalidat();" placeholder="Search by name..." required id="name"> 
      				<span class="input-group-btn">
        				<button class="btn btn-default" title="Search" type="" name="searchbtn">Go</button>
      				</span>
      				 
    		</div><!-- /input-group -->
    		<span id="nameerror"></span><span id="namesuccess"></span>
    		</form>
    		<?php
      				 if(isset($_POST['searchbtn'])){
      					$names=$_POST['searchpeople'];
      					if($names==""){
      						echo "<script>alert('fill search fiel then click')</script>";
								 	
							exit();
      					}
      					else{
      					$queryname=mysql_query("SELECT fristname,lastname,email,profile_picture FROM `user` WHERE fristname like '$names%'")or die('name selection error in queryname');
      					if(mysql_num_rows($queryname)>0){
      						while($peoplename=mysql_fetch_array($queryname)){
      							?>
										<div class="image-name">
										 <div style="width: 60px; height: 60px;" align="center">
										 	<a href="searchprofile.php?individualemail=<?php echo $peoplename[2];?>"><img src="profile_pictures/<?php echo $peoplename[3];?>" style="width: 100%; height: 100%" class="img-responsive img-rounded"></a>

										 <i class=search-name><a href="searchprofile.php?individualemail=<?php echo $peoplename[2];?>"><?php echo $peoplename[0]." ".$peoplename[1];?></a></i>
										 		
										 </div>
										 
											<br>
										
											</div>
											 
											<?php
										  
									

      						 
      						
      						}

      					}
      					else{
      						echo "No result found..!";
      					}
      				}

      				}
      				?>
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

  		</div ><!-- /.col-md-4-->
  		 
  		</div>
  		
		
		</div>
		</div>
	 
</section>
<!--,,,,,,,,,,,,,,,, Footer End ,,,,,,,,,,,,,,,,,,, -->

 
 

 


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

    $(this).text(($(this).text() != 'Hide comments') ? 'Hide comments' :'<?php echo $com[0];?> Comments').fadeIn("slow");
       
       });

    $('#comments-div').css('visibility', ($('#comments-div').css('visibility') != 'hidden') ? 'visible' : 'hidden').slideToggle("slow");



});
</script>

<script type="text/javascript">

    $('.reply').click(function() {
   
    $('.comment-field').css('visibility', ($(this).css('visibility') != 'hidden') ? 'visible' : 'hidden').slideToggle("slow");
   
});
</script>

<!--for search viladation End -->
<script type="text/javascript">
	//name validation
function namevalidat(){
 var nameReg = /^[A-Za-z ]+$/;
var name = $('#name').val();
var massage = "";
	  if(nameReg.test(name)){
	  massage= " name is valid";
            $("#namesuccess").html(massage); 
			 $("#nameerror").html(''); 
			  
        }
		if(!nameReg.test(name)){
	  massage= "name is Invalid";
            $("#nameerror").html(massage); 
			 $("#namesuccess").html(''); 
			  
        }
		if(name==""){
	  $("#nameerror").html(''); 
	 $("#namesuccess").html(''); 
	  
	 }
}
</script>
<script type="text/javascript">
	//form validation
	function validatedata(){
  var searchname = document.getElementById('name').value;

  var nameReg = /^[A-Za-z]+$/;
  if(searchname==""){
	   
            
			alert(' search name  is required');
			return false;
        }
        if(!searchname.match(nameReg)){
		alert('In  search name only letter allowed');
	   return false;
             
	}
	else{
		return true;
	}
}
</script>




</body>
</html>