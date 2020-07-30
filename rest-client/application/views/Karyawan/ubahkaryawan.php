<div class="container">

    <div class="row mt-3">
        <div class="col-md-6">

        <div class="card">
            <div class="card-header">
                Form Update Data Karyawan
            </div>
            <div class="card-body">
                <form action="" method="post">
                    <input type="hidden" name="id" value="<?= $karyawan['id']; ?>">
                    <div class="form-group">
                        <label for="nama">Nama </label>
                        <input type="text" name="nama" class="form-control" id="nama" value="<?= $karyawan['nama']; ?>">
                        <small class="form-text text-danger"><?= form_error('nama'); ?></small>
                    </div>
                    <div class="form-group">
                        <label for="jk">Jenis Kelamin </label>
                        <select class="form-control" id="jk" name="jk">
                            <?php foreach($jk as $kelamin) : ?>
                                <?php if($kelamin == $karyawan['jk']) :?>
                                    <option value="<?= $kelamin; ?>" selected><?= $kelamin; ?></option>
                                <?php else : ?>
                                    <option value="<?= $kelamin; ?>"><?= $kelamin; ?></option>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat Karyawan </label>
                        <input type="text" name="alamat"class="form-control" id="alamat" value="<?= $karyawan['alamat']; ?>">
                        <small class="form-text text-danger"><?= form_error('alamat'); ?></small>
                    </div>
                    <div class="form-group">
                        <label for="kontak">Kontak Karyawan </label>
                        <input type="text" name="kontak"class="form-control" id="kontak" value="<?= $karyawan['kontak']; ?>">
                        <small class="form-text text-danger"><?= form_error('kontak'); ?></small>
                    </div>
                    <button type="submit" name="ubah" class="btn btn-primary">Update Karyawan</button>
                </form>
            </div>
        </div>

        </div>
    </div>

</div>