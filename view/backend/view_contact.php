<div class="row justify-content-center">
	<div class="col-md-12">
		<!-- card -->
		<div style="margin:15px 0px">
			
		</div>
		<div class="card border-primary">
			<div class="card card-header bg-primary text-white" style="padding:7px !important;">Liên Hệ</div>
				<div class="card-body">
				<!-- table -->
				<table class="table table-hover table-bordered">
					<tr>
						<th style="width: 120px;">STT</th>
						<th style="width: 120px;">Tên</th>
						<th style="width: 150px;">Email</th>
						<th>Thời Gian</th>
						<th>Nội dung liên hệ</th>
						<th></th>
					</tr>
					<?php 
						$contact = $this->model->get_all("select * from tbl_contact");
						foreach ($contact as $rows):
					 ?>
					<tr>
						<td><?php echo $rows->pk_contact_id; ?></td>
						<td><?php echo $rows->c_name; ?></td> 
						<td><?php echo $rows->c_email; ?></td>
						<td><?php
						$date = date_create($rows->c_time);
						 echo date_format($date, "d/m/Y") ?></td>
						<td><?php echo $rows->c_content; ?></td>

						<td> <a href="admin.php?controller=contact&act=delete&id=<?php echo $rows->pk_contact_id; ?>"></a> </td>
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
						<li class="page-item"><a class="page-link" href="admin.php?controller=contact&p=<?php echo $i; ?>"><?php echo $i; ?></a></li>
					<?php } ?>
					</ul>
				</div>
			</div>
		</div>
		<!-- end card -->
	</div>
</div>