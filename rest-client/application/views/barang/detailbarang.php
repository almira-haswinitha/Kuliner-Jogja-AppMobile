<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
        
        <div class="card">
            <div class="card-header">
                Detail Barang
            </div>
            <div class="card-body">
                <h4 class="card-title"><?= $barang['nama']; ?></h4><br>
                <h5 class="card-text">Harga : Rp.<?= $barang['harga']; ?></h5>
                <h5 class="card-text">Stock Barang : <?= $barang['stok']; ?></h5>
                <a href="<?= base_url(); ?>barang" class="btn btn-primary">Kembali</a>
            </div>
        </div>
        
        </div>
    </div>
</div>