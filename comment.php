<?php
session_start();
if(isset($_POST['do'])){
	
	$comment=$_POST['comment'];
	$id=$_POST['eventid'];
	$page=$_POST['page'];
	$creater_email=$_POST['createremail'];
	if($comment==""){
		echo"<script>alert('please file the comment then click ')</script>";
   echo"<script>window.open('$page','_self')</script>";	
	exit();
	}
	else{
		$con=mysql_connect('localhost','root','') or die("database connectivity error");
mysql_select_db('ema',$con) or die('database selection error');

$query=mysql_query(" insert into comment(creater_email,commenter_email,event_id, comment)values('$creater_email','$_SESSION[email]' , '$id','$comment' )")or die('error in insertion query');

 if($query){
	$q=mysql_query("SELECT `fristname`,`lastname` FROM `user` WHERE email='$_SESSION[email]'") or die(' q query selection  error');
$name=mysql_fetch_array($q);
$notification=$name[0]." ".$name[1]." comment on your event";

$q1=mysql_query("INSERT INTO `ema`.`notification` (`from_email`, `to_email`,`event_id`, `notification`) VALUES ('$_SESSION[email]','$creater_email','$id', '$notification');")or die('error in  notification insertion query');

	if($q1){
	echo "<script>alert('you are successfully comment')</script>";
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