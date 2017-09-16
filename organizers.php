<!DOCTYPE html>
<?php
session_start();
?>
<html>
<head>

	<title>organizers</title>

<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/styling1.css">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">


<link href='https://fonts.googleapis.com/css?family=BioRhyme Expanded' rel='stylesheet'>
<link href='https://fonts.googleapis.com/css?family=BenchNine' rel='stylesheet'>

<link rel="stylesheet" type="text/css" href="css/animate.css">

<script type="text/javascript" src="js/jquery.js"></script>
   <script type="text/javascript" src="js/bootstrap.min.js"></script>

<style type="text/css">
#searching-people{
	border-style: inset;
	padding: 5px;
	 background-image: url('http://www.businessinsider.com/assets/images/logos/BI.png');
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

::-webkit-input-placeholder{
	
	font-family: 'BenchNine';
}
 .form-control::placeholder{
	font-family: 'BenchNine';
	}

.organizer-div{
	border-style: outset;
	padding-bottom: 5px;
	border-radius: 4px;

  background-color:   #F0F8FF;
 
  box-shadow: 10px 15px 5px gray;
}
.organizer-image{
	width: 120px;
	height: 100px;
}
.organizer-image img{
	width: 100%;
	height: 100%;
}
.org-search{
	font-size: 12px;

}
.org-col4{
	border-right: 2px dashed #307C94;
	border-bottom: 2px dashed #307C94;
}
#searching-people a:hover{
	text-decoration: none;
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

      	
        <li><a href="home.php">Home <span class="sr-only">(current)</span></a></li>
        <li ><a href="explore.php">Explore</a></li>
        <li class="active"><a href="#">Organizer's</a></li>
  <li class=" pro-img"><a><span class="glyphicon glyphicon-plus">   </span> </a>  </li>
</ul><?php
$con=mysql_connect("localhost","root", "") or die("database connectivity error");
                            mysql_select_db("ema",$con);
							$date= Date('20y-m-d');
								$name_joindate=mysql_query("select fristname ,lastname,joindate,profile_picture from user where email='$_SESSION[email]' ") or die('name and join date query error');
								$data=mysql_fetch_array($name_joindate); 
                      
			 
			 
			 ?>
         <div id="show" class="color"  >
							
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
		<div id="top-rated">
  		  		<h4> Suggestion  </h4>
  				<hr>
  				<div class="well" style="width: 100%; height: 300px">
  					View the organizer profile 
  				</div>
  				 

		</div>
		<br>		
		
	</div>

	<div class="col-md-6"> 
	<?php
  $con=mysql_connect("localhost","root","") or die(' connection query error');
 $db=mysql_select_db('ema',$con) or die('database selection  query error');
   $query=mysql_query(" select user.fristname,user.lastname,organizer.organizer_email,organizer.companyname,organizer.special,organizer.country,organizer.city,user.profile_picture from user JOIN organizer   where user.email=organizer.organizer_email  ") or die('user table selection query error');
 
if(mysql_num_rows($query)>0){
	   
	?>
    
		  <?php
		  while($rows=mysql_fetch_array($query)){
		  ?>
		   <div class="row"> 
           <div class="col-md-10 col-md-offset-1">
			<div class="organizer-div" align="center">
					<h4 style="color:#307C94 !important;"><?php echo $rows[4];?></h4>
				<div class="organizer-image">
					<img src="profile_pictures/<?php echo $rows[7];?>" class="img-circle">
				</div>
				<b style="font-size: 18px; font-weight: bolder;"><?php echo $rows[0];echo " ".$rows[1];?></b> <br>
				<span style="font-size: 16px;"><?php echo $rows[3];?></span> <br>
				<span style="color:#307C94 !important;">From : </span> <span><?php echo $rows[6];?></span> <br> <span><?php echo $rows[5];?></span> <br>
				 <a href="searchprofile.php?individualemail=<?php echo $rows[2];?>&&page=<?php echo "organizers.php";?>"><button class="btn btn-info" title="Organizer Profile" style="font-size: 14px; width: 140px;">View Profile</button></a>
			</div>
		</div>
		</div>
		<hr>

      <?php
		  }
		   }
else{
	?>
	<p><font size="5" color="gray">
	<center> No organizer currently register...</center>
	</font>
	</p>
<?php
	}
	?>
    </div>
	 
		 
 
		<div class="col-md-4">
		<h4>Search by professionals</h4>
		<hr>
		 <div id="searching-people">
		<form method="post" name="searchform"  onsubmit=" return validatedata();">
			 
<div class="input-group" style="z-index: 0; margin: 5px;">
     			<input type="text" class="form-control" name="searchorg" oninput="namevalidat();" placeholder="Search professionals..." id="name">
      				<span class="input-group-btn">
        				<button class="btn btn-default" name="searchbtn" title="Search" type="submit">Go</button>
      				</span>
    		</div><!-- /input-group -->
    		<span id="nameerror"></span><span id="namesuccess"></span>
    		</form>
    		<br>
    		<?php
      				if(isset($_POST['searchbtn'])){
      					$names=$_POST['searchorg'];
      					$queryname=mysql_query("SELECT user.fristname,user.lastname,user.email,organizer.companyname,user.profile_picture FROM `user`join organizer WHERE user.email=organizer.organizer_email and organizer.special like '$names%'")or die('name selection error in queryname');
      					if(mysql_num_rows($queryname)>0){
      						while($peoplename=mysql_fetch_array($queryname)){

 								 
										?>
										<a href="#">
										<div class="row org-search">
										<div class="col-sm-4 col-sm-offset-1 org-col4" align="center" >
											<div style="width: 70px; height: 70px;" align="center">
										 <img src="profile_pictures/<?php echo $peoplename[4];?>" style="width: 100%; height: 100%" class="img-responsive img-circle">
										 </div>
										 		<?php

										 echo "<span>"."Speciality"."</span>". "<br>";
											echo "<i style=color:black !important;>". $peoplename[3]."</i>"."<br>";
											?>
										 
										</div>
										<div class="col-sm-6" style="border-bottom: 2px dashed #307C94;" >
											<?php

										 echo 
											"<i style=color:#307C94 !important;>"."<b>". $peoplename[0]." ".$peoplename[1]."</b>"."</i>"."<br>";
											?>
											<span>From</span>&nbsp; &nbsp; &nbsp; <span style="color:black !important;"> City</span> , <span style="color:black !important;">Country</span> <br> <br>
											
											 <a href="searchprofile.php?individualemail=<?php echo $peoplename[2];?>">Click to view profile</a>
										</div>
											</div>
											</a>
											<hr>

								<?php
      						}

      					}
      					else{
      						echo "No result found..!";
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

  		</div ><!-- /.col-md-4-->
  		</div>
	</div>
	</div>
	 

</section>

<!--,,,,,,,,,,,,,,,, Footer End ,,,,,,,,,,,,,,,,,,, -->
<!--,,,,,,,,,,,,,,,, Footer End ,,,,,,,,,,,,,,,,,,, -->
 



<script type="text/javascript">
				
				$('.pro-img').click(function() {
				$(this).next().slideToggle('500');
			$(this).find('span').toggleClass('glyphicon-plus glyphicon-minus');
			$('#show').css('visibility', ($('#show').css('visibility') != 'hidden') ? 'visible' : 'hidden').slideToggle("fast");
    
    
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