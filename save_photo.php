<?php

// Check if user is logged in using the session variable
if ( $_SESSION['logged_in'] != 1 ) {
  $_SESSION['message'] = "You must log in before viewing your profile page!";
  header("location: error.php");    
}
else {
    // Makes it easier to read

    $user_name = $_SESSION['user_name'];

}
$_SESSION['avatar'] = $_POST['hidden'];
$imgg = $mysqli->escape_string($_POST['hidden']);


    // active is 0 by DEFAULT (no need to include it here)
     $db=mysqli_connect('localhost','root','')or die('Erreur de connexion'.mysqli_error());
     mysqli_select_db($db,'accounts')or die('Erreur de selection'.mysqli_error());
     $sql = "UPDATE users2  SET avatar='$imgg' WHERE user_name='$user_name'";
     mysqli_query($db,$sql)or die('Erreur SQL! <br>');

      header("location:game/profile2.php"); 


?>


