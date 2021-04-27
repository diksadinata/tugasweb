
<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>diksadinata | Dashboard</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('template')}}/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="{{asset('template')}}/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{asset('template')}}/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{asset('template')}}/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('template')}}/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{asset('template')}}/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{asset('template')}}/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="{{asset('template')}}/plugins/summernote/summernote-bs4.min.css">
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
      <li class="nav-item d-none d-sm-inline-block">
      <a class="nav-link active" aria-current="page" href="{{ url('/') }}">Home</a>
      </li>
     
    </ul>

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3"method="get" action="/">
      <div class="input-group input-group-sm">
        <input name="search" class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="template/dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Brad Diesel
                  <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">Call me whenever you can...</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="template/dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  John Pierce
                  <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">I got your message bro</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="template/dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Nora Silvester
                  <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">The subject goes here</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
        </div>
      </li>
     
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="template/dist/img/AdminLTELogo.PNG" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">ADMIN</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="template/dist/img/anjay1.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Diksa Dinata</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          <li class="nav-item">
            <a href="pages/widgets.html" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                options
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                about
              </p>
            </a>
            
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                sig up
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/charts/chartjs.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>login</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/charts/flot.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>log out</p>
                </a>
              </li>
              
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <article style="text-align: center;">
  <div class="content-wrapper">
  <h1 class="m-0">LIST ANIME 2022</h1>
    
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
       
          <!-- /.col -->
          
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>56</h3>

                <p>ANIME UPDATE</p>
              </div>
              <div class="icon">
                <i class="ion ion-person"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>30</h3>

                <p>ANIME WINTER</p>
              </div>
              <div class="icon">
                <i class="ion ion-person"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>7</h3>

                <p>JADWAL RILIS</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>14</h3>

                <p>STREAMING</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
         
            
       
            <ul class="right">
               <a href="/input" class="btn btn-primary btn-sm">tambahkan data</a> 
            </ul>
        
<table class="table">
    <thead class="black">
      <tr>
        <th scope="col">ID</th>
        <th scope="col">judul_anime</th>
        <th scope="col">genre</th>
        <th scope="col">season</th>
        <th scope="col">studio</th>
        <th scope="col">rating</th>
        <th scope="col">Aksi</th>
     </tr>
  </thead>
  <tbody>
  
  @foreach($listanime as $nl)

    <tr>
    <th scope="col">{{$nl->id}} </th>
     <th scope="col">{{$nl->judul_anime}} </th>
     <th scope="col">{{$nl->genre->genre}} </th>
     <th scope="col">{{$nl->season}} </th>
     <th scope="col">{{$nl->studio}} </th>
     <th scope="col">{{$nl->rating}} </th>
      <td>
      <a href="/edit/{{$nl->id}}" class="btn btn-primary btn-sm">Edit</a>
      <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#delete{{$nl->id}}">
                  hapus
        </button>
      </td>
    </tr>
    @endforeach
    
     
@foreach($listanime as $nl)
<div class="modal fade" id="delete{{$nl->id}}">
        <div class="modal-dialog">
          <div class="modal-content bg-danger">
            <div class="modal-header">
              <h4 class="modal-title">Hapus data ini?</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <p>apakah anda igin menghapus data ini?&hellip;</p>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-outline-light" data-dismiss="modal">tidak</button>
              
              <form action="/delete/{{$nl->id}}" method="post" class="inline">
              @method ('delete')
              @csrf
              <button type="submit" class="btn btn-outline-light">iya</button>
              </form>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->
      @endforeach
      </article>
     
<table>
<article style="text-align: center;">
      <h2 class="m-0">Rekomendasi Anime Tahun 2021</h2>
  <p>
    2021 merupakan tahun yang sangat membahagiakan bagi para penikmat anime, karna tahun ini sangat banyak sekali anime yang di tunggu-tunggu akhirnya di rilis di tahun 2021
  </p>
    <P>
      Tidak terasa musim gugur berjalan dengan cepat dan kita telah mulai memasuki musim dingin. Itu artinya akan ada banyak anime baru yang menanti untuk kita tonton. Pada artikel kali ini, IDN Times Community akan berbagi judul-judul anime menarik untuk kita tonton di musim dingin 2021 ini. Apa sajakah judulnya? Yuk, kita simak bersama-sama!           
    </p>
      <p>
        <p style="text-align-center">
          <b>1. Dr. STONE: STONE WARS</b>
        </p>
      </p>
    <p>
     <img src="template/dist/img/981906.jpg" width="500" height="320"  />
    </p>
  <p>
  Season kedua dari petualangan Senku, sang scientist, bersama teman-temannya ini akan yang berusaha mengembalikan dunia kembali seperti semula setelah kejadian aneh yang membuat seluruh manusia di muka bumi menjadi batu. Seperti judulnya, yaitu Stone Wars, season kali ini berfokus pada pertempuran melawan Tsukasa Shisio dan tentunya mengandalkan ilmu pengetahuan yang luar biasa dari Senku.<p>
  Season kedua dari anime yang merupakan adaptasi dari manga berjudul sama ini akan kembali dikerjakan oleh TMS Entertainment dan rencananya akan rilis pada 14 Januari 2021 mendatang. Untuk kamu yang sudah menonton season pertama, pasti sudah tidak sabar lagi melihat sepak terjang Senku, bukan? 
  <P>

    <div class="text-align-center">
      <b>2. Yakusoku no Neverland season 2</b>
    </div>
  <P>
    <br>
        <img src="template/dist/img/1001742.png" width="500" height="320">
    </br>
  <p>
  Setelah akhirnya berhasil kabur dari tempat dia dibesarkan, Emma dan kawan-kawan dihadapkan dengan tantangan baru yaitu bertahan hidup di dunia yang sama sekali asing dengan mereka. Beruntung, mereka bertemu dengan dua orang rekan yang tak disangka sebelumnya. Lambat laun, mereka semakin mampu untuk bertahan hidup.
  <p>

  Season kedua dari anime ini merupakan kelanjutan dari season pertama saat Emma pertama kali mengetahui rahasia sebenarnya dari tempat dia dibesarkan. Hal itu mendorong Emma untuk kabur dari tempat tersebut sambil membawa saudara-saudaranya yang masih kecil. Namun, apakah mereka bisa bertahan hidup di luar sana? Anime ini mulai tayang pada 7 Januari 2021.
  <p>
      <div class="center text-align-center">
       <b>3. Go-toubun no Hanayome ∬</b>
      </div>

  <p>
  <img src="template/dist/img/1002864.png" width="500" height="320"  />
  <p>  
  Season kedua dari Waifu War antara lima saudari kembar untuk memperebutkan Futaro Uesugi yang merupakan guru privat mereka. Setelah season pertama anime ini tayang, semakin banyak yang dibuat penasaran siapakah yang akhirnya akan dipinang oleh Futaro Uesugi dan saling berdebat siapakah yang terbaik dari kelima saudari tersebut.<p>

  Sebagai informasi, pada awal kisah anime ini, salah satu dari kelima saudari tersebut akan menikah dengan Futaro Uesugi. Namun, karena mereka kembar, sulit untuk mengetahui siapakah orang tersebut. Untuk kamu yang juga dibuat penasaran, anime ini bisa kamu saksikan pada 7 Januari 2021 mendatang, lho.
  </article>
</table>
<div  class="post-info">
        Di  Posting  Oleh  <b>Admin</b>
</div>
<br></br>
    <table border="1" width="100%">
        <thead>
            <tr>
                <th>daftar Anime</th>
                <th>Tanggal rilis</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>
                    <ul>
                        <li>Dr. STONE: STONE WARS</li>
                        <li>Yakusoku no Neverland season 2</li>
                        <li> Go-toubun no Hanayome ∬</li>
                    </ul>
                </td>
                <td>
                    <ul>
                        <li>1   JANUARI   2021</li>
                        <li>2   FEBRUARI  2021</li>
                        <li>17  JANUARI   2021</li>
                    </ul>
                </td>
            </tr>
        </tbody>
        </table>
    </div>
    <br></br>
      

                <!-- /. tools -->
              </div>
              <!-- /.card-header -->
              <div class="card-body pt-0">
                <!--The calendar -->
                <div id="calendar" style="width: 100%"></div>
              </div>
              <!-- /.card-body -->
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
  <!-- <footer class="main-footer">
    <strong>Copyright &copy; 2014-2020 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.1.0-rc
    </div>
  </footer> -->
  
  

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{asset('template')}}/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{asset('template')}}/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{asset('template')}}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="{{asset('template')}}/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="{{asset('template')}}/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="{{asset('template')}}/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="{{asset('template')}}/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="{{asset('template')}}/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="{{asset('template')}}/plugins/moment/moment.min.js"></script>
<script src="{{asset('template')}}/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{asset('template')}}/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="{{asset('template')}}/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="{{asset('template')}}/dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('template')}}/dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{asset('template')}}/dist/js/pages/dashboard.js"></script>

</body>
</html>
