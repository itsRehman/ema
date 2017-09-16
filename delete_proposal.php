 <?php
 session_start();
$senderemail=$_GET['senderemail'];
$reciveremail=$_GET['reciveremail'];
$eventid=$_GET['id'];
$con=mysql_connect("localhost","root", "") or die("database connectivity error");
mysql_select_db("ema",$con);

$q=mysql_query(" DELETE FROM `ema`.`proposal` WHERE `proposal`.`sender_email` = '$senderemail' AND `proposal`.`reciver_email` ='$reciveremail' and `proposal`.`event_id` = '$eventid'") Or die("error in proposal  delete page query");

if($q)
{
	echo "<script>alert('proposal Rejected successfully')</script>";
	 echo"<script>window.open('profile.php','_self')</script>";
}
else { echo "<script>alert('proposal  dose not deleted,try again!')</script>";

echo"<script>window.open('profile.php','_self')</script>";}
	mysql_close($con);
	?>