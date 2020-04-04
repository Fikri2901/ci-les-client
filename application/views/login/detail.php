<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    Detail Data User
                </div>
                <div class="card-body">
                    <h5 class="card-title"><?= $login['username']; ?></h5>
                    <h6 class="card-subtitle mb-2 text-muted"><?= $login['password']; ?></h6>
                    <h6 class="card-subtitle mb-2 text-muted"><?= $login['level']; ?></h6>

                    <a href="<?= base_url(); ?>login" class="btn btn-primary">Kembali</a>
                </div>
            </div>

        </div>
    </div>
</div>