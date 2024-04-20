<?php 


include("path_class.php") ; 
$t = time() ;
$_SESSION["liste_projet_admin_id_parent"] =  $_POST["liste_projet_admin_id_parent"];


$information_user_id =   $_SESSION["information_user_id"] ; 
$social_user_id_information_user = $_SESSION["social_user_id_information_user"] ; 
 
$liste_projet_admin_id_parent = $_POST["liste_projet_admin_id_parent"];
$information_user_id_sha1 = $_SESSION["information_user_id_sha1"] ; 
include("apple_set_msg_valudation.php") ; 
$apple->set_sql("INSERT INTO liste_projet_admin (liste_projet_admin_id_sha1,liste_projet_admin_id_parent,information_user_id_sha1,liste_projet_admin_id_sha1_general,information_user_id_sha2)
VALUES ('$t','$liste_projet_admin_id_parent','$information_user_id_sha1','$information_user_id';'$social_user_id_information_user')") ; 
$apple->execution() ;




 
?>