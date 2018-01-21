<!DOCTYPE PHP>
<?php 
   include('conn.php');

$username = "admin1";
$password = "password";
echo "start ";
$query = "SELECT username, password FROM adminuser WHERE username = '$username'";

// $stmt->bind_param("sss",$username,$password);
if ($stmt = mysqli_prepare($db, $query)) {
    echo "inside ";

    // mysqli_stmt_bind_param($stmt, "s", $param_username);

    /* execute statement */
    mysqli_stmt_execute($stmt);

    /* bind result variables */
    mysqli_stmt_bind_result($stmt, $admin_username, $admin_password_hash);

    /* fetch values */
    mysqli_stmt_fetch($stmt);
    echo "done";
    if(password_verify($password,$admin_password_hash))
    	echo "hey";
    else
    	echo "not recognised";
    /* close statement */
    mysqli_stmt_close($stmt);
}
mysqli_close($db);

?>