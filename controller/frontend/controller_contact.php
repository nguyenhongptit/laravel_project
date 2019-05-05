<?php 
	class controller_contact{
		public $model;
		public function __construct(){
			$this->model = new model();
			//load view
			include "view/frontend/view_contact.php";

                        //neu ton tai thi ghi vao db
                            if(isset($_POST["btn_send"])){

                                $c_name = $_POST["c_name"];
                                $c_email = $_POST["c_email"];
                                $c_content = $_POST["c_content"];

                                $this->model->execute("INSERT INTO `tbl_contact`(`c_name`,`c_email`,`c_content`,`c_time`) VALUES('$c_name','$c_email','$c_content',now())");
                            }
                         		}
	}
	new controller_contact();
?>