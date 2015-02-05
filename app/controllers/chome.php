<?php
	Class chome extends Controller{
		function __construct($params){
			parent::__construct($params);								
		}
			function home(){
				$this->model = new mhome;
				$this->loader->vista('home.php',$this->model->Info());
				
			}
			function suma(){
				$array_parametres = $this->params;
				$this->model = new msuma;
				$this->loader->vista('suma.php',$this->model->suma($array_parametres));
			}
	}