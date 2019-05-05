<?php 
	class controller_ftproduct{
		public $model;
		public function __construct(){
			$this->model = new model();
			//load view
			include "view/frontend/view_ftproduct.php";
		}
	}
	new controller_ftproduct();
?>