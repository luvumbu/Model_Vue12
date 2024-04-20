<?php 
 
include("path_class.php") ;  
$liste_projet_admin_id_sha1 = $_POST["liste_projet_admin_id_sha1"] ; 
echo $liste_projet_admin_id_sha1  ; 
$apple = new Insertion_Bdd(
      $servername,
      $username,
      $password,
      $dbname
      
      );
      $apple->set_msg_valudation("up ok") ;   
      $apple->set_sql('UPDATE `liste_projet_admin` SET `liste_projet_admin_id_sha1_general` = ""   WHERE  `liste_projet_admin_id_sha1` = "'.$liste_projet_admin_id_sha1.'"') ; 
       $apple->execution() ;    
?>