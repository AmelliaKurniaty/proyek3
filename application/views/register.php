<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="<?php echo base_url('assets/img/logo/logoo.png')?>" rel="icon">
  <title>Register Page</title>
  <link href="<?php echo base_url('assets/vendor/fontawesome-free/css/all.min.css')?>" rel="stylesheet" type="text/css">
  <link href="<?php echo base_url('assets/vendor/bootstrap/css/bootstrap.min.css')?>" rel="stylesheet" type="text/css">
  <link href="<?php echo base_url('assets/css/ruang-admin.min.css')?>" rel="stylesheet">
</head>
<body class="bg-white">
<br>
  <!-- Login Content -->
  <div class="container-login">
    <div class="row justify-content-center">
      <div class="col-xl-6 col-lg-6 col-md-9">
        <div class="card shadow-sm my-5">
          <div class="card-body p-0">
            <div class="row">
              <div class="col-lg-12">
                <div class="login-form">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Register</h1>
                  </div>
                  <form action="<?php echo base_url('register/proses_register');?>" method="POST">
                      <div class="form-group">
                        <div class="form-label-group">
                            NISN
                          <input type="text" name="nisn" id="inputNisn" class="form-control input_user" value="" placeholder="nisn" required="required">
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="form-label-group">
                            Name
                          <input type="text" name="nama" id="inputName" class="form-control input_user" value="" placeholder="name" required="required">
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="form-label-group">
                            Email
                          <input type="text" name="email" id="inputEmail" class="form-control input_user" value="" placeholder="email" required="required">
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="form-label-group">
                            Username
                            <input type="text" name="username" id="inputUsername" class="form-control input_user" value="" placeholder="username" required="required">
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="form-label-group">
                            Password
                            <input type="password" name="password" id="inputPassword" class="form-control input_user" value="" placeholder="password" required="required">
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="form-label-group">
                            Confirm Password
                            <input type="password" name="confirmpassword" id="inputconfirmPassword" class="form-control input_user" value="" placeholder="Confirm Password" required="required">
                        </div>
                      </div>
                      <button type="submit" class="btn btn-primary btn-lg float-right">Daftar</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Topbar -->

        <!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
        </div>   
            <!-- Invoice Example -->
    <div id="content-wrapper">
      <!-- Bootstrap core JavaScript-->
      <script src="<?php echo base_url('assets/vendor/jquery/jquery.min.js')?>"></script>
      <script src="<?php echo base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')?>"></script>
      <!-- Core plugin JavaScript-->
      <script src="<?php echo base_url('assets/vendor/jquery-easing/jquery.easing.min.js')?>"></script>
      <!-- Page level plugin JavaScript-->
      <script src="<?php echo base_url('assets/vendor/datatables/jquery.dataTables.js')?>"></script>
      <script src="<?php echo base_url('assets/vendor/datatables/dataTables.bootstrap4.js')?>"></script>
      <!-- Custom scripts for all pages-->
      <script src="<?php echo base_url('assets/js/sb-admin.min.js')?>"></script>
    </body>
</html>