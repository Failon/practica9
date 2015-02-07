<?php
/*
* La classe Loader carrega la vista corresponent i extrau les variables del model de dades que li pasarem.
*/
	class loader{
		public function vista($route,$variables){
			extract($variables);
			require VIEWS_PATH.$route;
		}
	}