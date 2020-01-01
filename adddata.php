<?php
	include 'conn.php';

	$_POST = json_decode(file_get_contents("php://input"), true);

	$namaProduk = $_POST['namaProduk'];
	$deskripsi = $_POST['deskripsi'];
	$harga = $_POST['harga'];
	$stok = $_POST['stok'];

	$result = "";

	// var_dump("INSERT INTO produk (nama_produk, harga, deskripsi, stok) VALUES ('$namaProduk', $harga, '$deskripsi', $stok)");exit();

	$sql = $conn->query("INSERT INTO produk (nama_produk, harga, deskripsi, stok) VALUES ('$namaProduk', $harga, '$deskripsi', $stok)");

	if ($sql === TRUE) {
		$result = "Berhasil";
	}
	else {
		$result = "Error ".$sql." <br />".$conn->error;
	}

	echo json_encode($result);

	$conn->close();
?>