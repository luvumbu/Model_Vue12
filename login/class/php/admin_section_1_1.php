<?php
include ("path_class.php");
$apple = new Select_datas($servername, $username, $password, $dbname);
include ("apple_row.php");
$apple->sql = 'SELECT * FROM `liste_projet_admin` WHERE 1  ';
$apple->execution();
$myJSON = json_encode($apple->list_row);
include ("liste_projet_admin.php");
include ("admin_section_form_1.php");

 
?>