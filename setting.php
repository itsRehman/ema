<!DOCTYPE html>
<?php
session_start();
?>
<html>
<head>

	<title>Setting</title>

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
   background-image: url('http://www.dudaite.com/i/2016/12/3d-speech-bubble-vector-wallpapers-desktop-background.png');
   background-size: cover;
   opacity: .8;
}
 
.td1{
 font-family: 'Benchnine';
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
                     

                      <a href="setting.php"><button class="btn btn-info" title="Settings" style="visibility: hidden;" id="setting-btn"><i class="fa fa-cogs" aria-hidden="true"></i></button></a>
                     
                 
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
  <div class="col-md-1"></div>

		<div class="col-md-8"> 
		 <?php
	 $con=mysql_connect("localhost","root","") or die(' connection query error');
 $db=mysql_select_db('ema',$con) or die('database selection  query error');
   $query=mysql_query("select * from user where email='$_SESSION[email]'") or die('user table selection query error');
  
  if(mysql_num_rows($query)>0){
	  while($rows=mysql_fetch_array($query)){
		  ?>
    <h3 align="center" style=""> Personal Information</h3>
    <br>
    <div class="row">
      <div class="col-md-12 table-responsive td1">
        <table class="table table-hover">
          <tbody>
            <tr class="bg-info">
              <td>First Name</td>
              <td><?php echo $rows[0];?></td>
              
            </tr>
          
            <tr>
              <td>Last Name</td>
        <td><?php echo $rows[1];?></td>
      </tr>
       
      <tr>
              <td>Email</td>
        <td><?php echo $rows[3];?></td>
      </tr>
      <tr>
              <td>Password</td>
        <td><?php echo $rows[4];?></td>
      </tr>
      <tr>
              <td>Gender</td>
        <td><?php echo $rows[5];?></td>
      </tr>
      <tr>
              <td>Date Of Birth</td>
        <td><?php echo $rows[6];?></td>
      </tr>
      <tr>
              <td></td>
         <td><a href="update_setting.php"><button class="btn btn-info"  style="float: right;">Update</button></a></td>
      </tr>
      
    </tbody>
  </table>
  <br>
  <br>
  </div>
  </div>

  <br>
  <?php
	  }
	  }
	  $run=mysql_query("select * from organizer where organizer_email='$_SESSION[email]'") or die(' selection query error');
  
  if(mysql_num_rows($run)>0){
	  ?>
  <div class="row">
      <div class="col-md-12 table-responsive">
	   
  <h3 align="center"> Company Information</h3>
  <table class="table table-hover td1">
  <?php
	  while($row=mysql_fetch_array($run)){
		  ?>
          <tbody>
            <tr class="bg-info">
              <td>Company Name </td>
              <td><?php echo $row[1];?></td>
              
            </tr>
          
		  <tr>
              <td>About</td>
        <td><?php echo $row[2];?></td>
      </tr>
       <tr>
              <td>Speciality</td>
        <td><?php echo $row[3];?></td>
      </tr>
            <tr>
              <td>Country</td>
        <td><?php echo $row[4];?></td>
      </tr>
	  <tr>
              <td>City</td>
        <td><?php echo $row[5];?></td>
      </tr>
      <tr>
              <td>Address</td>
        <td><?php echo $row[6];?></td>
      </tr>
	  <?php
	  }
  
  ?>
     
      
      <tr>
              <td></td>
        <td><a href="update_companyinfo.php"><button class="btn btn-info" style="float: right;">Update</button></a></td>
      </tr>
      
    </tbody>
  </table>
      </div>
    </div>
	<?php
				}
  ?>
		</div>
    <div class="col-md-3">
    <br>
    <br>
    <br>
    <br>
    <br>
      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSUu1a03mdXQS6jT9G4hhWYlX1sGx_4xLv6kIlW8AtgtFF71JDM9g" style="margin-left: 70px;">

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
     <img src="https://sotis.ru/netcat_files/userfiles/proizvodstvo/icons/icon_production.png" style="margin-left: 100px; width: 60%;
     height: 30%;">
    </div>
	


		</div>
	</div>


</section>
<!--,,,,,,,,,,,,,,,, Footer End ,,,,,,,,,,,,,,,,,,, -->
<!--,,,,,,,,,,,,,,,, Footer End ,,,,,,,,,,,,,,,,,,, -->


<section id="footer">
						<div class="container-fluid">
							
								  <span style="float: right;">CopyRight &copy; 2017</span> 
						</div>
</section>




<script type="text/javascript">
        
        $('.pro-img').click(function() {
        $(this).next().slideToggle('500');
      $(this).find('span').toggleClass('glyphicon-plus glyphicon-minus');
      $('#show').css('visibility', ($('#show').css('visibility') != 'hidden') ? 'visible' : 'hidden').slideToggle("fast");
    
    
});

      </script>




</body>
</html>