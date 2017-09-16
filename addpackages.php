<?php
session_start();

if(isset($_POST['add']))
 {
 	$status=$_POST['status'];
	 $packagename=$_POST['packagename'];
	 $detail=$_POST['detail'];
     $price=$_POST['price'];
     $per=$_POST['per'];
 
if($packagename=="" or $price=="" or $per=="" or $detail=="")
{
	echo "<script>alert('please  file all field ')</script>";
		 echo"<script>window.open('comp-details.php','_self')</script>";
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
 
 $query = mysql_query(" SELECT * FROM `package` WHERE organizer_email='$_SESSION[email]' AND packagename='$packagename' and status='$status'")or die('package selection query error') ;
 
if(mysql_num_rows($query)>0){

	echo "<script>alert('Already registered package . ')</script>";
	 echo"<script>window.open('comp-details.php','_self')</script>";
	exit();
	}
	else {
 
$q=mysql_query(" INSERT INTO `ema`.`package` (`organizer_email`, `packagename`,`detail`, `price`, `per` ,`status`) VALUES ('$_SESSION[email]', '$packagename','$detail', '$price', '$per', '$status')") or die('package table insertion query error');
if(!$q)
{
	echo"<script>alert('you enter some thing wrong ,please triy agian')</script>";
	echo"<script>window.open('comp-details.php','_self')</script>";	
exit();}
else{
echo"<script>alert('Registered successfully in EMA')</script>";
 echo"<script>window.open('comp-details.php','_self')</script>";	
}
}
 }
}
 
?>