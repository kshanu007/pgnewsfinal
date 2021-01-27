<?php
    include("conn.php");
    date_default_timezone_set('Asia/Kolkata');
    $current_date  = date("Y-m-d");
    $current_time = date("h:i:sa");
	$name=$_POST['name'];
	$email=$_POST['email'];
	$message=$_POST['message'];
	$subject = $_POST['subject'];

 $ip = $_SERVER['REMOTE_ADDR']; 
 $device = $_SERVER['HTTP_USER_AGENT']; 
 // Echo "Your IP Address is " . $ipaddress; 


  	$sql = "INSERT INTO 
	        `tbl_contact`( `contact_name`, `contact_email`, `contact_message`,`contact_subject`,`insert_date`,`insert_time`,`insert_ip`,`insert_device`)
	        VALUES ('$name','$email','$message','$subject','$current_date','$current_time','$ip','$device')";

	   // $result = mysqli_query($conn, $sql);
	if (mysqli_query($conn, $sql)) {
		echo json_encode(array("statusCode"=>200));
	} 
	else {
		echo json_encode(array("statusCode"=>201));
	}
	mysqli_close($conn);
	?>