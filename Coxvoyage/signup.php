<!DOCTYPE html>
<html>
<head>
	<title>Travelling Assistant Website</title>
	<meta charset="utf-8" name="viewport" content="width=device-width,intial-scale=1">
	<link rel="stylesheet" type="text/css" href="bootstrap-4.4.1/css/bootstrap.min.css">
  	<script type="text/javascript" src="bootstrap-4.4.1/js/juqery_latest.js"></script>
  	<script type="text/javascript" src="bootstrap-4.4.1/js/bootstrap.min.js"></script>
  	<style type="text/css">
  		#side_bar{
  			background-color:white;
  			padding: 50px;
  			width: 290px;
  			height: 480px;
  		}
  		  		#main_content{
  			background-color: skyblue;
  			width: 350px;
  			height: 550px;
  		}
  	</style>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="index.php">Coxvoyage</a>
			</div>
			<ul class="nav navbar-nav navbar-right">
				<li class="nav-item">
					<a class="nav-link" href="index.php">Home</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="Admin/Admin_index.php">Admin Login</a>
				</li>
				<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" data-toggle="dropdown">User Login</a>
				<div class="dropdown-menu">
					<a href="login.php" class="dropdown-item">Traveller Login</a>
					<a href="service_provider/provider_login.php" class="dropdown-item">Service Provider Login</a>
				</div>
				</li>

                <li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" data-toggle="dropdown">User Registration</a>
				<div class="dropdown-menu">
					<a href="signup.php" class="dropdown-item">Traveller Registration</a>
					<a href="service_provider/provider_register.php" class="dropdown-item">Service Provider Registration</a>
				</div>
				</li>
			</ul>
		</div>
	</nav><br>
	
	<div class="row">
		<div class="col-md-4" id="side_bar">

		</div>	
		<div class="col-md-4" id="main_content">
			<center><h3>User Registration Form</h3></center>

			<form action="register.php" method="post">
				<div class="form-group">
					<label for="name">Full Name:</label>
					<input type="text" name="name" class="form-control" required>
				</div>
					<div class="form-group">
					<label for="name">Email Address:</label>
					<input type="text" name="email" class="form-control" required>
				</div>
								<div class="form-group">
					<label for="name">Password:</label>
					<input type="password" name="password" class="form-control" required>
				</div>
				<div class="form-group">
					<label for="name">Phone Number:</label>
					<input type="number" name="phone" class="form-control" required>
				</div>




				<button type="submit" class="btn btn-primary">Register</button>
			</form>
	</div>
	</div>
</body>
</html>