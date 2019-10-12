<!DOCTYPE html>
<html>
<head>
<script src="js/ballons_color.js"></script>
	<link rel="stylesheet" type="text/css" href="css/color.css"/> 
   <link href="css/style_main.css" rel="stylesheet" type="text/css">
    <?php
/* Displays user information and some useful messages */
session_start();

// Check if user is logged in using the session variable
if ( $_SESSION['logged_in'] != 1 ) {
  $_SESSION['message'] = "You must log in before viewing your profile page!";
  header("location: ../error.php");    
}
else {
    // Makes it easier to read
    $first_name = $_SESSION['first_name'];
    $last_name = $_SESSION['last_name'];

    $email = $_SESSION['email'];
    $avatar= $_SESSION['avatar'];
    $type=$_SESSION['type'];
}
if ($type==1)
 header("location: ../admin.php");  
?>
  <title>Welcome <?= $last_name ?></title>
<head>
    <body onload="start()">
    
		  <div class="div_ballon" id="0">
           <h1 class="title" id="x"></h1>
    <br>
              <h1 id="nive">Choose &nbsp&nbsp&nbsp a &nbsp&nbsp&nbsp math <br> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp  operation !</h1>
               <a  href="add_soust/addition/index_addition.php" class="grid-cell" onmouseover="function1()" onmouseout="f1(this)"  id="p0" ></a>
          </div>

          <div class="div_ballon" id="1">
             <a href="add_soust/soustraction/index_addition.php"  class="grid-cell" onmouseover="function2()" onmouseout="f1(this)"  id="p1"></a>
          </div>

          <div class="div_ballon" id="2">
		         <a href="mult_div/div_home.php" onmouseover="function3()" onmouseout="f1(this)"  class="grid-cell"id="p2"></a>
          </div>

          <div class="div_ballon" id="3">
              <a href="mult_div/mult_home.php" onmouseover="function4()" onmouseout="f1(this)" class="grid-cell"id="p3"></a>
          </div>
          <div class="profile">
           <div class="div_avatar"><img src="../<?php echo $avatar; ?>" class="avatar"/>
           <div class="name_email">
           <center><h1 class="name"  ><?php echo  $first_name ; echo" "; ?><?php echo  $last_name ; ?></h1></center>
          <br> <center><h1 class="email"><?php echo    $email ;?></h1></center>
           </div>
           </div>
          <div class="div_logout">
              <div class="tooltip">
               <span class="tooltiptext">LogOut</span>
                <a  href="../logout.php"  id="logout" ><img src="logout.png"  class="logout" /></a>
              </div>
           
           </div>

          </div>
        <div align="center">
            <canvas id="canvas" onclick="reset()">
			</canvas>
        </div>
        	<script src="js/js_main.js"></script>
    </body>
</html>