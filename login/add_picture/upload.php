<?php
 include("path_class.php");
function decode_chunk($data) {
    $data = explode(';base64,', $data);

    if (!is_array($data) || !isset($data[1])) {
        return false;
    }

    $data = base64_decode($data[1]);
    if (!$data) {
        return false;
    }
    return $data;
}
// $file_path: fichier cible: garde le même nom de fichier, dans le dossier uploads



$test =$_POST['file'] ;  
$total = "" ; 
for($i=strlen($test)-1;$i>0;$i--){
  //  echo $test[$i].'<br/>' ; 
$total = $total.$test[$i] ; 
    if($test[$i]=="."){
        break ; 
    }
}
$total = strrev($total) ; 
$file_path = 'uploads/' . $_SESSION["information_user_id_sha1"].'/'.$_SESSION["name"].$total;

$_SESSION["file_path"] = $file_path ; 
$file_data = decode_chunk($_POST['file_data']);
if (false === $file_data) {
    echo "error";
}

/* on ajoute le segment de données qu'on vient de recevoir 
 * au fichier qu'on est en train de ré-assembler: */
file_put_contents($file_path, $file_data, FILE_APPEND);

// nécessaire pour que JavaScript considère que la requête s'est bien passée:
echo json_encode([]); 

 





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
 


 