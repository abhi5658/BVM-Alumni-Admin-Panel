<?php
		require('conn.php');
		$headline = $_REQUEST['headline'];
		$str = "DELETE FROM news where headline = '$headline'";
		if(mysqli_query($con,$str) === true){
			echo "Done";
			ob_start();
    		header("Location:updateNews.php");
    		ob_end_flush();
    		die();
		}
		else
			echo "Not Successful";
?>