<?php 
	class controller_footer{
		public $model;
		public function __construct(){
			$this->model = new model();
			//load view
			include "view/frontend/view_footer.php";
		}
	}
	new controller_footer();
?>