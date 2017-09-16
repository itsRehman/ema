<!DOCTYPE HTML>
<?php
session_start();
?>

<html>
	<head>
		<title>Company details</title> 
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
	left: 160px;
	position: relative;
	z-index: 2;
	}
	.caret2{
   font-size: 18px;
   color: #AAAAAA;
	top: -35px;
	left: 410px;
	position: relative;
	z-index: 2;
	}

	.package-div{
		width: 160px;
		height: auto;
		background-color:  	#F0F8FF;
		padding: 6px;
	}
	.package-description{
		padding: 
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
.pkg-btn-div .btn{
	width: 70px;
	font-size: 13px;
}
#packageerror{
 color:red;
 font-size:90%; !important;
 }
 #packagesuccess{
 color:green;
 font-size:90%; !important;
 }
 #itemerror{
 color:red;
 font-size:90%; !important;
 }
 #itemsuccess{
 color:green;
 font-size:90%; !important;
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
						<li><a href="#one" class="active"> Org Details</a></li>
						<li><a href="#two">Add Package / Items </a></li>
						<li><a href="#four">Contact EMA</a></li>
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
												
												<li><a href="create-event.php">Create Event</a></li>
												<li><a href="as-organizer.php">As Organizer</a></li>
												<li><a href="home.php" title="Home" style="text-decoration: none !important;"><i class="fa fa-home fa-2x" aria-hidden="true"></i></a></li>
												
											</ul>
										
									</div>
								</div>
								</div>	
							</header> <!-- End of header div -->	


							<div class="row">
<?php
							 
							$companyinfo = mysql_query("  SELECT * FROM `organizer` WHERE organizer_email='$_SESSION[email]'") or die(' company selection query error');

                              if(mysql_num_rows($companyinfo)>0){
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
											<a href="upload_company_logo.php">	<button class="btn btn-success" style="width: 120px;" align="center"> Update Logo </button></a>	&nbsp; <a href="receiveorder.php"><button class="btn btn-info" style="width: 25px;" title="Orders"> <span class="fa fa-bell"></span> </button>
											<?php
						$notify=mysql_query("SELECT COUNT(state) from ema.order where  organizer_email='$_SESSION[email]' AND state='new' ") or die(' order selection query error');
						if(mysql_num_rows($notify)>0){
							$note=mysql_fetch_array($notify);
					if($note[0]>0){
							?>

    					 <span class="badge badge-notify order-notify"><?php echo $note[0];?></span>
						<?php
					}
						}
						else {
							 
						}
						?>
											 </a>
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
													  <div class="col-md-12">
													  	<div class="well">
													  		No reviews 
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
											 $basicpackage = mysql_query(" SELECT `packagename`,`detail`,`price`, `per` FROM `package` WHERE organizer_email='$_SESSION[email]' and status='basic' ")or die(' basic package selection query error');
											 if(mysql_num_rows($basicpackage)>0){
                                              	 while($basicrw=mysql_fetch_array($basicpackage))
											{

											 ?>
											<div class="col-sm-4" style="padding-top: 20px;padding-bottom: 20px;">	
												<div class="package-div ">
													<div class="package-header"><?php echo $basicrw[0];?></div>
														<div class="package-description"><?php echo $basicrw[1];?></div>
															<div class="price-charge-div">
																<span><?php echo $basicrw[2];?> </span> : <span> <?php echo $basicrw[3];?></span>
															</div>
															<br>
															<div class="pkg-btn-div">
															 <a href="update_package.php?packagename=<?php echo $basicrw[0];?>&&status=basic" onclick="return window.confirm('are you sure to Edit')">
															<button class="btn btn-info">Update</button> </a>
															<a href="delete_package.php?packagename=<?php echo  $basicrw[0];?>&&status=basic " onclick="return window.confirm('are you sure to update')">
															<button class="btn btn-danger">Delete</button></a>
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
										<div class=" row"  style="color: gray !important;">
											<div class="col-sm-11 col-md-offset-1" align="center">
												<h5>Standard</h5>
												<br>
												<?php
											 $standardpackage = mysql_query(" SELECT `packagename`,`detail`,`price`, `per` FROM `package` WHERE organizer_email='$_SESSION[email]' and status='standard'")or die('standard package selection query error');
 
                                              if(mysql_num_rows($standardpackage)>0){
                                              	 while($standardrw=mysql_fetch_array($standardpackage))
											{

                                              	?>
												<div class="col-sm-4" style="padding-top: 20px;padding-bottom: 20px;">
													<div class="package-div"  >
														<div class="package-header"><?php echo $standardrw[0];?></div>
															<div class="package-description"><?php echo $standardrw[1];?></div>
																<div  class="price-charge-div" style="">
																	<span><?php echo $standardrw[2];?></span> : <span> <?php echo $standardrw[3];?></span>
																</div>
																<br>
															<div class="pkg-btn-div"><a href="update_package.php?packagename=<?php echo $standardrw[0];?>&&status=standard" onclick="return window.confirm('are you sure to Edit')">
															<button class="btn btn-info">Update</button> </a>
															<a href="delete_package.php?packagename=<?php echo $standardrw[0];?>&&status=standard" onclick="return window.confirm('are you sure to update')">
															<button class="btn btn-danger">Delete</button></a>
															</div>
													</div>
												</div>
												<?php
										}
									}
												else{
										echo "No standard package Register!";
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
											 $premiumpackage = mysql_query(" SELECT `packagename`,`detail`,`price`, `per` FROM `package` WHERE organizer_email='$_SESSION[email]' and status='premium' ")or die('standard package selection query error');
 
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
															<div class="pkg-btn-div">
															 <a href="update_package.php?packagename=<?php echo $premiumrw[0];?>&&status=premium" onclick="return window.confirm('are you sure to Edit')">
															<button class="btn btn-info">Update</button> </a>
															<a href="delete_package.php?packagename=<?php echo $premiumrw[0];?>&&status=premium" onclick="return window.confirm('are you sure to update')">
															<button class="btn btn-danger">Delete</button></a>
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
									<br>
									
							</div>
							

								</div>
								<div class="row" align="center">
										<div class="col-md-12" >
											<h3 style="color:#307C94">Offer's Also </h3>
										</div>
										<div class="col-md-10 col-md-offset-1 table-responsive" style="color:gray">
										<?php
											 $item = mysql_query(" SELECT `itemname`,`quantity`,`charge`, `rate` FROM `item` WHERE organizer_email='$_SESSION[email]'")or die('item selection query error');
 
                                              if(mysql_num_rows($item)>0){
                                              
											?>
											<table align="center" class="table table-hover">
												<tbody>
													<tr  align="center" style="font-weight: bolder; color:gray !important; ">
														 <td> Items</td> <td> Quantity </td> <td>Charge</td> <td>Rate</td><td></td>
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
														 <td>
									<div ">
										<a href="update_item.php?itemname=<?php echo $rw[0];?>" onclick="return window.confirm('Are you sure to Update item')"><button class="btn btn-info" style="font-size: 10px; " >Update</button></a>
										<a href="delete_item.php?itemname=<?php echo $rw[0];?> " onclick="return window.confirm('Are you sure to Delete item ?')"><button class="btn btn-danger" style="font-size: 10px;">Delete</button></a>	
												
											
									</div>
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
												echo "NO Item register Yet!";  
											  }
											?>
										</div>
									</div>



							</section> <!-- section one end -->

						<!-- Two -->
							<section id="two">

							<br>
								<div class="container">
									<h3 class="fo">Add your package</h3>
									<form name="addservice" method="post" onsubmit=" return validatedata();" class="form-group " action="addpackages.php">
										<div class="row" align="center">
											
												<label class="col-md-2">Basic</label>
												<div class="col-md-2"> 
													<input type="radio" id="basic" name="status" value="basic">
											</div>

												<label class="col-md-2">Standard</label>
												<div class="col-md-2"> 
													<input type="radio" id="standard" name="status" value="standard">
											</div>
											
												<label class="col-md-2">Premium</label>
												<div class="col-md-2"> 
													<input type="radio" id="premium" name="status" value="premium">
											</div>
										</div>
										<br>
										<div class="row" align="center">
											
												<label for="packagename" class="col-md-3"> Package Name </label> 
												<div class="col-md-8">
													<input type="text" id=packname class="form-control" name="packagename" oninput="packagevalidat();"><span id="packageerror"></span><span id="packagesuccess"></span>
											</div>
										</div>
										<br>
										<div class="row" align="center">
											
												<label for="detail" class="col-md-3"> Package Details </label>
												<div class="col-md-8">
												<input type="text" id="details" class="form-control" name="detail">
											</div>
										</div>
										<br>
										<div class="row" align="center">
											<div class="col-sm-6">
											
												<label for="price" class="col-md-4"> Price </label>
												<div class="col-md-6 col-md-offset-2">
												<input type="text"  id="rs" class="form-control"  name="price">
												</div>
											</div>
											<div class="col-sm-5">
												<select id="charge" name="per" class="form-control">
        										<option value=""> Charge 
        										 </option>
        										<option value="per hour">Per Hour</option>
        										<option value="per day">Per Day</option>
        										<option value="per event">Per Event</option>
												<option value="per head">Per Head</option>
        										</select>
        										 <i class="fa fa-caret-down" aria-hidden="true"></i>
											</div>
										</div>
								</div>
								<button class="btn btn-success" name="add" type="submit" title="Add package" style="margin-left: 765px; width: 200px; letter-spacing: 2px">+ Add</button>
								</form>
								<br>

								<div class="container">

										<h3 class="fo">Add Items list</h3>
										<p style="font-weight: bolder; font-size: 16px;"> Just be more specific about your services </p>

									<form class="form-group input_fields_wrap" method="post" name="additem" onsubmit=" return itemvalidatedata();" action="additem.php">
										<div class="row">
											
												<label for="Itemname" class="col-md-2"> Item name </label> 
												<div class="col-md-4">
													<input type="text" id="item" class="form-control" name="itemname" oninput="itemvalidat();"><span id="itemerror"></span><span id="itemsuccess"></span>
											</div>
											<label for="quantity" class="col-md-2"> Quantity </label> 
												<div class="col-md-3">
													<input type="number" id="howmutch" class="form-control" name="quantity">
											</div>
										</div>
										<br>
										<div class="row">

											<div class="col-md-6">
												<select id="wayofcharge" name="charge" class="form-control">
        										<option value=""> Charge's
        										</option>
        										<option value="price">Price</option>
        										<option value="rent">Rent</option>
        										</select>
        										 <i class="fa fa-caret-down caret2" aria-hidden="true"></i>
											</div>

											<label for="price" class="col-md-2"> Item rate </label> 
												<div class="col-md-3">
													<input type="number" id="itemrat" class="form-control" name="rate">
											</div>
										</div>
										<button class="btn btn-success" name="additem" type="submit" style="margin-left: 630px; width: 200px; letter-spacing: 2px">Insert Item</button>
									</form>
									
								</div>
							</section> <!-- section two end -->
							 
						<!-- Three -->
							
								<?php 
							  }
							  else{
								  ?>

							 	<div class="row" > 
							 		<div class="col-md-12">
							 			<div class="well not-organizer">
							 				You are not organizar on our site 
							 			</div>
							 		</div>
							 	</div>
								<?php 
								 					
							  }
							?>
								 
							</section><!-- section three end-->
							 
							 

						<!-- Four -->
							<section id="four">
								<div class="container">
									 <h4 style="color:#286E88; font-family: 'BioRhyme Expanded'; ">Improve EMA  </h4>
                  <p style="color:#286E88;  font-family: 'BioRhyme Expanded'; ">Let's do it </p>
									<form method="post" class="form-group" action="suggestion.php">
										
										<div class="row uniform">
											<div class="12u"> <input type="text" name="subject" id="subject" class="form-control" placeholder="A short title" /></div>
										</div>
										<div class="row uniform">
											<div class="12u"><textarea name="suggestion" id="message" class="form-control" placeholder="Write suggestion" rows="6"></textarea></div>
										</div>
										<div class="row uniform">
											<div class="12u">
												<ul class="actions">
													<li><input type="submit" class="btn special" name="sendsuggestion" value="Send Suggestion" style="width: 200px; letter-spacing: 2px ; margin-left: 700px;" /></li>
												</ul>
												 <input type="hidden" name="fpage" value="comp-details.php"
											</div>
										</div>
									</form>
								</div>
							</section> <!-- section four end -->

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

			<script type="text/javascript"> 

//validation for package name
 function packagevalidat(){
		var titleReg = /^[A-Za-z ]+$/;
      var packname = $('#packname').val();
	  var massage = "";
	  if(titleReg.test(packname)){
	  massage= " package name is valid";
            $("#packagesuccess").html(massage); 
			  $("#packageerror").html(''); 
			  
        }
		if(!titleReg.test(packname)){
	  massage= "package name is invalid";
            $("#packageerror").html(massage); 
			 $("#packagesuccess").html(''); 
			  
        }
		if(packname==""){
	 $("#packageerror").html(''); 
	 $("#packagesuccess").html('');
	  
	 }
	   
	  }

//validation for item name
 function itemvalidat(){
		var titleReg = /^[A-Za-z ]+$/;
      var item = $('#item').val();
	  var massage = "";
	  if(titleReg.test(item)){
	  massage= " item name is valid";
            $("#itemsuccess").html(massage); 
			  $("#itemerror").html(''); 
			  
        }
		if(!titleReg.test(item)){
	  massage= "item name is invalid";
            $("#itemerror").html(massage); 
			 $("#itemsuccess").html(''); 
			  
        }
		if(item==""){
	 $("#itemerror").html(''); 
	 $("#itemsuccess").html('');
	  
	 }
	   
	  }
	  </script>
	  <script type="text/javascript">
	  	
	  	//validate form on submition

   function validatedata(){ 
   var basic = document.getElementById('basic').checked;
    var standard = document.getElementById('standard').checked;
   var premium = document.getElementById('premium').checked;
   var packname = document.getElementById('packname').value;
   var details = document.getElementById('details').value;
   var rs = document.getElementById('rs').value;
    var charge = document.getElementById('charge').value;
    
     
	  var eventtitleReg = /^[A-Za-z ]+$/;
	  var priceReg = /^[0-9]+$/;
    
		if(basic==false && standard==false && premium==false){
	   
            
			alert(' Select one type of package from basic,standard,premium ');
			return false;
        }
		  if(packname==""){
	   
            
			alert(' package name is required');
			return false;
        } 
		if(details==""){
	   
            
			alert(' details about package is required');
			return false;
        } 
		 if(rs==""){
	   
            
			alert(' price of package  is required');
			return false;
        }
        if (rs<=0){
        	alert('  package  price will be greater 0 ');
			return false;
        }
		 if(charge==""){
	   
            
			alert(' charging type  is required');
			return false;
        }
		 
	if(!packname.match(eventtitleReg)){
		alert('package neme  formate is invalid');
	   return false;
             
	}
	if(!rs.match(priceReg)){
		alert('package price  formate is invalid');
	   return false;
             
	}
	 
         
		 else{
		 return true;
		 } 
	   
	  }
    
	  </script>
	  <script type="text/javascript">
	  	
	  	//validate form on submition

   function itemvalidatedata(){ 
   var item = document.getElementById('item').value;
    var howmutch = document.getElementById('howmutch').value;
   var wayofcharge = document.getElementById('wayofcharge').value;
   var itemrat = document.getElementById('itemrat').value;
    
    
     
	  var eventtitleReg = /^[A-Za-z ]+$/;
	  var ratReg = /^[0-9]+$/;
     
		  if(item==""){
	   
            
			alert(' item name is required');
			return false;
        } 
		if(howmutch==""){
	   
            
			alert('quantity is required');
			return false;
        } 
		 if(wayofcharge==""){
	   
            
			alert(' way of charging   is required');
			return false;
        }
		 if(itemrat==""){
	   
            
			alert(' price of item  is required');
			return false;
        }
        if(!item.match(eventtitleReg)){
		alert('item neme  formate is invalid');
	   return false;
             
	}
        if(itemrat<=0){
	   
            
			alert(' Rat of item will be greater then 0 ');
			return false;
        }
        if(howmutch<=0){
	   
            
			alert(' quantity of item will be greater then 0 ');
			return false;
        }
		 
	 
	if(!itemrat.match(ratReg)){
		alert('item price  formate is invalid');
	   return false;
             
	}
	if(!howmutch.match(ratReg)){
		alert('item quantity  formate is invalid');
	   return false;
             
	}
	 
         
		 else{
		 return true;
		 } 
	   
	  }
    
	  </script>

	</body>
</html>