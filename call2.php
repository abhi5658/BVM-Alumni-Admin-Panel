<?php
		require('conn.php');
		$email = $_REQUEST['email'];
		$str = "DELETE FROM pendingregistration where email = '$email'";
		if(mysqli_query($con,$str) === true){
			echo "Done";
			ob_start();
    		header("Location:pending.php");
    		ob_end_flush();
    		die();
		}
		else
			echo "Not Successful";
?>