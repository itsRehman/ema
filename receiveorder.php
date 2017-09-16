 <!DOCTYPE HTML>
<?php
session_start();
?>
<html>
  <head>
    <title>Recive order</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
      <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/main.css" />

    <script type="text/javascript" src="assets/css/bootstrap.min.js"></script>

    <link href='https://fonts.googleapis.com/css?family=BioRhyme Expanded' rel='stylesheet'>
<link href='https://fonts.googleapis.com/css?family=BenchNine' rel='stylesheet'>
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
								 $username = mysql_query(" SELECT `companyname`,`logo` FROM `organizer` WHERE organizer_email='$_SESSION[email]' ")or die('company selection  query error');
                  $name=mysql_fetch_array($username)
								?>

					<div class="row">
            <div class="col-sm-12">
              <div class="new-pro-div">
                <img src="profile_pictures/<?php echo $name[1];?>" class="img-responsive" alt="" />
              </div>
            </div>
          </div>
					 
					     
          <br>
					<h1 id="logo"><?php echo $name[0]; ?></h1>
          

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
                        <li><a href="comp-details.php">ORG Details</a></li>
                        
                        <li><a href="home.php" title="Home"><i class="fa fa-home fa-2x" aria-hidden="true"></i></a></li>
                        
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
   $query=mysql_query(" select * from ema.order where organizer_email='$_SESSION[email]' and state='new' ") or die('order table selection query error');
 
if(mysql_num_rows($query)>0){
  while($emailrows=mysql_fetch_array($query)){
    $senderemail=$emailrows[0];
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
              <span class="order-statement">Send you an Order</span>
            </div>
            <div class="col-md-3" align="center">
              <a href="order-view.php?senderemail=<?php echo $senderemail;?>&&id=<?php echo $emailrows[2]?>&&orderno=<?php echo $emailrows[4]?>&&state=new"><button class="btn btn-danger">View</button></a>
            </div>
          </div>
           
        </div>
      </div>
          
               
		  
		   
           
            
<?php         
     
}
 	
}
else{
	?>
	<div ><font size="5" color="gray">
	<center>There is no new order</center>

	</div>
<?php
	}
	?>
	</div>	 
</section> <!-- section one end -->
                  
                </div>
                
              </div>
		</div> <!-- Main End -->

        <!-- Footer -->
        <br>
          <br>
                <div class="row" style="padding: 20px;">
                 <?php
             if(isset($_POST['viewall'])){
              $orderviewquery=mysql_query(" select * from ema.order where organizer_email='$_SESSION[email]' and state='read' ") or die('order table selection query error');
 
if(mysql_num_rows($orderviewquery)>0){
  while($email_rows=mysql_fetch_array($orderviewquery)){
$sender_email=$email_rows[0];
     $order_sender=mysql_query("select user.fristname,user.lastname,user.profile_picture  from user  where  user.email='$sender_email'") or die(' read order sender table selection query error');
     $sender_detail=mysql_fetch_array($order_sender);
     
   ?>



<div class="col-md-6" style="padding-top: 20px;padding-bottom: 20px;">
        <div class="organizer-div">
          <div class="row">
            <div class="col-md-3" align="center">
               <div class="organizer-image">

                  
                <img src="profile_pictures/<?php echo  $sender_detail[2];?>" class="img-rounded">
                
            </div>
            </div>
            <div class="col-md-6">
              <h4><?php echo $sender_detail[0]." ".$sender_detail[1];?></h4> 
              <span style="color: gray; font-size: 16px;">You view this before</span>
            </div>
            <div class="col-md-3" align="center">
              <a  href="order-view.php?senderemail=<?php echo $sender_email;?>&&id=<?php echo $email_rows[2]?>&&orderno=<?php echo $email_rows[4]?>&&state=read"><button class="btn btn-warning">View</button></a>
            </div>
          </div>
           
        </div>
      </div>
          
               
      
       
           
            
<?php         

          }
        }
        else{
           
        }
             
             ?>

                 
                <!-- work stream state-->
                <?php
                 $orderviewquerys=mysql_query(" select * from ema.order where organizer_email='$_SESSION[email]' and state='workstream' ") or die('order table selection query error');
 
if(mysql_num_rows($orderviewquerys)>0){
  while($email_rowss=mysql_fetch_array($orderviewquerys)){
$sender_emails=$email_rowss[0];
     $order_senders=mysql_query("select user.fristname,user.lastname,user.profile_picture  from user  where  user.email='$sender_emails'") or die(' read order sender table selection query error');
     $sender_details=mysql_fetch_array($order_senders);
     
   ?>



<div class="col-md-6" style="padding-top: 20px;padding-bottom: 20px;">
        <div class="organizer-div">
          <div class="row">
            <div class="col-md-3" align="center">
               <div class="organizer-image">

                 
                <img src="profile_pictures/<?php echo $sender_details[2];?>" class="img-rounded">
                 
            </div>
            </div>
            <div class="col-md-6">
              <h5 style="color:#286E88; "><?php echo $sender_details[0]." ".$sender_details[1];?></h5> 
              <span style="font-size: 16px;">Your Workstream is created</span>
            </div>
            <div class="col-md-3" align="center">
            <div style="padding: 5px;">
              <a  href="order-view.php?senderemail=<?php echo $sender_emails;?>&&id=<?php echo $email_rowss[2]?>&&orderno=<?php echo $email_rowss[4]?>&&state=workstream">
              <button class="btn btn-primary" >View</button>
              <?php
              $pay=mysql_query("SELECT * from `ema`.`order_payment` where `order_no`='$email_rowss[4]' ") or die("payment selection query error");
              if(mysql_num_rows($pay)>0){
              ?>
               <span style="background-color: red; color: white; padding: 2px; font-size: 12px; border-radius: 50%; position: relative; top: -50px; left:25px;" title="Payment recived please confirm">Paid</span>
               <?php 
             }
             ?>
                </a>
                </div>
            </div>
          </div>
           
        </div>
      </div>
          
               
      
       
           
            
<?php         

          }
        }
        else{
          
        }
             
             ?>

                 
                <!--completed orders-->
                  <?php
                 $orderviewqueryc=mysql_query(" select * from ema.order where organizer_email='$_SESSION[email]' and state='completed' ") or die('order table selection query error');
 
if(mysql_num_rows($orderviewqueryc)>0){
  while($email_rowsc=mysql_fetch_array($orderviewqueryc)){
$sender_emailc=$email_rowsc[0];
     $order_senderc=mysql_query("select user.fristname,user.lastname,user.profile_picture  from user  where  user.email='$sender_emailc'") or die(' read order sender table selection query error');
     $sender_detailc=mysql_fetch_array($order_senderc);
     
   ?>



<div class="col-md-6" style="padding-top: 20px;padding-bottom: 20px;">
        <div class="organizer-div">
          <div class="row">
            <div class="col-md-3" align="center">
               <div class="organizer-image">

                 
                <img src="profile_pictures/<?php echo $sender_detailc[2];?>" class="img-rounded">
                 
            </div>
            </div>
            <div class="col-md-6">
              <h5  style="color:#286E88; "><?php echo $sender_detailc[0]." ".$sender_detailc[1];?></h5> 
              <span style="font-size: 16px;">Completed Order</span>
            </div>
            <div class="col-md-3" align="center">
              <a  href="order-view.php?senderemail=<?php echo $sender_emailc;?>&&id=<?php echo $email_rowsc[2]?>&&orderno=<?php echo $email_rowsc[4]?>&&state=completed"><button class="btn btn-success">View</button></a>
            </div>
          </div>
           
        </div>
      </div>
          
               
      
       
           
            
<?php         

          }
        }
        else{
          
        }
             }
             ?>

                </div>


             <form method="post" action="" name="viewmor"> 
             <button type="submit"  name="viewall" class="btn btn-success allorder" style="width:300px; margin-left: 35%; letter-spacing: 2px;" >VIEW ALL ORDERS</button>
              
             </form>
             <br>
             <br>
             <br>
             <br>
             <br>
             <br> 
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