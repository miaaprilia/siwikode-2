<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="<?= base_url(''); ?>public/ruangadmin/img/logo/LOGO1-01.png" rel="icon">
  <title><?= $title; ?></title>
  <link href="<?= base_url(''); ?>public/datatables/datatables.min.css" rel="stylesheet" type="text/css">
  <link href="<?= base_url(''); ?>public/ruangadmin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="<?= base_url(''); ?>public/ruangadmin/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="<?= base_url(''); ?>public/ruangadmin/css/ruang-admin.min.css" rel="stylesheet">
  <style type="text/css">
    #Left-Mar {
      margin-left: 50px;
    }
  </style>
</head>

<body id="page-top">
  <style>
    .sidebar.toggled .nav-item {
      margin-bottom: 0;
    }

    .sidebar .nav-item {
      position: relative;
      margin-bottom: -15px;
    }
  </style>
  <div id="wrapper">
    <!-- Sidebar -->
    <ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php echo base_url() ?>admin/">
        <div class="sidebar-brand-icon">
          <img src="<?= base_url(''); ?>public/ruangadmin/img/logo/LOGO2-01.png">
        </div>
        <div class="sidebar-brand-text mx-3">SIWIKODE</div>
      </a>
      <!-- <li class="nav-item active">
        <a class="nav-link" href="index.html">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Home</span></a>
        </li> -->
      <hr class="sidebar-divider">

      <div class="sidebar-heading">
        <?php

        if ($this->session->userdata('lvl') == 'user') {
          echo "Data user";
        } else {
          echo "Data master";
        }
        ?>
      </div>
      <!-- <li class="nav-item">
        <a class="nav-link" href="/about">
          <i class="fas fa-fw fa-user"></i>
          <span>Data Wisata</span>
        </a>
      </li> -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePage" aria-expanded="true" aria-controls="collapsePage">
          <i class="fas fa-fw fa-columns"></i>
          <span> <?php

                  if ($this->session->userdata('lvl') == 'user') {
                    echo "Data Wisata";
                  } else {
                    echo "Data Wisata ADmin";
                  }
                  ?></span>
        </a>
        <div id="collapsePage" class="collapse" aria-labelledby="headingPage" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="<?php echo base_url() ?>admin/base_wisata">Wisata Rekreasi</a>
            <a class="collapse-item" href="<?php echo base_url() ?>admin/base_kuliner">Wisata Kuliner</a>
          </div>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTable" aria-expanded="true" aria-controls="collapseTable">
          <i class="fas fa-fw fa-table"></i>
          <span>Jenis Wisata</span>
        </a>
        <div id="collapseTable" class="collapse" aria-labelledby="headingTable" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="<?php echo base_url() ?>admin/base_jenis_wisata">Wisata Rekreasi
              <a class="collapse-item" href="<?php echo base_url() ?>admin/base_jenis_kuliner">Wisata Kuliner</a>
              <!-- <a class="collapse-item" href="datatables.html">Ilustration</a>
            <a class="collapse-item" href="datatables.html">Template Banner</a> -->
          </div>
        </div>
      </li>
      <!-- <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBootstrap" aria-expanded="true" aria-controls="collapseBootstrap">
          <i class="far fa-fw fa-window-maximize"></i>
          <span>Content Writer</span>
        </a>
        <div id="collapseBootstrap" class="collapse" aria-labelledby="headingBootstrap" data-parent="#accordionSidebar">

          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item active" href="/writer">Data Menu</a>
            <a class="collapse-item" href="/siswa/datasiswa">Blogger</a>
            <a class="collapse-item" href="/identitas/dataidentitas">Fiverr</a>
          </div>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTable-1" aria-expanded="true" aria-controls="collapseTable">
          <i class="fas fa-fw fa-table"></i>
          <span>Social Media</span>
        </a>
        <div id="collapseTable-1" class="collapse" aria-labelledby="headingTable" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item active" href="/sosmed">Data Menu</a>
            <a class="collapse-item" href="simple-tables.html">Youtube</a>
            <a class="collapse-item" href="datatables.html">Instagram</a>
            <a class="collapse-item" href="datatables.html">Twitter</a>
            <a class="collapse-item" href="datatables.html">LinkedIn</a>
          </div>
        </div>
      </li> -->
      <!-- <li class="nav-item">
          <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePage" aria-expanded="true"
            aria-controls="collapsePage">
            <i class="fas fa-fw fa-columns"></i>
            <span>Design Grafis</span>
          </a>
          <div id="collapsePage" class="collapse" aria-labelledby="headingPage" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
              <h6 class="collapse-header">Example Pages</h6>
              <a class="collapse-item" href="login.html">Login</a>
              <a class="collapse-item" href="register.html">Register</a>
              <a class="collapse-item" href="404.html">404 Page</a>
              <a class="collapse-item" href="blank.html">Blank Page</a>
            </div>
          </div>
        </li> -->

      <hr class="sidebar-divider">
      <div class="sidebar-heading">
        Menu User
      </div>

      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url() ?>admin/base_profesi">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Profesi</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url() ?>admin/base_testimoni">
          <i class="fas fa-fw fa-home"></i>
          <span>Testimoni</span>
        </a>
      </li>
      <!-- <li class="nav-item">
        <a class="nav-link" href="/tahun/datatahun">
          <i class="fas fa-fw fa-columns"></i>
          <span>Tahun Ajaran</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/spp/dataspp">
          <i class="fas fa-fw fa-money-check-alt"></i>
          <span>SPP</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/about">
          <i class="fas fa-fw fa-user"></i>
          <span>Data Wisata</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="/menu">
          <i class="fas fa-fw fa-plus"></i>
          <span>Add Menu</span>
        </a>
      </li> -->

      <!-- <hr class="sidebar-divider">
      <div class="version" id="version-ruangadmin"></div> -->
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
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <img class="img-profile rounded-circle" src="<?= base_url(''); ?>public/ruangadmin/img/girl.png" style="max-width: 60px">
                <span class="ml-2 d-none d-lg-inline text-white small">Mia Aprilia Satya</span>
              </a>
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labzelledby="userDropdown">
                <!-- <a class="dropdown-item" href="#">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Profile
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                  Settings
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                  Activity Log
                </a> -->
                <div class="dropdown-divider"></div>


                <a href="<?php echo base_url('auth/logout') ?>">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>

              </div>
            </li>
          </ul>
        </nav>
        <!-- Topbar -->

        <!-- Container Fluid-->
        <?php $this->load->view($content); ?>
        <!---Container Fluid-->
      </div>
      <!-- Footer -->

      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>copyright &copy; <script>
                document.write(new Date().getFullYear());
              </script> - developed by
              <b><a href="{{ route('register') }}">SI06 Mahasiswa STT-NF</a></b>
            </span>
          </div>
        </div>
      </footer>
      <!-- Footer -->
    </div>
  </div>

  <!-- Scroll to top -->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <script src="<?= base_url(''); ?>public/ruangadmin/vendor/jquery/jquery.min.js"></script>
  <script src="<?= base_url(''); ?>public/datatables/datatables.min.js"></script>
  <script src="<?= base_url(''); ?>public/ruangadmin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?= base_url(''); ?>public/ruangadmin/vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="<?= base_url(''); ?>public/ruangadmin/js/ruang-admin.min.js"></script>
  <script src="<?= base_url(''); ?>public/ruangadmin/vendor/chart.js/Chart.min.js"></script>
  <script src="<?= base_url(''); ?>public/ruangadmin/js/demo/chart-area-demo.js"></script>

  <script>
    $(document).ready(function() {
      $('#myTable').DataTables();
    });
  </script>

</body>

</html>