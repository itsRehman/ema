<!DOCTYPE HTML>
<?php
session_start();
 $email=$_GET['email'];
 $page=$_GET['page'];
 ?>
<html>
	<head>
		<title> Company Profile view</title>
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
	h4{
		 font-family: 'BioRhyme Expanded';
    color:#307C94;
	}
 
#logo img{
	width: 45%;
	
	padding-bottom: 10px;
}

.view-more{
	color:#39B3D7;
	text-decoration: none;

}
.view-more:hover{
	color:#39B3D7; 
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
.comp-brand{
	width: 140px;
	height: 160px;
}
#comp-address{
color: black !important; 
font-size: 13px;

}
.comp-info{
	border-right: 2px dashed #307C94;
}
.descrip-div{
	border-bottom: 1px solid #307C94;
	padding: 5px;
}
	</style>
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
		background-color:  	#F0F8FF;
	}
.price-charge-div{
	width: 100%; border-top: 1px solid gray ; margin-top: 55px;
}
.package-header{
	width: 100%; border-bottom: 1px solid gray;
}
.reiveiw-header-row{
	border-top: 1px solid gray;
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
.not-organizer{
	color: gray;
	font-weight: bolder;
	margin-left: 320px;	
}
.order-notify{
	background-color: red;
	position: relative;
	top: -20px;
	left:-10px;
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
									$name=mysql_fetch_array($username);
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
					<div class="col-sm-12" align="center">
					 
					  <?php
					  if($email!=$_SESSION['email']){
								$fallow = mysql_query("SELECT `fallowby_email` FROM `fallow` WHERE `fallowby_email`='$_SESSION[email]' and `fallowed_email`='$email'")or die('fallow selection  query error');
										 if(mysql_num_rows($fallow)>0){
								?>
        						 
        						<form method="post" name="-connect">
        						<button class="btn btn-warning" name="disconnect" type="submit" style="width: 150px; font-size: 13px;"> - Connected</button>
        						</form>

								<?php
								if(isset($_POST['disconnect'])){
									$run=mysql_query("DELETE from ema.fallow where fallowby_email='$_SESSION[email]' and fallowed_email='$email'")or die('error in fallow deletion query');
										     ?>

										     <meta http-equiv="refresh" content="0">
										     <?php

								}
										 }
								else{
									?>  
									 
									<form method="post" name="connect">
									<button ton class="btn btn-info" name="connect" type="submit" style="width: 150px; font-size: 13px;"> + Connect</button>
									</form>
									<?php
									if(isset($_POST['connect'])){
										$runconnect=mysql_query(" select * from ema.fallow where fallowby_email='$_SESSION[email]' and fallowed_email='$email'")or die('error in fallow selection query');
if(mysql_num_rows($runconnect)>0){
     echo "<script>alert('you are already fallow this user ')</script>";
	  
      exit();
}
else{
	$query=mysql_query(" insert into fallow(fallowby_email,fallowed_email )values('$_SESSION[email]' , '$email' )")or die('error in fallow  insertion query');
	      
  ?>

										     <meta http-equiv="refresh" content="0">
										     <?php

									}
								}
							}
						}
								?>
					 
					</div> 

				</header>
				<nav id="nav">
					
				</nav>
			
			</section>

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Main -->
					<div id="main">

						<!-- One -->
							<section>

							<header class="majr">

								<div class="jumbotron top-menu-div">
								<div class="row">
									<div class="col-md-4" id="logo">
										
											<img src="images/emanew2.png" class="img-responsive">
										
									</div>
									<div class="col-md-8">
										
											<ul  id="menu-bar">
												<li><a href="explore.php">Explore</a></li>
												<li><a href="organizers.php">organizer's</a></li>
												<li><a href="profile.php">Profile</a></li>
											<li><a href="home.php" title="Home" style="text-decoration: none !important;"><i class="fa fa-home fa-2x" aria-hidden="true"></i></a></li>
												
											</ul>
										
									</div>
								</div>
								</div>	
							</header>
<!--................................... End of header div.............................. -->	

									
									<section id="two">
									 
<?php
							 
							$companyinfo = mysql_query("  SELECT * FROM `organizer` WHERE organizer_email='$email'") or die(' company selection query error');

                              if(mysql_num_rows($companyinfo)>0){
                                 $rowes=mysql_fetch_array($companyinfo)
								 
									
?>
							<div class="row">
								
								<div class="col-md-4" align="center">
									<div class="row">
										<div class="col-sm-12">
											 
												
													
												<div class="comp-brand img-responsive">
													<img src="profile_pictures/<?php echo $rowes[7];?>" class="img-responsive">
												</div>
												 

											<br>
											 
											
											 
											 

											  <!--,,,,,,,,,,, reiveiw row,,,,,,,,,,,,,, -->
													
													<div class="row reiveiw-header-row">
														<h4>Reviews</h4>
													</div>
												  <div class="row">
													 
													  <div class="col-md-12">
														  <div class="well" style="height: 200px;">
														  	<h3 style="color: gray;">No review yet</h3>
														  </div>	
													  </div>
												  </div>
												

										</div>
									</div>
								</div>	
								<div class="col-md-8">
									<div class="row">
										<div class="col-sm-11">
											<div style="width: 100%; border-bottom: 1px solid gray;">
												<h4 style="font-size: 28px; font-weight: bolder;"> <?php echo $rowes[1];?> </h4>
										 	</div>
									  <div class="fo"> Speciality : <span style="font-size: 28px; font-weight: bolder;"> <?php echo $rowes[3];?> </span> 
									  </div>
									 <div class="fo"> About <b> <?php echo $rowes[1];?> </b> : <span> <?php echo $rowes[2];?> </span>
									 </div>
									 </div>
									 <div class="col-sm-1">
									 	
									 </div>
									</div>
									<br>
									<br>
									<div class="row" >
										<div class="col-sm-12">
									 		<h4>Packages</h4>
									 	</div>
										
									</div>
										<div class="row" style="color: gray !important;"  align="center">
										<div class="col-md-11 col-md-offset-1" >
												<h5>Basic</h5>
												<br>
												<?php
											 $basicpackage = mysql_query(" SELECT `packagename`,`detail`,`price`, `per` FROM `package` WHERE organizer_email='$email' and status='basic' ")or die(' basic package selection query error');
											 if(mysql_num_rows($basicpackage)>0){
                                              	 while($basicrw=mysql_fetch_array($basicpackage))
											{

											 ?>
											<div class="col-sm-4" style="padding-top: 20px;padding-bottom: 20px;">	
												<div class="package-div ">
													<div class="package-header"><?php echo $basicrw[0];?></div>
														<div class=""><?php echo $basicrw[1];?></div>
															<div class="price-charge-div">
																<span><?php echo $basicrw[2];?> </span> : <span> <?php echo $basicrw[3];?></span>
															</div>
															<br>
															 
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
										<div class=" row"  style="color: gray !important;">
											<div class="col-sm-11 col-md-offset-1" align="center">
												<h5>Standard</h5>
												<br>
												<?php
											 $standardpackage = mysql_query(" SELECT `packagename`,`detail`,`price`, `per` FROM `package` WHERE organizer_email='$email' and status='standard'")or die('standard package selection query error');
 
                                              if(mysql_num_rows($standardpackage)>0){
                                              	 while($standardrw=mysql_fetch_array($standardpackage))
											{

                                              	?>
												<div class="col-sm-4" style="padding-top: 20px;padding-bottom: 20px;">
													<div class="package-div"  >
														<div class="package-header"><?php echo $standardrw[0];?></div>
															<div class=""><?php echo $standardrw[1];?></div>
																<div  class="price-charge-div" style="">
																	<span><?php echo $standardrw[2];?></span> : <span> <?php echo $standardrw[3];?></span>
																</div>
																<br>
															 
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
										<div class="row"  style="color: gray !important;" align="center">
											<div class="col-md-11 col-md-offset-1" >
													<h5>Premium</h5>
													<br>
													<?php
											 $premiumpackage = mysql_query(" SELECT `packagename`,`detail`,`price`, `per` FROM `package` WHERE organizer_email='$email' and status='premium' ")or die('standard package selection query error');
 
                                              if(mysql_num_rows($premiumpackage)>0){
                                              	 while($premiumrw=mysql_fetch_array($premiumpackage))
											{

                                              	?>
												<div class="col-sm-4" style="padding-top: 20px;padding-bottom: 20px;">
													<div class="package-div">
														<div class="package-header"><?php echo $premiumrw[0];?></div>
														<div class=""><?php echo $premiumrw[1];?></div>
															<div class="price-charge-div">
																<span><?php echo $premiumrw[2];?> </span> : <span> <?php echo $premiumrw[3];?></span>
															</div>
															<br>
															 
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
									<br>
									
							</div>
							

								</div>

									<div class="row" align="center">
										<div class="col-md-12" >
											<h3 style="color:#307C94">Offer's Also </h3>
										</div>
										<div class="col-md-10 col-md-offset-1" style="color:gray">
										<?php
											 $item = mysql_query(" SELECT `itemname`,`quantity`,`charge`, `rate` FROM `item` WHERE organizer_email='$email'")or die('item selection query error');
 
                                              if(mysql_num_rows($item)>0){
                                              
											?>
											<table align="center" class="table-condensed">
												<tbody>
													<tr  align="center" style="font-weight: bolder; color:gray !important; ">
														 <td> Items</td> <td> Quantity </td> <td>Charge</td> <td>Rate</td> 
													</tr>
													<?php
												 while($rw=mysql_fetch_array($item))
											{

												?>
													<tr  align="center">
														 <td> <?php echo $rw[0];?> </td>
														  <td> <?php echo $rw[1];?> </td>
														   <td><?php echo $rw[2];?></td>
														    <td><?php echo $rw[3];?> </td>
										 
													</tr>

													<?php
											}
												?> 
												</tbody>
											</table>
											<?php
											  }
											  else{
												echo "NO Item register Yet!";  
											  }
											?>
										</div>
									</div>
 									<?php
 								}
 								?>
							  </section><!-- section two end-->
								</div>
							
							 
							 			
										
						
 
				<!-- Footer -->
						<section id="footer">
						<div class="container">
							<div >
								 <span style="float: right;">CopyRight &copy; 2017</span> 
							</div>
						</div>
						
           
					</section>
					</div><!--main end-->

			</div>

			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.rateyo.min.js"></script>

		<!-- Scripts -->
			


			<script src="assets/js/bootstrap.min.js"></script>
			<script src="assets/js/jquery.scrollzer.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>