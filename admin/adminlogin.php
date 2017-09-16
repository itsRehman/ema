<?php 
session_start();
if(isset($_POST['adminlogin'])){

	$username =$_SESSION['username']=$_POST['username'];
	$adminpassword =$_SESSION['adminpassword']= $_POST['adminpassword'];
	if($username=="" or $adminpassword==""){
		echo "<script>alert('please enter the email and password ')</script>";
		echo"<script>window.open('login.html','_self')</script>";
  exit();
	}
	else{
$con = mysql_connect("localhost","root","")or die('database connection  error');
$db = mysql_select_db('ema',$con)or die('database selection error');
	
$query = " SELECT * FROM `admin` WHERE username='$username' and adminpassword='$adminpassword'" ;

$run = mysql_query($query)or die('database selection  query error');

if(mysql_num_rows($run)>0){
	echo"<script>window.open('welcome.php','_self')</script>";
	}
	else {
		 
echo "<script>alert('Password or Email is incorrect....!')</script>";

echo"<script>window.open('login.html','_self')</script>";
	}


}
}
?>