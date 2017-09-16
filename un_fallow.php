<?php
session_start();
?>

<?php
$email=$_GET['email'];
$page=$_GET['page'];
$con=mysql_connect('localhost','root','') or die("database connectivity error");
mysql_select_db('ema',$con) or die('database selection error');

$run=mysql_query("DELETE from ema.fallow where fallowby_email='$_SESSION[email]' and fallowed_email='$email'")or die('error in fallow deletion query');
 
if($run){
	 echo "<script>alert('you are successfully un-fallow this user')</script>";
	 echo"<script>window.open('$page','_self')</script>";
     exit();
}
else
{
	echo "<script>alert('some thing go wrong please try agian ')</script>";
	 echo"<script>window.open('$page','_self')</script>";
      exit();	
}
 	
?>