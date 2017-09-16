<?php
session_start();
 if(isset($_POST['sendsuggestion']))
 {
	 $subject=$_POST['subject'];
	 $suggestion=$_POST['suggestion'];
     $fpage=$_POST['fpage'];
     
	 
	  
 
if($subject=="" or $suggestion=="")
{
echo "<script>alert('please file all field')</script>";
echo"<script>window.open('$fpage','_self')</script>";
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
 	$date= Date('20y-m-d');
	 $con=mysql_connect("localhost","root", "") or die("database connectivity error");
      mysql_select_db("ema",$con);
  $q1=mysql_query("INSERT INTO `suggestion`(email,subject,suggestion,ondate)values('$_SESSION[email]','$subject','$suggestion','$date')");
 if(!$q1)
	{
		echo "<script> window.alert('suggestion  filed please try again')</script>";
	     echo"<script>window.open('$fpage','_self')</script>";
		 exit();
}
else
{
	echo "<script> window.alert('Sugggestion  successfully done')</script>";
	 	  echo"<script>window.open('$fpage','_self')</script>";
	mysql_close($con);

}}
}
?>