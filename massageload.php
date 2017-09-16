<html>
 
<?php
	if(!isset($_SESSION)) 
    { 
        session_start(); 
    }
	?>
<head>
	<title>
		massage load
	</title>
	 
	  <style type="text/css">
		 
		 
		 
		.chat{
			display: flex;
			flex-flow: row wrap;
			align-items: flex-end;
			margin-bottom: 10px;
		}
	.chat .user-photo{
		width: 40px;
		height: 40px;
		background: #ccc;
		border-radius: 50%;
		overflow: hidden;
		position: relative;
		top: 0;

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
 
	</style>

	<script type="text/javascript" src="js/jquery.min.js"></script>
	 
</head>
<body>

 <?php
	 
	 
	 $sendermail=$_SESSION['senderemail'];
	$con = mysql_connect("localhost","root","")or die('database connection  error');
$db = mysql_select_db('ema',$con)or die('database selection error');
 $update=mysql_query("UPDATE `massage` SET `state`='read' WHERE to_email='$_SESSION[email]' and from_email='$sendermail' and `state`='unread'") or die('massage updation query error');

$massage=mysql_query("  SELECT * FROM `massage` WHERE ( to_email='$_SESSION[email]' and from_email='$sendermail') OR ( to_email='$sendermail' and from_email='$_SESSION[email]') ") or die('massage selection query error');
						if(mysql_num_rows($massage)>0){
							while($showmsg=mysql_fetch_array($massage)){
							 if($showmsg[0]==$sendermail){
							 	 

	?>

		<div class="chat friend">
		<?php
		$senderprofile = mysql_query("SELECT `profile_picture` FROM  `user` WHERE email='$showmsg[0]'")or die('sender picture  selection  query error');
										 
										$senderpic=mysql_fetch_array($senderprofile);
										?>
		<div class="user-photo"><img src="profile_pictures/<?php echo $senderpic[0];?>" ></div>
		 
		<p class="chat-message"><?php echo $showmsg[2];?></p>
	 	 
	</div>
	<?php
}

?>
<?php
if($showmsg[0]==$_SESSION['email']){
	?>
	<div class="chat self">
	<?php
		$reciverprofile = mysql_query("SELECT `profile_picture` FROM  `user` WHERE email='$showmsg[0]' ")or die('sender picture  selection  query error');
										 
										$reciverpic=mysql_fetch_array($reciverprofile);
										?>
		<div class="user-photo"> <img src="profile_pictures/<?php echo $reciverpic[0];?>" ></div>
		 
		<p class="chat-message"><?php echo $showmsg[2];?> </p>
		</div>
		<?php
	}
}
}
else{
	echo "No Conversation";
}
	?>
	 
</body>
</html>