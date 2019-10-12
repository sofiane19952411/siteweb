<?php


$score= $_POST["hidden"];

     $db=mysqli_connect('localhost','root','')or die('Erreur de connexion'.mysqli_error());
     mysqli_select_db($db,'accounts')or die('Erreur de selection'.mysqli_error());
    $sql_score = "UPDATE score_add SET score_F='$score' WHERE user_name='$user_name'" ;
      mysqli_query($db,$sql_score)or die('Erreur SQL! <br>');

header("location: "); 

?>