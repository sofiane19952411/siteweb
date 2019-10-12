<?php
/* User login process, checks if user exists and password is correct */

// Escape email to protect against SQL injections
$user_name = $mysqli->escape_string($_POST['username']);
$result = $mysqli->query("SELECT * FROM users2 WHERE user_name='$user_name' || email='$user_name'");



if ( $result->num_rows == 0 ){ // User doesn't exist
    $_SESSION['message'] = "This username or Adresse e-mail doesn't exist !";
    header("location: error.php");
}
else { // User exists
    $user = $result->fetch_assoc();
    if ( password_verify($_POST['password'], $user['password']) && $user['type']==0) {
        
        $_SESSION['user_name'] = $user['user_name'];
        $_SESSION['email'] = $user['email'];
        $_SESSION['first_name'] = $user['first_name'];
        $_SESSION['last_name'] = $user['last_name'];
       $_SESSION['type'] = $user['type'];
        $_SESSION['avatar'] = $user['avatar'];
        // This is how we'll know the user is logged in
        $_SESSION['logged_in'] = true;

        header("location: game/profile2.php");
    }
    
    else if ( password_verify($_POST['password'], $user['password']) && $user['type']==1) {
        
        $_SESSION['user_name'] = $user['user_name'];
        $_SESSION['email'] = $user['email'];
        $_SESSION['first_name'] = $user['first_name'];
        $_SESSION['last_name'] = $user['last_name'];
       $_SESSION['type'] = $user['type'];
        // This is how we'll know the user is logged in
        $_SESSION['logged_in'] = true;

        header("location: admin.php");
    } 
    else {
        $_SESSION['message'] = "You have entered wrong password, try again!";
        header("location: error.php");
    }
}

