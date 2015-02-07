<?php
/*
*model de dades de l'acció suma del controlador per defecte "chome".
*/
class msuma{
	function suma($params){
		$suma = array();
		$suma['suma'] = 0;
		for($i=1;$i<count($params);$i=$i+2){
			$suma['suma'] = $suma['suma'] + $params[$i];
		}
		return $suma;
	}
}