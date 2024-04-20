const image_1 ="https://img.icons8.com/ios/60/invisible.png" ;  
const image_2 ="https://img.icons8.com/windows/60/invisible.png" ; 


   function add_admin1(_this) {
    _this.style.display="none";
    const ok = new Information("class/php/add_admin1.php"); // création de la classe 
    ok.add("liste_projet_admin_id_parent", _this.title); // ajout d'une deuxieme information denvoi  
    console.log(ok.info()); // demande l'information dans le tableau
    ok.push(); // envoie l'information au code pkp 
    const myTimeout = setTimeout(liste_projet_admin_add, 250);
    function liste_projet_admin_add() {
      Ajax("admin_section_1", "class/php/admin_section_2.php");
    _this.style.display="block";

    }
  }
  function liste_projet_admin_onkeyup(_this) {
    const liste_projet_admin_name1 = document.getElementById("a_" + _this.title).value;
    const liste_projet_admin_name2 = document.getElementById("b_" + _this.title).value;
    const ok = new Information("class/php/update/liste_projet_admin_onkeyup.php"); // création de la classe 
    ok.add("liste_projet_admin_name1", liste_projet_admin_name1); // ajout d'une deuxieme information denvoi  
    ok.add("liste_projet_admin_name2", liste_projet_admin_name2); // ajout d'une deuxieme information denvoi  
    ok.add("liste_projet_admin_id_sha1", _this.title); // ajout d'une deuxieme information denvoi  
    console.log(ok.info()); // demande l'information dans le tableau
    ok.push(); // envoie l'information au code pkp 
  }
  function liste_projet_admin_add2(_this) {
    _this.style.display="none";

    const ok = new Information("class/php/cookie/liste_projet_admin_add2.php"); // création de la classe 
    ok.add("liste_projet_admin_id_parent", _this.title); // ajout d'une deuxieme information denvoi  
    console.log(ok.info()); // demande l'information dans le tableau
    ok.push(); // envoie l'information au code pkp 
    const myTimeout = setTimeout(liste_projet_admin_add2, 250);
    function liste_projet_admin_add2() {
      Ajax("admin_section_1", "all_element.php");
    _this.style.display="block";

    }
  }

  function liste_projet_admin_show(_this) {
    _this.style.display="none";

    const ok = new Information("class/php/cookie/liste_projet_admin_show.php"); // création de la classe 
    ok.add("liste_projet_admin_id_parent", _this.title); // ajout d'une deuxieme information denvoi  
    console.log(ok.info()); // demande l'information dans le tableau
    ok.push(); // envoie l'information au code pkp 
    const myTimeout = setTimeout(liste_projet_admin_show, 250);
    function liste_projet_admin_show() {
      Ajax("admin_section_1", "class/php/admin_section_2.php");
    _this.style.display="block";

    const info_1 = setTimeout(info_1_, 250);
    }


    function info_1_(){
 
       
    }
  }
  function liste_projet_admin_remove(_this) {
    _this.style.display="none";

    const ok = new Information("class/php/cookie/liste_projet_admin_remove.php"); // création de la classe 
    ok.add("liste_projet_admin_id_sha1", _this.title); // ajout d'une deuxieme information denvoi 
    console.log(ok.info()); // demande l'information dans le tableau
    ok.push(); // envoie l'information au code pkp 
    const myTimeout = setTimeout(liste_projet_admin_remove, 250);
    function liste_projet_admin_remove() {
      Ajax("admin_section_1", "class/php/admin_section_1.php");
     }
  }

  function liste_projet_admin_remove2(_this) {
    _this.style.display="none";

    const ok = new Information("class/php/cookie/liste_projet_admin_remove.php"); // création de la classe 
    ok.add("liste_projet_admin_id_sha1", _this.title); // ajout d'une deuxieme information denvoi 
    console.log(ok.info()); // demande l'information dans le tableau
    ok.push(); // envoie l'information au code pkp 
    const myTimeout = setTimeout(liste_projet_admin_remove, 250);
    function liste_projet_admin_remove() {
      Ajax("admin_section_1", "class/php/admin_section_1_1.php"); 


     }
  }

  function liste_projet_admin_remove3(_this) {
    _this.style.display="none";

    const ok = new Information("class/php/cookie/liste_projet_admin_remove3.php"); // création de la classe 
    ok.add("liste_projet_admin_id_sha1", _this.title); // ajout d'une deuxieme information denvoi 
    console.log(ok.info()); // demande l'information dans le tableau
    ok.push(); // envoie l'information au code pkp 
    const myTimeout = setTimeout(liste_projet_admin_remove, 250);
    function liste_projet_admin_remove() {
      Ajax("admin_section_1", "class/php/admin_section_1_1.php"); 


     }
  }

  function liste_projet_admin_annuler(_this) {

   
    
    _this.style.display="none";

    const ok = new Information("class/php/cookie/liste_projet_admin_annuler.php"); // création de la classe 
    ok.add("liste_projet_admin_id_sha1", _this.title); // ajout d'une deuxieme information denvoi 
    console.log(ok.info()); // demande l'information dans le tableau
    ok.push(); // envoie l'information au code pkp 
    const myTimeout = setTimeout(liste_projet_admin_annuler, 250);
    function liste_projet_admin_annuler() {
      
      Ajax("admin_section_1", "class/php/admin_section_1_1.php"); 

     }
    
  }

  function all_element() {
    Ajax("admin_section_1", "all_element.php");
  }
  function all_element_admin() {
 
    Ajax("admin_section_1", "class/php/admin_section_1_1.php"); 

  }
  function home() {
    location.reload();
  }
  function disconnect() {
    Ajax("admin_section_1", "class/php/disconnect.php");


    const myTimeout = setTimeout(disconnect, 250);

    function disconnect() {
      location.reload();
    }
  }



  function admin_section_2_display(_this){    
  const liste_projet_admin_display =    _this.title; 
  const ok = new Information("class/php/update/liste_projet_admin_display.php"); // création de la classe 
  ok.add("liste_projet_admin_display", liste_projet_admin_display); // ajout d'une deuxieme information denvoi    
  console.log(ok.info()); // demande l'information dans le tableau
  ok.push(); // envoie l'information au code pkp 
  
  }


  function visibilite(_this){
    

/*
    const image_1 ="https://img.icons8.com/ios/60/invisible.png" ;  
    const image_2 ="https://img.icons8.com/windows/60/invisible.png" ; 


 */   
    const liste_projet_admin_visibilite1 =  _this.className ; 
    const liste_projet_admin_id_sha1 =   _this.title  ; 
     

   if(_this.className=="(0-0)"){
     _this.className="" ; 
     _this.src=image_2 ; 
     document.getElementById(_this.title+"_info_visibilite").innerHTML="<b class='color_b_2 alert alert-danger'>invisible</b>" ; 

   }
   else {
    _this.src=image_1 ; 
    _this.className="(0-0)" ; 
    document.getElementById(_this.title+"_info_visibilite").innerHTML="<b class='color_b_1 alert alert-success'>visible</b>" ; 


   }

    const ok = new Information("class/php/update/visibilite.php"); // création de la classe 
    ok.add("liste_projet_admin_visibilite1", liste_projet_admin_visibilite1); // ajout d'une deuxieme information denvoi    
    ok.add("liste_projet_admin_id_sha1", liste_projet_admin_id_sha1); // ajout d'une deuxieme information denvoi    


    

    console.log(ok.info()); // demande l'information dans le tableau
    ok.push(); // envoie l'information au code pkp 



  }


  function change_name(_this){
    Ajax("admin_section_1", "class/php/admin_section_3.php");



   

    const myTimeout = setTimeout(myGreeting, 250);

function myGreeting() {
  Ajax("social_user", "class/php/social_user.php");

}

  }
  function information_user() {



    const liste_projet_admin_name1 = document.getElementById("liste_projet_admin_name1").value ; 
    const liste_projet_admin_name2 = document.getElementById("liste_projet_admin_name2").value ; 

 
  








    const ok = new Information("class/php/update/information_user.php"); // création de la classe 
    ok.add("liste_projet_admin_name1", liste_projet_admin_name1); // ajout d'une deuxieme information denvoi  
    ok.add("liste_projet_admin_name2", liste_projet_admin_name2); // ajout d'une deuxieme information denvoi   
 

   


    

    console.log(ok.info()); // demande l'information dans le tableau
    ok.push(); // envoie l'information au code pkp 





  }


function social_user(_this) {
 
 
  const ok = new Information("class/php/add_admin2.php"); // création de la classe 
  ok.add("social_user_id_information_user", _this.title); // ajout d'une deuxieme information denvoi  
  console.log(ok.info()); // demande l'information dans le tableau
  ok.push(); // envoie l'information au code pkp 


 


  const myTimeout = setTimeout(myGreeting, 250);

  function myGreeting() {
    Ajax("social_user", "class/php/social_user.php");
 

  
  }


}


function social_user_id_key_up(_this) {

const liste_projet_admin_name1 = document.getElementById(_this.title+"_1").value ; 
const liste_projet_admin_name3 = document.getElementById(_this.title+"_2").value ; 


  console.log(liste_projet_admin_name1) ; 
  
  const ok = new Information("class/php/update/social_user_id_key_up.php"); // création de la classe 


  ok.add("social_user_id_sha1", _this.title); // ajout d'une deuxieme information denvoi  

  ok.add("liste_projet_admin_name1", liste_projet_admin_name1); // ajout d'une deuxieme information denvoi  
  ok.add("liste_projet_admin_name3", liste_projet_admin_name3); // ajout d'une deuxieme information denvoi  

  


 


  

  console.log(ok.info()); // demande l'information dans le tableau
  ok.push(); // envoie l'information au code pkp 
 

}

function social_user_remove (_this){

  
  
  const ok = new Information("class/php/update/social_user_remove.php"); // création de la classe 
  ok.add("social_user_id_sha1", _this.title); // ajout d'une deuxieme information denvoi  


  console.log(ok.info()); // demande l'information dans le tableau
  ok.push(); // envoie l'information au code pkp 






  const myTimeout = setTimeout(myGreeting, 250);

  function myGreeting() {
    Ajax("social_user", "class/php/social_user.php");
 

  
  }


 
}