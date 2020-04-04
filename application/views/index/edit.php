<!-- === MAIN Background === -->
<div class="slide story" id="intro" data-slide="1">
  <div class="container">
    <div id="home-row-1" class="row clearfix">
      <div class="col-12">
        <h1 class="font-semibold">Edit Akun <span class="font-thin">SMART CLASS NUSANTARA</span></h1>
      </div>
      <!-- /col-12 -->
    </div>
    <!-- /row -->

    <!-- /row -->
  </div>
  <!-- /container -->
</div>

<div class="card-body">
  <form action="" method="post">
    <input type="hidden" name="id" value="<?= $login['id']; ?>">
    <div class="form-group">
      <label for="username">Username</label>
      <input type="text" name="username" class="form-control" id="username" value="<?= $login['username']; ?>">
      <small class="form-text text-danger"><?= form_error('username'); ?></small>
    </div>
    <div class="form-group">
      <label for="password">Password</label>
      <input type="text" name="password" class="form-control" id="password" value="<?= $login['password']; ?>">
      <small class="form-text text-danger"><?= form_error('password'); ?></small>
    </div>
    <input type="hidden" name="level" value="<?= $login['level']; ?>">

    <button type="submit" name="ubah" class="btn btn-primary float-right">Ubah Data</button>
  </form>
</div>

<!-- /slide1 -->