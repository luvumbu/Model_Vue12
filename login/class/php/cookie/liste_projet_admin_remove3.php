<?php 
 
include("path_class.php") ;  
$liste_projet_admin_id_sha1 = $_POST["liste_projet_admin_id_sha1"] ; 

 
$apple = new Insertion_Bdd(
      $servername,
      $username,
      $password,
      $dbname
      
      );
      $apple->set_msg_valudation("remove ok ") ;  
      $apple->set_sql('DELETE FROM  `liste_projet_admin` WHERE  `liste_projet_admin_id_sha1` = "'.$liste_projet_admin_id_sha1.'"') ; 
      $apple->execution() ;
     
    


?>