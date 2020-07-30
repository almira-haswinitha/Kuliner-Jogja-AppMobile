<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
        
        <div class="card">
            <div class="card-header">
                Detail Transaksi
            </div>
            <div class="card-body">
                <h4 class="card-title"><?= $pembelian['id']; ?></h4><br>
                <h5 class="card-text">Tanggal : <?= $pembelian['tgl_transaksi']; ?></h5>
                <h5 class="card-text">Jumlah Pembelian : <?= $pembelian['stok']; ?></h5>
                <h5 class="card-text">Total Pembelian : <?= $pembelian['total']; ?></h5>
                <a href="<?= base_url(); ?>pembelian" class="btn btn-primary">Kembali</a>
            </div>
        </div>
        
        </div>
    </div>
</div>