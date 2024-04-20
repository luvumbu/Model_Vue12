<?php
$filename =        "../model/class/php/connexion.php";
$verif_file_name_ = "../model/class/php/verif_file_name.php";

if (!file_exists($filename)) {
    header('Location:../');
    exit();
}


include("../model/class/php/Select_file.php") ; 
include("../model/class/php/Get_anne.php") ; 
include("../model/class/php/Insertion_Bdd.php") ; 
include("../model/class/php/remove_db.php") ; 
include("../model/class/php/Select_datas.php") ; 
  
include($filename);

$files_include_js = new Select_file("../model/class/js/",".js"); 
//$files_include_php->set_array_name('destroy');

//$files_include_php->set_array_name('Show_table'); 
//$files_include_php->exe() ; 
$files_include_js->set_array_name('Ajax');
$files_include_js->set_array_name('Atribute');
$files_include_js->set_array_name('Information');
echo '<script>';
$files_include_js->exe() ;
echo '</script>'; 


 

// Connexion à la base de données
$connexion = new mysqli($servername, $username, $password,$dbname);

// Vérification de la connexion
if ($connexion->connect_error) {
    die("La connexion à la base de données a échoué : " . $connexion->connect_error);
}

// Nom de la table à vérifier
$nomTable = "liste_projet";

// Requête pour vérifier l'existence de la table
$requete = "SHOW TABLES LIKE '$nomTable'";
$resultat = $connexion->query($requete);

// Vérification du résultat
 
if ($resultat->num_rows==0) {
    unlink($filename);
    header('Location:../');
    exit();  
}   
// Fermeture de la connexion
$connexion->close();
?>
