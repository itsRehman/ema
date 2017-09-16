<!DOCTYPE HTML>
<?php
session_start();
$id=$_GET['id'];
?>
<html>
  <head>
    <title>upload event data</title>
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
  color: black !important;
}
  h4{
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
    
    
    -moz-transition:all 2s;
    -webkit-transition:all 2s;
    transition: all 2s; 
  }
#btn_upload_data:hover{
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
							 
							

					<div><span class="image avatar"><img src="profile_pictures/<?php echo $name[2];?>" alt="" /></span></div>
					
					 
									 
					
					<h1 id="logo"><?php echo $name[0]." ".$name[1]; ?></h1>
          <br>
          

        </header>
        <nav id="nav">
          <ul>
            <li><a href="#one" class="active">upload multimadia</a></li>
             
            
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
                        <li><a href="home.php">Home</a></li>
                        
                      </ul>
                    
                  </div>
                </div>
                </div>  
              </header> <!-- End of header div -->  


              <div class="row">
                <div class="col-md-12">
                <h4 align="center"  style="color:#286E88;  ">Choose event picture and videos </h4>
					<br>
      <form class="form-horizontal" name="upload-event-data" method="post" enctype="multipart/form-data" action="">
<fieldset>
 
<!-- Form Name -->
 

 <!-- File Button -->
<div class="form-group">
  <label class="col-md-3 control-label" for="filebutton" style="color:#286E88; font-size: 18px; "> Choose picture &nbsp; &nbsp; &nbsp; &nbsp; <i class="fa fa-arrow-right " aria-hidden="true"></i></label>
  <div class="col-md-4 col-md-offset-1">

   <div id="btn_upload_data">
      <input id="filebutton" name="file[]" class="input-file" type="file"  multiple="multiple">
   </div>
   
  </div>
</div>
 
<!-- Button -->
<div class="form-group">
 
  <div class="col-md-4 col-md-offset-3">
    <button id="singlebutton" type="submit" name="upload" class="btn btn-success" style="width: 200px; font-size: 16px; float: right; ">upload</button>
  </div>
</div>
<input type="hidden" name="eventid" value="<?php echo $id;?>" />

</fieldset>
</form>

                

                  
                </div>
                
              </div>





              </section> <!-- section one end -->

             
<br><br>            
              
<br><br>     
            </div> <!-- Main End -->

        <!-- Footer -->
         <section id="footer">
            <div class="container">
              <div class="copyright">
                <span style="float: right;">CopyRight &copy; 2017</span> 
              </div>
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
$valid_formats = array("jpg", "png", "gif", "zip", "bmp");
$valid_video_formats=array("mp4");
$max_file_size=8388608;
 
 if(isset($_POST['upload'])){
	foreach($_FILES['file']['tmp_name'] as $key => $tmp_name){	
	 $file_name = $_FILES['file']['name'][$key];
	 $file_type = $_FILES['file']['type'][$key];
	 $file_size = $_FILES['file']['size'][$key];
	 $file_tmp = $_FILES['file']['tmp_name'][$key];
	 //$file_extension= pathinfo($file_name,PATHINFO_EXTENSION);
	  $event_id=$_POST['eventid'];
	 $file_ext=explode('.',$_FILES['file']['name'][$key])	;
     $file_ext=end($file_ext);  
     $file_ext=strtolower(end(explode('.',$_FILES['file']['name'][$key]))); 
 
	 if(empty($file_name)){
		 echo "<script>alert('please select file')</script>";
		  
			 exit();  
	 }
	 if(in_array($file_ext,$valid_video_formats)===false && in_array($file_ext,$valid_formats)===false){
		 echo "<script>alert('your file  $file_name  have no valid format')</script>";
	 }
	 if($file_size>$max_file_size){
		echo "<script>alert('your file  $file_name  have no valid size')</script>"; 
		 
	 }
	  else{
		 $con=mysql_connect('localhost','root','') or die("database connectivity error");
mysql_select_db('ema',$con);
	 
	if(in_array($file_ext,$valid_video_formats)===true){
	move_uploaded_file($file_tmp, "event_video/$file_name");
$q=mysql_query("INSERT INTO `event_video`(`event_id`, `name`, `type`, `size`, `extension`) VALUES ('$event_id','$file_name',' $file_type',' $file_size','$file_ext')");
if($q){
	 echo "<script>alert('your video $file_name uploaded successfully')</script>";
	// echo"<script>window.open('profile.php','_self')</script>";
     // exit();
	 }
	 else{
		 echo "<script>alert('your video $file_name uploading field')</script>";
	//exit();
	}
	 }
	  
	 if(in_array($file_ext,$valid_formats)===true){
		 move_uploaded_file($file_tmp, "event_picture/$file_name");
		 $q1=mysql_query(" INSERT INTO `event_picture`(`event_id`, `name`, `type`, `size`, `extension`) VALUES ('$event_id','$file_name',' $file_type',' $file_size',' $file_ext')");
if($q1){
		  
	     echo "<script>alert('your image $file_name  uploaded successfully')</script>";
		// echo"<script>window.open('profile.php','_self')</script>";
	 	//exit();
	 }
	 else{
	echo "<script>alert('your image $file_name uploading field')</script>"; 
			 	//exit();	 
	 }
	}
	 
	 }
	  
	 }
	  
	 echo"<script>window.open('profile.php','_self')</script>";  
	 exit();	
 }
?>
