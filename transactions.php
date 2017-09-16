<!DOCTYPE html>
<?php
session_start();
?>
<html>
<head>

	<title>transactions page</title>

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

.earning-div{
	width: 200px;
	height: 200px;
	border: 2px solid #307C94;
	border-radius: 100%;
}
.earning-div p{
	position: relative;
	font-size: 24px;
	font-weight: bolder;
	top: 70px;
}
#feed h3{
	color: #307C94;
	font-weight: bolder;
	font-size: 20px;
    font-family: 'BioRhyme Expanded';
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
								 
                      
			 
			 
         <div id="show" class="color" style="overflow: hidden;">
							
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
	<div class="container">
		<div class="row">
			<div class="col-md-4" align="center">
				<h3>Total Earning</h3>
				<div class="earning-div">
					<p>120</p>
				</div>
			</div>

			<div class="col-md-4" align="center">
				<h3>Pending Balance</h3>
				<div class="earning-div">
					<p>720</p>
				</div>
			</div>

			<div class="col-md-4" align="center">
				<h3>Available Balance</h3>
				<div class="earning-div">
					<p>420</p>
				</div>
				<br>
					<button class="btn btn-success">Tranfere to Bank</button>
			</div>
		</div>
		<br>
		<div class="row" align="center">
			<div class="col-md-12">
				<h3>Payment History</h3>
				<table class="table table-hover">
					<tbody>
						<tr>
							<th>
								Title
							</th>
							<th>Type</th>
							<th>
								Amount
							</th>	
						</tr>
					
						<tr>
							<td>
								<p>Payment made for "Abbas Weddings" is cleared.
							</td>
							<td>Organizer's Event</td>
							<td>
								<p>940</p>
							</td>
						</tr>
						<tr style="color: darkgreen;">
							<td>
								<p>Payment made for "Abbas Weddings" is cleared.
							</td>
							<td>Ticket</td>
							<td>
								<p>940</p>
							</td>
						</tr>
						<tr style="color: darkgreen;">
							<td>
								<p>Payment made for "Abbas Weddings" is cleared.
							</td>
							<td>Ticket</td>
							<td>
								<p>940</p>
							</td>
						</tr>
						<tr style="color: darkgreen;">
							<td>
								<p>Payment made for "Abbas Weddings" is cleared.
							</td>
							<td>Ticket</td>
							<td>
								<p>940</p>
							</td>
						</tr>
						<tr style="color: darkgreen;">
							<td>
								<p>Payment made for "Abbas Weddings" is cleared.
							</td>
							<td>Ticket</td>
							<td>
								<p>940</p>
							</td>
						</tr>
						<tr style="color: darkgreen;">
							<td>
								<p>Payment made for "Abbas Weddings" is cleared.
							</td>
							<td>Ticket</td>
							<td>
								<p>940</p>
							</td>
						</tr>

					</tbody>
				</table>
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