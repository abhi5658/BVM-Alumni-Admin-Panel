<?php
  $con = mysqli_connect("localhost","root","","sahakare_bvm")  or die('Connection Error');
  if(mysqli_connect_errno())
    {
        echo 'Failed to connect MySqlServer';
    }
 else {
     mysqli_select_db($con,"sahakare_bvm");
     if (mysqli_connect_errno())
         echo 'Failed to connect to DB Server';
}
?>