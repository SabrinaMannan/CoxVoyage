<?php
	function get_traveller_count(){
		$connection = mysqli_connect("127.0.0.1:3325","root","");
		$db = mysqli_select_db($connection,"travelling_assistant");
		$traveller_count = "";
		$query = "select count(*) as traveller_count from traveller";
		$query_run = mysqli_query($connection,$query);
		while($row = mysqli_fetch_assoc($query_run)){
			$registered_user_count = $row['traveller_count'];
		}
		return($traveller_count);
	}
		function get_hotels_count(){
		$connection = mysqli_connect("127.0.0.1:3325","root","");
		$db = mysqli_select_db($connection,"travelling_assistant");
		$hotels_count = "";
		$query = "select count(*) as hotels_count from hotel";
		$query_run = mysqli_query($connection,$query);
		while($row = mysqli_fetch_assoc($query_run)){
			$hotels_count = $row['hotels_count'];
		}
		return($hotels_count);
	}



?>