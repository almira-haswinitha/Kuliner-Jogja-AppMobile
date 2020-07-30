<?php
include 'koneksi.php';

$id=$_GET['nama_menu'];
mysqli_query($koneksi,"DELETE FROM datamenu WHERE nama_menu='$id'");
header('location:tampil.php');

?>