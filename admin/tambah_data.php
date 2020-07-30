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
  <h2>Data Menu <font color="red" >++</font></h2>
  <form action="proses_input.php" method="POST">
    <div class="form-group">
      <label for="nama_menu">Nama Menu:</label>
      <input type="text" class="form-control" id="email" placeholder="Enter nama_menu" name="nama_menu">
    </div>
    <div class="form-group">
      <label for="kategori">Kategori:</label>
      <input type="text" class="form-control" id="pwd" placeholder="Enter kategori" name="kategori">
    </div>
    <div class="form-group form-check">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="remember"> Remember me
      </label>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

</body>
</html>