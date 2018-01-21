<!DOCTYPE PHP>
<?php 
   include('conn.php');

$username = "admin2";
$password = "password123456";

// echo "start ";
$query = "INSERT INTO adminuser (username, password) VALUES (?, ?)";

// $stmt->bind_param("sss",$username,$password);
if ($stmt = mysqli_prepare($db, $query)) {
    // echo "inside ";
    /* execute statement */
    // mysqli_stmt_execute($stmt);

    mysqli_stmt_bind_param($stmt, "ss", $param_username, $param_password);

    $param_username = $username;
    $param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt))
                // echo "success";
    /* bind result variables */
    // mysqli_stmt_bind_result($stmt, $admin_username, $admin_password);

    /* fetch values */
    // mysqli_stmt_fetch($stmt);
    echo "done";
    // if($username == $admin_username && $password == $admin_password)
    	// echo "hey";
    // else
    	// echo "not recognised";
    /* close statement */
    mysqli_stmt_close($stmt);
}
mysqli_close($db);

?>