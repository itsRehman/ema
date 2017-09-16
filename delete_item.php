<?php
 session_start();
$itemname=$_GET['itemname'];
 
$con=mysql_connect("localhost","root", "") or die("database connectivity error");
mysql_select_db("ema",$con);

$q=mysql_query(" DELETE FROM `ema`.`item` WHERE `item`.`organizer_email` = '$_SESSION[email]' AND `item`.`itemname` ='$itemname'") Or die("error in item  delete page query");

if($q)
{
	echo "<script>alert('data deleted successfully')</script>";
	 echo"<script>window.open('comp-details.php','_self')</script>";
}
else { echo "<script>alert('data dose not deleted,try again!')</script>";

echo"<script>window.open('comp-details.php','_self')</script>";}
	mysql_close($con);
	?>