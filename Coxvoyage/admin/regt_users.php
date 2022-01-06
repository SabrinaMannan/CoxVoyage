<?php
	require('connections.php');
	session_start();
	$connection = mysqli_connect("127.0.0.1:3325","root","");
	$db = mysqli_select_db($connection,"travelling_assistant");
	$name = "";
	$email = "";
	$password = "";
	$phone = "";
	
	

	$query = "select * from traveller";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Registered Traveller</title>
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
					<a href="" class="dropdown-item">Add New Hotel</a>
					<a href="" class="dropdown-item">Manage Hotel</a>
				</div>
			</li>
			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" data-toggle="dropdown">Category</a>
				<div class="dropdown-menu">
					<a href="" class="dropdown-item">Add New Category</a>
					<a href="" class="dropdown-item">Manage Category</a>
				</div>
			</li>
			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" data-toggle="dropdown">Author</a>
				<div class="dropdown-menu">
					<a href="" class="dropdown-item">Add New Author</a>
					<a href="" class="dropdown-item">Manage Authors</a>
				</div>
			</li>
		</ul>
	</div>
</nav>
<div class="row">
	<div class="col-md-2"></div>
	<div class="col-md-8">
		<br>
		<form>
			<table class="table-bordered" width="950px" style="text-align: center">
				<tr>
					<th>Name:</th>
					<th>Email:</th>
					<th>phone:</th>
				</tr>
				<?php
					$query_run = mysqli_query($connection,$query);
					while($row = mysqli_fetch_assoc($query_run)){
						$name = $row['name'];
						$email = $row['email'];
						$phone = $row['phone'];
						
				?>
						<tr>
							<td><?php echo $name;?></td>
							<td><?php echo $email;?></td>
							<td><?php echo $phone;?></td>
						</tr>
						<?php
					}
				?>
			</table>
		</form>
	</div>
	<div class="col-md-2"></div>
</div>
	
</body>
</html>