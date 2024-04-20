<?php  
include("path_class.php") ;



$social_user_id_sha1 = $_POST["social_user_id_sha1"] ; 

/*
$liste_projet_admin_name1 = "test name " ; 
$social_user_id_sha1 = "1713080244"; 
*/


$apple = new Insertion_Bdd(
      $servername,
      $username,
      $password,
      $dbname
      
      );
      $apple->set_msg_valudation("up ok") ;   

      $apple->set_sql('UPDATE `social_user` SET `social_user_name_1` = "remove"     WHERE `social_user_id_sha1` = "'.$social_user_id_sha1.'"') ; 

//      $apple->set_sql('UPDATE `liste_projet_admin` SET `liste_projet_admin_name1_ascii` = "'.$liste_projet_admin_name1_ascii.'",`liste_projet_admin_name1` = "'.$liste_projet_admin_name1.'",                             `liste_projet_admin_name2` = "'.$liste_projet_admin_name2 .'" , `liste_projet_admin_name2_ascii` = "'.$liste_projet_admin_name2_ascii .'"    WHERE `liste_projet_admin_id_sha1` = "'.$liste_projet_admin_id_sha1.'"') ; 
       $apple->execution() ;
       


 
















 




?>