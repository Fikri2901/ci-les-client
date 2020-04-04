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
            <a href="<?= base_url(); ?>login/tambah" class="btn btn-primary">Tambah
                Data User</a>
        </div>
    </div>



    <div class="row mt-3">
        <div class="col-md-6">
            <h3>Daftar User</h3>
            <?php if (empty($login)) : ?>
                <div class="alert alert-danger" role="alert">
                    data User tidak ditemukan.
                </div>
            <?php endif; ?>
            <ul class="list-group">
                <?php foreach ($login as $lg) : ?>
                    <li class="list-group-item">
                        <?= $lg['username']; ?>
                        <a href="<?= base_url(); ?>login/hapus/<?= $lg['id']; ?>" class="badge badge-danger float-right tombol-hapus">hapus</a>
                        <a href="<?= base_url(); ?>login/ubah/<?= $lg['id']; ?>" class="badge badge-success float-right">ubah</a>
                        <a href="<?= base_url(); ?>login/detail/<?= $lg['id']; ?>" class="badge badge-primary float-right">detail</a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>

</div>