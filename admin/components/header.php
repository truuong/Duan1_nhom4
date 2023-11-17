<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin | Dashboard</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="public/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tempusdominus-bootstrap-4@5.1.2/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/icheck-bootstrap@3.0.1/dist/icheck-bootstrap.min.css">

  <!-- JQVMap -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/jqvmap@1.5.1/dist/jqvmap.min.css">

  <!-- Theme style -->
  <link rel="stylesheet" href="../public/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/overlayscrollbars@1.13.1/css/OverlayScrollbars.min.css">

  <!-- Daterange picker -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/daterangepicker@3.0.5/daterangepicker.css">

  <!-- summernote -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css">

  

</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="../public/dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div>

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

 
    <!-- Sidebar -->
     <!-- Main Sidebar Container -->
 <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <img src="data:image/jpeg;base64,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" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

<div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="info">
          
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>

          </li>
          <li class="nav-item">
            <a href="" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Danh mục sản phẩm
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Danh sách sản phẩm
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Danh mục bài viết
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Danh sách bài viết
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Danh sách người dùng
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Danh sách đơn hàng
              </p>
            </a>
          </li>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    
    <!-- /.content-header -->