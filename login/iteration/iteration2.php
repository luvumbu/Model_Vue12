<?php 

    $apple_iteration_2 = new Select_datas($servername, $username, $password, $dbname);    
    array_push(
      $apple_iteration_2->row,
      'liste_projet_admin_id',
      'liste_projet_admin_id_sha1',
      'liste_projet_admin_id_parent',
      'liste_projet_admin_id_sha1_general',
      'liste_projet_admin_ip',
      'liste_projet_admin_img',
      'liste_projet_admin_name1',
      'liste_projet_admin_name2',
      'liste_projet_admin_name3',
      'liste_projet_admin_name4',
      'liste_projet_admin_name_tittle1',
      'liste_projet_admin_name_tittle2',
      'liste_projet_admin_name_tittle3',
      'liste_projet_admin_name_tittle4',
      'liste_projet_admin_description1',
      'liste_projet_admin_description2',
      'liste_projet_admin_description3',
      'liste_projet_admin_description4',
      'liste_projet_admin_visibilite1',
      'liste_projet_admin_visibilite2',
      'liste_projet_admin_visibilite3',
      'liste_projet_admin_visibilite4',
      'liste_projet_admin_visite_page',
      'liste_projet_admin_type',
      'information_user_id_sha1',
      'liste_projet_admin_new_file',
      'liste_projet_admin_remove',
      'liste_projet_date',
      'liste_projet_last_update',
      'liste_projet_reg_date',
      'liste_projet_admin_name1_ascii',
      'liste_projet_admin_name2_ascii',
      'liste_projet_admin_display'
    );
    
    $apple_iteration_2->sql = 'SELECT * FROM `liste_projet_admin` WHERE `liste_projet_admin_id_sha1_general`!="remove" AND `liste_projet_admin_id_parent` ="' .$iteration2_x . '" ';
    $apple_iteration_2->execution();
     
    $number_iteration_2 = 0;
    // affectation valeur array 
    // execution et ajout des element dans la nouvelle table   
    $liste_projet_admin_id_iteration_2 = $apple_iteration_2->add_array_element($number_iteration_2);
    $number_iteration_2++;

    $liste_projet_admin_id_sha1_iteration_2 = $apple_iteration_2->add_array_element($number_iteration_2);
    $number_iteration_2++;

    $liste_projet_admin_id_parent_iteration_2 = $apple_iteration_2->add_array_element($number_iteration_2);
    $number_iteration_2++;

    $liste_projet_admin_id_sha1_general_iteration_2 = $apple_iteration_2->add_array_element($number_iteration_2);
    $number_iteration_2++;

    $liste_projet_admin_ip_iteration_2 = $apple_iteration_2->add_array_element($number_iteration_2);
    $number_iteration_2++;

    $liste_projet_admin_img_iteration_2 = $apple_iteration_2->add_array_element($number_iteration_2);
    $number_iteration_2++;

    $liste_projet_admin_name1_iteration_2 = $apple_iteration_2->add_array_element($number_iteration_2);
    $number_iteration_2++;

    $liste_projet_admin_name2_iteration_2 = $apple_iteration_2->add_array_element($number_iteration_2);
    $number_iteration_2++;

    $liste_projet_admin_name3_iteration_2 = $apple_iteration_2->add_array_element($number_iteration_2);
    $number_iteration_2++;

    $liste_projet_admin_name4_iteration_2 = $apple_iteration_2->add_array_element($number_iteration_2);
    $number_iteration_2++;




    $liste_projet_admin_name_tittle1_iteration_2 = $apple_iteration_2->add_array_element($number_iteration_2);
    $number_iteration_2++;

    $liste_projet_admin_name_tittle2_iteration_2 = $apple_iteration_2->add_array_element($number_iteration_2);
    $number_iteration_2++;

    $liste_projet_admin_name_tittle3_iteration_2 = $apple_iteration_2->add_array_element($number_iteration_2);
    $number_iteration_2++;

    $liste_projet_admin_name_tittle4_iteration_2 = $apple_iteration_2->add_array_element($number_iteration_2);
    $number_iteration_2++;

    $liste_projet_admin_description1_iteration_2 = $apple_iteration_2->add_array_element($number_iteration_2);
    $number_iteration_2++;

    $liste_projet_admin_description2_iteration_2 = $apple_iteration_2->add_array_element($number_iteration_2);
    $number_iteration_2++;

    $liste_projet_admin_description3_iteration_2 = $apple_iteration_2->add_array_element($number_iteration_2);
    $number_iteration_2++;

    $liste_projet_admin_description4_iteration_2 = $apple_iteration_2->add_array_element($number_iteration_2);
    $number_iteration_2++;

    $liste_projet_admin_visibilite1_iteration_2 = $apple_iteration_2->add_array_element($number_iteration_2);
    $number_iteration_2++;

    $liste_projet_admin_visibilite2_iteration_2 = $apple_iteration_2->add_array_element($number_iteration_2);
    $number_iteration_2++;


    $liste_projet_admin_visibilite3_iteration_2 = $apple_iteration_2->add_array_element($number_iteration_2);
    $number_iteration_2++;

    $liste_projet_admin_visibilite4_iteration_2 = $apple_iteration_2->add_array_element($number_iteration_2);
    $number_iteration_2++;

    $liste_projet_admin_visite_page_iteration_2 = $apple_iteration_2->add_array_element($number_iteration_2);
    $number_iteration_2++;

    $liste_projet_admin_type_iteration_2 = $apple_iteration_2->add_array_element($number_iteration_2);
    $number_iteration_2++;

    $information_user_id_sha1_iteration_2 = $apple_iteration_2->add_array_element($number_iteration_2);
    $number_iteration_2++;

    $liste_projet_admin_new_file_iteration_2 = $apple_iteration_2->add_array_element($number_iteration_2);
    $number_iteration_2++;

    $liste_projet_admin_remove_iteration_2 = $apple_iteration_2->add_array_element($number_iteration_2);
    $number_iteration_2++;

    $liste_projet_date_iteration_2 = $apple_iteration_2->add_array_element($number_iteration_2);
    $number_iteration_2++;

    $liste_projet_last_update_iteration_2 = $apple_iteration_2->add_array_element($number_iteration_2);
    $number_iteration_2++;

    $liste_projet_reg_date_iteration_2 = $apple_iteration_2->add_array_element($number_iteration_2);
    $number_iteration_2++;




    $liste_projet_admin_name1_ascii_iteration_2 = $apple_iteration_2->add_array_element($number_iteration_2);
    $number_iteration_2++;

    $liste_projet_admin_name2_ascii_iteration_2 = $apple_iteration_2->add_array_element($number_iteration_2);
    $number_iteration_2++;

    $liste_projet_admin_display_iteration_2 = $apple_iteration_2->add_array_element($number_iteration_2);
    $number_iteration_2++;

 



 
 

 
    for($iteration_2x= 0 ; $iteration_2x< count($liste_projet_admin_id_sha1_iteration_2) ; $iteration_2x ++ ) {

      
if($liste_projet_admin_visibilite1_iteration_2[$iteration_2x]==""){
      $mot_d_origine1 = '';
      $ascii_codes = explode(' ', trim($liste_projet_admin_name1_ascii_iteration_2[$iteration_2x]));
      foreach ($ascii_codes as $ascii_code) {
          $mot_d_origine1 .= chr($ascii_code);
      }
  
  
      $mot_d_origine2 = '';
      $ascii_codes = explode(' ', trim($liste_projet_admin_name2_ascii_iteration_2[$iteration_2x]));
      foreach ($ascii_codes as $ascii_code) {
          $mot_d_origine2 .= chr($ascii_code);
      }
     
     
  
  
  
  
  
  
  
      echo '<div id="'.$liste_projet_admin_id_sha1_iteration_2[$iteration_2x].'" class="iteration2_0 iterationimg_all">';
      echo '<h1>' .$mot_d_origine1 . '</h1>';
 
    
      echo '<div class="iteration2_0">' ; 
 
      echo "<br>";
      $apple__ = new Get_anne($liste_projet_reg_date_iteration_2[$iteration_2x]);
      echo $apple__->get_jour();
      echo "/" ; 
      echo $apple__->get_mois();
      echo "/" ; 
      echo $apple__->get_anne();
      echo " ".$apple__->get_heure_complet() ; 
      
      echo '</div>' ; 


      if($liste_projet_admin_new_file_iteration_2[$iteration_2x]!=""){      
        echo '<div class="iteration2_0_img iterationimg_all">';      
          ?>
    <a href="../add_picture/<?php echo $liste_projet_admin_new_file_iteration_2[$iteration_2x]?>">
    <div class="just_img">
    <img src="../add_picture/<?php echo $liste_projet_admin_new_file_iteration_2[$iteration_2x]?>" alt="" srcset="">
    </div>
    </a>
          <?php
        echo '</div>';
    
        }
        echo "<p>" . $mot_d_origine2 . "</p>";

        echo '</div>';
      $iteration3_x=$liste_projet_admin_id_sha1_iteration_2[$iteration_2x] ;      
    include ("iteration/iteration3.php"); 
    }

  }
    
    ?>

 