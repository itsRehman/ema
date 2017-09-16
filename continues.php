<!DOCTYPE html>
<?php
session_start();
?>
<html>
<head>
	<title>continues pag</title>

<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/password.js"></script>
<script type="text/javascript" src="js/jquery.min.js"></script>

	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/styling.css">
	<link rel="stylesheet" type="text/css" href="css/normalize.css">
	<style>
 
  
 </style>
  
</head>
<body style="background:gray;">
<div class="jumbotron" id="header">
	<div class="row">
		<div class="col-md-7">
			<div id="logo">
			<a href="../../Homepage/index.html"><img src="images/emanew2.png" class="img-responsive"></a>
		</div>
		</div>
		<div class="col-md-5">
			 
		</div>
	</div>
</div>	

<!--................................... End of header div.............................. -->	
 
	<div class="row">
	<div class="col-md-3"  ></div>
	
		<div class="col-md-6" style = "margin-bottom:30px; " >
		 
         <div class="alert alert-success" style="width:50%;height:50%;padding:3%; margin-left:15%;margin-right:15%;margin-bottom:13%;margin-top:13%" >
 <p>please check has email the conformation code have been to you.<br>
 Enter that here and click on continues. </p><br><br>
 <form method="post" action="">
 <input type="text" name="conformationcode" placeholder="######"><br>
 <input type="submit" name="continues" value="continues" style="margin-left:70%">
 </form>
 <?php
 
 if(isset($_POST['continues'])){
	$conformationcode=$_POST['conformationcode'];
	if($conformationcode==""){
	echo  "<font color=red>please Enter conformation code  </font>";	
		 
	}
	if($_SESSION['code']!=$conformationcode){
		echo  "<font color=red> .the conformation code does not match </font>";
		 
	}
	 else{
		$con = mysql_connect("localhost","root","")or die('database connection  error');
$db = mysql_select_db('ema',$con)or die('database selection error');
		 $date= Date('20y-m-d');
		 if($_SESSION['gender']=='male'){
		 	$profilepic='male.jpg';
		 }
		 if($_SESSION['gender']=='female'){
		 	$profilepic='female.jpg';
		 }
	$insert=mysql_query(" INSERT INTO `ema`.`user` (`fristname`, `lastname` , `email`, `password`, `gender`, `dateofbrith`, `joindate`, `profile_picture`) VALUES ('$_SESSION[fristname]', '$_SESSION[lastname]', '$_SESSION[email]', '$_SESSION[password]', '$_SESSION[gender]', '$_SESSION[dob]', '$date','$profilepic')") or die('insertion query error');
		if($insert){
			echo "<script>alert('your account created successfully..!!!')</script>";
		echo"<script>window.open('home.php','_self')</script>";
	exit();
		}
		else{
			
					echo "<script>alert('some thing go wrong triy again!!')</script>";
				echo"<script>window.open('login_signup.html','_self')</script>";	
		}
	}
	}
	 
	 
	 

 ?>
 
</div>    
        </div>

		<div class="col-md-3"  ></div>
	</div>
 
<!--.........................................body div End -->
<footer id="footer">
        <div class="container">
            <div class="text-center">
                <p style="color: white;"> Developed By Muhammad Rahman and Abbas Ahmad Under Supervision of Jehangir Muhammad khan.</p>  <span style="float: right;">CopyRight &copy; 2017</span>               
            </div>
        </div>
    </footer>
 
</body>
</html>
 