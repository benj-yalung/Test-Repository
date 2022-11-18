<?php
	$title = "My Course Progress";
	$bg = 0;
	$id = 1;
?>

	<?php include_once ('header.php'); ?>

	<main class="container my-5">
		<div class="row">
			<hr class="border border-default border-2 opacity-100" />
			<h5 class="my-3">My Profile</h5>
			<div class="col-md-3">
				<ul class="list-group list-group-flush rounded p-3">
					<li class="list-group-item bg-light border-0"><a href="#" class="text-decoration-none text-primary fw-bold">Completed Courses</a></li>
					<li class="list-group-item bg-light border-0"><a href="#" class="text-decoration-none text-dark fw-bold">Settings</a></li>
					<li class="list-group-item bg-light border-0"><a href="#" class="text-decoration-none text-dark fw-bold">Biling</a></li>
					<li class="list-group-item bg-light border-0"><a href="#" class="text-decoration-none text-dark fw-bold">Change Password</a></li>
					<li class="list-group-item bg-light border-0"><a href="#" class="text-decoration-none text-dark fw-bold">Log Out</a></li>
				</ul>
			</div>
			<div class="col-md-9">
				<div class="bg-gradient-tpa p-4 d-flex align-items-end">
					<img src="https://github.com/mdo.png" alt="mdo" width="200" height="200" class="rounded-circle" />
					<button type="button" class="btn btn-sm btn-light rounded-pill">Change Photo</button>
				</div>
				<div class="bg-light p-4">
					<div class="row">
						<div class="col-md-6">
							<div class="mb-3">
								<label class="form-label">Full Name</label>
								<input type="text" class="form-control rounded-pill" placeholder="Natisha Wolf" />
							</div>
						</div>
						<div class="col-md-6">
							<div class="mb-3">
								<label class="form-label">Email Address</label>
								<input type="text" class="form-control rounded-pill" placeholder="natisha@cloudseamediasolution.com" />
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<div class="mb-3">
								<label class="form-label">Preferred Language</label>
								<input type="text" class="form-control rounded-pill" placeholder="English" />
							</div>
						</div>
						<div class="col-md-6">
							<div class="mb-3">
								<label class="form-label">Field of Study</label>
								<input type="text" class="form-control rounded-pill" placeholder="Business Management" />
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<div class="mb-3">
								<label class="form-label">Birthday</label>
								<input type="text" class="form-control rounded-pill" placeholder="05/21/1999" />
							</div>
						</div>
						<div class="col-md-6">
							<div class="mb-3">
								<label class="form-label">About Me</label>
								<textarea class="form-control rounded-pill"></textarea>
							</div>
						</div>
					</div>
					<p class="text-end"><button type="button" class="btn btn-sm btn-primary rounded-pill ">Update Info</button></p>
				</div>
			</div>
		</div>
	</main>

	<?php include_once ('footer.php'); ?>