<?php

spl_autoload_register(null, false);
spl_autoload_register('Myautoloader::SysLoader');
spl_autoload_register('Myautoloader::AppContLoader');
spl_autoload_register('Myautoloader::AppModLoader');
spl_autoload_register('Myautoloader::AppViewLoader');

class Myautoloader{
	static function SysLoader($class){
		$filename = strtolower($class).'.php';
		$file =ROOT.'sys'.DS.$filename;
		if (!file_exists($file)){
			return false;
		}
		include $file;
	}
	static function AppContLoader($class){
		$filename = strtolower($class).'.php';
		$file =APP.'controllers'.DS.$filename;
		if (!file_exists($file)){
			return false;
		}
		include $file;
	}
	static function AppModLoader($class){
		$filename = strtolower($class).'.php';
		$file =APP.'models'.DS.$filename;
		if (!file_exists($file)){
			return false;
		}
		include $file;
	}
	static function AppViewLoader($class){
		$filename = strtolower($class).'.php';
		$file =APP.'views'.DS.$filename;
		if (!file_exists($file)){
		return false;
		}
		include $file;
	}
}

class Coder{

	static function code($var){
		echo '<pre>'.$var.'</pre>';
	}
	static function code_var($var){
		echo '<pre>'.var_dump($var).'</pre>';
	}
}