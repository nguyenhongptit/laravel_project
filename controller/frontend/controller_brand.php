<?php 
	class controller_brand{
		public $model;
		public function __construct(){
			$this->model = new model();
			//load view
			include "view/frontend/view_brand.php";
		}
	}
	new controller_brand();
?>