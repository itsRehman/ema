 <!DOCTYPE HTML>
<?php
session_start();
?>
<html>
  <head>
    <title>As organizer</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
      <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/main.css" />

    <link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet">

    <script type="text/javascript" src="assets/css/bootstrap.min.js"></script>
    <!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->

  <style type="text/css">
  .new-pro-div{
  width: 140px;
  height: 140px;
  border-radius: 100%;
  align-content: center;
  margin-left: 25%;

}
.new-pro-div img{
  width: 100%;
  height: 100%;
  border-radius: 100%;
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

.organizer-div{
  border-style: outset;
   padding-bottom: 5px;
  border-radius: 4px;
  background-color:   #F0F8FF;
 
  box-shadow: 10px 15px 25px gray;
}
.organizer-div h4{
  color: #196E88;
}
.organizer-image{
  width: 120px;
  height: 100px;
}
.organizer-image img{
  width: 100%;
  height: 100%;
}
.organizer-row{
  padding: 20px;
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
                  $name=mysql_fetch_array($username);
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
            <li><a href="#one" class="active">Organizer's </a></li>
            
          </ul>
		  
        </nav>
        
      </section>

    <!-- Wrapper -->
      <div id="wrapper">

        <!-- Main -->
          <div id="main">

            <!-- One -->
              <section class="" id="one">

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


                 
                <h4 align="center"  style="color:#286E88; ">Select Organizer</h4>

               <div class="row organizer-row">
             
         <?php
		 $id=$_GET['id'];
  $con=mysql_connect("localhost","root","") or die(' connection query error');
 $db=mysql_select_db('ema',$con) or die('database selection  query error');
   $query=mysql_query(" select user.fristname,user.lastname,organizer.organizer_email,organizer.companyname,organizer.country,organizer.city,organizer.special,user.profile_picture from user JOIN organizer where user.email=organizer.organizer_email") or die('organizer   table selection query error');
 
if(mysql_num_rows($query)>0){
	   while($rows=mysql_fetch_array($query)){
		  ?>
      <div class="col-md-4" style="padding-top: 20px;padding-bottom: 20px;">
        <div class="organizer-div" align="center">
              <h4><?php echo $rows[6];?></h4>
            <div class="organizer-image">
             

              <img src="profile_pictures/<?php echo $rows[7];?>" class="img-circle">
              

            </div>
            <h4><?php echo $rows[0]." ".$rows[1];?></h4> 
        <span> <?php echo $rows[3];?></span> <br>
        <span style="color:#307C94 !important;">From : </span> <span><?php echo $rows[5];?></span> <br> <span><?php echo $rows[4];?></span> <br>
        <a href="orderpage.php?email=<?php echo $rows[2];?>&&id=<?php echo $id;?>&&page=<?php echo "organizers.php";?>"><button class="btn btn-success" style="width: 100px; font-size: 14px !important; letter-spacing: 2px;">Order Now</button></a>
        </div>
      </div>
		   
	<?php
		  }
}
else{
	?>
	<p><font size="5" color="green">
	<center>There is no  any organizer currently register..ok!!</center>
	</font>
	</p>
<?php
	}
	?>
   
  </div>
   
		<!-- ,,,,,,,,, new code ,,,,, --> 
 
</section> <!-- section one end -->


                  
                
                
              
		</div> <!-- Main End -->

        <!-- Footer -->
         <section id="footer">
            <div class="container">
              <div>
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