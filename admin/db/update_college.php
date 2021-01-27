<?php
     include("conn.php");
    date_default_timezone_set('Asia/Kolkata');
    $current_date  = date("Y-m-d");
    $current_time = date("h:i:sa");

    $college_type = $_POST['college_type'];
    $college_name = $_POST['college_name'];
    $college_state = $_POST['college_state'];
    $college_link = $_POST['college_link'];
    $college_id = $_POST['college_id'];

    $college_photo =  $_FILES['college_photo']['name'];

   /* Location */
   $location = "../upload/".$college_photo;

   if($college_photo=='')
   		{
   	   $sql = "UPDATE `tbl_colleges` SET `college_name`='$college_name',`college_state`='$college_state',`college_type`='$college_type',`college_link`='$college_link',`insert_time`='$current_time',`insert_date`='$current_date' WHERE `college_id`='$college_id'";
   			$result = mysqli_query($conn, $sql);
   		}
   	else{

   			 $sql = "UPDATE `tbl_colleges` SET `college_name`='$college_name',`college_state`='$college_state',`college_type`='$college_type',`college_photo`='$college_photo',`college_link`='$college_link',`insert_time`='$current_time',`insert_date`='$current_date' WHERE `college_id`='$college_id'";
        move_uploaded_file($_FILES['college_photo']['tmp_name'],$location);
   			$result = mysqli_query($conn, $sql);
   	}
	

	   
	if ($result) {
		echo "Successful";
	} 
	else {
		echo "UnSuccessful";
	}
	mysqli_close($conn);
	?>