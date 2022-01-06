<?php
	require('connections.php');
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Add Hotel</title>
	<meta charset="utf-8" name="viewport" content="width=device-width,intial-scale=1">
	<link rel="stylesheet" type="text/css" href="../bootstrap-4.4.1/css/bootstrap.min.css">
  	<script type="text/javascript" src="../bootstrap-4.4.1/js/juqery_latest.js"></script>
  	<script type="text/javascript" src="../bootstrap-4.4.1/js/bootstrap.min.js"></script>
  	<style type="text/css">
  		#side_bar{
  			background-color: whitesmoke;
  			padding: 50px;
  			width: 300px;
  			height: 500px;
  		}
  	</style>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="index.php">Coxvoyage</a>
			</div>
			<font style="color: white"><span><weak>Welcome: <?php echo $_SESSION['name'];?></weak></span></font>
			<font style="color: white"><span><weak>Email: <?php echo $_SESSION['email'];?></weak></span></font>
			<ul class="nav navbar-nav navbar-right">
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" data-toggle="dropdown">My Profile</a>
					<div class="dropdown-menu">
						<a class="dropdown-item" href="view_profile.php">View Profile</a>
						<a class="dropdown-item" href="change_password.php">Change Password</a>
					</div>
				</li>
				<li class="nav-item"><a class="nav-link" href="logout.php">Logout</a></li>
			</ul>
		</div>
	</nav>
<nav class="navbar navbar-expand-lg navbar-light" style="background-color: lightsteelblue;">
	<div class="container-fluid">
		<ul class="nav navbar-nav navbar-center">
			<li class="nav-item">
				<a href="admin_dashboard.php" class="nav-link">Profile</a>
			</li>
			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" data-toggle="dropdown">Hotel</a>
				<div class="dropdown-menu">
					<a href="add_hotel.php" class="dropdown-item">Add New Hotel</a>
					<a href="manage_hotel.php" class="dropdown-item">Manage Hotel</a>
				</div>
			</li>
			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" data-toggle="dropdown">Category</a>
				<div class="dropdown-menu">
					<a href="add_cat.php" class="dropdown-item">Add New Category</a>
					<a href="" class="dropdown-item">Manage Category</a>
				</div>
			</li>
		</ul>
	</div>
</nav>
	<div class="row">
		<div class="col-md-4"></div>
		<div class="col-md-4">
			<br>
			<form action="" method="post">
				<div class="form-group">
					<label>Hotel Name:</label>
					<input type="text" name="name" class="form-control" required="">
				</div>
				<div class="form-group">
					<label>Phone Number:</label>
					<input type="number" name="phone" class="form-control" required="">
				</div>

				<div class="form-group">
					<label>Email:</label>
					<input type="text" name="email" class="form-control" required="">
				</div>

				<button class="btn btn-primary" name="add_hotel">Add Hotel</button>

			</form>
		</div>
		<div class="col-md-4"></div>
	</div>
</body>
</html>

<?php
	if(isset($_POST['add_hotel'])){
		$connection = mysqli_connect("127.0.0.1:3325","root","");
		$db = mysqli_select_db($connection,"travelling_assistant");
		$query = "insert into hotels values(null,'$_POST[name]','$_POST[phone]','$_POST[email]')";
		$query_run = mysqli_query($connection,$query);
	}
?>