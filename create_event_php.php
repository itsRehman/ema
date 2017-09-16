<?php
session_start();

 if(isset($_POST['create_event']))
 {
	 $title=$_POST['title'];
$category=$_POST['category'];
$country=$_POST['country'];
 $city=$_POST['city'];
 $address=$_POST['address']; 
$fromdate=$_POST['fromdate']; 
 $todate=$_POST['todate'];
$time=$_POST['time'];
$chargingtype=$_POST['chargingtype'];
$requirements=$_POST['requirements'];
$ticketnumbers=$_POST['ticketnumbers'];
$orgDescription=$_POST['orgDescription'];
$ticketprice=$_POST['ticketprice'];
$discription=$_POST['discription']; 
$myfile= $_FILES['myfile']['name'];
$image_type = $_FILES['myfile']['type'];
$image_size = $_FILES['myfile']['size'];
 $image_tmp = $_FILES['myfile']['tmp_name'];
 $image_extension= pathinfo($myfile,PATHINFO_EXTENSION);
  
  
if($title=="" or $category=="" or $country=="" or $city=="" or $fromdate=="" or $todate=="" or $time=="" or $discription=="" or $address=="" or $chargingtype=="" or $myfile=="")
{
	echo "<script>alert('please fill allii field')</script>";
	echo"<script>window.open('create-event.php','_self')</script>";	
	exit();
}
 
if($chargingtype=='paid'){
	if($requirements=="" or $orgDescription=="" or $ticketnumbers=="" or $ticketprice==""){
echo "<script>alert('please fill all field')</script>";
	echo"<script>window.open('create-event.php','_self')</script>";	
	exit();
}
}
 
 if($image_extension!="jpg"){
		 echo "<script>alert('select valiad picture')</script>";
		echo"<script>window.open('create-event.php','_self')</script>"; 
	 	exit();
	 }
 
/*else{
if(!preg_match("/^[0-9]*$/",$_SESSION["ucnic"])){  echo"<script>alert('only number in cnic you can enter, sapace ,dash etc not allowed')</script>";
echo "<script>window.open('login.php','_self')</script>";
exit();
}

if(!preg_match("/^[a-zA-Z  ]*$/",$name)){  echo"<script>alert('only litters and spce allowed in name')</script>";
echo"<script>window.open('login.php','_self')</script>";
exit();
}
if(!preg_match("/^[0-9]*$/",$phone)){  echo"<script>alert('only number you  can enter  in phone.space ,dash etc not allowed')</script>";
echo"<script>window.open('login.php','_self')</script>";
exit();
}
if(!preg_match("/^[a-zA-Z0-9-_ ]*$/",$address)){  echo"<script>alert('only number litters dish and under scor  sapace you can enter , etc not allowed in address')</script>";
echo"<script>window.open('login.php','_self')</script>";
exit();}
if(strlen($_SESSION['ucnic'])!=13)
{echo"<script>alert('inviled cnic no please triy agian')</script>";
 echo"<script>window.open('login.php','_self')</script>";
exit();}
if(strlen($phone)<10)
{echo"<script>alert('inviled phone no please triy agian')</script>";
 echo"<script>window.open('login.php','_self')</script>";
exit();}
if(strlen($phone)>15)
{echo"<script>alert('inviled phone no please triy agian')</script>";
 echo"<script>window.open('login.php','_self')</script>";
exit();}*/
 else{
 
$con=mysql_connect('localhost','root','') or die("database connectivity error");
mysql_select_db('ema',$con);
move_uploaded_file($image_tmp, "event_logo/$myfile");
$q=mysql_query("INSERT INTO `event`(`title`, `category`, `country`, `city`, `address`, `discription`,`chargingtype`,`event_logo`) VALUES('$title','$category','$country','$city','$address','$discription','$chargingtype','$myfile')")or die('event table insertion query error');
$d=mysql_query("INSERT INTO `event_schedul`(`creater_email`, `fromdate`, `todate`,`time`) VALUES('$_SESSION[email]','$fromdate','$todate','$time')") or die('event_schedul table insertion query error');
if($chargingtype=="paid"){
	$geteventid=mysql_query("select id from event order by id desc limit 1") or die('event table selection  query error');
	$eventid=mysql_fetch_array($geteventid);
	$dd=mysql_query(" INSERT INTO `ema`.`paid_event_detail` (`event_id`,`requirements`, `orgDescription`, `ticketnumbers`, `ticketprice`) VALUES('$eventid[0]', '$requirements','$orgDescription','$ticketnumbers','$ticketprice')") or die('paid event table insertion query error');
	if(!$dd)
{
	echo"<script>alert('you inter some thing wrong ,please triy agian')</script>";
	echo"<script>window.open('create-event.php','_self')</script>";	
exit();
}
}
if(!$q && $d)
{
	echo"<script>alert('you inter some thing wrong ,please triy agian')</script>";
	echo"<script>window.open('create-event.php','_self')</script>";	
exit();
}
else{
echo"<script>alert('you successfully create event on our web site')</script>";
 echo"<script>window.open('create-event.php','_self')</script>";
exit(); 
}
} 
exit();
 }
?>