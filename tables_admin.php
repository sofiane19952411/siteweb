<?php 


   $db=mysqli_connect('localhost','root','')or die('Erreur de connexion'.mysqli_error());
   mysqli_select_db($db,'accounts')or die('Erreur de selection'.mysqli_error());
   $sql2=" SELECT id,first_name,last_name,user_name,email,type FROM users2";
   if($result=mysqli_query($db,$sql2))
   mysqli_close($db);
$tbusers=array('id','first_name','last_name','user_name','email','type');
    
$t=0;
$nametable="table users";
if(isset($_POST['Tuser']))
{

   $db=mysqli_connect('localhost','root','')or die('Erreur de connexion'.mysqli_error());
   mysqli_select_db($db,'accounts')or die('Erreur de selection'.mysqli_error());
   $sql2=" SELECT id,first_name,last_name,user_name,email,type FROM users2";
   if($result=mysqli_query($db,$sql2))
   mysqli_close($db);
$tbusers=array('id','first_name','last_name','user_name','email','type');
    
$t=0;
$td_soustt=0;
$nametable="table users";
   
}
if(isset($_POST['TSadd']))
{

   $db=mysqli_connect('localhost','root','')or die('Erreur de connexion'.mysqli_error());
   mysqli_select_db($db,'accounts')or die('Erreur de selection'.mysqli_error());
   $sql2=" SELECT * FROM score_add";
   if($result=mysqli_query($db,$sql2))
   mysqli_close($db);
   $tbusers=array('user name','S Tres facile','score facile','score difficile','S tres difficile','score total');
   $nametable="table score addition";
   $t=1;
   $td_soustt=0;
  //  $pstype='add';
}
if(isset($_POST['TSsoust']))
{

   $db=mysqli_connect('localhost','root','')or die('Erreur de connexion'.mysqli_error());
   mysqli_select_db($db,'accounts')or die('Erreur de selection'.mysqli_error());
   $sql2=" SELECT * FROM score_soust";
   if($result=mysqli_query($db,$sql2))
   mysqli_close($db);
   $tbusers=array('user name','S Tres facile','score facile','score difficile','S tres difficile','score total');
   $nametable="<font color='green'>table score soustraction</font>";
   $t=4;
   $td_soustt=1;
   
   // $pstype='soust';
}
if(isset($_POST['best']))
{ $rqt=$_POST["ordr"];
   if($_POST["ordr"]=="score tres facile")
   $rqt="score_TF";
   if($_POST["ordr"]=="score facile")
   $rqt="score_F";
   if($_POST["ordr"]=="score difficile")
   $rqt="score_D";
   if($_POST["ordr"]=="score tres difficile")
   $rqt="score_TD";


$nmTble=$_POST["nmTble"];


     $db=mysqli_connect('localhost','root','')or die('Erreur de connexion'.mysqli_error());
     mysqli_select_db($db,'accounts')or die('Erreur de selection'.mysqli_error());
    if($nmTble !="table score addition")
     {
       $sql_meill = "SELECT user_name , $rqt FROM score_soust ORDER BY $rqt DESC  ";
        $nametable="<font style='color:chocolate;'>best ".$_POST["ordr"]." soustraction <font>";
       
              $t=5;
      }
      else{
           $sql_meill = "SELECT user_name , $rqt FROM score_add ORDER BY $rqt DESC  ";
          $nametable="<font style='color:aqua;'>best ".$_POST["ordr"]." addition <font>";
           
              $t=2;
               if($rqt=="score_D")
              $t=3;
      }
      if($result=mysqli_query($db,$sql_meill))
    
   mysqli_close($db);

    
  
     
     $name_rstt=$_POST["ordr"];;
     
}



?>