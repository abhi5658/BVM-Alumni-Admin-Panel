<?php
	require('conn.php');
	$email = $_REQUEST['email'];
	$result = mysqli_query($con,"SELECT email,name,password,mobile from pendingregistration WHERE email = '$email'");
	$row = mysqli_fetch_array($result);
	$email1 = $row['email'];
	$name = $row['name'];
	$password = $row['password'];
	$mobile = $row['mobile'];
	$str = "INSERT INTO authenticuser(email,name,mobile,pass) values ('$email1','$name','$mobile','$password')" ;
	if (mysqli_query($con,$str) === true) {
		# code...
		mysqli_query($con,"DELETE FROM pendingregistration WHERE email = 'email'");
		echo "Done";
		ob_start();
    	header("Location:pending.php");
    	ob_end_flush();
    	die();
	}
	else
		echo "Not Successfull";

?>