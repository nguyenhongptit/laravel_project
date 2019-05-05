<div class="row justify-content-center">
	<div class="col-md-12">
		<!-- card -->
		<div style="margin:15px 0px">
			<a href="admin.php?controller=add_edit_category_product&act=add" class="btn btn-primary">Add</a>
		</div>
		<div class="card border-primary">
			<div class="card card-header bg-primary text-white" style="padding:7px !important;">Login</div>
				<div class="card-body">
				<!-- table -->
				<table class="table table-hover table-bordered">
					<tr>
						<th style="width: 120px;">STT</th>
						<th style="width: 120px;">Sản phẩm</th>
						<th style="width: 150px;">Chức năng</th>
					</tr>
					<?php 
						$category = $this->model->get_all("select * from tbl_category_product");
						foreach ($category as $row):
					 ?>
					<tr>
						<td><?php echo isset($row->pk_category_product_id)?$row->pk_category_product_id:""; ?></td><td><?php echo isset($row->c_name)?$row->c_name:""; ?></td> <td><a href="admin.php?controller=add_edit_category_product&act=edit&id=<?php echo $row->pk_category_product_id; ?>">Sửa</a> <a href="admin.php?controller=add_edit_category_product&act=delete&id=<?php echo $row->pk_category_product_id; ?>">Xóa</a> </td>
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
						<li class="page-item"><a class="page-link" href="admin.php?controller=product&p=<?php echo $i; ?>"><?php echo $i; ?></a></li>
					<?php } ?>
					</ul>
				</div>
			</div>
		</div>
		<!-- end card -->
	</div>
</div>