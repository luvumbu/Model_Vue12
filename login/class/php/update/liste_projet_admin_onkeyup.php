<?php  
include("path_class.php") ;



$liste_projet_admin_id_sha1 = $_POST["liste_projet_admin_id_sha1"] ; 
$liste_projet_admin_name1 = $_POST["liste_projet_admin_name1"] ; 
$liste_projet_admin_name2 = $_POST["liste_projet_admin_name2"] ;  






$liste_projet_admin_name1_ascii = '';

// Stocke chaque caractère du mot sous forme de code ASCII dans la variable $liste_projet_admin_name1_ascii
for ($i = 0; $i < strlen($liste_projet_admin_name1); $i++) {
    $liste_projet_admin_name1_ascii .= ord($liste_projet_admin_name1[$i]) . ' ';
}





$liste_projet_admin_name2_ascii = '';

// Stocke chaque caractère du mot sous forme de code ASCII dans la variable $liste_projet_admin_name2_ascii
for ($i = 0; $i < strlen($liste_projet_admin_name2); $i++) {
    $liste_projet_admin_name2_ascii .= ord($liste_projet_admin_name2[$i]) . ' ';
}








$apple = new Insertion_Bdd(
      $servername,
      $username,
      $password,
      $dbname
      
      );
      $apple->set_msg_valudation("up ok") ;   

      $apple->set_sql('UPDATE `liste_projet_admin` SET `liste_projet_admin_name1_ascii` = "'.$liste_projet_admin_name1_ascii.'", `liste_projet_admin_name2_ascii` = "'.$liste_projet_admin_name2_ascii .'"    WHERE `liste_projet_admin_id_sha1` = "'.$liste_projet_admin_id_sha1.'"') ; 

//      $apple->set_sql('UPDATE `liste_projet_admin` SET `liste_projet_admin_name1_ascii` = "'.$liste_projet_admin_name1_ascii.'",`liste_projet_admin_name1` = "'.$liste_projet_admin_name1.'",                             `liste_projet_admin_name2` = "'.$liste_projet_admin_name2 .'" , `liste_projet_admin_name2_ascii` = "'.$liste_projet_admin_name2_ascii .'"    WHERE `liste_projet_admin_id_sha1` = "'.$liste_projet_admin_id_sha1.'"') ; 
       $apple->execution() ;
       




















       $apple = new Insertion_Bdd(
        $servername,
        $username,
        $password,
        $dbname
        
        );
        $apple->set_msg_valudation("up ok") ;   
  
  
      $apple->set_sql('UPDATE `liste_projet_admin` SET  `liste_projet_admin_name1` = "'.$liste_projet_admin_name1.'",                             `liste_projet_admin_name2` = "'.$liste_projet_admin_name2 .'"    WHERE `liste_projet_admin_id_sha1` = "'.$liste_projet_admin_id_sha1.'"') ; 
         $apple->execution() ;
         
       




?>