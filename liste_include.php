<?php

// Inclure la classe Select_file
include("model/class/php/Select_file.php");

// Vérifier si le fichier de connexion existe
if (file_exists("model/class/php/connexion.php")) {
    
    // Inclure les fichiers de connexion et de destruction de la connexion
    include("model/class/php/connexion.php");
    include("model/class/php/destroy.php");
    
    // Inclure d'autres fichiers nécessaires
    include("model/class/php/Get_anne.php");
    include("model/class/php/Insertion_Bdd.php");
    include("model/class/php/remove_db.php");
    include("model/class/php/Select_datas.php");

    // Créer une instance de mysqli pour la connexion à la base de données
    $conn = new mysqli($servername, $username, $password);

    // Vérifier la connexion
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Rediriger vers la page de connexion
    header('Location: login/index.php');
    exit();
} else {
    // Si le fichier de connexion n'existe pas

    // Créer une instance de Select_file pour les fichiers JavaScript
    $apple = new Select_file("model/class/js/", ".js");

    // Ajouter les noms des fichiers à inclure
    $apple->set_array_name('Ajax');
    $apple->set_array_name('Atribute');
    $apple->set_array_name('Information');

    // Inclure les fichiers JavaScript
    echo "<script>";
    for ($a = 0; $a < count($apple->array_name); $a++) {
        include($apple->src_name . $apple->array_name[$a] . $apple->extension);
    }
    echo "</script>";
}

?>
