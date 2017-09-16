<?php
session_start();
 if(isset($_POST['update']))
 {
	   $title=$_POST['title'];
$category=$_POST['category'];
$country=$_POST['country'];
 $city=$_POST['city'];
 $address=$_POST['address'];
$fromdate=$_POST['fromdate']; 
 $todate=$_POST['todate'];
$time=$_POST['time'];
$discription=$_POST['discription']; 
$id=$_POST['eventid'];
if($title=="" or $category=="" or $country=="" or $city=="" or $address=="" or $fromdate=="" or $todate=="" or $time=="" or $discription=="")
{
	echo "<script>alert('please file all field')</script>";
	echo"<script>window.open('profile.php','_self')</script>";	
	exit();
}
 else{
	 $con=mysql_connect("localhost","root", "") or die("database connectivity error");
      mysql_select_db("ema",$con);
  $q1=mysql_query(" UPDATE `event` SET `title`='$title',`category`='$category',`country`='$country',`city`='$city',`address`='$address',`discription`='$discription' WHERE id='$id' ")or die("Error in event  updation page query1");
  $q2=mysql_query(" UPDATE `event_schedul` SET `fromdate`='$fromdate',`todate`='$todate',`time`='$time'  WHERE event_id='$id' ")or die("Error in event  updation page query2");
 if(!$q1 && $q2)
	{
		echo "<script> window.alert('updation filed please try again')</script>";
	     echo"<script>window.open('profile.php','_self')</script>";
		 exit();
}
else
{
	echo "<script> window.alert('updation successfully done')</script>";
	 	  echo"<script>window.open('profile.php','_self')</script>";
	mysql_close($con);

}}
}
?>