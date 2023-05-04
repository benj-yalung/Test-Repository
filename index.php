<?php
	$title = "Top Pro Academy";
	$bg = 0;
	$id = 0;
?>

	<?php include_once ('header.php'); ?>

	<main class="container my-auto">
		<div class="row shadow-lg my-5">
			<div class="col-md-6 bg-light p-5">
				<form>
					<h4><strong>Welcome Back!</strong></h4>
					<h3 class="fw-light mb-3">Please Login To Your Account</h3>
					<a href="#" class="text-decoration-none">
						<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-google" viewBox="0 0 16 16">
							<path d="M15.545 6.558a9.42 9.42 0 0 1 .139 1.626c0 2.434-.87 4.492-2.384 5.885h.002C11.978 15.292 10.158 16 8 16A8 8 0 1 1 8 0a7.689 7.689 0 0 1 5.352 2.082l-2.284 2.284A4.347 4.347 0 0 0 8 3.166c-2.087 0-3.86 1.408-4.492 3.304a4.792 4.792 0 0 0 0 3.063h.003c.635 1.893 2.405 3.301 4.492 3.301 1.078 0 2.004-.276 2.722-.764h-.003a3.702 3.702 0 0 0 1.599-2.431H8v-3.08h7.545z"/>
						</svg>
						<small class="text-dark">Login With Google</small>
					</a>
					<div class="mt-3 mb-3">
						<label class="form-label">Email/Username</label>
						<input type="text" class="form-control rounded-pill" />
					</div>
					<div class="mb-3">
						<label class="form-label">Password</label>
						<input type="password" class="form-control rounded-pill" />
					</div>
					<div class="row mb-3">
						<div class="col-md-6">
							<a href="#" class="text-decoration-none">Forgot you password?</a>
						</div>
						<div class="col-md-6">
							<div class="form-check">
								<input class="form-check-input" type="checkbox" />
								<label class="form-check-label">
									Remember Me
								</label>
							</div>
						</div>
					</div>
					<button type="button" class="btn btn-sm bg-gradient-tpa text-white">Login <i class="fa fa-arrow-right-to-bracket"></i></button>
					<button type="button" class="btn btn-sm btn-outline-secondary">Sign Up</button>
				</form>
			</div>
			<div class="col-md-6 bg-gradient-tpa text-center text-white p-5 d-flex flex-column justify-content-center">
				<p class="display-6 fw-bold font-honofly">Get Started!</p>
				<p class="font-bebas m-0" style="font-size: 80px; line-height: 1;">EXCEL IN YOUR</p>
				<p class="font-bebas" style="font-size: 150px; line-height: 0.7;">CAREER</p>
				<hr class="border border-light border-2 opacity-100 mx-auto" style="width: 200px;" />
				<p>CREATE YOUR OWN STUDY RESOURCES AND UTILIZE OUR PERSONALIZED TOOLS TO HELP YOU LEARN!</p>
			</div>
		</div>
	</main>

	<?php include_once ('footer.php'); ?>
