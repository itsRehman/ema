<!DOCTYPE HTML>
<?php
session_start();
?>
<html>
	<head>
		<title>Profile page</title>
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

#comments-div{
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
 
/* ,,,,,,,,,,,, New appearing div style,,,,,,,,,, */

        
    /* THE NOTIFICAIONS WINDOW. THIS REMAINS HIDDEN WHEN THE PAGE LOADS. */
    #notifications {
        display:none;
        width:100%;
        position:absolute;
        color:#286E88 !important;
        top:295px;
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
        margin-left:180px;
    }
    
  #notifications h3 {
        display:block;
        color:#286E88 !important; 
        background:#FFF;
        font-weight:bold;
        font-size:15px;    
        padding-left: 120px;
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
        width:100%;
        position:absolute;
        top:295px;
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
        margin-left:250px;
    }
    
  #messaging h3 {
        display:block;
        color:#286E88 !important; 
        background:#FFF;
        font-weight:bold;
        font-size:15px;    
        padding-left: 180px;
        margin:0;
        border-bottom:solid 1px rgba(100, 100, 100, .30);
    }

#messaging a {
	color: red;
}

#messaging a:hover{
	color: red;
}



.past-title{
	text-transform: uppercase;
	font-size: 20px;
	letter-spacing: 2px;
	font-weight: bolder;

}
.con-div{
	width: 40;
	 height: 40px;
	  font-size: 12px;
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
.button-div {
	float: right;
}
.button-div .btn{
	width: 70px;
	font-size: 13px;

}
.past-btn-div .btn{

	width: 70px;
	font-size: 13px;
}
#order-status{
	background-color: skyblue; 
	float: right;
}
#order-status:hover{
	letter-spacing: 4px;
	text-decoration: none;
}
.earning-btn{
	width: 160px;

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
					<div class="row">
					<div class="col-sm-6">
					<a href="upload_profile_picture.php"><button class="btn btn-info" style="width: 100px;">Update profile</button></a> 
					</div>
					<div class="col-sm-3"  style="background-color: #286E88 !important;">
					  <button  id="noti_Button" class="btn btn-info" style="width: 30px;" >
    					<span class="fa fa-bell fa-lg"  style=""></span>
     					</button>
						<?php
						$notify=mysql_query("SELECT COUNT(state) from notification where  to_email='$_SESSION[email]' AND (state='new' or state='reject') ") or die(' comment selection query error');
						if(mysql_num_rows($notify)>0){
							$note=mysql_fetch_array($notify);
							if($note[0]>0){
							?>
    					 <span class="badge badge-notify"><?php echo $note[0];?></span>
						<?php
					}
						}
						else {
							 
						}
						?>
    					</div>
    			     				<div class="col-sm-3" style="background -color: #286E88 !important;">
					<button class="btn btn-info" id="msg_Button" style="width: 30px;">
    					<span class="fa fa-envelope fa-lg" style=""></span>
     					</button>
												<?php
						$massagenotify=mysql_query("SELECT COUNT(state) from massage where  to_email='$_SESSION[email]' AND state='unread' ") or die(' massage selection query error');
						if(mysql_num_rows($massagenotify)>0){
							$msgnote=mysql_fetch_array($massagenotify);
							if($msgnote[0]>0){
							?>
    					<span class="badge badge-notifi"><?php echo $msgnote[0];?></span>
						<?php
					}
						}
						else {
							 
						}
						?>
    					</div>
						
			</div> 
					
					
					
					 <!--.... Msg button ,,,,, -->




					<!--.... new  div ,,,,, -->
					 <div id="notifications">
                    <h3>Notifications</h3>
                    <div style="height:220px;">
							<?php
							 
							
							$shownotification=mysql_query("SELECT DISTINCT from_email,event_id,notification,type FROM `notification` where  to_email='$_SESSION[email]' AND (state='new' or state='reject')  ") or die('notification selection query error');
						if(mysql_num_rows($shownotification)>0){
							while($shownote=mysql_fetch_array($shownotification)){
							$fromemail=$shownote[0];
							 
								?>
							
							<div class="row" style="padding-top: 4px; padding-bottom: 4px;">
							<?php
							$notifierpicture=mysql_query("SELECT `profile_picture` FROM `user` WHERE email='$fromemail'")or die(' notifier picture selection  query error');
                                 $notifierpic=mysql_fetch_array($notifierpicture);
							?>
							<div class="col-md-2">
								<div style="width: 40px; height: 40px;  ">
    							 	<img src="profile_pictures/<?php echo $notifierpic[0];?>" class= "img-responsive img-circle" align="center" style="width: 100%; height: 100%"/>
    							 </div>
    						</div>
							
							
							 
    						<div class="col-md-10" style="font-size: 12px;">
    							<?php

    							list($notyy, $targetpage) = split('-' , $shownote[2] , 2);
    							if($shownote[3]=='review'){
    								$notycounter=mysql_query("SELECT count(notification) from notification where from_email='$shownote[0]' AND state='new'  and type='review' and event_id='$shownote[1]'") or die('review counter  query error');
							 $counternoty=mysql_fetch_array($notycounter);
							 		echo $counternoty[0]." "."new";
    							  ?>
    							  <a href="<?php echo $targetpage;?>?id=<?php echo  $shownote[1];?>"><?php echo $notyy;?></a>
    							  <?php
    							}
    							if($shownote[3]=='participant'){
    								 

    							  ?>
    							  <a href="<?php echo $targetpage;?>?id=<?php echo  $shownote[1];?>&&from_email=<?php echo $fromemail;?>"><?php echo $notyy;?></a>
    							  <?php
    							}

    							?>
    						</div>
							
    						</div>
							<?php
						}

						}
						else{
						?>
	<p><font size="5" color="gray">
	<center>No  New notification yet... </center>
	</font>
	</p>
<?php	
						}
								
    					?>
    					 
													
    					</div>
						</div>
						<!--.... end  div ,,,,, -->



					<!--....Msging  new  div ,,,,, -->
					 <div id="messaging">
                    <h3>Message's</h3>
                    <div style="height:220px;">
                    	

                    	 <?php
							 
							
							$massage=mysql_query("SELECT   DISTINCT from_email  from massage where  to_email='$_SESSION[email]' AND state='unread' ") or die('massage selection query error');
						if(mysql_num_rows($massage)>0){
							while($showmsg=mysql_fetch_array($massage)){
							$from_email=$showmsg[0];
							$massagecounter=mysql_query("SELECT count(massage) from massage where from_email='$from_email' and to_email='$_SESSION[email]' AND state='unread' ") or die('massage counter  query error');
							 $countermsg=mysql_fetch_array($massagecounter);
								?>
							
							<div class="row">
							<?php
							$massagerpicture=mysql_query("SELECT `profile_picture` FROM `user` WHERE email='$from_email'")or die(' notifier picture selection  query error');
								 
                                 $massagerpic=mysql_fetch_array($massagerpicture);
							?>
    						 
    						<div class="col-md-2">
    							<div style="width: 40px; height: 40px; padding: 4px;">
    							 <img src="profile_pictures/<?php echo $massagerpic[0];?>" class= "img-responsive img-circle" style="width: 100%; height: 100%" align="center" />
    							 </div>
    						</div>
								 
    						<div class="col-md-10">
                                <?php echo $countermsg[0];?> <a href="chat.php?senderemail=<?php echo $from_email;?>">  New massage  </a>
    						</div>
    					</div>
    				
<?php
						}
						}
						 else{
						?>
	<p><font size="5" color="gray">
	<center>No  New  massage Yet... </center>
	</font>
	</p>
<?php	
						}
								
    					?>
    					 
    					 
                    </div>
 
                </div>
                <br>
                <div class="row">
                	<div class="col-md-12">
                		<a href="transactions.php"> <button class="btn btn-success earning-btn" title=" Account details">Total Earning : 50</button></a>
                	</div>
                </div>
                <br>
                <div class="row con-row">
                	<div class="col-sm-12 con-row">
                	
                		<h4 style="font-size: 24px;">Contacts</h4>

                	</div>
                </div>
              
                <div class="row ">

                <?php
                $fallowquery=mysql_query("SELECT * FROM `fallow` where fallowby_email='$_SESSION[email]'") or die('fallow selecion query erroe');
                if(mysql_num_rows($fallowquery)>0){
                	while($fallow=mysql_fetch_array( $fallowquery)){
                		

                ?> 
                	<div class="col-sm-3" align="center" style="padding: 4px; padding-top: 8px;padding-bottom: 8px;" >
                	<a href="chat.php?senderemail=<?php echo $fallow[1];?>">
                		<div class="con-div" align="center">
                		<?php
                		 $fallowname = mysql_query("SELECT `fristname` , `profile_picture`  FROM `user` WHERE email='$fallow[1]'")or die('fallow name selection  query error');
                		 $fallow_name=mysql_fetch_array($fallowname);
                		?>
                			<img src="profile_pictures/<?php echo $fallow_name[1];?>" class="img-responsive img-circle" style="width: 100%; height: 100%">
                			 
                			<span ><?php echo $fallow_name[0];?></span>
                		</div>
                		</a>
                	</div>
 					<?php
 				}
 			}
 			else{
 				echo "No contacts ";
 			}
 			?>
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
													<li><a href="home.php" title="Home"><i class="fa fa-home fa-2x" aria-hidden="true"></i></a></li>
												
											</ul>
										
									</div>
								</div>
								</div>	
							</header>
<!--................................... End of header div.............................. -->	

										
									

						
							<h3> &nbsp;Upcoming Events</h3>
							<div class="container"> 
							<?php
								$date= Date('20y-m-d');
   $result=mysql_query(" select user.fristname,user.lastname,event.id,event.title,event.category,event.country,event.city,event.address,event_schedul.fromdate,event_schedul.todate,event_schedul.time,event.discription,event.event_logo from user join event_schedul join event where user.email='$_SESSION[email]' and event_schedul.creater_email='$_SESSION[email]'  and event.id=event_schedul.event_id and event_schedul.fromdate >'$date' ORDER BY fromdate ASC") or die("Error in event selection query");
  if(mysql_num_rows($result)>0){
	  while($rows=mysql_fetch_array($result)){
		  $eventid= $rows[2];
							?>
								<div class="well">
									<div class="row" style=" color: black !important">
										<div class="col-sm-3" align="center" style="border-right: 2px solid gray;">
											<div style=" width: 150px; height: 160px;">
										 		 
												<img src="event_logo/<?php echo $rows[12];?>" alt="" class= "img-responsive img-rounded" style="width: 100%; height: 100%;"/>
												 
											</div>

													 
												<p align="center" style="color: #307C94 !important" >Event By: <br>
										<span align="center" style="color: black"><?php echo $rows[0]." ".$rows[1]; ?> </span> </p>

								
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
												<div class="col-sm-9">
													<span style="color: black !important; text-transform: uppercase; font-weight: bolder; font-size: 20px;"><?php echo $rows[3];?></span> 
												</div>
												<div class="col-sm-3">
													<a href="order_statuscheck.php?eventid=<?php echo $eventid;?>" id="order-status">ORDER STATUS</a>
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
											<div class="row">
												 
												 <div class="col-sm-2">
												 	<span style="color: #307C94 !important">Held at </span>
												 </div>
												 
												<div class="col-sm-10">
													  <span><?php echo $rows[7];?></span>  <span><?php echo $rows[6];?></span> <span><?php echo $rows[5];?></span>
												</div>
											</div>	 
												<br>
											<div class="row" style="padding: 5px; border-bottom: 2px solid gray">
												<div class="col-sm-12 ">
													<div class="button-div">
													<?php
													$useremail=$_SESSION['email'];
													?>
														 
															<a href="view-more.php?id=<?php echo  $eventid;?>&&email=<?php echo $useremail;?>" class="view-more">Preview Event...</a>

														<a href="update_event.php?id=<?php echo $eventid;?>" ><button class="btn btn-info" title="Update event info">Update</button></a>
														<a href="invitation.php"><button class="btn btn-info" title="Invite someone special">Invitation</button></a>
														<a href="organizer_list.php?id=<?php echo $eventid;?>"><button class="btn btn-info" title="Hire Organizer">Organizer</button></a>
														<a href="participants.php?id=<?php echo $eventid;?>"><button class="btn btn-info" title="Check attendies">Participants</button></a>
														<a href="delete_event.php?id=<?php echo $eventid;?>" onclick="return window.confirm('are you sure to delete  this event')"><button class="btn btn-danger" title="Delete whole info">Delete</button></a>
													</div>
												</div>
											</div>
											<br>
												
											<div id="comments-div" style="padding: 5px;">
											<?php
										 $reviewquery=mysql_query("select * from ema.review where event_id='$eventid' and state='new' ORDER BY review_id DESC") or die('review selection query error');
										if(mysql_num_rows($reviewquery)>0){
										 while($review=mysql_fetch_array($reviewquery)){
										 	?>
					 							<div class="row">
										<div class="col-md-2 col-md-offset-1" >
										<div style="width: 80px; height: 60px; padding: 4px;">
										<?php
					 					$revieweremail=$review[1];
					 					$reviewernamequery = mysql_query(" SELECT fristname,lastname ,profile_picture FROM `user` WHERE email='$revieweremail'")or die('reviewer name a selection  query error');
										 
										$reviewername=mysql_fetch_array($reviewernamequery);	
										 
									?>
											 
												<img src="profile_pictures/<?php echo $reviewername[2];?>" class="img-responsive img-rounded" style="width:80px; height: 60px; float: right;" >
												 
										 
											
										</div>
										</div>
										<div class="col-md-9">
										 
											<div class="row">
												<div class="col-md-8">
													<strong style="font-weight: bolder; color:#307C94;position: relative; left: -10px; ">
													 <?php
													 echo $reviewername[0]." ".$reviewername[1];?>
													  </strong>
												</div>
												<div class="col-md-4">
													<span style="float: right; color: red; border-bottom: 1px solid gray;">
													<a href="show_new_review.php?reviewid=<?php echo $review[3];?>&&id=<?php echo $eventid;?>">
													 New
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
							 <span style="padding-left: 40%; color: gray; font-weight: bolder;">No new review added </span>
							<?php	
							}
							?>
												
									</div>
									 

									
									<div class="row">
											<div class="col-sm-12">
												 <form method="post" name="current" action="review.php">
    											<div class="input-group">
      												<input type="text" class="form-control" name="review" placeholder="Review ..." required>
     												 <span class="input-group-btn">
        												<button class="btn btn-default" type="submit" title="Add your review" name="do" ><i class="fa fa-paper-plane-o fa-lg" style="padding: 8px;" aria-hidden="true"></i></button>
     												</span>
													<input type="hidden" name="eventid" value="<?php echo $eventid;?>">
													<input type="hidden" name="page" value="<?php echo "profile.php";?>">
													<input type="hidden" name="createremail" value="<?php echo $_SESSION['email'];?>">
    											</div><!-- /input-group -->
												</form>
  											</div><!-- /.col-sm-12 -->
									</div><!-- /.row -->

								<div class="row">
									<div class="col-md-4">
									<?php
									$proposals=mysql_query("SELECT COUNT(proposal) from ema.proposal where  event_id='$eventid' ") or die(' proposals selection query error');
									 
									$proposalcount=mysql_fetch_array($proposals)
									?>
										<span><?php echo $proposalcount[0];?></span>&nbsp;<a href="recieve-proposals.php?eventid=<?php echo $eventid;?>">Proposal
										<?php
										 $newproposal=mysql_query("SELECT COUNT(proposal) from ema.proposal where  event_id='$eventid' and state='new' ") or die(' new proposals selection query error');
									 
									$newcount=mysql_fetch_array($newproposal);
									if($newcount[0]>0){
									?>
										<img src="images/new.gif" class="img-responsive" style="position: relative;  left: 50px; top: -40px;  width: 40px; height: 20px;">
										<?php
									}
									?>
										</a>
									</div>
									<div class="col-md-4">
								 
								  <?php
									$review=mysql_query("SELECT COUNT(review) from review where  event_id='$eventid' ") or die(' comment selection query error');
									if(mysql_num_rows($review)>0){
									$count=mysql_fetch_array($review)
									?>
										<span > <p id="hide-show" > <b style="color: black !important"><a href="show_new_review.php?reviewid=<?php echo $review[3];?>&&id=<?php echo $eventid;?>"> <?php echo $count[0];?> reviews </a></b></p></span>
										<?php
										}
									else{
									?>
										<span><p id="hide-show">  <b  style="color: black !important"> 0 review </b><p></span>
									<?php
									}
									?>
									</div>
									<div class="col-md-4">
											 	
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
	  <center> No  upcoming event </center>
	  </font>
	  </p>
	  <?php
  }
?>
 
			</div>						
</section><!--one end-->

						<!-- Three -->
<section id="three" class="container-fluid">
	<br>
							<h3>Past Events</h3>
							<?php $your=mysql_query(" select user.fristname,user.lastname,event.id,event.title,event.category,event.discription,event.event_logo from user join event_schedul join event where user.email='$_SESSION[email]' and event_schedul.creater_email='$_SESSION[email]'  and event.id=event_schedul.event_id and event_schedul.fromdate <='$date' ORDER BY todate DESC ") or die("Error in event selection query");
  if(mysql_num_rows($your)>0){
	  while($yr=mysql_fetch_array($your)){
		  $yreventid= $yr[2];?>
								<div class="well" style=" color: black !important;  box-shadow: 10px 15px 25px gray;">
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

										<span class="rateYo"></span>
										<span style="color: #307C94 !important"> Rating </span> <span  style="color: black">  80% </span> <br>
										<span style="color: #307C94 !important">Catagory</span> <span style="color: black"><?php echo $yr[4];?></span>
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
												<div class="row">
												<?php
												$useremail=$_SESSION['email'];
												?>
													<div class="col-sm-12">
														<a href="view-more.php?id=<?php echo $yreventid;?>&&email=<?php echo $useremail;?>" class="view-more">Preview Event...</a>
													</div>
												</div>
													


										
										<br>
										<br>
										<div class="row" style=" margin-bottom: 5px; padding: 5px ; border-bottom: 2px solid gray;" >
											<div class="col-sm-12">
												
											<div class="past-btn-div" style="float: right;">
										<a href="upload_event_picture_video.php?id=<?php echo $yreventid;?>"><button class="btn btn-info" title="Upload Pictures or videos of this event">Upload</button></a>
										<a href="participants.php?id=<?php echo $yreventid;?>"><button class="btn btn-info" title="Attendents">Participants</button></a>
										<a href="delete_event.php?id=<?php echo $yreventid;?>" onclick="return window.confirm('are you sure to delete  this event')"><button class="btn btn-danger" title="Delete whole info" >Delete</button></a>
										</div>
										</div>
										</div>
										<br>

										<div id="comments-div">
											<?php
										 $pastreviewquery=mysql_query("select * from ema.review where event_id='$yreventid' and state='new' ORDER BY review_id DESC") or die('review selection query error');
										if(mysql_num_rows($pastreviewquery)>0){
										 while($pastreview=mysql_fetch_array($pastreviewquery)){
										 	?>
					 							<div class="row">
										<div class="col-md-2 col-md-offset-1" >
										<div style="width: 100px; height: 80px;  padding: 4px;">
										<?php
					 					$pastrevieweremail=$pastreview[1];	
										 $pastreviewernamequery = mysql_query(" SELECT fristname,lastname ,profile_picture FROM `user` WHERE email='$pastrevieweremail'")or die('reviewer past event name a selection  query error');
										 
										$pastreviewername=mysql_fetch_array($pastreviewernamequery);
									?>
											 
												<img src="profile_pictures/<?php echo $pastreviewername[2];?>" class="img-responsive img-rounded" style="width: 100px; height: 80px; float: right; " >
												 
											
										</div>
										</div>
										<div class="col-md-9">
										 
											<div class="row">
												<div class="col-md-8">
													<strong style="font-weight: bolder; color:#307C94;position: relative; left: -10px; ">
													 <?php
													 echo $pastreviewername[0]." ".$pastreviewername[1];?>
													  </strong>
												</div>
												<div class="col-md-4">
													<span style="float: right; color: red; border-bottom: 1px solid gray;">
													<a href="show_new_review.php?reviewid=<?php echo $pastreview[3];?>&&id=<?php echo $yreventid;?>">
													 New
													 </a>
													 </span>
												</div>
											</div>
											<div class="row">
												<div>
													  <?php
													 	if(strlen($pastreview[4])>40){
													  echo substr($pastreview[4],0,40).
													 "<span style='color:#307C94; font-size:10px;'> Read more ... </span>";
													}
													else{
														 echo $pastreview[4];
													  
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
							 <span style="padding-left: 40%; color: gray; font-weight: bolder;">No new review added </span>
							<?php	
							}
							?>
												
									</div>

										<div class="row">
											<div class="col-sm-12">
												 <form method="post" name="past" action="review.php">
    											<div class="input-group">
      												<input type="text" class="form-control" name="review" placeholder="Review ..." required>
     												 <span class="input-group-btn">
        												<button class="btn btn-default" type="submit"  title="Add your review" name="do"><i class="fa fa-paper-plane-o fa-lg" style="padding: 8px;" aria-hidden="true"></i></button>
     												</span>
													<input type="hidden" name="eventid" value="<?php echo $yreventid;?>">
													<input type="hidden" name="page" value="<?php echo "profile.php";?>">
													<input type="hidden" name="createremail" value="<?php echo $_SESSION['email'];?>">
    											</div><!-- /input-group -->
												</form>
  											</div><!-- /.col-sm-12 -->
										</div><!-- /.row -->
										
										 
										<div class="row" style="color:black;" >
											<div class="col-sm-12" align="center">
											 	 <?php
									$pastreview=mysql_query("SELECT COUNT(review) from review where  event_id='$yreventid' ") or die(' review selection query error');
									if(mysql_num_rows($pastreview)>0){
									$pastcount=mysql_fetch_array($pastreview)
									?>
										<span > <p id="hide-show" > <b style="color: black !important"><a href="show_new_review.php?reviewid=<?php echo $review[3];?>&&id=<?php echo $yreventid;?>"> <?php echo $pastcount[0];?> reviews </a></b></p></span>
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
															
															<?php
								  }
							  }
							  else{
								  ?>
								  <p><font color="gray" size="5">
								  <center> No past event </center>
								  </font>
								  </p>
								  <?php
							  }
							?>
<hr>
								
									<h3>Past events <span style="color: gray !important; font-size: 12px;">(You ever joined)</span></h3>
									<?php
									$part=mysql_query(" select event_id from participant where participant_email='$_SESSION[email]'") or die('participant selsction query error');
									 if(mysql_num_rows($part)>0){
	  while($partin=mysql_fetch_array($part))
		  
{     $eventpartid=$partin[0];
 
$Ecreateremal= mysql_query("select  creater_email from event_schedul where event_id='$eventpartid'")or die('cereater email selection error ');

	 if(mysql_num_rows($Ecreateremal)>0){
		 while($crtemail=mysql_fetch_array($Ecreateremal)){
			 $creater_mail=$crtemail[0];
			 
   $creater_event=mysql_query(" select user.fristname,user.lastname,event.title,event.category,event.discription,event.event_logo from user join event join event_schedul where user.email='$creater_mail' and event.id='$eventpartid' and event_schedul.event_id='$eventpartid' and event_schedul.fromdate <='$date' ORDER BY todate DESC") or die('Error in  involved in event  query');
  if(mysql_num_rows($creater_event)>0){
	  ?>
	  <div class="well"  style="color: black !important">
	  <?php
	  while($event_detailes=mysql_fetch_array($creater_event)){
	  
	 
						?>				
									 
									<div class="row" style="color:black;">
									
										<div class="col-sm-3" align="center" style="border-right: 2px dashed gray">
										 

									<div style="width: 120px; height: 140px">
										<span>
											<img src="event_logo/<?php echo $event_detailes[5];?>" alt="" class= "img-responsive img-rounded" align="center"  style="width:  100%; height: 100%"/>
										</span>
									</div>
					
					 
										<br>
										<p align="center" style="color: #307C94 !important">Event By:<br>
										
										<span align="center" style="color: black"><?php echo $event_detailes[0]." ".$event_detailes[1]; ?></span></p>
										

										 <span class="rateYo"></span>

										<span style="color: #307C94 !important"> Rating :  </span> <span style="color: black"> 80%</span> <br>

										<span style="color: #307C94 !important">Catagory </span> <span style="color: black"><?php echo $event_detailes[3]; ?></span>

										</div>
										<div class="col-sm-9">
												<div class="row">
													<div class="col-sm-12 past-title">
														<span>	<?php echo $event_detailes[2]; ?> </span>
													</div>
												</div>
												<br>
												<div class="row">
													<div class="col-sm-3" style="color: #307C94 !important">
														About Event
													</div> 
													<div class="col-sm-9">
														<?php echo $event_detailes[4]; ?>
													</div>
												</div>
												<br>
												<div class="row" style="border-bottom: 2px solid gray; padding: 5px">
													 <div class="col-sm-12"><a href="view-more.php?id=<?php echo $eventpartid ?>&&email=<?php echo $creater_mail ?>" class="view-more" >Preview event...</a> </div>
													  
														<button class="btn btn-warning" title="You join this event" style=" float: right; width: 90px; font-size: 13px;">+joined</button>
													 
												</div>
										<br>
										 
										<div id="comments-div">
											<?php
										 $jionreviewquery=mysql_query("select  * from ema.review where event_id='$eventpartid' ORDER BY review_id DESC LIMIT 4") or die('review jion  event selection query error');
										if(mysql_num_rows($jionreviewquery)>0){
										 while($jionreview=mysql_fetch_array($jionreviewquery)){
										 	?>
					 							<div class="row">
										<div class="col-md-2 col-md-offset-1" >
										<div style="width: 100px; height: 80px; padding: 4px; ">
										<?php
					 					$jionrevieweremail=$jionreview[1];
					 					$jionreviewernamequery = mysql_query(" SELECT fristname,lastname,profile_picture  FROM `user` WHERE email='$jionrevieweremail'")or die('reviewer jion event name a selection  query error');
										 
										$jionreviewername=mysql_fetch_array($jionreviewernamequery);	
										 
									?>
											 
												<img src="profile_pictures/<?php echo $jionreviewername[2];?>" class="img-responsive img-rounded" style="width: 100px; height: 80px; float: right; ">
												 
										 
											
										</div>
										</div>
										<div class="col-md-9">
										 
											<div class="row">
												<div class="col-md-8">
													<strong style="font-weight: bolder; color:#307C94;position: relative; left: -10px; ">
													 <?php
													 echo $jionreviewername[0]." ".$jionreviewername[1];?>
													  </strong>
												</div>
												<div class="col-md-4">
													<span style="float: right; color: red; border-bottom: 1px solid gray;">
													<a href="view_review.php?reviewid=<?php echo $jionreview[3];?>&&eventid=<?php echo $eventpartid;?>">
													 View
													 </a>
													 </span>
												</div>
											</div>
											<div class="row">
												<div>
													  <?php
													 	if(strlen($jionreview[4])>40){
													  echo substr($jionreview[4],0,40).
													 "<span style='color:#307C94; font-size:10px;'> Read more ... </span>";
													}
													else{
														 echo $jionreview[4];
													  
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
												
									</div>
										
										<br>
										<div class="row">
											<div class="col-sm-12">
											  <form method="post" name="jion" action="review.php">
    											<div class="input-group">
      												<input type="text" class="form-control" name="review" placeholder="Review ..." required>
     												 <span class="input-group-btn">
        												<button class="btn btn-default" type="submit" name="do" ><i class="fa fa-paper-plane-o fa-lg" style="padding: 8px;" aria-hidden="true"></i></button>
     												</span>
													<input type="hidden" name="eventid" value="<?php echo $eventpartid;?>">
													<input type="hidden" name="page" value="<?php echo "profile.php";?>">
													<input type="hidden" name="createremail" value="<?php echo $_SESSION['email'];?>">
    											</div><!-- /input-group -->
												</form>
  											</div><!-- /.col-sm-12 -->
										</div><!-- /.row -->	
										
										 
									 <div class="row" style="margin-top: 10px; color:black; width: 100%; font-size: 13px" >
					 
				
						<div class="col-md-12" align="center">
						  		 	 <?php
									$joinreview=mysql_query("SELECT COUNT(review) from review where  event_id='$eventpartid' ") or die(' jion event count review selection query error');
									if(mysql_num_rows($joinreview)>0){
									$joincount=mysql_fetch_array($joinreview)
									?>
										<span > <p id="hide-show" > <b style="color: black !important"><a href="view_review.php?reviewid=<?php echo $review[3];?>&&eventid=<?php echo $eventpartid;?>"> <?php echo $joincount[0];?> reviews </a></b></p></span>
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
			<?php
	  }
	  ?>
	  </div>
	  <br>
	  <?php
  }
		 }
	 }
  }
 }
  else{
	  ?>
	  <p><font color="gray" size="5">
	  <center>You didn't join any event yet ...</center>
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
									<form method="post" class="form-group" action="suggestion.php" name="suggestion" >
										<div class="row uniform">
											<div class="12u"> <input type="text" name="subject" id="subject" class="form-control" placeholder="A short title" /></div>
										</div>
										<div class="row uniform">
											<div class="12u"><textarea name="suggestion" id="message" class="form-control" placeholder="Write suggestion" rows="6"></textarea></div>
										</div>
										<div class="row uniform">
											<div class="12u">
												<ul class="actions">
													<li><input type="submit" name="sendsuggestion"  class="special" title="Send suggestion" value="Send Suggestion" style="width: 200px; letter-spacing: 2px ; margin-left: 700px;"  /></li>
												</ul>
												<input type="hidden" name="fpage" value="profile.php">
											</div>
										</div>
									</form>
								</div>
							</section>
						 </div>
					
						 
				<!-- Footer -->
					<section id="footer">
						<div class="container">
							<div >
								 <span style="float: right;">CopyRight &copy; 2017</span> 
							</div>
						</div>
						
           
					</section>
				
			</div>
	 
						 	 
						 
			 

			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.rateyo.min.js"></script>
			<script src="assets/js/bootstrap.min.js"></script>
			<script src="assets/js/jquery.scrollzer.min.js"></script>
<script type="text/javascript">

	function messages() {
		
	  window.open("msgswindow.html", "_blank", "location=yes,height=400,width=300,top=261,left=726,scrollbars=no,toolbar=no,status=yes,menubar=no,resizable=no" );


	}

</script>


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
var btn = document.getElementByClassName("myBtn");

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
    $('#comments-div').css('visibility', ($('#comments-div').css('visibility') != 'hidden') ? 'visible' : 'hidden').slideToggle("slow");

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

            return true;
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
            return true;       // DO NOTHING WHEN CONTAINER IS CLICKED.
        });
    });
</script>
<script>
    $(document).ready(function () {


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

            return true;
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
            return true;       // DO NOTHING WHEN CONTAINER IS CLICKED.
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
 