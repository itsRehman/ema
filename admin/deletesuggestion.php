<?php
 session_start();
$email=$_GET['email'];
$page=$_GET['page'];
 
$con=mysql_connect("localhost","root", "") or die("database connectivity error");
mysql_select_db("ema",$con);

$q=mysql_query(" DELETE FROM `ema`.`suggestion` WHERE `suggestion`.`email` = '$email'") Or die("error in suggestion  delete  query");

if($q)
{
	echo "<script>alert('Data deleted successfully')</script>";
	 echo"<script>window.open('$page','_self')</script>";
}
else { echo "<script>alert('data dose not deleted,try again!')</script>";

echo"<script>window.open('$page','_self')</script>";}
	mysql_close($con);
	?>