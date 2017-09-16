<?php
session_start();
if(isset($_POST['do'])){
	
	$review=$_POST['review'];
	$id=$_POST['eventid'];
	$page=$_POST['page'];
	$createremail=$_POST['createremail'];
	 
	if($review==""){
		echo "<script>alert('please file the review then click ')</script>";
   echo"<script>window.open('$page','_self')</script>";	
	exit();
	}
	else{
		$con=mysql_connect('localhost','root','') or die("database connectivity error");
mysql_select_db('ema',$con) or die('database selection error');
$date= Date('20y-m-d');

$query=mysql_query(" INSERT INTO `ema`.`review` (`creater_email`, `reviewer_email`, `event_id`, `review` , `on_date`) VALUES ('$createremail', '$_SESSION[email]' , '$id' , '$review', '$date') ") or die('error in insertion query');

 if($query){
	 $q=mysql_query("SELECT `fristname`,`lastname` FROM `user` WHERE email='$_SESSION[email]'") or die(' q query selection  error');
$name=mysql_fetch_array($q);
$notification=$name[0]." ".$name[1]."  Review on your event"."-"."show_new_review.php";

$q1=mysql_query("INSERT INTO `ema`.`notification` (`from_email`, `to_email`,`event_id`, `notification`,`type`) VALUES ('$_SESSION[email]', '$createremail','$id', '$notification','review')")or die('error in  notification insertion query');

	if($q1){
	
	echo "<script>alert('you are review successfully')</script>";
	  echo"<script>window.open('$page','_self')</script>";
      exit();
	}
	 
	  }
else{
	echo "<script>alert('some thing go wrong please try agian ')</script>";
	 echo"<script>window.open('$page','_self')</script>";
      exit();	
}	
	}
	}

?>