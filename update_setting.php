<!DOCTYPE html>
<?php
session_start();
?>
<html>
<head>

	<title> update Setting</title>

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
	 
#nameerror1{
 color:red;
 font-size:90%; !important;
 }
 #namesuccess1{
 color:green;
 font-size:90%; !important;
 }
   #nameerror2{
 color:red;
 font-size:90%; !important;
 }
 #namesuccess2{
 color:green;
 font-size:90%; !important;
 }
    #numbererror{
 color:red;
 font-size:90%; !important;
 }
 #numbersuccess{
 color:green;
 font-size:90%; !important;
 }
  
 #confpwderror{
 color:red;
 font-size:90%; !important;
 }
 #confpwdsuccess{
 color:green;
 font-size:90%; !important;
 }
 #dateofdoberror{
 color:red;
 font-size:90%; !important;
 }
 #dateofdobsuccess{
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
   $query=mysql_query("select * from user where email='$_SESSION[email]'") or die('user table selection query error');
  
  if(mysql_num_rows($query)>0){
	  while($rows=mysql_fetch_array($query)){
		  ?>
    <h3 align="center" style=""> Personal Information</h3>
    <br>
    <div class="row">
      <div class="col-md-12 table-responsive">
        <table class="table table-striped">
		<tbody>
		<form method="post" name="personal" action="" onsubmit=" return validatedata();" >
           <tr>
              <td>First Name</td>
              <td><input type="text" name="fristname" value="<?php echo $rows[0];?>" required id="name1" oninput="fristnamevalidat();"><span id="nameerror1"></span><span id="namesuccess1"></span></td>
              </tr>
            <tr>
              <td>Last Name</td>
        <td><input type="text" name="lastname" value="<?php echo $rows[1];?>" rquired id="name2" oninput="lastnamevalidat();" ><span id="nameerror2"></span><span id="namesuccess2"></span></td>
      </tr>
      
       <tr>
              <td>Password</td>
        <td><input type="text" name="password" value="<?php echo $rows[4];?>" required id="confpwd" oninput="conf();"><span id="confpwderror"></span><span id="confpwdsuccess"></span></td>
      </tr>
      <tr>
              <td>Gender</td>
        <td> 
		<select name="gender" required id="type">
		<option value="<?php echo $rows[5];?>"><?php echo $rows[5];?></option>
		<option value="male">Male</option>
		<option value="female">Female</option>
		</select>
		</td>
      </tr>
      <tr>
              <td>Date Of Birth</td>
        <td><input type="date" name="dob" value="<?php echo $rows[6];?>" required id="dateofdob" oninput="dateofbirthvalidat();"> <span id="dateofdoberror"></span><span id="dateofdobsuccess"></span></td>
      </tr>
      <tr>
              <td></td>
         <td><button class="btn btn-info" type="submit" name="update"  style="float: right;">Update</button></td>
      </tr>
      </form>
    </tbody>
  </table>
  <br>
  <br>
  </div>
  </div>
   
	<?php
	  }
  }
?>	
   
      </div>
	  <div class="col-md-2"></div>
    </div>
	  
 
</section>
<!--,,,,,,,,,,,,,,,, Footer End ,,,,,,,,,,,,,,,,,,, -->
<!--,,,,,,,,,,,,,,,, Footer End ,,,,,,,,,,,,,,,,,,, -->
 

<script type="text/javascript">
				
				$('.pro-img').click(function() {
    $('#show').css('visibility', ($('#show').css('visibility') == 'visible') ? 'hidden' : 'visible');
});
			</script>

      <script type="text/javascript">
//validation for frist name
 function fristnamevalidat(){
    var nameReg = /^[A-Za-z]+$/;
      var name1 = $('#name1').val();
    var massage = "";
    if(nameReg.test(name1)){
    massage= " Frist Name is valid";
            $("#namesuccess1").html(massage); 
       $("#nameerror1").html(''); 
        
        }
    if(!nameReg.test(name1)){
    massage= "Frist Name is Invalid";
            $("#nameerror1").html(massage); 
       $("#namesuccess1").html(''); 
        
        }
    if(name1==""){
   $("#nameerror1").html(''); 
   $("#namesuccess1").html('');
    
   }
     
    }
//validation for last name
function lastnamevalidat(){
    var nameReg = /^[A-Za-z]+$/;
      var name1 = $('#name2').val();
    var massage = "";
    if(nameReg.test(name1)){
    massage= " Last Name is valid";
            $("#namesuccess2").html(massage); 
       $("#nameerror2").html(''); 
        
        }
    if(!nameReg.test(name1)){
    massage= "Last Name is Invalid";
            $("#nameerror2").html(massage); 
       $("#namesuccess2").html(''); 
        
        }
    if(name1==""){
   $("#nameerror2").html(''); 
   $("#namesuccess2").html('');
    
   }
     
    }
// phone number validation
/*function numbervalidat(){
var phone = $('#number').val();
 if($.isNumeric($("#number").val())==false){
    massage = "Phone Numer is Invalid";
    $("#numbererror").html(massage); 
   $("#numbersuccess").html('');    
         }
     
    if($.isNumeric($("#number").val())==true){
    massage = "Phone Numer is Valid";
    $("#numbererror").html(''); 
   $("#numbersuccess").html(massage);   
         } 
    if(phone==""){
   $("#numbererror").html(''); 
   $("#numbersuccess").html('');
    
   }
}*/
 
// confirm password
function conf(){
  var passReg =  /^[0-9a-zA-Z@$&]+$/;
var confpass = $("#confpwd").val();
 massage ="";
  if(passReg.test(confpass)){
    massage = " Password valid";
    $("#confpwderror").html(''); 
    $("#confpwdsuccess").html(massage); 
    } 
if(!passReg.test(confpass)){
    massage = " Your password not vilad";
    $("#confpwderror").html(massage); 
    $("#confpwdsuccess").html(''); 
    }      
     if(confpass==""){
     $("#confpwderror").html(''); 
    $("#confpwdsuccess").html(''); 
     }
     
}
//date of brith validate
function dateofbirthvalidat(){
var date= $("#dateofdob").val();
 var d = new Date();
var dd=d.getFullYear();
dd-=5;
 var ddd=dd+"-"+"00"+"-"+"00";
if(date>ddd){
$("#dateofdoberror").html('  Invalid');
$("#dateofdobsuccess").html('');
} 
if(date<=ddd){
 $("#dateofdoberror").html('');
$("#dateofdobsuccess").html('  Valid');

} 
if(date==""){
 $("#dateofdoberror").html('');
$("#dateofdobsuccess").html('');

} 

}
//validate form on submition

  function validatedata(){
  var fristname = document.getElementById('name1').value;
   var lastname = document.getElementById('name2').value;
   
   var confpassword = document.getElementById('confpwd').value;
   var type = document.getElementById('type').value;
   var dateofdob=document.getElementById('dateofdob').value;
    
    var nameReg = /^[A-Za-z]+$/;
     
       var passReg =  /^[0-9a-zA-Z@$&]+$/;
    if(fristname==""){
     
            
      alert(' First name is required');
      return false;
        }
    if(lastname==""){
     
            
      alert(' Last name is required');
      return false;
        }
     
      
      
    if(confpassword==""){
     
            
      alert('password is required');
      return false;
        }
    if(type==""){
     
            
      alert(' Select gender');
      return false;
        }
    if(dateofdob==""){
     
            
      alert(' Date of btith is required');
      return false;
        }
    
     if(!fristname.match(nameReg)){
    alert(' First name is Invalid');
     return false;
             
  }
  if(!lastname.match(nameReg)){
    alert('Last name is Invalid');
     return false;
             
  }
   
   
  if(!confpassword.match(passReg)){
    alert('In password only letter digit @ $ & allowed');
     return false;
             
  }
   
  if(dateofdob!=""){
     
        var d = new Date();
var dd=d.getFullYear();
dd-=5;
 var ddd=dd+"-"+"00"+"-"+"00";
if(dateofdob>ddd){
 alert('Date of brith is invalid');
return false;
 } 
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

</body>
</html>

<?php
 
 

if(isset($_POST['update']))
{
      $fristname = $_POST['fristname'];
	  $lastname = $_POST['lastname'];
	  $password = $_POST['password'];
	  $gender = $_POST['gender'];
	  $dob=$_POST['dob'];
 
      if($fristname=="" or $lastname==""   or $password==""  or $gender=="" or $dob=="" )
  {
   echo"<script>alert(' Please file all field')</script>";
    
   exit();
  }
	 
else{
      $con=mysql_connect("localhost","root","") or die(' connection query error');
 $db=mysql_select_db('ema',$con) or die('database selection  query error');
  
		  $query= "update user set`fristname`='$fristname', `lastname`='$lastname' , `password`='$password' ,`gender`='$gender',`dateofbrith`='$dob' where email='$_SESSION[email]' "; 
  
   $query1=mysql_query($query)or die('updation query error');
if($query1){
		echo"<script>alert('your are update successfully')</script>";
		echo"<script>window.open('setting.php','_self')</script>";
exit();
}
 
 else{

	 
	echo"<script>alert('Your are updation not complete due to some error please try again')</script>";
	echo"<script>window.open('setting.php','_self')</script>";
exit();
     }
}
 
}
?>  