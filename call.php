<?php
	//echo "Calling Script...";
	require("conn.php");
	if(!($_POST['submit'] === null))
	{
		$heading = $_POST['heading'];
		$detail = $_POST['detail'];
		//echo "values are : ".$heading."".$detail;
		if($heading != '' & $detail != '')
		{
			$str = "INSERT INTO news VALUES ('$heading','$detail')";
			//$result = mysqli_query($con,$str);
			if(mysqli_query($con,$str) === true){
				echo "Done";
				ob_start();
    			header("Location:updateconfirm1.php");
    			ob_end_flush();
    			die();
			}
		}
	}
	?>