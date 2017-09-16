<?php
session_start();
 
$email=$_GET['email'];
$page=$_GET['page'];
$emails=$_SESSION['email'];
if($emails==$email){
echo "<script>alert('you cannot fallow himself ok! ')</script>";
	 echo"<script>window.open('$page','_self')</script>";
      exit();	
}
else{
$con=mysql_connect('localhost','root','') or die("database connectivity error");
mysql_select_db('ema',$con) or die('database selection error');

$run=mysql_query("select *from ema.fallow where fallowby_email='$_SESSION[email]' and fallowed_email='$email'")or die('error in fallow selection query');
if(mysql_num_rows($run)>0){
     echo "<script>alert('you are already fallow this user ')</script>";
	 echo"<script>window.open('$page','_self')</script>";
      exit();
}
else{
	$query=mysql_query(" insert into fallow(fallowby_email,fallowed_email )values('$_SESSION[email]' , '$email' )")or die('error in fallow  insertion query');

if($query){
	 
	echo "<script>alert('you are successfully fallow this user')</script>";
	 echo"<script>window.open('$page','_self')</script>";
      exit();
	}
	  
else{
	echo "<script>alert('some thing go wrong please try agian ')</script>";
	 echo"<script>window.open('$page','_self')</script>";
      exit();	
}	
	}
}
?>