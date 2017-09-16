 <!DOCTYPE HTML>
<?php
session_start();
 $email=$_GET['email'];
 $id=$_GET['id'];
 ?>
<html>
	<head>
		<title>Select organizer</title> 
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
			<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
		<link rel="stylesheet" href="assets/css/main.css" />
		
		<link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet">

		<script type="text/javascript" src="assets/css/bootstrap.min.js"></script>
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->

	<style type="text/css">
	#menu-bar{
		list-style: none;
		float: right;
		background-color:#31B0D5; 

			}
#menu-bar li{
		background-color: white;
		cursor: pointer
		
			}
#menu-bar a:hover{
	color:white;
	background-color:#31B0D5
			}
#logo img{
	width: 45%;
	
	padding-bottom: 10px;
}

.fo{
	font-family: 'Kaushan Script', cursive !important;
	color: #286E88; 
}

.form-group.fo{
	font-family: 'Kaushan Script', cursive;
}
#comp-brand img{
	height:  200px;
	border-radius: 20%; 
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

	</style>
	</head>
	<body>

		<!-- Header -->
			<section id="header">
				<header>

 							<?php
							$con=mysql_connect("localhost","root", "") or die("database connectivity error");
                            mysql_select_db("ema",$con);
								$profilepicture = mysql_query("SELECT `name` FROM `profile_picture` WHERE email='$email' and `for`='profile'")or die('logo selection  query error');
								if(mysql_num_rows($profilepicture)>0){
                                 $row=mysql_fetch_array($profilepicture)
								?>

					<div><span class="image avatar"><img src="profile_pictures/<?php echo $row[0];?>" alt="" /></span></div>
					
					<?php
								}
									else{
										?>
										<div><span class="image avatar"><img src="images/ABB.png" alt="" /></span></div> 
									<?php
									}
									$username = mysql_query("SELECT `fristname`,`lastname` FROM `user` WHERE email='$email' ")or die('user selection  query error');
									$name=mysql_fetch_array($username)
									?>
					
					<h1 id="logo"><?php echo $name[0]." ".$name[1]; ?></h1>
					<br>
					<div class="row">
					<div class="col-sm-12" align="center">
					<?php
								$fallow = mysql_query("SELECT `fallowby_email` FROM `fallow` WHERE `fallowby_email`='$_SESSION[email]' and `fallowed_email`='$email'")or die('fallow selection  query error');
										 if(mysql_num_rows($fallow)>0){
								?>
					<a href="un_fallow.php?email=<?php echo $email;?>&&page=<?php echo "profile.php";?>" onclick="return window.confirm('are you sure to un-follow this user')"><button class="btn btn-info">following </button></a>
					<?php
						}
					else{
						?>
						<a href="fallow.php?email=<?php echo $email;?>&&page=<?php echo "profile.php";?>" onclick="return window.confirm('are you sure to follow this user')"><button class="btn btn-info"> + follow </button></a>
						<?php
					}
					?>
					</div> 


				</header>
				<nav id="nav">
					<ul>
						<li><a href="#one" class="active"> Company Info</a></li>
						
						<li><a href="#three">Packages</a></li>
						<li><a href="#four">Contact EMA</a></li>
					</ul>
				</nav>
				<footer>
					<ul class="icons">
						<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
						<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
						<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
						<li><a href="#" class="icon fa-github"><span class="label">Github</span></a></li>
						<li><a href="#" class="icon fa-envelope"><span class="label">Email</span></a></li>
					</ul>
				</footer>
			</section>

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Main -->
					<div id="main">

						<!-- One -->
							<section id="one">

							<header class="majr">

								<div class="jumbotron" style="height: 130px;
									background: #196E88;
									box-shadow: 2px 2px 2px 0px;
									box-shadow: 0px 1px 8px 0px;
									opacity:0.9; 
									overflow: hidden;">
								<div class="row">
									<div class="col-md-4" id="logo">
										
											<img src="images/emanew2.png" class="img-responsive">
										
									</div>
									<div class="col-md-8">
										
											<ul class="nav nav-tabs" id="menu-bar">
											 <li><a href="home.php">Home</a></li>
												<li><a href="explore.php">Explore</a></li>
												<li><a href="organizers.php">organizer's</a></li>
												<li><a href="profile.php">Profile</a></li>
												
											</ul>
										
									</div>
								</div>
								</div>	
							</header> <!-- End of header div -->	


							<div class="row">
							<?php
							 
							$companyinfo = mysql_query("  SELECT * FROM `organizer` WHERE organizer_email='$email'") or die(' company selection query error');

                              if(mysql_num_rows($companyinfo)>0){
                                 $rowes=mysql_fetch_array($companyinfo)
								 
									
?>
								<div class="col-md-4" align="center">
									 <?php
								$companylogo = mysql_query("SELECT `name` FROM `profile_picture` WHERE email='$email' and `for`='logo'")or die('logo selection  query error');
								if(mysql_num_rows($companylogo)>0){
                                 $row=mysql_fetch_array($companylogo)
								?>
									<div id="comp-brand">
										<img src="profile_pictures/<?php echo $row[0];?>" class="img-responsive img-rounded" style="height: 200px; width: 200px;border-radius: 30%;">
									</div>
									<?php
								}
									else{
										?>
										<img src="images/comp.jpg" class="img-responsive img-rounded" style="height: 200px; width: 200px;border-radius: 30%;">
									<?php
									}
									?>
									<br>
										

								</div>	
								<div class="col-md-8">
									  <h2 class="fo"> <?php echo $rowes[1];?> </h2>
									 <h4 class="fo"> Country : <?php echo $rowes[3];?> </h3>
									 <h4 class="fo"> City : <?php echo $rowes[4];?></h3>
									 <h4 class="fo"> Address : <?php echo $rowes[5];?></h3>
									 <h4 class="fo"> About: <?php echo $rowes[2];?></h3>
								</div>
							</div>

							</section> <!-- section one end -->


						<!-- Two -->
							<!-- section two end -->
							<br>
							<hr>
							<br>
						<!-- Three -->
							<section id="three">
								 <h2 class="fo" align="center"><?php echo $rowes[1]; ?> packages</h2>
								<div class="row">
									<div class="col-md-12">
									
									<?php
											 $package = mysql_query(" SELECT `packagename`, `price`, `per` FROM `package` WHERE organizer_email='$email'")or die('package selection query error');
 
                                              if(mysql_num_rows($package)>0){
                                              
											?>
									<form method="post" name="orderform" action="">
										<table>
											<tbody>
												<tr align="center">
													<td>Package</td><td>Price</td><td>Charge</td><td></td>
												</tr>
												<?php
												 while($rw=mysql_fetch_array($package))
											{

												?>
													<tr align="center">
													<td><?php echo $rw[0];?></td>
													<td><?php echo $rw[1];?></td>
													<td><?php echo $rw[2];?></td> 
													<td><input type="checkbox" name="chk[]" value="<?php echo $rw[0];?>" id="packagename"></td>
													 
												</tr>
												<?php
											}
												?>
												</tbody>
											</table>
											       <input type="hidden" name="id" value="<?php echo $id;?>">
													<input type="hidden" name="organizeremail" value="<?php echo $email;?>">
													<button type="submit" name="order" class="btn btn-info" style="margin-left:70%;">ORDER </button>
											</form>
											<?php
											  }
											  else{
												  ?>
												  <p><font color="green" size="5">
												 <center>This organizer not register any  package ok!</center>
												  </font>
												  </p>
											  <?php
											  }
											?>
											
										
									</div>
									 
									<?php
							  }
							  ?>
								</div>
							</section><!-- section three end-->
							
							<hr>

						<!-- Four -->
							 
						</div> <!-- Main End -->

				<!-- Footer -->
					<section id="footer">
						<div class="container">
							<ul class="copyright">
								<li> <p style="color: white;"> Developed By Muhammad Rahman and Abbas Ahmad Under Supervision of Jehangir Muhammad khan.</p>  <span style="float: right;">CopyRight &copy; 2017</span> </li>
							</ul>
						</div>
						
           
					</section>

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

	</body>
</html>
<?php
 if(isset($_POST['order'])){
$chk=$_POST['chk'];
$eventid=$_POST['id'];
$organizeremail=$_POST['organizeremail'];
if($chk==""){
	echo "<script>window.alert( 'select a package ok!...')</script>";
	 //echo "<script>window.open( 'profile.php','_self')</script>";
	exit();
	
}

foreach($chk as $value)	 {
	$qr=mysql_query("SELECT `packagename` FROM `order` WHERE sender_email='$_SESSION[email]' and organizer_email='$organizeremail' and event_id='$eventid' and packagename='$value'")or die('selection query error');
	if(mysql_num_rows($qr)>0){
		echo "<script>window.alert( 'you are already order this package for this event to this organizer!...')</script>";
	exit();
	}
else{	
		$q=mysql_query("INSERT INTO `order`(`sender_email`,`organizer_email`,`event_id`, `packagename`) VALUES('$_SESSION[email]','$organizeremail','$eventid','$value' )");
}
}
if(!$q)
{
      echo"<font size=5 color=red>"."you have select some thing wrong tray  again"."</fony>";
exit();
}
else{

		mysql_close($con);
		echo "<script>alert('your  request is send ,wait for vitrification')</script>";
		
   echo"<script>window.open('profile.php','_self')</script>";
 
	 
} 
	 }  
	 
 ?>