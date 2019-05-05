<?php 
	class controller_category_product{
		public $model;
		public function __construct(){
			$this->model = new model();
			//load view
			$id = isset($_GET["id"])?$_GET["id"]:0;
			//quy dinh so ban ghi tren mot trang
			$record_per_page = 10;
			//Tinh tong so ban ghi trong table
			$total = $this->model->num_rows("select pk_product_id from tbl_product where fk_category_product_id=$id");
			//sotrang = tong-so-ban-ghi/so-ban-ghi-tren-mot-trang
			$num_page = ceil($total/$record_per_page);
			//lay trang hien tai (bien nay truyen tren url)
			$page = isset($_GET["p"])&&$_GET["p"]>0 ? ($_GET["p"]-1) : 0;
			//tu trang hien tai, xac dinh lay tu ban ghi nao
			$from = $page * $record_per_page;
			//------------
			$arr = $this->model->get_all("select * from tbl_product where fk_category_product_id=$id order by pk_product_id desc limit $from,$record_per_page");
			include "view/frontend/view_category_product.php";
		}
	}
	new controller_category_product();
?>