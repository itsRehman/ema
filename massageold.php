<?php
session_start();
if(isset($_POST['send'])){
	
	$massage=$_POST['massage'];
	$toemail=$_POST['toemail'];
	if($massage==""){
		echo"<script>alert('please file the massage then click ')</script>";
   echo"<script>window.open('profile.php','_self')</script>";	
	exit();
	}
	else{
		$con=mysql_connect('localhost','root','') or die("database connectivity error");
mysql_select_db('ema',$con) or die('database selection error');

$query=mysql_query(" insert into massage(from_email,to_email,massage)values('$_SESSION[email]' ,'$toemail','$massage' )")or die('error in massage insertion query');

 if($query){
 echo"<script>alert('you send massage succassafully ')</script>";
   echo"<script>window.open('profile.php','_self')</script>";	
 }
 else{
	 echo"<script>alert('massage sending fail ')</script>";
   echo"<script>window.open('profile.php','_self')</script>"; 
 }
	}
	
}
?>