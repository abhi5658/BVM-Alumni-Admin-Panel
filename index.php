<?php
   include("conn.php");
   session_start();
   if (isset($_SESSION['login_user'])) {
      header("location:homepage.php");
    }

 // Define variables and initialize with empty values
$username = $password = "";
$username_err = $password_err = "";


// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Check if username is empty
    if(empty(trim($_POST["username"]))){
        $username_err = 'Please enter username.';
    } else{
        $username = trim($_POST["username"]);
    }
    
    // Check if password is empty
    if(empty(trim($_POST['password']))){
        $password_err = 'Please enter your password.';
    } else{
        $password = trim($_POST['password']);
    }
    
    // Validate credentials
    if(empty($username_err) && empty($password_err)){
        // Prepare a select statement
        $query = "SELECT username,password FROM adminuser WHERE username = '$username'";

         if($stmt = mysqli_prepare($con, $query)){

            if(mysqli_stmt_execute($stmt)){

                // Store result
                mysqli_stmt_store_result($stmt);

                // Check if username exists, if yes then verify password
                if(mysqli_stmt_num_rows($stmt) == 1){    

                    // Bind result variables
                    mysqli_stmt_bind_result($stmt, $admin_username, $admin_password);

                    if(mysqli_stmt_fetch($stmt)){
                        // if(password_verify($password, $hashed_password)){
                            /* Password is correct, so start a new session and
                            save the username to the session */
                            if($admin_password == $password){
                            session_start();
                            $_SESSION['login_user'] = $username;      
                            header("location: homepage.php");
                        } else{
                            // Display an error message if password is not valid
                            $password_err = 'The password you entered was not valid.';
                        }
                    }
                } else{
                    // Display an error message if username doesn't exist
                    $username_err = 'No account found with that username.';
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
        
        // Close statement
        mysqli_stmt_close($stmt);
    }
    
    // Close connection
    mysqli_close($con);
}
?>
 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css
">
    <style type="text/css">
        body{ font: 14px sans-serif; }
        .wrapper{ width: 350px; padding: 20px; }
    </style>
</head>
<body>
    <div align="center">
    <div class="wrapper" style = "width:500px; border: solid 1px #333333; margin-top: 50px;" align="left">
        <h2 >BVM Alumni Admin Login</h2>
        <p>Please fill in your credentials to login.</p></br>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                <label>Username:<sup>*</sup></label>
            </br></br>
                <input type="text" name="username"class="form-control" value="<?php echo $username; ?>">
                </br>
                <span style="color:red;" class="help-block"><?php echo $username_err; ?></span>
            </div>  
        </br>
            <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                <label>Password:<sup>*</sup></label>
            </br></br>
                <input type="password" name="password" class="form-control">
                </br>
                <span style="color:red;" class="help-block"><?php echo $password_err; ?></span>
            </div>
        </br>
            <div class="form-group" align="center">
                <input type="submit"class="btn btn-primary" value="LOGIN">
            </div>
            </form>
    </div>    
</div>
</body>
</html>