<?php
    include("conn.php");

    $college_id = $_GET['college_id'];
    $news_id = $_GET['news_id'];
    
    if($news_id==''){
	$sql = "DELETE FROM `tbl_colleges` where college_id='$college_id'";
	$result = mysqli_query($conn, $sql);
	}
	else{
	    $sql = "DELETE FROM `tbl_news` where news_id='$news_id'";
	    $result1 = mysqli_query($conn, $sql);
	}
	   
	if ($result) {
		echo "<script>alert('College Details Delete Successful');
			window.location='../view_college.php';
		</script>";
	} 
	elseif($result1){
	    	echo "<script>alert('News Details Delete Successful');
			window.location='../view_news.php';
		</script>";
	}
	else {
		echo "<script>alert('Delete UnSuccessful')</script>";
	}
	mysqli_close($conn);
	?>