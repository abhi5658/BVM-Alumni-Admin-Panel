<?php
	//echo "Calling Script...";
	require("conn.php");
	if(!($_POST['submit'] === null))
	{
		$heading = $_POST['heading'];
		$detail = $_POST['detail'];
		$date = $_POST['date'];
		//echo "values are : ".$heading."".$detail;
		if($heading != '' & $detail != '')
		{
			$str = "INSERT INTO notification VALUES ('$heading','$detail','$date')";
			//$result = mysqli_query($con,$str);
			if(mysqli_query($con,$str) === true){
				echo "Done";
				ob_start();
    			header("Location:updateconfirm2.php");
    			ob_end_flush();
    			die();
			}
		}
	}
	?>