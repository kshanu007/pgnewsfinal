<?php
     include("conn.php");
    date_default_timezone_set('Asia/Kolkata');
    $current_date  = date("Y-m-d");
    $current_time = date("h:i:sa");

    $news_type = $_POST['news_type'];
    $news_name = $_POST['news_name'];
    $news_for = $_POST['news_for'];
    $news_url = $_POST['news_url'];
    $news_date=$_POST['news_date'];
    $news_photo=$_POST['news_photo'];
    
    $news_doc_name=$_POST['news_doc_name'];
     $news_pdoc = $_POST['news_pdoc'];
    $news_id = $_POST['news_id'];

    $news_photo =  $_FILES['news_photo']['name'];

   /* Location */
   $location = "../upload/news/".$news_photo;
   $new_location = "admin/upload/news/".$news_photo;

   if($news_photo!='')
   		{
   	 $sql = "UPDATE `tbl_news` SET `news_name`='$news_name',`news_url`='--',`news_for`='$news_for',`news_date`='$news_date',`news_type`='$news_type',`news_doc`='$news_photo',`insert_time`='$current_time',`insert_date`='$current_date' WHERE `news_id`='$news_id'";
   			$result = mysqli_query($conn, $sql);
   			 move_uploaded_file($_FILES['news_photo']['tmp_name'],$location);
   		}
    elseif($news_photo=='' && $news_url=='--'){
        $sql = "UPDATE `tbl_news` SET `news_name`='$news_name',`news_url`='--',`news_for`='$news_for',`news_date`='$news_date',`news_type`='$news_type',`news_doc`='$news_doc_name',`insert_time`='$current_time',`insert_date`='$current_date' WHERE `news_id`='$news_id'";
   			$result = mysqli_query($conn, $sql);
    }
   	else{
   	 $sql = "UPDATE `tbl_news` SET `news_name`='$news_name',`news_url`='$news_url',`news_for`='$news_for',`news_date`='$news_date',`news_type`='$news_type',`news_doc`='--',`insert_time`='$current_time',`insert_date`='$current_date' WHERE `news_id`='$news_id'";
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