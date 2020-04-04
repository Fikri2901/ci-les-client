<div class="container">

    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    Form Tambah Data Pendaftar
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" name="nama" class="form-control" id="nama">
                            <small class="form-text text-danger"><?= form_error('nama'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <input type="text" name="alamat" class="form-control" id="alamat">
                            <small class="form-text text-danger"><?= form_error('alamat'); ?></small>
                        </div>
                        <div class="form-group">

                            <label for="id_paket">id Paket</label>
                            <input type="text" name="id_paket" class="form-control" id="id_paket">
                            <small class="form-text text-danger"><?= form_error('id_paket'); ?></small>
                            <p class="text-danger" style="font-size: 10px">* isi sesuai id paket dibawah (isi dengan angka) </p>
                        </div>

                        <div class="form-group">
                            <label for="telepon">Telepon</label>
                            <input type="text" name="telepon" class="form-control" id="telepon">
                            <small class="form-text text-danger"><?= form_error('telepon'); ?></small>
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
                    Pilihan Paket
                </div>
                <?php foreach ($jadwal as $jd) : ?>
                    <div class="card-body">
                        <h4 class="card-title">ID PAKET : <?= $jd['id_paket']; ?></h4>
                        <h5 class="card-title"><?= $jd['nama_paket']; ?></h5>
                        <p class="card-text"><?= $jd['nama_pelajaran']; ?></p>
                        <p class="card-text"><?= $jd['hari']; ?></p>
                        <p class="card-text"><?= $jd['jam']; ?></p>
                        <p class="card-text"><?= $jd['harga']; ?></p>
                    </div>
                <?php endforeach; ?>
            </div>

        </div>
    </div>
</div>