<?php 

include("path_class.php") ; 
echo "oook" ; 

echo $_SESSION["add_picture"] ; 

$file_path =  $_SESSION["file_path"] ; 
$social_user_id_sha1 = $_SESSION["add_picture"] ; 
$apple = new Insertion_Bdd(
    $servername,
    $username,
    $password,
    $dbname
    
    );
    $apple->set_msg_valudation("up ok") ;   

    $apple->set_sql('UPDATE `social_user` SET `social_user_name_2` = "'.$file_path.'"   WHERE `social_user_id_sha1` = "'.$social_user_id_sha1.'"') ; 

//      $apple->set_sql('UPDATE `liste_projet_admin` SET `liste_projet_admin_name1_ascii` = "'.$liste_projet_admin_name1_ascii.'",`liste_projet_admin_name1` = "'.$liste_projet_admin_name1.'",                             `liste_projet_admin_name2` = "'.$liste_projet_admin_name2 .'" , `liste_projet_admin_name2_ascii` = "'.$liste_projet_admin_name2_ascii .'"    WHERE `liste_projet_admin_id_sha1` = "'.$liste_projet_admin_id_sha1.'"') ; 
     $apple->execution() ;

  
  
  
  
   /* 

 
// Chemin vers l'image originale
$chemin_image_originale ='uploads/' . $_SESSION["information_user_id_sha1"].'/'.$_SESSION["name"].$total;

// Largeur maximale et hauteur maximale souhaitées
$max_largeur = 200;
$max_hauteur = 200;

// Récupération des dimensions de l'image originale
$dimensions = getimagesize($chemin_image_originale);
$largeur_originale = $dimensions[0];
$hauteur_originale = $dimensions[1];

// Calcul des nouvelles dimensions en conservant les proportions
if ($largeur_originale > $hauteur_originale) {
    // Si l'image est plus large que haute
    $nouvelle_largeur = $max_largeur;
    $nouvelle_hauteur = intval($hauteur_originale * ($max_largeur / $largeur_originale));
} else {
    // Si l'image est plus haute que large ou carrée
    $nouvelle_hauteur = $max_hauteur;
    $nouvelle_largeur = intval($largeur_originale * ($max_hauteur / $hauteur_originale));
}

// Création de l'image originale en fonction de son type
$type = $dimensions[2];
if ($type == IMAGETYPE_JPEG) {
    $image_originale = imagecreatefromjpeg($chemin_image_originale);
} elseif ($type == IMAGETYPE_PNG) {
    $image_originale = imagecreatefrompng($chemin_image_originale);
} elseif ($type == IMAGETYPE_GIF) {
    $image_originale = imagecreatefromgif($chemin_image_originale);
} else {
    // Type d'image non supporté
    die('Type d\'image non supporté');
}

// Création d'une nouvelle image avec les dimensions calculées
$nouvelle_image = imagecreatetruecolor($nouvelle_largeur, $nouvelle_hauteur);

// Redimensionnement de l'image originale vers la nouvelle image
imagecopyresampled($nouvelle_image, $image_originale, 0, 0, 0, 0, $nouvelle_largeur, $nouvelle_hauteur, $largeur_originale, $hauteur_originale);

// Sauvegarde de la nouvelle image
imagejpeg($nouvelle_image,'uploads/' . $_SESSION["information_user_id_sha1"].'/'.$_SESSION["name"]."_2".$total);

// Libération de la mémoire
imagedestroy($image_originale);
imagedestroy($nouvelle_image);
*/
  ?>


<script>
  //  window.location.replace("../../../index.php");
</script>
 