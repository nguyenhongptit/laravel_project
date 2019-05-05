<?php 
	class controller_previewimage{
		public $model;
		public function __construct(){
			$this->model = new model();
			//load view
			include "view/frontend/view_previewimage.php";
		}
	}
	new controller_previewimage();
?>