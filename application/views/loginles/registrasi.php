<?php
// echo form_open('masuk/loginles');
?>
<br>
<br>
<br>
<div class="container gy-5">
    <div class="row mt-5">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-6 mx-auto">

                    <body style="background-color: cornflowerblue">
                        <div style="color:white">
                            <div class="card-header" style="background-color:teal ; border-radius: 10px">
                                <center>
                                    <h3 class="mb-8">Daftar</h3>
                                </center>
                            </div>
                            <div class="card-body">
                                <form class="form" role="form" autocomplete="off" id="formlogin" method="POST">
                                    <div class="form-group">
                                        <label for="username">Username</label>
                                        <input type="text" name="username" class="form-control" id="username">
                                        <small class="form-text text-danger"><?= form_error('username'); ?></small>
                                    </div>
                                    <div class="form-group">
                                        <label for="password">Password</label>
                                        <input type="text" name="password" class="form-control" id="password">
                                        <small class="form-text text-danger"><?= form_error('password'); ?></small>
                                    </div>
                                    <!-- <div class="form-group">
                                        <label for="level">Level</label>
                                        <input type="text" name="level" class="form-control" id="leve">
                                        <small class="form-text text-danger"><?= form_error('level'); ?></small>
                                    </div> -->
                                    <input type="hidden" name="level" id="level" value="user">

                                    <button type="submit" class="btn btn-success btn-lg float-right" name="tambah">Tambah</button>

                                </form>
                            </div>

                        </div>

                </div>
            </div>

        </div>

    </div>

</div>
<?php
                                                                                form_close();
?>