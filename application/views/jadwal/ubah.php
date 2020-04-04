<div class="container">

    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    Form Ubah Data Jadwal
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <input type="hidden" name="id_paket" value="<?= $jadwal['id_paket']; ?>">
                        <div class="form-group">
                            <label for="nama_paket">Nama Paket</label>
                            <input type="text" name="nama_paket" class="form-control" id="nama_paket" value="<?= $jadwal['nama_paket']; ?>">
                            <small class="form-text text-danger"><?= form_error('nama_paket'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="id_pengajar">id Pengajar</label>
                            <input type="text" name="id_pengajar" class="form-control" id="id_pengajar" value="<?= $jadwal['id_pengajar']; ?>">
                            <small class="form-text text-danger"><?= form_error('id_pengajar'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="nama_pelajaran">Nama Pelajaran</label>
                            <input type="text" name="nama_pelajaran" class="form-control" id="nama_pelajaran" value="<?= $jadwal['nama_pelajaran']; ?>">
                            <small class="form-text text-danger"><?= form_error('nama_pelajaran'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="hari">Hari</label>
                            <input type="text" name="hari" class="form-control" id="hari" value="<?= $jadwal['hari']; ?>">
                            <small class="form-text text-danger"><?= form_error('hari'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="jam">Jam</label>
                            <input type="text" name="jam" class="form-control" id="jam" value="<?= $jadwal['jam']; ?>">
                            <small class="form-text text-danger"><?= form_error('jam'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="harga">Harga</label>
                            <input type="number" name="harga" class="form-control" id="harga" value="<?= $jadwal['harga']; ?>">
                            <small class="form-text text-danger"><?= form_error('harga'); ?></small>
                        </div>

                        <button type="submit" name="ubah" class="btn btn-primary float-right">Ubah Data</button>
                    </form>
                </div>
            </div>


        </div>
    </div>

</div>