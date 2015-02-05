<?php

class core{
	static private $controller;
	static private $action;
	static private $parameters = array();


	static function start(){
		self::router();
	}
	static function router(){
		request::retrieve();
			$route = request::getCont();
			$action = request::getAct();
			self::$parameters = request::getParam();
			$fileroute = strtolower($route).'.php';
			//Coder::code_var($fileroute);
			if(is_readable(APP.'controllers'.DS.$fileroute)){
				//require APP.'controllers'.DS.$fileroute;
				self::$controller = new $route(self::$parameters);
				call_user_func(array(self::$controller, $action));
			}else{
				echo "esta aplicacion no se encuentra en este website";
			}
	}
}