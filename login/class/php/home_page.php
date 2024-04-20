<?php 
session_start() ;  
include("path_class.php") ; 
$information_user_login = $_POST["information_user_login"] ; 
$information_user_password =sha1($_POST["information_user_password"]) ; 
$_this_title = $_POST["_this_title"];
$apple = new Select_datas($servername,$username,$password,$dbname);
array_push(
    $apple->row, 
    'information_user_id',
    'information_user_id_sha1',
    'information_user_ip', 
    'information_user_login',
    'information_user_name_1',
    'information_user_name_2', 
    'information_user_name_3',
    'information_user_name_4',
    'information_user_adresse_1', 
    'information_user_adresse_2',
    'information_user_adresse_3',
    'information_user_adresse_4', 
    'information_user_password',
    'information_user_img',
    'information_user_born', 
    'information_user_number_1',
    'information_user_number_2',
    'information_user_number_3', 
    'information_user_number_4',
    'information_user_activate',
    'information_user_reg_date' 
    );

switch ($_this_title) {
    case 'Connexion':
        $apple->sql='SELECT * FROM `information_user` WHERE `information_user_login`="'.$information_user_login.'" AND `information_user_password`="'.$information_user_password.'" ';
        $number = 0 ; 

        break;
    
        case 'Inscription':
       echo "test inscription  ok" ; 
        break;
}
$apple->execution();
if(count($apple->list_row)>0){
  $_SESSION["cookie_info_connexion"] = "ON" ; 

  $_SESSION["information_user_login"] = $information_user_login ;
  $_SESSION["information_user_password"] = $information_user_password  ;
  $_SESSION["information_user_id_sha1"] = sha1($information_user_login)  ;
  $_SESSION["information_user_id_sha1x"] =  $information_user_login  ;
  $_SESSION["information_user_id"]= $apple->list_row[0] ; 
  $_SESSION["social_user_id_information_user"]= $apple->list_row[1] ; 

  
}
else {
  $_SESSION["cookie_info_connexion"] = "OFF" ; 
}
?>