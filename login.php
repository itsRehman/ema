<?php 
session_start();
if(isset($_POST['login'])){

	$email =$_SESSION['email']=$_POST['email'];
	$password =$_SESSION['password']= $_POST['password'];
	if($email=="" or $password==""){
		echo "<script>alert('please enter the email and password ')</script>";
		echo"<script>window.open('login_signup.html','_self')</script>";
  exit();
	}
	else{
$con = mysql_connect("localhost","root","")or die('database connection  error');
$db = mysql_select_db('ema',$con)or die('database selection error');
	
$query = " SELECT * FROM `user` WHERE email='$email' and password='$password'" ;

$run = mysql_query($query)or die('database selection  query error');

if(mysql_num_rows($run)>0){
	echo"<script>window.open('home.php','_self')</script>";
	}
	else {
		 
echo "<script>alert('Password or Email is incorrect....!')</script>";

echo"<script>window.open('login_signup.html','_self')</script>";
	}


}
}
?>