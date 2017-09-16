<?php
 
$id=$_GET['id'];
$con=mysql_connect("localhost","root", "") or die("database connectivity error");
mysql_select_db("ems",$con);

$q=mysql_query(" DELETE FROM `ema`.`event` WHERE `event`.`id`='$id'") Or die("error in event delete page query1");
$q1=mysql_query(" DELETE FROM `ema`.`event_schedul` WHERE `event_schedul`.`event_id`='$id'") Or die("error in event delete page query2");
$q3=mysql_query(" DELETE FROM `ema`.`comment` WHERE `comment`.`event_id` ='$id'") Or die("error in event delete page query3");
$q4=mysql_query(" DELETE FROM `ema`.`organized_event` WHERE `organized_event`.`event_id` ='$id'") Or die("error in event delete page query4");
$q5=mysql_query("DELETE FROM `ema`.`participant` WHERE `participant`.`event_id` ='$id'") Or die("error in event delete page query5");
if($q && $q1 && $q3 && $q4 && $q5)
{
	echo "<script>alert('data deleded successfully')</script>";
	 echo"<script>window.open('profile.php','_self')</script>";
}
else { echo "<script>alert('data dose not deleted,triy agian!')</script>";

echo"<script>window.open('profile.php','_self')</script>";}
	mysql_close($con);
	?>