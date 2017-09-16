<?php
 session_start();
$packagename=$_GET['packagename'];
$status=$_GET['status'];
$con=mysql_connect("localhost","root", "") or die("database connectivity error");
mysql_select_db("ema",$con);

$q=mysql_query(" DELETE FROM `ema`.`package` WHERE `package`.`organizer_email` = '$_SESSION[email]' AND `package`.`packagename` ='$packagename' and `package`.`status` = '$status'") Or die("error in package  delete page query");

if($q)
{
	echo "<script>alert('data deleted successfully')</script>";
	 echo"<script>window.open('comp-details.php','_self')</script>";
}
else { echo "<script>alert('data dose not deleted,try again!')</script>";

echo"<script>window.open('comp-details.php','_self')</script>";}
	mysql_close($con);
	?>