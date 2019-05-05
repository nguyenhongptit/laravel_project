<?php 
	class controller_order{
		//tao bien $model
		public $model;
		public function __construct(){
			$this->model = new model();
			//------------
			$act = isset($_GET["act"])?$_GET["act"]:"";
			$id = isset($_GET["id"])?$_GET["id"]:"";
			switch ($act) {
				case 'delete':
				echo "1";
				//xoa ban ghi tuong ung voi id cua don hang
				$this->model->execute("delete from tbl_order where order_id=$id");
				//xoa ban ghi tuong ung voi id truyen vao cua tbl_order_detail
				$this->model->execute("delete from tbl_order_detail where order_id=$id");
				header("location:admin.php?controller=order");
			}
			//------------
			//quy dinh so ban ghi tren mot trang
			$record_per_page = 10;
			//Tinh tong so ban ghi trong table
			$total = $this->model->num_rows("select order_id from tbl_order");
			//sotrang = tong-so-ban-ghi/so-ban-ghi-tren-mot-trang
			$num_page = ceil($total/$record_per_page);
			//lay trang hien tai (bien nay truyen tren url)
			$page = isset($_GET["p"])&&$_GET["p"]>0 ? ($_GET["p"]-1) : 0;
			//tu trang hien tai, xac dinh lay tu ban ghi nao
			$from = $page * $record_per_page;
			//------------
			$arr = $this->model->get_all("select * from tbl_order order by order_id desc limit $from,$record_per_page");
			//load view
			include "view/backend/view_order.php";
			//------------
		}
	}
	new controller_order();
 ?>