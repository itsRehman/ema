 <!DOCTYPE html>
<?php
session_start();
?>
<html>
<head>

	<title>update company info</title>

<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/styling1.css">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

<link rel="stylesheet" type="text/css" href="css/animate.css">

<script type="text/javascript" src="js/jquery.js"></script>
   <script type="text/javascript" src="js/bootstrap.min.js"></script>



<link href='https://fonts.googleapis.com/css?family=BioRhyme Expanded' rel='stylesheet'>
<link href='https://fonts.googleapis.com/css?family=BenchNine' rel='stylesheet'>


<style type="text/css">

	h3{ 
    color:#307C94;
	}
		 
}

#companynameerror{
 color:red;
 font-size:90%; !important;
 }
 #companynamesuccess{
 color:green;
 font-size:90%; !important;
 }
   
    #specialityerror{
 color:red;
 font-size:90%; !important;
 }
 #specialitysuccess{
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
        <li><a href="explore.php">Explore</a></li>
        <li><a href="organizers.php">Organizer's</a></li>
        <li><a href="setting.php">Settings</a></li> 
</ul> 
          
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<!--,,,,,,,,,,,,,, navbar end ,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,, -->

<section id="feed">
	<div class="container">
	<div class="col-md-2"></div>
	 <div class="col-md-8 well"> 
		 <?php
	 $con=mysql_connect("localhost","root","") or die(' connection query error');
 $db=mysql_select_db('ema',$con) or die('database selection  query error');
    $run=mysql_query("select * from organizer where organizer_email='$_SESSION[email]'") or die(' selection query error');
  
  if(mysql_num_rows($run)>0){
	  ?>
  <div class="row">
      <div class="col-md-12 table-responsive">
	   
  <h3 align="center" style=""> Company Information</h3>
  <table class="table table-striped">
  <?php
	  $row=mysql_fetch_array($run)
		  ?>
          <tbody>
		  <form method="post" action="" name="companyinfo" onsubmit=" return validatedata();">
            <tr>
              <td>Company Name </td>
              <td><input type="text" name="companyname" value="<?php echo $row[1];?>" required id="comp" oninput="companynamevalidat();"><span id="companynameerror"></span><span id="companynamesuccess"></span></td>
              
            </tr>
		  <tr>
              <td>About</td>
        <td><textarea  rows="4" name="about" required id="abt"><?php echo $row[2];?></textarea></td>
      </tr>
       <tr>
              <td>Speciality</td>
        <td><input type="text" name="special" required id="special" value="<?php echo $row[3];?>" oninput="specialityvalidat();" ><span id="specialityerror"></span><span id="specialitysuccess"></span></td>
      </tr>
            <tr>
              <td>Country</td>
        <td>
		<select name="country" required id="countryname">
		<option value="<?php echo $row[4];?>"><?php echo $row[4];?></option>
		<option value="pakistan">Pakistan</option>
		<option value="india">India</option>
		<option value="USA">USA</option>
		</select>
		</td>
      </tr>
	  <tr>
              <td>City</td>
        <td> 
		<select name="city" required id="cityname">
		<option value="<?php echo $row[5];?>"><?php echo $row[5];?></option>
		<option value="lahor">Lahor</option>
		<option value="swat">Swat</option>
		<option value="peshawar">Peshawar</option>
		<option value="washingtan">Washingtan</option>
		<option value="banglor">Banglor</option>
		</select>
		</td>
      </tr>
      <tr>
              <td>Address</td>
        <td> <input type="text" name="address" value="<?php echo $row[6];?>" required id="add"></td>
      </tr>
	  <?php
	  }
  
  ?>
     
      
      <tr>
              <td></td>
        <td><button type="submit" name="update" class=updatebtn btn-info" style="float: right;">Update</button></td>
      </tr>
      </form>
    </tbody>
  </table>
      </div>
    </div>
	
      </div>
	  <div class="col-md-2"></div>
    </div>
	  
 
</section>
<!--,,,,,,,,,,,,,,,, Footer End ,,,,,,,,,,,,,,,,,,, -->
<!--,,,,,,,,,,,,,,,, Footer End ,,,,,,,,,,,,,,,,,,, -->

<br>
<br>
<br>
<br>
<br>
<br>
<br>

<section id="footer">
						<div class="container">
							
								 <p style="color: white; padding-top: 20px;"> Developed By Muhammad Rahman and Abbas Ahmad Under Supervision of Jehangir Muhammad khan.</p>  <span style="float: right;">CopyRight &copy; 2017</span> 
						</div>
</section>

</body>
<script type="text/javascript">
				
				$('.pro-img').click(function() {
    $('#show').css('visibility', ($('#show').css('visibility') == 'visible') ? 'hidden' : 'visible');
});

			</script>

			<script type="text/javascript">
//validation for company name
 function companynamevalidat(){
		var compReg = /^[A-Za-z ]+$/;
      var comp = $('#comp').val();
	  var massage = "";
	  if(compReg.test(comp)){
	  massage= " company Name is valid";
            $("#companynamesuccess").html(massage); 
			 $("#companynameerror").html(''); 
			  
        }
		if(!compReg.test(comp)){
	  massage= "company Name is Invalid";
            $("#companynameerror").html(massage); 
			 $("#companynamesuccess").html(''); 
			  
        }
		if(comp==""){
	 $("#companynameerror").html(''); 
	 $("#companynamesuccess").html('');
	  
	 }
	   
	  }
//validation for spiciality
function specialityvalidat(){
		var specialReg = /^[A-Za-z ]+$/;
      var special = $('#special').val();
	  var massage = "";
	  if(specialReg.test(special)){
	  massage= "speciality format is valid";
            $("#specialitysuccess").html(massage); 
			 $("#specialityerror").html(''); 
			  
        }
		if(!specialReg.test(special)){
	  massage= "speciality format is Invalid";
            $("#specialityerror").html(massage); 
			 $("#specialitysuccess").html(''); 
			  
        }
		if(special==""){
	 $("#specialityerror").html(''); 
	 $("#specialitysuccess").html('');
	  
	 }
	   
	  }
	  </script>
	  <script type="text/javascript"> 
	  //validate form on submition

  function validatedata(){
  var companyname = document.getElementById('comp').value;
   var about = document.getElementById('abt').value;
   var speciality = document.getElementById('special').value;
   var country = document.getElementById('countryname').value;
   var city = document.getElementById('cityname').value;
   var address = document.getElementById('add').value;
    
	  var nameReg = /^[A-Za-z ]+$/;

		if(companyname==""){
	   
            
			alert(' company name is required');
			return false;
        }
		if(about==""){
	   
            
			alert(' about  is required');
			return false;
        }
		if(speciality==""){
	   
            
			alert(' speciality is required');
			return false;
        }
		 if(country==""){
	   
            
			alert(' country name is required');
			return false;
        }
		 if(city==""){
	   
            
			alert(' city name is required');
			return false;
        }
		 
		
		 if(!companyname.match(nameReg)){
		alert(' company  name is Invalid');
	   return false;
             
	}
	if(!speciality.match(nameReg)){
		alert('speciality is Invalid');
	   return false;
             
	}
	 
	 
		 else{
		 return true;
		 } 
	   
	  }
	  </script>
	   <script type="text/javascript">
        
        $('.pro-img').click(function() {
        $(this).next().slideToggle('500');
      $(this).find('span').toggleClass('glyphicon-plus glyphicon-minus');
      $('#show').css('visibility', ($('#show').css('visibility') != 'hidden') ? 'visible' : 'hidden').slideToggle("fast");
    
    
});

      </script>

</html>


 <?php
 

 if(isset($_POST['update']))
 {
	 $companyname=$_POST['companyname'];
     $about=$_POST['about'];
     $special=$_POST['special'];
	 $country=$_POST['country'];
	 $city=$_POST['city'];
     $address=$_POST['address'];
 
  
if($companyname=="" or $about=="" or $country=="" or $city=="" or $address=="" or $special=="")
{
	echo "<script>alert('please file all field')</script>";
	 
	exit();
}
 
 else{

$con=mysql_connect('localhost','root','') or die("database connectivity error");
mysql_select_db('ema',$con);
 
  
 
$q=mysql_query("UPDATE `ema`.`organizer` SET  `companyname`='$companyname', `about`='$about', `special`='$special', `country`='$country', `city`='$city', `address`='$address' WHERE `organizer_email`='$_SESSION[email]' ")or die('company info updation query error') ;
if(!$q)
{
	echo"<script>alert('you insert some thing wrong ,please tray again')</script>";
	echo"<script>window.open('setting.php','_self')</script>";	
exit();}
else{
echo"<script>alert('you successfully update company info')</script>";
 echo"<script>window.open('setting.php','_self')</script>";
}
}
 
}?>