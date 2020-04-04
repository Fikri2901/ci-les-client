<!-- === MAIN Background === -->
<div class="slide story" id="intro" data-slide="1">
  <div class="container">
    <div id="home-row-1" class="row clearfix">
      <div class="col-12">
        <h1 class="font-semibold">Data Pendaftar <span class="font-thin">SMART CLASS NUSANTARA</span></h1>
      </div>
      <!-- /col-12 -->
    </div>
    <!-- /row -->

    <!-- /row -->
  </div>
  <!-- /container -->
</div>
<br>




<div style="margin-left: 120px; margin-right: 120px; margin-top: 20px">

  <div class="row" style="color: white ; background-color:lightslategrey ; border-radius: 10px; padding-bottom: 18px">
    <center>
      <?php foreach ($jadwal as $jd) : ?>
        <div class="col-12 col-lg-3 col-sm-3">
          <h2 class="font-thin" style="font-size: 20px"><b><?= $jd['nama_paket'] ?></b><br> <?= $jd['nama_pelajaran'] ?></h2>
        </div>
      <?php endforeach; ?>
    </center>
  </div>

  <div class="row">
    <div class="col-md-6" style="background-color: white; border-radius: 10px; margin: 20px ">

      <div class="card">
        <div class="card-header">
          <h2>Pendaftaran</h2>
        </div>
        <div class="card-body">
          <form action="" method="post">
            <div class="form-group">
              <label for="nama">Nama</label>
              <input type="text" name="nama" class="form-control" id="nama" value="<?= $this->session->userdata('username') ?>">
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
              <p class="text-danger" style="font-size: 10px">* isi sesuai id paket diatas (isi dengan angka) </p>
            </div>

            <div class="form-group">
              <label for="telepon">Telepon</label>
              <input type="text" name="telepon" class="form-control" id="telepon">
              <small class="form-text text-danger"><?= form_error('telepon'); ?></small>
            </div>

            <button type="submit" name="daftar" class="btn btn-primary float-right" style="margin-bottom: 10px">Daftar</button>
          </form>

        </div>

      </div>

    </div>
  </div>

  <h3 style="color: white">Data Pendaftar</h3><br>
  <div class="row">
    <?php foreach ($pendaftaran as $pd) : ?>
      <div class="col-md-4">
        <div class="thumbnail">
          <div class="caption">
            <ul class="list-group">
              <li class="list-group-item">nama : <?= $pd['nama']; ?></li>
              <li class="list-group-item">alamat : <?= $pd['alamat']; ?></li>
              <li class="list-group-item">id paket : <?= $pd['id_paket']; ?></li>
              <li class="list-group-item">nomor telepon : <?= $pd['telepon']; ?></li>
            </ul>
          </div>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
</div>