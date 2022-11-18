<?php
	$title = "Enrolled Courses";
	$bg = 0;
	$id = 1;
?>

	<?php include_once ('header.php'); ?>

	<main class="container my-5">
		<div class="row mb-3">
			<ul class="list-inline d-flex justify-content-end align-items-center">
				<li class="list-inline-item"><i class="fa-solid fa-sliders"></i> Filter</li>
				<li class="list-inline-item">
					<div class="input-group">
						<input type="text" class="form-control rounded-pill" placeholder="Seatch Course" style="padding-right: 3rem;" />
						<span class="input-group-text bg-transparent border-0" style="margin-left: -3rem; z-index: 2;"><i class="fa-solid fa-magnifying-glass"></i></span>
					</div>
				</li>
			</ul>
			<hr class="border border-default border-2 opacity-100" />
			<h5 class="my-3">Find Courses</h5>
			<div class="accordion accordion-flush" id="accordionFlushExample">
				<div class="accordion-item">
					<h2 class="accordion-header" id="flush-headingOne">
						<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
							Computing
						</button>
					</h2>
					<div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
						<div class="accordion-body">
							<table>
								<thead>
									<tr>
										<td style="width:100px;"></td>
										<td></td>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td class="text-end pe-3 py-1"><span class="badge bg-danger rounded-pill">Full</span></td>
										<td><a href="#">English 1</a></td>
									</tr>
									<tr>
										<td class="text-end pe-3 py-1"><span class="badge bg-warning rounded-pill">Unavailable</span></td>
										<td><a href="#">English 1</a></td>
									</tr>
									<tr>
										<td class="text-end pe-3 py-1"><span class="badge bg-success rounded-pill">Available</span></td>
										<td><a href="#">English 1</a></td>
									</tr>
									<tr>
										<td class="text-end pe-3 py-1"><span class="badge bg-success rounded-pill">Available</span></td>
										<td><a href="#">English 1</a></td>
									</tr>
									<tr>
										<td class="text-end pe-3 py-1"><span class="badge bg-success rounded-pill">Available</span></td>
										<td><a href="#">English 1</a></td>
									</tr>
									<tr>
										<td class="text-end pe-3 py-1"><span class="badge bg-danger rounded-pill">Full</span></td>
										<td><a href="#">English 1</a></td>
									</tr>
									<tr>
										<td class="text-end pe-3 py-1"><span class="badge bg-success rounded-pill">Available</span></td>
										<td><a href="#">English 1</a></td>
									</tr>
									<tr>
										<td class="text-end pe-3 py-1"><span class="badge bg-danger rounded-pill">Full</span></td>
										<td><a href="#">English 1</a></td>
									</tr>
									<tr>
										<td class="text-end pe-3 py-1"><span class="badge bg-warning rounded-pill">Unavailable</span></td>
										<td><a href="#">English 1</a></td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
				<div class="accordion-item">
					<h2 class="accordion-header" id="flush-headingTwo">
						<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
							Economics
						</button>
					</h2>
					<div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
						<div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the second item's accordion body. Let's imagine this being filled with some actual content.</div>
					</div>
				</div>
				<div class="accordion-item">
					<h2 class="accordion-header" id="flush-headingThree">
						<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
							English
						</button>
					</h2>
					<div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
						<div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the third item's accordion body. Nothing more exciting happening here in terms of content, but just filling up the space to make it look, at least at first glance, a bit more representative of how this would look in a real-world application.</div>
					</div>
				</div>
				<div class="accordion-item">
					<h2 class="accordion-header" id="flush-headingFour">
						<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
							Physical Education
						</button>
					</h2>
					<div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
						<div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the third item's accordion body. Nothing more exciting happening here in terms of content, but just filling up the space to make it look, at least at first glance, a bit more representative of how this would look in a real-world application.</div>
					</div>
				</div>
				<div class="accordion-item">
					<h2 class="accordion-header" id="flush-headingFive">
						<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
							Fine Arts
						</button>
					</h2>
					<div id="flush-collapseFive" class="accordion-collapse collapse" aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlushExample">
						<div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the third item's accordion body. Nothing more exciting happening here in terms of content, but just filling up the space to make it look, at least at first glance, a bit more representative of how this would look in a real-world application.</div>
					</div>
				</div>
				<div class="accordion-item">
					<h2 class="accordion-header" id="flush-headingSix">
						<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSix" aria-expanded="false" aria-controls="flush-collapseSix">
							Health
						</button>
					</h2>
					<div id="flush-collapseSix" class="accordion-collapse collapse" aria-labelledby="flush-headingSix" data-bs-parent="#accordionFlushExample">
						<div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the third item's accordion body. Nothing more exciting happening here in terms of content, but just filling up the space to make it look, at least at first glance, a bit more representative of how this would look in a real-world application.</div>
					</div>
				</div>
				<div class="accordion-item">
					<h2 class="accordion-header" id="flush-headingSeven">
						<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSeven" aria-expanded="false" aria-controls="flush-collapseSeven">
							Humanities
						</button>
					</h2>
					<div id="flush-collapseSeven" class="accordion-collapse collapse" aria-labelledby="flush-headingSeven" data-bs-parent="#accordionFlushExample">
						<div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the third item's accordion body. Nothing more exciting happening here in terms of content, but just filling up the space to make it look, at least at first glance, a bit more representative of how this would look in a real-world application.</div>
					</div>
				</div>
				<div class="accordion-item">
					<h2 class="accordion-header" id="flush-headingEight">
						<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseEight" aria-expanded="false" aria-controls="flush-collapseEight">
							Life Skills
						</button>
					</h2>
					<div id="flush-collapseEight" class="accordion-collapse collapse" aria-labelledby="flush-headingEight" data-bs-parent="#accordionFlushExample">
						<div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the third item's accordion body. Nothing more exciting happening here in terms of content, but just filling up the space to make it look, at least at first glance, a bit more representative of how this would look in a real-world application.</div>
					</div>
				</div>
				<div class="accordion-item">
					<h2 class="accordion-header" id="flush-headingNine">
						<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseNine" aria-expanded="false" aria-controls="flush-collapseNine">
							Math
						</button>
					</h2>
					<div id="flush-collapseNine" class="accordion-collapse collapse" aria-labelledby="flush-headingNine" data-bs-parent="#accordionFlushExample">
						<div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the third item's accordion body. Nothing more exciting happening here in terms of content, but just filling up the space to make it look, at least at first glance, a bit more representative of how this would look in a real-world application.</div>
					</div>
				</div>
			</div>
		</div>
	</main>

	<?php include_once ('footer.php'); ?>