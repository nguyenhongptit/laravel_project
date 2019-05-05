<?php 
	class controller_leftbar{
		public $model;
		public function __construct(){
			$this->model = new model();
			//load view
			include "view/frontend/view_leftbar.php";
		}
	}
	new controller_leftbar();
?>