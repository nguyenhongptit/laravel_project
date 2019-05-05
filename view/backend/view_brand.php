<div class="row justify-content-center">
	<div class="col-md-12">
		<!-- card -->
		<div style="margin:15px 0px">
			<a href="admin.php?controller=add_edit_brand&act=add" class="btn btn-primary">Add</a>
		</div>
		<div class="card border-primary">
			<div class="card card-header bg-primary text-white" style="padding:7px !important;">Login</div>
				<div class="card-body">
				<!-- table -->
				<table class="table table-hover table-bordered">
					<tr>
						<th style="width: 120px;">Tên thương hiệu</th>
						<th style="width: 120px;">Ảnh Thương hiệu</th>
						<th style="width: 150px;">Chức năng</th>
					</tr>
					<?php 
						$brand = $this->model->get_all("select * from tbl_brand");
						foreach ($brand as $rows):
					 ?>
					<tr>
						<td><?php echo $rows->c_name; ?></td><td><img src="public/upload/brand/<?php echo $rows->c_img; ?>"></td> <td><a href="admin.php?controller=add_edit_brand&act=edit&id=<?php echo $rows->pk_brand_id; ?>">Sửa</a> <a href="admin.php?controller=add_edit_brand&act=delete&id=<?php echo $rows->pk_brand_id; ?>">Xóa</a> </td>
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
						<li class="page-item"><a class="page-link" href="admin.php?controller=brand&p=<?php echo $i; ?>"><?php echo $i; ?></a></li>
					<?php } ?>
					</ul>
				</div>
			</div>
		</div>
		<!-- end card -->
	</div>
</div>