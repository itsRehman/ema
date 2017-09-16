<?php
session_start();
$con = mysql_connect("localhost","root","")or die('database connection  error');
$db = mysql_select_db('ema',$con)or die('database selection error');
if(isset($_POST['user_massage']) && isset($_POST['user_mail'])) {
	$massage =$_POST['user_massage'];
	$sender =$_POST['user_mail'];
	 
	$query=mysql_query("INSERT INTO `ema`.`massage` (`from_email`,`to_email`,`massage`) VALUES ('$_SESSION[email]','$sender', '$massage')") or die ('error');
}
?>