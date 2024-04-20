<?php 
$time = time() ; 
if($REMOTE_ADDR=="127.0.0.1" || $REMOTE_ADDR =="::1"){
    $REMOTE_ADDR_info = true ;
}
else{
    $REMOTE_ADDR_info = false ;
}
$apple = new Select_datas($servername,$username,$password,$dbname);
  array_push(
    $apple->row,
    'information_user_id' 
    ); 
    $apple->sql='SELECT * FROM `information_user` WHERE `information_user_login`="'.$information_user_login.'" ';
    $apple->execution();
    $myJSON = json_encode($apple->list_row); 
echo count($apple->list_row) ; 
if(!count($apple->list_row)>0){ 

    if (count($apple->list_row)==0 || $REMOTE_ADDR_info==true){
   

        $apple = new Insertion_Bdd(
            $servername,
            $username,
            $password,
            $dbname            
            );          
            $apple->set_msg_valudation("inserttion ok ") ;  
            $apple->set_sql("INSERT INTO information_user (information_user_login,information_user_id_sha1)                    
            VALUES ('$information_user_login','$time')") ; 
            $apple->execution() ;
        }
} 
$_SESSION["information_user_id_sha1"] = "1710677585"; 
?>