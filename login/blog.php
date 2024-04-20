<?php 
include("path_class.php") ; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Ndenga Luvumbu</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container-fluid p-5 text-center">
  <h1>Ndenga Luvumbu</h1>
  <p>Liste de projet</p> 
</div>
  
 
 
 
<?php 
$apple2 = new Select_datas($servername,$username,$password,$dbname);
array_push(
  $apple2->row,

  'liste_projet_admin_id_sha1',
  'liste_projet_admin_name1',
  'liste_projet_admin_name2'  
  );

 
  $apple2->sql='SELECT * FROM `liste_projet_admin` WHERE  `liste_projet_admin_id_parent`="" AND `liste_projet_admin_id_sha1_general`!="remove"';
  $apple2->execution();
  $myJSON = json_encode($apple2->list_row); 
    $number = 0 ; 
   // affectation valeur array 
   // execution et ajout des element dans la nouvelle table 
   
   $liste_projet_admin_id_sha1=$apple2->add_array_element($number);
   $number ++ ; 
   $liste_projet_admin_name1=$apple2->add_array_element($number);
   $number ++ ; 
   $liste_projet_admin_name2=$apple2->add_array_element($number);
   $number ++ ;  



for($a= 0; $a<count($liste_projet_admin_id_sha1) ; $a ++) {
?>
<div class="container p-5 my-5 border">
  <h1><?php echo  $liste_projet_admin_name1[$a] ?> </h1>
  <p><?php echo  $liste_projet_admin_name1[$a] ?></p>

<a href="<?php echo "home.php/".$liste_projet_admin_id_sha1[$a] ?>">
<div   class="btn btn-primary">Lien du projet</div>
</a>

</div>
<?php
} 
?>

 


 
 

 
</body>
</html>
