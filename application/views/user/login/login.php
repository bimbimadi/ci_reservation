<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>

    <title>JavasShop Admin</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport'/>
    <meta name="viewport" content="width=device-width"/>

    <link href="<?php echo base_url('assets/css/bootstrap.min.css');?>" rel="stylesheet"/>

    <link href="<?php echo base_url('assets/css/animate.min.css');?>" rel="stylesheet"/>

    <link href="<?php echo base_url('assets/css/paper-dashboard.css');?>" rel="stylesheet"/>

    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">

    <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>

    <link href="<?php echo base_url('assets/css/themify-icons.css');?>" rel="stylesheet">

</head>
<body>
<div class="wrapper">
    <div class="container" style="margin-top: 50px">
        <div class="row justify-content-center">
            <div class="col-md-6">
              <div class="card">
                  <h5 class="card-header panel-title" align="center"><strong>Pasien</strong></h5>
                  <div class="card-body">
                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                          <li class="nav-item">
                            <a class="nav-link active" id="pills-login-tab" data-toggle="pill" href="#pills-login" role="tab" aria-controls="pills-login" aria-selected="true" style="border-radius: 32px;">Login</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" id="pills-daftar-tab" data-toggle="pill" href="#pills-daftar" role="tab" aria-controls="pills-daftar" aria-selected="false" style="border-radius: 32px;">Daftar</a>
                          </li>
                        </ul>
                        <hr>
                        <div class="tab-content" id="pills-tabContent">
                          <div class="tab-pane active" id="pills-login" role="tabpanel" aria-labelledby="pills-login-tab">

                            <form action="<?php echo base_url();?>Login_pasien/login" method="post" class="needs-validation" novalidate>
                        
                                <div class="form-group">
                                    <label for="email">Email:</label>
                                    <input type="email" name="email" id="email" placeholder="Email" class="form-control border-input" style="border-radius: 32px;" required="">
                                    <div class="invalid-feedback">
                                      Tolong masukkan email anda.
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="password">Password:</label>
                                    <input type="password" name="password" id="password" placeholder="Password"
                                           class="form-control border-input"style="border-radius: 32px;" required="">
                                    <div class="invalid-feedback">
                                      Tolong masukkan password anda.
                                    </div>
                                </div>
                                <div class="form-group">
                                    <center>
                                        <button class="btn btn-primary btn-wd" type="submit">Login</button>
                                    </center>
                                </div>
                            </div>
                            </form>
                          <div class="tab-pane fade" id="pills-daftar" role="tabpanel" aria-labelledby="pills-daftar-tab">
                              <?php echo form_open('hal_user/tambah_pasien/','class="needs-validation" novalidate');?>
                                 <div class="form-group">
                                  <label>Nama</label>
                                   <input type="text" name="nama_pasien" placeholder="Masukkan nama anda" class="form-control border-input" required="" style="border-radius: 32px;">
                                    <div class="invalid-feedback">
                                      Tolong masukkan nama anda.
                                    </div>
                                 </div>
                                 <div class="form-group">
                                  <label>Tanggal lahir</label>
                                   <input type="date" name="ttl_pasien" placeholder="Silahkan pilih tanggal lahir" class="form-control border-input" required style="border-radius: 32px;">
                                   <div class="invalid-feedback">
                                      Tolong masukkan tanggal lahir anda.
                                    </div>
                                 </div>
                                 <div class="form-group">
                                  <label>Jenis Kelamin</label>
                                   <div>
                                      <input type="radio" name="jk_pasien" value="L">
                                      <label>L</label>
                                    
                                      <input type="radio" name="jk_pasien" value="P">
                                      <label>P</label>
                                    </div>
                                 </div>
                                 <div class="form-group">
                                  <label>Alamat</label>
                                   <textarea name="alamat" placeholder="Masukkan Alamat Lengkap" style="border-radius: 32px;" class="form-control border-input" required=""></textarea>
                                   <div class="invalid-feedback">
                                      Tolong masukkan alamat anda.
                                    </div>
                                 </div>
                                 <div class="form-group">
                                  <label>No. Telp</label>
                                   <input type="text" name="no_telp" placeholder="Masukkan No Telp anda" class="form-control border-input" style="border-radius: 32px;" required="">
                                   <div class="invalid-feedback">
                                      Tolong masukkan no telp anda.
                                    </div>
                                 </div>
                                 <div class="form-group">
                                  <label>Email</label>
                                   <input type="email" style="border-radius: 32px;" name="email" placeholder="Masukkan email anda" class="form-control border-input" required="">
                                   <div class="invalid-feedback">
                                      Tolong masukkan email anda.
                                    </div>
                                 </div>
                                 <div class="form-group">
                                  <label>Password</label>
                                   <input type="password" name="password" style="border-radius: 32px;" placeholder="Masukkan Password" class="form-control border-input" required="">
                                   <div class="invalid-feedback">
                                      Tolong masukkan password anda.
                                    </div>
                                 </div>
                                 <!-- <div class="form-group">
                                  <label>Tulis Ulang Password</label>
                                   <input type="password" name="conf-password" style="border-radius: 32px;" placeholder="Masukkan Password anda kembali" class="form-control border-input" required="">
                                 </div>-->
                                        <button type="submit" class="btn btn-success btn-wd">Daftar</button>
                                        <a href="<?php echo base_url('/'); ?>" class="btn btn-danger btn-wd">Batal</a>
                                  <?php echo form_close(); ?>
                          </div>
                        </div>
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>
<footer class="footer">
            <div class="container-fluid">
                <div class="copyright center">
                    &copy;
                    <script>document.write(new Date().getFullYear())</script>
                    , made with <i class="fa fa-heart heart"></i> by <a href="">Yota</a>
                </div>
            </div>
        </footer>

    </div>
</div>

</body>

<script src="<?php echo base_url('assets/js/jquery-1.10.2.js');?>" type="text/javascript"></script>
<script src="<?php echo base_url('assets/js/bootstrap.min.js');?>" type="text/javascript"></script>
<script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
</script>
</html>
