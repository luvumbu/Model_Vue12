<?php
include ("path_class.php");
$apple = new Select_datas($servername, $username, $password, $dbname);
include ("apple_row.php");
$apple->sql = 'SELECT * FROM `liste_projet_admin` WHERE `liste_projet_admin_id_sha1_general` !="remove" AND `liste_projet_admin_id_parent`="" ';
$apple->execution();
$myJSON = json_encode($apple->list_row);
include ("liste_projet_admin.php");
include ("admin_section_form.php");
?>