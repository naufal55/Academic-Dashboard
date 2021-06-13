<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Diagnoser Hard Disk Drive | HDD Test Diagnostics Software</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini">


   

	
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="homepage.php" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">About</a>
      </li>
    </ul>
    <ul class="navbar-nav ml-auto">
        <li data-toggle="modal" data-target="#mydaftar">
          <a class="nav-link" href="#">
            <!--<i class="far fa-user"></i>-->  
            <i class="fas fa-user"></i>
            Admin
          </a>
        </li>
        <li data-toggle="modal" data-target="#mylogin">
          <a class="nav-link" href="index.php">
              <i class="fas fa-sign-out-alt"></i>
            Sign Out
          </a>
        </li>
      </ul>

  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <img src="dist/img/HDDlogo.png"
           alt="HDDlogo"
           class="brand-image img-circle elevation-3"
           style="opacity: 1">
      <span class="brand-text font-weight-light">Diagnoser HDD</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">  

          <li class="nav-item">
            <a href="homepage.php" class="nav-link disable">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Diagnose HDD
              </p>
            </a>
          </li>
          <li class="nav-item">
              <a href="customer.php" class="nav-link active">
                <i class="nav-icon fas fa-file"></i>
                <p>
                  Customer Information
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
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Customer Information</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Customer Information</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
  

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">

            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Customer Information</h3>
              </div>
              <!-- /.card-header -->
              
                          <?php
                        include("koneksi.php");
                  if(isset($_GET['aksi']) == 'delete'){
                    $id = $_GET['id'];
                    $ngecek = mysqli_query($koneksi, "SELECT * FROM pelanggan WHERE id='$id'");
                    if(mysqli_num_rows($ngecek) == 0){
                      echo '<div class="alert alert-info">Data tidak ditemukan.</div>';
                    }else{
                      $delete = mysqli_query($koneksi, "DELETE FROM pelanggan WHERE id='$id'");
                      if($delete){
                        echo '<div class="alert alert-danger">Data berhasil dihapus.</div>';
                      }else{
                        echo '<div class="alert alert-info">Data gagal dihapus.</div>';
                      }
                    }
                  }
                  ?>
                  
            <div class="table-responsive">
              <table class="table table-striped table-hover">
                    <tr>
                      <th>NAMA PELANGGAN</th>
                      <th>NAMA HARDDISK</th>
                      <th>KATEGORI KERUSAKAN</th>
                      <th>SOLUSI</th>
                      <th>KET</th> 
                    </tr>
                      <?php
                include("koneksi.php");
                
                  
                  $ngecek = mysqli_query($koneksi, "SELECT * FROM pelanggan");
                  $baris=mysqli_num_rows($ngecek);
                  if($baris == 0){
                    echo '<tr><td colspan="8">Tidak ada pelanggan.</td></tr>';
                  }else{

                    while ($bag=mysqli_fetch_assoc($ngecek)) {
                    echo '
                      <tr>
                      <td>'.$bag['nama'].'</td>
                      <td>'.$bag['namahd'].'</td>
                      <td>'.$bag['kategori'].'</td>
                      <td>'.$bag['solusi'].'</td>
                      <td>
                        <a href="customer.php?aksi=delete&id='.$bag['id'].'" title="Hapus pelanggan anda" onclick="return confirm(\' Apakah anda yakin ingin membatalkan pelanggan anda?\')"><i class="fas fa-trash-alt"></i></a>
                      </td>
                      <td>';
                                }
                  }  
                  ?>
              </table>

              <!-- form start -->
            </div>
            <!-- /.card footer-->

           
          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 1.0.0
    </div>
    <strong>Copyright &copy; 2020 <a href="#">DG</a>.</strong> All rights
    reserved.
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
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- bs-custom-file-input -->
<script src="plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<script type="text/javascript">
$(document).ready(function () {
  bsCustomFileInput.init();
});
</script>
</body>
</html>
