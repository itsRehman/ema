<?php
session_start();
$senderemail=$_GET['senderemail'];
 $id=$_GET['id'];
  $orderno=$_GET['orderno'];
$phase=$_GET['state'];
 
$con=mysql_connect("localhost","root", "") or die("database connectivity error");
                            mysql_select_db("ema",$con);
 if($phase=='workstream'){
                            $update=mysql_query("  UPDATE `order` SET `state`='workstream' where `order_no`='$orderno' and `event_id`='$id' and `organizer_email`='$_SESSION[email]' and `sender_email`='$senderemail'") or die("Error in   updation   query1");
                           		 echo "<script>alert('Your workstream created with the user')</script>";
								echo"<script>window.open('comp-details.php','_self')</script>";	
							exit();
                              }
                              if($phase=='reject'){
                            $update=mysql_query(" UPDATE `order` SET `state`='$phase' where order_no='$orderno' and event_id='$id' and organizer_email='$_SESSION[email]' and sender_email='$senderemail' ")or die("Error in   updation   query2");
                           		 echo "<script>alert('you are reject this order')</script>";
								echo"<script>window.open('comp-details.php','_self')</script>";	
							exit();
                              }
                              if($phase=='completed'){
                            $update=mysql_query(" UPDATE `order` SET `state`='$phase' where order_no='$orderno' and event_id='$id' and organizer_email='$_SESSION[email]' and sender_email='$senderemail' ")or die("Error in   updation   query3");
                           		 echo "<script>alert('you are confirm this order')</script>";
								echo"<script>window.open('comp-details.php','_self')</script>";	
							exit();
                              }
                              if($phase=='cancel'){
                            $update=mysql_query("  UPDATE `order` SET `state`='cancel' where `order_no`='$orderno' and `event_id`='$id'  and `sender_email`='$senderemail'") or die("Error in   updation   query1");
                               echo "<script>alert('You cancel this order')</script>";
                echo"<script>window.open('profile.php','_self')</script>"; 
              exit();
                              }

?>