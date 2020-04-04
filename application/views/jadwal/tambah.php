<div class="container">

    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    Form Tambah Data Jadwal
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="nama_paket">Nama Paket</label>
                            <input type="text" name="nama_paket" class="form-control" id="nama_paket">
                            <small class="form-text text-danger"><?= form_error('nama_paket'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="id_pengajar">id Pengajar</label>
                            <input type="text" name="id_pengajar" class="form-control" id="id_pengajar">
                            <small class="form-text text-danger"><?= form_error('id_pengajar'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="nama_pelajaran">Nama Pelajaran</label>
                            <input type="text" name="nama_pelajaran" class="form-control" id="nama_pelajaran">
                            <small class="form-text text-danger"><?= form_error('nama_pelajaran'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="hari">Hari</label>
                            <input type="text" name="hari" class="form-control" id="hari">
                            <small class="form-text text-danger"><?= form_error('hari'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="jam">Jam</label>
                            <input type="text" name="jam" class="form-control" id="jam">
                            <small class="form-text text-danger"><?= form_error('jam'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="harga">Harga</label>
                            <input type="number" name="harga" class="form-control" id="harga">
                            <small class="form-text text-danger"><?= form_error('harga'); ?></small>
                        </div>

                        <button type="submit" name="tambah" class="btn btn-primary float-right">Tambah Data</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    Detail Data Pengajar
                </div>
                <?php foreach ($pengajar as $png) : ?>
                    <div class="card-body">
                        <h3 class="card-title">id pengajar : <?= $png['id_pengajar']; ?></h3>
                        <h5 class="card-title"><?= $png['nama_pengajar']; ?></h5>
                        <h6 class="card-subtitle mb-2 text-muted"><?= $png['alamat']; ?></h6>
                        <p class="card-text"><?= $png['pend_terakhir']; ?></p>
                        <p class="card-text"><?= $png['telepon']; ?></p>

                    </div>
                <?php endforeach; ?>
            </div>

        </div>
    </div>
</div>