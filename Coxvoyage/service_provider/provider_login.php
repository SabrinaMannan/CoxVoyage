<!DOCTYPE html>
<html>
<head>
	<title>Coxvoyage</title>
	<meta charset="utf-8" name="viewport" content="width=device-width,intial-scale=1">
	<link rel="stylesheet" type="text/css" href="../bootstrap-4.4.1/css/bootstrap.min.css">
  	<script type="text/javascript" src="../bootstrap-4.4.1/js/juqery_latest.js"></script>
  	<script type="text/javascript" src="bootstrap-4.4.1/js/bootstrap.min.js"></script>
  	<style type="text/css">
  		#side_bar{
  			background-color: whitesmoke;
  			padding: 50px;
  			width: 290px;
  			height: 500px;
  		}
  				  		#main_content{
  			background-color: lightskyblue;
  			width: 350px;
  			height: 550px;
  		}
  	</style>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="provider_login.php">Coxvoyage</a>
			</div>
			<ul class="nav navbar-nav navbar-right">
				<li class="nav-item">
					<a class="nav-link" href="../index.php">Home</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="../Admin/Admin_index.php">Admin Login</a>
				</li>

				<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" data-toggle="dropdown">User Login</a>
				<div class="dropdown-menu">
					<a href="../login.php" class="dropdown-item">Traveller Login</a>
					<a href="service_provider/provider_login.php" class="dropdown-item">Service Provider Login</a>
				</div>
				</li>

                <li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" data-toggle="dropdown">User Registration</a>
				<div class="dropdown-menu">
					<a href="../signup.php" class="dropdown-item">Traveller Registration</a>
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
			<center><h3>Service Provider Login </h3></center>
			
			<form action="" method="post">
				<div class="form-group">
					<label for="name">Email ID:</label>
					<input type="text" name="email" class="form-control" required>
				</div>
				<div class="form-group">
					<label for="name">Password:</label>
					<input type="password" name="password" class="form-control" required>
				</div>
				<button type="submit" name="login" class="btn btn-primary">Login</button>
			</form>

			<?php
				session_start();
				if(isset($_POST['login'])){
					$connection = mysqli_connect("127.0.0.1:3325","root","");
					$db = mysqli_select_db($connection,"travelling_assistant");
					$query = "select * from service_provider where email = '$_POST[email]'";
					$query_run = mysqli_query($connection,$query);
					while($row = mysqli_fetch_assoc($query_run)){
						if($row['email'] == $_POST['email']){
							if($row['password'] == $_POST['password']){
								$_SESSION['name'] = $row['name'];
								$_SESSION['email'] = $row['email'];
								$_SESSION['phone'] = $row['phone'];
								header("Location: admin_dashboard.php");
							}
							else{
								?>
								<br><br><center><span class="alert-danger">Wrong Password</span></center>
								<?php
							}
						}
					}
				}
			?>
	</div>
	</div>
</body>
</html>