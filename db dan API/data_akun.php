<?php
	// memanggil fungsi yang ada di file setting_server.php 
	require_once 'setting_server.php';

	// query menampilkan semua data
	$query = "Select * from kuliner";

	// mengkoneksikan
	$sql = mysqli_query($connection, $query);

	// menampung hasil pada array
	$ray = array();

	while ($row  = mysqli_fetch_array($sql)) {
		array_push($ray, array(
			'user_id' => $row['id'],
                'username' => $row['username'],
                'name' => $row['name'],
                'email' => $row['email'],
		));
	}

	echo json_encode($ray);

	mysqli_close($connection);
?>