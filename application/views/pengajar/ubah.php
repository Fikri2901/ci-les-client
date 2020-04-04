<div class="container">

    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    Form Ubah Data Pengajar
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <input type="hidden" name="id_pengajar" value="<?= $pengajar['id_pengajar']; ?>">
                        <div class="form-group">
                            <label for="nama_pengajar">Nama Pengajar</label>
                            <input type="text" name="nama_pengajar" class="form-control" id="nama_pengajar" value="<?= $pengajar['nama_pengajar']; ?>">
                            <small class="form-text text-danger"><?= form_error('nama_pengajar'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <input type="text" name="alamat" class="form-control" id="alamat" value="<?= $pengajar['alamat']; ?>">
                            <small class="form-text text-danger"><?= form_error('alamat'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="pend_terakhir">Pendidikan Terakhir</label>
                            <input type="text" name="pend_terakhir" class="form-control" id="pend_terakhir" value="<?= $pengajar['pend_terakhir']; ?>">
                            <small class="form-text text-danger"><?= form_error('pend_terakhir'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="telepon">Telepon</label>
                            <input type="number" name="telepon" class="form-control" id="telepon" value="<?= $pengajar['telepon']; ?>">
                            <small class="form-text text-danger"><?= form_error('telepon'); ?></small>
                        </div>

                        <button type="submit" name="ubah" class="btn btn-primary float-right">Ubah Data</button>
                    </form>
                </div>
            </div>


        </div>
    </div>

</div>