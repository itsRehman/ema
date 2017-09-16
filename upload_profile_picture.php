<!DOCTYPE HTML>
<?php
session_start();
?>
<html>
  <head>
    <title>upload profile picture</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
      <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/main.css" />
 

<link href='https://fonts.googleapis.com/css?family=BioRhyme Expanded' rel='stylesheet'>
<link href='https://fonts.googleapis.com/css?family=BenchNine' rel='stylesheet'>

    <script type="text/javascript" src="assets/css/bootstrap.min.js"></script>
    <!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->

  <style type="text/css">
  body{
  font-family: 'BenchNine';
  letter-spacing: 1px;

}
h3{
     font-family: 'BioRhyme Expanded';
    color:#307C94;
  }
#logo img{
  width: 45%;
  
  padding-bottom: 10px;
}

.view-more{
  color:#39B3D7;
  text-decoration: none;

}
.view-more:hover{
  color:#39B3D7; 
}

.badge-notify{
   background:red;
   position:relative;
   top: -55px;
   left: -10px;
}
.badge-notifi{
  background:red;
   position:relative;
   top: -55px;
   left: -15px;
}

.sponsor{
  color:white;
  padding-top: 20px;
}

#btn_upload_data{
    background-color: #fff;
     width: 265px;
    height: 265px;
    background-image: url(hg.png);
    background-size: cover;
    
    float: right;
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
  width: 265px;
    height: 265px;
    background-color: #fff;
}

  </style>
  </head>
  <body>

    <!-- Header -->
      <section id="header">
        <header>

          <?php
							$con=mysql_connect("localhost","root", "") or die("database connectivity error");
                            mysql_select_db("ema",$con);
                      $username = mysql_query("SELECT `fristname`,`lastname`,`profile_picture` FROM `user` WHERE email='$_SESSION[email]' ")or die('user selection  query error');
                  $name=mysql_fetch_array($username)
								?>
              <div class="row">
                <div class="col-sm-12">
                  <div class="new-pro-div" align="center">
                    <img src="profile_pictures/<?php echo $name[2];?>" class="img-responsive" alt=""  />
                  </div>
                </div>
              </div>
					 
					<br>
					<h1 id="logo"><?php echo $name[0]." ".$name[1]; ?></h1>
          <br>
          

        </header>
        <nav id="nav">
          <ul>
            <li><a href="#one" class="active">Upload profile picture</a></li>
             
            
          </ul>
        </nav>
       
      </section>

    <!-- Wrapper -->
      <div id="wrapper">

        <!-- Main -->
          <div id="main">

            <!-- One -->
              <section id="one">

              <header class="majr">

                <div class="jumbotron top-menu-div">
                <div class="row">
                  <div class="col-md-4" id="logo">
                    
                      <img src="images/emanew2.png" class="img-responsive">
                    
                  </div>
                  <div class="col-md-8">
                    
                      <ul id="menu-bar">
                      <li><a href="profile.php">Profile</a></li>
                        <li><a href="create-event.php">Create Event</a></li>
                        <li><a href="comp-details.php">Company Details</a></li>
                       
                        <li><a href="home.php" title="Home"><i class="fa fa-home fa-2x" aria-hidden="true"></i></a></li>
                        
                      </ul>
                    
                  </div>
                </div>
                </div>  
              </header> <!-- End of header div -->  


              <div class="row">
                <div class="col-md-12">
                <h4 align="center"  style="color:#286E88; ">Set profile picture  here..</h4>
					<br>
      <form class="form-horizontal" name="upload-profile-picture" method="post" enctype="multipart/form-data" action="">
<fieldset>
 
<!-- Form Name -->
 

 <!-- File Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="filebutton" style="color:#286E88;  ">Select picture</label>

    <div class="col-md-4">
       <a href="" id="upload-a"> 
        <div  id="btn_upload_data" title="Click here for choosing a file">
             <input id="filebutton" name="image" class="input-file" type="file">
        </div>
       </a>  
  </div>
</div>
 
<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="singlebutton" style="color:#286E88;  "> </label>
  <div class="col-md-4">
    <button id="singlebutton" type="submit" name="upload" class="btn btn-success" style="width: 120px; float: right;">Upload</button>
  </div>
</div>

</fieldset>
</form>

                

                  
                </div>
                
              </div>





              </section> <!-- section one end -->

             
            <!-- Three -->
              
              <hr>

            <!-- Four --> 

            </div> <!-- Main End -->

        <!-- Footer -->
          <section id="footer">
            <div class="container">
                 <span style="float: right;">CopyRight &copy; 2017</span>  
               
            </div>
            
           
          </section>

      </div>

    <!-- Scripts -->
      <script src="assets/js/jquery.min.js"></script>
      <script src="assets/css/bootstrap.min.js"></script>
      <script src="assets/js/jquery.scrollzer.min.js"></script>
      <script src="assets/js/jquery.scrolly.min.js"></script>
      <script src="assets/js/skel.min.js"></script>
      <script src="assets/js/util.js"></script>
      <!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
      <script src="assets/js/main.js"></script>

  </body>
</html>

<?php
 if(isset($_POST['upload'])){
	  
	 $image_name = $_FILES['image']['name'];
	 $image_type = $_FILES['image']['type'];
	 $image_size = $_FILES['image']['size'];
	 $image_tmp = $_FILES['image']['tmp_name'];
	 $image_extension= pathinfo($image_name,PATHINFO_EXTENSION);
	  $for='profile';
	 
 if(empty($image_name)){
		 echo "<script>alert('please select profile picture')</script>";
		 echo"<script>window.open('upload_profile_picture.php','_self')</script>";
			 exit();  
	 }
    if($image_extension!="jpg"){
       echo "<script>alert('logo format is not valide')</script>";
     echo"<script>window.open('upload_profile_picture.php','_self')</script>";
       exit();  
   }
	 else{
		 $con=mysql_connect('localhost','root','') or die("database connectivity error");
mysql_select_db('ema',$con);


	 

	 if(move_uploaded_file($image_tmp, "profile_pictures/$image_name")){
		 $q1=mysql_query("UPDATE `ema`.`user` SET `profile_picture` = '$image_name'  WHERE `user`.`email` = '$_SESSION[email]' ") or die ('profile page q1 error');
   
if($q1){
		  
		 echo "<script>alert('your profile picture  uploaded successfully')</script>";
		 echo"<script>window.open('profile.php','_self')</script>";
	 	exit();
	 }
   else{
     echo "<script>alert('your profile picture  uploading filed')</script>";
     echo"<script>window.open('upload_profile_picture.php','_self')</script>";
    exit();
   }
  }
	 else{
	echo "<script>alert('your profile picture field please select right pic and try again')</script>"; 
			 	echo"<script>window.open('upload_profile_picture.php','_self')</script>";
				exit();	 
	 }
	}
	
	
 
}

?>