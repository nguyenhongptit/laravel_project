<div class="row justify-content-center">
	<div class="col-md-12">
		<!-- card -->		
		<div class="card  border-primary">
			<div class="card card-header bg-primary text-white">Add edit news</div>
			<div class="card-body">
			<!-- neu muon upload duoc file, phai co thuoc tinh enctype="multipart/form-data" -->
				<form method="post" enctype="multipart/form-data" action="<?php echo $form_action; ?>">
					<!-- form group -->
					<div class="form-group">
						<div class="row">
							<div class="col-md-2 text-right">Tiêu đề Slider</div>
							<div class="col-md-10">
<input type="text" name="c_title" value="<?php echo isset($arr->c_title)?$arr->c_title:""; ?>" required class="form-control">
							</div>
						</div>
					</div>
					<!-- end form group -->
					<!-- form group -->
					<div class="form-group">
						<div class="row">
							<div class="col-md-2 text-right">Tên ảnh Slider</div>
							<div class="col-md-10">
<input type="text" name="c_name" value="<?php echo isset($arr->c_name)?$arr->c_name:""; ?>" required class="form-control">
							</div>
						</div>
					</div>
					<!-- end form group -->
					<!-- form group -->
					<div class="form-group">
						<div class="row">
							<div class="col-md-2 text-right">Giới thiệu</div>
							<div class="col-md-10">
<input type="text" name="c_des" value="<?php echo isset($arr->c_des)?$arr->c_des:""; ?>" required class="form-control">
							</div>
						</div>
					</div>
					<!-- end form group -->
					<!-- form group -->
					<div class="form-group">
						<div class="row">
							<div class="col-md-2 text-right">Liên kết</div>
							<div class="col-md-10">
<input type="text" name="c_link" value="<?php echo isset($arr->c_link)?$arr->c_link:""; ?>" required class="form-control">
							</div>
						</div>
					</div>
					<!-- end form group -->
					<!-- form group -->
					<div class="form-group">
						<div class="row">
							<div class="col-md-2 text-right">Ảnh</div>
							<div class="col-md-10">
							<input type="file" name="c_img">
							</div>
						</div>
					</div>
										<div class="form-group">
						<div class="row">
							<div class="col-md-2 text-right">Thoi gian Slider</div>
							<div class="col-md-1">
<input type="text" name="c_time" value="<?php echo isset($arr->c_time)?$arr->c_time:""; ?>" required class="form-control">
						<br>
							</div>
						</div>
					<!-- end form group -->
					<!-- form group -->
					<div class="form-group">
						<div class="row">
							<div class="col-md-2 text-right"></div>
							<div class="col-md-10">
								<input type="submit" value="Process" class="btn btn-primary"> <input type="reset" value="Reset" class="btn btn-danger">
							</div>
						</div>
					</div>
					<!-- end form group -->
				</form>
			</div>
		</div>
		<!-- end card -->
	</div>
</div>