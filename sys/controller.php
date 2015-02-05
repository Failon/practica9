<?php
	class Controller{
		public $model;
		protected $view;
		protected $params;
		protected $conf;
		public $loader;
		function __construct($parametros){
			$this->params =$parametros;
			$this->conf = Registry::getIns();
			$this->loader = new Loader();
		}
		
	}
?>