<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    Detail Data Pendaftaran
                </div>
                <div class="card-body">
                    <h5 class="card-title"><?= $pendaftaran['nama']; ?></h5>
                    <h6 class="card-subtitle mb-2 text-muted"><?= $pendaftaran['alamat']; ?></h6>
                    <p class="card-text">id paket : <?= $pendaftaran['id_paket']; ?></p>
                    <p class="card-text"><?= $pendaftaran['telepon']; ?></p>
                    <a href="<?= base_url(); ?>pendaftaran" class="btn btn-primary">Kembali</a>
                </div>
            </div>

        </div>
    </div>
</div>