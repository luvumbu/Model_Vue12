<?php
 
if (isset($_SESSION["information_user_login"])) {

} else {
  session_start();
}

for ($o = 0; $o < count($liste_projet_admin_id); $o++) {




  $mot_d_origine1 = '';
  $mot_d_origine2 = '';
  if ($liste_projet_admin_name1[$o] != "") {


    $ascii_codes = explode(' ', trim($liste_projet_admin_name1_ascii[$o]));
    foreach ($ascii_codes as $ascii_code) {
      $mot_d_origine1 .= chr($ascii_code);
    }
  }


  if ($liste_projet_admin_name2[$o] != "") {



    $ascii_codes = explode(' ', trim($liste_projet_admin_name2_ascii[$o]));
    foreach ($ascii_codes as $ascii_code) {
      $mot_d_origine2 .= chr($ascii_code);
    }

  }


  $information_user_login = $_SESSION["information_user_login"];
  $information_user_password = $_SESSION["information_user_password"];
  $information_user_id_sha1_0 = $information_user_id_sha1[$o];
  $information_user_id_sha1_1 = sha1($information_user_login);
  $root_admin = false;
  if ($information_user_login == $username && $information_user_password == sha1($password)) {
    // echo '<img width="50" height="50" src="https://img.icons8.com/fluency/50/crown.png" alt="crown"/>';
    $root_admin = true;
  }








  ?>

  <!-- !-->


      <?php

      if ($information_user_id_sha1_0 != $information_user_id_sha1_1) {






      } else {

        ?>
          <li class="list-group-item d-flex justify-content-between align-items-start">
    <div class="ms-2 me-auto">
        <a href="add_picture/<?php echo $liste_projet_admin_new_file[$o] ?>">
          <img class="max_width_img" src="add_picture/<?php echo $liste_projet_admin_new_file[$o] ?>" alt="" srcset="">

         
        </a>
        <div class="fw-bold"><input style="width:500px;" onkeyup="liste_projet_admin_onkeyup(this)"
            id="<?php echo "a_" . $liste_projet_admin_id_sha1[$o] ?>" title="<?php echo $liste_projet_admin_id_sha1[$o] ?>"
            type="text" value="<?php echo $mot_d_origine1 ?>"></div>
        <div class="fw-bold"> <textarea style="width:500px" onkeyup="liste_projet_admin_onkeyup(this)"
            id="<?php echo "b_" . $liste_projet_admin_id_sha1[$o] ?>" title="<?php echo $liste_projet_admin_id_sha1[$o] ?>"
            type="text" name="" id="" cols="30" rows="10"><?php echo $mot_d_origine2 ?></textarea>

            <div class="mot_d_origine2">
            <?php echo $mot_d_origine2 ?>
            </div>

<div>


<?php
if( $liste_projet_admin_visibilite1[$o]==""){
  
?>
     
     <div class="cursor_pointer">
          <img  class="(0-0)" title="<?php echo  $liste_projet_admin_id_sha1[$o] ?>" width="60" height="60" src="https://img.icons8.com/ios/60/invisible.png" alt="invisible" onclick="visibilite(this)"/>

     </div>
     <p>
  <div   id="<?php echo  $liste_projet_admin_id_sha1[$o]."_info_visibilite" ?>">
         <b class="color_b_1 alert alert-success"> visible </b> 
  </div>
</p>

<?php 
}
else {
  ?>
  <div class="cursor_pointer">
  <img  class="" title="<?php echo  $liste_projet_admin_id_sha1[$o] ?>"  width="60" height="60" src="https://img.icons8.com/windows/60/invisible.png" alt="invisible" onclick="visibilite(this)"/>

  </div>

  <div style="text-align:center" class="cursor_pointer" id="<?php echo  $liste_projet_admin_id_sha1[$o]."_info_visibilite" ?>">
          <b class="color_b_2 alert alert-danger">invisible</b>
  </div>
  <?php 
}
?>



       <!--<img width="60" height="60" src="https://img.icons8.com/windows/60/invisible.png" alt="invisible" onclick="visibilite(this)"/>
        <p>
          Visible
        </p>
            <img width="60" height="60" src="https://img.icons8.com/ios/60/invisible.png" alt="invisible"/>
            <p>
          Visible
        </p>-->
</div>
      
          <?php




      }
      ?>

      </div>
    </div>


    <?php
    if ($information_user_id_sha1_0 == $information_user_id_sha1_1) {



      ?>

      <div class="add_visibility">
        <img onclick="add_admin1(this)" width="50" title="<?php echo $liste_projet_admin_id_sha1[$o] ?>" height="50"
          src="https://img.icons8.com/officel/50/add--v1.png" alt="add--v1" class="cursor_pointer" />
          <p class="text-center">add</p>
      </div>

      <div>
            <img width="50" onclick="add_picture(this)" title="<?php echo $liste_projet_admin_id_sha1[$o] ?>"
        class="cursor_pointer" height="50" src="https://img.icons8.com/office/50/picture.png" alt="picture" />
        <p class="text-center">document</p>

      </div>
  
  
        <div>
              <img onclick="liste_projet_admin_remove(this)" width="50" title="<?php echo $liste_projet_admin_id_sha1[$o] ?>"
        width="50" class="cursor_pointer" height="50" src="https://img.icons8.com/ios/50/delete-forever--v1.png"
        alt="delete-forever--v1" />
        <p class="text-center">remove</p>

        </div>
<div>
        <img class="cursor_pointer" title="<?php echo $liste_projet_admin_id_sha1[$o] ?>"
        onclick="liste_projet_admin_show(this)" width="50" height="50" src="https://img.icons8.com/ios-filled/50/gear.png"
        alt="gear" />
        <p class="text-center">
          settings
        </p>
</div>

<div>
        <a href="home.php/<?php echo $liste_projet_admin_id_sha1[$o] ?>">
        <img width="50" title="<?php echo $liste_projet_admin_id_sha1[$o] ?>" width="50" class="cursor_pointer" height="50"
          src="https://img.icons8.com/ios/50/link--v1.png" alt="delete-forever--v1" />
      </a>
      <p class="text-center">
        Link
      </p>
</div>

      <?php
    }




    ?>








  </li>
  <?php

}



?>




<style>
  .max_width_img {
    max-width: 250px;
    border-radius: 10px;

    margin-left: 10px;
    border: 1px solid rgba(0, 0, 50, 0.1);
  }
  .color_b_1{
    color:green ; 
  }
  .color_b_2{
    color:red ; 
  }
</style>