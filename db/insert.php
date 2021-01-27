<?php
    include("conn.php");
    date_default_timezone_set('Asia/Kolkata');
    $current_date  = date("Y-m-d");
    $current_time = date("h:i:sa");
	$name=$_POST['name'];
	$email=$_POST['email'];
	$message=$_POST['message'];
	$number=$_POST['number'];
	$course=$_POST['course'];
	$study=$_POST['study'];
	$type = $_POST['type'];

 $ip = $_SERVER['REMOTE_ADDR']; 
 $device = $_SERVER['HTTP_USER_AGENT']; 
 // Echo "Your IP Address is " . $ipaddress; 

		$sql = "INSERT INTO 
	        `tbl_enquiry`( `enquiry_name`, `enquiry_email`, `enquiry_message`,`enquiry_number`,`enquiry_course`,`enquiry_study`,`enquiry_college`,`insert_date`,`insert_time`,`insert_ip`,`insert_device`)
	        VALUES ('$name','$email','$message','$number','$course','$study','$type','$current_date','$current_time','$ip','$device')";
	        $res = mysqli_query($conn, $sql);

	        $sql1 = "SELECT * FROM tbl_colleges where college_id='$type'";
	        $res1 = mysqli_query($conn, $sql1);
	        $row = mysqli_fetch_assoc($res1);
	        $link = $row['college_link'];

	  if ($res) {
		// echo json_encode(array("statusCode"=>200));
		echo $link;
	} 
	else {
		// echo json_encode(array("statusCode"=>201));
		echo "UnSuccessful";
	}
	mysqli_close($conn);
	?>