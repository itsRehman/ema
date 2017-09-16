<?php
session_start();
?>

<?php
$email=$_GET['email'];
$id=$_GET['id'];
$page=$_GET['page'];
if($_SESSION['email']==$email){
echo "<script>alert('you are himself the creater of this event ok!  ')</script>";
	 echo"<script>window.open('$page','_self')</script>";
      exit();		
}
else{
$con=mysql_connect('localhost','root','') or die("database connectivity error");
mysql_select_db('ema',$con) or die('database selection error');

$run=mysql_query("select *from participant where participant_email='$_SESSION[email]' and event_id='$id'")or die('error in q1');
if(mysql_num_rows($run)>0){
     echo "<script>alert('you are already join this event ')</script>";
	 echo"<script>window.open('$page','_self')</script>";
      exit();
}
else{
									$date= Date('20y-m-d');
	$query=mysql_query(" insert into participant(participant_email,event_id,participat_date)values('$_SESSION[email]' , '$id','$date' )")or die('error in insertion query');

if($query){
	$q=mysql_query("SELECT `fristname`,`lastname` FROM `user` WHERE email='$_SESSION[email]'") or die(' q query selection  error');
$name=mysql_fetch_array($q);
$notification=$name[0]." ".$name[1]."  joined in your event"."-"."participants.php";

$q1=mysql_query("INSERT INTO `ema`.`notification` (`from_email`, `to_email`,`event_id`, `notification`,`type`) VALUES ('$_SESSION[email]', '$email','$id', '$notification','participant')")or die('error in  notification insertion query');

	if($q1){
	
	echo "<script>alert('you are  selected as a joiner in this event successfully  wait for conformance')</script>";
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