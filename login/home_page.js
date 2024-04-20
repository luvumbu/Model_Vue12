 
  var information_user_btn_info = 0;
  function information_user_btn(_this) {
  const information_user_login = document.getElementById("information_user_login").value ; 
  const information_user_password = document.getElementById("information_user_password").value ; 
 
    const ok = new Information("class/php/home_page.php"); // création de la classe 
 ok.add("information_user_login", information_user_login); // ajout de l'information pour lenvoi 
   
switch (_this.title) {



  case "Connexion":


 ok.add("information_user_password", information_user_password); // ajout de l'information pour lenvoi 

 const myTimeout = setTimeout(cookie_info_id, 250);

function cookie_info_id() {
  Ajax("cookie_info_id","class/php/cookie_info.php");
 

}

 
 
    break;

    case "Inscription":
      
console.log(_this.title);
 
    break;

 
}



ok.add("_this_title", _this.title); // ajout d'une deuxieme information denvoi  
  console.log(ok.info()); // demande l'information dans le tableau
  ok.push(); // envoie l'information au code pkp 

 const myTimeout = setTimeout(information_user_btn, 300);

  function information_user_btn() {
  location.reload() ; 
  }


  } 

var information_user_btn2_ = false ; 
  function information_user_btn2(_this){
if(!information_user_btn2_){
document.getElementById("information_user_password").style.display="none" ; 
document.getElementById("btn_connexion").style.display="none" ; 
 
information_user_btn2_ = true ; 
}
else{
  console.log("x") ; 
  const information_user_login = document.getElementById("information_user_login").value ;  
    const ok = new Information("class/php/home_page2.php"); // création de la classe 
    ok.add("information_user_login", information_user_login); // ajout de l'information pour lenvoi    
     ok.add("_this_title", _this.title); // ajout d'une deuxieme information denvoi  
     console.log(ok.info()); // demande l'information dans le tableau
     ok.push(); // envoie l'information au code pkp 

     const myTimeout = setTimeout(information_user_btn, 300);

     function information_user_btn() {
          location.reload() ; 
     }
}
 

   

  }


  function add_picture(_this){
 


    const ok = new Information("class/php/cookie/add_picture.php"); // création de la classe 
 
      
   
     ok.add("add_picture", _this.title); // ajout d'une deuxieme information denvoi  
     console.log(ok.info()); // demande l'information dans le tableau
     ok.push(); // envoie l'information au code pkp 



     const myTimeout = setTimeout(add_picture, 250);

function add_picture() {
  window.location.replace("add_picture/index.php");
}

  }




  function add_picturex(_this){
 


    const ok = new Information("class/php/cookie/add_picturex.php"); // création de la classe 
 
      
   
     ok.add("add_picture", _this.title); // ajout d'une deuxieme information denvoi  
     console.log(ok.info()); // demande l'information dans le tableau
     ok.push(); // envoie l'information au code pkp 



     const myTimeout = setTimeout(add_picture, 250);

          function add_picture() {
            window.location.replace("add_picture/index.php");
          }

  }
