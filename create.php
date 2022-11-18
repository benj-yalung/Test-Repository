<?php
	$title = "Create Account";
	$bg = 1;
	$id = 0;
?>

	<?php include_once ('header.php'); ?>

	<main class="container my-auto">
		<div class="row my-5">
			<div class="col-md-6 offset-md-3">
				<form>
					<div class="card">
						<div class="card-header d-flex justify-content-between bg-white align-items-center text-center px-3">
							<button type="button" class="btn btn-sm btn-outline-secondary"><i class="fa-solid fa-arrow-left"></i> Back</button>
							<h3>Create Account</h3>
							<button type="button" class="btn btn-sm btn-outline-secondary">Sign In <i class="fa-solid fa-arrow-right-to-bracket"></i></button>
						</div>
						<div class="card-body bg-light px-5">
							<div class="row">
								<div class="col-md-6 mb-3">
									<div class="d-flex align-items-center bg-white rounded-pill p-4">
										<div class="flex-shrink-0">
											<img src="img/logo-teacher.png" style="height: 50px;">
										</div>
										<div class="flex-grow-1 ms-3 text-center">
											Teacher or Administrator
										</div>
									</div>
								</div>
								<div class="col-md-6 mb-3">
									<div class="d-flex align-items-center bg-white rounded-pill p-4">
										<div class="flex-shrink-0">
											<img src="img/logo-student.png" style="height: 50px;">
										</div>
										<div class="flex-grow-1 ms-3 text-center">
											Student
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="mb-3">
										<label class="form-label">First Name</label>
										<input type="text" class="form-control rounded-pill" />
									</div>
								</div>
								<div class="col-md-6">
									<div class="mb-3">
										<label class="form-label">Last Name</label>
										<input type="text" class="form-control rounded-pill" />
									</div>
								</div>
							</div>
							<div class="mb-3">
								<label class="form-label">Username</label>
								<input type="text" class="form-control rounded-pill" />
							</div>
							<div class="mb-3">
								<label class="form-label">Email Address</label>
								<input type="email" class="form-control rounded-pill" />
							</div>
							<div class="mb-3">
								<label class="form-label">Preferred Language <i class="fa-solid fa-circle-question text-primary" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Tooltip on top"></i></label>
								<select class="form-select rounded-pill">
									<option>English</option>
									<option>Spanish</option>
								</select>
							</div>
							<div class="row mb-3">
								<div class="col-md-6">
									<div class="mb-3">
										<label class="form-label">Password <i class="fa-solid fa-circle-question text-primary" ></i></label>
										<input type="password" class="form-control rounded-pill" />
									</div>
								</div>
								<div class="col-md-6">
									<div class="mb-3">
										<label class="form-label">Re-enter Password <i class="fa-solid fa-circle-question text-primary" ></i></label>
										<input type="password" class="form-control rounded-pill" />
									</div>
								</div>
							</div>
							<p class="text-center"><button type="button" class="btn btn-sm bg-gradient-tpa text-white">Create Account</button></p>
						</div>
					</div>
				</form>
			</div>
		</div>
	</main>

	<?php include_once ('footer.php'); ?>