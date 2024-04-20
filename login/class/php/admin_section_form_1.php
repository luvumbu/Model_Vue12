<?php
 
if(isset($_SESSION["information_user_login"])){
 
  }
  else {
    session_start() ; 
  }
  
for($o =0; $o<count($liste_projet_admin_id); $o++){
  $mot_d_origine1 = '';
  $mot_d_origine2 = '';
 if($liste_projet_admin_name1[$o]!=""){


  $ascii_codes = explode(' ', trim($liste_projet_admin_name1_ascii[$o]));
  foreach ($ascii_codes as $ascii_code) {
      $mot_d_origine1 .= chr($ascii_code);
  }
 }
 

 if($liste_projet_admin_name2[$o]!=""){
 
  

  $ascii_codes = explode(' ', trim($liste_projet_admin_name2_ascii[$o]));
  foreach ($ascii_codes as $ascii_code) {
      $mot_d_origine2 .= chr($ascii_code);
 }
  
  }

  $information_user_login = $_SESSION["information_user_login"];
  $information_user_password = $_SESSION["information_user_password"];
  $information_user_id_sha1_0=  $information_user_id_sha1[$o] ; 
  $information_user_id_sha1_1=  sha1($information_user_login);
  $root_admin= false;
  if ($information_user_login == $username && $information_user_password == sha1($password)) {
   // echo '<img width="50" height="50" src="https://img.icons8.com/fluency/50/crown.png" alt="crown"/>';
    $root_admin = true;
  }
  ?>

    <!-- !-->
      <li class="list-group-item d-flex justify-content-between align-items-start">
      <div class="ms-2 me-auto">
 
        <?php 
        if($liste_projet_admin_new_file[$o]!=""){
          ?>
 <a href="add_picture/<?php echo $liste_projet_admin_new_file[$o] ?>">
  <img class="max_width_img" src="add_picture/<?php echo $liste_projet_admin_new_file[$o] ?>" alt="" srcset="">
 </a>
 <?php
        } 
   
          ?>
          <div class="fw-bold"><input  class="<?php echo $liste_projet_admin_id_sha1_general[$o] ?> " style="width:500px;" onkeyup="liste_projet_admin_onkeyup(this)" id="<?php echo "a_".$liste_projet_admin_id_sha1[$o] ?>"  title="<?php echo $liste_projet_admin_id_sha1[$o] ?>" type="text" value="<?php echo $mot_d_origine1 ?>"></div>
          <div class="fw-bold"> <textarea class="<?php echo $liste_projet_admin_id_sha1_general[$o] ?> "   style="width:500px" onkeyup="liste_projet_admin_onkeyup(this)" id="<?php echo "b_".$liste_projet_admin_id_sha1[$o] ?>"  title="<?php echo $liste_projet_admin_id_sha1[$o] ?>" type="text" name="" id="" cols="30" rows="10"><?php echo $mot_d_origine2 ?></textarea>
          </div>
        </div>
<div class="add_visibility">
<img onclick="add_admin1(this)" width="50" title="<?php echo $liste_projet_admin_id_sha1[$o] ?>" height="50" src="https://img.icons8.com/officel/50/add--v1.png" alt="add--v1" class="cursor_pointer"/> 
</div> 
<img width="50" onclick="add_picture(this)" title="<?php echo $liste_projet_admin_id_sha1[$o] ?>" class="cursor_pointer" height="50" src="https://img.icons8.com/office/50/picture.png" alt="picture"/>
<img  onclick="liste_projet_admin_annuler(this)" width="50" title="<?php echo $liste_projet_admin_id_sha1[$o] ?>" width="50" class="cursor_pointer" height="50" src="https://img.icons8.com/ios/50/undo.png" alt="delete-forever--v1"/>
<img onclick="liste_projet_admin_remove2(this)" width="50" title="<?php echo $liste_projet_admin_id_sha1[$o] ?>"
        width="50" class="cursor_pointer" height="50" src="https://img.icons8.com/ios/50/delete-forever--v1.png"
        alt="delete-forever--v1" />
        <img onclick="liste_projet_admin_remove3(this)" width="50" title="<?php echo $liste_projet_admin_id_sha1[$o] ?>"
        width="50" class="cursor_pointer" height="50" src="https://img.icons8.com/external-stick-figures-gan-khoon-lay/50/external-damaging-vandalism-people-stick-figures-gan-khoon-lay.png"
        alt="delete-forever--v1" />        
<img class="cursor_pointer" title="<?php echo $liste_projet_admin_id_sha1[$o] ?>" onclick="liste_projet_admin_show(this)" width="50" height="50" src="https://img.icons8.com/ios-filled/50/gear.png" alt="gear"/>
<a href="home.php/<?php echo $liste_projet_admin_id_sha1[$o] ?>">
    <img   width="50" title="<?php echo $liste_projet_admin_id_sha1[$o] ?>" width="50" class="cursor_pointer" height="50" src="https://img.icons8.com/ios/50/link--v1.png" alt="delete-forever--v1"/>
</a>    
      </li>
    <?php    
    }
    ?>
<style>
  .max_width_img{
    max-width: 250px;
    border-radius: 10px; 
    
    margin-left: 10px;
    border:1px solid rgba(0, 0, 50, 0.1);
  }
  .remove{
    background-color: rgba(150,0,0,0.1);
  }
</style>
 
 