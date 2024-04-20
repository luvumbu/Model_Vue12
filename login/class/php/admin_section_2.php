<?php 


include ("path_class.php");
$liste_projet_admin_id_parent =         $_SESSION["liste_projet_admin_id_parent"];
$liste_projet_admin_id_parent_session = $_SESSION["liste_projet_admin_id_parent"];
$_SESSION["liste_projet_admin_id_parent_"]= $_SESSION["liste_projet_admin_id_parent"];

$apple = new Select_datas($servername, $username, $password, $dbname);
include ("apple_row.php");
$apple->sql = 'SELECT * FROM `liste_projet_admin` WHERE `liste_projet_admin_id_sha1_general` !="remove" AND `liste_projet_admin_id_sha1`="' . $liste_projet_admin_id_parent . '" ';
$apple->execution();
$myJSON = json_encode($apple->list_row);

 
// affectation valeur array 
// execution et ajout des element dans la nouvelle table 
include ("liste_projet_admin.php");
include ("admin_section_form.php");

$liste_projet_admin_display_parent = $liste_projet_admin_display ; 
 
?>
<div class="margin_top"></div>
<?php
$liste_projet_admin_id_parent = $_SESSION["liste_projet_admin_id_parent"];
$apple = new Select_datas($servername, $username, $password, $dbname);
include ("apple_row.php");
$apple->sql = 'SELECT * FROM `liste_projet_admin` WHERE `liste_projet_admin_id_sha1_general` !="remove" AND `liste_projet_admin_id_parent`="' . $liste_projet_admin_id_parent . '" ';
$apple->execution();
$myJSON = json_encode($apple->list_row);
// affectation valeur array 
// execution et ajout des element dans la nouvelle table 


include ("liste_projet_admin.php"); 
include ("admin_section_form.php");
 

/*
 
<div id="liste_projet_admin_show"><?php echo $liste_projet_admin_display_parent[0] ; ?></div>
<ol class="list-group list-group-numbered" style="margin-top:70px">
  <li class="list-group-item d-flex justify-content-between align-items-start">
    <div class="ms-3 me-auto cursor_pointer" title="Flex-start" onclick="admin_section_2_display(this)">
      <div class="fw-bold">Flex-start</div>
      <div class="flex_box_1">
        <div></div>
        <div></div>
        <div></div>
      </div>
    </div>
    <div class="ms-3 me-auto cursor_pointer" title="Flex-end" onclick="admin_section_2_display(this)" >
      <div class="fw-bold">Flex-end</div>
      <div class="flex_box_2" id="flex_box_2">
        <div></div>
        <div></div>
        <div></div>
      </div>
    </div>
    <div class="ms-3 me-auto cursor_pointer" title="center" onclick="admin_section_2_display(this)" >
      <div class="fw-bold">center</div>
      <div class="flex_box_3" id="flex_box_3">
        <div></div>
        <div></div>
        <div></div>
      </div>
    </div>
    <div class="ms-3 me-auto cursor_pointer" title="flex-between" onclick="admin_section_2_display(this)" >
      <div class="fw-bold">Space between</div>
      <div id="flex_box_4" class="flex_box_4">
        <div></div>
        <div></div>
        <div></div>
      </div>
    </div>
  </li>
</ol>
<ol class="list-group list-group-numbered" style="margin-top:70px">
  <li class="list-group-item d-flex justify-content-between align-items-start">
    <div class="ms-3 me-auto cursor_pointer"><img width="50" height="50">
      <p class="text-center">Text</p>
    </div>
    <div class="ms-3 me-auto cursor_pointer"><img width="50" height="50">
      <p class="text-center">Text</p>
    </div>
    <div class="ms-3 me-auto cursor_pointer"><img width="50" height="50">
      <p class="text-center">Text</p>
    </div>

    <div class="ms-3 me-auto cursor_pointer"><img width="50" height="50">
      <p class="text-center">Text</p>
    </div>
    <div class="ms-3 me-auto cursor_pointer"><img width="50" height="50">
      <p class="text-center">Text</p>
    </div>
    <div class="ms-3 me-auto cursor_pointer"><img width="50" height="50">
      <p class="text-center">Text</p>

    </div>
    <div class="ms-3 me-auto cursor_pointer"><img width="50" height="50">
      <p class="text-center">Text</p>
    </div>
</ol>

 */
?>