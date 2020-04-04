  <!-- === MAIN Background === -->
  <div class="slide story" id="intro" data-slide="1">
    <div class="container">
      <div id="home-row-1" class="row clearfix">
        <div class="col-12">
          <h1 class="font-semibold">Daftar Pengajar <span class="font-thin">SMART CLASS NUSANTARA</span></h1>
        </div>
        <!-- /col-12 -->
      </div>
      <!-- /row -->

      <!-- /row -->
    </div>
    <!-- /container -->
    <div style="margin-left: 120px; margin-right: 120px; margin-top: 20px; ">
      <div class="row">
        <?php foreach ($pengajar as $peng) : ?>
          <div class="col-md-4">
            <div class="thumbnail">
              <img src="<?= base_url(); ?>assets/user/img/akun.png" alt="Lights" style="width:70%">
              <div class="caption">
                <ul class="list-group">
                  <li class="list-group-item">id pengajar : <?= $peng['id_pengajar']; ?></li>
                  <li class="list-group-item"><?= $peng['nama_pengajar']; ?></li>
                  <li class="list-group-item"><?= $peng['alamat']; ?></li>
                  <li class="list-group-item"><?= $peng['pend_terakhir']; ?></li>
                  <li class="list-group-item"><?= $peng['telepon']; ?></li>
                </ul>
              </div>
            </div>

          </div>
        <?php endforeach; ?>
      </div>
    </div>