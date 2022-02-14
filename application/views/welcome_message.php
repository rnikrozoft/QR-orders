<?php include('templates/header.php') ?>

<body>
	<main class="main-content  mt-0">
		<section>
			<div class="page-header min-vh-100">
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-xl-4 col-lg-5 col-md-7 d-flex flex-column mx-lg-0 mx-auto">
							<div class="card card-plain">
								<div class="card-header pb-0 text-start">
									<h4 class="font-weight-bolder">เข้าสู่ระบบ</h4>
									<p class="mb-0">โปรดกรอกชื่อผู้ใช้และรหัสผ่าน เพื่อเข้าสู่ระบบ</p>
								</div>
								<div class="card-body">
									<form role="form">
										<div class="mb-3">
											<input type="text" class="form-control form-control-lg" placeholder="ชื่อผู้ใช้" aria-label="Username">
										</div>
										<div class="mb-3">
											<input type="password" class="form-control form-control-lg" placeholder="รหัสผ่าน" aria-label="Password">
										</div>
										<div class="form-check form-switch">
											<input class="form-check-input" type="checkbox" id="rememberMe">
											<label class="form-check-label" for="rememberMe">Remember me</label>
										</div>
										<div class="text-center">
											<!-- <button type="button" class="btn btn-lg btn-primary btn-lg w-100 mt-4 mb-0">เข้าสู่ระบบ</button> -->
											<a href="<?php echo base_url('/admins'); ?>" class="btn btn-lg btn-primary btn-lg w-100 mt-4 mb-0">เข้าสู่ระบบ</a>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	</main>

	<?php include('templates/footer-script.php'); ?>
</body>

</html>