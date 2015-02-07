<?php
//Establim el mode de error reporting per tal de mostrar tots els errors en la fase de desenvolupament del framework.
error_reporting(E_ALL);
ini_set('display_errors','1');
//incluim les constats definides.
include 'constants.php';
//carreguem el helper.
require 'sys/helper.php';
 
//inicialitzem el core.

core::start();