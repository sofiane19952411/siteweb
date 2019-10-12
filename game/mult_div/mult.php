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
$gh=$_GET['id'];
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Welcome <?= $user_name?></title>
<style>   
 .div_avatar1 {position: fixed;
     width: 150px;
      height: 150px;
      
      border-radius: 100%;
      background-color: #000000;
      
      margin-left: 68%;
      
    
      
  }
  </style>
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <link href="css/style2.css" rel="stylesheet" type="text/css">
    <link href="css/style3.css" rel="stylesheet" type="text/css">
</head>

<body id="body"> 
<!--profile-->
      <div class="profile">
           <div class="div_avatar1">
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
                
          </div><br><br><br><br>

    <h1 class="title1" id="x1"></h1>
    <!--bravo or faux--><br>
  
  <input type="hidden"  id="type" value="<?=$gh;?>"/>
    
    <br>
    <!--send score-->
    <div class="score_po" id="score_po">
        <img src="8.gif" class="img_sc" />
        <img src="0.gif" class="img_sc" id="img_scbl" />
        <h1 id="hscore">score</h1>
        <h1 id="best">best</h1>
        <h1 id="himgscore" name="score1" >000</h1>
        <h1 id="hscore18">+25</h1>
        <h1 id="imgbest" name="best">000</h1>
    </div>
    <a href="mult_home.php" class="restart" id="restart2" ></a>
    <a href="../profile2.php" class="home" id="home"> </a>
    
    <!--troisième  page-->
     <form action="" method="post" id="form">
<input type="hidden" name="scoremultfacile" id="scoref"  />
<input   type="hidden" name="scoremultdifficile" id="scored"  />
<input   type="hidden" name="v" id="v"  />
<button name="score"class="restart" id="restart" hidden ></button>
</form>
    <div class="container" id="container" hidden>
        <h1 class="title" id="x"></h1>
        <div class="game-container" id="game-container">
            <div class="grid-container" id="grid-container">
                <div class="grid-row">
                    <div onclick="myFunction(this.value,this)" class="grid-cell" id="p0"> </div>
                    <div onclick="myFunction(this.value,this)" class="grid-cell" id="p1"></div>
                    <div onclick="myFunction(this.value,this)" class="grid-cell" id="p2"></div>
                    <div onclick="myFunction(this.value,this)" class="grid-cell" id="p3"></div>
                    <div onclick="myFunction(this.value,this)" class="grid-cell" id="p4"></div>

                </div>
                <div class="grid-row">
                    <div onclick="myFunction(this.value,this)" class="grid-cell" id="p5"></div>
                    <div onclick="myFunction(this.value,this)" class="grid-cell" id="p6"></div>
                    <div onclick="myFunction(this.value,this)" class="grid-cell" id="p7"></div>
                    <div onclick="myFunction(this.value,this)" class="grid-cell" id="p8"></div>
                    <div onclick="myFunction(this.value,this)" class="grid-cell" id="p9"></div>

                </div>
                <div class="grid-row">
                    <div onclick="myFunction(this.value,this)" class="grid-cell" id="p10"></div>
                    <div onclick="myFunction(this.value,this)" class="grid-cell" id="p11"></div>
                    <div onclick="myFunction(this.value,this)" class="grid-cell" id="p12"></div>
                    <div onclick="myFunction(this.value,this)" class="grid-cell" id="p13"></div>
                    <div onclick="myFunction(this.value,this)" class="grid-cell" id="p14"></div>

                </div>
                <div class="grid-row">
                    <div onclick="myFunction(this.value,this)" class="grid-cell" id="p15"></div>
                    <div onclick="myFunction(this.value,this)" class="grid-cell" id="p16"></div>
                    <div onclick="myFunction(this.value,this)" class="grid-cell" id="p17"></div>
                    <div onclick="myFunction(this.value,this)" class="grid-cell" id="p18"></div>
                    <div onclick="myFunction(this.value,this)" class="grid-cell" id="p19"></div>

                </div>
                <div class="grid-row">
                    <div onclick="myFunction(this.value,this)" class="grid-cell" id="p20"></div>
                    <div onclick="myFunction(this.value,this)" class="grid-cell" id="p21"></div>
                    <div onclick="myFunction(this.value,this)" class="grid-cell" id="p22"></div>
                    <div onclick="myFunction(this.value,this)" class="grid-cell" id="p23"></div>
                    <div onclick="myFunction(this.value,this)" class="grid-cell" id="p24"></div>

                </div>

            </div>
        </div>
        
        <div id="myProgress">
            <div id="myBar"></div>
            <h1 id="h_scour"></h1>
        </div>

    </div>
    
    <!--deuxieme page-->
    <div class="container2" id="container2" >
        <h1 class="title2" id="x">Multiplication</h1>
        <div class="game-container2" id="game-container2">
            <div class="grid-container2">
                <div class="grid-row2">
                    <div class="grid-cell2" id="a1" onclick="mult(this.value)">1</div>
                    <div class="grid-cell2" id="a2" onclick="mult(this.value)">2</div>
                    <div class="grid-cell2" id="a3" onclick="mult(this.value)">3</div>
                </div>
                <div class="grid-row2">
                    <div class="grid-cell2" id="a4" onclick="mult(this.value)">4</div>
                    <div class="grid-cell2" id="a5" onclick="mult(this.value)">5</div>
                    <div class="grid-cell2" id="a6" onclick="mult(this.value)">6</div>
                </div>
                <div class="grid-row2">
                    <div class="grid-cell2" id="a7" onclick="mult(this.value)">7</div>
                    <div class="grid-cell2" id="a8" onclick="mult(this.value)">8</div>
                    <div class="grid-cell2" id="a9" onclick="mult(this.value)">9</div>
                </div>



            </div>
        </div>
<h1 class="fd" id="fd"><h1>

    </div>
   

    <div id="div_plo">

        <div id="div_right">
            <div id="0" class="des_pal"></div>
            <div id="a0" class="bal"></div>
        </div>
    </div>
   
</body>
<script type="text/javascript" src="js/fac_diff.js">
</script>

</html>