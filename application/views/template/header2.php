<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Pendaftaran Beasiswa</title>
  <link href="<?= base_url() ?>assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="<?= base_url() ?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="<?= base_url() ?>assets/css/ruang-admin.min.css" rel="stylesheet">
  <link href="<?= base_url() ?>assets/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
</head>
<body id="page-top">
  <div id="wrapper">
    <!-- Sidebar -->
    <ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="">
        <div class="sidebar-brand-icon">
          <img src="<?= base_url() ?>assets/img/logo/fix.png">
        </div>
        <div class="sidebar-brand-text mx-3">Admin Dashboard</div>
      </a>
      <hr class="sidebar-divider my-0">
      <li class="nav-item">
    		<a class="nav-link" href="<?php echo base_url('dashboard_siswa') ?>">
    			<i class="fas fa-users"></i>
    			<span>Home</span></a>
    	</li>
    	<li class="nav-item">
    		<a class="nav-link" href="<?php echo base_url('biodata_siswa') ?>">
    			<i class="fas fa-users"></i>
    			<span>Data Diri</span></a>
    	</li>
    	<li class="nav-item">
    		<a class="nav-link" href="<?php echo base_url('isi_beasiswa') ?>">
    			<i class="fas fa-book-open"></i>
    			<span>Data Beasiswa</span></a>
    	</li>
    	<li class="nav-item">
    		<a class="nav-link" href="<?php echo base_url('upload_berkas') ?>">
    			<i class="fas fa-users"></i>
    			<span>Upload Berkas</span></a>
    	</li>
    </ul>
     <!-- Sidebar -->
     <div id="content-wrapper" class="d-flex flex-column">
      <div id="content">
        <!-- TopBar -->
        <nav class="navbar navbar-expand navbar-light bg-navbar topbar mb-4 static-top">
          <button id="sidebarToggleTop" class="btn btn-link rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>
          <ul class="navbar-nav ml-auto">
            
            
            <div class="topbar-divider d-none d-sm-block"></div>
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <img class="img-profile rounded-circle" src="<?= base_url() ?>assets/img/boy.png" style="max-width: 60px">
                <span class="ml-2 d-none d-lg-inline text-white small">Admin</span>
              </a>
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="javascript:void(0);" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>
          </ul>
        </nav>
        <!-- Topbar -->

        <!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
        </div>   
            <!-- Invoice Example -->
    <div id="content-wrapper">