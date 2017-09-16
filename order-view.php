<!DOCTYPE HTML>
<?php
session_start();
$senderemail=$_GET['senderemail'];
 $id=$_GET['id'];
  $orderno=$_GET['orderno'];
  $phase=$_GET['state'];
?>
<html>
	<head>
		<title>order-view</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
			<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->


<link href='https://fonts.googleapis.com/css?family=BioRhyme Expanded' rel='stylesheet'>
<link href='https://fonts.googleapis.com/css?family=BenchNine' rel='stylesheet'>

	<style type="text/css">
	
  body{
  font-family: 'BenchNine';
  letter-spacing: 1px; 
}
  h4{
     font-family: 'BioRhyme Expanded';
    color:#307C94;
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
	display: none;
	z-index: 999;

}
.hide-show b{
	cursor: pointer;
	padding-top: 15px;
	font-weight: bolder;
}
.package-div{
		width: 160px;
		height: auto;
		background-color:  	#F0F8FF;
	}
.price-charge-div{
	width: 100%; border-top: 1px solid gray ; margin-top: 55px;
}
.package-header{
	width: 100%; border-bottom: 1px solid gray;
}
.acc-rej{
	letter-spacing: 2px;
	font-size: 16px;
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

/*,,,,,,,,countdown timer styling ..... ,,,*/
#countdown {
  display: block;
  overflow: hidden;
  text-align: center;
  padding: 0
}

#countdown li {
  list-style: none;
  display:inline-block;
  margin-right: 40px;
  text-align: center;
  text-transform: uppercase;
  font-size: 18px;
  position: relative;

}

#countdown li:last-child {
  margin-right: 0
}

#countdown li span {
  display: block;
  font-size: 40px;
  font-weight: 700;
  height: 82px;
  line-height: 79px;
  width: 75px;
  border-radius: 10px;
  border-right: 1px solid #9e3e2e;
  border-bottom: 1px solid #9e3e2e;


  box-shadow: 15px 15px 5px #F8F8F8;
}

#countdown li .days {
  background-color: #45b29d;
  color: #FFFFFF;
}

#countdown li .hours {
  background-color: #efc94c; 
  color: #FFFFFF;
}

#countdown li .minutes {
  background-color: #31B0D5;
  color: #FFFFFF;
}

#countdown li .seconds {
  background-color: #df5a49;
  color: #FFFFFF;
}

#countdown li:before {
  background-color: #FFFFFF;
  content: "";
  height: 11px;
  left: 0;
  position: absolute;
  top: 36px;
  width: 1px;
}

#countdown li:after {
  background-color: #FFFFFF;
  content: "";
  height: 11px;
  right:0;
  position: absolute;
  top: 36px;
  width: 1px;
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
                            if($phase=='new'){
                            $update=mysql_query(" UPDATE `order` SET `state`='read' where order_no='$orderno' and event_id='$id'and organizer_email='$_SESSION[email]' and sender_email='$senderemail' ")or die("Error in   updation   query");
                              }
								 $username = mysql_query("SELECT `fristname`,`lastname`,`profile_picture` FROM `user` WHERE email='$_SESSION[email]' ")or die('user selection  query error');
									$name=mysql_fetch_array($username)
								?>

					<div class="row">
								<div class="col-sm-12">
									<div class="new-pro-div" align="center">
										<img src="profile_pictures/<?php echo $name[2];?>" class="img-responsive" alt="Profile Picture"  />
									</div>
								</div>
							</div>
					 
					
								<br>
					<h1 id="logo"><?php echo $name[0]." ".$name[1]; ?></h1>
					 
					

				</header>
				<nav id="nav">
					<ul>
						<li><a href="#one" class="active">Order Info</a></li>
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

												<li><a href="comp-details.php">Company Details</a></li>
											<li><a href="profile.php">Profile</a></li>
												
												<li><a href="home.php" title="Home"><i class="fa fa-home fa-2x" aria-hidden="true"></i></a></li>
												
											</ul>
										
									</div>
								</div>
								</div>	
							</header>
<!--................................... End of header div.............................. -->	

										
									
			
				<div class="container-fluid">
					<h3 align="center" style="color: #307C94;">Order recieved</h3>
					<div class="row">
					<?php
					$result=mysql_query(" select user.fristname,user.lastname,event.id,event.title,event.category,event.country,event.city,event.address,event_schedul.fromdate,event_schedul.todate,event_schedul.time,event.discription,event.event_logo from user join event_schedul join event where user.email='$senderemail' and event_schedul.creater_email='$senderemail'  and event.id=event_schedul.event_id and event.id='$id'") or die("Error in event selection query");
  if(mysql_num_rows($result)>0){
	   $rows=mysql_fetch_array($result); 
		  ?>
						<div class="col-md-9">

							<div class="well">
								<div class="row">
									<div class="col-sm-3" align="center" style="border-right: 2px solid gray;">
										<div style=" width: 140px; height: 100px;">
										 
											<img src="event_logo/<?php echo  $rows[12];?>" alt=" " class= "img-responsive" style="width: 100%; height: 100%;"/>
											 
										</div>
											<p align="center" style="color: #307C94 !important" >Event By: <br>
										<span align="center" style="color: black"><?php echo $rows[0]." ".$rows[1];?> </span> </p>
										<div class="data-div">
											<span style="color: #307C94 !important"> Starts at</span> 
											<span style="color: black !important"><?php echo $rows[8];?></span> <br>
										</div>
										<div class="data-div">
											<span style="color: #307C94 !important"> End at</span> 
											<span style="color: black !important"><?php echo $rows[9];?> </span> <br>
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
												<span style="color: black !important; text-transform: uppercase; font-weight: bolder;"><?php echo $rows[3];?></span> 
											</div>
										</div>
										<div class="row">
											<div class="col-sm-2">
												<span style="color: #307C94 !important">Discription </span>
											</div>
											<div class="col-sm-10">
												<span><?php echo $rows[11];?></span>
											</div>
										</div>
										<div class="row" style=" border-bottom: 1px solid gray">	 
											<div class="col-sm-2">
												<span style="color: #307C94 !important">Held at </span>
											</div>	 
											<div class="col-sm-10">
												<span><?php echo $rows[7];?></span>  <span><?php echo $rows[6];?></span> <span>C<?php echo $rows[5];?></span>
											</div>
										</div>
										<br>
										<div class="row">
											<div class="col-sm-12">
												<span class="hide-show"> <b>Order Details </b></span>
												<div>
												<?php
													$orderdetails = mysql_query("SELECT `order_note` FROM ema.`order` WHERE order_no='$orderno' and `event_id`='$id'")or die(' event note info selection  query error');
										 			if(mysql_num_rows($orderdetails)>0){
													$detail=mysql_fetch_array($orderdetails);

													echo $detail[0];
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
						?>
						<div class="col-md-3">
							<button class="accordion">Tickets Info</button>
							
							<div class="panel" style="font-size: 12px;">
								<?php
							$ticketinfo= mysql_query("SELECT `ticketnumbers`,`ticketprice` FROM ema.`paid_event_detail` WHERE `event_id`='$id'")or die(' ticket  info selection  query error');
										 			if(mysql_num_rows($ticketinfo)>0){
													$info=mysql_fetch_array($ticketinfo);
													?>
								<div class="row">
									<div class="col-sm-12" align="center">
							  			Price <span style="color:#307C94  "></span><span><?php echo $info[1];?></span> 
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
							  			Remaining 
							  		</div> 
							  		<div class="col-sm-1"> 
							  			:
							  		</div>
							  		<div class="col-sm-3">
							  		<?php
							  		$countticket=mysql_query(" SELECT COUNT(ticket_id) from ticket where  event_id='$id'")or die('ticket count query error') ;
							  			if(mysql_num_rows($countticket)>0){
													$ticket=mysql_fetch_array($countticket);
													$Remaining=$info[0]-$ticket[0];
													echo $Remaining;
												}
													else
													{
													echo $info[0];	
													}
													?>
							  		 	 
							  		</div>
							  	</div>
							  	<br>
							  	<div class="row">
							  		<div class="col-sm-12">
							  			<span style="color: gray; float: right; border-bottom: 1px solid gray;">Sold :<?php echo$ticket[0];?></span>
							  		</div>
							  	</div>
							  	<?php
						}
						else{
							echo " NO Tickets!";
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

					<h3 align="center" style="color: #307C94;">Selected Packages </h3>
						<div class="row">
						<?php
									$packageselecte=mysql_query(" SELECT * from order_detail where  order_no='$orderno' and `package/item`='package'")or die('order  check query error') ;
							  			if(mysql_num_rows($packageselecte)>0){
													while($serialno=mysql_fetch_array($packageselecte)){
													 $serial_no=$serialno[2];
											$package = mysql_query(" SELECT `packagename`,`detail`,`price`, `per` FROM `package` WHERE serial_no='$serial_no' and organizer_email='$_SESSION[email]' ")or die(' package selection query error');
												$rw=mysql_fetch_array($package);		 
 											 	?>
							<div class="col-md-3" style="padding-top: 20px;padding-bottom: 20px;">

												<div class="package-div " align="center">
													<div class="package-header"><?php echo $rw[0];?></div>
														<div class=""><?php echo $rw[1];?></div>
															<div class="price-charge-div">
																<span> <?php echo $rw[2];?> </span> : <span><?php echo $rw[3];?></span>
															</div>
															<br>
															<div>
																<button class="btn btn-warning" disabled> <span class="fa fa-check"></span> Selected</button>
															</div>
												</div>
							</div>
							<?php
						}
					}
					else{

						 ?>
						 <div class="row">
						 <div class=" col-md-10 col-md-offset-2"  >
						 <p style="margin-left: 63%; color: gray;"> No package is selected</p>
						  </div>
						  </div>
						 <?php
					}
							?>
							 
							 
							 
							
						</div>
						<br>
					<h3 align="center" style="color: #307C94;">Selected Items </h3>
						<div class="row" align="center">
										<div class="col-md-10 col-md-offset-1" style="color:gray">
										<?php
									$itemselecte=mysql_query(" SELECT * from order_detail where  order_no='$orderno' and `package/item`='item'")or die('order  check item query error') ;
							  			if(mysql_num_rows($itemselecte)>0){
													 ?>
											<table align="center" class="table-condensed">
												<tbody>
													<tr  align="center" style="font-weight: bolder; color:gray !important; ">
														 <td> Items</td> <td> Quantity </td> <td>Charge</td> <td>Price</td><td>Selected</td>
													</tr>
													<?php
													while($itemserialno=mysql_fetch_array($itemselecte)){
													 $itemserial_no=$itemserialno[2];
											$item = mysql_query(" SELECT `itemname`,`quantity`,`charge`, `rate`  FROM `item` WHERE serial_no='$itemserial_no' and organizer_email='$_SESSION[email]' ")or die(' item selection query error');
												$itemrw=mysql_fetch_array($item);		 
 											 	?>
													<tr  align="center">
														 <td> <?php echo $itemrw[0];?></td> 
														 <td> <?php echo $itemrw[1];?> </td>
														 <td> <?php echo $itemrw[2];?></td> 
														 <td> <?php echo $itemrw[3];?></td>
														 <td>
														  	<button class="btn btn-warning" disabled> <span class="fa fa-check"></span> </button>
														  </td>
													</tr>
													<?php
												}
												?>
													 
												</tbody>
											</table>
											<?php
										}
										else{
											echo "NO Item selected";
										}
										?>
										</div>
									</div>
									<br>
									 
										 
										<?php
										if($phase=='new' or $phase=='read'){

											?>
											<div class="row">
											<div class="col-md-6 col-md-offset-1">
										</div>
										<div class="col-md-2">
											<a href="order_state.php?senderemail=<?php echo $senderemail;?>&&id=<?php echo $id;?>&&orderno=<?php echo $orderno;?>&&state=workstream"><button class="btn btn-success acc-rej">Accept</button></a>
										</div>
										<div class="col-md-2">
											<a href="order_state.php?senderemail=<?php echo $senderemail;?>&&id=<?php echo $id;?>&&orderno=<?php echo $orderno;?>&&state=reject" onclick="return window.confirm('are you sure to reject this order')"><button class="btn btn-danger acc-rej">Reject</button></a>
										</div>
										<div class="col-md-1">
											
										</div>
										</div>
										<?php
									}
									?>
									<?php
										if($phase=='workstream'){
											?>
										 
											 
											<section class="container"> 
											<div class="row">
												<div class="col-md-12">
													<h3 align="center" style="color: #307C94;">Workstream expire after</h3>
												</div>
												
											</div>
											<div class="row">
												<div class="col-md-12">					
													<ul id="countdown">
														<li>					
															<span class="days time-font">00</span>
															<br>
															<p>days </p>
														</li>
														<li>
															<span class="hours time-font">00</span>
															<br>
															<p class="">hours </p>
														</li>
														<li>
															<span class="minutes time-font">00</span>
															<br>
															<p class="">minutes</p>
														</li>
														<li>
															<span class="seconds time-font">00</span>
															<br>
															<p class="">seconds</p>
														</li>				
													</ul>
												</div>
											</div>
											<div class="row">
												<div class="col-md-12">
													<p style="float: right; color: gray; font-size: 12px;">Deadline : <?php echo $rows[9];?></p>
												</div>
											</div>
							<div class="row form-group">
							<form method="post" name="paymentrecive" action=""> 
	<br>
  <label class="col-md-3 control-label" for="number"  style="color:#286E88;">Account Number </label>
  <div class="col-md-5">                     
    <input type="number" class="form-control" id="" name="accountnumber" placeholder="Enter account number for recieving" required/>
  </div>
 
 	<div class="col-md-4" style="padding-left: 30px;">
				 <button class="btn btn-success"  type="submit" name="paymentrecive" title="By clicking here amount is deducted from your account" style="width: 200px; height: 40px;margin-left: 30px;	 float: right;">Recive Amount</button>
			</div> 
  <br>
  </form>
</div>
						</section>
										 
										 
										 
										<?php
									}
									?>
									<?php
										if($phase=='completed'){
											?>
											<div class="row" align="center">
											
										
											<button class="btn btn-success acc-rej" style="width: 200px; margin-left: 435px;" disabled>Completed</button>
										
										
										</div>
										<?php
									}
									?>
									 
						
					</div>
					</section> 
					
					 

						<!-- Four -->
							
						</div>
	<br>	<br>
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
			<script src="assets/js/bootstrap.min.js"></script>
			<script src="assets/js/jquery.scrollzer.min.js"></script>
			<script src="assets/js/coundown-timer.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

			<script type="text/javascript">
    
	
	//Countdown js
	 $("#countdown").countdown({
			date: "<?php echo $rows[9];?> 12:00:00",
			format: "on"
		},
		
		function() {
			// callback function
		});
    </script>


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
<?php
if(isset($_POST['paymentrecive'])){

	$accountnumber=$_POST['accountnumber'];
	 
	 
	if($accountnumber=="")
	{
	echo "<script>alert('fill the account number  field !')</script>";	
	exit();
	}
	 
	else{
		 
		 
													 
		$payrecive=mysql_query("UPDATE `order_payment` SET `reciver_accoun_no`='$accountnumber' where `order_no`='$orderno' " )or die('updation query error');
		if($payrecive){
			 $update=mysql_query("  UPDATE `order` SET `state`='completed' where `order_no`='$orderno' and `event_id`='$id' and `organizer_email`='$_SESSION[email]' and `sender_email`='$senderemail'") or die("Error in   updation   query1");
			 if($update){
			 echo "<script>alert('Payment recieved , it will take some processing days. Thank you')</script>";
			echo"<script>window.open('comp-details.php','_self')</script>";

			exit();
		}

		}
		else{
			echo "<script>alert('some thing wrong try agian!')</script>";
			exit();
			 
		}


	}

}




?> 
 