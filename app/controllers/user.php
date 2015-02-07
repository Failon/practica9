<?php
/*
* Controlador user.
*/
class user extends Controller{
		function __construct($params){
			//crida al constructor pare de la clase Controller per guardar els parametres que li han passat.
			parent::__construct($params);								
		}
		//acció show. carrega la vista show amb el model de dades d'usuari.
		function show(){
			$this->model = new muser;
			if(strtolower($this->params[0])=='nom'){
				$this->loader->vista('show.php', $this->model->info($this->params));				
			}
			else{
				echo 'El parametre '.$this->params[0].' no es un parametre reconegut';
			}
		}	
}