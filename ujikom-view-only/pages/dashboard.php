<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
  <!-- <link rel="stylesheet" href="css/fontawesome/all.min.css"> -->
  <link rel="stylesheet" href="../css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="bi bi-list mb-1" style="font-size:20px"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-link <?= ($_GET['url'] == 'dashboard') ? 'active' : '' ?>">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link <?= ($_GET['url'] == 'add') ? 'active' : '' ?>">Contact</a>
      </li>
    </ul>

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" disabled type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" disabled type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
     
      
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
    </ul>
  </nav>

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="" class="brand-link py-3">
      <!-- <img src="img/projects.jpg" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8"> -->
      <!-- <span class="  w-100" style="background: red; width: 100%;">AdminLTE 3</span> -->
      <p class="fs-3 m-0 text-center">Pengaduan Masyarakat</p>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../img/projects.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Alexander Pierce</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" disabled type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar" disabled>
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
            <a href="?url=dashboard" class="nav-link <?= ($_GET['url'] == 'dashboard') ? 'active' : '' ?>">
              <i class="nav-icon bi bi-house"></i>
              <p>
                Home
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="?url=catatan-perjalanan" class="nav-link <?= ($_GET['url'] == 'catatan-perjalanan' || $_GET['url'] == 'add') ? 'active' : '' ?>">
              <i class="nav-icon bi bi-journal-check"></i>
              <p>
                Catatan Perjalanan
              </p>
            </a>
          </li>
          <li class="nav-item">
          <form action="" method="post">
            <input type="hidden" name="logout">
              <button class="nav-link btn bg-transparent text-muted">
              <i class="nav-icon bi bi-journal-check"></i>
              <p>
                LogOut
              </p>
            </button>
          </form>
          </li>
        </ul>
      </nav>
    </div>
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-4">
              <h1 class="m-0">PEDULI DIRI</h1>
          </div>
        </div>
      </div>
    </div>

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <?php
          
          if(isset($_GET['url']))
          {
           switch ($_GET['url']) {
             case 'dashboard':
               include "index.php";
               break;
               
             case 'catatan-perjalanan':
               include "catatan-perjalanan.php";
               break;

               case 'add':
               include "add.php";
               break;

               case 'edit':
               include "edit.php";
               break;

               case 'hapus':
               include "hapus.php";
               break;

             default:
               include "index.php";
               break;
           }
          }

          ?>
        </div>
      </div>
    </div>
  </div>


  <!-- Main Footer -->
  <footer class="main-footer">
    <strong>Copyright &copy; Smkpciwaringin <a href="#">SMK PESANTREN CIWARINGIN</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <!-- <b>Version</b> 3.1.0-rc -->
    </div>
  </footer>
</div>



<script src="../js/jquery.min.js"></script>
<script src="../js/adminlte.js"></script>
</body>
</html>
