<!DOCTYPE HTML>
<?php
session_start();
$email=$_GET['email'];
 $id=$_GET['id'];
?>

<html>
	<head>
		<title>Order page</title> 
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
			<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
		<link rel="stylesheet" href="assets/css/main.css" />
		<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
		
<link href='https://fonts.googleapis.com/css?family=BioRhyme Expanded' rel='stylesheet'>
<link href='https://fonts.googleapis.com/css?family=BenchNine' rel='stylesheet'>


		<script type="text/javascript" src="assets/css/bootstrap.min.js"></script>
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
	h5{
		font-family: 'BioRhyme Expanded';
		border-bottom: 1px solid #307C94;
		font-size: 20px;
	}
.fo{
	color: #286E88; 
}

.comp-brand{
	width: 200px;
	height: 160px;
}

.comp-brand img{
	width: 100%;
	height: 100%;
}



.sponsor{
	color:white;
	padding-top: 20px;
}
/* Dropdown Button */
.dropbtn {
    background-color: #4CAF50;
    color: white;
    padding: 12px;
    font-size: 16px;
    border: none;
    cursor: pointer;
}

/* Dropdown button on hover & focus */
.dropbtn:hover, .dropbtn:focus {
    background-color: #3e8e41;
}

/* The container <div> - needed to position the dropdown content */
.dropdown {
    position: relative;
    display: inline-block;
}

/* Dropdown Content (Hidden by Default) */
.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

/* Links inside the dropdown */
.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

/* Change color of dropdown links on hover */
.dropdown-content a:hover {background-color: #f1f1f1}

/* Show the dropdown menu (use JS to add this class to the .dropdown-content container when the user clicks on the dropdown button) */
.show {display:block;}

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

.form-group select {
    border: none;
    background: transparent;
    /*background-color: blue;*/
    -webkit-appearance: none;
    -moz-appearance: none;
     appearance: none;
    padding-top: 0px;
    background-size: 20px;
  }
  .fa-caret-down {
   font-size: 18px;
   color: #AAAAAA;
	top: -35px;
	left: 130px;
	position: relative;
	z-index: 2;
	}
	.caret2{
   font-size: 18px;
   color: #AAAAAA;
	top: -35px;
	left: 350px;
	position: relative;
	z-index: 2;
	}

	.package-div{
		width: 160px;
		height: auto;
		background-color:  #196E88;
		color: #FFF;
	}
.price-charge-div{
	width: 100%;
	 border-top: 1px solid #ED9C28;
	 margin-top: 55px;
}
.package-header{
	width: 100%; 
	border-bottom: 1px solid #ED9C28;
}
.reiveiw-header-row{
	border-top: 1px solid #ED9C28;
}
.review-pro{
	height: 60px;
	width: 60px;
	background-color: green;
	margin-left: 30px;
}
.reiveiw-name-span{
	position: relative;
	left: 0;
}
.reiveiw-text-span{
	position: relative;
	left: 0;
	font-size: 12px;
}
.order-package-label{
	margin: 0;
	padding: 0;
	color: white;
}
.order-package-label input{
	width: 17px; 
	height: 17px;
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
								  $username = mysql_query("SELECT `fristname`,`lastname`,`profile_picture` FROM `user` WHERE email='$email' ")or die('user selection  query error');
									$name=mysql_fetch_array($username)
									?>

					<div class="row">
						<div class="col-sm-12">
							<div class="new-pro-div">
								<img src="profile_pictures/<?php echo $name[2];?>" class="img-responsive" alt="" />
							</div>
						</div>
					</div>
					
					 
									 
									<br>
					
					<h1 id="logo"><?php echo $name[0]." ".$name[1]; ?></h1>
					

				</header>
				<nav id="nav">
					<ul>
						<li><a href="#one" class="active"> Buy Packages</a></li>
						<li><a href="#four">Custom Order</a></li>
						
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
										
											<ul class="nav nav-tabs" id="menu-bar">
											<li><a href="profile.php">Profile</a></li>
												
												<li><a href="create-event.php">Create Event</a></li>
												<li><a href="as-organizer.php">As Organizer</a></li>
												<li><a href="home.php">Home</a></li>
												
											</ul>
										
									</div>
								</div>
								</div>	
							</header> <!-- End of header div -->	


							<div class="row">
<?php
							 
							$companyinfo = mysql_query("  SELECT * FROM `organizer` WHERE organizer_email='$email'") or die(' company selection query error');

                               
                                 $rowes=mysql_fetch_array($companyinfo)
								 
									
?>
							
								<div class="col-md-4" align="center">
									<div class="row">
										<div class="col-sm-12">
											 
											 
													
												<div class="comp-brand img-responsive">
													<img src="profile_pictures/<?php echo $rowes['logo'];?>" class="img-responsive">
												</div>
												 

											<br>
											<div>
											<!--
											<a href="upload_company_logo.php">	<button class="btn btn-success" align="center"> Update Logo </button></a>	-->

											<h4 style="font-size: 22px; font-weight: bolder;"> <?php echo $rowes[1];?> </h4>
											</div>
											<div class="fo" align="center"> Speciality : <span style="font-size: 24px; font-weight: bolder;"> <?php echo $rowes[3];?> </span>
												</div>
											
											<br>
											<div>
											 	<p class="fo"> <span class="fa fa-map-marker"></span>&nbsp; <?php echo $rowes[6];?> , <br>		<span>	<?php echo $rowes[5];?> </span> <br> <!-- city span -->
											  			<span> <?php echo $rowes[4];?></span>  </p> <!-- country span -->
											  </div>

											  <!--,,,,,,,,,,, reiveiw row,,,,,,,,,,,,,, -->
													
													<div class="row reiveiw-header-row">
														<h4>Reviews</h4>
													</div>
												  <div class="row">
													  <div class="col-md-4">
													  	<div class="review-pro">
													  		<img src="" class="img-responsive">
													  	</div>
													  </div>
													  <div class="col-md-8">
														  <div class="row">
														  	<span class="reiveiw-name-span">
														  	<b>Muhammad Rahman</b></span>
														  </div>
														  <div class="row">
														  	<p class="reiveiw-text-span"> lorem ipsum is a dummy text used by developer </p>
														  </div>	
													  </div>
												  </div>
												  <div class="row">
													  <div class="col-md-12 ">
													  	
													  </div>
												  </div>

										</div>
									</div>
								</div>	
								<div class="col-md-8">
									<div class="row" >
										<div class="col-sm-12">
									 		<h4>Order Packages</h4>
									 	</div>
										
									</div>
										<div class="row" align="center">
										<div class="col-md-11 col-md-offset-1" align="center" >
												<h5 style="color: #ED9C28">Basic</h5>
												<br>
												<?php
											 $basicpackage = mysql_query(" SELECT `packagename`,`detail`,`price`, `per`,`serial_no`  FROM `package` WHERE organizer_email='$email' and status='basic' ")or die(' basic package selection query error');
											 ?>
 											<form method="post" action="" name="packege">
 											<?php
                                              if(mysql_num_rows($basicpackage)>0){
                                              	 while($basicrw=mysql_fetch_array($basicpackage))
											{

                                              	?>
											<div class="col-sm-4" style="padding-top: 20px;padding-bottom: 20px;">	
												<div class="package-div " >
													<div class="package-header"><?php echo $basicrw[0];?></div>
														<div class=""><?php echo $basicrw[1];?></div>
															<div class="price-charge-div">
																<span><?php echo $basicrw[2];?></span> / <span> <?php echo $basicrw[3];?></span>
															</div>
															<br>
															<div>
																<label for="checkbox" class="order-package-label">Select Package
																 <input type="checkbox" name="chk[]" 
																 value="<?php echo "package"."-".$basicrw[4];?>" id="packagename">
																</label>
															</div>
												</div>
											</div>
											<?php
										}
									}
									else{
										echo "NO basic package Register!";
									}
											?>
											 
											 
										</div>
										</div>
										<br>
										<div class=" row">
											<div class="col-sm-11 col-md-offset-1" align="center">
												<h5 style="color: #ED9C28">Standard</h5>
												<br>
												<?php
											 $standardpackage = mysql_query(" SELECT `packagename`,`detail`,`price`, `per`,`serial_no` FROM `package` WHERE organizer_email='$email' and status='standard' ")or die('standard package selection query error');
 
                                              if(mysql_num_rows($standardpackage)>0){
                                              	 while($standardrw=mysql_fetch_array($standardpackage))
											{

                                              	?>
												<div class="col-sm-4" style="padding-top: 20px;padding-bottom: 20px;">
													<div class="package-div" >
														<div class="package-header"><?php echo $standardrw[0];?></div>
															<div class=""><?php echo $standardrw[1];?></div>
																<div  class="price-charge-div" style="">
																	<span><?php echo $standardrw[2];?> </span> / <span> <?php echo $standardrw[3];?></span>
																</div>
																<br><div>
																<label for="checkbox" class="order-package-label">Select Package
																 <input type="checkbox" name="chk[]" 
																 value="<?php echo "package"."-".$standardrw[4];?>" id="packagename">
																</label>
															</div>
													</div>
												</div>
												<?php
										}
									}
									else{
										echo "NO Standard package Register!";
									}
											?>
											</div>					
										</div>
										<br>
										 <div class=" row">
											<div class="col-sm-11 col-md-offset-1" align="center">
												<h5 style="color: #ED9C28">Premium</h5>
												<br>
												<?php
											 $premiumpackage = mysql_query(" SELECT `packagename`,`detail`,`price`, `per`,`serial_no` FROM `package` WHERE organizer_email='$email' and status='premium' ")or die('standard package selection query error');
 
                                              if(mysql_num_rows($premiumpackage)>0){
                                              	 while($premiumrw=mysql_fetch_array($premiumpackage))
											{

                                              	?>
												<div class="col-sm-4" style="padding-top: 20px;padding-bottom: 20px;">
													<div class="package-div" >
														<div class="package-header"><?php echo $premiumrw[0];?></div>
															<div class=""><?php echo $premiumrw[1];?></div>
																<div  class="price-charge-div" style="">
																	<span><?php echo $premiumrw[2];?> </span> / <span> <?php echo $premiumrw[3];?></span>
																</div>
																<br><div>
																<label for="checkbox" class="order-package-label">Select Package
																 <input type="checkbox" name="chk[]" 
																 value="<?php echo "package"."-".$premiumrw[4];?>" id="packagename">
																</label>
															</div>
													</div>
												</div>
												<?php
										}
									}
									else{
										echo "NO Premium package Register!";
									}
											?>
											</div>					
										</div>
									<br>
									
									 
							</div>

										<div class="col-md-10 col-md-offset-1" >
											<h3 style="color:#307C94">Select Item's from List </h3>
										</div>
										<div class="col-md-10 col-md-offset-1 table-responsive" style="color:gray"><?php
											 $item = mysql_query(" SELECT `itemname`,`quantity`,`charge`, `rate`,`serial_no`  FROM `item` WHERE organizer_email='$email'")or die('item selection query error');
 
                                              if(mysql_num_rows($item)>0){
                                              
											?>
											<table align="center" class="table table-hover">
												<tbody>
												 
													<tr  align="center">
														<td> Items</td>
														<td> Quantity </td>
														<td>Charge</td>
														<td>Rate</td>
														<td><strong style="font-weight: bolder; color:#307C94; ">Select</strong></td>
													</tr>
													<?php
												 while($rw=mysql_fetch_array($item))
											{

												?>
													<tr  align="center">
														<td> <?php echo $rw[0];?></td>
														<td> <?php echo $rw[1];?> </td> 
														<td> <?php echo $rw[2];?></td> 
														<td> <?php echo $rw[3];?> </td>
														<td align="center"><input type="checkbox" name="chk[]" value="<?php echo "item"."-".$rw[4];?>" style="margin-left: 50%;" /></td>
													</tr>
													 <?php
													}
													?>
												</tbody>
											</table>
											<?php
										}
										else{
										echo "NO Item Register"	;
										}
										?>
										</div>
									

								</div>
								
									<br>

									<div class="row ">
										<div class="col-md-10 col-md-offset-1 form-group">
											<textarea name="event-requirement" id="Requirement-list" class="form-control" placeholder="Details about your Event " rows="2"></textarea>
										</div>
									</div>
									<br>
									<div class="row">
										<div class="col-md-11 col-md-offset-1 form-group">
											<div class="col-md-12">
												<button class="btn btn-warning" style="margin-left: 645px; font-size: 14px; width: 200px; letter-spacing: 2px; padding: 6px;" type="submit" name="order">Send Order</button>
												
											</div>
										</div>
									</div>
									
									</form>

							</section> <!-- section one end -->

						
						 
							 
							<hr>

						<!-- Four -->

						<section id="four">
							<div class="container">
									 <h4 style="color:#286E88; font-family: 'BioRhyme Expanded';">Create Custom Order  </h4>
									<form method="post" class="form-group" action="" >
										 
										
										<div class="row uniform">
											<div class="12u"><textarea name="orderdetails" id="eventdetail" class="form-control" placeholder="Write specific details about your Order / Event" rows="6"></textarea></div>
										</div>
										<div class="row uniform">
											<div class="12u">
												<button class="btn btn-warning" name="cumorder" type="submit" style="float: right; font-size: 14px; width: 200px; letter-spacing: 2px; padding: 6px;">Send Custom Order</button>
												
											</div>
										</div>
										 
									</form>
							</div>
						</section>

						</div> <!-- Main End -->

				<!-- Footer -->
					<section id="footer">
						<div class="container">
							<div class="copyright">
							  <span style="float: right;">CopyRight &copy; 2017</span> 
							</div>
						</div>
						
           
					</section>

			</div>

<script type="text/javascript">
function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown menu if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {

    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
</script>


		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/css/bootstrap.min.js"></script>
			<script src="assets/js/jquery.scrollzer.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>
<?php
 if(isset($_POST['order'])){
$chk=$_POST['chk'];
$eventrequirement=$_POST['event-requirement'];
 
if($chk=="" or $eventrequirement=="" ){
	echo "<script>window.alert( 'select atlest a package or item and fill  details!...')</script>";
	 //echo "<script>window.open( 'profile.php','_self')</script>";
	exit();
	
}
 else{
 	$con=mysql_connect("localhost","root", "") or die("database connectivity error");
                            mysql_select_db("ema",$con);
 
	$qr=mysql_query("SELECT * FROM `order` WHERE sender_email='$_SESSION[email]' and organizer_email='$email' and event_id='$id'")or die('selection query error');
	if(mysql_num_rows($qr)>0){
		echo "<script>window.alert( 'you are already order this packages/item for this event to this organizer!...')</script>";
	exit();
	}
else{	
	 
				 
		$q=mysql_query("INSERT INTO `order`(`sender_email`,`organizer_email`,`event_id`, `order_note`) VALUES('$_SESSION[email]','$email','$id','$eventrequirement' )");
		if($q){
			$ordercount=mysql_query("SELECT order_no from ema.order order by order_no desc limit 1") or die('order count selection query error');
				 $ordernumber=mysql_fetch_array($ordercount);
				 $orderno=$ordernumber[0];

			foreach($chk as $value)	 {
				list ($packageitem,$serial_no) = split('-', $value , 2);
				$q1=mysql_query(" INSERT INTO `ema`.`order_detail` (`order_no`, `package/item`,`package/item_serial_no`) VALUES ('$orderno', '$packageitem','$serial_no')")or die('order detail table query error');
			}

		}

}
 
if(!$q)
{
      echo"<font size=5 color=red>"."you have select some thing wrong tray  again"."</fony>";
exit();
}
else{

		mysql_close($con);
		echo "<script>alert('Your  order is send wait for verification')</script>";
		
   echo"<script>window.open('profile.php','_self')</script>";
 
	 
} 
}
	 }  
	 
 ?>
 <?php
 //custom order
 if(isset($_POST['cumorder'])){
$orderdetails=$_POST['orderdetails'];
 
if($orderdetails==""){
	echo "<script>window.alert( ' fill custom order field!...')</script>";
	 //echo "<script>window.open( 'profile.php','_self')</script>";
	exit();
	
}
else{
$con=mysql_connect("localhost","root", "") or die("database connectivity error");
                            mysql_select_db("ema",$con);
 
	$cumqr=mysql_query("SELECT * FROM `order` WHERE sender_email='$_SESSION[email]' and organizer_email='$email' and event_id='$id'")or die('selection query error');
	if(mysql_num_rows($cumqr)>0){
		echo "<script>window.alert( 'you are already order of this event to this organizer!...')</script>";
	exit();
	}
else{	
	 
		$qe=mysql_query("INSERT INTO `order`(`sender_email`,`organizer_email`,`event_id`, `order_note`) VALUES('$_SESSION[email]','$email','$id','$orderdetails')");
}

if(!$qe)
{
      echo"<font size=5 color=red>"."you have select some thing wrong tray  again"."</fony>";
exit();
}
else{

		mysql_close($con);
		echo "<script>alert('your  order is send ,wait for vitrification')</script>";
		
   echo"<script>window.open('profile.php','_self')</script>";
 
	 
}
} 
	 }  
	 
 ?>