<?php

include 'koneksi.php';
$nama_menu =$_POST['nama_menu'];
$kategori =$_POST['kategori'];

mysqli_query($koneksi, "UPDATE datamenu(nama) SET ('kategori') WHERE nama_menu='$nama_menu'");
header('location:tampil.php');
?>