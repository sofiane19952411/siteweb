<?php
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
    
}
if ($type==1)
 header("location: ../../admin.php");  
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
<?php 
if ($_SERVER['REQUEST_METHOD'] == 'POST') 
{
    if (isset($_POST['restart'])) { //your score

        require 'score.php';
        
    }
    
   
}
?>
<body id="body"><br><br><br><br>
    <h1 class="title1" id="x1"></h1>
    <!--bravo or faux--><br>
      <form action="mult.php" method="post" autocomplete="off">
<input type="hidden" name="score" id="score"/>
<a href='' class="restart" id="restart" name="restart" hidden> </a>
 </form>
    
   
    
    <br>
    <div class="score_po" id="score_po">
        <img src="8.gif" class="img_sc" />
        <img src="0.gif" class="img_sc" id="img_scbl" />
        <h1 id="hscore">score</h1>
        <h1 id="best">best</h1>
        <h1 id="himgscore" name="score">000</h1>
        <h1 id="hscore18">+10</h1>
        <h1 id="imgbest">000</h1>
    </div>
    
    <a href="../profile2.php" class="home" id="home"> </a>
    <div class="user">
        
        <h2>For logout</h2>
        <h1 class="nam"><?php echo $user_name ?></h1>
          <p class="email"><?= $email ?></p>
          <a href="../../logout.php"  class="logout" id="logout"></a>
    </div>
    <!--troisième  page-->
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
    <div class="container2" id="container2" hidden>
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


    </div>
    <!--premier page-->
    <div id="page3">
        <h1 class="md">Multiplication</h1>
        <h1 class="h">Choisir le niveau pour jouer</h1>
        <div class="grid-row3">
            <div class="grid-cell3" onclick="facile()" onmouseover="function1()" onmouseout="f1(this)" id="pic1"></div>
            <div class="grid-cell3" onclick="difficile()" onmouseover="function2()" onmouseout="f1(this)" id="pic2"> </div>
            <div class="title4" id="t1"> </div>
            <div class="title5" id="t2"></div>
        </div>
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