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
            <a href="<?= base_url(); ?>pengajar/tambah" class="btn btn-primary">Tambah
                Data Pengajar</a>
        </div>
    </div>



    <div class="row mt-3">
        <div class="col-md-6">
            <h3>Daftar Pengajar</h3>
            <?php if (empty($pengajar)) : ?>
                <div class="alert alert-danger" role="alert">
                    data pengajar tidak ditemukan.
                </div>
            <?php endif; ?>
            <ul class="list-group">
                <?php foreach ($pengajar as $peng) : ?>
                    <li class="list-group-item">
                        <?= $peng['id_pengajar']; ?> : <?= $peng['nama_pengajar']; ?>
                        <a href="<?= base_url(); ?>pengajar/hapus/<?= $peng['id_pengajar']; ?>" class="badge badge-danger float-right tombol-hapus">hapus</a>
                        <a href="<?= base_url(); ?>pengajar/ubah/<?= $peng['id_pengajar']; ?>" class="badge badge-success float-right">ubah</a>
                        <a href="<?= base_url(); ?>pengajar/detail/<?= $peng['id_pengajar']; ?>" class="badge badge-primary float-right">detail</a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>

</div>