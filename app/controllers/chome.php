<?php
/*
* Controlador per defecte chome.
*/
	Class chome extends Controller{
		function __construct($params){
			//crida al constructor pare del la clase Controller per guardar els parametres que li han passat.
			parent::__construct($params);								
		}
			function home(){
				//acció per defecte home, llença el model mhome i la vista home.
				$this->model = new mhome;
				$this->loader->vista('home.php',$this->model->Info());
				
			}
			function suma(){
				//acció suma, llença el model msuma i la vista suma.
				$array_parametres = $this->params;
				$this->model = new msuma;
				$this->loader->vista('suma.php',$this->model->suma($array_parametres));
			}
	}