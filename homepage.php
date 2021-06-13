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
            <a href="homepage.php" class="nav-link active">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Diagnose HDD
              </p>
            </a>
          </li>
          <li class="nav-item">
              <a href="customer.php" class="nav-link disable">
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
            <h1>Diagnose HDD</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Diagnose HDD</li>
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
                <h3 class="card-title">Diagnose Hard Disk drive</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->

              <form action="CounterDiagnose.php" name="autoSumForm" enctype="multipart/form-data" method="POST">
                  
                <div class="card-body">
                  <div id="gejala">
                  <div>
                    <label for="InputName">Customer Name</label>
                    <input type="text" class="form-control" id="InputName" name="Nama" placeholder="Enter Name" required>
                  </div>
                  <hr>
                  <div>
                    <label for="InputHdName">Hard Disk Name</label>
                    <input type="text" class="form-control" id="InputHdName" name="NamaHD" placeholder="Enter Hard Disk Name" required >
                  </div>
                  <hr>
                  <label>Masukkan gejala Hard Disk</label>
                  
                 
                  <div class="row">
                      <div class="col-sm-4">
                        <!-- checkbox -->
                        <div>
                          <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" id="Checkbox1" type="checkbox" name="A" value="0">
                            <label for="Checkbox1" class="custom-control-label">Booting awal lambat</label>
                          </div>
                          <div class="custom-control custom-checkbox">
                              <input class="custom-control-input" id="Checkbox2" type="checkbox" name="AB" value="0">
                              <label for="Checkbox2" class="custom-control-label">Bunyi Hard Disk keras</label>
                          </div>
                          <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" id="Checkbox3" type="checkbox" name="A" value="0">
                            <label for="Checkbox3" class="custom-control-label">Proses lambat</label>
                          </div>
                          <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" id="Checkbox4" type="checkbox" name="A" value="0">
                            <label for="Checkbox4" class="custom-control-label">Bad Block saat Scan disk</label>
                          </div>
                          <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" id="Checkbox5" type="checkbox" name="A" value="0">
                            <label for="Checkbox5" class="custom-control-label">Transfer data terasa lambat</label>
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-4">
                          <!-- checkbox -->
                          <div>
                            
                          <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" id="Checkbox6" type="checkbox" name="C" value="0">
                            <label for="Checkbox6" class="custom-control-label">Stop Proses setelah Power on Self</label>
                          </div>
                          <div class="custom-control custom-checkbox">
                              <input class="custom-control-input" id="Checkbox7" type="checkbox" name="C" value="0">
                              <label for="Checkbox7" class="custom-control-label">Pesan BIOS “Harddisk Failure”</label>
                          </div>
                          <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" id="Checkbox8" type="checkbox" name="CF" value="0">
                            <label for="Checkbox8" class="custom-control-label">Tidak bisa masuk ke sistem operasi</label>
                          </div>
                          <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" id="Checkbox9" type="checkbox" name="DE" value="0">
                            <label for="Checkbox9" class="custom-control-label">Booting gagal </label>
                          </div>
                          <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" id="Checkbox14" type="checkbox" name="D" value="0">
                            <label for="Checkbox14" class="custom-control-label">Komputer langsung  hang </label>
                          </div>
                          </div>
                        </div>
                      <div class="col-sm-4">
                          <!-- checkbox -->
                          <div>
                            
                          <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" id="Checkbox11" type="checkbox" name="D" value="0">
                            <label for="Checkbox11" class="custom-control-label">Pesan load OS "verifying dmipool data"</label>
                          </div>
                          <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" id="Checkbox12" type="checkbox" name="E" value="0">
                            <label for="Checkbox12" class="custom-control-label">Muncul pesan Invalid Partition Table</label>
                          </div>
                          <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" id="Checkbox13" type="checkbox" name="E" value="0">
                            <label for="Checkbox13" class="custom-control-label">Sistem tidak bisa diaktifkan</label>
                          </div>
                          <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" id="Checkbox15" type="checkbox" name="F" value="0">
                            <label for="Checkbox15" class="custom-control-label">Muncul pesan kode kesalahan dari nomor 1702 - 1782</label>
                          </div>
                          
                        </div>
                        </div>  
                  </div>
                  <hr>
                  <label>Kategori gejala Hard Disk</label>
                  <div class="row">
                      <div class="col-sm-2">
                          <label><b>Hard Disk Drive is Bad Sector</b></label>
                          <input class="form-control" type="text" name="total" value="0" readonly>
                      </div>
                      <div class="col-sm-2">
                          <label><b>Hard Disk Drive is noisy</b></label>
                          <input class="form-control" type="text" name="totalB" value="0" readonly>
                      </div>
                      <div class="col-sm-2">
                          <label><b>Hard Disk Drive is Failure</b></label>
                          <input class="form-control" type="text" name="totalC" value="0" readonly>
                      </div>
                      <div class="col-sm-2">
                          <label><b>HDD stuck on loading OS</b></label>
                          <input class="form-control" type="text" name="totalD" value="0" readonly>
                      </div>
                      <div class="col-sm-2">
                          <label><b>HDD Invalid Partition Table</b></label>
                          <input class="form-control" type="text" name="totalE" value="0" readonly>
                      </div>
                      <div class="col-sm-2">
                        <label><b>HDD reported Post Error</b></label>
                        <input class="form-control" type="text" name="totalF" value="0" readonly>
                    </div>
                  </div>
                  </div>

                  <script src="AutoCounting.js"></script>
               
                  
                  
                </div>
              
                <!-- /.card-body -->
                <div class="modal-footer">
                  <button type="submit" name="diagnose" value="diagnose" class="btn btn-success">Diagnose</button>
                 </div>
                
              </form>
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
