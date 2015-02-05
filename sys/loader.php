<?php
	class loader{
		public function vista($route,$variables){
			extract($variables);
			require VIEWS_PATH.$route;
		}
	}