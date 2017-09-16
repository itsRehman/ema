<?php
 
session_start(); 

if(isset($_POST['signup']))
{
      $fristname =$_SESSION['fristname']= $_POST['fristname'];
	  $lastname =$_SESSION['lastname']= $_POST['lastname'];
      $email = $_SESSION['email']=$_POST['email'];
	  $password =$_SESSION['password']= $_POST['password'];
	  $confpassword =$_POST['confpassword'];
	  $gender =$_SESSION['gender']= $_POST['gender'];
	  $dob=$_SESSION['dob']=$_POST['dob'];
 
      if($fristname=="" or $lastname==""  or $email=="" or $password=="" or $confpassword=="" or $gender=="" or $dob=="" )
  {
   echo"<script>alert(' Please file all field')</script>";
   echo"<script>window.open('login_signup.html','_self')</script>";
   exit();
  }
	if($password!=$confpassword){
	echo"<script>alert('the confirm  password dose not match')</script>";
   echo"<script>window.open('login_signup.html','_self')</script>";	
	exit();
	}  
else{
      $con=mysql_connect("localhost","root","") or die(' connection query error');
 $db=mysql_select_db('ema',$con) or die('database selection  query error');
  
  $run=mysql_query("select * from user where email='$email'") or die(' selection query error');
    
   if(mysql_num_rows($run)>0)

   {
  echo "<script>alert('This email is already exist please try again....!!!')</script>";
  echo"<script>window.open('login_signup.html','_self')</script>";
  exit();
}
else
{
	$conformationcode=$_SESSION['code']=rand(377823,878582);
	$subject="activation";
	$to=$email;
	$message=" your account conformation code is ".$conformationcode." insert it to conform has account. ";
	$headers="From:<ema@gmail.com>";
	if(mail($to,$subject,$message,$headers)){
 
		  
	echo"<script>window.open('continues.php','_self')</script>";
exit();
}
 
 else{

	 
	echo"<script>alert('Your are not sign up due to some error please try again')</script>";
	echo"<script>window.open('login_signup.html','_self')</script>";
exit();
     }
	}
}
}

?>  