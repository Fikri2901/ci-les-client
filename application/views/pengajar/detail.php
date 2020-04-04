<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    Detail Data Pengajar
                </div>
                <div class="card-body">
                    <h5 class="card-title"><?= $pengajar['nama_pengajar']; ?></h5>
                    <h6 class="card-subtitle mb-2 text-muted"><?= $pengajar['alamat']; ?></h6>
                    <p class="card-text"><?= $pengajar['pend_terakhir']; ?></p>
                    <p class="card-text"><?= $pengajar['telepon']; ?></p>
                    <a href="<?= base_url(); ?>pengajar" class="btn btn-primary">Kembali</a>
                </div>
            </div>

        </div>
    </div>
</div>