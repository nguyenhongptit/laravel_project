<div class="row justify-content-center">
	<div class="col-md-12">
		<!-- card -->
		
		<div class="card border-primary">
			<div class="card card-header bg-primary text-white" style="padding:7px !important;">Danh sách đơn hàng</div>
				<div class="card-body">
				<!-- table -->
				<table class="table table-hover table-bordered">
					<tr>
						<th>Họ và tên</th>
						<th>Email</th>
						<th>Địa chỉ</th>
						<th>Ngày mua</th>

						<th style="width: 150px;">Tình trạng</th>
						<th style="width: 80px;">Chi tiết</th>
						<th style="width: 70px;"></th>
					</tr>
				<?php 
					foreach($arr as $rows){?>
					<?php 
						//lay thong tin tu bang tbl_customer
					$customer = $this->model->get_a_record("select * from tbl_customer where customer_id=".$rows->customer_id);
					 ?>
				 <tr>
				 <td><?php echo $customer->hovaten;?></td>
				 <td><?php echo $customer->dienthoai;?></td>
				 <td><?php echo $customer->diachi;?></td>
				 <td><?php
				 	$date = date_create($rows->ngaymua);
				 	echo date_format($date, "d/m/Y"); 
				  ?>
				  	
				  </td>
				  <th style="width: 150px;"><?php echo ($rows->trangthai==1)?"Đã giao hàng":"Chưa giao hàng"; ?></th>
				<td style="text-align: center;"><a href="admin.php?controller=order_detail&id=<?php echo $rows->order_id; ?>">Chi tiết</a>
				
				</td>
				 <td style="text-align: center;"><a href="admin.php?controller=order&act=delete&id=<?php echo $rows->order_id; ?>">Xóa</a></td>
					</tr>
				<?php } ?>
				</table>
				<!-- end table -->
				</div>
				<div class="card-footer" style="padding:7px !important">
					<ul class="pagination">
						<li class="page-item"><a class="page-link" href="#">Trang</a></li>
					<?php 
						for($i = 1; $i <= $num_page; $i++)
						{
					 ?>	
						<li class="page-item"><a class="page-link" href="admin.php?controller=order&p=<?php echo $i; ?>"><?php echo $i; ?></a></li>
					<?php } ?>
					</ul>
				</div>
			</div>
		</div>
		<!-- end card -->
	</div>
</div>