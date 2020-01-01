<?php
	$conn = new mysqli("localhost:3307","root","","toko");

	if ($conn->connect_error) {
		die();
	}
?>