<?php
	session_start();
	$connection = mysqli_connect("127.0.0.1:3325","root","");
	$db = mysqli_select_db($connection,"travelling_assistant");
	$password = "";
	$query = "select * from traveller where email = '$_SESSION[email]'";
	$query_run = mysqli_query($connection,$query);
	while($row = mysqli_fetch_assoc($query_run)){
		$password = $row['password'];
	}
	if($password == $_POST['old_password']){
		$query = "update traveller set password = '$_POST[new_password]' where email = '$_SESSION[email]'";
		$query_run = mysqli_query($connection,$query);
	}
	?>
<script type="text/javascript">
	alert("UPDATED SUCCESSFULLY!");
	window.location.href = "user_dashboard.php";
</script>
