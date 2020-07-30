<div class="container">

    <div class="row mt-3">
        <div class="col-md-6">

        <div class="card">
            <div class="card-header">
                Form Tambah Data Transaksi
            </div>
            <div class="card-body">
                <form action="" method="post">
                <div class="form-group">
                    <label for="exampleFormControlSelect1">ID BARANG</label>
                    <select class="form-control" id="id_barang" name="id_barang">
                    <?php foreach ($id_barang as $idbar) : ?>
                        <option value="<?= $idbar; ?>"><?= $idbar; ?></option>
                    <?php endforeach; ?>
                    </select>
                </div>
                    <div class="form-group">
                        <label for="tgl_transaksi">Tanggal Transaksi </label>
                        <input type="date" name="tgl_transaksi"class="form-control" id="tgl_transaksi">
                        <small class="form-text text-danger"><?= form_error('tgl_transaksi'); ?></small>
                    </div>
                    <div class="form-group">
                        <label for="stok">Jumlah Barang </label>
                        <input type="number" name="stok"class="form-control" id="stok">
                        <small class="form-text text-danger"><?= form_error('stok'); ?></small>
                    </div>
                    <div class="form-group">
                        <label for="harga">Harga </label>
                        <input type="text" name="harga"class="form-control" id="harga">
                        <small class="form-text text-danger"><?= form_error('harga'); ?></small>
                    </div>
                    <div class="form-group">
                        <label for="total">Total </label>
                        <input type="text" name="total"class="form-control" id="total">
                        <small class="form-text text-danger"><?= form_error('total'); ?></small>
                    </div>
                    <button type="submit" name="tambah" class="btn btn-primary">Tambah Transaksi</button>
                </form>
            </div>
        </div>

        </div>
    </div>

    <div class="row mt-3">
        <div class="col-md-12">
            <?php if(empty($barang)) : ?>
                <div class="alert alert-danger" role="alert">
                Data Barang Tidak Ditemukan!
                </div>
            <?php endif; ?> 
            <table class="table">
                    <thead class="thead-dark">
                        <tr>
                        <th scope="col">ID</th>
                        <th scope="col">NAMA BARANG</th>
                        <th scope="col">HARGA</th>
                        <th scope="col">STOK</th>
                        </tr>
                    </thead>
                    <tbody>
                <?php foreach($barang as $brg) : ?>
                        <tr>
                        <td><?= $brg['id']; ?></td>
                        <td><?= $brg['nama']; ?></td>
                        <td><?= $brg['harga']; ?></td>
                        <td><?= $brg['stok']; ?></td>
                        </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>

</div>