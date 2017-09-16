<html>
<?php
 session_start();
$senderemail= $_SESSION['senderemail'] =$_GET['senderemail'];
?>
<head>
	<title>
		chat page
	</title>

		<link rel="stylesheet" href="assets/css/main.css" />
		
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

<link rel="stylesheet" type="text/css" href="css/styling1.css">
	<style type="text/css">
		*{
			margin:0;
			padding:0;
			font-family: tahoma, sans-serif;
			box-sizing: border-box;
		}
		
		body{
			background: #f8f8f8;
		}
		 .chatbox{
			width:100%;
			min-width: 390px;
			height: 600px;
			background: #fff;
			padding: 25px;
			margin: 20px auto ;
			
	box-shadow: 15px 15px 15px #BFBFBF;


		}
		.chatlogs{
			padding: 10px;
			width: 100%;
			height: 420px;
			 overflow-x: hidden;
			 overflow-y: scroll;
			 writing-mode: bottom 100px;


		}
		.chatlogs::-webkit-scrollbar{
			width: 10px;

			 
		}
		.chatlogs::-webkit-scrollbar-thumb{
			border-radius: 5px;
			background:gray;


		}
		 
.chat-form{
	margin-top: 20px;
	display: flex;
	align-items: flex-start;
}
 .chat{
			display: flex;
			flex-flow: row wrap;
			align-items: flex-end;
			margin-bottom: 10px;
		}
	.chat .user-photo{
		width: 60px;
		height: 60px;
		background: #ccc;
		border-radius: 50%;
		overflow: hidden;

	}
	 .chat .user-photo img{
		width: 100%;
		height: 100%;
		 
	}
	.chat .chat-message{
		width: 80%;
		padding: 15px;
		margin: 5px 10px 0px;
		border-radius: 10px;
		color: #fff;
		font-size: 20px;

	}
	.friend .chat-message{
		background: #1adda4;
	}
	.self .chat-message{
background: #1ddced;
order:-1;
	}
.chat-form textarea{
	background: #fbfbfb;
	width: 75%;
	height:50px;
	border:2px solid #eee;
	border-radius: 3px;
	resize: none;
	padding: 10px;
	font-size: 18px;

color: #333;
}
.chat-form textarea:focus {
	background: #fff;

}
.chat-form textarea::-webkit-scrollbar{
			width: 20px;
		}
		.chat-form textarea::-webkit-scrollbar-thumb{
			border-radius: 5px;
			background: rgba(0,0,0,-1);
		}

.chat-form button{ 
	padding: 5px 15px;
	font-size: 30px;
	color: #fff;
	border:none;
	margin:0 10px;
	border-radius: 3px;
	box-shadow: 0 3px 0 green;
	cursor: pointer;
	-webkit-transition:background .2s ease ;
	-moz-transition:background .2s ease ;
	-o-transition:background .2s ease ;
} 
.profile-img{
	width: 100px;
	height: 80px;
	background-color: red;
	margin-top: 20px;
}

	</style>
	 
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script>
  function scroll() {

  $('.chatlogs').scrollTop($('.chatlogs')[0].scrollHeight);
 
 } 
</script>
 	<script type="text/javascript">
 	$(document).ready(function() {
$(document).bind('keypress', function(e) {
	if(e.keyCode==13){
		$('#my_form').submit();
		$('#massage').val("");
		$('#snd').val("");
		 
	}

});
scroll();
 	});
 </script>
  <script type="text/javascript">
 	function autoRefresh_div() {
 		$("#result").load("massageload.php").show();
 	}
 	setInterval('autoRefresh_div()' , 500);
 </script>
	 
</head>
<body>


<nav class="navbar navbar-default" id="custom-bootstrap-menu" role="navigation">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#"><img src="images/emanew2.png" class="img-responsive"></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      	<ul class="nav navbar-nav navbar-right">
        	<li><a href="home.php">Home <span class="sr-only">(current)</span></a></li>
        	<li><a href="explore.php">Explore</a></li>
        	<li><a href="organizers.php">Organizer's</a></li> 
		</ul>     
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>


<section style="overflow: hidden;">
<div class="row">
	<div class="col-md-3" align="center">
		 <?php
		 $con = mysql_connect("localhost","root","")or die('database connection  error');
$db = mysql_select_db('ema',$con)or die('database selection error');
		 $namequery=mysql_query(" SELECT `fristname`, `lastname`  FROM `user` WHERE `email`='$senderemail' ")or die('name selection query error');
		 $name= mysql_fetch_array($namequery);
		 ?>
		 <h3> <?php echo $name[0]." ".$name[1];?></h3>
		<br>
		<div>
		<form method="post" name="deletemassage" > 
		<input type="hidden" name="sender" value="<?php echo $senderemail;?>">
			     <button type="submit" name="delete" class="btn btn-warning" title="All conversation will be deleted " onclick="return window.confirm('are you sure to delete')">Delete Chat History </button> 
			     </form>
		</div>
		<br>
		<a href="profile.php">Back to profile</a>
		<br>
		 
	</div>


	<div class="col-md-8">
		
			<div class="chatbox">
				<div class="chatlogs">
				  
				<div id="result"> 
				 <?php
				 include("massageload.php");
				 ?>
				</div>

					</div> 
				<br><br>
			 <form method='post' action="#"  id="my_form" onsubmit="return post();" name="my_form">
				<div class="chat-form">
				<textarea id="massage" name="msg" required></textarea>
				<button type="submit" name="submit" class="btn btn-success" title="Send message" style="font-size: 16px; width: 120px; height: 45px;">Send</button>
				<input type="hidden" id="snd" name="sender" value="<?php echo $senderemail;?>">
				</div>
				</form>	
				</div>
	</div>

	<div class="col-md-1">
		
	</div>
</div>
</section>
	<br>
	<section id="footer">
						<div class="container-fluid">
							<div >
								 <span style="float: right;">CopyRight &copy; 2017</span> 
							</div>
						</div>
						
           
					</section>
	 
	<script src="assets/js/bootstrap.min.js"></script>


</body>
</html>
<?php
 
 
if(isset($_POST['submit'])) {
	$massage =$_POST['msg'];
	$sender =$_POST['sender'];
	if($massage==""){
		echo "<script>alert('please fill massage field')</script>";
		exit();
	}
	else
	 {
	 	$con = mysql_connect("localhost","root","")or die('database connection  error');
$db = mysql_select_db('ema',$con)or die('database selection error');
	$query=mysql_query("INSERT INTO `ema`.`massage` (`from_email`,`to_email`,`massage`) VALUES ('$_SESSION[email]','$sender', '$massage')") or die ('error in massage insertion query');
	?>
	<script type="text/javascript">
		scroll();
	</script>
	<?php
	exit();
}
}
?>
<?php
 
 if(isset($_POST['delete'])){
 	$sender=$_POST['sender'];
 	if($sender==""){


 echo "<script>alert('sender email is not defied')</script>";
 	}
 	else{
 
$con=mysql_connect("localhost","root", "") or die("database connectivity error");
mysql_select_db("ema",$con);

$q=mysql_query(" DELETE FROM  `massage` WHERE ( to_email='$_SESSION[email]' and from_email='$sender') OR ( to_email='$sender' and from_email='$_SESSION[email]')") Or die("error in delete massage history  delete page query");

if($q)
{
	echo "<script>alert('data deleted successfully')</script>";
	 
}
else { echo "<script>alert('data dose not deleted,try again!')</script>";

 }
	mysql_close($con);
}
}
	?>
