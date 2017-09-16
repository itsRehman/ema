<?php 
 
if(isset($_POST['updatepassword'])){

	 
	$adminpasswordold = $_POST['adminpasswordold'];
	$adminpasswordnew = $_POST['adminpasswordnew'];
	$adminpasswordconf = $_POST['adminpasswordconf'];
	$adminpassword1 = $_POST['adminpassword1'];
	if($adminpasswordold=="" or $adminpasswordnew==""  or $adminpasswordconf==""  or $adminpassword1==""){
		echo "<script>alert('please please file all field ')</script>";
		echo"<script>window.open('adminsetting.php','_self')</script>";
  exit();
	}
	if($adminpasswordold==$adminpassword1){
		echo "<script>alert('old password is wrong ')</script>";
		echo"<script>window.open('adminsetting.php','_self')</script>";
  exit();
	}
	if($adminpasswordnew==$adminpasswordconf){
		echo "<script>alert('your new and confirm password not math ')</script>";
		echo"<script>window.open('adminsetting.php','_self')</script>";
  exit();
	}
	else{
$con = mysql_connect("localhost","root","")or die('database connection  error');
$db = mysql_select_db('ema',$con)or die('database selection error');
	
$query = "UPdate  ema.admin set  adminpassword='$adminpasswordnew'" ;

$run = mysql_query($query)or die('updation query error selection  query error');

if($run){
	echo "<script>alert('updation successfuly')</script>";
	echo"<script>window.open('welcome.php','_self')</script>";
	}
	else {
		 
echo "<script>alert('some thing wrong try agian')</script>";

echo"<script>window.open('adminsetting.php','_self')</script>";
	}


}
}
?>