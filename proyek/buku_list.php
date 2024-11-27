<?php
    //memanggil koneksi database
    include 'koneksi.php'
?>

<?php
    session_start();
    if(!$_SESSION['username']){
        header('location: login_perpus.php');
        exit();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="dist/gambar/buku.png">
  <title>Sistem Informasi Perpustakaan | Dashboard</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">

      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="" class="brand-link">
      <img src="dist/gambar/buku.png" alt="PERPUSTAKAAN LOGO" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light"><h1>LIBRARY</h1></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/gambar/satrio.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?= $_SESSION['username']?></a>
        </div>
      </div>


      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
          with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="perpustakaan.php" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item menu-open active">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Data Master
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item active">
                        <a href="buku_list.php" class="nav-link active">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Data Buku</p>
                        </a>
                </li>
                <li class="nav-item">
                        <a href="anggota_list.php" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Data Anggota</p>
                        </a>
                </li>
                <li class="nav-item">
                        <a href="peminjam_list.php" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Data Peminjam</p>
                        </a>
                </li>
            </ul>
            </li>
            <li class="nav-item">
                        <a href="proses_logout.php" class="nav-link">
                            <i class="nav-icon fas fa-solid fa-lock"></i>
                                <p>Logout</p>
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
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Data Master</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item">Data Master</li>
              <li class="breadcrumb-item active">Data Buku</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">

        </div>
        <!-- /.row -->
        <!-- Main row -->
        <div class="row">
          <!-- Left col -->
          <section class="col-lg-12 connectedSortable">
            <!-- Custom tabs (Charts with tabs)-->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="fas fa-chart-pie mr-1"></i>
                  Data Buku
                </h3>

              <div class="card-tools">
                    <form action="buku_list.php" method="GET">
                      <div class="input-group">
                          <input class="form-control" type="search" placeholder="Pencarian" name="cari" autocomplete="off">
                          <div class="input-group-append mr-2">
                            <button class="btn btn-info" type="submit">
                              <i class="fas fa-search mr-1"></i> 
                              Cari
                            </button>
                          </div>
                            <a target="_blank" class="btn btn-default mr-2" href="cetak_buku.php"><i class="fas fa-print mr-1"></i>Cetak</a>
                            <a class="btn btn-primary mr-2" href="tambah_buku_form.php"><i class="fas fa-plus mr-1"></i>Tambah</a>
                          </div>
                      </div>
                  </form>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
				        <table class="table table-bordered">
					          <tr>
                        <th> No. </th>
					              <th> Judul Buku </th>
					              <th> Jenis Buku </th>
					              <th> Penulis Buku </th>
					              <th> Penerbit Buku </th>
					              <th> Tahun Terbit </th>
						            <th> Aksi </th>
				          	  </tr>	
                    
				      	    <?php 
                      if(isset($_GET ['cari'])){
                        $cari = $_GET['cari'];
                        $q = $koneksi->query("SELECT buku.id_buku, buku.judul_buku, jenis_buku.nama_jenis,buku.penulis, buku.penerbit, buku.tahun_terbit
                        FROM buku, jenis_buku
                        WHERE jenis_buku.id_jenis = buku.id_jenis
                        AND buku.judul_buku LIKE '%$cari%'");
                        
                      }else {
                        $q = $koneksi->query("SELECT buku.id_buku, buku.judul_buku, jenis_buku.nama_jenis,buku.penulis, buku.penerbit, buku.tahun_terbit
                        FROM buku, jenis_buku
                        WHERE jenis_buku.id_jenis = buku.id_jenis");
                      }
                        //memangggil semua data dari database 
                        while ($data = $q->fetch_assoc()){
                            echo "<tbody>
                                      <tr>
                                        <td>$data[id_buku]</td>
                                        <td>$data[judul_buku]</td>
                                        <td>$data[nama_jenis]</td>
                                        <td>$data[penulis]</td>
                                        <td>$data[penerbit]</td>
                                        <td>$data[tahun_terbit]</td>
                                        <td>
                                          <a href='ubah_buku_form.php?id_buku=$data[id_buku]' class='btn btn-success'><i class ='fas fa-edit mr-1'></i>Edit</a>
                                          <a href='hapusbuku.php?id_buku=$data[id_buku]' class='btn btn-danger'><i class ='fas fa-trash mr-1'></i>Hapus</a>
                                        </td>
                                      </tr>
                                  </tbody>";
                      }
					          ?>
				        </table>
                </div>
            </div>
            <!-- /.card -->

            
          </section>
          <!-- right col -->
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.2.0
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
</body>
</html>