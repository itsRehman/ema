<!DOCTYPE HTML>
<?php
session_start();
?>
<html>
	<head>
		<title>create event page</title> 
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
			<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
		<link rel="stylesheet" href="assets/css/main.css" />
		<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
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
  #titleerror{
 color:red;
 font-size:90%; !important;
 }
 #titlesuccess{
 color:green;
 font-size:90%; !important;
 }
   #startdateerror{
 color:red;
 font-size:90%; !important;
 }
 #startdatesuccess{
 color:green;
 font-size:90%; !important;
 }
  #endingdateerror{
 color:red;
 font-size:90%; !important;
 }
 #endingdatesuccess{
 color:green;
 font-size:90%; !important;
 }
 #ticketerror{
 color:red;
 font-size:90%; !important;
 }
 #ticketsuccess{
 color:green;
 font-size:90%; !important;
 }
 #priceerror{
 color:red;
 font-size:90%; !important;
 }
 #pricesuccess{
 color:green;
 font-size:90%; !important;
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
	left: 230px;
	position: absolute;
	z-index: 2;
	}
	.caert-down-country{
		font-size: 18px;
   color: #AAAAAA;
	top: 10px;
	left: 310px;
	position: absolute;
	z-index: 2;
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
.upload-col span{
	position: relative;
	top: 20px;
	left: 150px;
	font-size: 18px;
	color: #196E88;
	font-weight: bolder;
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
						<li><a href="#one" class="active"> Event registration</a></li>
							<li><a href="#three">Contact EMA</a></li>
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
												<li><a href="as-organizer.php">As Organizer</a></li>
												<li><a href="comp-details.php">Org Details</a></li>
												<li><a href="home.php" title="Home" style="text-decoration: none !important;"><i class="fa fa-home fa-2x" aria-hidden="true"></i></a></li>
												
											</ul>
										
									</div>
								</div>
								</div>	
							</header> <!-- End of header div -->	


							<div class="row">
								<div class="col-md-11">
								<h4  style="color:#286E88; padding-left: 380px; letter-spacing: 2px;  font-size: 26px; ">&nbsp;Make your Event live</h4>
								<br>

<form class="form-horizontal form-group" name="create-event" method="post" action="create_event_php.php"  onsubmit=" return validatedata();" enctype="multipart/form-data" >
 

<!-- Text input-->
<div class="row">
  <label class="col-md-3 control-label fo" for="textinput" style="color:#286E88;">Title</label>  
  <div class="col-md-4">
  <input id="eventtitle" name="title" type="text" placeholder="Give it a short distinct name" class="form-control input-m" oninput="titlevalidat();"><span id="titleerror"></span><span id="titlesuccess"></span>
    
  </div>


<!-- Select Basic -->

  <label class="col-md-2 control-label" for="selectbasic"  style="color:#286E88; ">Catagory </label>
  <div class="col-md-3">
    <select id="eventcategory" name="category" class="form-control" >
      <option value=""></option>
      <option value="birthday">Birthday</option>
      <option value="conference">Conference</option>
      <option value="concert">Concert</option>
      <option value="expo">Expo</option>
      <option value="meeting">Meeting</option>
      <option value="party">Party</option>
      <option value="sports">Sports</option>
      <option value="seminer">Seminar</option>
      <option value="webinar">Webinar</option>
      <option value="wedding">Wedding</option>
      <option value="work shop">Work shop</option>
      <option value="other">Other</option>
    </select>
    <i class="fa fa-caret-down" area-hidden=="true"></i>
  </div>
</div>

<br>
 <!-- Select country -->
<div class="row">
  <label class="col-md-3 control-label" for="selectbasic"  style="color:#286E88;">Select Country</label>
  <div class="col-md-4">
    <select id="eventcountry" name="country" class="form-control">
      <option value=""></option>
      <option value="Afghanista">Afghanistan</option>
	<option value="Åland Islands">Åland Islands</option>
	<option value="AL">Albania</option>
	<option value="DZ">Algeria</option>
	<option value="AS">American Samoa</option>
	<option value="AD">Andorra</option>
	<option value="AO">Angola</option>
	<option value="AI">Anguilla</option>
	<option value="AQ">Antarctica</option>
	<option value="AG">Antigua and Barbuda</option>
	<option value="AR">Argentina</option>
	<option value="AM">Armenia</option>
	<option value="AW">Aruba</option>
	<option value="AU">Australia</option>
	<option value="AT">Austria</option>
	<option value="AZ">Azerbaijan</option>
	<option value="BS">Bahamas</option>
	<option value="BH">Bahrain</option>
	<option value="BD">Bangladesh</option>
	<option value="BB">Barbados</option>
	<option value="BY">Belarus</option>
	<option value="BE">Belgium</option>
	<option value="BZ">Belize</option>
	<option value="BJ">Benin</option>
	<option value="BM">Bermuda</option>
	<option value="BT">Bhutan</option>
	<option value="BO">Bolivia, Plurinational State of</option>
	<option value="BQ">Bonaire, Sint Eustatius and Saba</option>
	<option value="BA">Bosnia and Herzegovina</option>
	<option value="BW">Botswana</option>
	<option value="BV">Bouvet Island</option>
	<option value="BR">Brazil</option>
	<option value="IO">British Indian Ocean Territory</option>
	<option value="BN">Brunei Darussalam</option>
	<option value="BG">Bulgaria</option>
	<option value="BF">Burkina Faso</option>
	<option value="BI">Burundi</option>
	<option value="KH">Cambodia</option>
	<option value="CM">Cameroon</option>
	<option value="CA">Canada</option>
	<option value="CV">Cape Verde</option>
	<option value="KY">Cayman Islands</option>
	<option value="CF">Central African Republic</option>
	<option value="TD">Chad</option>
	<option value="CL">Chile</option>
	<option value="CN">China</option>
	<option value="CX">Christmas Island</option>
	<option value="CC">Cocos (Keeling) Islands</option>
	<option value="CO">Colombia</option>
	<option value="KM">Comoros</option>
	<option value="CG">Congo</option>
	<option value="CD">Congo, the Democratic Republic of the</option>
	<option value="CK">Cook Islands</option>
	<option value="CR">Costa Rica</option>
	<option value="CI">Côte d'Ivoire</option>
	<option value="HR">Croatia</option>
	<option value="CU">Cuba</option>
	<option value="CW">Curaçao</option>
	<option value="CY">Cyprus</option>
	<option value="CZ">Czech Republic</option>
	<option value="DK">Denmark</option>
	<option value="DJ">Djibouti</option>
	<option value="DM">Dominica</option>
	<option value="DO">Dominican Republic</option>
	<option value="EC">Ecuador</option>
	<option value="EG">Egypt</option>
	<option value="SV">El Salvador</option>
	<option value="GQ">Equatorial Guinea</option>
	<option value="ER">Eritrea</option>
	<option value="EE">Estonia</option>
	<option value="ET">Ethiopia</option>
	<option value="FK">Falkland Islands (Malvinas)</option>
	<option value="FO">Faroe Islands</option>
	<option value="FJ">Fiji</option>
	<option value="FI">Finland</option>
	<option value="FR">France</option>
	<option value="GF">French Guiana</option>
	<option value="PF">French Polynesia</option>
	<option value="TF">French Southern Territories</option>
	<option value="GA">Gabon</option>
	<option value="GM">Gambia</option>
	<option value="GE">Georgia</option>
	<option value="DE">Germany</option>
	<option value="GH">Ghana</option>
	<option value="GI">Gibraltar</option>
	<option value="GR">Greece</option>
	<option value="GL">Greenland</option>
	<option value="GD">Grenada</option>
	<option value="GP">Guadeloupe</option>
	<option value="GU">Guam</option>
	<option value="GT">Guatemala</option>
	<option value="GG">Guernsey</option>
	<option value="GN">Guinea</option>
	<option value="GW">Guinea-Bissau</option>
	<option value="GY">Guyana</option>
	<option value="HT">Haiti</option>
	<option value="HM">Heard Island and McDonald Islands</option>
	<option value="VA">Holy See (Vatican City State)</option>
	<option value="HN">Honduras</option>
	<option value="HK">Hong Kong</option>
	<option value="HU">Hungary</option>
	<option value="IS">Iceland</option>
	<option value="IN">India</option>
	<option value="ID">Indonesia</option>
	<option value="IR">Iran, Islamic Republic of</option>
	<option value="IQ">Iraq</option>
	<option value="IE">Ireland</option>
	<option value="IM">Isle of Man</option>
	<option value="IL">Israel</option>
	<option value="IT">Italy</option>
	<option value="JM">Jamaica</option>
	<option value="JP">Japan</option>
	<option value="JE">Jersey</option>
	<option value="JO">Jordan</option>
	<option value="KZ">Kazakhstan</option>
	<option value="KE">Kenya</option>
	<option value="KI">Kiribati</option>
	<option value="KP">Korea, Democratic People's Republic of</option>
	<option value="KR">Korea, Republic of</option>
	<option value="KW">Kuwait</option>
	<option value="KG">Kyrgyzstan</option>
	<option value="LA">Lao People's Democratic Republic</option>
	<option value="LV">Latvia</option>
	<option value="LB">Lebanon</option>
	<option value="LS">Lesotho</option>
	<option value="LR">Liberia</option>
	<option value="LY">Libya</option>
	<option value="LI">Liechtenstein</option>
	<option value="LT">Lithuania</option>
	<option value="LU">Luxembourg</option>
	<option value="MO">Macao</option>
	<option value="MK">Macedonia, the former Yugoslav Republic of</option>
	<option value="MG">Madagascar</option>
	<option value="MW">Malawi</option>
	<option value="MY">Malaysia</option>
	<option value="MV">Maldives</option>
	<option value="ML">Mali</option>
	<option value="MT">Malta</option>
	<option value="MH">Marshall Islands</option>
	<option value="MQ">Martinique</option>
	<option value="MR">Mauritania</option>
	<option value="MU">Mauritius</option>
	<option value="YT">Mayotte</option>
	<option value="MX">Mexico</option>
	<option value="FM">Micronesia, Federated States of</option>
	<option value="MD">Moldova, Republic of</option>
	<option value="MC">Monaco</option>
	<option value="MN">Mongolia</option>
	<option value="ME">Montenegro</option>
	<option value="MS">Montserrat</option>
	<option value="MA">Morocco</option>
	<option value="MZ">Mozambique</option>
	<option value="MM">Myanmar</option>
	<option value="NA">Namibia</option>
	<option value="NR">Nauru</option>
	<option value="NP">Nepal</option>
	<option value="NL">Netherlands</option>
	<option value="NC">New Caledonia</option>
	<option value="NZ">New Zealand</option>
	<option value="NI">Nicaragua</option>
	<option value="NE">Niger</option>
	<option value="NG">Nigeria</option>
	<option value="NU">Niue</option>
	<option value="NF">Norfolk Island</option>
	<option value="MP">Northern Mariana Islands</option>
	<option value="NO">Norway</option>
	<option value="OM">Oman</option>
	<option value="PK">Pakistan</option>
	<option value="PW">Palau</option>
	<option value="PS">Palestinian Territory, Occupied</option>
	<option value="PA">Panama</option>
	<option value="PG">Papua New Guinea</option>
	<option value="PY">Paraguay</option>
	<option value="PE">Peru</option>
	<option value="PH">Philippines</option>
	<option value="PN">Pitcairn</option>
	<option value="PL">Poland</option>
	<option value="PT">Portugal</option>
	<option value="PR">Puerto Rico</option>
	<option value="QA">Qatar</option>
	<option value="RE">Réunion</option>
	<option value="RO">Romania</option>
	<option value="RU">Russian Federation</option>
	<option value="RW">Rwanda</option>
	<option value="BL">Saint Barthélemy</option>
	<option value="SH">Saint Helena, Ascension and Tristan da Cunha</option>
	<option value="KN">Saint Kitts and Nevis</option>
	<option value="LC">Saint Lucia</option>
	<option value="MF">Saint Martin (French part)</option>
	<option value="PM">Saint Pierre and Miquelon</option>
	<option value="VC">Saint Vincent and the Grenadines</option>
	<option value="WS">Samoa</option>
	<option value="SM">San Marino</option>
	<option value="ST">Sao Tome and Principe</option>
	<option value="SA">Saudi Arabia</option>
	<option value="SN">Senegal</option>
	<option value="RS">Serbia</option>
	<option value="SC">Seychelles</option>
	<option value="SL">Sierra Leone</option>
	<option value="SG">Singapore</option>
	<option value="SX">Sint Maarten (Dutch part)</option>
	<option value="SK">Slovakia</option>
	<option value="SI">Slovenia</option>
	<option value="SB">Solomon Islands</option>
	<option value="SO">Somalia</option>
	<option value="ZA">South Africa</option>
	<option value="GS">South Georgia and the South Sandwich Islands</option>
	<option value="SS">South Sudan</option>
	<option value="ES">Spain</option>
	<option value="LK">Sri Lanka</option>
	<option value="SD">Sudan</option>
	<option value="SR">Suriname</option>
	<option value="SJ">Svalbard and Jan Mayen</option>
	<option value="SZ">Swaziland</option>
	<option value="SE">Sweden</option>
	<option value="CH">Switzerland</option>
	<option value="SY">Syrian Arab Republic</option>
	<option value="TW">Taiwan, Province of China</option>
	<option value="TJ">Tajikistan</option>
	<option value="TZ">Tanzania, United Republic of</option>
	<option value="TH">Thailand</option>
	<option value="TL">Timor-Leste</option>
	<option value="TG">Togo</option>
	<option value="TK">Tokelau</option>
	<option value="TO">Tonga</option>
	<option value="TT">Trinidad and Tobago</option>
	<option value="TN">Tunisia</option>
	<option value="TR">Turkey</option>
	<option value="TM">Turkmenistan</option>
	<option value="TC">Turks and Caicos Islands</option>
	<option value="TV">Tuvalu</option>
	<option value="UG">Uganda</option>
	<option value="UA">Ukraine</option>
	<option value="AE">United Arab Emirates</option>
	<option value="GB">United Kingdom</option>
	<option value="US">United States</option>
	<option value="UM">United States Minor Outlying Islands</option>
	<option value="UY">Uruguay</option>
	<option value="UZ">Uzbekistan</option>
	<option value="VU">Vanuatu</option>
	<option value="VE">Venezuela, Bolivarian Republic of</option>
	<option value="VN">Viet Nam</option>
	<option value="VG">Virgin Islands, British</option>
	<option value="VI">Virgin Islands, U.S.</option>
	<option value="WF">Wallis and Futuna</option>
	<option value="EH">Western Sahara</option>
	<option value="YE">Yemen</option>
	<option value="ZM">Zambia</option>
	<option value="ZW">Zimbabwe</option>
    </select>
    <i class="fa fa-caret-down caert-down-country" area-hidden=="true"></i>
  </div>

<!-- Select city -->

  <label class="col-md-2 control-label" for="selectbasic"  style="color:#286E88;">Select City</label>
  <div class="col-md-3">
    <select id="eventcity" name="city" class="form-control" >
      <option value=""></option>
      <option value="peshawar">Peshawar</option>
      <option value="lahore">Lahore</option>
	  <option value="swat">Swat</option>
	  <option value="banglor">banglor</option>
    </select>
    <i class="fa fa-caret-down" area-hidden=="true"></i>
  </div>
  </div>
<br>
<!-- Text input-->
<div class="row">
  <label class="col-md-3 control-label" for="textinput"  style="color:#286E88;">Address / URL</label>  
  <div class="col-md-9">
  <input id="eventaddress" name="address" type="text" placeholder="Specify where event's held / If online paste URL" class="form-control input-md" >
    
  </div>
</div>

<br>

<!-- Text input-->
<div class="row">
  <label class="col-md-2 col-md-offset-1 control-label" for="textinput"  style="color:#286E88; font-family:">Starts</label>  
  <div class="col-md-2">
  <input id="startdate" name="fromdate" type="Date" oninput="startdatevalidat();"  class="form-control input-md"><span id="startdateerror"></span><span id="startdatesuccess"></span>
    
  </div>

  <!-- Text input-->

  <label class="col-md-1 control-label" for="textinput"  style="color:#286E88;">Time</label>  
  <div class="col-md-2">
  <input id="eventtime" name="time" type="time"   class="form-control input-md" >
    
  </div>

<!-- Text input-->

  <label class="col-md-1 control-label" for="textinput"  style="color:#286E88; ">End at</label>  
  <div class="col-md-3 ">
  <input id="enddate" name="todate" type="Date" oninput="endingdatevalidat();"   class="form-control input-md" ><span id="endingdateerror"></span><span id="endingdatesuccess"></span>
    
  </div>



</div>

<br>
<!-- Textarea -->
<div class="row">
  <label class="col-md-3 control-label" for="textarea"  style="color:#286E88;">Event Description</label>
  <div class="col-md-9">                     
    <textarea class="form-control" id="eventdiscription" name="discription" placeholder="A few words about your event ..."></textarea>
  </div>
</div>

<br>
<br>
<div class="row" align="center">	
	<div class="col-md-4" style="color:#286E88; font-weight: bolder;">
		Select one type 
	</div>									
	<label class="col-md-2"  style="color:#286E88;">Free Event</label>
	<div class="col-md-2"> 
		<input type="radio" name="chargingtype" title="Organizers cannot send proposals " id="free" value="free" checked>
	</div>
	<label class="col-md-2"  style="color:#286E88;">Paid Event</label>
	<div class="col-md-2"> 
		<input type="radio"  name="chargingtype" id="paid" title="All paying options will be enable" value="paid">
	</div>
</div>



<div class="row requirementsRow" style="display: none;">
	<br>
  <label class="col-md-3 control-label" for="textarea"  style="color:#286E88;">Requirements</label>
  <div class="col-md-9">                     
    <textarea class="form-control" id="eventrequirements" name="requirements" placeholder="Precisely give the Requirements , and find best Organizer"></textarea>
  </div>
  <br>
</div>

<div class="row requirementsRow" style="display: none;">
<br>
  <label class="col-md-3 control-label" for="textarea"  style="color:#286E88;">Organizer Description</label>
  <div class="col-md-9">                     
    <textarea class="form-control" id="orgdes" name="orgDescription" placeholder="Describe the organizer , you looking for"></textarea>
  </div>
  <br>
</div>
<div class="row requirementsRow" align="center" style="display: none;">
<br>
  <div class="col-md-12" style="color:#286E88; font-weight: bolder;">
		YOU ARE ALMOST DONE ADJUST SEATS  
	</div>									
  <br>
</div>

<div class="row requirementsRow" style="display: none;">
	<br>
  <label class="col-md-3 control-label" for="textarea"  style="color:#286E88;">Number of tickets</label>
  <div class="col-md-3">                     
    <input type="number" class="form-control" id="ticketnumber" name="ticketnumbers" placeholder="How much ticket's, you want to sell"/>
  </div>
  <label class="col-md-3 control-label" for="textarea"  style="color:#286E88;">Price per ticket</label>
  <div class="col-md-3">                     
    <input type="number" class="form-control" id="ticketsprice" name="ticketprice" placeholder="How much Price per ticket"/>
  </div>
  <br>
</div>

<br>
<div class="row">
	<div class="col-md-12 upload-col">
		<a href="" id="upload-a">
			<div id="btn_upload_data" title="Click Here No File Choosen Yet ..."> 
	   			<input type="file" name="myfile" id="file"/>
			</div>
		</a>
   			<span> Upload an Image that brings life to your event &nbsp; &nbsp; &nbsp; &nbsp; <i class="fa fa-arrow-right " aria-hidden="true"></i> </span>
	</div>
</div>
<br>
<!-- Button -->
<div class="row">
  <label class="col-md-9 control-label" for="singlebutton"></label>
  <div class="col-md-3">
    <button id="singlebutton" style="float: right; padding: 10px; letter-spacing: 2px; transition: all .5s ease-in-out; width: 200px" type="submit" name="create_event" class="btn btn-success">Go Live</button>
  </div>
</div>

</form>

									
								</div>
								
							</div>





							</section> <!-- section one end -->

						
						<!-- Two -->
							
							<hr>

						<!-- three -->
							<section id="three">
								<div class="container">
									 <h4 style="color:#286E88; font-family: 'BioRhyme Expanded'; ">Improve EMA  </h4>
                  <p style="color:#286E88;  font-family: 'BioRhyme Expanded'; ">Let's do it... </p>
									 <form method="post" action="suggestion.php" class="form-group" name="suggetion">
                    
                    <div class="row uniform">
                      <div class="12u"> <input type="text" name="subject" id="subject" class="form-control" placeholder="A short title" /></div>
                    </div>
                    <div class="row uniform">
                      <div class="12u"><textarea name="suggestion" id="message" class="form-control" placeholder="Write suggestion"  rows="6"></textarea></div>
                    </div>
                    <div class="row uniform">
                      <div class="12u">
                        <ul class="actions">
                          <li><input type="submit" name="sendsuggestion" class="special" value="Send Suggestion" style="width: 200px; letter-spacing: 2px ; margin-left: 700px; transition: all .5s ease-in-out;" /></li>
                        </ul>
                        <input type="hidden" name="fpage" value="create-event.php">
                      </div>
                    </div>
                  </form>
								</div>
							</section> <!-- section three end -->

						</div> <!-- Main End -->

				<!-- Footer -->
					<section id="footer">
						<div class="container-fluid">
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

			<script type="text/javascript">
					
					$(function() {
    						$("#free").click(function(){
           						$('.requirementsRow').hide('slow');	  
    						});
    							$("#paid").click(function(){
    								
    								$(".requirementsRow").show('slow');
    							})
							 });
			</script>
			
	</body>
</html>
<script type="text/javascript">
//validation for title
 function titlevalidat(){
		var titleReg = /^[A-Za-z ]+$/;
      var title = $('#eventtitle').val();
	  var massage = "";
	  if(titleReg.test(title)){
	  massage= " Title is valid";
            $("#titlesuccess").html(massage); 
			  $("#titleerror").html(''); 
			  
        }
		if(!titleReg.test(title)){
	  massage= "Title is invalid";
            $("#titleerror").html(massage); 
			 $("#titlesuccess").html(''); 
			  
        }
		if(title==""){
	 $("#titleerror").html(''); 
	 $("#titlesuccess").html('');
	  
	 }
	   
	  }
	  //starting date validation
function startdatevalidat(){
var startingdate= $("#startdate").val();
 

 var d = new Date();
  var year=d.getFullYear();
  var month=d.getMonth();
  var date=d.getDate();
  month=month+1;
  if(month<10){
	  month="0"+month;
  }
  if(date<10){
	  date="0"+date;
  }
  
  var ddd=year+"-"+month+"-"+date; 
if(startingdate<ddd){
$("#startdateerror").html('  invalid');
$("#startdatesuccess").html('');
} 
if(startingdate>=ddd){
 $("#startdateerror").html('');
$("#startdatesuccess").html('  Valid');

} 
if(startingdate==""){
 $("#startdateerror").html('');
$("#startdatesuccess").html('');

} 

}
//ending date validation
function endingdatevalidat(){
var endingdate= $("#enddate").val();

 var startingdate= $("#startdate").val();

  
if(endingdate<startingdate){
$("#endingdateerror").html('  invalid');
$("#endingdatesuccess").html('');
} 
 else{
 $("#endingdateerror").html('');
$("#endingdatesuccess").html('  Valid');

} 
if(endingdate==""){
 $("#endingdateerror").html('');
$("#endingdatesuccess").html('');

} 

}
//validate form on submition

  function validatedata(){ 
   var eventtitle = document.getElementById('eventtitle').value;
   var category = document.getElementById('eventcategory').value;
   var country = document.getElementById('eventcountry').value;
   var city = document.getElementById('eventcity').value;
   var address = document.getElementById('eventaddress').value;
   var startdate = document.getElementById('startdate').value;
var enddate = document.getElementById('enddate').value;
   var eventtime = document.getElementById('eventtime').value;
   var discription = document.getElementById('eventdiscription').value;
    var free = document.getElementById('free').checked;
    var paid = document.getElementById('paid').checked;
    var ticketsprice = document.getElementById('ticketsprice').value;
    var ticketnumber = document.getElementById('ticketnumber').value;
    var orgdes = document.getElementById('orgdes').value;
    	 var eventrequirements = document.getElementById('eventrequirements').value;
    	  var file = document.getElementById('file').value;
    


		 
	  var eventtitleReg = /^[A-Za-z ]+$/;
	   var numReg = /^[0-9]+$/;
    
		if(eventtitle==""){
	   
            
			alert(' Title is required');
			return false;
        }
		 if(category==""){
	   
            
			alert(' Category is required');
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
	   
            
			alert(' address/url is required');
			return false;
        }
		if(startdate==""){
	   
            
			alert(' start is required');
			return false;
        }
		if(enddate=="" ){
	   
            
			alert(' End date is required');
			return false;
        }
		if(eventtime==""){
	   
            
			alert(' time is required');
			return false;
        }
		
		 if(discription==""){
		alert(' discription is required');
	   return false;
             
	}
	if(free==false && paid==false){
		alert('select  free or paid');
	   return false;
             
	}
	if(paid==true && (ticketsprice=="" || ticketnumber=="" || orgdes=="" || eventrequirements=="")){
		alert('fill  organizaer discription ,requrements ,ticket and price for paid event');
	   return false;
             
	}  
	if(file==""){
		alert('select  a valide event logo size 7 mb maximam');
	   return false;
             
	}
	if(paid==true && ticketsprice<=0){
		alert('the ticket price wil be greater then 0');
	   return false;

	}
	if(paid==true && ticketnumber<=0){
		alert('the ticket numbers wil be greater then 0');
	   return false;

	} 



	if(!eventtitle.match(eventtitleReg)){
		alert('title formate is invalid');
	   return false;
             
	}
	if(paid==true && !ticketnumber.match(numReg)){
		alert('ticket number formate is invalid');
	   return false;
             
	}
	if(paid==true && !ticketsprice.match(numReg)){
		alert('ticket price formate is invalid');
	   return false;
             
	}

	 
	if(startdate!=""){
	   var d = new Date();
  var year=d.getFullYear();
  var month=d.getMonth();
  var date=d.getDate();
  month=month+1;
  if(month<10){
	  month="0"+month;
  }
  if(date<10){
	  date="0"+date;
  }
  
  var ddd=year+"-"+month+"-"+date; 
if(startdate<ddd){
 alert('start date is invalid');
	   return false;
} 
	}
if(enddate<startdate){
alert('end date is invalid');
	   return false;	
}
         
		 else{
		 return true;
		 } 
	   
	  }
	  </script>