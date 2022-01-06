<?php
	session_unset();
	session_destroy();
	header("Location: Admin_index.php");
?>