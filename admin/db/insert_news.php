<?php
     include("conn.php");
    date_default_timezone_set('Asia/Kolkata');
    $current_date  = date("Y-m-d");
    $current_time = date("h:i:sa");

    //$news_complete = $_POST['news_complete'];
    $news_name = $_POST['news_name'];
    $news_url = $_POST['news_url'];
    $news_for = $_POST['news_for'];
    $news_date = $_POST['news_date'];
    $news_type = $_POST['news_type'];

    $news_photo =  $_FILES['news_photo']['name'];

   /* Location */
   $location = "../upload/news/".$news_photo;
   $new_location = "admin/upload/news/".$news_photo;
   
	  if($news_photo!=''){
	
	     $sql = "INSERT INTO `tbl_news`(`news_name`, `news_url`,`news_for`,`news_date`,`news_type`,`news_doc`, `insert_time`, `insert_date`) VALUES ('$news_name','--','$news_for','$news_date','$news_type','$news_photo','$current_time','$current_date')";
         $result = mysqli_query($conn, $sql);
         move_uploaded_file($_FILES['news_photo']['tmp_name'],$location);
	  }
	   else{
	     $sql = "INSERT INTO `tbl_news`(`news_name`, `news_url`,`news_for`,`news_date`,`news_type`,`news_doc`, `insert_time`, `insert_date`) VALUES ('$news_name','$news_url','$news_for','$news_date','$news_type','--','$current_time','$current_date')";
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