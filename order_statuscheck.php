 <!DOCTYPE HTML>
<?php
session_start();
$eventid=$_GET['eventid'];
?>
<html>
  <head>
    <title> order  status check</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
      <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/main.css" />

    <link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet">

    <script type="text/javascript" src="assets/css/bootstrap.min.js"></script>
    <!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->

  <style type="text/css">
 
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
  background-color:   #F0F8FF;
  padding-bottom: 5px;
  border-radius: 4px;
  box-shadow: 10px 15px 25px gray;
}
.organizer-div h4{
  color: #196E88;
}
.organizer-image{
  width: 100px;
  height: 80px;
}
.organizer-image img{
  width: 100%;
  height: 100%;
}
.organizer-row{
  padding: 20px;
}
.organizer-div button{
  font-size: 14px;
  letter-spacing: 2px;
  width: 70px;
}
.order-statement{
  color: gray;
  float: right;
  font-weight: 12px;
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
              <div class="new-pro-div">
                <img src="profile_pictures/<?php echo  $name[2];?>" class="img-responsive" alt="" />
              </div>
            </div>
          </div>
					 
									  
					     
          <br>
					<h1 id="logo"><?php echo $name[0]." ".$name[1]; ?></h1>
          

        </header>
        <nav id="nav">
          <ul>
            <li><a href="#one" class="active">Order's</a></li>
            
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
                <div class="col-md-12 table-responsive">
                <h4 align="center"  style="color:#286E88; ">Order's</h4>

             <section id="one">
             <div class="row organizer-row">
         <?php
		 
  $con=mysql_connect("localhost","root","") or die(' connection query error');
 $db=mysql_select_db('ema',$con) or die('database selection  query error');
   $query=mysql_query(" select * from ema.order where event_id='$eventid' and (state='new' or state='read') ") or die(' new order table selection query error');
 
if(mysql_num_rows($query)>0){
  while($emailrows=mysql_fetch_array($query)){
    $senderemail=$emailrows[1];
     $ordersender=mysql_query(" select user.fristname,user.lastname,user.profile_picture  from user  where  user.email='$senderemail'") or die('order sender table selection query error');
     $senderdetail=mysql_fetch_array($ordersender);
	   
	 ?>



<div class="col-md-6" style="padding-top: 20px;padding-bottom: 20px;">
        <div class="organizer-div">
          <div class="row">
            <div class="col-md-3" align="center">
               <div class="organizer-image">
               
                <img src="profile_pictures/<?php echo $senderdetail[2];?>" class="img-rounded">
                
            </div>
            </div>
            <div class="col-md-6">
              <h4><?php echo $senderdetail[0]." ".$senderdetail[1];?></h4> 
              <span class="order-statement">Panding Order</span>
            </div>
            <div class="col-md-3" align="center">
              <a href="order_confirm.php?senderemail=<?php echo $emailrows[0];?>&&reciveremail=<?php echo $emailrows[1];?>&&id=<?php echo $emailrows[2]?>&&orderno=<?php echo $emailrows[4]?>&&state=newread"><i class="fa fa-hourglass-half fa-4x"></i>
              </a>
            </div>
          </div>
           
        </div>
      </div>
        
<?php         
     
}
 	
}
	?>
	</div>	 
</section> <!-- section one end -->
<!---reject order start-->
 <div class="row organizer-row">
         <?php
     
   
   $queryreject=mysql_query(" select * from ema.order where event_id='$eventid' and state='reject' ") or die(' new order table selection query error');
 
if(mysql_num_rows($queryreject)>0){
  while($emailrowsreject=mysql_fetch_array($queryreject)){
    $senderemailreject=$emailrowsreject[1];
     $ordersenderreject=mysql_query(" select user.fristname,user.lastname,user.profile_picture  from user  where  user.email='$senderemailreject'") or die(' reject order sender table selection query error');
     $senderdetailreject=mysql_fetch_array($ordersenderreject);
     
   ?>



<div class="col-md-6" style="padding-top: 20px;padding-bottom: 20px;">
        <div class="organizer-div">
          <div class="row">
            <div class="col-md-3" align="center">
               <div class="organizer-image">
                
                <img src="profile_pictures/<?php echo $senderdetailreject[2];?>" class="img-rounded">
              
            </div>
            </div>
            <div class="col-md-6">
              <h4><?php echo $senderdetailreject[0]." ".$senderdetailreject[1];?></h4> 
              <span class="order-statement">Rejected Order</span>
            </div>
            <div class="col-md-3" align="center">
              <a href="order_confirm.php?senderemail=<?php echo  $emailrowsreject[0];?>&&reciveremail=<?php echo  $emailrowsreject[1];?>&&id=<?php echo $emailrowsreject[2]?>&&orderno=<?php echo $emailrowsreject[4]?>&&state=reject"><i class="fa fa-close fa-4x" style="color: red"></i>
              </a>
            </div>
          </div>
           
        </div>
      </div>
        
<?php         
     
}
  
}
  ?>
  </div>
<!---reject order end-->

<!---workstream order start-->
 <div class="row organizer-row">
         <?php
     
   
   $queryworkstream=mysql_query(" select * from ema.order where event_id='$eventid' and state='workstream' ") or die(' new order table selection query error');
 
if(mysql_num_rows($queryworkstream)>0){
  while($emailrowsworkstream=mysql_fetch_array($queryworkstream)){
    $senderemailworkstream=$emailrowsworkstream[1];
     $ordersenderworkstream=mysql_query(" select user.fristname,user.lastname,user.profile_picture  from user  where  user.email='$senderemailworkstream'") or die(' workstream order sender table selection query error');
     $senderdetailworkstream=mysql_fetch_array($ordersenderworkstream);
     
   ?>



<div class="col-md-6" style="padding-top: 20px;padding-bottom: 20px;">
        <div class="organizer-div">
          <div class="row">
            <div class="col-md-3" align="center">
               <div class="organizer-image">
               
                <img src="profile_pictures/<?php echo $senderdetailworkstream[2];?>" class="img-rounded">
                
            </div>
            </div>
            <div class="col-md-6">
              <h4><?php echo $senderdetailworkstream[0]." ".$senderdetailworkstream[1];?></h4> 
              <span class="order-statement">In the Workstream</span>
            </div>
            <div class="col-md-3" align="center">
              <a href="order_confirm.php?senderemail=<?php echo $emailrowsworkstream[0];?>&&reciveremail=<?php echo $emailrowsworkstream[1];?>&&id=<?php echo $emailrowsworkstream[2]?>&&orderno=<?php echo $emailrowsworkstream[4]?>&&state=workstream"><i class="fa fa-clock-o fa-4x" style="color: green;"></i>
              </a>
            </div>
          </div>
           
        </div>
      </div>
        
<?php         
     
}
  
}
  ?>
  </div>
<!---workstream order start-->

<!---completed order start-->
 <div class="row organizer-row">
         <?php
     
   
   $querycompleted=mysql_query(" select * from ema.order where event_id='$eventid' and state='completed' ") or die(' new order table selection query error');
 
if(mysql_num_rows($querycompleted)>0){
  while($emailrowscompleted=mysql_fetch_array($querycompleted)){
    $senderemailcompleted=$emailrowscompleted[1];
     $ordersendercompleted=mysql_query(" select user.fristname,user.lastname,user.profile_picture  from user  where  user.email='$senderemailcompleted'") or die(' workstream order sender table selection query error');
     $senderdetailcompleted=mysql_fetch_array($ordersendercompleted);
     
   ?>



<div class="col-md-6" style="padding-top: 20px;padding-bottom: 20px;">
        <div class="organizer-div">
          <div class="row">
            <div class="col-md-3" align="center">
               <div class="organizer-image">
                
                <img src="profile_pictures/<?php echo $senderdetailcompleted[2];?>" class="img-rounded">
                 
            </div>
            </div>
            <div class="col-md-6">
              <h4><?php echo $senderdetailcompleted[0]." ".$senderdetailcompleted[1];?></h4> 
              <span class="order-statement">Completed Order</span>
            </div>
            <div class="col-md-3" align="center">
              <a href="order_confirm.php?senderemail=<?php echo $emailrowscompleted[0];?>&&reciveremail=<?php echo $emailrowscompleted[1];?>&&id=<?php echo $emailrowscompleted[2]?>&&orderno=<?php echo $emailrowscompleted[4]?>&&state=completed">
                <i class="fa fa-check fa-4x" style="color: #196E88;"></i>
              </a>
            </div>
          </div>
           
        </div>
      </div>
        
<?php         
     
}
  
}
  ?>
  </div>
<!---workstream order start-->
                  
                </div>
                
              </div>
		</div> <!-- Main End -->

        <!-- Footer -->
        <br>
          <br>
                


              
             <br>
             <br>
             <br>
             <br>
             <br>
             <br> 
             <br>
             <br> 
             <br><br>
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