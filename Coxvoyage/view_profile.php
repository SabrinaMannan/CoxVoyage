<?php
	session_start();
	$connection = mysqli_connect("127.0.0.1:3325","root","");
	$db = mysqli_select_db($connection,"travelling_assistant");
	$name = "";
	$email = "";
	$password = "";
	$phone = "";

	$query = "select * from traveller where email = '$_SESSION[email]'";
	$query_run = mysqli_query($connection,$query);
	while($row = mysqli_fetch_assoc($query_run)){
		$name = $row['name'];
		$email = $row['email'];
		$password = $row['password'];
		$phone = $row['phone'];
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>User Profile</title>
	<meta charset="utf-8" name="viewport" content="width=device-width,intial-scale=1">
	<link rel="stylesheet" type="text/css" href="bootstrap-4.4.1/css/bootstrap.min.css">
  	<script type="text/javascript" src="bootstrap-4.4.1/js/juqery_latest.js"></script>
  	<script type="text/javascript" src="bootstrap-4.4.1/js/bootstrap.min.js"></script>
  	<style type="text/css">
  		#side_bar{
  			background-color: whitesmoke;
  			padding: 50px;
  			width: 290px;
  			height: 500px;
  		}
  	</style>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="user_dashboard.php">Coxvoyage</a>
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
	</nav><br>
	<br>
	<br>
	<div class="row">
		<div class="col-md-4"></div>
		<div class="col-md-4">
			<form>
				<div class="form-group">
					<label>Name:</label>
					<input type="text" class="form-control" value="<?php echo $name;?>" disabled>
				</div>
				<div class="form-group">
					<label>Email:</label>
					<input type="text" class="form-control" value="<?php echo $email;?>" disabled>
				</div>

				<div class="form-group">
					<label for="name">Password:</label>
					<input type="password" class="form-control" value="<?php echo $password;?>" disabled>
				</div>
								<div class="form-group">
					<label>Phone Number:</label>
					<input type="number" class="form-control" value="<?php echo $phone;?>" disabled>
				</div>


			</form>
		</div>
		<div class="col-md-4"></div>
	</div>
</body>
</html>