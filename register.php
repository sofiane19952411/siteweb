<?php
/* Registration process, inserts user info into the database 
   and sends account confirmation email message
 */

// Set session variables to be used on profile.php page
$_SESSION['user_name'] = $_POST['username'];
$_SESSION['email'] = $_POST['email'];
$_SESSION['first_name'] = $_POST['firstname'];
$_SESSION['last_name'] = $_POST['lastname'];
$_SESSION['type'] = $_POST['type'];
// Escape all $_POST variables to protect against SQL injections
$first_name = $mysqli->escape_string($_POST['firstname']);
$last_name = $mysqli->escape_string($_POST['lastname']);
$user_name = $mysqli->escape_string($_POST['username']);
$type = $mysqli->escape_string($_POST['type']);
$email = $mysqli->escape_string($_POST['email']);
$password = $mysqli->escape_string(password_hash($_POST['password'], PASSWORD_BCRYPT));

      
// Check if user with that email and user already exists
$result = $mysqli->query("SELECT * FROM users2 WHERE user_name='$user_name'") or die($mysqli->error());
$result1 = $mysqli->query("SELECT * FROM users2 WHERE email='$email'") or die($mysqli->error());

// We know user email exists if the rows returned are more than 0
if ( $result->num_rows > 0 || $result1->num_rows > 0 ) {
    
    $_SESSION['message'] = 'this username or email already exists!';
    header("location: error.php");
    
}
else { // Email doesn't already exist in a database, proceed...

    // active is 0 by DEFAULT (no need to include it here)
    $sql = "INSERT INTO users2 (first_name, last_name, user_name, email, password,type) " 
            . "VALUES ('$first_name','$last_name','$user_name','$email','$password','$type')";
    $sql_score = "INSERT INTO score_add (user_name, score_TF, score_F, score_D, score_TD,total_score) " 
            . "VALUES ('$user_name','0','0','0','0','0')";
   $sql_score_soust = "INSERT INTO score_soust (user_name, score_TF, score_F, score_D, score_TD,total_score) " 
            . "VALUES ('$user_name','0','0','0','0','0')";
            $sql2 = "INSERT INTO score_div_facile ( user_name) " 
            . "VALUES ('$user_name')";
$sql3 = "INSERT INTO score_mult_facile ( user_name) " 
            . "VALUES ('$user_name')";
$sql4 = "INSERT INTO score_mult_difficile ( user_name) " 
            . "VALUES ('$user_name')";
    $sql5 = "INSERT INTO score_div_difficile ( user_name) " 
            . "VALUES ('$user_name')";
    // Add user to the database
    if ( ($mysqli->query($sql)) &&($mysqli->query($sql_score))&&($mysqli->query($sql_score_soust))&& ($mysqli->query($sql2)) && ($mysqli->query($sql3)) &&( $mysqli->query($sql4))&&( $mysqli->query($sql5) )  ){

        
        $_SESSION['logged_in'] = true; // So we know the user has logged in
     

        // Send registration confirmation link (verify.php)
        $to      = $email;
        $subject = 'Account Verification ( clevertechie.com )';
        $message_body = '
        Hello '.$first_name.',

        Thank you for signing up!';  

       

        header("location: save_img.php"); 

    }

    else {
        $_SESSION['message'] = 'Registration failed!';
        header("location: error.php");
    }

}