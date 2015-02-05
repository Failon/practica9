<?php

class user extends Controller{
		function __construct($params){
			parent::__construct($params);								
		}

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