
<?php




$social_user_id_information_user = $apple_iteration_1->list_row[21];

$apple_iteration_1 = new Select_datas($servername, $username, $password, $dbname);
array_push(
  $apple_iteration_1->row,
  'social_user_name_1',
  'social_user_name_2',
  'social_user_name_3',
  'social_user_reg_date'

);

$apple_iteration_1->sql = 'SELECT * FROM `social_user` WHERE `social_user_id_information_user`="'.$social_user_id_information_user.'" ';
$apple_iteration_1->execution();

 

 

 




$number_iteration_0 = 0;
// affectation valeur array 
// execution et ajout des element dans la nouvelle table   
$social_user_id_information_user_social_user_name_1 = $apple_iteration_1->add_array_element($number_iteration_0);
$number_iteration_0++;

$social_user_id_information_user_social_user_name_2 = $apple_iteration_1->add_array_element($number_iteration_0);
$number_iteration_0++;

$social_user_id_information_user_social_user_name_3 = $apple_iteration_1->add_array_element($number_iteration_0);
$number_iteration_0++;

$social_user_id_information_user_social_user_name_4 = $apple_iteration_1->add_array_element($number_iteration_0);
$number_iteration_0++;

 



 

 

echo "<div class='all_social'>" ; 
for($a = 0 ; $a <count($social_user_id_information_user_social_user_name_1) ; $a ++) {


  if($social_user_id_information_user_social_user_name_1[$a]!="remove"){

  
?>
<div class="social">


<a href="<?php echo $social_user_id_information_user_social_user_name_3[$a] ?> ">
  <img style="width:50px" src="<?php echo "../add_picture/".$social_user_id_information_user_social_user_name_2[$a] ; ?> " alt="" srcset="">
</a>
  

  <p>
    <?php 
    echo $social_user_id_information_user_social_user_name_1[$a] ;
    ?>
  </p>

</div>

<?php 
}
}
echo "</div>" ; 
?>



<style>
  .all_social{
    display:flex ; 
    justify-content:space-around ; 
    width:90%; 
    margin:auto ; 
    text-align:center ; 
    flex-wrap: wrap;
  }
  .social img:hover{
    cursor:pointer ; 

  }
  .social img{
   
    border-radius:15px;

  }
  .social p {
    text-align:center ; 
 font-family : bold ; 
    padding:5px; 

    

  }
</style>

 


<a href="../index.php">
<img width="60" height="60" src="https://img.icons8.com/ios/60/home--v1.png" alt="home--v1" class="home"/>
</a>


 