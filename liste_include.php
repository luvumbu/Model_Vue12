<?php 
include("model/class/php/Select_file.php");
// 1 donner le chemin du fichier 
// 2 Donner son extension 
// 3 ajouter a l'aide de set array les nom des fichier a ajouter
// 4 faire l'execution du code pour avec exe()
if (file_exists("model/class/php/connexion.php")) {
    include("model/class/php/connexion.php");
    include("model/class/php/destroy.php");
    include("model/class/php/Get_anne.php");
    include("model/class/php/Insertion_Bdd.php");
    include("model/class/php/remove_db.php");
    include("model/class/php/Select_datas.php");     
    for($a = 0 ; $a<count($apple->array_name);$a++) {  
        include($apple->src_name.$apple->array_name[$a].$apple->extension) ; 
    } 
 // Create connection
 $conn = new mysqli($servername, $username, $password); 
 // Check connection
 if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
 }
 header('Location:login/index.php');
 exit();
     
 }
 else {
 
  $apple = new Select_file("model/class/js/",".js");

  $apple->set_array_name('Ajax');
  $apple->set_array_name('Atribute');
  $apple->set_array_name('Information');


  echo "<script>" ; 
  for($a = 0 ; $a<count($apple->array_name);$a++) {  
    include($apple->src_name.$apple->array_name[$a].$apple->extension) ; 
 }
 echo "</script>" ; 


   
 }
 
 ?>