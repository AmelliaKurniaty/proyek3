<!-- <?=
form_open('login/proses_login');
?> -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="<?php echo base_url('assets/img/logo/logoo.png')?>" rel="icon">
  <title>Login Page</title>

  <link href="<?php echo base_url('assets/vendor/fontawesome-free/css/all.min.css')?>" rel="stylesheet" type="text/css">
  <link href="<?php echo base_url('assets/vendor/bootstrap/css/bootstrap.min.css')?>" rel="stylesheet" type="text/css">
  <link href="<?php echo base_url('assets/css/ruang-admin.min.css')?>" rel="stylesheet">
</head>

<body class="bg-gradient-login">
  <!-- Login Content -->
  <div class="container-login">
    <div class="row justify-content-center">
      <div class="col-xl-6 col-lg-12 col-md-9">
        <div class="card shadow-sm my-5">
          <div class="card-body p-0">
            <div class="row">
              <div class="col-lg-12">
                <div class="login-form">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Login</h1>
                  </div>
                  <?php echo form_open('login/proses_login'); ?>
                  <form method="post">		
                    <div class="form-group">
                      <label for="exampleInputUsername2">Username</label>
                      <input type="text" name="username" class="form-control" id="inputUsername" aria-describedby="emailHelp" placeholder="Enter Email Address" required>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Password</label>
                      <input type="password" name="password" class="form-control" id="inputPassword" placeholder="Enter password" required>
                    </div>
                    <div class="form-group">
                      <button type="submit" class="btn btn-primary btn-block">Login</button>
                    </div>
                  </form>
                  <hr>
                  <div class="text-center">
                    <a class="font-weight-bold small" >Apakah anda punya akun? <a href="<?= base_url('register') ?>">Daftar Disini</a></a>
                  
                  </div>
                </div>
              </div>
    <!-- Login Content -->
    <script src="<?php echo base_url('vendor/jquery/jquery.min.js')?>"></script>
    <script src="<?php echo base_url('vendor/bootstrap/js/bootstrap.bundle.min.js')?>"></script>
    <script src="<?php echo base_url('vendor/jquery-easing/jquery.easing.min.js')?>"></script>
    <script src="<?php echo base_url('js/ruang-admin.min.js')?>"></script>
  </body>
</html>
</body>
</html>
<!-- <?=
form_close();
?> -->