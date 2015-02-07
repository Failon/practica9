<?php
/*
*	Archiu de definició dels directoris del sistema
*/
	define('DS',DIRECTORY_SEPARATOR); //defineix el separador de directoris del sistema (tenint en compte sistemes unix o windows)
	define('ROOT',realpath(dirname(__FILE__)).DS); //defineix el directory Root.
	define('APP',ROOT.'app'.DS); //defineix el directori de app
	define('VIEWS_PATH',ROOT.'app'.DS.'views'.DS); //defineix el directori de les vistes
	define('APP_W',basename($_SERVER['SCRIPT_NAME'])); //defineix la aplicació en execució.
?>