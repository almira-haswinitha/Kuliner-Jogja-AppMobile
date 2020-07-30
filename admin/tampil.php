<?php
include 'koneksi.php';

$data = mysqli_query($koneksi,"SELECT *FROM datamenu");
?>


<table border=5 bgcolor='#1EE6B0' bordercolor='#404651'>
	<tr>
		<td>kategori</td>
		<td>nama_menu</td>
		<td>action</td>
	</tr>
	<?php foreach($data as $value): ?>
	<tr>
		<td><?php echo $value['kategori']?></td>
		<td><?php echo $value['nama_menu']?></td>
		<td>
		<a href="hapus.php?nama_menu=<?php echo $value['nama_menu']?>">Hapus</a>
		<a href="update.php?nama_menu=<?php echo $value['nama_menu']?>">Update</a>
		</td>
	</tr>
	<?php endforeach ?>
</table>

<a href="tambah_data.php">Tambah data</a>