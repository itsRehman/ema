<?php  

 if(isset($_POST['submit']))
 {
$addsurl=$_POST['url'];
$myfile= $_FILES['myfile']['name'];
$image_type = $_FILES['myfile']['type'];
$image_size = $_FILES['myfile']['size'];
 $image_tmp = $_FILES['myfile']['tmp_name'];
 $image_extension= pathinfo($myfile,PATHINFO_EXTENSION);
  
if($addsurl=="" or $myfile=="")
{
	echo "<script>alert('please fill all field')</script>";
	echo"<script>window.open('create-event.php','_self')</script>";	
	exit();
}
 
if($image_extension!="jpg"){
		 echo "<script>alert('select valiad jpg adds')</script>";
		echo"<script>window.open('create-event.php','_self')</script>"; 
	 	exit();
	 }
	 
 
 
 else{
 
$con=mysql_connect('localhost','root','') or die("database connectivity error");
mysql_select_db('ema',$con);
if(move_uploaded_file($image_tmp, "../adds/$myfile")){
$q=mysql_query(" INSERT INTO ema.adds(`name`,`url`) VALUES('$myfile','$addsurl')")or die('adds table insertion query error');
 
}
if(!$q)
{
	echo"<script>alert('you inter some thing wrong ,please triy agian')</script>";
	//echo"<script>window.open('upload-adds.php','_self')</script>";	
exit();
}
else{
echo"<script>alert('you successfully upload adds')</script>";
 echo"<script>window.open('welcome.php','_self')</script>";
exit(); 
}
} 
exit();
 }
?>