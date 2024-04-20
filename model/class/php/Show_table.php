<?php 
class Show_table {
    public $src_name;
    public $extension;
   
    public $array_name = array() ; 
  
    function __construct($src_name,$extension) {
      $this->src_name = $src_name;
      $this->extension = $extension;    
    }
  
    function set_array_name($array_name) {
      array_push($this->array_name, $array_name);
    }
    function get_array_name() {
      return $this->array_name;
    }
    function get_src_name() {
      return $this->src_name;
    }
    function exe(){
      for ($a = 0; $a < count($this->array_name); $a++) {      
   
   include($this->src_name . $this->array_name[$a] .$this->extension) ;  
          
      }
    }
   
  
  }
  /*

  // exemple d'utilisation 

  $apple = new Show_table("../model/class/php/",".php");
  // 1 donner le chemin du fichier 
  // 2 Donner son extension 
  // 3 ajouter a l'aide de set array les nom des fichier a ajouter
  // 4 faire l'execution du code pour avec exe()
  $apple->set_array_name('verif_file_name');
  $apple->set_array_name('destroy');
  $apple->set_array_name('Get_anne');
  $apple->set_array_name('Insertion_Bdd');
  $apple->set_array_name('remove_db');
  $apple->set_array_name('Select_datas');
   
  
  var_dump($apple->get_array_name()) ; 
  
   
  echo $apple->src_name ; 
  
  $apple->exe() ;


  */