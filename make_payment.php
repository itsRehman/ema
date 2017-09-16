<?php
if(isset($_POST['pay'])){

	$accountnumber=$_POST['accountnumber'];
	 
	if($accountnumber=="")
	{
	echo "<script>alert('fill the account number  field !')</script>";	
	exit();
	}
	else{
		 
		$date= Date('20y-m-d');

													 
		$pay=mysql_query("INSERT INTO `ema`.`order_payment` (`sender_email`, `reciver_email`, `order_no`, `evant_id`, `sender_accoun_no`, `reciver_accoun_no`, `amount`, `date`) VALUES ('$senderemail', '$reciveremail', '$orderno', '$id', '$accountnumber', '0', '$total', '$date')") or die("payment insertion query error");
		if(!$pay){
			echo "<script>alert('some thing wrong try agian!')</script>";
			exit();

		}
		else{
			echo "<script>alert('you pay successfully!')</script>";
			echo"<script>window.open('profile.php','_self')</script>";

			exit();
		}


	}

}




?>