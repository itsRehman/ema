<!DOCTYPE HTML>
<?php
session_start();
$email=$_GET['email'];
 $id=$_GET['id'];
?>
<html>
	<head>
		<title>view-more</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
			<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->


<link href='https://fonts.googleapis.com/css?family=BioRhyme Expanded' rel='stylesheet'>
<link href='https://fonts.googleapis.com/css?family=BenchNine' rel='stylesheet'>

	<style type="text/css">
	


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

/*,,,,,,,,,,,, accordians style,,,,,,,,,,*/
button.accordion {
    background-color: #eee;
    color: #286E88;
    cursor: pointer;
    padding: 18px;
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

div.panel {
    padding: 0 18px;
    background-color: white;
    max-height: 0;
    overflow: hidden;
    transition: max-height 0.2s ease-out;
}


/*,,,,,,,,,,,, accordians style,,,,,,,,,,*/
#comments-div{
	
	z-index: 999;

}
.hide-show b{
	cursor: pointer;
	padding-top: 15px;
	font-weight: bolder;
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
								$profilepicture = mysql_query("SELECT `name` FROM `profile_picture` WHERE email='$_SESSION[email]' and `for`='profile'")or die('logo selection  query error');
								if(mysql_num_rows($profilepicture)>0){
                                 $row=mysql_fetch_array($profilepicture)
								?>

					<div class="row">
								<div class="col-sm-12">
									<div class="new-pro-div" align="center">
										<img src="profile_pictures/<?php echo $row[0];?>" class="img-responsive" alt="Profile Picture"  />
									</div>
								</div>
							</div>
					
					<?php
								}
									else{
										?>
										<div class="row">
											<div class="col-sm-12">
												<div class="new-pro-div" align="center">
													<img src="images/ABB.png" class="img-responsive" alt=""  />
												</div>
											</div>
										</div>
									<?php
									}
									 
					 $username = mysql_query("SELECT `fristname`,`lastname` FROM `user` WHERE email='$_SESSION[email]' ")or die('user selection  query error');
									$name=mysql_fetch_array($username)
									?>
					
								<br>
					<h1 id="logo"><?php echo $name[0]." ".$name[1]; ?></h1>
					 
					

				</header>
				<nav id="nav">
					<ul>
						<li><a href="#one" class="active">Event Info</a></li>
						<li><a href="#two">Photos / Videos</a></li>
						 
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
											<li><a href="profile.php">Back to Profile</a></li>
												<li><a href="comp-details.php">Company Details</a></li>
												<li><a href="home.php">Home</a></li>
												
											</ul>
										
									</div>
								</div>
								</div>	
							</header>
<!--................................... End of header div.............................. -->	

										
									
			
				<div class="container-fluid">
					<div class="row">
					<?php
					$result=mysql_query(" select user.fristname,user.lastname,event.id,event.title,event.category,event.country,event.city,event.address,event_schedul.fromdate,event_schedul.todate,event_schedul.time,event.discription from user join event_schedul join event where user.email='$email' and event_schedul.creater_email='$email'  and event.id=event_schedul.event_id and event.id='$id'") or die("Error in event selection query");
  if(mysql_num_rows($result)>0){
	   $rows=mysql_fetch_array($result); 
		  ?>
						<div class="col-md-9">
							<div class="well">
								<div class="row">
									<div class="col-sm-3" align="center" style="border-right: 2px solid gray;">

										<div style=" width: 140px; height: 100px;">
										<?php
									$createrprofile = mysql_query("SELECT `name` FROM `profile_picture` WHERE email='$email' and `for`='profile'")or die('creater pic selection  query error');
								if(mysql_num_rows($createrprofile)>0){
                                 $pic=mysql_fetch_array($createrprofile)
								?>
											<img  src="profile_pictures/<?php echo $pic[0];?>" alt="" class= "img-responsive" style="width: 100%; height: 100%;"/>
											<?php
										}
										else{
											?>
											<img  src="" alt="" class= "img-responsive" style="width: 100%; height: 100%;"/>
											<?php
										}
											?>
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
									 <div id="comments-div">
											<?php
										 $reviewquery=mysql_query("select * from ema.review where event_id='$id'  ORDER BY review_id DESC LIMIT 3") or die('review selection query error');
										if(mysql_num_rows($reviewquery)>0){
										 while($review=mysql_fetch_array($reviewquery)){
										 	?>
					 							<div class="row">
										<div class="col-md-2 col-md-offset-1" >
										<div style="width: 100px; height: 80px; float: right;">
										<?php
					 					$revieweremail=$review[1];	
										$reviewerprofile = mysql_query("SELECT `name` FROM  `profile_picture` WHERE email='$revieweremail' and `for`='profile'")or die('reviewer picture a selection  query error');
										if(mysql_num_rows($reviewerprofile)>0){
										$reviewerpic=mysql_fetch_array($reviewerprofile);
									?>
											 
												<img src="profile_pictures/<?php echo $reviewerpic[0];?>" class="img-responsive img-rounded">
												<?php
											}else
											{
											?>
											<img src="" class="img-responsive img-rounded">
											<?php	
											}
											?>
										 
											
										</div>
										</div>
										<div class="col-md-9">
										<?php
										$reviewernamequery = mysql_query(" SELECT fristname,lastname  FROM `user` WHERE email='$revieweremail'")or die('reviewer name a selection  query error');
										 
										$reviewername=mysql_fetch_array($reviewernamequery);
									?>
											<div class="row">
												<div class="col-md-8">
													<strong style="font-weight: bolder; color:#307C94;position: relative; left: -10px; ">
													 <?php
													 echo $reviewername[0]." ".$reviewername[1];?>
													  </strong>
												</div>
												<div class="col-md-4">
													 
												</div>
											</div>
											<div class="row">
												<div>
													 <?php echo  substr($review[4],0,40).
													 "<span style='color:blue; font-size:10px;'> Read now ... </span>";?>
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
										<br>
										<div class="row">
											<div class="col-sm-12" align="center">
												  <?php
									$review=mysql_query("SELECT COUNT(review) from review where  event_id='$id' ") or die(' comment selection query error');
									if(mysql_num_rows($review)>0){
									$count=mysql_fetch_array($review)
									?>
										<span > <p id="hide-show" > <b style="color: black !important"><a href="view_review.php?reviewid=<?php echo $review[3];?>&&eventid=<?php echo $id;?>"> <?php echo $count[0];?> reviews </a></b></p></span>
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
						<?php
					}
					else{
					echo "No details";	
					}
						?>
						<div class="col-md-3">
							<button class="accordion">Organizer</button>
							<div class="panel" style="font-size: 12px;">
								 
									<?php 
									$organizers= mysql_query("SELECT * FROM ema.`order` WHERE `event_id`='$id' and state='completed'")or die('organizer selection  query error');
										 			if(mysql_num_rows($organizers)>0){

													while($org=mysql_fetch_array($organizers)){
														 

														$packegeprice=mysql_query("SELECT SUM(price) FROM package join ema.order join `order_detail` WHERE package.serial_no=`package/item_serial_no` and order.event_id='$id' and order_detail.order_no='$org[4]' and `order_detail`.`package/item`='package'")or die('package selection  query error');
														$itemprice=mysql_query("SELECT SUM(rate) FROM item join ema.order join `order_detail` WHERE item.serial_no=`package/item_serial_no` and order.event_id='$id' and order_detail.order_no='$org[4]' and `order_detail`.`package/item`='item'")or die('item selection  query error');
										 			if(mysql_num_rows($packegeprice)>0){
										 				$packagers=mysql_fetch_array($packegeprice);
										 			$totalpackageprice=$packagers[0];
										 			 	
										 			}
										 			if(mysql_num_rows($itemprice)>0){
										 				$itemrs=mysql_fetch_array($itemprice);
										 			$totalitemprice=$itemrs[0];	
										 			 
										 			}
													?>
													<div class="row">
									            <div class="col-sm-4">

										<div style=" width: 65px; height: 55px">
										<?php
										$organizerpicture = mysql_query("SELECT `name` FROM `profile_picture` WHERE email='$org[1]' and `for`='profile'")or die('profile picture selection  query error');
								if(mysql_num_rows($organizerpicture)>0){
                                 $rowpic=mysql_fetch_array($organizerpicture)
								?>
										 <img src="profile_pictures/<?php echo $rowpic[0];?>" class="img-responsive" alt=""  />
											 <?php
											}
											else{
												?>
												<img src="profile_pictures/<?php echo $rowpic[0];?>" class="img-responsive" alt=""  />
												<?php
											}
											?>
										</div>
									</div>
									<div class="col-sm-8">
									<?php
										$orgname= mysql_query("SELECT `fristname`,`lastname` FROM `user` WHERE email='$org[1]'")or die('org name selection  query error');
								if(mysql_num_rows($orgname)>0){
                                 $name=mysql_fetch_array($orgname)
								?>

										<div style="color:#307C94;font-weight: bolder;"><?php echo $name[0]." ".$name[1];?></div>
										<?php
									}
									 $total=$totalpackageprice+$totalitemprice;
											if($total>0){
												?>
											<span style="float: right; font-size: 12px; color: gray; border-bottom: 1px solid gray; line-height: 10px; margin-top: 5px;">Price <b style="color:#307C94; font-weight: bolder; "><?php echo $total;?><b></span>
											<?php
										}else{
										 ?>
										 <span style="float: right; font-size: 12px; color: gray; border-bottom: 1px solid gray; line-height: 10px; margin-top: 5px;"><b style=" font-weight: bolder; ">Custom Order<b></span>
										 <?php
									}
										?>
									</div>
								</div>
								<?php
							}
						}else{
							echo "No Organizer";
						}
						?>
								
							</div>

							<button class="accordion">Tickets Info</button>
							<div class="panel" style="font-size: 12px;">
							<?php
							$ticketinfo= mysql_query("SELECT `ticketnumbers`,`ticketprice` FROM ema.`paid_event_detail` WHERE `event_id`='$id'")or die(' ticket  info selection  query error');
										 			if(mysql_num_rows($ticketinfo)>0){
													$info=mysql_fetch_array($ticketinfo);
													?>
							 
								<div class="row">
									<div class="col-sm-12" align="center">
							  			Price <span style="color:#307C94  ">  </span><span><?php echo $info[1];?></span> 
							  		</div> 
								</div>
							  	<div class="row">
							  		<div class="col-sm-6">
							  			Total tickets
							  		</div> 
							  		<div class="col-sm-1"> 
							  			:
							  		</div>
							  		<div class="col-sm-3">
							  		 	 <?php echo $info[0];?>
							  		</div>
							  	</div>
							  
							  	<div class="row">
							  		<div class="col-sm-6">
							  			Sold
							  		</div> 
							  		<div class="col-sm-1"> 
							  			:
							  		</div>
							  		<div class="col-sm-3">
							  		 	<?php
							  		$countticket=mysql_query(" SELECT COUNT(ticket_id) from ticket where  event_id='$id'")or die('ticket count query error') ;
							  			if(mysql_num_rows($countticket)>0){
													$ticket=mysql_fetch_array($countticket);
													 echo $ticket[0];
												
												}
													?>
							  		</div>
							  	</div>
							  	<?php
						}
						else{
							echo " No Tickets";
						}
						?>
							</div>
							 
							<div class="row">
							<div class="col-sm-8 col-sm-offset-1">
							<h5>Participants</h5>
							</div>
									<div class="col-sm-3">
										 <?php
									$participants=mysql_query(" SELECT COUNT(participant_email) from participant where  event_id='$id'")or die('participants count query error') ;
							  			if(mysql_num_rows($participants)>0){
													$join=mysql_fetch_array($participants);
													 ;
													 
 														?>
							  		 	 
										<span> <?php echo $join[0];?></span>
										<?php
									}
									?>
									</div>
									 
								</div>
						</div>
					</div>
					<br> 






						



							<hr>

						<!-- Four -->
							
						</div>


			 
			 <section id="two"> 
			 <h3 align="center">Buyer's List</h3>


			 <div class="row">
			 	<div class="col-md-3" align="center">
			 		<div style="width: 60px; height: 50px; background-color: red;">
			 			<img src=""/>
			 		</div>
			 		<span>Name</span> <br>
			 		<span>Ticket price </span>
			 	</div>
			 </div>
			 </section>


				<!-- Footer -->
					<section id="footer">
						<div class="container">
							<div>
								 <span style="float: right;">CopyRight &copy; 2017</span>
							</div>
						</div>
					
           
					</section>

			</div>

			<!-- comments script -->


			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.rateyo.min.js"></script>
			<script src="assets/js/bootstrap.min.js"></script>
			<script src="assets/js/jquery.scrollzer.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>


	<script type="text/javascript">

	
 	$('.hide-show').click(function() {

 	$(".hide-show b").fadeOut(function () {

    $(this).text(($(this).text() != 'Hide comments') ? 'Hide comments' : 'Comments').fadeIn("slow");
       
       });

    $('#comments-div').css('visibility', ($('#comments-div').css('visibility') != 'hidden') ? 'visible' : 'hidden').slideToggle("slow");



});
</script>

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
 