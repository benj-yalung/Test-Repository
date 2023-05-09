<!doctype html>
<html lang="en" class="h-100">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="">
		<meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
		<meta name="generator" content="Hugo 0.104.2">
		<title><?php echo $title; ?></title>

		<!-- Core Files -->
		<link rel="canonical" href="//getbootstrap.com/docs/5.2/examples/navbar-static/">
		<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
		<link rel="stylesheet" href="//fonts.googleapis.com/css2?family=Bebas+Neue&display=swap">
		<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
		
		<style>
			body {
				padding-top: 126px;
			}

			@font-face {
				font-family: Honofly;
				src: url(font/honofly-font/Honofly-0WYV4.otf);
			}
			.font-bebas {
				font-family: 'Bebas Neue', cursive;
			}
			.font-honofly {
				font-family: 'Honofly', sans-serif;
			}

			.bg-gradient-tpa {
				background: rgb(255,180,23);
				background: linear-gradient(90deg, rgba(255,180,23,1) 0%, rgba(255,146,115,1) 100%);
			}
		</style>
	</head>
	<body class="d-flex flex-column h-100 <?php echo $bg == 1 ? 'bg-gradient-tpa':''; ?>">
	
	<?php  
		if ($id == 0) {
			echo '<nav class="navbar navbar-expand-md navbar-light fixed-top bg-light">
				<div class="container-fluid">
					<a class="navbar-brand" href="index.php"><img src="img/logo.png" class="img img-fluid" style="height: 100px;" /></a>
					<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse" id="navbarCollapse">
						<ul class="navbar-nav me-auto mb-2 mb-md-0">
							<li class="nav-item">
								<a class="nav-link" aria-current="page" href="./new-tpa-designs/index.php">Home</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#">About</a>
							</li>
							<li class="nav-item">
								<a class="nav-link">FAQ</a>
							</li>
						</ul>
						<ul class="navbar-nav ms-auto mb-2 mb-md-0">
							<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
									Language: Eng
								</a>
								<ul class="dropdown-menu dropdown-menu-end">
									<li><a class="dropdown-item" href="#">Action</a></li>
									<li><a class="dropdown-item" href="#">Another action</a></li>
									<li><a class="dropdown-item" href="#">Something else here</a></li>
								</ul>
							</li>
							<li class="nav-item"><a href="dashboard.php" class="nav-link"><i class="fa fa-arrow-right-to-bracket"></i> Login</a></li>
							<li class="nav-item"><a href="create.php" class="nav-link"><i class="fa-solid fa-user-plus"></i> Create Account</a></li>
						</ul>
					</div>
				</div>
			</nav>';
		} else {
			echo '<nav class="navbar navbar-expand-md navbar-light fixed-top bg-light">
				<div class="container-fluid">
					<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse" id="navbarCollapse">
						<ul class="navbar-nav me-auto mb-2 mb-md-0">
							<li class="nav-item"><a class="nav-link" aria-current="page" href="index.php">Home</a></li>
							<li class="nav-item"><a class="nav-link" href="#">My Courses</a></li>
							<li class="nav-item"><a class="nav-link">Learning</a></li>
							<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
									Learning
								</a>
								<ul class="dropdown-menu dropdown-menu-end">
									<li><a class="dropdown-item" href="#">Search for a Course</a></li>
									<li><a class="dropdown-item" href="#">Search for a Objective</a></li>
								</ul>
							</li>
							<li class="nav-item"><a class="nav-link">My Notes</a></li>
						</ul>
						<a class="navbar-brand" href="index.php"><img src="img/logo.png" class="img img-fluid" style="height: 100px;" /></a>
						<ul class="navbar-nav ms-auto mb-2 mb-md-0">
							<li class="nav-item"><a href="#" class="nav-link">Auditorium</a></li>
							<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
									Language: Eng
								</a>
								<ul class="dropdown-menu dropdown-menu-end">
									<li><a class="dropdown-item" href="#">Action</a></li>
									<li><a class="dropdown-item" href="#">Another action</a></li>
									<li><a class="dropdown-item" href="#">Something else here</a></li>
								</ul>
							</li>
							<div class="dropdown text-end">
								<a href="#" class="d-block link-dark text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
									<img src="https://github.com/mdo.png" alt="mdo" width="32" height="32" class="rounded-circle">
								</a>
								<ul class="dropdown-menu text-small dropdown-menu-end" style="">
									<li><a class="dropdown-item" href="#">My Profile</a></li>
									<li><a class="dropdown-item" href="#">Notification</a></li>
									<li><a class="dropdown-item" href="#">Settings</a></li>
									<li><a class="dropdown-item" href="#">Help</a></li>
									<li><a class="dropdown-item" href="#">Logout</a></li>
								</ul>
							</div>
						</ul>
					</div>
				</div>
			</nav>';
		}
	?>
	
