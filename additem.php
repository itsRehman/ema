<?php
session_start();

if(isset($_POST['additem']))
 {
 	$itemname=$_POST['itemname'];
	 $quantity=$_POST['quantity'];
	 $charge=$_POST['charge'];
     $rate=$_POST['rate'];
      
 
if($itemname=="" or $quantity=="" or $charge=="" or $rate=="")
{
	echo "<script>alert('please  file all field ')</script>";
		 echo"<script>window.open('comp-details.php','_self')</script>";
	exit();
}
 
 
/*else{
if(!preg_match("/^[0-9]*$/",$_SESSION["ucnic"])){  echo"<script>alert('only number in cnic you can enter, sapace ,dash etc not allowed')</script>";
echo "<script>window.open('login.php','_self')</script>";
exit();
}

if(!preg_match("/^[a-zA-Z  ]*$/",$name)){  echo"<script>alert('only litters and spce allowed in name')</script>";
echo"<script>window.open('login.php','_self')</script>";
exit();
}
if(!preg_match("/^[0-9]*$/",$phone)){  echo"<script>alert('only number you  can enter  in phone.space ,dash etc not allowed')</script>";
echo"<script>window.open('login.php','_self')</script>";
exit();
}
if(!preg_match("/^[a-zA-Z0-9-_ ]*$/",$address)){  echo"<script>alert('only number litters dish and under scor  sapace you can enter , etc not allowed in address')</script>";
echo"<script>window.open('login.php','_self')</script>";
exit();}
if(strlen($_SESSION['ucnic'])!=13)
{echo"<script>alert('inviled cnic no please triy agian')</script>";
 echo"<script>window.open('login.php','_self')</script>";
exit();}
if(strlen($phone)<10)
{echo"<script>alert('inviled phone no please triy agian')</script>";
 echo"<script>window.open('login.php','_self')</script>";
exit();}
if(strlen($phone)>15)
{echo"<script>alert('inviled phone no please triy agian')</script>";
 echo"<script>window.open('login.php','_self')</script>";
exit();}*/
 else{

$con=mysql_connect('localhost','root','') or die("database connectivity error");
mysql_select_db('ema',$con);
 
 $query = mysql_query(" SELECT * FROM `item` WHERE organizer_email='$_SESSION[email]' AND itemname='$itemname'")or die('item selection query error') ;
 
if(mysql_num_rows($query)>0){

	echo "<script>alert('Already registered item . ')</script>";
	 echo"<script>window.open('comp-details.php','_self')</script>";
	exit();
	}
	else {
 
$q=mysql_query(" INSERT INTO `ema`.`item` (`organizer_email`, `itemname`,`quantity`, `charge`, `rate`) VALUES ('$_SESSION[email]', '$itemname','$quantity', '$charge', '$rate')") or die('item table insertion query error');
if(!$q)
{
	echo"<script>alert('you enter some thing wrong ,please triy agian')</script>";
	echo"<script>window.open('comp-details.php','_self')</script>";	
exit();}
else{
echo"<script>alert('Registered successfully in EMA')</script>";
 echo"<script>window.open('comp-details.php','_self')</script>";	
}
}
 }
}
 
?>