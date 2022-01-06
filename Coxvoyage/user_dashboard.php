<?php
	session_start();
	function get_hotel_count(){
		$connection = mysqli_connect("127.0.0.1:3325","root","");
		$db = mysqli_select_db($connection,"travelling_assistant");
		$hotel_count = "";
		$query = "select * hotel from hotel";
		$query_run = mysqli_query($connection,$query);
        	while($row = mysqli_fetch_assoc($query_run)){
			$hotel_count = $row['hotel_count'];
		}
		return($hotel_count);
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
  		#main{
  			text-align: center;
  		}
  	</style>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="index.php">Coxvoyage</a>
			</div>
			<font style= "color : white"><span><weak>Welcome: <?php echo $_SESSION['name'];?></weak></span></font>
			<font style="color: white"><span><weak>Email: <?php echo $_SESSION['email'];?></weak></span></font>
			<ul class="nav navbar-nav navbar-right">
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" data-toggle="dropdown">My Profile</a>
					<div class="dropdown-menu">
						<a class="dropdown-item" href="view_profile.php">View Profile</a>
						<a class="dropdown-item" href="change_password.php">Change Password</a>
					</div>
				</li>
				<li class="nav-item"><a class="nav-link" href="logout.php"> Logout</a></li>
			</ul>
		</div>
	</nav><br>
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: none;">

	<div class="container-fluid">
		<ul class="nav navbar-nav navbar-center">
			<li class="nav-item">
				<h3><a href="user_dashboard.php" class="nav-link">Profile</a></h3>
			</li>
			<li class="nav-item">
				<h3><a href="hotel.php" class="nav-link">Hotels</a></h3>
			</li>

			<li class="nav-item">
				<h3><a href="map.html" class="nav-link">Map</a></h3>
			</li>

			<li class="nav-item">
				<h3><a href="tracker.html" class="nav-link">Tracker</a></h3>
			</li>

			<li class="nav-item">
				<h3><a href="tracking.html" class="nav-link">Tracking</a></h3>
			</li>

	<nav class="navbar navbar-expand-lg navbar-light">

    <body background="images\Screenshot (689).png" style="background-repeat: no-repeat;height: 100%;" class="img">
	

	<main>
		<br><br><br><i><h1 style="color:white;"><font size="50">&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp Adventure is Worthwhile</font><span></span></h1></i><br>
		<i><h3 style="color:white;">&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp Introduce yourself To the world of an incredible vacation</h3></i>

       
       

	</main>


</body>
</html>