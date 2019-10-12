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
  header("location: ../../../error.php");    
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
 header("location: ../../../admin.php");  
?>
  <title>Welcome <?= $last_name ?></title>
<head>
    <body onload="start()">
       
		  <div class="game-container" >
         

 
              <h1 id="nive">Selectionnez  &nbsp&nbsp&nbsple niveau <br> &nbsp&nbsp&nbsp &nbsp&nbsp&nbsp &nbsp&nbsp&nbsp &nbsp&nbsp&nbspde jeu !</h1>
              <img src="pic/min.png" id="plus"/>
              <div id="div_N1" class="div_n">
              <h1 id="trV1" class="tr" >Tres facile</h1>
               <a  href="addN1/add_h.php"  class="grid-cell" onmouseover="function1()" onmouseout="f1()"  id="p0" ></a>
              </div>
               <div id="div_N3" class="div_n">
                    <h1 id="trV3" class="tr" >difficile</h1>
               <a href="addN3/add_h.php"  class="grid-cell" onmouseover="function3()" onmouseout="f1()"  id="p1"></a>
               </div>
                <div id="div_N2" class="div_n">
                     <h1 id="trV2"  class="tr">facile</h1>
                <a href="addN2/add_h.php" onmouseover="function2()" onmouseout="f1()"  class="grid-cell"id="p2"></a>
                </div>
                 <div id="div_N4" class="div_n">
                      <h1 id="trV4" class="tr">Tres difficile</h1>
                <a href="addN4/add_h.php" onmouseover="function4()" onmouseout="f1()" class="grid-cell"id="p3"></a>
                 </div>
                 
        <div class="profile">
           <div class="div_avatar">
           <div class="name_email">
           <center><h1 class="name"   onmouseover="f_hover()" onmouseout="f_hoverout()" ><?php echo  $first_name ; echo" "; ?><?php echo  $last_name ; ?></h1></center>
          <br> <center><h1 class="email"><?php echo    $email ;?></h1></center>
           </div>
           <img src="../../../<?php echo $avatar; ?>" class="avatar"/>
           <div class="divhome"><a href="../../profile2.php" ><img src="home.png"class="home"/></a></div>
           </div>
    
        <div class="div_logout">
              <div class="tooltip">
               <span class="tooltiptext">LogOut</span>
            <a  href="../../../logout.php"  id="logout" ><img src="logout.png"  class="logout" /></a>
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