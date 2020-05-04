<!DOCTYPE html>

<html lang="en">

<head>
	<meta charset="utf-8" />
	<title>YummyFoods - Admin</title>
	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
	<!--     Fonts and icons     -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
	<!-- CSS Files -->
	<link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
	<link href="../assets/css/light-bootstrap-dashboard.css?v=2.0.0 " rel="stylesheet" />

</head>

<body>
	<div class="wrapper">
		<div class="sidebar"  data-color="azure">
			<div class="sidebar-wrapper">
				<div class="logo">
					<a href="#" class="simple-text">
						YummyFoods
					</a>
				</div>
				<ul class="nav">
					<li>
						<a class="nav-link" href="dashboard.php">
							<i class="nc-icon nc-chart-pie-35"></i>
							<p>Dashboard</p>
						</a>
					</li>
					<li class="nav-item active">
						<a class="nav-link" href="edit_menu.php">
							<i class="nc-icon nc-circle-09"></i>
							<p>Edit Menu</p>
						</a>
					</li>
					<li>
						<a class="nav-link" href="orders.php">
							<i class="nc-icon nc-notes"></i>
							<p>Orders</p>
						</a>
					</li>
					<li>
						<a class="nav-link" href="reports.php">
							<i class="nc-icon nc-paper-2"></i>
							<p>Reports</p>
						</a>
					</li>
					
				</ul>
			</div>
		</div>
		<div class="main-panel">
			<!-- Navbar -->
			<nav class="navbar navbar-expand-lg " color-on-scroll="500">
				<div class="container-fluid">
					<a class="navbar-brand" href="dashboard.php"> Dashboard </a>
					<button href="" class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-bar burger-lines"></span>
						<span class="navbar-toggler-bar burger-lines"></span>
						<span class="navbar-toggler-bar burger-lines"></span>
					</button>
					<div class="collapse navbar-collapse justify-content-end" id="navigation">
						<ul class="nav navbar-nav mr-auto">
							<li class="nav-item">
								<a href="dashboard.html" class="nav-link" data-toggle="dropdown">
									<span class="d-lg-none">Dashboard</span>
								</a>
							</li>
							
						</ul>
						<ul class="navbar-nav ml-auto">
							<li class="nav-item">
								<a class="nav-link" href="#pablo">
									<span class="no-icon">Account</span>
								</a>
							</li>
							
							<li class="nav-item">
								<a class="nav-link" href="#pablo">
									<span class="no-icon">Log out</span>
								</a>
							</li>
						</ul>
					</div>
				</div>
			</nav>

			<!-- End Navbar -->

			<div class="content">
	<div class="row">
	<div class="col-md-4">
		<a href="">
		<div class="card ">
			<div class="card-header huge-text">
				<h4 class="card-title">Add Item</h4>
				<p class="card-category">Click here to add an item</p>
			</div>
			<div class="card-body text-danger text-center">
				<h1 class="huge-text" style="color: orange;">
					<i class="nc-icon nc-simple-add"></i>
				</h1>
			</div>
		</div>
		</a>
	</div>
	<div class="col-md-4">
		<a href="">
		<div class="card ">
			<div class="card-header huge-text">
				<h4 class="card-title">Update Item</h4>
			</div>
			<div class="card-body text-danger text-center">
				<h1 class="huge-text" style="color: red;">
					<i class="nc-icon nc-puzzle-10"></i>
				</h1>
			</div>
		</div>
		</a>
	</div>
	<div class="col-md-4">
		<a href="">
		<div class="card ">
			<div class="card-header huge-text">
				<h4 class="card-title">Delete Item</h4>
				<p class="card-category">Click here to delete an item</p>
			</div>
			<div class="card-body text-danger text-center">
				<h1 class="huge-text" style="color: green;">
					<i class="nc-icon nc-simple-delete"></i>
				</h1>
			</div>
		</div>
		</a>
	</div>
	</div>
</div>

	
</body>
<script src="../assets/js/core/jquery.3.2.1.min.js" type="text/javascript"></script>
<script src="../assets/js/core/popper.min.js" type="text/javascript"></script>
<script src="../assets/js/core/bootstrap.min.js" type="text/javascript"></script>
<script src="../assets/js/light-bootstrap-dashboard.js?v=2.0.0 " type="text/javascript"></script>
</html>
