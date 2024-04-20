<?php 

session_start();
header("Access-Control-Allow-Origin: *");
$_SESSION["add_picture"] = $_POST["add_picture"] ; 
$_SESSION["name"] = time() ; 
$_SESSION["add_picturex"]= "on" ; 
?>