<?php 	
	
	class controller_statistical{
		public $model;
		public function __construct(){
				$this->model = new model();
					
			include "view/backend/view_statistical.php";
	
		
	}
}
	new controller_statistical();

 ?>