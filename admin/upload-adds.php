<!DOCTYPE html>
<html>
<?php
session_start();
?>
<head>
	<title>Adds</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://fonts.googleapis.com/css?family=Oswald|Raleway" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="Font-Awesome/css/font-awesome.min.css">
	<!-- Css Styling Links -->
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" type="text/css" href="css/animate.css">
	<!-- JavaScript Links -->
	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.js"></script>
	<style type="text/css">
		#btn_upload_data{
		background-color: #fff;
		 width: 100%;
		height:280px;
		background-image: url(img/hg.png);
		background-size: cover;
		background-position: center;
	}
	#upload-a{

		-moz-transition:all 2s;
		-webkit-transition:all 2s;
		transition: all 2s;		
	}

	#upload-a :hover{
		-moz-transform: scale(1.1);
		-webkit-transform: scale(1.1);
		transform: scale(1.1);
	}

	#btn_upload_data input[type="file"] {
  opacity: 0;
  filter: aplha(opacity=0);
  width: 100%;
		height: 280px;
		background-color: #fff;
}

.upload-btn{
	float: right;
	width: 200px;
	height: 30px;
}
.addurl{
	border-bottom: 2px solid #307C94;
	border-top: 0;
	border-left: 0;
	border-right: 0;
	width: 300px;
}
.addurl:focus{
	
	border-style: none;
	border: 2px solid #fff;
}


.add-content{
	border-bottom: 1px solid gray;
	padding: 15px ;
	background-color: #f8f8f8;
	overflow: hidden;
	box-shadow: 10px 10px 5px #BFBFBF;
}

	</style>


</head>
<body>
	<!-- Navigation -->
	<nav class="navbar navbar-default navbar-fixed-top" role="navigation" id="navigation"  style="overflow: hidden;">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12">
					<!-- Brand and Toggle get Grouped -->
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#myNavbar" aria-expended="false">
							<span class="sr-only">Toggle Navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>

						<a href="#" class="navbar-brand">Logo</a>
					</div>
					<!-- Collect Nav links and Content for Toggling -->
					<div class="collapse navbar-collapse" id="myNavbar">
						<ul class="nav navbar-nav navbar-left">
							<li></li>
						</ul>

						<ul class="nav navbar-nav navbar-right">
							<li><a href="welcome.php">Home</a></li>
							<li><a href="user.php">User</a></li>
							<li><a href="event.php">Event</a></li>
							<li><a href="organizer.php">Organizer's</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</nav>
	<!-- Navigation Ends -->

	<!-- Main Section with Sidebar-Menu and Main Content Starts -->
	<div class="main-events"  style="overflow: hidden;" >
		<div class="container" style="overflow: hidden;">
			<div class="row">
				<div class="col-lg-3 col-md-3">
					<div class="list-group">
						<a href="welcome.php" class="list-group-item "><i class="fa fa-cog"></i> Dashboard</a>
						<a href="suggestions.php" class="list-group-item"><i class="fa fa-globe"></i> Suggestions</a>
						<a href="upload-adds.php" class="list-group-item active"><i class="fa fa-upload"></i> Upload ADD's</a>
						<a href="#" class="list-group-item"><i class="fa fa-handshake-o"></i> Transaction</a>
						<a href="adminsetting.php" class="list-group-item"><i class="fa fa-wrench"></i> Admin Setting</a>
						<a href="adminlogout.php" class="list-group-item"><i class="fa fa-sign-out"></i> Log Out</a>
					</div>
				</div>
				<!-- Sidebar Ends Here -->

			
				<div class="col-lg-9 ">
					<div class="panel-heading row">
							<div class="panel-title">
								<h4>Choose Add here</h4>
							</div>
						</div>
						<form method="post" name="uploadform" onsubmit=" return validatedata();" enctype="multipart/form-data" action="uploadadd.php"> 
					<div class="panel panel-default row">
						<div class="col-md-12">
							<a href="" id="upload-a">
								<div id="btn_upload_data" title="Click Here No File Choosen Yet ..."> 
						   			<input type="file" name="myfile" id="files"/>
								</div>
							</a>
							 
						</div>
					</div> 
					<div class="row">
						<div class="col-md-8">
								<input type="text" name="url" id="addsurl" class="addurl" placeholder="Add URL of the Addvertisement ...">
							</div>
						<div class="col-md-4">
							
							<button type="submit" name="submit" class="btn btn-info upload-btn">Upload</button>
						</div>
					</div>
					</form>
				</div>
		</div>
	</div>
</div>
	<!-- Main Section with Sidebar-Menu and Main Content Ends -->


	 

			<hr>
	<div class="row" style="overflow: hidden; color: #307C94; font-weight: bolder;">
		<div class="col-md-12">
			<h3 align="center"> ALL ADDS</h3>
		</div>
	</div>

<?php
 $con=mysql_connect('localhost','root','') or die("database connectivity error");
mysql_select_db('ema',$con);
$query=mysql_query(" SELECT * from adds ")or die(' adds selection query error') ;
			if(mysql_num_rows($query)>0){
				?>

				<div class="row" style="padding: 25px; overflow: hidden;" >
				
				 <?php
			while($row=mysql_fetch_array($query)){

?>


	<div class="col-md-3"  align="center">
		<div class="add-content">
			<img src="../adds/<?php echo $row[1];?>" style="height: 100px;width: 100px;" />
			<div><?php echo $row[2];?></div>
			<a  class="btn btn-danger" href="deleteadds.php?addsid=<?php echo $row[0];?>" onclick="return window.confirm('Are you sure to delete');">Delete</a>
		</div>
	</div> 
	

	
 

<?php


			}
			?>
			</div>
			<?php
			 
		}
		else{
			echo "NO adds";
		}
													 
													 

?>
<!-- Footer -->
	<div class="row footer" id="footer" style="overflow: hidden;">
		<p>&copy; CopyRight-2017 | All Right Reserved</p>
	</div>
	<!-- Footer Ends -->


	<script type="text/javascript">
	function validatedata(){ 
   var adds = document.getElementById('files').value;
   var url = document.getElementById('addsurl').value;
   if(adds==""){
	   
            
			alert(' add selection  is required');
			return false;
        }
		 if(url==""){
	   
            
			alert(' adds url is required');
			return false;
        }
        else{
        	return true;
        }
    }
</script>
</body>
</html>
 