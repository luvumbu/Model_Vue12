
function submit() {
    const dbname = document.getElementById("dbname").value;
    const username = document.getElementById("username").value;
    const password = document.getElementById("password").value;
    const caseACocher_result = false ;  
/*
    alert(dbname) ; 
    alert(username) ; 
    alert(password) ; 

*/
 
    
  // Récupérer l'élément de la case à cocher
  var caseACocher = document.getElementById("maCaseACocher");

  // Vérifier si la case est cochée
  if (caseACocher.checked) {
      // Obtenir la valeur de la case cochée
      var valeurCheckbox = caseACocher.value;
      
      caseACocher_result = true ; 
  } else {
       
  }
var ok = new Information("model/class/php/bdd_exe_config.php"); // création de la classe 
ok.add("dbname", dbname); // ajout de l'information pour lenvoi 
ok.add("username", username); // ajout de l'information pour lenvoi 
ok.add("password", password); // ajout de l'information pour lenvoi 
ok.add("caseACocher_result", caseACocher_result); // ajout de l'information pour lenvoi  
console.log(ok.info()); // demande l'information dans le tableau
ok.push(); // envoie l'information au code pkp 
const myTimeout = setTimeout(myGreeting, 500);
function myGreeting() {
location.reload();
}



  }