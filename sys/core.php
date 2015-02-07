<?php
//core es el nucli de l'aplicació, s'encarrega de dirigir el fluxe de dades al controlador adient tenint en compte la informació que extreu del request.
class core{
	static private $controller;
	static private $action;
	static private $parameters = array();

	//la funció start inicialitza el servei i carrega el router.
	static function start(){
		self::router();
	}
	//el router analitza la Uri amb ajuda de la classe request y llença el controllador i l'acció adients depenent d'aquesta Uri.
	static function router(){
			request::retrieve();
			$route = request::getCont();
			$action = request::getAct();
			self::$parameters = request::getParam();
			$fileroute = strtolower($route).'.php';
			if(is_readable(APP.'controllers'.DS.$fileroute)){
				//require APP.'controllers'.DS.$fileroute;
				self::$controller = new $route(self::$parameters);
				//si el controlador té definida l'acció s'executará.
				if(is_callable(array(self::$controller, $action))){
					call_user_func(array(self::$controller, $action));
				}
				else{ //sinó es mostrarà un missatge de error.
					echo "Lo sentimos! la accion ".$action." no esta definida en el controlador seleccionado.";
				}
				
			}else{
				echo "Esta aplicacion no se encuentra en este website";
			}
	}
}