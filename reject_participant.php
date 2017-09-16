<?php
session_start();
 $id=$_GET['id'];
 $email=$_GET['email'];
  
 $con=mysql_connect("localhost","root", "") or die("database connectivity error");
  mysql_select_db("ema",$con);
  $query=mysql_query( " DELETE FROM `participant` WHERE participant_email='$email' and `event_id`='$id'")or die('participant deletion  query error');
if($query){
$q=mysql_query("SELECT `fristname`,`lastname` FROM `user` WHERE email='$_SESSION[email]'") or die(' q query selection  error');
$name=mysql_fetch_array($q);
$notification=$name[0]." ".$name[1]."  reject you as participant in has event"."-"."rejected_participants.php";

$q1=mysql_query("INSERT INTO `ema`.`notification` (`from_email`, `to_email`,`event_id`, `notification`,`state`,`type`) VALUES ('$_SESSION[email]', '$email','$id', '$notification','reject','participant')")or die('error in  notification insertion query');
if($q1){
	echo "<script>alert('the participant is rejected successfully')</script>";
	echo"<script>window.open('profile.php','_self')</script>";	
	exit();
	
}
else{
	echo "<script>alert('the participant is rejected successfully but not inform about rejection')</script>";
	echo"<script>window.open('profile.php','_self')</script>";	
	exit();
}
 
}
else{
	echo "<script>alert('some thing goes wrong please try again')</script>";
	echo"<script>window.open('profile.php','_self')</script>";	
	exit();
	
}
?>