<?php 
session_start() ; 
switch ($_SESSION["cookie_info_connexion"]) {
    case 'OFF':
     echo '<a class="alert alert-danger" role="alert">
     connexion échouée
   </a>';
        break;
        case 'ON':
            echo '<a class="alert alert-success" role="alert">
            connexion réussi
          </a>';       
               break;
     default:
        # code...
        break;
}
?>