<?php

class muser{
	function info($params){
			return array(
						'nom' => $params[1],
						'count' => strlen($params[1])
						);

	}
}