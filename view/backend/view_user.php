<div class="row justify-content-center">
	<div class="col-md-12">
		<!-- card -->
		<div style="margin:15px 0px">
			<a href="admin.php?controller=add_edit_user&act=add" class="btn btn-primary">Add</a>
		</div>
		<div class="card border-primary">
			<div class="card card-header bg-primary text-white" style="padding:7px !important;">Login</div>
				<div class="card-body">
				<!-- table -->
				<table class="table table-hover table-bordered">
					<tr>
						<th style="width: 150px;">ID</th>
						<th style="width:250px;">Email</th>
						<th style="width:150px;"> Họ và tên</th>
						<th>Chức vụ</th>
						<th style="width: 110px;"></th>
					</tr>
					<tr>
						<?php 
						$user = $this->model->get_all("select * from tbl_user");

						foreach ($user as $rows):

						 ?>
						 <td> <?php echo $rows->pk_user_id; ?> </td>
						 <td><?php echo $rows->c_email; ?></td>
						 <td><?php echo $rows->c_name; ?></td>
						 <td><?php echo isset($rows->admin)&&$rows->admin==1?"Người quản trị":"Thành viên"; ?></td>
						<td style="text-align: center;">
<a href="admin.php?controller=add_edit_user&act=edit&id=<?php echo $rows->pk_user_id; ?>">Edit</a>&nbsp;&nbsp;
<a onclick="return window.confirm('Are you sure?');" href="admin.php?controller=user&act=delete&id=<?php echo $rows->pk_user_id; ?>">Delete</a>
						</td>
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
						<li class="page-item"><a class="page-link" href="admin.php?controller=user&p=<?php echo $i; ?>"><?php echo $i; ?></a></li>
					<?php } ?>
					</ul>
				</div>
			</div>
		</div>
		<!-- end card -->
	</div>
</div>