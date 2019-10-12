<?php
/* Registration process, inserts user info into the database 
   and sends account confirmation email message
 */
// Makes it easier to read
$user_name=$_SESSION['user_name'] ;

 
    $db=mysqli_connect('localhost','root','')or die('Erreur de connexion'.mysqli_error());
     mysqli_select_db($db,'accounts')or die('Erreur de selection'.mysqli_error());
    
   
// Set session variables to be used on profile.php page
$v=$mysqli->escape_string($_POST['v']);




$score_f = $_POST['scoredivfacile'];
$score_d =$_POST['scoredivdifficile'];


/*$_SESSION['facile'] = $_POST['scoref'];
$_SESSION['difficile'] = $_POST['scored'];

$facile = $mysqli->escape_string ($_POST['scoref']);
$difficile = $mysqli->escape_string ($_POST['scored']);
*/
if($v==1  ){
  
   $sql_meill = "SELECT  div_facile_1 FROM score_div_facile WHERE user_name='$user_name'";
 
      if($result=mysqli_query($db,$sql_meill))
      
         while($row=mysqli_fetch_row($result)){$f1=$row[0];  }
   if ($score_f>=$f1) {
     $sql1="UPDATE score_div_facile SET div_facile_1='$score_f' WHERE user_name='$user_name'";

  ( $mysqli->query($sql1) );
  }
}
if($v==3  ){
  
   $sql_meill = "SELECT  div_facile_3 FROM score_div_facile WHERE user_name='$user_name'";
 
      if($result=mysqli_query($db,$sql_meill))
      
         while($row=mysqli_fetch_row($result)){$f1=$row[0];  }
   if ($score_f>=$f1) {
     $sql1="UPDATE score_div_facile SET div_facile_3='$score_f' WHERE user_name='$user_name'";

  ( $mysqli->query($sql1) );
  }
}
 
 if($v==4  ){
  
   $sql_meill = "SELECT  div_facile_4 FROM score_div_facile WHERE user_name='$user_name'";
 
      if($result=mysqli_query($db,$sql_meill))
      
         while($row=mysqli_fetch_row($result)){$f1=$row[0];  }
   if ($score_f>=$f1) {
     $sql1="UPDATE score_div_facile SET div_facile_4='$score_f' WHERE user_name='$user_name'";

  ( $mysqli->query($sql1) );
  }
}
if($v==5  ){
  
   $sql_meill = "SELECT  div_facile_5 FROM score_div_facile WHERE user_name='$user_name'";
 
      if($result=mysqli_query($db,$sql_meill))
      
         while($row=mysqli_fetch_row($result)){$f1=$row[0];  }
   if ($score_f>=$f1) {
     $sql1="UPDATE score_div_facile SET div_facile_5='$score_f' WHERE user_name='$user_name'";

  ( $mysqli->query($sql1) );
  }
}
if($v==6  ){
  
   $sql_meill = "SELECT  div_facile_6 FROM score_div_facile WHERE user_name='$user_name'";
 
      if($result=mysqli_query($db,$sql_meill))
      
         while($row=mysqli_fetch_row($result)){$f1=$row[0];  }
   if ($score_f>=$f1) {
     $sql1="UPDATE score_div_facile SET div_facile_6='$score_f' WHERE user_name='$user_name'";

  ( $mysqli->query($sql1) );
  }
}
if($v==2  ){
  
   $sql_meill = "SELECT  div_facile_2 FROM score_div_facile WHERE user_name='$user_name'";
 
      if($result=mysqli_query($db,$sql_meill))
      
         while($row=mysqli_fetch_row($result)){$f1=$row[0];  }
   if ($score_f>=$f1) {
     $sql1="UPDATE score_div_facile SET div_facile_2='$score_f' WHERE user_name='$user_name'";

  ( $mysqli->query($sql1) );
  }
}
if($v==7  ){
  
   $sql_meill = "SELECT  div_facile_7 FROM score_div_facile WHERE user_name='$user_name'";
 
      if($result=mysqli_query($db,$sql_meill))
      
         while($row=mysqli_fetch_row($result)){$f1=$row[0];  }
   if ($score_f>=$f1) {
     $sql1="UPDATE score_div_facile SET div_facile_7='$score_f' WHERE user_name='$user_name'";

  ( $mysqli->query($sql1) );
  }
}
if($v==8  ){
  
   $sql_meill = "SELECT  div_facile_8 FROM score_div_facile WHERE user_name='$user_name'";
 
      if($result=mysqli_query($db,$sql_meill))
      
         while($row=mysqli_fetch_row($result)){$f1=$row[0];  }
   if ($score_f>=$f1) {
     $sql1="UPDATE score_div_facile SET div_facile_8='$score_f' WHERE user_name='$user_name'";

  ( $mysqli->query($sql1) );
  }
}
if($v==9  ){
  
   $sql_meill = "SELECT  div_facile_9 FROM score_div_facile WHERE user_name='$user_name'";
 
      if($result=mysqli_query($db,$sql_meill))
      
         while($row=mysqli_fetch_row($result)){$f1=$row[0];  }
   if ($score_f>=$f1) {
     $sql1="UPDATE score_div_facile SET div_facile_9='$score_f' WHERE user_name='$user_name'";

  ( $mysqli->query($sql1) );
  }
}

/****************************/

if($v==1  ){
  
   $sql_meill = "SELECT  div_difficile_1 FROM score_div_difficile WHERE user_name='$user_name'";
 
      if($result=mysqli_query($db,$sql_meill))
      
         while($row=mysqli_fetch_row($result)){$f1=$row[0];  }
   if ($score_d>=$f1) {
     $sql1="UPDATE score_div_difficile SET div_difficile_1='$score_d' WHERE user_name='$user_name'";

  ( $mysqli->query($sql1) );
  }
}
if($v==3  ){
  
   $sql_meill = "SELECT  div_difficile_3 FROM score_div_difficile WHERE user_name='$user_name'";
 
      if($result=mysqli_query($db,$sql_meill))
      
         while($row=mysqli_fetch_row($result)){$f1=$row[0];  }
   if ($score_d>=$f1) {
     $sql1="UPDATE score_div_difficile SET div_difficile_3='$score_d' WHERE user_name='$user_name'";

  ( $mysqli->query($sql1) );
  }
}
 
 if($v==4  ){
  
   $sql_meill = "SELECT  div_difficile_4 FROM score_div_difficile WHERE user_name='$user_name'";
 
      if($result=mysqli_query($db,$sql_meill))
      
         while($row=mysqli_fetch_row($result)){$f1=$row[0];  }
   if ($score_d>=$f1) {
     $sql1="UPDATE score_div_difficile SET div_difficile_4='$score_d' WHERE user_name='$user_name'";

  ( $mysqli->query($sql1) );
  }
}
if($v==5  ){
  
   $sql_meill = "SELECT  div_difficile_5 FROM score_div_difficile WHERE user_name='$user_name'";
 
      if($result=mysqli_query($db,$sql_meill))
      
         while($row=mysqli_fetch_row($result)){$f1=$row[0];  }
   if ($score_d>=$f1) {
     $sql1="UPDATE score_div_difficile SET div_difficile_5='$score_d' WHERE user_name='$user_name'";

  ( $mysqli->query($sql1) );
  }
}
if($v==6  ){
  
   $sql_meill = "SELECT  div_difficile_6 FROM score_div_difficile WHERE user_name='$user_name'";
 
      if($result=mysqli_query($db,$sql_meill))
      
         while($row=mysqli_fetch_row($result)){$f1=$row[0];  }
   if ($score_d>=$f1) {
     $sql1="UPDATE score_div_difficile SET div_difficile_6='$score_d' WHERE user_name='$user_name'";

  ( $mysqli->query($sql1) );
  }
}
if($v==2  ){
  
   $sql_meill = "SELECT  div_difficile_2 FROM score_div_difficile WHERE user_name='$user_name'";
 
      if($result=mysqli_query($db,$sql_meill))
      
         while($row=mysqli_fetch_row($result)){$f1=$row[0];  }
   if ($score_d>=$f1) {
     $sql1="UPDATE score_div_difficile SET div_difficile_2='$score_d' WHERE user_name='$user_name'";

  ( $mysqli->query($sql1) );
  }
}
if($v==7  ){
  
   $sql_meill = "SELECT  div_difficile_7 FROM score_div_difficile WHERE user_name='$user_name'";
 
      if($result=mysqli_query($db,$sql_meill))
      
         while($row=mysqli_fetch_row($result)){$f1=$row[0];  }
   if ($score_d>=$f1) {
     $sql1="UPDATE score_div_difficile SET div_difficile_7='$score_d' WHERE user_name='$user_name'";

  ( $mysqli->query($sql1) );
  }
}
if($v==8  ){
  
   $sql_meill = "SELECT  div_difficile_8 FROM score_div_difficile WHERE user_name='$user_name'";
 
      if($result=mysqli_query($db,$sql_meill))
      
         while($row=mysqli_fetch_row($result)){$f1=$row[0];  }
   if ($score_d>=$f1) {
     $sql1="UPDATE score_div_difficile SET div_difficile_8='$score_d' WHERE user_name='$user_name'";

  ( $mysqli->query($sql1) );
  }
}
if($v==9  ){
  
   $sql_meill = "SELECT  div_difficile_9 FROM score_div_difficile WHERE user_name='$user_name'";
 
      if($result=mysqli_query($db,$sql_meill))
      
         while($row=mysqli_fetch_row($result)){$f1=$row[0];  }
   if ($score_d>=$f1) {
     $sql1="UPDATE score_div_difficile SET div_difficile_9='$score_d' WHERE user_name='$user_name'";

  ( $mysqli->query($sql1) );
  }
}
?>