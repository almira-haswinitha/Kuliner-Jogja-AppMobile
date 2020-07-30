<div class="container">

    <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
        <?php if ($this->session->flashdata('flash')) : ?>
        <!-- <div class="row mt-3">
            <div class="col-md-6">
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    Data mahasiswa <strong>berhasil</strong> <?= $this->session->flashdata('flash'); ?>.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
        </div> -->
        <?php endif; ?>

    <div class="row mt-3">
        <div class="col-md-6">
            <a href="<?= base_url(); ?>karyawan/tambahkaryawan" class="btn btn-primary">Tambah Data Karyawan</a>
        </div>
    </div>

    <!-- SEARCHING -->
    <div class="row mt-3">
        <div class="col-md-6">
            <form action="" method="post">
                <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Cari Karyawan" name="keyword">
                <div class="input-group-append">
                    <button class="btn btn-primary" type="submit" id="button-addon2">Cari</button>
                </div>
                </div>
            </form>
        </div>
    </div>


    <div class="row mt-3">
        <div class="col-md-12">
            <h3>Daftar Data Karyawan</h3><br>
            <?php if(empty($karyawan)) : ?>
                <div class="alert alert-danger" role="alert">
                Data Karyawan Tidak Ditemukan!
                </div>
            <?php endif; ?> 
            <table class="table">
                    <thead class="thead-dark">
                        <tr>
                        <th scope="col">ID KARYAWAN</th>
                        <th scope="col">NAMA</th>
                        <th scope="col">JENIS KELAMIN</th>
                        <th scope="col">ALAMAT</th>
                        <th scope="col">KONTAK</th>
                        <th scope="col" class="text-right">PILIHAN</th>
                        </tr>
                    </thead>
                    <tbody>
                <?php foreach($karyawan as $kary) : ?>
                        <tr>
                        <td><?= $kary['id']; ?></td>
                        <td><?= $kary['nama']; ?></td>
                        <td><?= $kary['jk']; ?></td>
                        <td><?= $kary['alamat']; ?></td>
                        <td><?= $kary['kontak']; ?></td>
                        <td>
                            <a href="<?= base_url(); ?>karyawan/hapuskaryawan/<?= $kary['id']; ?>" class="badge badge-danger float-right" onclick="return confirm('anda yakin?');">Hapus</a>
                            <a href="<?= base_url(); ?>karyawan/ubahkaryawan/<?= $kary['id']; ?>" class="badge badge-success float-right" >Update</a>
                        </td>
                        </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>

</div>