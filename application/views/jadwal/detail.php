<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    Detail Data jadwal
                </div>
                <div class="card-body">
                    <h5 class="card-title"><?= $jadwal['nama_paket']; ?></h5>
                    <h6 class="card-subtitle mb-2 text-muted">id pengajar : <?= $jadwal['id_pengajar']; ?></h6>
                    <p class="card-text"><?= $jadwal['nama_pelajaran']; ?></p>
                    <p class="card-text"><?= $jadwal['hari']; ?></p>
                    <p class="card-text"><?= $jadwal['jam']; ?></p>
                    <p class="card-text"><?= $jadwal['harga']; ?></p>
                    <a href="<?= base_url(); ?>jadwal" class="btn btn-primary">Kembali</a>
                </div>
            </div>

        </div>
    </div>
</div>