<!-- === MAIN Background === -->
<div class="slide story" id="intro" data-slide="1">
  <div class="container">
    <div id="home-row-1" class="row clearfix">
      <div class="col-12">
        <h1 class="font-semibold">Jadwal Mengajar <span class="font-thin">SMART CLASS NUSANTARA</span></h1>
      </div>
      <!-- /col-12 -->
    </div>
    <!-- /row -->

    <!-- /row -->
  </div>
  <!-- /container -->
</div>
<div style="margin-left: 120px; margin-right: 120px; margin-top: 20px; ">
  <div class="row">
    <?php foreach ($jadwal as $jdw) : ?>
      <div class="col-md-4">

        <div class="thumbnail">
          <!-- <img src="<?= base_url(); ?>assets/user/img/akun.png" alt="Lights" style="width:70%"> -->
          <div class="caption">
            <ul class="list-group">
              <li class="list-group-item"><?= $jdw['nama_paket']; ?></li>
              <li class="list-group-item">id pengajar : <?= $jdw['id_pengajar']; ?></li>
              <li class="list-group-item"><?= $jdw['nama_pelajaran']; ?></li>
              <li class="list-group-item"><?= $jdw['hari']; ?></li>
              <li class="list-group-item"><?= $jdw['jam']; ?></li>
              <li class="list-group-item"><?= $jdw['harga']; ?></li>
            </ul>
          </div>
        </div>

      </div>
    <?php endforeach; ?>
  </div>
</div>
<!-- /slide1 -->