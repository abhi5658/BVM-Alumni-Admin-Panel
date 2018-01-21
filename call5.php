<?php
		require('conn.php');
		$headline = $_REQUEST['headline'];
		$str = "DELETE FROM notification where message = '$headline'";
		if(mysqli_query($con,$str) === true){
			echo "Done";
			ob_start();
    		header("Location:updateNotification.php");
    		ob_end_flush();
    		die();
		}
		else
			echo "Not Successful";
?>