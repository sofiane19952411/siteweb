
<?php 
/* Main page with two forms: sign up and log in */
require 'db.php';

session_start();


?>
<!DOCTYPE html>
<html>
<head>
  <title>Sign-Up/Login Form</title>
 <link rel="stylesheet" href="css/style.css"> 
</head>

<?php 

    if (isset($_POST['save_img'])) { //user logging in

        require 'save_photo.php';
     //   header("location: save_photo.php"); 
        
    }
?>
<script>
var indx=0;
function chg_avatar() { 
  if(indx <8)
  {
   document.getElementById("avatar").src="img/avatar/"+indx+".png";
    document.getElementById("hidden").value="img/avatar/"+indx+".png";
 indx++;}
}
function chg_avatar_back()
{ 
 if(indx >0)
{
 indx--;
 document.getElementById("avatar").src="img/avatar/"+indx+".png";
 document.getElementById("hidden").value="img/avatar/"+indx+".png";
}
}


</script>
<body>
        
  
<h1 class="welcome"> Welcome to website Basic Calculation </h1>
  <div class="form">
      

      
      <div class="tab-content">

         <div id="login">   
          <h1>choix une photo</h1>
          
          <form  method="post" autocomplete="off">
          <center>  <div class="imgh" > <img src="img/avatar/0.png" class="img_sv" name="img_account" id="avatar"/> </div></center>
            <img src="img/next_bl.png" class="img_next" onclick="return chg_avatar();"/>
            <img src="img/back_bl.png" class="img_back" onclick="return chg_avatar_back()"/>
          <input type="hidden" name="hidden" id="hidden" value="img/avatar/0.png"/>
           <center>  <button class="button button-block" id="bt_save" name="save_img" />SAVE</button></center>
          
          </form>

        </div>
          
        <div id="signup">   
          


        </div>  
        
      </div><!-- tab-content -->
      
</div> <!-- /form -->
  <script src='js/jquery.min.js'></script>

    <script src="js/index.js"></script>

</body>
</html>
