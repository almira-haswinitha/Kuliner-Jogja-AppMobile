<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
        
        <div class="card">
            <div class="card-header">
                Detail Karyawan
            </div>
            <div class="card-body">
                <h4 class="card-title"><?= $karyawan['id']; ?></h4><br>
                <h5 class="card-text">Nama : <?= $karyawan['nama']; ?></h5>
                <h5 class="card-text">Alamat : <?= $karyawan['alamat']; ?></h5>
                <h5 class="card-text">Kontak : <?= $karyawan['kontak']; ?></h5>
                <a href="<?= base_url(); ?>karyawan" class="btn btn-primary">Kembali</a>
            </div>
        </div>
        
        </div>
    </div>
</div>