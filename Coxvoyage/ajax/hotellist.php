<?php 
	$connect = mysqli_connect("127.0.0.1:3325","root","","travelling_assistant");
	if (isset($_POST['txt'])) {
		$sql = "SELECT * FROM `hotels` WHERE title LIKE '%".$_POST['txt']."%'";;
		
	}else{
		$sql = "SELECT * FROM `hotels`";

	} 
	$result = mysqli_query($connect, $sql);
	$output ='';
	if (mysqli_num_rows($result) > 0 ) {
		$i = 0;
		while ($row = mysqli_fetch_array($result)) {
			$i++;
			$output .='<div style=""><medium>'.$i . '. '.$row['title'].'</medium><h4 style="display:inline"><a href="'.$row['name'].'"></a></h4></div><br>';
		}
		;
echo $output;
	}else{
		echo '<h1 class="text-danger p-5">No search found</h1>';
	}
		
 
?>