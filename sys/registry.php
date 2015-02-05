<?php
/*
* El objeto registry se dedica a guardar cualquier objeto de manera única en un array asociativo
* Proporciona 4 funciones (y una de apoyo) para tratar los elementos del array.
*/

class Registry{
	private static $instancia;
	private static $registry = array();
	//La funcion getIns instancia un objeto registry solo si este no ha sido instanciado previamente.
	static function getIns(){
				
				if(self::$instancia  instanceof self){
					
					self::$instancia = new Registry();
				}
				return self::$instancia;
	// La funcion exist devuelve true si existe el indice en el registro o false si no existe
	}
	static function exists($key){
		return array_key_exists($key, self::$registry);
	}
	// la funcion add añade un registro al registro con la llave y el objeto proporcionados además de devolver true
	// y devuelve false si ya existia la llave en el registro
	static function add($key, &$objeto){
		if(!self::exists($key)){
			self::$registry[$key] = $objeto;
			$error = true;
		}
		else $error = false;
		return $error;
	}
	// La funcion get devuelve el objeto del registro con el indice proporcionado si existe
	// o devuelve null si no existe.
	static function get($key){
		if(self::exists($key)){
			return self::$registry[$key];
		}
		else{
			return null;
		}
	}
	// La funcion remove remueve el registro con el indice proporcionado si existe y devuelve true.
	// o devuelve false si no existe.
	static function remove($key){
		if(self::exists($key)){
			unset(self::$registry[$name]);
			return true;
		}
		else return false;
	}
	//la funcion clear limpia el array de registros.
	static function clear(){
		self::$registry = array();
	}

}