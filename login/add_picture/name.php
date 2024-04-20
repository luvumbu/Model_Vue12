<?php

 include("path_class.php"); 
 $add_picture = $_SESSION["add_picture"] ;
 


     
 

  $filename = 'uploads/'.$_SESSION["information_user_id_sha1"].'/index.txt';

if (file_exists($filename)) {
    echo "Le fichier $filename existe.";
} else {
    
    mkdir ('uploads/'.$_SESSION["information_user_id_sha1"], 0777);

    $nom_file = $filename;
    $texte = $_SESSION["information_user_id_sha1"];

    // création du fichier
    $f = fopen($nom_file, "x+");
    // écriture
    fputs($f, $texte );
    // fermeture
    fclose($f);

}



 



 
?>