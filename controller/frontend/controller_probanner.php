<?php 
	class controller_probanner{
		public $model;
		public function __construct(){
			$this->model = new model();
			//load view
			include "view/frontend/view_probanner.php";
		}
	}
	new controller_probanner();
?>