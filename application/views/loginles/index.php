<?php
echo form_open('masuk/loginles/proses_login');
?>
<br>
<br>
<br>
<div class="container gy-5">
	<div class="row mt-5">
		<div class="col-md-12">
			<div class="row">
				<div class="col-md-6 mx-auto">

					<body style="background-color: cornflowerblue">
						<div style="color:white">
							<div class="card-header" style="background-color:teal ; border-radius: 10px">
								<center>
									<h3 class="mb-8">Login Smart Class</h3>
								</center>
							</div>
							<div class="card-body">
								<form class="form" action="login/proses_login" role="form" autocomplete="off" id="formlogin" method="POST">
									<div class="form-group">
										<label for="username">Username</label>
										<input type="text" class="form-control form-control-lg rounded-0" name="username" id="username" required="">
										<div class="invalid-feedback">Oops, you missed this one</div>
									</div>
									<div class="form-group">
										<label>Password</label>
										<input type="password" class="form-control form-control-lg rounded-0" name="password" id="password" required="" autocomplete="new-password">
										<div class="invalid-feedback">Enter your password too!</div>
									</div>
									<a class='btn btn-success' href="<?= base_url(); ?>masuk/loginles/tambah">
										Register
									</a>
									<a class='btn btn-success' href="<?= base_url(); ?>index/index">
										Keluar
									</a>
									<button type="submit" class="btn btn-success btn-lg float-right" id="btnlogin">Login</button>

								</form>
							</div>

						</div>

				</div>
			</div>

		</div>

	</div>

</div>
<?php
form_close();
?>