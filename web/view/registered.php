<?php include '../web/layout/header.php'; ?>
		<!--header-->
		<!--banner-->
		<div class="banner1">
			<div class="container">
				<h3><a href="index.php">Home</a> / <span>Đăng Ký</span></h3>
			</div>
		</div>
	<!--banner-->

	<!--content-->
		<div class="content">
				<!--login-->
			<div class="login">
		<div class="main-agileits">
				<div class="form-w3agile form1">
					<h3>Đăng Ký</h3>
					<form action="#" method="post">
						<div class="key">
							<i class="fa fa-user" aria-hidden="true"></i>
							<input  type="text" value="Username" name="Username" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Username';}" required="">
							<div class="clearfix"></div>
						</div>
						<div class="key">
							<i class="fa fa-envelope" aria-hidden="true"></i>
							<input  type="text" value="Email" name="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="">
							<div class="clearfix"></div>
						</div>
						<div class="key">
							<i class="fa fa-lock" aria-hidden="true"></i>
							<input  type="password" value="Password" name="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" required="">
							<div class="clearfix"></div>
						</div>
						<div class="key">
							<i class="fa fa-lock" aria-hidden="true"></i>
							<input  type="password" value="Confirm Password" name="Confirm Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Confirm Password';}" required="">
							<div class="clearfix"></div>
						</div>
						<input type="submit" value="Submit">
					</form>
				</div>
				
			</div>
		</div>
				<!--login-->
		</div>
		<!--content-->
		<!---footer--->
		<?php include '../web/layout/footer.php'; ?>