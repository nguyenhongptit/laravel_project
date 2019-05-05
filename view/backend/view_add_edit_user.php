<div class="row justify-content-center">
	<div class="col-md-12">
		<!-- card -->		
		<div class="card  border-primary">
			<div class="card card-header bg-primary text-white">Add edit user</div>
			<div class="card-body">
				<form method="post" action="<?php echo $form_action; ?>">
					<!-- form group -->
					<div class="form-group">
						<div class="row">
							<div class="col-md-2 text-right">Full name</div>
							<div class="col-md-10">
								<input type="text" name="c_name" value="<?php echo isset($arr->c_name)?$arr->c_name:""; ?>" class="form-control">
							</div>
						</div>
					</div>
					<!-- end form group -->
					<!-- form group -->
					<div class="form-group">
						<div class="row">
							<div class="col-md-2 text-right">Email</div>
							<div class="col-md-10">
								<input <?php if(isset($arr->c_email)) { ?> disabled <?php } ?> required type="email" name="c_email" value="<?php echo isset($arr->c_email)?$arr->c_email:""; ?>" class="form-control">
							</div>
						</div>
					</div>
					<!-- end form group -->
					<!-- form group -->
					<div class="form-group">
						<div class="row">
							<div class="col-md-2 text-right">Password</div>
							<div class="col-md-10">
<input type="password" name="c_password" <?php if(isset($arr->c_email)) { ?> placeholder="Nhập vào password mới nếu muốn đổi password" <?php }else { ?> required <?php } ?> class="form-control">
							</div>
						</div>
					</div>
					<!-- end form group -->
					<div class="form-group">
						<div class="row">
							<div class="col-md-2 text-right"></div>
							<div class="col-md-10">
	<input type="checkbox" <?php echo isset($arr->admin)&&$arr->admin==1 ? "checked":""; ?> name="set_admin"> Xét ADMIN
							</div>
						</div>
					</div>
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