<?php
/* Displays user information and some useful messages */
session_start();

// Check if user is logged in using the session variable
if ( $_SESSION['logged_in'] != 1 ) {
  $_SESSION['message'] = "You must log in before viewing your profile page!";
  header("location: error.php");    
}
else {
    // Makes it easier to read
    $first_name = $_SESSION['first_name'];
    $last_name = $_SESSION['last_name'];
    $user_name = $_SESSION['user_name'];
    $email = $_SESSION['email'];
    $type=$_SESSION['type'];
    $avatar=$_SESSION['avatar'];
}
?>
<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Welcome <?= $user_name ?></title>
 <link rel="stylesheet" href="css/style.css"> 
</head>

<body>
  <div class="form">

          <h1>Welcome</h1><br>

          <h2 style="font-size: 30px;"><?php echo $user_name  ?></h2><br>
         <h1> <p><?= $email ?></p></h1>
      <div class="imgh"style="margin-top: -180px;"> <img src="<?= $avatar ?>"class="img_sv"  id="avatar"/></div>
          <h1>Thanks for your registration  </h1>
          <h2>Hope you will enjoy with us  </h2><br><br>
          <a href="game/profile2.php"><button class="button button-block" name="logout"/>Continue</button></a>

    </div>
    
<script src='js/jquery.min.js'></script>
<script src="js/index.js"></script>

</body>
</html>
