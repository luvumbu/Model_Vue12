<?php
$information_user_login = $_SESSION["information_user_login"];
$information_user_password = $_SESSION["information_user_password"];


 

$image_width_all = "40";
$image_height_all = "40";
$img_class_all = "cursor_pointer";

$image_src_1 = "https://img.icons8.com/fluency/50/crown.png"; // couronne 

$image_src_2 = "https://img.icons8.com/ios/50/home--v1.png";
$image_src_3 = "https://img.icons8.com/color/50/all.png";
$image_src_4 = "https://img.icons8.com/color/48/disconnect-main-plug.png";
$image_src_5 = "https://img.icons8.com/matisse/48/remove--v2.png";
$image_src_6 = "https://img.icons8.com/officel/50/add--v1.png";
$image_src_7 = "https://img.icons8.com/cotton/64/name--v2.png";


$image_src_8="https://img.icons8.com/cotton/64/artificial-intelligence.png";


 
 
$text_src_2 = "Home";
$text_src_3 = "Tous les elements";
$text_src_4 = "Déconnection";
$text_src_5 = "Home";

$text_src_6 = "Parametres";
$text_src_7 = "Changer votre nom";

$text_src_8 = "ajouter media";







?>

<div class="container mt-5 text-center">
  <?php
  $root_user = false;
  if ($information_user_login == $username && $information_user_password == sha1($password)) {
    echo '<img class="' . $img_class_all . '" width="' . $image_width_all . '" height="' . $image_height_all . '" src="' . $image_src_1 . '" alt="crown"/>';
    $root_user = true;
  }

  ?>
  <div class="row">
    <div class="col-sm-4" onclick="home()">
      <h3><?php echo $text_src_2 ?></h3>
      <?php
            echo '<img class="' . $img_class_all . '" width="' . $image_width_all . '" height="' . $image_height_all . '" src="' . $image_src_2 . '" alt="crown"/>';
      ?>
    </div>
    <div class="col-sm-4" onclick="all_element()">
    <h3><?php echo $text_src_3 ?></h3>

      <?php 
    echo '<img class="' . $img_class_all . '" width="' . $image_width_all . '" height="' . $image_height_all . '" src="' . $image_src_3 . '" alt="crown"/>';
      
      ?>

    </div>
    <div class="col-sm-4" onclick="disconnect()">
    <h3><?php echo $text_src_4 ?></h3>

      <?php 
    echo '<img class="' . $img_class_all . '" width="' . $image_width_all . '" height="' . $image_height_all . '" src="' . $image_src_4 . '" alt="crown"/>';
      
      ?>


    </div>

    <div class="col-sm-4" onclick="change_name()">
    <h3><?php echo $text_src_7 ?></h3>

      <?php 
    echo '<img class="' . $img_class_all . '" width="' . $image_width_all . '" height="' . $image_height_all . '" src="' . $image_src_7 . '" alt="crown"/>';
      
      ?>
    </div>


    
    <?php
    if ($root_user) {
      ?>
      <div class="col-sm-4" style="margin-top:100px" onclick="all_element_admin()">
        <h3>Element suprimée</h3>
        <?php 
    echo '<img class="' . $img_class_all . '" width="' . $image_width_all . '" height="' . $image_height_all . '" src="' . $image_src_5 . '" alt="crown"/>';
      
      ?>
      </div>
      <?php
    }
    ?>
  </div>
</div>

<div class="container p-5 my-5 ">
<h3><?php echo $text_src_6 ?></h3>

  <p>
 
      <?php 
    echo '<img class="' . $img_class_all . '" width="' . $image_width_all . '" height="' . $image_height_all . '" src="' . $image_src_6 . '" onclick="add_admin1(this)" alt="crown"/>';
      
      ?>
    
    
    </p>
</div>
<div class="container p-5 my-5 bg-dark text-white">
  <ol class="list-group list-group-numbered">
    <div id="admin_section_1"></div>
  </ol>
  <ol class="list-group list-group-numbered" style="margin-top:70px">
    <h1>Aperçu</h1>
  </ol>
</div>

<link rel="stylesheet" href="index_log.css">
<!-- ajout de data automatique avec index_log.js -->



<?php
if ($root_user) {
  ?>
  <script>
    Ajax("admin_section_1", "class/php/admin_section_1.php"); 
  </script>
  <?php
} else {


  ?>
  <script>
    Ajax("admin_section_1", "class/php/admin_section_1.php"); 
  </script>
  <?php
}
?>
<script src="index_log.js"></script>