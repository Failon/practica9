<?php
//la clase controlador s'encarregará de controlar el flux de dades entre la aplicació i la vista.
	class Controller{
		public $model; //té associat un model
		protected $view; //té associada una vista
		protected $params; //té associats uns parametres.
		protected $conf; //té associat un registre de configuració
		public $loader; //té associat un carregador de dades.
		function __construct($parametros){
			$this->params =$parametros;
			$this->conf = Registry::getIns();
			$this->loader = new Loader();
		}
		
	}
?>