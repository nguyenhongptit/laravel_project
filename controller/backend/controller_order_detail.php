<?php 
	class controller_order_detail{
		public $model;
		public function __construct(){
			//---------
			$this->model = new model();
			//---------
			$act = isset($_GET["act"]) ? $_GET["act"]:"";
			//lay bien id tu url
			$id = isset($_GET["id"]) ? $_GET["id"]:0;
			switch ($act) {
				case 'giaohang':
					$this->model->execute("update tbl_order set trangthai=1 where order_id=$id");
					header("location:admin.php?controller=order");
					break;
				
				default:
					# code...
					break;
			}
			//---------
			//load view
			include "view/backend/view_order_detail.php";
		}
	}
	new controller_order_detail();
 ?>