<?php
	$connection = mysqli_connect("127.0.0.1:3325","root","");
	$db = mysqli_select_db($connection,"travelling_assistant");
	$query = "insert into traveller values(null,'$_POST[name]','$_POST[email]','$_POST[password]','$_POST[phone]')";
	$query_run = mysqli_query($connection,$query);
?>
<script type="text/javascript">
	alert("REGISTRATION SUCCESSFULL!")
	window.location.href = "login.php";
</script>