<?php
include("../model/class/php/connexion.php") ;    
include("../model/class/php/Select_datas.php") ;    
include("../model/class/php/Insertion_Bdd.php") ;  
$apple = new Select_datas($servername,$username,$password,$dbname);

include("class/php/apple_row.php") ; 

$apple->sql='SELECT * FROM `liste_projet_admin` WHERE `liste_projet_admin_id_sha1_general`="remove"';
$apple->execution();
$myJSON = json_encode($apple->list_row); 
include("class/php/liste_projet_admin.php") ; 

// Itération sur les éléments de $liste_projet_admin_id_sha1
for($o=0; $o < count($liste_projet_admin_id_sha1); $o++){


    $liste_projet_admin_id_parent_ =  $liste_projet_admin_id_sha1[$o];
    
    // Nouvel objet $apple à chaque itération
    $apple_iteration = new Select_datas($servername,$username,$password,$dbname);

    array_push(
      $apple_iteration->row,
      'liste_projet_admin_id_sha1',
      'liste_projet_admin_id',
      'liste_projet_admin_name1',
      'liste_projet_admin_name2',
      'liste_projet_admin_name1_ascii',
      'liste_projet_admin_name2_ascii'
    );

    $apple_iteration->sql='SELECT * FROM `liste_projet_admin` WHERE  `liste_projet_admin_id_sha1_general` ="remove"' ;
    $apple_iteration->execution();
    include("class/php/admin_section_form.php");
}
?>