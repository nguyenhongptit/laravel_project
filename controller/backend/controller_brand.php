<?php 
	class controller_brand{
		//tao bien $model
		public $model;
		public function __construct(){
			$this->model = new model();
			//------------
			$act = isset($_GET["act"])?$_GET["act"]:"";
			// switch($act){
			// 	case "delete":
			// 		$id = isset($_GET["id"])?$_GET["id"]:0;
			// 		//-----------
			// 		//kiem tra, neu co anh cu thi xoa anh do di
			// 		//lay anh o truong c_img trong table tbl_brand ung voi id truyen vao
			// 		$old_img = $this->model->get_a_record("select c_img from tbl_brand where pk_brand_id=$id");
			// 		//kiem tra, neu file ton tai thi xoa file nay
			// 		if(file_exists("public/upload/brand/".$old_img->c_img)&&$old_img->c_img!=""){
			// 			//xoa anh bang ham unlink
			// 			unlink("public/upload/brand/".$old_img->c_img);
			// 		}
			// 		//thuc hien xoa ban ghi co id truyen vao
			// 		$this->model->execute("delete from tbl_brand where pk_brand_id=$id");
			// 		//quay lai trang tin tuc
			// 		header("location:admin.php?controller=brand");
			// 		//-----------
			// 	break;
			// }
			//------------
			//quy dinh so ban ghi tren mot trang
			$record_per_page = 10;
			//Tinh tong so ban ghi trong table
			$total = $this->model->num_rows("select c_name from tbl_brand");
			//sotrang = tong-so-ban-ghi/so-ban-ghi-tren-mot-trang
			$num_page = ceil($total/$record_per_page);
			//lay trang hien tai (bien nay truyen tren url)
			$page = isset($_GET["p"])&&$_GET["p"]>0 ? ($_GET["p"]-1) : 0;
			//tu trang hien tai, xac dinh lay tu ban ghi nao
			$from = $page * $record_per_page;
			//------------
			$arr = $this->model->get_all("select * from tbl_brand order by pk_brand_id desc limit $from,$record_per_page");
			//load view
			include "view/backend/view_brand.php";
			//------------
		}
	}
	new controller_brand();
 ?>