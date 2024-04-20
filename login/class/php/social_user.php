


<?php 
include("path_class.php");

$social_user_id_information_user = $_SESSION["social_user_id_information_user"] ;
$apple = new Select_datas($servername,$username,$password,$dbname);

include("apple_row3.php") ;
 
    $apple->sql='SELECT * FROM `social_user` WHERE `social_user_id_information_user`="'.$social_user_id_information_user.'" AND `social_user_name_1` !="remove" ';
    $apple->execution();
    $myJSON = json_encode($apple->list_row); 
include("liste_projet_admin3.php") ; 
 // var_dump($social_user_id) ;

 
 if(count($social_user_id)>4){
    ?>

<style>
    .add_social_user{
        display:none ; 
    }
</style>
<?php 
 }

 for($a = 0 ; $a < count($social_user_id) ; $a ++) {
    ?>
<div class="social_user_id">
                <input  value="<?php echo $social_user_name_1[$a] ; ?>" title="<?php echo $social_user_id_sha1[$a] ; ?>" id="<?php echo $social_user_id_sha1[$a]."_1" ; ?>" onkeyup="social_user_id_key_up(this)" type="text" class="input_1" placeholder="Nom du reseau social">
                <input  value="<?php echo $social_user_name_3[$a] ; ?>" title="<?php echo $social_user_id_sha1[$a] ; ?>" id="<?php echo $social_user_id_sha1[$a]."_2" ; ?>" onkeyup="social_user_id_key_up(this)" type="text" class="input_2" placeholder="source">


                <div class="social_user_id_option">
                        <img width="50"   onclick="social_user_remove(this)" title="<?php echo $social_user_id_sha1[$a];?>" height="50" src="https://img.icons8.com/ios/50/delete-forever--v1.png" alt="delete-forever--v1"/>
                        <img width="50"   onclick="add_picturex(this)" title="<?php echo $social_user_id_sha1[$a];?>" height="50" src="https://img.icons8.com/ios/50/image-file.png" alt="image-file"/>
                <img width="50" src="<?php echo "add_picture/".$social_user_name_2[$a] ?>" alt="" srcset="">
                    </div>
</div>

<?php 

 
 }

 
?>




<style>

    .input_1{
    background-color:rgba(0,150,0,0.1) ; 
    width:200px;
    color:white ; 
   } 
   .input_2{
    background-color:rgba(0,0,150,0.1) ; 
    width:200px;
    color:white ; 
   } 
   .social_user_id_option{
    width:300px;
   }
   .social_user_id_option img {
    border:1px solid black ; 
    background-color:white ;
    margin:10px; 
    padding:4px ;  
    cursor:pointer ; 
    margin-bottom : 40px ; 
    border-radius:5px; 
    cursor:pointer ; 

   }
   
</style>