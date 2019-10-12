<?php
/*******get best *******/
     $db=mysqli_connect('localhost','root','')or die('Erreur de connexion'.mysqli_error());
     mysqli_select_db($db,'accounts')or die('Erreur de selection'.mysqli_error());
    $sql_score = "SELECT score_TF FROM score_add  WHERE user_name='$user_name'" ;
 
      if($result=mysqli_query($db,$sql_score))
      
         while($row=mysqli_fetch_row($result)){
           $best=$row[0];
         
      }

/*******get meilleur score *******/

     $db=mysqli_connect('localhost','root','')or die('Erreur de connexion'.mysqli_error());
     mysqli_select_db($db,'accounts')or die('Erreur de selection'.mysqli_error());
    $sql_meill = "SELECT  score_TF ,user_name FROM score_add   ORDER BY score_TF  ";
 
      if($result=mysqli_query($db,$sql_meill))
      
         while($row=mysqli_fetch_row($result)){
           $meilleur=$row[0];
         $user_meilleur=$row[1];
      }

      
       $db=mysqli_connect('localhost','root','')or die('Erreur de connexion'.mysqli_error());
     mysqli_select_db($db,'accounts')or die('Erreur de selection'.mysqli_error());
    $sql_avatar = "SELECT avatar FROM  users2 WHERE user_name='$user_meilleur' ";
 
      if($result=mysqli_query($db,$sql_avatar))
      
         while($row=mysqli_fetch_row($result)){
           $avater_meilleur=$row[0];
      
      }
     
?>