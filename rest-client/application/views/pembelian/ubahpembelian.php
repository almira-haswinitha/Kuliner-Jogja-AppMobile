<div class="container">

    <div class="row mt-3">
        <div class="col-md-6">

        <div class="card">
            <div class="card-header">
                Form Update Data Transaksi
            </div>
            <div class="card-body">
                <form action="" method="post">
                    <input type="hidden" name="id" value="<?= $pembelian['id']; ?>">
                    <div class="form-group">
                        <label for="id_barang">ID BARANG </label>
                        <select class="form-control" id="id_barang" name="id_barang">
                        <?php foreach ($id_barang as $idbar) : ?>
                            <?php if( $idbar == $pembelian['id_barang']) : ?>
                                <option value="<?= $idbar; ?>" selected><?= $idbar; ?></option>
                            <?php else : ?>
                                <option value="<?= $idbar; ?>"><?= $idbar; ?></option>
                            <?php endif; ?>
                        <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="tgl_transaksi">Tanggal Transaksi </label>
                        <input type="date" name="tgl_transaksi"class="form-control" id="tgl_transaksi" value="<?= $pembelian['tgl_transaksi']; ?>">
                        <small class="form-text text-danger"><?= form_error('tgl_transaksi'); ?></small>
                    </div>
                    <div class="form-group">
                        <label for="stok">Stock </label>
                        <input type="number" name="stok"class="form-control" id="stok" value="<?= $pembelian['stok']; ?>">
                        <small class="form-text text-danger"><?= form_error('stok'); ?></small>
                    </div>
                    <div class="form-group">
                        <label for="harga">Harga </label>
                        <input type="number" name="harga"class="form-control" id="harga" value="<?= $pembelian['harga']; ?>">
                        <small class="form-text text-danger"><?= form_error('harga'); ?></small>
                    </div>
                    <div class="form-group">
                        <label for="total">Total Harga </label>
                        <input type="number" name="total"class="form-control" id="total" value="<?= $pembelian['total']; ?>">
                        <small class="form-text text-danger"><?= form_error('total'); ?></small>
                    </div>
                    <button type="submit" name="ubah" class="btn btn-primary">Update Transaksi</button>
                </form>
            </div>
        </div>

        </div>
    </div>

</div>