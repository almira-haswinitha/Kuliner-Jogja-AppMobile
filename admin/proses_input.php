<?php

include 'koneksi.php';
$kategori =$_POST['kategori'];
$nama_menu =$_POST['nama_menu'];

mysqli_query($koneksi, "INSERT INTO	datamenu(kategori,nama_menu) VALUES('$kategori','$nama_menu')");
header('location:tampil.php');
?>