<?php
	$title = "My Course Progress";
	$bg = 0;
	$id = 1;
?>

	<?php include_once ('header.php'); ?>

	<main class="container my-5">
		<div class="row">
			<hr class="border border-default border-2 opacity-100" />
			<h6>Course</h6>
			<h5 class="my-3">Communication</h5>
			<div class="col-md-3">
				<ul class="list-group list-group-flush rounded p-3">
					<li class="list-group-item bg-light border-0"><a href="#" class="text-decoration-none text-primary fw-bold">Details</a></li>
					<li class="list-group-item bg-light border-0"><a href="#" class="text-decoration-none text-dark fw-bold">Syllabus</a></li>
					<li class="list-group-item bg-light border-0"><a href="#" class="text-decoration-none text-dark fw-bold">Activities</a></li>
					<li class="list-group-item bg-light border-0"><a href="#" class="text-decoration-none text-dark fw-bold">Learning Materials</a></li>
					<li class="list-group-item bg-light border-0"><a href="#" class="text-decoration-none text-dark fw-bold">My Progress</a></li>
					<li class="list-group-item bg-light border-0"><a href="#" class="text-decoration-none text-dark fw-bold">My Notes</a></li>
				</ul>
			</div>
			<div class="col-md-9">
				<div class="bg-warning p-4 mb-3">
					<div class="row d-flex justify-content-between align-items-center">
						<div class="col-md-4">
							<h4>Course</h4>
							<h3>Communication</h3>
						</div>
						<div class="col-md-4 d-flex align-items-end">
							<img src="https://github.com/mdo.png" alt="mdo" width="100" height="100" class="rounded-circle me-3" />
							<h5>
								<span class="text-primary">Group Class</span><br>
								<span class="text-default">with Tanya Ram</span>
							</h5>
						</div>
						<div class="col-md-4 text-end">
							<h5>
								Start Date: 10/12/22<br>
								10:00 AM - 11:00 AM
							</h5>

							<button type="button" class="btn btn-sm btn-success rounded-pill">Registered</button>
						</div>
					</div>
				</div>
				<p>
					<strong>Course Description</strong><br>

					Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
					dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex
					ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
					fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
					mollit anim id est laborum.
				</p>
				<p><strong>Course Objectives</strong></p>
				<ul>
					<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</li>
					<li>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</li>
					<li>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</li>
					<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</li>
				</ul>
			</div>
		</div>
	</main>

	<?php include_once ('footer.php'); ?>