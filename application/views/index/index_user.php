<!-- === MAIN Background === -->
<div class="slide story" id="intro" data-slide="1">
  <div class="container">
    <div id="home-row-1" class="row clearfix">
      <div class="col-12">
        <h1 class="font-semibold">SMART CLASS <span class="font-thin">NUSANTARA</span></h1>
        <h4 class="font-thin">Kami adalah <span class="font-semibold">smart class</span> yang terpercaya.</h4>
        <br>
        <br>
      </div>
      <!-- /col-12 -->
    </div>
    <!-- /row -->
    <div id="home-row-2" class="row clearfix">

      <div class="col-12 col-sm-4">
        <div class="home-hover navigation-slide"><img src="<?= base_url(); ?>assets/user/img/s02.png"></div><span>PROFESSIONAL</span>
      </div>

      <div class="col-12 col-sm-4">
        <div class="home-hover navigation-slide"><img src="<?= base_url(); ?>assets/user/img/s01.png"></div><span>FRIENDLY</span>
      </div>

      <div class="col-12 col-sm-4">
        <div class="home-hover navigation-slide"><img src="<?= base_url(); ?>assets/user/img/s03.png"></div><span>SUITABLE</span>
      </div>
    </div>
    <!-- /row -->
  </div>
  <!-- /container -->
</div>
<!-- /slide1 -->

<!-- === Slide 2 === -->
<div class="slide story" id="about-us" data-slide="2">
  <div class="container">
    <div class="row title-row">
      <div class="col-12 font-thin">Dengan <span class="font-semibold">Pengajar</span> yang profesionalitas <span class="font-semibold">dapat menciptakan pengajaran yang berkualitas</span> <br>Terpercaya, Amanah, dan Barokah.</div>
    </div>
    <!-- /row -->
    <div class="row line-row">
      <div class="hr">&nbsp;</div>
    </div>
    <!-- /row -->
    <div class="row subtitle-row">
      <div class="col-12 font-thin">Hal yang biasa <span class="font-semibold">Dilakukan</span></div>
    </div>
    <!-- /row -->
    <div class="row content-row">
      <div class="col-12 col-lg-3 col-sm-6">
        <p><i class="fa fa-eye"></i></p>
        <h2 class="font-thin">Memilih <span class="font-semibold">Metode</span></h2>
        <h4 class="font-thin">Kami mengidentifikasi masalah apa saja yang didapatkan oleh siswa yang susah memahami pelajaran, kemudian kita cari solusi dengan metode apa yang tepat.</h4>
      </div>
      <!-- /col12 -->
      <div class="col-12 col-lg-3 col-sm-6">
        <p><i class="fa fa-book"></i></p>
        <h2 class="font-thin">Sumber <span class="font-semibold">Buku</span></h2>
        <h4 class="font-thin">Sumber ilmu yang diajarkan bersumber dari buku buku terkenal secada internasional.</h4>
      </div>
      <!-- /col12 -->
      <div class="col-12 col-lg-3 col-sm-6">
        <p><i class="fa fa-tablet"></i></p>
        <h2 class="font-thin">Mobile <span class="font-semibold">Apps</span></h2>
        <h4 class="font-thin">Kami tidak hanya memantau mereke melalui tatap muka, juga dari aplikasi NUSANTARA CLASS.</h4>
      </div>
      <!-- /col12 -->
      <div class="col-12 col-lg-3 col-sm-6">
        <p><i class="fa fa-pencil"></i></p>
        <h2 class="font-thin">Laporan <span class="font-semibold">Keluarga</span></h2>
        <h4 class="font-thin">Para keluarga pun tidak perlu ragu kepada kita karena kita selalu mengirimkan notifikasi berupa pesan jika siswa mendapat reward ataupun masalah.</h4>
      </div>
      <!-- /col12 -->
    </div>
    <!-- /row -->
  </div>
  <!-- /container -->

</div>
<!-- /slide2 -->

<!-- === SLide 3 - Portfolio -->
<div class="slide story" id="about-us2" data-slide="2">
  <div class="container">
    <div class="row title-row">
      <div class="col-12 font-thin">Daftar Pelajaran <span class="font-semibold">setiap minggu</span> <br>SMART CLASS NUSANTARA</div>
    </div>
    <!-- /row -->
    <div class="row line-row">
      <div class="hr">&nbsp;</div>
    </div>
    <!-- /row -->

    <div class="row content-row">
      <center>
        <?php foreach ($jadwal as $jd) : ?>
          <div class="col-12 col-lg-3 col-sm-6">
            <h2 class="font-thin" style="font-size: 20px"><?= $jd['nama_paket'] ?><br> <?= $jd['nama_pelajaran'] ?></h2>
            <h2 class="font-thin" style="font-size: 20px"><?= $jd['hari'] ?><br>
              <h2 class="font-thin" style="font-size: 20px"><?= $jd['jam'] ?><br>
                <h2 class="font-thin" style="font-size: 20px">Rp.<?= $jd['harga'] ?><br>
          </div>
        <?php endforeach; ?>
      </center>

    </div>
    <!-- /row -->
  </div>
  <!-- /container -->

</div>
<!-- /slide3 -->

<!-- === Slide 4 - Process === -->
<div class="slide story" id="process" data-slide="4">
  <div class="container">
    <div class="row title-row">
      <div class="col-12 font-thin">Metode <span class="font-semibold">Pelajaran</span></div>
    </div>
    <!-- /row -->
    <div class="row line-row">
      <div class="hr">&nbsp;</div>
    </div>
    <!-- /row -->
    <div class="row subtitle-row">
      <div class="col-sm-1 hidden-sm">&nbsp;</div>
      <div class="col-12 col-sm-10 font-light">SmartClassNusantara memiliki metedo pembelajran yang berbeda dengan metode pembalajaran lainnya.Metode Sebagai Berikut</div>
      <div class="col-sm-1 hidden-sm">&nbsp;</div>
    </div>
    <!-- /row -->
    <div class="row content-row">
      <div class="col-sm-1 hidden-sm">&nbsp;</div>
      <div class="col-12 col-sm-2">
        <p><i class="fa fa-bolt"></i></p>
        <h2 class="font-thin">Berbicara<br><span class="font-semibold">langsung</span></h2>
        <h4 class="font-thin">Dengan Berbicara langsung kami dapat memberikan metode yg tepat </h4>
      </div>
      <!-- /col12 -->
      <div class="col-12 col-sm-2">
        <p><i class="fa fa-cog"></i></p>
        <h2 class="font-thin">Latihan<br><span class="font-semibold">dan Tugas</span></h2>
        <h4 class="font-thin">Tugas dan latihan membuat mampu mengasah pikiran dan mental</h4>
      </div>
      <!-- /col12 -->
      <div class="col-12 col-sm-2">
        <p><i class="fa fa-cloud"></i></p>
        <h2 class="font-thin">Diskusi<br><span class="font-semibold">Sharing</span></h2>
        <h4 class="font-thin">siswa dapat berdikusi dengan teman dan pembimbing </h4>
      </div>
      <!-- /col12 -->
      <div class="col-12 col-sm-2">
        <p><i class="fa fa-map-marker"></i></p>
        <h2 class="font-thin">Lokasi<br><span class="font-semibold">Tempat</span></h2>
        <h4 class="font-thin">Lokasi bisa bernegoisasi dengan pembimbing</h4>
      </div>
      <!-- /col12 -->
      <div class="col-12 col-sm-2">
        <p><i class="fa fa-gift"></i></p>
        <h2 class="font-thin">Hadiah<br><span class="font-semibold">penghargaan</span></h2>
        <h4 class="font-thin">siswa yang memiliki prestasi akan mendapatkan kejutan</h4>
      </div>
      <!-- /col12 -->
      <div class="col-sm-1 hidden-sm">&nbsp;</div>
    </div>
    <!-- /row -->
  </div>
  <!-- /container -->
</div>
<!-- /slide4 -->

<!-- === Slide 5 === -->
<div class="slide story" id="clients" data-slide="5">
  <div class="container">
    <div class="row title-row">
      <div class="col-12 font-thin"><span class="font-semibold">Tim</span>Pendukung</div>
    </div>
    <!-- /row -->
    <div class="row line-row">
      <div class="hr">&nbsp;</div>
    </div>
    <!-- /row -->
    <div class="row subtitle-row">
      <div class="col-sm-1 hidden-sm">&nbsp;</div>
      <div class="col-12 col-sm-10 font-light">Terimakasi untuk pihak yang telah berpartisipasi dalam pembuatan website ini, sehinggah
        terciptlah website yang berkualitas dan berguna bagi bagi masyarakat
      </div>
      <div class="col-sm-1 hidden-sm">&nbsp;</div>
    </div>
    <!-- /row -->
    <div class="row content-row">
      <div class="col-1 col-sm-1 hidden-sm">&nbsp;</div>
      <div class="col-12 col-sm-2"><img src="<?= base_url(); ?>assets/user/img/client01.png" alt=""></div>
      <div class="col-12 col-sm-2"><img src="<?= base_url(); ?>assets/user/img/client02.png" alt=""></div>
      <div class="col-12 col-sm-2"><img src="<?= base_url(); ?>assets/user/img/client03.png" alt=""></div>
      <div class="col-12 col-sm-2"><img src="<?= base_url(); ?>assets/user/img/client04.png" alt=""></div>
      <div class="col-12 col-sm-2"><img src="<?= base_url(); ?>assets/user/img/client05.png" alt=""></div>
      <div class="col-1 col-sm-1 hidden-sm">&nbsp;</div>
    </div>
    <!-- /row -->
  </div>
  <!-- /container -->
</div>
<!-- /slide5 -->

<!-- === Slide 6 / Contact === -->
<div class="slide story" id="contact" data-slide="6">
  <div class="container">
    <div class="row title-row">
      <div class="col-12 font-light">hubungi<span class="font-semibold">kami</span></div>
    </div>
    <!-- /row -->
    <div class="row line-row">
      <div class="hr">&nbsp;</div>
    </div>
    <!-- /row -->
    <div class="row subtitle-row">
      <div class="col-sm-1 hidden-sm">&nbsp;</div>
      <div class="col-12 col-sm-10 font-light">Kamu dapat menghubungi kami jika terjadi masalah </div>
      <div class="col-sm-1 hidden-sm">&nbsp;</div>
    </div>
    <!-- /row -->
    <div id="contact-row-4" class="row">
      <div class="col-sm-1 hidden-sm">&nbsp;</div>
      <div class="col-12 col-sm-2 with-hover-text">
        <p><a target="_blank" href="#"><i class="fa fa-phone"></i></a></p>
        <span class="hover-text font-light ">+62 8338383</span></a>
      </div>
      <!-- /col12 -->
      <div class="col-12 col-sm-2 with-hover-text">
        <p><a target="_blank" href="#"><i class="fa fa-envelope"></i></a></p>
        <span class="hover-text font-light ">LesNusantara@gmail.com</span></a>
      </div>
      <!-- /col12 -->
      <div class="col-12 col-sm-2 with-hover-text">
        <p><a target="_blank" href="#"><i class="fa fa-home"></i></a></p>
        <span class="hover-text font-light ">Malang, kec.Jatimulyo<br>zip code 87787</span></a>
      </div>
      <!-- /col12 -->
      <div class="col-12 col-sm-2 with-hover-text">
        <p><a target="_blank" href="#"><i class="fa fa-facebook"></i></a></p>
        <span class="hover-text font-light ">ClassNusantara</span></a>
      </div>
      <!-- /col12 -->
      <div class="col-12 col-sm-2 with-hover-text">
        <p><a target="_blank" href="#"><i class="fa fa-twitter"></i></a></p>
        <span class="hover-text font-light ">@SmartClassNusantara</span></a>
      </div>
      <!-- /col12 -->
      <div class="col-sm-1 hidden-sm">&nbsp;</div>
    </div>
    <!-- /row -->