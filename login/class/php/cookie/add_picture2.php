<?php 

include("path_class.php") ; 
$file_path =  $_SESSION["file_path"] ; 
$add_picture = $_SESSION["add_picture"] ; 
$apple = new Insertion_Bdd(
    $servername,
    $username,
    $password,
    $dbname
    
    );
    $apple->set_msg_valudation("up ok") ;   

    $apple->set_sql('UPDATE `liste_projet_admin` SET `liste_projet_admin_new_file` = "'.$file_path.'"   WHERE `liste_projet_admin_id_sha1` = "'.$add_picture.'"') ; 

//      $apple->set_sql('UPDATE `liste_projet_admin` SET `liste_projet_admin_name1_ascii` = "'.$liste_projet_admin_name1_ascii.'",`liste_projet_admin_name1` = "'.$liste_projet_admin_name1.'",                             `liste_projet_admin_name2` = "'.$liste_projet_admin_name2 .'" , `liste_projet_admin_name2_ascii` = "'.$liste_projet_admin_name2_ascii .'"    WHERE `liste_projet_admin_id_sha1` = "'.$liste_projet_admin_id_sha1.'"') ; 
     $apple->execution() ;
 ?>
<script>
    window.location.replace("../../../index.php");
</script>