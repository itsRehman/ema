<?php
 session_start();
$addsid=$_GET['addsid']; 
 $con=mysql_connect("localhost","root", "") or die("database connectivity error");
mysql_select_db("ema",$con);

$q=mysql_query(" DELETE FROM `ema`.`adds` WHERE `adds`.`adds_id` = '$addsid'") Or die("error in adds  delete page query");

if($q)
{
	echo "<script>alert('Data deleted successfully')</script>";
	 echo"<script>window.open('upload-adds.php','_self')</script>";
}
else { echo "<script>alert('data dose not deleted,try again!')</script>";

echo"<script>window.open('upload-adds.php','_self')</script>";}
	mysql_close($con);
	?>