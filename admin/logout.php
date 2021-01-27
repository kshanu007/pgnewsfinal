<?php
	session_start();
		session_unset(); 
		session_destroy(); 
	echo "<script>alert('Successfully log out...!!!');
			window.location.href='index.php' ;
			</script>" ;

?>
