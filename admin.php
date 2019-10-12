<?php
require 'tables_admin.php';
session_start();

if ( $_SESSION['logged_in'] != 1 ) {
  $_SESSION['message'] = "You must log in before viewing your profile page!";
  header("location: error.php");    
}
else {
    $first_name = $_SESSION['first_name'];
    $last_name = $_SESSION['last_name'];
    $user_name = $_SESSION['user_name'];
    $email = $_SESSION['email'];
    $type=$_SESSION['type'];
    
}

if ($type==0)
 header("location: game/profile2.php");  
$row[0]="";$row[1]="";$row[2]="";$row[3]="";$row[4]="";$row[5]="";
$rqt="";
if(isset($_POST['get_rqt']))
{
 $rqt=$_POST['rst'];
$db=mysqli_connect('localhost','root','')or die('Erreur de connexion'.mysqli_error());
mysqli_select_db($db,'accounts')or die('Erreur de selection'.mysqli_error());
$sql2=" SELECT $rqt FROM score_add";
if($result=mysqli_query($db,$sql2))
mysqli_close($db);

}
$user_scoadd='';
 $Mscor_TF='';
?>
<!DOCTYPE html>
<html>
<head>
<style>

</style>
  <title>Success</title>
 <link rel="stylesheet" href="css/style.css">  <link rel="stylesheet" href="css/style_adminstration.css"> 

</head>
<body>

    <div id="mySidenav" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a><br><br>
     <form method="post">
      <button class="btnn"name="Tuser"><a>Table joueurs</a></button><br><br>

      <button class="btnn" name="TSadd"><a>Tb S addition</a></button><br><br>
  
      <button class="btnn" name="TSsoust"><a>Tb S soustraction</a></button><br><br>

      <button class="btnn " name="TSmult"><a href="admin2.php">Tb S Multiplication and Division</a></button><br><br><br>
    </form>
     <a href="logout.php" class="btlogout" >LogOut</a><br>
</div>
<div id="main">
      <span class="open" style="" onclick="openNav()">&#9776; open</span>
<div>
<h1 class="h1">Welcome</h1><br>
<h2 class="h2"> <?php echo $user_name  ?></h2>
<h2 class="h3"><?= $email ?></h2></div>
<br>

<h1  class="mang"style="" >Management tables</h1>
<center>
<div class="form">

    <h1 style="font-size: 60px;" id="nametable" ><?= $nametable ;?></h1>
  <table border="1"  >
    <tr>
        <?php 
        if($t==0)//th user
        {
        for ($ii=0; $ii <count($tbusers) ; $ii++) { 
           echo '<th class=p'.$ii.'>'.$tbusers[$ii].'</th>';
        }
        }
           if($t==1)//th  addition
        {
           for ($ii=0; $ii <count($tbusers) ; $ii++) { 
           echo '<th class=sc_ad'.$ii.'>'.$tbusers[$ii].'</th>';
        }
        }
              if($t==2) // td rqt add
        {
            echo '<th style="color:red; max-width:600px;">user name</th>';
            echo '<th  style="max-width:100.8px;">'.$name_rstt.'</th>';
        }
           if($t==3)//th difficile add
        {
            echo '<th style="color:green; max-width:750px;">user name</th>';
            echo '<th style="max-width:77.8px;" >'.$name_rstt.'</th>';
        }
        if($t==4)//th soustraction
        {
              for ($ii=0; $ii <count($tbusers) ; $ii++) { 
              echo '<th class=sc_sous'.$ii.'>'.$tbusers[$ii].'</th>';
        }
        }

      if($t==5)// td rqt soust
        {
            echo '<th style="color:chartreuse; max-width:100px;">user name</th>';
            echo '<th  style="max-width:26.8px;">'.$name_rstt.'</th>';
        }
        ?>
       
    </tr>
    </table>
    <div class="scrallm">

    <?php 
       echo'<table border="1">';
       while($row=mysqli_fetch_row($result)){
        echo' <tr id="myUL" style="color:white ;padding-left:40px;" >';
          $rowlength=count($row);
       
            for ($i=0; $i <$rowlength; $i++)
             {  if($t==1)
               {   
                 
                  echo' <td id="td_add" >'.$row[$i].'</td>';
               }else if($t==4)
                {    
                  echo' <td id="td_soust" >'.$row[$i].'</td>';
               }else if($t==5)// td rqt soust
                {
                 echo' <td style="color:chocolate;">'.$row[$i].'</td>'; 
                   
                 }else if(($t==2)||($t==3))// td rqt soust
                  {
                   echo' <td style="color:aqua;">'.$row[$i].'</td>'; 
                   
                 }else
                 echo' <td>'.$row[$i].'</td>'; 
             
                }
     
         }
       echo'</tr>';
     echo'</table>';
    
    ?>
     <br>
 </div>
  <form method="post">
      <br><br>
    
     <div id="compt_best">
     <select class="input_rqt" name="ordr">
     <option>score tres facile</option>
     <option>score facile</option>
     <option>score difficile</option>
     <option>score tres difficile</option>
     
     </select>
     <div>
         <input type="hidden" name="nmTble" value="<?= $nametable ;?>"/>
    <a  id="bt_best"><button name="best" class="button button-block"/>best player</button></a> 
  </form>
  <h1><?= $user_scoadd;?></h1>
  <h1><?=  $Mscor_TF?></h1>
</div> 
</center>
</div>
<script>
function openNav() {
    document.getElementById("mySidenav").style.width = "450px";
    document.getElementById("main").style.marginLeft = "450px";
    document.body.style.backgroundColor = "rgba(0,0,0,0.5)";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("main").style.marginLeft= "0";
    document.body.style.backgroundColor = "";
}
  var uy=document.getElementById("nametable").textContent;
if(uy=="table users")
{document.getElementById("compt_best").hidden=true;
document.getElementById("bt_best").hidden=true;

}
</script>
</body>
</html>
