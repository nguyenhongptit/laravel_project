<?php 
	class controller_add_edit_slider{
		public $model;
		public function __construct(){
			$this->model = new model();
			//--------
			$id = isset($_GET["id"])?$_GET["id"]:0;
			$act = isset($_GET["act"])?$_GET["act"]:"";
			switch($act){
				case "edit":
					$form_action = "admin.php?controller=add_edit_slider&act=do_edit&id=$id";
					//lay mot ban ghi
					$arr = $this->model->get_a_record("select * from tbl_slider where pk_slider_id=$id");
					//load view
					include "view/backend/view_add_edit_slider.php";
				break;
				case "do_edit":
					$c_name = $_POST["c_name"];
					$c_des = $_POST['c_des'];
					$c_title = $_POST['c_title'];
					$c_link = $_POST['c_link'];
					$c_time = $_POST['c_time'];
					//edit ban ghi
					$this->model->execute("update tbl_slider set c_name='$c_name',c_des='$c_des',c_title='$c_title',c_link='$c_link' , c_time = '$c_time'where pk_slider_id=$id");					
					//upload image
					$c_img = "";
					if($_FILES["c_img"]["name"] != ""){
						//-----------
						//kiem tra, neu co anh cu thi xoa anh do di
						//lay anh o truong c_img trong table tbl_slider ung voi id truyen vao
						$old_img = $this->model->get_a_record("select c_img from tbl_slider where pk_slider_id=$id");
						//kiem tra, neu file ton tai thi xoa file nay
						if(file_exists("public/upload/slider/".$old_img->c_img)&&$old_img->c_img!=""){
							//xoa anh bang ham unlink
							unlink("public/upload/slider/".$old_img->c_img);
						}
						//-----------
						$c_img = time().$_FILES["c_img"]["name"];
						//upload file
						move_uploaded_file($_FILES["c_img"]["tmp_name"], "public/upload/slider/$c_img");
						//update truong c_img cua ban ghi co id truyen vao
						$this->model->execute("update tbl_slider set c_img='$c_img' where pk_slider_id=$id");
					}
					//------------
					//quay lai trang tin tuc
					header("location:admin.php?controller=slider");
				break;
				case "add":
					//dinh nghia bien $form_action de chi action cua form
					$form_action = "admin.php?controller=add_edit_slider&act=do_add";
					//load view
					include "view/backend/view_add_edit_slider.php";
				break;
				case "do_add":
					$c_name = $_POST["c_name"];
					$c_des  = $_POST['c_des'];
					$c_title = $_POST['c_title'];
					$c_link = $_POST['c_link'];
					$c_img = "";
					$c_time  = $_POST['c_time'];
					if($_FILES["c_img"]["name"] != ""){
						$c_img = time().$_FILES["c_img"]["name"];
						//upload file
						move_uploaded_file($_FILES["c_img"]["tmp_name"], "public/upload/slider/$c_img");
					}
					//them ban ghi vao csdl
					$this->model->execute("insert into tbl_slider(c_title,c_name,c_img,c_des,c_link,c_time) values('$c_title','$c_name','$c_img','$c_des','$c_link',$c_time)");
					//------------
					//quay lai trang tin tuc
					header("location:admin.php?controller=slider");
				break;
				case "delete":
				//xoa ban ghi tuong ung voi id truyen vao
				$this->model->execute("delete from tbl_slider where pk_slider_id=$id");
				header("location:admin.php?controller=slider");
				break;
			}
			//--------
		}
	}
	new controller_add_edit_slider();
 ?>