<?php
     include("conn.php");
    date_default_timezone_set('Asia/Kolkata');
    $current_date  = date("Y-m-d");
    $current_time = date("h:i:sa");

    $college_type = $_POST['college_type'];
    $college_name = $_POST['college_name'];
    $college_state = $_POST['college_state'];
    $college_link = $_POST['college_link'];

    $college_photo =  $_FILES['college_photo']['name'];

   /* Location */
   $location = "../upload/".$college_photo;

	$sql = "INSERT INTO `tbl_colleges`(`college_name`, `college_state`, `college_type`, `college_photo`,`college_link`, `insert_time`, `insert_date`) VALUES ('$college_name','$college_state','$college_type','$college_photo','$college_link','$current_time','$current_date')";
	   $result = mysqli_query($conn, $sql);
	if (move_uploaded_file($_FILES['college_photo']['tmp_name'],$location) && $result) {
		echo "Successful";
	} 
	else {
		echo "UnSuccessful";
	}
	mysqli_close($conn);
	?>