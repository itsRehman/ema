<?php
session_start();
 if(isset($_POST['edit']))
 {
	 $packagename=$_POST['packagename'];
	 $detail=$_POST['detail'];
     $price=$_POST['price'];
     $per=$_POST['per'];
     $pkname=$_POST['pkname'];
     $status=$_POST['status'];
	  
	 
	  
 
if($packagename=="" or $price=="" or $per=="" or $detail=="")
{
echo "<script>alert('please file all field')</script>";
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
	 $con=mysql_connect("localhost","root", "") or die("database connectivity error");
      mysql_select_db("ema",$con);
  $q1=mysql_query(" UPDATE `package` SET `packagename`='$packagename',`detail`='$detail',`price`='$price',`per`='$per' WHERE organizer_email='$_SESSION[email]' AND `packagename`='$pkname' AND `status` = '$status'")or die("Error in  package  updation page query");
 if(!$q1)
	{
		echo "<script> window.alert('updation filed please try again')</script>";
	     echo"<script>window.open('comp-details.php','_self')</script>";
		 exit();
}
else
{
	echo "<script> window.alert('updation successfully done')</script>";
	 	  echo"<script>window.open('comp-details.php','_self')</script>";
	mysql_close($con);

}}
}
?>