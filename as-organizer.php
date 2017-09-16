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
 #companynameerror{
 color:red;
 font-size:90%; !important;
 }
 #companynamesuccess{
 color:green;
 font-size:90%; !important;
 }
 .form-group .form-control{
  border-radius: 0;
  border: 0;
  border-bottom: 2px solid  #196E88;
  box-shadow: none;
  background: white;
}
.form-group .form-control:focus{
  border-radius: 0;
  border: 0;
  border-bottom: 2px solid  #AAAAAA;
  background: white;
  box-shadow: none;
}
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
  .fa-caret-down {
   font-size: 18px;
   color: #AAAAAA;
  top: 10px;
  left: 325px;
  position: absolute;
  z-index: 2;
  }
  #specialityerror{
 color:red;
 font-size:90%; !important;
 }
 #specialitysuccess{
 color:green;
 font-size:90%; !important;
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
              <div class="new-pro-div">
                <img src="profile_pictures/<?php echo $name[2];?>" class="img-responsive" alt="" />
              </div>
            </div>
          </div>
					 
									 
									  
					<br>
					<h1 id="logo"><?php echo $name[0]." ".$name[1]; ?></h1>
         

        </header>
        <nav id="nav">
          <ul>
            <li><a href="#one" class="active"> Build Organization</a></li>
            <li><a href="#four">Contact EMA</a></li>
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
                        <li><a href="comp-details.php">Org Details</a></li>
                        <li><a href="home.php" title="Home" style="text-decoration: none !important;"><i class="fa fa-home fa-2x" aria-hidden="true"></i></a></li>
                        
                      </ul>
                    
                  </div>
                </div>
                </div>  
              </header> <!-- End of header div -->  


              <div class="row">
                <div class="col-md-12">

                    <form class="form-horizontal" name="as-arganizer" method="post" action="as_organizer_php.php" onsubmit=" return validatedata();">
<fieldset>

<!-- Form Name -->
<legend style="color:#286E88; padding-left: 380px;   font-size: 26px; font-weight: bolder; letter-spacing: 2px; ">Build your own organization</legend>
<br>
<br>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="company" style="color:#286E88;      ">ORG Name</label>  
  <div class="col-md-4">
  <input id="company" name="companyname" type="text" placeholder="Entitle Your Organization" class="form-control input-md" oninput="companynamevalidat();"><span id="companynameerror"></span><span id="companynamesuccess"></span>
   </div>
</div>




<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="textarea"  style="color:#286E88;  ">About Organization</label>
  <div class="col-md-4">                     
    <textarea class="form-control" id="aboutcompany" name="about" placeholder="Discribe your organization"></textarea>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="company" style="color:#286E88;     ">Speciality</label>  
  <div class="col-md-4">
  <input  name="special"  id="spl" type="text" placeholder="Enter your main service" class="form-control input-md" oninput="specialityvalidat();"> <span id="specialityerror"></span><span id="specialitysuccess"></span>
   </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="selectbasic"  style="color:#286E88;   ">Select Country</label>
  <div class="col-md-4">
    <select id="companycountry" name="country" class="form-control">
      <option value=""></option>
      <option value="india">India</option>
      <option value="pakistan">Pakistan</option>
      <option value="USA">USA</option>
       
    </select>
    <i class="fa fa-caret-down" area-hidden=="true"></i>
  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="selectbasic"  style="color:#286E88;  ">Select City</label>
  <div class="col-md-4">
    <select id="companycity" name="city" class="form-control">
      <option value=""></option>
      <option value="peshawar">Peshawar</option>
      <option value="lahore">Lahore</option>
	   <option value="banglor">banglor</option>
	    <option value="washingtan">washingtan</option>
    </select>
     <i class="fa fa-caret-down" area-hidden=="true"></i>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput" style="color:#286E88;   ">Address </label>  
  <div class="col-md-4">
  <input id="companyaddress" name="address" type="text" placeholder="Locality" class="form-control input-md" >
    
  </div>
</div>

<!-- File Button 
<div class="form-group">
  <label class="col-md-4 control-label" for="filebutton" style="color:#286E88;  font-family: 'Kaushan Script', cursive;  ">Logo / image</label>
  <div class="col-md-4">
    <input id="filebutton" name="filebutton" class="input-file" type="file">
  </div>
</div>
--> 
<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="singlebutton" style="color:#286E88; font-weight: 600; letter-spacing: 2px ; font-size: 28px;   ">Starts Earning </label>
  <div class="col-md-4">
    <button id="singlebutton" type="submit" name="register" title="Register Organization" class="btn btn-success" style="float: right; padding: 10px; letter-spacing: 2px;">Get Register </button>
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
              <section id="four">
                <div class="container">
                  <h4 style="color:#286E88; font-family: 'BioRhyme Expanded'; ">Improve EMA  </h4>
                  <p style="color:#286E88;  font-family: 'BioRhyme Expanded'; ">Let's do it </p>
                  <form method="post" action="suggestion.php" class="form-group" name="suggetion">
                    
                    <div class="row uniform">
                      <div class="12u"> <input type="text" name="subject" id="subject" class="form-control" placeholder="A short title" /></div>
                    </div>
                    <div class="row uniform">
                      <div class="12u"><textarea name="suggestion" id="message" class="form-control" placeholder="Write Suggestion" rows="6"></textarea></div>
                    </div>
                    <div class="row uniform">
                      <div class="12u">
                        <ul class="actions">
                          <li><input type="submit" name="sendsuggestion" title="Send Suggestion" class="special" value="Send Suggestion" style="width: 200px; letter-spacing: 2px ; margin-left: 700px;"  /></li>
                        </ul>
                        <input type="hidden" name="fpage" value="as-organizer.php">
                      </div>
                    </div>
                  </form>
                </div>
              </section> <!-- section four end -->

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
<script type="text/javascript">
//validation for company name
 function companynamevalidat(){
		var companyReg = /^[A-Za-z ]+$/;
      var company = $('#company').val();
	  var massage = "";
	  if(companyReg.test(company)){
	  massage= " company name is valid";
            $("#companynamesuccess").html(massage); 
			  $("#companynameerror").html(''); 
			  
        }
		if(!companyReg.test(company)){
	  massage= "company name is invalid";
            $("#companynameerror").html(massage); 
			 $("#companynamesuccess").html(''); 
			  
        }
		if(company==""){
	 $("#companynameerror").html(''); 
	 $("#companynamesuccess").html('');
	  
	 }
	   
	  }
    // validate spiciality

    function specialityvalidat(){
    var specialReg = /^[A-Za-z ]+$/;
      var spl = $('#spl').val();
    var massage = "";
    if(specialReg.test(spl)){
    massage= "speciality format is valid";
            $("#specialitysuccess").html(massage); 
       $("#specialityerror").html(''); 
        
        }
    if(!specialReg.test(spl)){
    massage= "speciality format is Invalid";
            $("#specialityerror").html(massage); 
       $("#specialitysuccess").html(''); 
        
        }
    if(spl==""){
   $("#specialityerror").html(''); 
   $("#specialitysuccess").html('');
    
   }
     
    }
	  //validate form on submition

  function validatedata(){ 
  
   var companyn = document.getElementById('company').value;
	var aboutcompany = document.getElementById('aboutcompany').value;
	var country = document.getElementById('companycountry').value;
	var city = document.getElementById('companycity').value;
	var address = document.getElementById('companyaddress').value;
  var speciality = document.getElementById('spl').value;
    
		 var compReg = /^[A-Za-z ]+$/;
    
		if(companyn==""){
	   
            
			alert(' company name is required');
			return false;
        }
		 if(aboutcompany==""){
	   
            
			alert(' about company is required');
			return false;
        }
		if(country==""){
	   
            
			alert(' Country is required');
			return false;
        }
		  if(city==""){
	   
            
			alert(' city is required');
			return false;
        }
		 if(address==""){
	   
            
			alert(' address is required');
			return false;
        }
        if(speciality==""){
     
            
      alert(' speciality is required');
      return false;
        }
 
	if(!companyn.match(compReg)){
		alert('company name formate is invalid');
	   return false;
             
	}
  if(!speciality.match(compReg)){
    alert('speciality formate is invalid');
     return false;
             
  }
	  else{
		 return true;
		 } 
	   
	  }
	  </script>