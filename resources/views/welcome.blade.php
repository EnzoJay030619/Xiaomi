

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>Xiaomi Global | Parody System|Mi.com- Mi Global Home</title>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body class="hold-transition layout-top-nav">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand-md navbar-light navbar-white">
    <div class="container">
      <a href="" class="navbar-brand">
        <img src="{{asset('images/xiaomi.png')}}" alt=" " class="brand-image img-circle elevation-3"
             style="opacity: .8">
        <span class="brand-text font-weight-light">Xiaomi System</span>
      </a>
      
      <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse order-3" id="navbarCollapse">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
          <li class="nav-item">
            <a href="" class="nav-link"></a>
          </li>
        </ul>
        

      <!-- Right navbar links -->
      <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">
      @if (Route::has('login'))
                
                    @auth
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                        @endif
                    @endauth
            @endif
      </ul>
    </div>
  </nav>
  <!-- /.navbar -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container">
        <div class="row mb-2">
        <div class="container fluid">
        <div class="row" style="margin-left:-200px">
                <div id="Micarousel" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                          <li data-target="#Micarousel" data-slide-to="0" class="active"></li>
                          <li data-target="#Micarousel" data-slide-to="1"></li>
                          <li data-target="#Micarousel" data-slide-to="2"></li>
                          <li data-target="#Micarousel" data-slide-to="3"></li>
                        </ol>
                        <div class="carousel-inner">
                          <div class="carousel-item active">
                          <a href="">
                            <img src="{{asset('images/cover.jpg')}}" class="d-block " alt="RedMi Note 8 Pro" width="1510" height="700">
                          </div>
                          <div class="carousel-item">
                          <a href="">
                            <img src="{{asset('images/cover 3.jpg')}}" class="d-block " alt="Mi Mix Alpha" width="1510" height="700">
                          </div>
                          <div class="carousel-item">
                          <a href="">
                            <img src="{{asset('images/cover 4.jpg')}}" class="d-block " alt="Mi Mix Alpha" width="1510" height="700">
                          </div>
                          <div class="carousel-item">
                          <a href="">
                            <img src="{{asset('images/cover 2.jpg')}}" class="d-block" alt="Mi 9 Lite" width="1510" height="700" >
                          </div>
                        </div>
                        <a class="carousel-control-prev" href="#Micarousel" role="button" data-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#Micarousel" role="button" data-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="sr-only">Next</span>
                        </a>
                      </div>
        </div>
    </div>
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container">
 
    <div class="row" style="margin-top:5px;background-color: whitesmoke;">
        <div class="col-md-4"><a href=""><img src="{{asset('images/mol.jpg')}}" class="img-fluid" alt="smart band4"></div>
        <div class="col-md-4"><a href=""><img src="{{asset('images/mol 2.jpg')}}" class="img-fluid" alt="mi tv3s"></div>
        <div class="col-md-4"><a href=""><img src="{{asset('images/mol 3.jpg')}}" class="img-fluid" alt="mi a3"></div>
    </div><br>
    <div>
                  <h3 class="timeline-header"><a href="#"></h3>

                  <div class="timeline-body">
                    <div class="embed-responsive embed-responsive-16by9">
                      <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/RoZq8GbEqug" frameborder="0" allowfullscreen=""></iframe>
                    </div>
                  </div>
                  <div class="timeline-footer"><br>
                  </div>
                </div>
              </div>
        </div>
    
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
      
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2020-2021 <a href="">Suc</a>.</strong> All rights reserved.
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
