<?php 


	class controller_checkout{
		public $model;
		public function __construct(){
			$this->model = new model();
			if(isset($_POST["btn_buy"])){

				$email = $_POST["email"];
				$hovaten = $_POST["hovaten"];
				$dienthoai = $_POST["dienthoai"];
				$matinh =  $_POST['province'];
				$mahuyen=   $_POST['district'];
				$maXa=   $_POST['ward'];
				$diachi1 = $this->model->get_a_record("select name from province where provinceid = '$matinh'");
				$diachi2 = $this->model->get_a_record("select name from district where districtid = '$mahuyen'");
				$diachi3 = $this->model->get_a_record("select name from ward where wardid = '$maXa'");
		 		$sonha = $_POST['sonha'];
		 		$tam = 0;

			if(isset($_SESSION['gia'])){
				$tam = $_SESSION['gia'];
			}

				$diachi =  $sonha."-".$diachi3->name.",".$diachi2->name.",".$diachi1->name;
				// $ghichu = $_POST["ghichu"];					

				$this->model->execute("INSERT INTO `tbl_customer` (`email`, `hovaten`, `diachi`, `dienthoai`) VALUES ('$email', '$hovaten', '$diachi', '$dienthoai')");
			     
				$customer_id=$this->model->get_a_record("select  `customer_id` from tbl_customer where hovaten='$hovaten' and  dienthoai='$dienthoai' and email = '$email'");

				 $this->model->execute("INSERT INTO `tbl_order` (`customer_id`, `ngaymua`, `gia`, `trangthai`) VALUES ($customer_id->customer_id, now(), '$tam', 0)");
				//lay bien order_id
				$order_id=$this->model->get_a_record("select order_id from tbl_order where customer_id=$customer_id->customer_id");
				//duyet cac phan tu cua gio hang` và insert vào bảng order_Detail
				foreach ($_SESSION['cart'] as $product) {
					$fk_product_id = $product["pk_product_id"];
					$number = $product["number"];
					$count=$this->model->get_a_record("select c_count from tbl_product where pk_product_id = $fk_product_id");
				    $numberNew = $number + $count->c_count ;
				    $this->model->execute("update tbl_product set c_count = $numberNew where  pk_product_id = $fk_product_id");
					$this->model->execute("INSERT INTO `tbl_order_detail` (`order_id`, `fk_product_id`, `c_number`) VALUES ($order_id->order_id, '$fk_product_id', '$number')");
				}
				//xoa gio hang
				require "controller_mail.php";

				//echo "<script>alert ('tran doan dat')</script>";
				$_SESSION['cart'] = array();
				//echo "<script>location.href='gio-hang.html'</script>";

				echo '
					<div class="wapper">
					<div class="content">
						<div class="title_content">
						<h3>	Thong bao </h3>
						</div>
						<div class="Between_content">

								<p>Bạn đã đặt hàng thành công vui lòng kiểm tra email của bạn để biết thông tin</p>
								
								<br>
								<a href="trang-chu.html" class="btn" ><input type="submit" value = "OK" style="width: 100px ; height: 50px; background: #A0E769 ;text-align: center;font-size: 23px; margin-left: 120px;font-family: serif;" ></a>


							</div>

					</div>
					</div>
				';


			}


		
   

			include "view/frontend/view_checkout.php";
		}
	}
	new controller_checkout();
?>
