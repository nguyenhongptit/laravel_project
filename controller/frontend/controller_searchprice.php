<?php 
	class controller_searchprice_product{
		//tao bien $model
		public $model;
		public function __construct(){
			$this->model = new model();
			$gia = isset($_GET["gia"]) ? $_GET["gia"] : "";
			
			switch ($gia) {
				case '0k-1000k':
					//quy dinh so ban ghi tren mot trang
					$record_per_page = 10;
					//Tinh tong so ban ghi trong table
					$total = $this->model->num_rows("SELECT c_price from tbl_product where c_price >= 0 AND c_price<=1000000");
					//sotrang = tong-so-ban-ghi/so-ban-ghi-tren-mot-trang
					$num_page = ceil($total/$record_per_page);
					//lay trang hien tai (bien nay truyen tren url)
					$page = isset($_GET["p"])&&$_GET["p"]>0 ? ($_GET["p"]-1) : 0;
					//tu trang hien tai, xac dinh lay tu ban ghi nao
					$from = $page * $record_per_page;
					//------------
					$arr = $this->model->get_all("select * from tbl_product where c_price >= 0 AND c_price<=1000000  order by pk_product_id desc limit $from,$record_per_page");
					break;
				case '2000k-4000k':
					//quy dinh so ban ghi tren mot trang
					$record_per_page = 10;
					//Tinh tong so ban ghi trong table
					$total = $this->model->num_rows("SELECT c_price from tbl_product where c_price >= 2000000 AND c_price<=4000000");
					//sotrang = tong-so-ban-ghi/so-ban-ghi-tren-mot-trang
					$num_page = ceil($total/$record_per_page);
					//lay trang hien tai (bien nay truyen tren url)
					$page = isset($_GET["p"])&&$_GET["p"]>0 ? ($_GET["p"]-1) : 0;
					//tu trang hien tai, xac dinh lay tu ban ghi nao
					$from = $page * $record_per_page;
					//------------
					$arr = $this->model->get_all("select * from tbl_product where c_price >= 2000000 AND c_price<=4000000  order by pk_product_id desc limit $from,$record_per_page");
					break;
				case '4000k-6000k':
					//quy dinh so ban ghi tren mot trang
					$record_per_page = 10;
					//Tinh tong so ban ghi trong table
					$total = $this->model->num_rows("SELECT c_price from tbl_product where c_price >= 4000000 AND c_price<=6000000");
					//sotrang = tong-so-ban-ghi/so-ban-ghi-tren-mot-trang
					$num_page = ceil($total/$record_per_page);
					//lay trang hien tai (bien nay truyen tren url)
					$page = isset($_GET["p"])&&$_GET["p"]>0 ? ($_GET["p"]-1) : 0;
					//tu trang hien tai, xac dinh lay tu ban ghi nao
					$from = $page * $record_per_page;
					//------------
					$arr = $this->model->get_all("select * from tbl_product where c_price >= 4000000 AND c_price<=6000000  order by pk_product_id desc limit $from,$record_per_page");
					break;
				case '6000k-8000k':
					//quy dinh so ban ghi tren mot trang
					$record_per_page = 10;
					//Tinh tong so ban ghi trong table
					$total = $this->model->num_rows("SELECT c_price from tbl_product where c_price >= 6000000 AND c_price<=8000000");
					//sotrang = tong-so-ban-ghi/so-ban-ghi-tren-mot-trang
					$num_page = ceil($total/$record_per_page);
					//lay trang hien tai (bien nay truyen tren url)
					$page = isset($_GET["p"])&&$_GET["p"]>0 ? ($_GET["p"]-1) : 0;
					//tu trang hien tai, xac dinh lay tu ban ghi nao
					$from = $page * $record_per_page;
					//------------
					$arr = $this->model->get_all("select * from tbl_product where c_price >= 6000000 AND c_price<=8000000  order by pk_product_id desc limit $from,$record_per_page");
					break;
				case '8000k-10000k':
					//quy dinh so ban ghi tren mot trang
					$record_per_page = 10;
					//Tinh tong so ban ghi trong table
					$total = $this->model->num_rows("SELECT c_price from tbl_product where c_price >= 8000000 AND c_price<=10000000");
					//sotrang = tong-so-ban-ghi/so-ban-ghi-tren-mot-trang
					$num_page = ceil($total/$record_per_page);
					//lay trang hien tai (bien nay truyen tren url)
					$page = isset($_GET["p"])&&$_GET["p"]>0 ? ($_GET["p"]-1) : 0;
					//tu trang hien tai, xac dinh lay tu ban ghi nao
					$from = $page * $record_per_page;
					//------------
					$arr = $this->model->get_all("select * from tbl_product where c_price >= 8000000 AND c_price<=10000000  order by pk_product_id desc limit $from,$record_per_page");
					break;
				case 'hon10tr':
					//quy dinh so ban ghi tren mot trang
					$record_per_page = 10;
					//Tinh tong so ban ghi trong table
					$total = $this->model->num_rows("SELECT c_price from tbl_product where c_price >= 1000000 ");
					//sotrang = tong-so-ban-ghi/so-ban-ghi-tren-mot-trang
					$num_page = ceil($total/$record_per_page);
					//lay trang hien tai (bien nay truyen tren url)
					$page = isset($_GET["p"])&&$_GET["p"]>0 ? ($_GET["p"]-1) : 0;
					//tu trang hien tai, xac dinh lay tu ban ghi nao
					$from = $page * $record_per_page;
					//------------
					$arr = $this->model->get_all("select * from tbl_product where c_price >= 10000000 order by pk_product_id desc limit $from,$record_per_page");
					break;
				
				default:
				
					header("location: index.php?controller=allproduct");
					break;
			}
			
			//load view
			include "view/frontend/view_searchprice.php";
			//------------
		}
	}
	new controller_searchprice_product();
 ?>