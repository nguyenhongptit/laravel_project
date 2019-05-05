<div class="row justify-content-center">
	<div class="col-md-12">
		<!-- card -->
		<div style="margin:15px 0px">
			<a href="admin.php?controller=add_edit_slider&act=add" class="btn btn-primary">Add</a>
		</div>
		<div class="card border-primary">
			<div class="card card-header bg-primary text-white" style="padding:7px !important;">Login</div>
				<div class="card-body">
				<!-- table -->
				<table class="table table-hover table-bordered">
					<tr>
						<th style="width: 100px;" >Ảnh </th>
						<th style="width: 50px;">Tiêu đề</th>
						<th style="width: 150px;">Tên</th>

						<th style="width: 100px ;">Liên kết</th>
						
						<th style="width: 50px;">Nội dung</th>
							<th style="width: 50px;">Thoi gian</th>
						
						
						<th style="width: 100px;"></th>
					</tr>
					<?php 
						$slider = $this->model->get_all("select * from tbl_slider");
						foreach ($slider as $rows):
					 ?>
					<tr>
						<td><img style="width: 50%;" src="public/upload/slider/<?php echo $rows->c_img; ?>"></td>
						<td><?php echo $rows->c_title; ?></td>
						<td><?php echo $rows->c_name; ?></td>
						<td><?php echo $rows->c_link; ?></td>
						<td><?php echo $rows->c_des; ?></td> 
						<td><?php echo $rows->c_time; ?></td> 
						

						<td><a href="admin.php?controller=add_edit_slider&act=edit&id=<?php echo $rows->pk_slider_id; ?>">Sửa</a> <a href="admin.php?controller=add_edit_slider&act=delete&id=<?php echo $rows->pk_slider_id; ?>">Xóa</a> </td>
					</tr>
					<?php endforeach; ?>
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
						<li class="page-item"><a class="page-link" href="admin.php?controller=slider&p=<?php echo $i; ?>"><?php echo $i; ?></a></li>
					<?php } ?>
					</ul>
				</div>
			</div>
		</div>
		<!-- end card -->
	</div>
</div>