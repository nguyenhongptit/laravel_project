<div class="row justify-content-center">
	<div class="col-md-12">
		<!-- card -->
		<div style="margin:15px 0px">
			<a href="admin.php?controller=add_edit_product&act=add" class="btn btn-primary">Add</a>
		</div>
		<div class="card border-primary">
			<div class="card card-header bg-primary text-white" style="padding:7px !important;">Login</div>
				<div class="card-body">
				<!-- table -->
				<table class="table table-hover table-bordered">
					<tr>
						<th style="width: 100px;">Ảnh</th>
						<th style="text-align: center;">Tiêu đề</th>
						
						<th style="text-align: center;">Giới thiệu</th>
						<th style="width: 80px;">Danh mục</th>
						
						<th style="width: 70px;">Số mua</th>
						<th>Giá/Giảm giá</th>
						<th style="width: 110px;"></th>
					</tr>
				<?php 
					foreach($arr as $rows)
					{
				 ?>
					<tr>
						<td>
<?php if(file_exists("public/upload/product/".$rows->c_img)) { ?>
<img src="public/upload/product/<?php echo $rows->c_img; ?>" style="width: 100px;">
<?php } ?>
						
						<td style="text-align: left; width: 100px;"><?php echo $rows->c_name; ?></td>

						
						<td style="text-align: left; ">
						<?php echo $rows->c_description; ?>
						</td>
						
						<td style='text-align: center;'>
							<?php $category = $this->model->get_a_record("select c_name from tbl_category_product where pk_category_product_id=".$rows->fk_category_product_id); 
							echo isset($category->c_name)?$category->c_name:"";
							?>

						</td>
						<td style="text-align: center; width: 70px;">
						<?php echo $rows->c_count?>
						
						</td>
						<td><?php echo $rows->c_price."/".$rows->c_sale; ?></td>
						<td style="text-align: center; width: 70px;">
							<a href="admin.php?controller=add_edit_product&act=edit&id=<?php echo $rows->pk_product_id;?>">
         						 Edit
       						 </a>
							
&nbsp;&nbsp;
<a onclick="return window.confirm('Are you sure?');" href="admin.php?controller=product&act=delete&id=<?php echo $rows->pk_product_id; ?>">Delete</a>
						</td>
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
						<li class="page-item"><a class="page-link" href="admin.php?controller=product&p=<?php echo $i; ?>"><?php echo $i; ?></a></li>
					<?php } ?>
					</ul>
				</div>
			</div>
		</div>
		<!-- end card -->
	</div>
</div>