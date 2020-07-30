<?php
include 'koneksi.php';
$nama_menu=$_GET['nama_menu'];
$data = mysqli_query($koneksi,"SELECT *FROM datamenu WHERE nama_menu='$nama_menu'");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body style="background-color:#B469AE;">
<div class="container">
  <h2>Data Menu <font color="red" >UPDATE</font></h2>
  <?php foreach($data as $value): ?>
  <form action="proses_update.php" method="POST">
    <div class="form-group">
      <label for="nama_menu">Nama Menu:</label>
      <input type="text" class="form-control" id="email" value="<?php echo $value['nama_menu']?>" name="nama_menu" readonly>
    </div>
    <div class="form-group">
      <label for="kategori">Kategori:</label>
      <input type="text" class="form-control" id="pwd" value="<?php echo $value['kategori']?>" name="kategori">
    </div>
    <div class="form-group form-check">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="remember"> Remember me
      </label>
    </div>
	<?php endforeach ?>
    <button type="submit" class="btn btn-primary">Update</button>
  </form>
</div>

</body>
</html>