<?php 


$apple_selection_1 = new Select_datas($servername,$username,$password,$dbname);

array_push(
  $apple_selection_1->row,

  'info_cookie_id' 

  );


  $apple_selection_1->sql='SELECT * FROM `info_cookie` WHERE `info_cookie_id_sha1`="'.$give_url.'" ';
  $apple_selection_1->execution();
  $myJSON = json_encode( $apple_selection_1->list_row);     



  $number = 0 ; 
  $info_cookie_id__=$apple_selection_1->add_array_element($number);
  $number ++ ; 

echo count(  $info_cookie_id__) ; 

?>