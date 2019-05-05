<div class="row justify-content-center">
	<div class="col-md-12">
		<!-- card -->
		<div style="margin:15px 0px">
			<a href="admin.php?controller=add_edit_probanner&act=add" class="btn btn-primary">Add</a>
		</div>
		<div class="card border-primary">
			<div class="card card-header bg-primary text-white" style="padding:7px !important;">Login</div>
				<div class="card-body">
				<!-- table -->
				<table class="table table-hover table-bordered">
					<tr>
						<th style="width: 120px;">Tên Ảnh</th>
						<th style="width: 120px;">Ảnh Bìa Dưới</th>
						<th style="width: 150px;">Chức năng</th>
					</tr>
					<?php 
						$probanner = $this->model->get_all("select * from tbl_probanner");
						foreach ($probanner as $rows):
					 ?>
					<tr>
						<td><?php echo $rows->c_name; ?></td><td><img src="public/upload/probanner/<?php echo $rows->c_img; ?>"></td> <td><a href="admin.php?controller=add_edit_probanner&act=edit&id=<?php echo $rows->pk_probanner_id; ?>">Sửa</a> <a href="admin.php?controller=add_edit_probanner&act=delete&id=<?php echo $rows->pk_probanner_id; ?>">Xóa</a> </td>
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
						<li class="page-item"><a class="page-link" href="admin.php?controller=probanner&p=<?php echo $i; ?>"><?php echo $i; ?></a></li>
					<?php } ?>
					</ul>
				</div>
			</div>
		</div>
		<!-- end card -->
	</div>
</div>