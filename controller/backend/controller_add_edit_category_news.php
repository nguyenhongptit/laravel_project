<?php 
	class controller_add_edit_category_news{
		public $model;
		public function __construct(){
			$this->model = new model();
			//--------
			$id = isset($_GET["id"])?$_GET["id"]:0;
			$act = isset($_GET["act"])?$_GET["act"]:"";
			switch($act){
				case "edit":
					$form_action = "admin.php?controller=add_edit_category_news&act=do_edit&id=$id";
					//lay mot ban ghi
					$arr = $this->model->get_a_record("select * from tbl_category_news where pk_category_news_id=$id");
					//load view
					include "view/backend/view_add_edit_category_news.php";
				break;
				case "do_edit":
					$c_name = $_POST["c_name"];
					
					//edit ban ghi
					$this->model->execute("update tbl_category_news set c_name='$c_name' where pk_category_news_id=$id");					
					
					//------------
					//quay lai trang tin tuc
					header("location:admin.php?controller=category_news");
				break;
				case "add":
					//dinh nghia bien $form_action de chi action cua form
					$form_action = "admin.php?controller=add_edit_category_news&act=do_add";
					//load view
					include "view/backend/view_add_edit_category_news.php";
				break;
				case "do_add":
					$c_name = $_POST["c_name"];
					
					//them ban ghi vao csdl
					$this->model->execute("insert into tbl_category_news set c_name = '$c_name'");
					//------------
					//quay lai trang tin tuc
					header("location:admin.php?controller=category_news");
				break;
				case "delete":
				//xoa ban ghi tuong ung voi id truyen vao
				$this->model->execute("delete from tbl_category_news where pk_category_news_id=$id");
				header("location:admin.php?controller=category_news");
				break;
			}
			//--------
		}
	}
	new controller_add_edit_category_news();
 ?>