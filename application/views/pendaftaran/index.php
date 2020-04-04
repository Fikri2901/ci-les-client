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

            <a href="<?= base_url(); ?>pendaftaran/tambah" class="btn btn-primary">Tambah
                Data Pendaftaran</a>

        </div>
    </div>



    <div class="row mt-3">
        <div class="col-md-6">
            <h3>Data Pendaftar</h3>
            <?php if (empty($pendaftaran)) : ?>
                <div class="alert alert-danger" role="alert">
                    data pendaftar tidak ditemukan.
                </div>
            <?php endif; ?>
            <ul class="list-group">
                <?php foreach ($pendaftaran as $pdf) : ?>
                    <li class="list-group-item">
                        <?= $pdf['nama']; ?>
                        <a href="<?= base_url(); ?>pendaftaran/hapus/<?= $pdf['id_pendaftaran']; ?>" class="badge badge-danger float-right tombol-hapus">hapus</a>
                        <a href="<?= base_url(); ?>pendaftaran/ubah/<?= $pdf['id_pendaftaran']; ?>" class="badge badge-success float-right">ubah</a>
                        <a href="<?= base_url(); ?>pendaftaran/detail/<?= $pdf['id_pendaftaran']; ?>" class="badge badge-primary float-right">detail</a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>

</div>