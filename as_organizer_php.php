<?php
session_start();

 if(isset($_POST['register']))
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
	echo"<script>window.open('as-organizer.php','_self')</script>";
	exit();
}
 
/*else{
if(!preg_match("/^[0-9]*$/",$_SESSION["ucnic"])){  echo"<script>alert('only number in cnic you can enter, sapace ,dash etc not allowed')</script>";
echo "<script>window.open('login.php','_self')</script>";
exit();
}

if(!preg_match("/^[a-zA-Z  ]*$/",$name)){  echo"<script>alert('only litters and spce allowed in name')</script>";
echo"<script>window.open('login.php','_self')</script>";
exit();
}
if(!preg_match("/^[0-9]*$/",$phone)){  echo"<script>alert('only number you  can enter  in phone.space ,dash etc not allowed')</script>";
echo"<script>window.open('login.php','_self')</script>";
exit();
}
if(!preg_match("/^[a-zA-Z0-9-_ ]*$/",$address)){  echo"<script>alert('only number litters dish and under scor  sapace you can enter , etc not allowed in address')</script>";
echo"<script>window.open('login.php','_self')</script>";
exit();}
if(strlen($_SESSION['ucnic'])!=13)
{echo"<script>alert('inviled cnic no please triy agian')</script>";
 echo"<script>window.open('login.php','_self')</script>";
exit();}
if(strlen($phone)<10)
{echo"<script>alert('inviled phone no please triy agian')</script>";
 echo"<script>window.open('login.php','_self')</script>";
exit();}
if(strlen($phone)>15)
{echo"<script>alert('inviled phone no please triy agian')</script>";
 echo"<script>window.open('login.php','_self')</script>";
exit();}*/
 else{

$con=mysql_connect('localhost','root','') or die("database connectivity error");
mysql_select_db('ema',$con);
 
 $query=mysql_query(" SELECT * FROM `organizer` WHERE organizer_email='$_SESSION[email]'")or die('organizer table selection query error') ;
 
if(mysql_num_rows($query)>0){

	echo "<script>alert('You already have an organization')</script>";
	echo"<script>window.open('as-organizer.php','_self')</script>";
	exit();
	}
	else {
 
$q=mysql_query("INSERT INTO `ema`.`organizer` (`organizer_email`, `companyname`, `about`,`special`, `country`, `city`, `address`, `logo`) VALUES ('$_SESSION[email]', '$companyname', '$about','$special', '$country', '$city', '$address', 'company.png')")or die('organizer table insertion query error') ;
if(!$q)
{
	echo"<script>alert('You insert some thing wrong ,please try again')</script>";
	echo"<script>window.open('as-organizer.php','_self')</script>";	
exit();}
else{
echo"<script>alert('Successfully registered your organiztion on EMA')</script>";
 echo"<script>window.open('as-organizer.php','_self')</script>";
}
}
 }
}?>