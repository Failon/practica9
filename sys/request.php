<?php

class Request{
  static private $query=array();
 
  static function retrieve(){
    $array_query=explode('/',$_SERVER['REQUEST_URI']);
    //Coder::code_var($array_query);
    array_shift($array_query);
    //Coder::code_var($array_query);
 
    if ((($array_query[0]==APP_W))||(substr_count(APP_W, $array_query[0])>0)){
      array_shift($array_query);
    }
       //l'últim element és ""
    if (end($array_query)==""){
        array_pop($array_query);
    }
    self::$query=$array_query;
    //Coder::code_var($array_query);
  }
  static function getCont(){
    if(array_key_exists(1,self::$query)&&self::$query[1]!='index.php'){
      return self::$query[1];
    }
    else{
      return "chome";
    }
    /*
    array_shift(self::$query);
    Coder::code_var(self::$query);
    if(array_key_exists(0,self::$query)&&self::$query[0]!='index.php'){
      return self::$query[0];
    }
    else{
      return "chome";
    }
    */
  }
  static function getAct(){
    if(array_key_exists(2,self::$query)){
      return self::$query[2];
    }
    else{
      return "home";
    }    
    /*
    array_shift(self::$query);
    Coder::code_var(self::$query);
    if(array_key_exists(0,self::$query)){
      return self::$query[0];
    }
    else{
      return "home";
    }*/
  }
  static function getParam(){
    array_splice(self::$query, 0, 3);
    //Coder::code_var(self::$query);
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