<?php
	// memanggil fungsi yang ada di file setting_server.php 
	require_once 'setting_server.php';

	// query menampilkan semua data
	$query = "Select * from datamenu";

	// mengkoneksikan
	$sql = mysqli_query($con, $query);

	// menampung hasil pada array
	$ray = array();

	while ($row  = mysqli_fetch_array($sql)) {
		array_push($ray, array(
			"id_menu" => $row ['id_menu'],
			"kategori" => $row ['kategori'],
			"nama" => $row ['nama_menu'],
			"harga" => $row ['harga'],
			"id_resto" => $row ['id_resto'],
		));
	}

	echo json_encode($ray);

	mysqli_close($con);
?>