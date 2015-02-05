<?php
	define('DS',DIRECTORY_SEPARATOR);
	define('ROOT',realpath(dirname(__FILE__)).DS);
	define('APP',ROOT.'app'.DS);
	define('VIEWS_PATH',ROOT.'app'.DS.'views'.DS);
	define('APP_W',basename($_SERVER['SCRIPT_NAME']));
?>