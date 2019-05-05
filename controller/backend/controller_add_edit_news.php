<?php 
	class controller_add_edit_news{
		public $model;
		public function __construct(){
			$this->model = new model();
			//--------
			$id = isset($_GET["id"])?$_GET["id"]:0;
			$act = isset($_GET["act"])?$_GET["act"]:"";
			switch($act){
				case "edit":
					$form_action = "admin.php?controller=add_edit_news&act=do_edit&id=$id";
					//lay mot ban ghi
					$arr = $this->model->get_a_record("select * from tbl_news where pk_news_id=$id");
					//load view
					include "view/backend/view_add_edit_news.php";
				break;
				case "do_edit":
					$c_name = $_POST["c_name"];
					$c_description = $_POST["c_description"];
					$c_content = $_POST["c_content"];
					$c_hotnews = isset($_POST["c_hotnews"])?1:0;
					$fk_category_news_id = $_POST["fk_category_news_id"];
					
					//edit ban ghi
					$this->model->execute("update tbl_news set c_name='$c_name',c_description='$c_description',c_content='$c_content',c_hotnews=$c_hotnews,fk_category_news_id=$fk_category_news_id where pk_news_id=$id");					
					//upload image
					$c_img = "";
					if($_FILES["c_img"]["name"] != ""){
						//-----------
						//kiem tra, neu co anh cu thi xoa anh do di
						//lay anh o truong c_img trong table tbl_news ung voi id truyen vao
						$old_img = $this->model->get_a_record("select c_img from tbl_news where pk_news_id=$id");
						//kiem tra, neu file ton tai thi xoa file nay
						if(file_exists("public/upload/news/".$old_img->c_img)&&$old_img->c_img!=""){
							//xoa anh bang ham unlink
							unlink("public/upload/news/".$old_img->c_img);
						}
						//-----------
						$c_img = time().$_FILES["c_img"]["name"];
						//upload file
						move_uploaded_file($_FILES["c_img"]["tmp_name"], "public/upload/news/$c_img");
						//update truong c_img cua ban ghi co id truyen vao
						$this->model->execute("update tbl_news set c_img='$c_img' where pk_news_id=$id");
					}
					//------------
					//quay lai trang tin tuc
					header("location:admin.php?controller=news");
				break;
				case "add":
					//dinh nghia bien $form_action de chi action cua form
					$form_action = "admin.php?controller=add_edit_news&act=do_add";
					//load view
					include "view/backend/view_add_edit_news.php";
				break;
				case "do_add":
					$c_name = $_POST["c_name"];
					$c_description = $_POST["c_description"];
					$c_content = $_POST["c_content"];
					$c_hotnews = isset($_POST["c_hotnews"])?1:0;
					
					$fk_category_news_id = $_POST["fk_category_news_id"];
					//upload image
					$c_img = "";
					if($_FILES["c_img"]["name"] != ""){
						$c_img = time().$_FILES["c_img"]["name"];
						//upload file
						move_uploaded_file($_FILES["c_img"]["tmp_name"], "public/upload/news/$c_img");
					}
					//them ban ghi vao csdl
					$this->model->execute("insert into tbl_news(c_name,c_description,fk_category_news_id,c_content,c_img,c_hotnews) values('$c_name','$c_description','$fk_category_news_id','$c_content','$c_img','$c_hotnews')");
					//------------
					//quay lai trang tin tuc
					header("location:admin.php?controller=news");
				break;
			}
			//--------
		}
	}
	new controller_add_edit_news();
 ?>