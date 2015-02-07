<?php

class Request{
  static private $query=array(); //de manera statica definim la query per tal que qualsevol request tingui el mateix registre.
 
//la funció retrieve captura el valor de la query i elimina informació sobrant.
  static function retrieve(){
    $array_query=explode('/',$_SERVER['REQUEST_URI']);
    array_shift($array_query);
 
    if ((($array_query[0]==APP_W))||(substr_count(APP_W, $array_query[0])>0)){
      array_shift($array_query);
    }
       //l'últim element és ""
    if (end($array_query)==""){
        array_pop($array_query);
    }
    self::$query=$array_query;
  }
//retornem el controlador, si no existeix, retornem "chome" el controlador per defecte
  static function getCont(){
    if(array_key_exists(1,self::$query)&&self::$query[1]!='index.php'){
      return self::$query[1];
    }
    else{
      return "chome";
    }
  }
//retornem l'acció si no existeix definim la acció home per defecte.
  static function getAct(){
    if(array_key_exists(2,self::$query)){
      return self::$query[2];
    }
    else{
      return "home";
    }    
//retornem els parametres, eliminem de la query els valors del controlador i l'acció deixant només els parametres, si aquets no son parells mostrem un missatge de error.
  }
  static function getParam(){
    array_splice(self::$query, 0, 3);
     //Els parametres i els valors han de ser parells
    if ((count(self::$query))%2==0){
         return self::$query;
    }
    else{
      echo 'ERRROR parameters and values must be odd!';
      exit;
    }
 }
}