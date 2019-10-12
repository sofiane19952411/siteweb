<?php
require 'db.php';
/* Displays user information and some useful messages */
session_start();

// Check if user is logged in using the session variable
if ( $_SESSION['logged_in'] != 1 ) {
  $_SESSION['message'] = "You must log in before viewing your profile page!";
  header("location: ../../error.php");    
}
else {
    // Makes it easier to read
    $first_name = $_SESSION['first_name'];
    $last_name = $_SESSION['last_name'];
    $user_name = $_SESSION['user_name'];
    $email = $_SESSION['email'];
    $type=$_SESSION['type'];
 $avatar= $_SESSION['avatar'];
}
if ($type==1)
 header("location: ../../admin.php");  

 if (isset($_POST['score'])) { //user logging in

        require 'scoremult.php';
        
    }
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Welcome <?= $user_name?></title>

    <link href="css/style.css" rel="stylesheet" type="text/css">
    <link href="css/style2.css" rel="stylesheet" type="text/css">
    <link href="css/style3.css" rel="stylesheet" type="text/css">
</head>

<body id="body"><br><br><br><br>
    <h1 class="title1" id="x1"></h1>
    <br>  <br>

    <a href="../profile2.php" class="home" id="home"> </a>
   <div class="profile">
           <div class="div_avatar">
           <div class="name_email">
           <center><h1 class="name"   onmouseover="f_hover()" onmouseout="f_hoverout()" ><?php echo  $first_name ; echo" "; ?><?php echo  $last_name ; ?></h1></center>
          <br> <center><h1 class="email"><?php echo    $email ;?></h1></center>
           </div>
           <img src="../../<?php echo $avatar; ?>" class="avatar"/>
           
           </div>
    
        <div class="div_logout">
              <div class="tooltip">
               <span class="tooltiptext">LogOut</span>
            <a  href="../../logout.php"  id="logout" ><img src="logout.png"  class="logout" /></a>
           </div>
           </div>
                
          </div>

    <!--premier page-->
    <div id="page3">
        <h1 class="md">Multiplication</h1><br>
        <h1 class="h">Choisir le niveau pour jouer</h1>
        <div class="grid-row3">
          <a href="mult.php?id=facile">  <div class="grid-cell3 pic1" onclick="difficile()" onmouseover="function1()" onmouseout="f1()"   id="pic1"></div></a>
           <a href="mult.php?id=dificile"> <div class="grid-cell3 pic1" onclick="facile()" onmouseover="function2()" onmouseout="f1()"  id="pic2"> </div></a>
            <h1 class="title4" id="t1">Facile</h1>
            <h1 class="title5" id="t2">Difficile</h1>
        </div>
    </div>

  
</body>
<script type="text/javascript" src="js/fac_diff.js">
</script>

</html>