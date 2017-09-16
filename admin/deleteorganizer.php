<?php
 session_start();
$email=$_GET['email'];
 $page=$_GET['page'];
 
$con=mysql_connect("localhost","root", "") or die("database connectivity error");
mysql_select_db("ema",$con);

$q=mysql_query(" DELETE FROM `ema`.`organizer` WHERE `organizer`.`organizer_email` = '$email'") Or die("error in organizer  delete table query");
$q1=mysql_query(" DELETE FROM `ema`.`package` WHERE `package`.`organizer_email` = '$email'") Or die("error in organizer  package delete  query");
$q2=mysql_query(" DELETE FROM `ema`.`item` WHERE `item`.`organizer_email` = '$email'") Or die("error in organizer  item delete  query");
$q3=mysql_query(" DELETE FROM `ema`.`profile_picture` WHERE `profile_picture`.`email` = '$email' and `for`='logo'") Or die("error in organizer  logo delete  query");

if($q && $q1 && $q2 && $q3)
{
	echo "<script>alert('Data deleted successfully')</script>";
	 echo"<script>window.open('$page','_self')</script>";
}
else { echo "<script>alert('data dose not deleted,try again!')</script>";

echo"<script>window.open('$page','_self')</script>";}
	mysql_close($con);
	?>