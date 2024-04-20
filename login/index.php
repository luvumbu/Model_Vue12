<?php  
    session_start() ;  
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="icon" type="image/x-icon" href="https://pbs.twimg.com/profile_banners/1276013910987026434/1702156600/1500x500">
 
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<link rel="icon" type="image/x-icon" href="/images/favicon.ico">
<script src="home_page.js"></script>
<?php
include("include_class.php");
 

if(isset($_SESSION["information_user_login"])) {  
  include("index_log.php") ; 
}
else {  
  include("home_page.php") ; 
}
?>


 <style>
  input,textarea{
    color: black;   
   
  }
 </style>

</body>
</html>