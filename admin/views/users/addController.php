<div class="col-md-8 col-md-offset-2" style="margin: 50px 0px 0px 230px">
	<div class="panel panel-primary">
		<div class="panel-heading">Thêm người dùng</div>
		<div class="panel-body">


			<?php if(isset($_GET["err"]) && $_GET["err"] == "false") { ?>
				<div class="alert alert-danger">
					Nhập lại mật khẩu không đúng
				</div>
			<?php } ?>



			 <form action="index.php?controller=users/add&act=add" method="POST">
			 	<table class="table ">
			 	<tr>
			 		<td width="200px">Tên người dùng</td>
			 		<td>
			 			<input type="text" name="username" placeholder="Tên người dùng" class="form-control" required>
			 		</td>
			 	</tr>
			 	<tr>
			 		<td>Email</td>
			 		<td>
			 			<input type="email" name="email" placeholder="Email" class="form-control" required>
			 		</td>
			 	</tr>
			 	<tr>
			 		<td>Mật khẩu</td>
			 		<td>
			 			<input type="password" name="password1" placeholder="Mật khẩu" class="form-control" required>
			 		</td>
			 	</tr>
			 	<tr>
			 		<td>Nhập lại mật khẩu</td>
			 		<td>
			 			<input type="password" name="password2" placeholder="nhập lại mật khẩu" class="form-control" required>
			 		</td>
			 	</tr>
			 	<tr>
			 		<td></td>
			 		<td>
			 			<input type="submit" value="Tạo tài khoản" class="btn btn-primary">
			 		</td>
			 	</tr>
			 </table>
			 </form>
		</div>
	</div>
</div>