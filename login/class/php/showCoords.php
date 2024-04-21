<?php 

echo "ok" ; 


include("path_class.php") ; 
$t = time() ;






$showCoords_id_name = $_POST["showCoords_id_name"] ; 
$ip_address = $_POST["ip_address"] ; 
$showCoords_x = $_POST["showCoords_x"] ; 
$showCoords_y = $_POST["showCoords_y"] ; 

 $showCoords_action = $_POST["showCoords_action"] ;
 

  
include("apple_set_msg_valudation.php") ; 
$apple->set_sql("INSERT INTO showCoords (showCoords_id_name,showCoords_ip,showCoords_x,showCoords_y,showCoords_action)
VALUES ('$showCoords_id_name','$ip_address','$showCoords_x','$showCoords_y','$showCoords_action')") ; 
$apple->execution() ;



 
 
?>