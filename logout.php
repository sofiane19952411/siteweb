<?php
/* Log out process, unsets and destroys session variables */
session_start();
session_unset();
session_destroy(); 
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Error</title>
  <link rel="stylesheet" href="css/style.css"> 
</head>

<body>
    <div class="form">
          <h1>Thanks for stopping by</h1>
              
          <h1> <p><?= 'You have been logged out!'; ?></p></h1> 
          
          <a href="index.php"><button class="button button-block"/>Home</button></a>

    </div>
</body>
</html>
