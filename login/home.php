<?php 
    session_start() ; 
?>
<!DOCTYPE html>
<html lang="fr">
  <?php
  include ("../model/class/php/connexion.php");
  include ("../model/class/php/Select_datas.php");
  include ("../model/class/php/Insertion_Bdd.php");
  include ("../model/class/php/give_url.php");
  include ("../model/class/php/Get_anne.php");

  
  $apple_iteration_1 = new Select_datas($servername, $username, $password, $dbname);
  array_push(
    $apple_iteration_1->row,
    'liste_projet_admin_id',
    'liste_projet_admin_id_sha1',
    'liste_projet_admin_id_parent',
    'liste_projet_admin_id_sha1_general',
    'liste_projet_admin_ip',
    'liste_projet_admin_img',
    'liste_projet_admin_name1',
    'liste_projet_admin_name2',
    'liste_projet_admin_name1_ascii',
    'liste_projet_admin_name2_ascii',
    'liste_projet_admin_name3',
    'liste_projet_admin_name4',
    'liste_projet_admin_name_tittle1',
    'liste_projet_admin_name_tittle2',
    'liste_projet_admin_name_tittle1_ascii',
    'liste_projet_admin_name_tittle2_ascii',
    'liste_projet_admin_name_tittle3',
    'liste_projet_admin_name_tittle4',
    'liste_projet_admin_new_file',
    'liste_projet_reg_date',
    'liste_projet_admin_visibilite1',
    'information_user_id_sha2'

  );

  $apple_iteration_1->sql = 'SELECT * FROM `liste_projet_admin` WHERE `liste_projet_admin_id_sha1_general`!="remove" AND `liste_projet_admin_id_sha1` ="' . give_url() . '" ';
  $apple_iteration_1->execution();



$nombre = count($apple_iteration_1->row);
  
$information_user_id_sha2_user = $apple_iteration_1->list_row[count($apple_iteration_1->row)-1];










$apple_iteration_00 = new Select_datas($servername, $username, $password, $dbname);
array_push(
  $apple_iteration_00->row,
  'information_user_name_1',
  'information_user_name_2'

);

$apple_iteration_00->sql = 'SELECT * FROM `information_user` WHERE `information_user_id_sha1` ="'.$information_user_id_sha2_user.'"';
$apple_iteration_00->execution();























  if( count(  $apple_iteration_1->list_row)>0){


  $number_iteration_1 = 0;
  // affectation valeur array 
  // execution et ajout des element dans la nouvelle table   
  $liste_projet_admin_id_iteration_1 = $apple_iteration_1->add_array_element($number_iteration_1);
  $number_iteration_1++;

  $liste_projet_admin_id_sha1_iteration_1 = $apple_iteration_1->add_array_element($number_iteration_1);
  $number_iteration_1++;

  $liste_projet_admin_id_parent_iteration_1 = $apple_iteration_1->add_array_element($number_iteration_1);
  $number_iteration_1++;

  $liste_projet_admin_id_sha1_general_iteration_1 = $apple_iteration_1->add_array_element($number_iteration_1);
  $number_iteration_1++;

  $liste_projet_admin_ip_iteration_1 = $apple_iteration_1->add_array_element($number_iteration_1);
  $number_iteration_1++;

  $liste_projet_admin_img_iteration_1 = $apple_iteration_1->add_array_element($number_iteration_1);
  $number_iteration_1++;

  $liste_projet_admin_name1_iteration_1 = $apple_iteration_1->add_array_element($number_iteration_1);
  $number_iteration_1++;

  $liste_projet_admin_name2_iteration_1 = $apple_iteration_1->add_array_element($number_iteration_1);
  $number_iteration_1++;

  $liste_projet_admin_name1_ascii_iteration_1 = $apple_iteration_1->add_array_element($number_iteration_1);
  $number_iteration_1++;

  $liste_projet_admin_name2_ascii_iteration_1 = $apple_iteration_1->add_array_element($number_iteration_1);
  $number_iteration_1++;

  $liste_projet_admin_name3_iteration_1 = $apple_iteration_1->add_array_element($number_iteration_1);
  $number_iteration_1++;

  $liste_projet_admin_name4_iteration_1 = $apple_iteration_1->add_array_element($number_iteration_1);
  $number_iteration_1++;

  $liste_projet_admin_name_tittle1_iteration_1 = $apple_iteration_1->add_array_element($number_iteration_1);
  $number_iteration_1++;

  $liste_projet_admin_name_tittle2_iteration_1 = $apple_iteration_1->add_array_element($number_iteration_1);
  $number_iteration_1++;

  $liste_projet_admin_name_tittle1_ascii_iteration_1 = $apple_iteration_1->add_array_element($number_iteration_1);
  $number_iteration_1++;

  $liste_projet_admin_name_tittle2_ascii_iteration_1 = $apple_iteration_1->add_array_element($number_iteration_1);
  $number_iteration_1++;

  $liste_projet_admin_name_tittle3_iteration_1 = $apple_iteration_1->add_array_element($number_iteration_1);
  $number_iteration_1++;
  $liste_projet_admin_name_tittle4_iteration_1 = $apple_iteration_1->add_array_element($number_iteration_1);
  $number_iteration_1++;
  $liste_projet_admin_new_file_iteration_1 = $apple_iteration_1->add_array_element($number_iteration_1);

  $number_iteration_1++;
  $liste_projet_reg_date_iteration_1 = $apple_iteration_1->add_array_element($number_iteration_1);


  $number_iteration_1++;
  $liste_projet_admin_visibilite1 = $apple_iteration_1->add_array_element($number_iteration_1);
 

 if($liste_projet_admin_visibilite1[0]==""){
  
 
  

?>
<head>
  <title><?php echo $liste_projet_admin_name1_iteration_1[0] ?></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

 
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>


<?php

 


  //  partie pour le menu 

  $apple_iteration_0 = new Select_datas($servername, $username, $password, $dbname);
  array_push(
    $apple_iteration_0->row,
    'liste_projet_admin_id',
    'liste_projet_admin_id_sha1',
    'liste_projet_admin_id_parent',
    'liste_projet_admin_id_sha1_general',
    'liste_projet_admin_ip',
    'liste_projet_admin_img',
    'liste_projet_admin_name1',
    'liste_projet_admin_name2',
    'liste_projet_admin_name1_ascii',
    'liste_projet_admin_name2_ascii',
    'liste_projet_admin_name3',
    'liste_projet_admin_name4',
    'liste_projet_admin_name_tittle1',
    'liste_projet_admin_name_tittle2',
    'liste_projet_admin_name_tittle1_ascii',
    'liste_projet_admin_name_tittle2_ascii',
    'liste_projet_admin_name_tittle3',
    'liste_projet_admin_name_tittle4',
    'liste_projet_admin_new_file',
    'liste_projet_admin_visibilite1'

  );

  $apple_iteration_0->sql = 'SELECT * FROM `liste_projet_admin` WHERE `liste_projet_admin_id_sha1_general`!="remove" AND `liste_projet_admin_id_parent` ="' . $liste_projet_admin_id_sha1_iteration_1[0]. '" ';
  $apple_iteration_0->execution();

  $number_iteration_0 = 0;
  // affectation valeur array 
  // execution et ajout des element dans la nouvelle table   
  $liste_projet_admin_id_iteration_0 = $apple_iteration_0->add_array_element($number_iteration_0);
  $number_iteration_0++;

  $liste_projet_admin_id_sha1_iteration_0 = $apple_iteration_0->add_array_element($number_iteration_0);
  $number_iteration_0++;

  $liste_projet_admin_id_parent_iteration_0 = $apple_iteration_0->add_array_element($number_iteration_0);
  $number_iteration_0++;

  $liste_projet_admin_id_sha1_general_iteration_0 = $apple_iteration_0->add_array_element($number_iteration_0);
  $number_iteration_0++;

  $liste_projet_admin_ip_iteration_0 = $apple_iteration_0->add_array_element($number_iteration_0);
  $number_iteration_0++;

  $liste_projet_admin_img_iteration_0 = $apple_iteration_0->add_array_element($number_iteration_0);
  $number_iteration_0++;

  $liste_projet_admin_name1_iteration_0 = $apple_iteration_0->add_array_element($number_iteration_0);
  $number_iteration_0++;

  $liste_projet_admin_name2_iteration_0 = $apple_iteration_0->add_array_element($number_iteration_0);
  $number_iteration_0++;

  $liste_projet_admin_name1_ascii_iteration_0 = $apple_iteration_0->add_array_element($number_iteration_0);
  $number_iteration_0++;

  $liste_projet_admin_name2_ascii_iteration_0 = $apple_iteration_0->add_array_element($number_iteration_0);
  $number_iteration_0++;

  $liste_projet_admin_name3_iteration_0 = $apple_iteration_0->add_array_element($number_iteration_0);
  $number_iteration_0++;

  $liste_projet_admin_name4_iteration_0 = $apple_iteration_0->add_array_element($number_iteration_0);
  $number_iteration_0++;

  $liste_projet_admin_name_tittle1_iteration_0 = $apple_iteration_0->add_array_element($number_iteration_0);
  $number_iteration_0++;

  $liste_projet_admin_name_tittle2_iteration_0 = $apple_iteration_0->add_array_element($number_iteration_0);
  $number_iteration_0++;

  $liste_projet_admin_name_tittle1_ascii_iteration_0 = $apple_iteration_0->add_array_element($number_iteration_0);
  $number_iteration_0++;

  $liste_projet_admin_name_tittle2_ascii_iteration_0 = $apple_iteration_0->add_array_element($number_iteration_0);
  $number_iteration_0++;

  $liste_projet_admin_name_tittle3_iteration_0 = $apple_iteration_0->add_array_element($number_iteration_0);
  $number_iteration_0++;
  $liste_projet_admin_name_tittle4_iteration_0 = $apple_iteration_0->add_array_element($number_iteration_0);
  $number_iteration_0++;
  $liste_projet_admin_new_file_iteration_0 = $apple_iteration_0->add_array_element($number_iteration_0);

  $number_iteration_0++;

  $liste_projet_admin_visibilite1_0 = $apple_iteration_0->add_array_element($number_iteration_0);




  


?>

<nav class="navbar navbar-dark bg-dark fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><?php echo $liste_projet_admin_name1_iteration_1[0] ?></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
      <div class="offcanvas-header">
       <!-- <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">Dark offcanvas</h5> -->
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">

        <?php
 
 
 
for($x=0;$x<count($liste_projet_admin_name1_iteration_0);$x++){


  if($liste_projet_admin_visibilite1_0[$x]==""){
 

echo '<li class="nav-item">';
echo '<a class="nav-link active" aria-current="page" href="#'.$liste_projet_admin_id_sha1_iteration_0[$x].'">'.$liste_projet_admin_name1_iteration_0[$x].'</a>';
echo ' </li>';
 
  }

 

}
 
        ?>
 
       <!-- <form class="d-flex mt-3" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-success" type="submit">Search</button>
        </form>-->
      </div>
    </div>
  </div>
</nav>
<?php

 
 
  //  partie pour le menu 
//var_dump($liste_projet_admin_name1_iteration_0); 
echo "<div class='iterationimg_all_0'> ";
echo "<div style='margin-bottom:150px'></div>";
  for ($iteration_1x = 0; $iteration_1x < count($liste_projet_admin_id_sha1_iteration_1); $iteration_1x++) {



  

  
    $mot_d_origine1 = '';
    $ascii_codes = explode(' ', trim($liste_projet_admin_name1_ascii_iteration_1[$iteration_1x]));
    foreach ($ascii_codes as $ascii_code) {
      $mot_d_origine1 .= chr($ascii_code);
    }
    $mot_d_origine2 = '';
    $ascii_codes = explode(' ', trim($liste_projet_admin_name2_ascii_iteration_1[$iteration_1x]));
    foreach ($ascii_codes as $ascii_code) {
      $mot_d_origine2 .= chr($ascii_code);
    }
    echo '<div class="iteration1_0 iterationimg_all">';
    echo "<h1>" . $mot_d_origine1 . "</h1>";
 
    



    echo '<div class="iteration2_0">' ; 
 
echo "<br>";
$apple__ = new Get_anne($liste_projet_reg_date_iteration_1[0]);
echo $apple__->get_jour();
echo "/" ; 
echo $apple__->get_mois();
echo "/" ; 
echo $apple__->get_anne();
echo " ".$apple__->get_heure_complet() ; 





echo '<div class="iteration2_0_x">' ; 


echo "@".$apple_iteration_00->list_row[0]." ";

echo $apple_iteration_00->list_row[1];
echo '</div>' ;

echo '</div>' ; 
     



    echo '</div>';


 




    if ($liste_projet_admin_new_file_iteration_1[$iteration_1x] != "") {


   
      echo '<div class="iteration1_0_img iterationimg_all">';
      ?>
      <a href="../add_picture/<?php echo $liste_projet_admin_new_file_iteration_1[$iteration_1x] ?>">

      <div class="just_img">
         <img    class="src_img_1" src="../add_picture/<?php echo $liste_projet_admin_new_file_iteration_1[$iteration_1x] ?>" alt="" srcset="">
      </div>
       
      </a>
      <?php




/*

get_anne()
get_jour()

*/

    }
    echo "<p>" . $mot_d_origine2 . "</p>";
    $iteration2_x = $liste_projet_admin_id_sha1_iteration_1[$iteration_1x];
     

    include ("iteration/iteration2.php");
    
  }


echo "</div> ";
  ?>

</body>
</html>
<style>

  .just_img{
  
    width: 60%;
    margin: auto;
  }
  .iterationimg_all img {
  width:100%;
  margin-top:45px ; 
  margin-bottom:45px ; 
  border-radius:5px ; 
  margin:auto ; 
  text-align: center;

  }
  .iterationimg_all{
 width:80%;
 margin:auto ; 

  }
  .iteration2_0{
    font-weight: bold;
    padding : 25px ; 
   
  }

  .iterationimg_all p {
   margin-bottom:100px;  
   color:rgba(0,0,0,0.6); 
   margin-top:100px;
  }
  .iterationimg_all p, .iterationimg_all h1 {
 
  }
  .iterationimg_all h1 {
 border-bottom:8px solid black ; 
 font-size:2.5em ; 

}


.iteration2_0_x{
  color: rgba(0,0,0,0.3);
}



  @media screen and (max-width: 1200px) {
    .iterationimg_all{
  
      width:95%;
 margin:auto ; 
   
  }
}


@font-face {
  font-family: "CaviarDreams";
  src: url("../src/font/CaviarDreams.ttf");
}
@font-face {
  font-family: "CaviarDreams_Bold";
  src: url("../src/font/CaviarDreams_Bold.ttf");
}

@font-face {
  font-family: "Louis George Cafe";
  src: url("../src/font/Louis George Cafe.ttf");
}


h1{
  
  


}
body{
  
}
.iterationimg_all_0{
 
}
.src_img_1{
 width: 60%;
 margin: auto;
}
</style>

 




<?php

}

else{
  ?>
<img  src="https://img.freepik.com/vecteurs-libre/oops-erreur-404-illustration-concept-robot-casse_114360-5529.jpg" alt="">


<style>
  img{
    width: 50%; 
    margin:auto ;  
  }
</style>
  <?php
}

}
?>
<?php 





include("social_src.php") ;
?>
<style>
  .home{
    margin:100px; 
  }
  p{
    text-align:justify ; 
  }
</style>

