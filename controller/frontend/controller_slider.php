<?php 
	class controller_slider{
		public $model;
		public function __construct(){
			$this->model = new model();
			//load view
			include "view/frontend/view_slider.php";
		}
	}
	new controller_slider();
?>