<div class="container">

    <div class="row mt-3">
        <div class="col-md-6">

        <div class="card">
            <div class="card-header">
                Form Tambah Data Karyawan
            </div>
            <div class="card-body">
                <form action="" method="post">
                    <div class="form-group">
                        <label for="nama">Nama Karyawan </label>
                        <input type="text" name="nama"class="form-control" id="nama">
                        <small class="form-text text-danger"><?= form_error('nama'); ?></small>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">JENIS KELAMIN</label>
                        <select class="form-control" id="jk" name="jk">
                        <?php foreach ($jk as $kelamin) : ?>
                            <option value="<?= $kelamin; ?>"><?= $kelamin; ?></option>
                        <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat Karyawan </label>
                        <input type="text" name="alamat"class="form-control" id="alamat">
                        <small class="form-text text-danger"><?= form_error('alamat'); ?></small>
                    </div>
                    <div class="form-group">
                        <label for="kontak">Kontak Karyawan </label>
                        <input type="text" name="kontak"class="form-control" id="kontak">
                        <small class="form-text text-danger"><?= form_error('kontak'); ?></small>
                    </div>
                    <button type="submit" name="tambah" class="btn btn-primary">Tambah Karyawan</button>
                </form>
            </div>
        </div>

        </div>
    </div>

</div>