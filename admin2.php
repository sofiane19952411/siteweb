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
    
    $user_name = $_SESSION['user_name'];
    $email = $_SESSION['email'];
    $type=$_SESSION['type'];
    
}

if ($type==0)
 header("location: game/profile2.php");  
?>

    <?php



{$db=mysqli_connect('localhost','root','')or die('Erreur de connexion'.mysqli_error());
mysqli_select_db($db,'accounts')or die('Erreur de selection'.mysqli_error());

$sql="SELECT id,first_name,last_name,user_name,email,type FROM users2";
$result=mysqli_query($db,$sql);

$sql1="SELECT user_name,mult_facile_1,mult_facile_2 ,mult_facile_3 ,mult_facile_4 ,mult_facile_5 ,mult_facile_6,mult_facile_7 ,mult_facile_8 ,mult_facile_9   FROM score_mult_facile";
$result1=mysqli_query($db,$sql1);

$sql2="SELECT user_name,mult_difficile_1,mult_difficile_2 ,mult_difficile_3 ,mult_difficile_4 ,mult_difficile_5 ,mult_difficile_6,mult_difficile_7 ,mult_difficile_8 ,mult_difficile_9   FROM score_mult_difficile";
$result2=mysqli_query($db,$sql2);

$sql3="SELECT user_name,div_facile_1,div_facile_2 ,div_facile_3 ,div_facile_4 ,div_facile_5 ,div_facile_6,div_facile_7 ,div_facile_8 ,div_facile_9   FROM score_div_facile";
$result3=mysqli_query($db,$sql3);

$sql4="SELECT user_name,div_difficile_1,div_difficile_2 ,div_difficile_3 ,div_difficile_4 ,div_difficile_5 ,div_difficile_6,div_difficile_7 ,div_difficile_8 ,div_difficile_9   FROM score_div_difficile";
$result4=mysqli_query($db,$sql4);

mysqli_close($db);}
?>
<!DOCTYPE html>
<html>
<head>
<style>
table {background-color:grey;
    border-collapse: collapse;
    width: 100%;
    font-weight: bold;
    font-size:20px;
}
h1.h1{font-size:50px;
color:black;font-weight: bold;
margin-bottom:-10px;}
th, td {
    padding: 8px;
    text-align: center;
    border: 1px solid black;
}
h2.h2{color:red;}

div.form{max-width: 70%;}
tr:hover{background-color:rgba(19, 35, 47, 0.9);}
/*select {
    width: 100%;
    padding: 1px 5px;
    color:white;
   font-size:19px;
    background-color:rgba(19, 35, 47, 0.8);
    display: inline-block;
    border: 1px solid transparent;
    border-radius: 4px;
    box-sizing: border-box;
}*/
.bt {border-radius:40px;
    background-color: #008CBA;
    border: 2px solid #008CBA;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 20px;
    margin: 4px 20px;
    cursor: pointer;    
    font-weight: bold;

}
.bt:hover {
    box-shadow:0 15px 40px ;
    background-color: transparent;
    color: black;
  
}

.bt1{border-radius:40px;
    margin-left:22%;
    margin-right:1%;
    background-color: #f44336; 
    border: 2px solid #f44336;
    font-weight: bold;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 20px;
 
    cursor: pointer;
}
.bt1:hover {box-shadow:0 15px 40px ;
    background-color: transparent;
    color: black;    
 
}
.bt2{border-radius:40px;
    background-color: #f44336;
    border: 2px solid #008CBA;
    color: black;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 20px;
    margin: 4px 20px;
    cursor: pointer;    
    font-weight: bold;
}.bt2:hover:before { 
    
    content:"\00AB \0020";
   
       
 
}
.bt2:hover{ box-shadow:0 15px 40px black;
   background-color:black;
    color: white;    
 
}
h1.titre{margin-top:-40px;}
.scrallm {
    border-collapse: collapse;
    border-spacing: 0;
    width: 100%;
    height: 400px;
    overflow-x: auto;
    border-bottom: 1px solid #000;
}
div.form{margin-top:1%;}

</style>
  <title>Success</title>
 <link rel="stylesheet" href="css/style.css"> 
</head>
<body>
<div>
<h1 class="h1">Welcome</h1><br>
<h2 class="h2"> <?php echo $user_name  ?></h2>
<h2 class="h2"><?= $email ?></h2></div>
<br>

<h1 style="color:#179b77 ;font-size: 60px;" >Management Tables</h1><br>
<button class="bt1" id="tb1" onClick="return bt1()">Users</button>
<button class="bt" id="tb2" onClick="return bt2()">Mult Easy</button>
<button class="bt" id="tb3" onClick="return bt3()">Mult Hard</button>
<button class="bt" id="tb4" onClick="return bt4()">Div Easy</button>
<button class="bt" id="tb5" onClick="return bt5()">Div Hard</button>
<a href='admin.php' class="bt2" >   Addition and Subtraction</a>
<div class="form"><br>
   <h1 id="titre" class="titre">USERS</h1>
   <div class="scrallm">  
    <?php //tbl1
     echo'<table border="1" id="tbl1" >
    <tr>
        <th>ID</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>User Name</th>
        <th>Email Address</th>
        <th>Admin/Users</th>
    </tr>';
    while($row=mysqli_fetch_row($result)){
        if ($row[5]==1) {$a='Admin'; $b='User'; $va=1; $vb=0;}
        
        else {$a='User'; $b='Admin'; $va=0; $vb=1;}
        
echo'
   <tr style="color:white" >
        <td >'.$row[0].'</td>
        <td>'.$row[1].'</td>
        <td>'.$row[2].'</td>
        <td>'.$row[3].'</td>
        <td>'.$row[4].'</td>
        <td>'.$a.'</td></td>
       
    </tr>';}echo'</table>';
 //tbl2
echo'<table border="1" id="tbl2" hidden >
    <tr>
        <th>User Name</th>
        <th>Stage 1</th>
        <th>Stage 2</th>
        <th>Stage 3</th>
        <th>Stage 4</th>
        <th>Stage 5</th>
        <th>Stage 6</th>
        <th>Stage 7</th>
        <th>Stage 8</th>
        <th>Stage 9</th>
        <th>score total</th>
    </tr>';
    while($row=mysqli_fetch_row($result1)){
       /* if ($row[5]==1) {$a='Admin'; $b='User'; $va=1; $vb=0;}
        else {$a='User'; $b='Admin'; $va=0; $vb=1;}*/
        $i=array($row[1],$row[2],$row[3],$row[4],$row[5],$row[6],$row[7],$row[8],$row[9]);
echo'
   <tr style="color:white" >
        <td >'.$row[0].'</td>
        <td>'.$row[1].'</td>
        <td>'.$row[2].'</td>
        <td>'.$row[3].'</td>
        <td>'.$row[4].'</td>
        <td>'.$row[5].'</td>
        <td>'.$row[6].'</td>
        <td>'.$row[7].'</td>
        <td>'.$row[8].'</td>
        <td>'.$row[9].'</td>
        <td style="color:blue;">'.array_sum($i).'</td>
        
    </tr>';} echo'</table>';
 //tbl3
echo'<table border="1" id="tbl3" hidden >
    <tr>
        <th>User Name</th>
        <th>Stage 1</th>
        <th>Stage 2</th>
        <th>Stage 3</th>
        <th>Stage 4</th>
        <th>Stage 5</th>
        <th>Stage 6</th>
        <th>Stage 7</th>
        <th>Stage 8</th>
        <th>Stage 9</th>
        <th>score total</th>
    </tr>';
    while($row=mysqli_fetch_row($result2)){
       /* if ($row[5]==1) {$a='Admin'; $b='User'; $va=1; $vb=0;}
        else {$a='User'; $b='Admin'; $va=0; $vb=1;}*/
        $i=array($row[1],$row[2],$row[3],$row[4],$row[5],$row[6],$row[7],$row[8],$row[9]);
echo'
   <tr style="color:white" >
        <td >'.$row[0].'</td>
        <td>'.$row[1].'</td>
        <td>'.$row[2].'</td>
        <td>'.$row[3].'</td>
        <td>'.$row[4].'</td>
        <td>'.$row[5].'</td>
        <td>'.$row[6].'</td>
        <td>'.$row[7].'</td>
        <td>'.$row[8].'</td>
        <td>'.$row[9].'</td>
        <td style="color:blue;">'.array_sum($i).'</td>
    </tr>';} echo'</table>';
     //tbl4
echo'<table border="1" id="tbl4" hidden >
    <tr>
        <th>User Name</th>
        <th>Stage 1</th>
        <th>Stage 2</th>
        <th>Stage 3</th>
        <th>Stage 4</th>
        <th>Stage 5</th>
        <th>Stage 6</th>
        <th>Stage 7</th>
        <th>Stage 8</th>
        <th>Stage9</th>
        <th>score total</th>
    </tr>';
    while($row=mysqli_fetch_row($result3)){
       /* if ($row[5]==1) {$a='Admin'; $b='User'; $va=1; $vb=0;}
        else {$a='User'; $b='Admin'; $va=0; $vb=1;}*/
        $i=array($row[1],$row[2],$row[3],$row[4],$row[5],$row[6],$row[7],$row[8],$row[9]);
echo'
   <tr style="color:white" >
        <td >'.$row[0].'</td>
        <td>'.$row[1].'</td>
        <td>'.$row[2].'</td>
        <td>'.$row[3].'</td>
        <td>'.$row[4].'</td>
        <td>'.$row[5].'</td>
        <td>'.$row[6].'</td>
        <td>'.$row[7].'</td>
        <td>'.$row[8].'</td>
        <td>'.$row[9].'</td>
        <td style="color:blue;">'.array_sum($i).'</td>
    </tr>';} echo'</table>';
     //tbl5
echo'<table border="1" id="tbl5" hidden >
    <tr>
        <th>User Name</th>
        <th>Stage 1</th>
        <th>Stage 2</th>
        <th>Stage 3</th>
        <th>Stage 4</th>
        <th>Stage 5</th>
        <th>Stage 6</th>
        <th>Stage 7</th>
        <th>Stage 8</th>
        <th>Stage 9</th>
        <th>score total</th>
    </tr>';
    while($row=mysqli_fetch_row($result4)){
       /* if ($row[5]==1) {$a='Admin'; $b='User'; $va=1; $vb=0;}
        else {$a='User'; $b='Admin'; $va=0; $vb=1;}*/
        $i=array($row[1],$row[2],$row[3],$row[4],$row[5],$row[6],$row[7],$row[8],$row[9]);
echo'
   <tr style="color:white" >  
        <td >'.$row[0].'</td>
        <td>'.$row[1].'</td>
        <td>'.$row[2].'</td>
        <td>'.$row[3].'</td>
        <td>'.$row[4].'</td>
        <td>'.$row[5].'</td>
        <td>'.$row[6].'</td>
        <td>'.$row[7].'</td>
        <td>'.$row[8].'</td>
        <td>'.$row[9].'</td>
        <td style="color:blue;">'.array_sum($i).'</td>
    </tr>';} echo'</table>';
    ?>
   <br> 
 </div>
     <a href="logout.php" ><button class="button button-block" style="cursor:pointer;"/>Log Out</button></a>
</div>
<script src="js/js.js"></script>
</body>
</html>
