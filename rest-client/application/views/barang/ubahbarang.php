<div class="container">

    <div class="row mt-3">
        <div class="col-md-6">

        <div class="card">
            <div class="card-header">
                Form Update Data Barang
            </div>
            <div class="card-body">
                <form action="" method="post">
                    <input type="hidden" name="id" value="<?= $barang['id']; ?>">
                    <div class="form-group">
                        <label for="nama">Nama </label>
                        <input type="text" name="nama" class="form-control" id="nama" value="<?= $barang['nama']; ?>">
                        <small class="form-text text-danger"><?= form_error('nama'); ?></small>
                    </div>
                    <div class="form-group">
                        <label for="harga">Harga </label>
                        <input type="text" name="harga"class="form-control" id="harga" value="<?= $barang['harga']; ?>">
                        <small class="form-text text-danger"><?= form_error('harga'); ?></small>
                    </div>
                    <div class="form-group">
                        <label for="stok">Stock </label>
                        <input type="number" name="stok"class="form-control" id="stok" value="<?= $barang['stok']; ?>">
                        <small class="form-text text-danger"><?= form_error('stok'); ?></small>
                    </div>
                    <button type="submit" name="ubah" class="btn btn-primary">Update Barang</button>
                </form>
            </div>
        </div>

        </div>
    </div>

</div>