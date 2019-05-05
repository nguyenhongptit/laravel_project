<?php 	
	
	class controller_register{
		public $model;
		public function __construct(){
				$this->model = new model();
				// neu ton tai phuong thuc post thi
				if(isset($_POST["c_email"])&&isset($_POST["c_password"])&&isset($_POST["c_name"])){
					$c_email = $_POST["c_email"];
					$c_password  = $_POST["c_password"];
					$c_name = $_POST["c_name"];
					$c_password = md5($c_password);
						//luu vao database
					$this->model->execute("insert into tbl_user(c_name,c_email,c_password,admin) values('$c_name','$c_email','$c_password','0')");
					
					header("location: admin.php");


			}

			//load view
					include "view/backend/view_register.php";


		
	}
}
	new controller_register();

 ?>