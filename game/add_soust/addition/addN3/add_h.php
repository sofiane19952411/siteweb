<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">


  <link href="style.css" rel="stylesheet" type="text/css">


    <!--## files javascript ##-->
<script type="text/javascript" >

</script>
<style>
#myProgress {
  width: 90%;
  background-color: #ddd;
  margin-top:30px;
 border-radius: 12px;
}

#myBar {
  width: 1%;
  height: 30px;
  margin-left: 5px;
  background: linear-gradient(to right, red , green); 
}
</style>
    <?php
/* Displays user information and some useful messages */
session_start();

// Check if user is logged in using the session variable
if ( $_SESSION['logged_in'] != 1 ) {
  $_SESSION['message'] = "You must log in before viewing your profile page!";
  header("location: ../../../../error.php");    
}
else {
    // Makes it easier to read
    $first_name = $_SESSION['first_name'];
    $last_name = $_SESSION['last_name'];
     $user_name=$_SESSION['user_name'];

    $email = $_SESSION['email'];
    $avatar= $_SESSION['avatar'];
    $type=$_SESSION['type'];
}
if ($type==1)
 header("location: ../../../../admin.php");  


 if ($_SERVER['REQUEST_METHOD'] == 'POST') 
{
    if (isset($_POST['save_score'])) { 
      require 'register_score.php' ;  
    }
}
 require 'meilleur_score.php' ;
?>
<?php 
  


?>
  <title>Welcome <?= $last_name ?></title>
</head>
<body onload="charge()" id="bod" >
 <div id="div_cent">
<!-- form register scor -->

<!-- /form register scor -->
  <br><br><br><br> <a  href="../index_addition.php" class="restart" >  </a><br>
  <h1 class="title1" id="x1" ></h1><br> <br>
      <a href="../../../profile2.php" id="home"></a>
   <img src="nh.gif"  class="nh" id="nh"></img>
   <div class="score_po">
     <img src="8.gif"class="img_sc" />
     <img src="0.gif" class="img_sc"id="img_scbl"/>
     <h1 id="hscore">score</h1>
     <h1  id="best">best</h1>
     <h1 id="himgscore">000</h1>
     <h1 id="hscore18"></h1>
     <h1  id="imgbest"><?= $best; ?></h1>
   </div>
   <div class="divdiv_profile">          
           <div class="div_avatar"><img src="../../../../<?php echo $avatar; ?>" class="avatar"/></div>
           <div class="name_email">    <center><h1 class="name"  ><?php echo  $first_name ; echo" "; ?><?php echo  $last_name ; ?></h1></center>
          <center><h1 class="email"><?php echo    $email ;?></h1></center> </div>
         <div class="div_logout">
              <div class="tooltip">
               <span class="tooltiptext">LogOut</span>
            <a  href="../../../../logout.php"  id="logout" ><img src="../logout.png"  class="logout" /></a>
           </div></div>
           <div class="meill_score" id="meill_score"><div class="div_avatar meill"><img src="../../../../<?php echo $avater_meilleur; ?>" class="avatar"/></div>
           <div class="name_email meill_email"> <center><h1 class="name NME"  ><?php echo '<font color="#222">Meilleur : </font>';echo  $user_meilleur ;  ?></h1></center>
          <center><h1 class="email mei_score" id="getmeill"><?php echo "score:";echo $meilleur ;?></h1></center> </div>
              <h1 class="close" onclick="return closes();">&times;</h1>
          </div>
          <div class="wissam"><img src="../pic/wissm.gif" class="wissm_img" id="wissam"/></div>
  </div>
  <!-- <h1 id="d"  onclick="return f();" >sss</h1> -->
<h1 class="title" id="x" >?</h1><br><br><br><br>


<div class="container">

<div class="game-container" id="game">
         <div class="game-message" id="game-message">
            <img src="../../anm/grey_crossGrey.png" class="img_close" title="closes" onclick="return close1();"></img><br>
          <p></p>
          <div class="lower" >
           
            <a class="keep-playing-button"id="youwin">you win!!<br>thank you ☺ </a>
            <a class="keep-playing-button" id="fn_score"></a>
            <div class="aff_score"> <div class="scort"><h1 class="mot_score">score:</h1><h1 class="my_score" id="my_score">0</h1></div>
           <div class="best"> <h1 class="mot_score">best:</h1><h1 class="my_score"id="my_best"><?= $best; ?></h1></div></div>
            <br><br><br><br><br><br><br><br><br><br><br><br><br><br>
            <a class="keep-playing-button">Keep going</a><br><br>
            <a class="retry-button">Essayez une nouvelle fois</a><br><br><br><br><br><br><br><br><br><br><br>
            <div class="deux_BT">
            <a class="restart-button nouvelleP"href="">Playback</a>
            <form method="post" autocomplete="off">
              <input type="hidden" class="hidden" id="hidden" name="hidden" value="00"/>
             <button class="  BTsave" name="save_score" id="bttsave">SAVE</button>
           </form>
           </div>
          </div>
       </div>

 <div class="grid-container" id="fg">
        <div class="grid-row">
           <button onclick="return selected_oncick('0');" class="grid-cell" id="p0"></button>
           <button onclick="return selected_oncick('1');" class="grid-cell" id="p1"></button>
           <button onclick="return selected_oncick('2');"  class="grid-cell"id="p2"></button>
           <button onclick="return selected_oncick('3');"  class="grid-cell" id="p3"></button>
      	   <button onclick="return selected_oncick('4');"  class="grid-cell"id="p4"></button>
           <button onclick="return selected_oncick('5');" class="grid-cell" id="p5"></button>
        </div>
        <div class="grid-row">
           <button onclick="return selected_oncick('6');"  class="grid-cell"id="p6"></button>
           <button onclick="return selected_oncick('7');"  class="grid-cell"id="p7"></button>
           <button onclick="return selected_oncick('8');"  class="grid-cell"id="p8"></button>
           <button onclick="return selected_oncick('9');"  class="grid-cell" id="p9"></button>
           <button onclick="return selected_oncick('10');"  class="grid-cell"id="p10"></button>
           <button onclick="return selected_oncick('11');"  class="grid-cell" id="p11"></button>
        </div>
        <div class="grid-row">
           <button onclick="return selected_oncick('12');" class="grid-cell" id="p12"></button>
           <button onclick="return selected_oncick('13');" class="grid-cell" id="p13"></button>
           <button onclick="return selected_oncick('14');"  class="grid-cell" id="p14"></button>
           <button onclick="return selected_oncick('15');" class="grid-cell" id="p15"></button>
           <button onclick="return selected_oncick('16');"  class="grid-cell" id="p16"></button>
           <button onclick="return selected_oncick('17');"  class="grid-cell" id="p17"></button>
        </div>
        <div class="grid-row">
           <button onclick="return selected_oncick('18');"  class="grid-cell" id="p18"></button>
           <button onclick="return selected_oncick('19');" class="grid-cell" id="p19"></button>
           <button onclick="return selected_oncick('20');" class="grid-cell" id="p20"></button>
           <button onclick="return selected_oncick('21');"  class="grid-cell" id="p21"></button>
           <button onclick="return selected_oncick('22');"  class="grid-cell" id="p22"></button>
           <button onclick="return selected_oncick('23');"  class="grid-cell" id="p23"></button>
        </div>
        <div class="grid-row">
           <button onclick="return selected_oncick('24');" class="grid-cell" id="p24"></button>
           <button onclick="return selected_oncick('25');"  class="grid-cell" id="p25"></button>
		       <button onclick="return selected_oncick('26');"  class="grid-cell" id="p26"></button>
           <button onclick="return selected_oncick('27');"  class="grid-cell" id="p27"></button>
           <button onclick="return selected_oncick('28');" class="grid-cell" id="p28"></button>
           <button onclick="return selected_oncick('29');"  class="grid-cell" id="p29"></button>
        </div>
		
      </div>
      
	  </div>
      <div id="myProgress">   <div id="myBar"></div>  </div><h1 id="h_score"></h1>
    </div>
    <div class="sui">
    <a href="../addN2/add_h.php"  id="previous" class="prev">&laquo; Previous</a>
    <a href="../addN4/add_h.php" id="next"  class="prev">Next &raquo;</a>
    </div>
    <div id="mySidenav" class="sidenav">
  <a href="#" id="about">Home</a>
  <a href="#" id="blog">Facebook</a>
  <a href="#" id="projects">Google+</a>
  <a href="#" id="contact">Contact</a>
</div>
  <div id="div_plo"> 
    <div id="div_left" >
        <div id="b1" class="des_pal"></div>
         <div id="b2" class="des_pal"></div> 
         <div id="b3" class="des_pal"></div>
         <div id="b0" class="des_pal"></div>
      </div>
      <div id="div_right" >

        </div>
    </div>
 </div>
 <p id="p_cent" class="div_cent"style=" height:60px; "></p>
 	<script src="js/add.js"></script>
	  </body>
</html>