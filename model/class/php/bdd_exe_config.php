<?php
session_start();
/*
commande envoyé depuis le fichier javascript
// model/class/js/bdd_exe_config.js 
*/
/*
Fichier de configuration appartir du renvoi de requette lorsque le fichier Connexion n'existe pas
*/
header("Access-Control-Allow-Origin: *");
include("bdd_class_exe.php"); // nom de la fonction a ajouter 

/*
// Pour factorise le code on utilise une classe creer sur le meme dossier bdd_class_exe.php
// Puis bdd_class_exe.php 

*/

$servername = "localhost";
$username = $_POST["username"];
$password = $_POST["password"];
$checkBox_checked = $_POST["checkBox_checked"];
$dbname = $_POST["dbname"];
$_SESSION["alpha"] = "Erreur de mot de passe ou identifiant";

// $_POST variable envoyé depuis le fichier javascript
// model/class/js/bdd_exe_config.js 
/*
  //********************************************
  //*informations envoye a l'aide du formulaire*
  //*si le fichier connexion.php n'existe pas  *
  //******************************************** 
*/
// information ajouter dans le fichier de connexion avec son parametre 
$servername = "localhost";
$n = "\n";
$debut = "<?php" . $n;
$fin = "?>" . $n;

// nom du fichier courant
$nom_file = "connexion.php";
$filename_config = "config_folder_verif.php";
// creation de table 
$execution_formulaire_php = new Bdd_class(
  $servername,
  $username,
  $password,
  $dbname
);

//echo $execution_formulaire_php->exe(); 
// Si tout va bien on crée ces tables 

$execution_formulaire_php->set_action("CREATE TABLE information_user (
  information_user_id	 INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  information_user_id_sha1 VARCHAR(200) NOT NULL,
  information_user_ip VARCHAR(200) NOT NULL,
  information_user_login VARCHAR(200) NOT NULL,

  information_user_name_1 VARCHAR(200) NOT NULL,
  information_user_name_2 VARCHAR(200) NOT NULL,
  information_user_name_3 VARCHAR(200) NOT NULL,
  information_user_name_4 VARCHAR(200) NOT NULL,

  information_user_adresse_1 VARCHAR(200) NOT NULL,
  information_user_adresse_2 VARCHAR(200) NOT NULL,
  information_user_adresse_3 VARCHAR(200) NOT NULL,
  information_user_adresse_4 VARCHAR(200) NOT NULL,
  
  information_user_password VARCHAR(200) NOT NULL,   
  information_user_img VARCHAR(200) NOT NULL, 
  information_user_born DATE NOT NULL, 
  information_user_number_1 VARCHAR(20) NOT NULL, 
  information_user_number_2 VARCHAR(20) NOT NULL, 
  information_user_number_3 VARCHAR(20) NOT NULL, 
  information_user_number_4 VARCHAR(20) NOT NULL, 
  information_user_activate VARCHAR(20) NOT NULL, 


  information_user_reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
  )");



$execution_formulaire_php->set_action("CREATE TABLE social_user (
  social_user_id	 INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  social_user_id_sha1 VARCHAR(200) NOT NULL,
  social_user_id_sha1_general VARCHAR(200) NOT NULL,
  social_user_id_information_user VARCHAR(200) NOT NULL,

  social_user_ip VARCHAR(200) NOT NULL,
  social_user_information_user_id_sha1 TEXT(2000) NOT NULL,
  social_user_name_1 TEXT(2000) NOT NULL,
  social_user_name_2 TEXT(2000) NOT NULL,
  social_user_name_3 TEXT(2000) NOT NULL,
  social_user_name_4 TEXT(2000) NOT NULL,
  social_img_1 TEXT(2000) NOT NULL, 
  social_img_2 TEXT(2000) NOT NULL, 
  social_img_3 TEXT(2000) NOT NULL, 
  social_img_4 TEXT(2000) NOT NULL, 
  social_user_reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
  )");





$execution_formulaire_php->set_action("CREATE TABLE formation_user(
  formation_user_id	 INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  formation_user_id_sha1 VARCHAR(200) NOT NULL,
  formation_user_ip VARCHAR(200) NOT NULL,
  formation_user_login VARCHAR(200) NOT NULL,
  formation_user_name VARCHAR(200) NOT NULL,
  formation_user_adresse VARCHAR(200) NOT NULL, 
  formation_user_new_file VARCHAR(200) NOT NULL, 
  formation_user_date DATE NOT NULL,
  formation_user_reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
  )");


$execution_formulaire_php->set_action("CREATE TABLE experience_user(
  experience_user_id	 INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  experience_user_id_sha1 VARCHAR(200) NOT NULL,
  experience_user_ip VARCHAR(200) NOT NULL,
  experience_user_login VARCHAR(200) NOT NULL,
  


  experience_user_name VARCHAR(200) NOT NULL,
  experience_user_adresse VARCHAR(200) NOT NULL,
 
   
  experience_user_new_file VARCHAR(200) NOT NULL, 
  experience_user_date DATE NOT NULL,
  experience_user_reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
  )");






$execution_formulaire_php->set_action("CREATE TABLE liste_projet (

  liste_projet_id	 INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
  liste_projet_id_sha1 VARCHAR(200) NOT NULL,
  liste_projet_id_parent VARCHAR(200) NOT NULL,
  liste_projet_id_sha1_general VARCHAR(200) NOT NULL,
  liste_projet_ip VARCHAR(200) NOT NULL,
  liste_projet_img VARCHAR(200) NOT NULL,

  liste_projet_name0 VARCHAR(200) NOT NULL, 
  liste_projet_name1 VARCHAR(200) NOT NULL, 
  liste_projet_name2 VARCHAR(200) NOT NULL, 
  liste_projet_name3 VARCHAR(200) NOT NULL, 
  liste_projet_name4 VARCHAR(200) NOT NULL, 

  liste_projet_name_tittle1  VARCHAR(200) NOT NULL, 
  liste_projet_name_tittle2  VARCHAR(200) NOT NULL, 
  liste_projet_name_tittle3  VARCHAR(200) NOT NULL, 
  liste_projet_name_tittle4  VARCHAR(200) NOT NULL, 

  liste_projet_description_tittle1 TEXT(2000) NOT NULL,
  liste_projet_description_tittle2 TEXT(2000) NOT NULL,
  liste_projet_description_tittle3 TEXT(2000) NOT NULL,
  liste_projet_description_tittle4 TEXT(2000) NOT NULL,
  liste_projet_description1 TEXT(2000) NOT NULL,
  liste_projet_description2 TEXT(2000) NOT NULL,
  liste_projet_description3 TEXT(2000) NOT NULL,
  liste_projet_description4 TEXT(2000) NOT NULL,
  liste_projet_visibilite1 TEXT(200) NOT NULL,
  liste_projet_visibilite2 TEXT(200) NOT NULL, 
  liste_projet_visibilite3 TEXT(200) NOT NULL, 
  liste_projet_visibilite4 TEXT(200) NOT NULL, 

  liste_projet_margin_0 TEXT(200) NOT NULL, 
  liste_projet_margin_1 TEXT(200) NOT NULL, 
  liste_projet_margin_2 TEXT(200) NOT NULL, 
  liste_projet_margin_3 TEXT(200) NOT NULL, 
  liste_projet_margin_4 TEXT(200) NOT NULL, 

  liste_projet_padding_0 TEXT(200) NOT NULL, 
  liste_projet_padding_1 TEXT(200) NOT NULL, 
  liste_projet_padding_2 TEXT(200) NOT NULL, 
  liste_projet_padding_3 TEXT(200) NOT NULL, 
  liste_projet_padding_4 TEXT(200) NOT NULL, 

  liste_projet_color_1 TEXT(200) NOT NULL, 
  liste_projet_color_2 TEXT(200) NOT NULL, 
  liste_projet_color_3 TEXT(200) NOT NULL, 
  liste_projet_color_4 TEXT(200) NOT NULL, 


  liste_projet_background_1 TEXT(200) NOT NULL, 
  liste_projet_background_2 TEXT(200) NOT NULL, 
  liste_projet_background_3 TEXT(200) NOT NULL, 
  liste_projet_background_4 TEXT(200) NOT NULL, 


  liste_projet_font_family_1 TEXT(200) NOT NULL, 
  liste_projet_font_family_2 TEXT(200) NOT NULL, 
  liste_projet_font_family_3 TEXT(200) NOT NULL, 
  liste_projet_font_family_4 TEXT(200) NOT NULL, 


  liste_projet_font_weight_1 TEXT(200) NOT NULL, 
  liste_projet_font_weight_2 TEXT(200) NOT NULL, 
  liste_projet_font_weight_3 TEXT(200) NOT NULL, 
  liste_projet_font_weight_4 TEXT(200) NOT NULL, 

  liste_projet_text_decoration_1 TEXT(200) NOT NULL, 
  liste_projet_text_decoration_2 TEXT(200) NOT NULL, 
  liste_projet_text_decoration_3 TEXT(200) NOT NULL, 
  liste_projet_text_decoration_4 TEXT(200) NOT NULL, 

  liste_projet_width_1 TEXT(200) NOT NULL, 
  liste_projet_width_2 TEXT(200) NOT NULL, 
  liste_projet_width_3 TEXT(200) NOT NULL, 
  liste_projet_width_4 TEXT(200) NOT NULL, 

  liste_projet_height_1 TEXT(200) NOT NULL, 
  liste_projet_height_2 TEXT(200) NOT NULL, 
  liste_projet_height_3 TEXT(200) NOT NULL, 
  liste_projet_height_4 TEXT(200) NOT NULL, 


  liste_projet_display_1 TEXT(200) NOT NULL, 
  liste_projet_display_2 TEXT(200) NOT NULL, 
  liste_projet_display_3 TEXT(200) NOT NULL, 
  liste_projet_display_4 TEXT(200) NOT NULL,

  liste_projet_float_1 TEXT(200) NOT NULL, 
  liste_projet_float_2 TEXT(200) NOT NULL, 
  liste_projet_float_3 TEXT(200) NOT NULL, 
  liste_projet_float_4 TEXT(200) NOT NULL, 


  liste_projet_position_1 TEXT(200) NOT NULL, 
  liste_projet_position_2 TEXT(200) NOT NULL, 
  liste_projet_position_3 TEXT(200) NOT NULL, 
  liste_projet_position_4 TEXT(200) NOT NULL, 

  liste_projet_z_index_1 TEXT(200) NOT NULL, 
  liste_projet_z_index_2 TEXT(200) NOT NULL, 
  liste_projet_z_index_3 TEXT(200) NOT NULL, 
  liste_projet_z_index_4 TEXT(200) NOT NULL, 


  liste_projet_opacity_1 TEXT(200) NOT NULL, 
  liste_projet_opacity_2 TEXT(200) NOT NULL, 
  liste_projet_opacity_3 TEXT(200) NOT NULL, 
  liste_projet_opacity_4 TEXT(200) NOT NULL, 

  liste_projet_text_transform_1 TEXT(200) NOT NULL, 
  liste_projet_text_transform_2 TEXT(200) NOT NULL, 
  liste_projet_text_transform_3 TEXT(200) NOT NULL, 
  liste_projet_text_transform_4 TEXT(200) NOT NULL, 

 




  liste_projet_visite_page TEXT(200) NOT NULL,
  liste_projet_type VARCHAR(200) NOT NULL,   
  information_user_id_sha1 VARCHAR(200) NOT NULL, 
  liste_projet_new_file  VARCHAR(200) NOT NULL, 
  liste_projet_remove  VARCHAR(200) NOT NULL,  
 
 
 

  liste_projet_date   DATE NOT NULL,
  liste_projet_last_update   DATE NOT NULL,


  liste_projet_reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
  )");


$execution_formulaire_php->set_action("CREATE TABLE liste_projet_admin (

  liste_projet_admin_id	 INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
  liste_projet_admin_id_sha1 VARCHAR(200) NOT NULL,
  liste_projet_admin_id_parent VARCHAR(200) NOT NULL,
  liste_projet_admin_id_sha1_general VARCHAR(200) NOT NULL,
  liste_projet_admin_ip VARCHAR(200) NOT NULL,
  liste_projet_admin_img VARCHAR(200) NOT NULL,
  liste_projet_admin_name1 VARCHAR(200) NOT NULL, 
  liste_projet_admin_name2 VARCHAR(200) NOT NULL, 

  liste_projet_admin_name1_ascii TEXT(2000) NOT NULL, 
  liste_projet_admin_name2_ascii TEXT(2000) NOT NULL, 

  liste_projet_admin_name3 VARCHAR(200) NOT NULL, 
  liste_projet_admin_name4 VARCHAR(200) NOT NULL, 

  liste_projet_admin_name_tittle1  VARCHAR(200) NOT NULL, 
  liste_projet_admin_name_tittle2  VARCHAR(200) NOT NULL, 

  liste_projet_admin_name_tittle1_ascii  TEXT(2000) NOT NULL, 
  liste_projet_admin_name_tittle2_ascii  TEXT(2000) NOT NULL, 


  liste_projet_admin_name_tittle3  VARCHAR(200) NOT NULL, 
  liste_projet_admin_name_tittle4  VARCHAR(200) NOT NULL, 

  liste_projet_admin_description_tittle1 TEXT(2000) NOT NULL,
  liste_projet_admin_description_tittle2 TEXT(2000) NOT NULL,

  liste_projet_admin_description_tittle1_ascii TEXT(2000) NOT NULL,
  liste_projet_admin_description_tittle2_ascii TEXT(2000) NOT NULL,


   
  liste_projet_admin_description_tittle3 TEXT(2000) NOT NULL,
  liste_projet_admin_description_tittle4 TEXT(2000) NOT NULL,
  liste_projet_admin_description1 TEXT(2000) NOT NULL,
  liste_projet_admin_description2 TEXT(2000) NOT NULL,
  liste_projet_admin_description3 TEXT(2000) NOT NULL,
  liste_projet_admin_description4 TEXT(2000) NOT NULL,
  liste_projet_admin_visibilite1 TEXT(200) NOT NULL,
  liste_projet_admin_visibilite2 TEXT(200) NOT NULL, 
  liste_projet_admin_visibilite3 TEXT(200) NOT NULL,    
  liste_projet_admin_visibilite4 TEXT(200) NOT NULL, 

  liste_projet_admin_visite_page TEXT(200) NOT NULL,
  liste_projet_admin_type VARCHAR(200) NOT NULL,   
  information_user_id_sha1 VARCHAR(200) NOT NULL, 
  information_user_id_sha2 VARCHAR(200) NOT NULL, 
  liste_projet_admin_new_file  VARCHAR(200) NOT NULL, 
  liste_projet_admin_remove  VARCHAR(200) NOT NULL,  
 
 
 

  liste_projet_admin_display  VARCHAR(200) NOT NULL,  
  liste_projet_admin_information_user_1 VARCHAR(200) NOT NULL, 
  liste_projet_admin_information_user_2 VARCHAR(200) NOT NULL, 
  liste_projet_admin_information_user_3 VARCHAR(200) NOT NULL, 
  liste_projet_admin_information_user_4 VARCHAR(200) NOT NULL, 

  liste_projet_date   DATE NOT NULL,
  liste_projet_last_update   DATE NOT NULL,






  liste_projet_reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
  )");





$execution_formulaire_php->set_action("CREATE TABLE liste_log1 (
  liste_log_id	 INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,  
  liste_log_ip TEXT(2000) NOT NULL,
  liste_projet_id_sha1 TEXT(2000) NOT NULL,
  liste_projet_id_parent TEXT(2000) NOT NULL,  
  information_user_id_sha1 TEXT(2000) NOT NULL,    
  liste_reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
  )");

$execution_formulaire_php->set_action("CREATE TABLE liste_log2 (
  liste_log_id	 INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,  
  liste_log_ip TEXT(2000) NOT NULL,
  liste_projet_id_sha1 TEXT(2000) NOT NULL,
  liste_projet_id_parent TEXT(2000) NOT NULL,  
  information_user_id_sha1 TEXT(2000) NOT NULL,    
  liste_reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
  )");

$execution_formulaire_php->set_action("CREATE TABLE liste_log3 (
  liste_log_id	 INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,  
  liste_log_ip TEXT(2000) NOT NULL,
  liste_projet_id_sha1 TEXT(2000) NOT NULL,
  liste_projet_id_parent TEXT(2000) NOT NULL,  
  information_user_id_sha1 TEXT(2000) NOT NULL,    
  liste_reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
  )");




 

 





 



 


$execution_formulaire_php->set_action("CREATE TABLE liste_visite_page (
  liste_visite_page_id	 INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
  liste_projet_id_sha1_info VARCHAR(200) NOT NULL,
  liste_visite_page_id_sha1 VARCHAR(200) NOT NULL,
  liste_visite_page_ip VARCHAR(200) NOT NULL,
  liste_visite_page_reg_date_1 VARCHAR(200) NOT NULL,
  liste_visite_page_reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
  )");

 




$execution_formulaire_php->set_action("CREATE TABLE liste_projet_remove_log (
  liste_projet_remove_log_id	 INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
  liste_projet_remove_log_id_sha1 VARCHAR(200) NOT NULL, 
  liste_projet_remove_log_id_sha1_name VARCHAR(200) NOT NULL, 
  liste_projet_remove_log_reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
  )");










$execution_formulaire_php->set_action("CREATE TABLE showCoords (
      showCoords_id	 INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
      showCoords_id_sha1	 VARCHAR(200) NOT NULL,
      showCoords_id_name	 VARCHAR(200) NOT NULL, 
      showCoords_ip VARCHAR(30) NOT NULL,
      showCoords_action VARCHAR(30) NOT NULL,
      showCoords_x VARCHAR(30) NOT NULL,
      showCoords_y VARCHAR(30) NOT NULL,
      showCoords_height VARCHAR(30) NOT NULL,
      showCoords_width VARCHAR(200),

      showCoords_information_user_id_sha1  VARCHAR(200),
      showCoords_liste_projet_id_sha1  VARCHAR(200),
      showCoords_liste_projet_child_sha1  VARCHAR(200),

      showCoords_new_file VARCHAR(200),
      showCoords_reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
      )");








$execution_formulaire_php->set_action("CREATE TABLE liste_signal (
  liste_signal_id	 INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  liste_signal_id_sha1 VARCHAR(200) NOT NULL,   
  liste_signal_ip VARCHAR(200) NOT NULL,
  liste_signal_id_name VARCHAR(200) NOT NULL, 
  liste_signal_description VARCHAR(200) NOT NULL,  
  liste_signal_information_user_id_sha1 VARCHAR(200) NOT NULL,   
  liste_signal_liste_projet_id_sha1 VARCHAR(200) NOT NULL, 
  liste_signal_liste_projet_child_sha1 VARCHAR(200) NOT NULL, 
  liste_signal_new_file VARCHAR(200) NOT NULL,  
  liste_signal_reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
  )");



$execution_formulaire_php->set_action("CREATE TABLE liste_style (
  liste_style_id	 INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  liste_style_id_sha1 VARCHAR(200) NOT NULL,
  liste_style_font_size VARCHAR(200) NOT NULL,

  liste_style_font_family VARCHAR(200) NOT NULL,
  liste_style_color VARCHAR(200) NOT NULL,
  liste_style_1 VARCHAR(200) NOT NULL,
  liste_style_2 VARCHAR(200) NOT NULL,
  liste_style_3 VARCHAR(200) NOT NULL,
  liste_style_4 VARCHAR(200) NOT NULL,
  liste_style_5 VARCHAR(200) NOT NULL,

  liste_style_background_color VARCHAR(200) NOT NULL,
  liste_style_border VARCHAR(200) NOT NULL,
  liste_style_border_left VARCHAR(200) NOT NULL,
  liste_style_border_right VARCHAR(200) NOT NULL,
  liste_style_border_bottom VARCHAR(200) NOT NULL,
  liste_style_border VARCHAR(200) NOT NULL,
  liste_style_border_top VARCHAR(200) NOT NULL,
  liste_style_margin VARCHAR(200) NOT NULL,
  liste_style_margin_left VARCHAR(200) NOT NULL,
  liste_style_margin_right VARCHAR(200) NOT NULL,
  liste_style_margin_top VARCHAR(200) NOT NULL,
  liste_style_margin_bottom VARCHAR(200) NOT NULL,
  liste_style_mode VARCHAR(200) NOT NULL, 
  liste_style_reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
  )");







$execution_formulaire_php->set_action("CREATE TABLE liste_comment (
  liste_comment_id	 INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  liste_comment_id_sha1 VARCHAR(200) NOT NULL, 
  liste_comment_name VARCHAR(200) NOT NULL,
  liste_comment_ip VARCHAR(200) NOT NULL,
  liste_comment_information_user_id_sha1 VARCHAR(200) NOT NULL,
  liste_comment_liste_projet_id_sha1 VARCHAR(200) NOT NULL,
  liste_comment_liste_projet_child_sha1 VARCHAR(200) NOT NULL,
  liste_comment_new_file VARCHAR(200) NOT NULL, 
  liste_comment_nemove VARCHAR(200) NOT NULL, 
  liste_comment_reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
  )");


$execution_formulaire_php->set_action("CREATE TABLE liste_group (
  liste_group_id	 INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  liste_group_id_sha1 VARCHAR(200) NOT NULL, 
  liste_group_name VARCHAR(200) NOT NULL,
  liste_group_ip VARCHAR(200) NOT NULL,
  liste_group_information_user_id_sha1 VARCHAR(200) NOT NULL,
  liste_group_liste_projet_id_sha1 VARCHAR(200) NOT NULL,
  liste_group_liste_projet_child_sha1 VARCHAR(200) NOT NULL,
  liste_group_new_file VARCHAR(200) NOT NULL, 
  liste_group_remove VARCHAR(200) NOT NULL, 
  liste_group_reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
  )");












$execution_formulaire_php->set_action("CREATE TABLE liste_img (
  liste_img_id	 INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
  liste_img_id_sha1 VARCHAR(200) NOT NULL, 
  liste_img_name VARCHAR(200) NOT NULL,
  liste_img_type VARCHAR(200) NOT NULL,
  liste_img_ip VARCHAR(200) NOT NULL,
  liste_img_information_user_id_sha1 VARCHAR(200) NOT NULL,
  liste_img_liste_projet_id_sha1 VARCHAR(200) NOT NULL,
  liste_img_liste_projet_child_sha1 VARCHAR(200) NOT NULL,
  liste_img_new_file VARCHAR(200) NOT NULL, 
  liste_img_remove VARCHAR(200) NOT NULL, 
  liste_img_reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
  )");


$execution_formulaire_php->set_action("CREATE TABLE info_cookie (
  info_cookie_id	 INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
  info_cookie_id_sha1 VARCHAR(200) NOT NULL,
  info_cookie_name VARCHAR(200) NOT NULL,
  info_cookie_ip VARCHAR(200) NOT NULL, 
  info_cookie_action VARCHAR(200) NOT NULL,
  info_cookie_information_user_id_sha1 VARCHAR(200) NOT NULL,
  info_cookie_liste_projet_id_sha1 VARCHAR(200) NOT NULL,
  info_cookie_liste_projet_child_sha1 VARCHAR(200) NOT NULL,
  info_cookie_remove VARCHAR(200) NOT NULL,
  info_cookie_new_file VARCHAR(200) NOT NULL,
  info_cookie_reg_date  TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
  )");





/*
CLONAGE TABLES INFORMATION GENERAL SANS EFFACEMENT 
*/


















































// SI le document connexion d'existe pas le créer 
if ($execution_formulaire_php->get_exe_resul()) {
  // si il ya pas d'erreur  creer le fichier
  $texte = $debut . $n . '$dbname="' . $dbname . '";' . $n . '$username="' . $username . '";' . $n . '$password="' . $password . '";' . $n . '$servername="' . $servername . '";' . $n . $n . $fin;

  // création du fichier
  $f = fopen($nom_file, "x+");
  // écriture
  fputs($f, $texte);
  // fermeture
  fclose($f);


  if ($checkBox_checked == "on") {
    $texte = "on";

    // création du fichier
    $f = fopen($filename_config, "x+");
    // écriture
    fputs($f, $texte);
    // fermeture
    fclose($f);
  } else {
    $texte = "off";

    // création du fichier
    $f = fopen($filename_config, "x+");
    // écriture
    fputs($f, $texte);
    // fermeture
    fclose($f);
  }
}











$_password = sha1($password);





include("Insertion_Bdd.php");

$t = time(date_default_timezone_set('Europe/Paris'));
$tiempo = date("Y-m-d", $t);

$liste_group_name = $_POST["liste_group_name"];
$information_user_info = $_SESSION["information_user_id_sha1"];

$apple = new Insertion_Bdd(
  $servername,
  $username,
  $password,
  $dbname

);


$apple->set_msg_valudation("inserttion ok ");
$apple->set_sql("INSERT INTO information_user (information_user_id_sha1,information_user_password,information_user_login)
                
        VALUES ('$t','$_password','$username')");
$apple->execution();








?>