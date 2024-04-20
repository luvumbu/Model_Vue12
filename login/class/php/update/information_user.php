<?php  
include("path_class.php") ;
$liste_projet_admin_id_sha1 = $_SESSION["information_user_id"] ; 
/*

$liste_projet_admin_name2 = $_POST["liste_projet_admin_name2"] ;  
 


 */
 
 
 



$liste_projet_admin_name1 = $_POST["liste_projet_admin_name1"] ;
$liste_projet_admin_name2 = $_POST["liste_projet_admin_name2"] ;



 



 








$apple = new Insertion_Bdd(
    $servername,
    $username,
    $password,
    $dbname
    
    );
    $apple->set_msg_valudation("up ok") ;   

    $apple->set_sql('UPDATE `information_user` SET `information_user_name_1` = "'.$liste_projet_admin_name1.'", `information_user_name_2`="'.$liste_projet_admin_name2.'"   WHERE `information_user_id` = "'.$liste_projet_admin_id_sha1.'"') ; 

//      $apple->set_sql('UPDATE `liste_projet_admin` SET `liste_projet_admin_name1_ascii` = "'.$liste_projet_admin_name1_ascii.'",`liste_projet_admin_name1` = "'.$liste_projet_admin_name1.'",                             `liste_projet_admin_name2` = "'.$liste_projet_admin_name2 .'" , `liste_projet_admin_name2_ascii` = "'.$liste_projet_admin_name2_ascii .'"    WHERE `liste_projet_admin_id_sha1` = "'.$liste_projet_admin_id_sha1.'"') ; 
     $apple->execution() ;





    
         
       




?>