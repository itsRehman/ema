<?php
 
 if(isset($_POST['submit']))
{
	$from=$_POST['fromdate'];
	$to=$_POST['todate'];
	$page=$_POST['page'];

	if($from=="" or $to==""){
		echo "<script>alert('fill from and to date')</script>";
	 echo"<script>window.open('$page','_self')</script>";
	 exite();
	}
	else
	{
$con=mysql_connect("localhost","root", "") or die("database connectivity error");
mysql_select_db("ems",$con);
$query=mysql_query(" select * from ema.event_schedul where fromdate>='$from' and todate<='$to'") or die ('selection query error');
if(mysql_num_rows($query)>0){

 while($row=mysql_fetch_array($query)){

$q=mysql_query(" DELETE FROM `ema`.`event` WHERE `event`.`id`='$row[0]'") Or die("error in event delete page query1");
$q1=mysql_query(" DELETE FROM `ema`.`event_schedul` WHERE `event_schedul`.`event_id`='$row[0]'") Or die("error in event delete page query2");
$q3=mysql_query(" DELETE FROM `ema`.`review` WHERE `review`.`event_id` ='$row[0]'") Or die("error in event delete page query3");
 
$q4=mysql_query("DELETE FROM `ema`.`participant` WHERE `participant`.`event_id` ='$row[0]'") Or die("error in event delete page query5");
}
if($q && $q1 && $q3 && $q4){
echo "<script>alert('Dta deleted Seccessfully')</script>";
	 echo"<script>window.open('$page','_self')</script>";
	}
	else{
		echo "<script>alert('data not deleted')</script>";
	 echo"<script>window.open('$page','_self')</script>";
	}

 }
else{
	echo "<script>alert('NOt fund Data between these dates')</script>";
	 echo"<script>window.open('$page','_self')</script>";

}
}
}
	?>