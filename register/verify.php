<?php
require_once('../includes/connect.php');

session_start();

// Make sure email and hash variables aren't empty
if(isset($_GET['email']) && !empty($_GET['email']) and isset($_GET['hash']) && !empty($_GET['hash']))
{
    $email = mysqli_real_escape_string($db, $_GET['email']);
    $hash =  mysqli_real_escape_string($db, $_GET['hash']);
    
    // Select user with matching email and hash, who hasn't verified their account yet (active = 0)
    $result = "SELECT * FROM users WHERE user_email='$email' AND user_hash='$hash' AND user_verified='0'";
    $results = mysqli_query($db, $result);

    if ( mysqli_num_rows($results) == 0 )
    { 
        $_SESSION['message'] = "Account has already been activated or the URL is invalid!";

        header("location: ../login");
    }
    else {
        $_SESSION['message'] = "Your account has been activated!";
        
        // Set the user status to active (active = 1)
        $user_check_query = "UPDATE users SET user_verified='1' WHERE user_email='$email'" or die();
        $result = mysqli_query($db, $user_check_query);
        $user = mysqli_fetch_assoc($result);
        $_SESSION['verified_msg'] = "You have been sucsessfully verified, you can now login";
        
        header("location: ../login");
    }
}
else {
    $_SESSION['message'] = "Invalid parameters provided for account verification!";
    echo $_SESSION['message'];
}     
?>