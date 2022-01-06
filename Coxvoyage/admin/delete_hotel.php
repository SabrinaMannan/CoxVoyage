<?php
	$connection = mysqli_connect("127.0.0.1:3325","root","");
	$db = mysqli_select_db($connection,"travelling_assistant");
	$query = "delete from hotels where hotel_id = $_GET[hid]";
	$query_run = mysqli_query($connection,$query);
?>
<script type="text/javascript">
	alert("Hotel DELETED!");
	window.location.href = "manage_hotel.php";
</script>