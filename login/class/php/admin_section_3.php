<?php




 



 
include ("path_class.php");
$apple = new Select_datas($servername, $username, $password, $dbname);
include ("apple_row3.php");


$social_user_id_information_user = $_SESSION["social_user_id_information_user"] ; 
$apple->sql = 'SELECT * FROM `social_user` WHERE `social_user_id_information_user` ="'.$social_user_id_information_user.'" ';
$apple->execution();
$myJSON = json_encode($apple->list_row);
include ("liste_projet_admin3.php");





$apple = new Select_datas($servername, $username, $password, $dbname);
include ("apple_row2.php");


 
$apple->sql = 'SELECT * FROM `information_user` WHERE `information_user_id_sha1`="'.$social_user_id_information_user.'"';
$apple->execution();
$myJSON = json_encode($apple->list_row);
include ("liste_projet_admin2.php");
 
?>

 <div class="div_text" >
 <p>
     prénom
     </p>
     <input  id ="liste_projet_admin_name1" value="<?php echo $information_user_name_1[0] ?>" placeholder="prénom" type="text" onkeyup="information_user()"  >
     <p>
      Nom 
     </p>
     <input  id ="liste_projet_admin_name2" value="<?php echo $information_user_name_2[0] ?>" placeholder="nom" type="text" onkeyup="information_user()"  >




     <?php 
$social_user_id_information_user = $_SESSION["social_user_id_information_user"] ;  


 
?>

<img class="cursor_pointer add_social_user" title="<?php echo $social_user_id_information_user ; ?>" onclick ="social_user(this)" width="50" height="50" src="https://img.icons8.com/office/50/plus--v1.png" alt="plus--v1"/>


<div id="social_user"></div>
 


     <div class="terminer cursor_pointer" onclick="home()"> Terminer</div>

 </div>
<style>
  .div_text{
    text-align:center ; 
    width: 90%; 
    margin:auto; 
  }

  .div_text input,.terminer{
   
    width: 100%; 
    margin:auto; 
    margin-bottom:15px; 
    
  }
  .terminer{
    background-color:green ; 
    padding:10px; 
    
  }
  .none{
    display:none ; 
  }
</style>

 
 

 

 