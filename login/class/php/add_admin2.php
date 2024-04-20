<?php 
include("path_class.php") ; 
$t = time() ;


$social_user_id_information_user = $_POST["social_user_id_information_user"] ; 

include("apple_set_msg_valudation.php") ; 
$apple->set_sql("INSERT INTO social_user (social_user_id_sha1,social_user_id_information_user)
VALUES ('$t','$social_user_id_information_user')") ; 
$apple->execution() ;




 
?>