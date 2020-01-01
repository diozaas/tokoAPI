<?php
	include 'conn.php';

	// $_GET = json_decode(file_get_contents("php://input"), true);

	$id = $_GET['id'];

	$sql = $conn->query("SELECT * FROM produk WHERE id = '$id'");

	$data = $sql->fetch_assoc();

	echo json_encode($data);

	mysqli_close($conn);

?>