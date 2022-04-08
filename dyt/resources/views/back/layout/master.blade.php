
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Responsive admin dashboard and web application ui kit. ">
  <meta name="keywords" content="blank, starter">

    {!! SEO::generate() !!}

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,300i" rel="stylesheet">

  <!-- Styles -->
  <link href="/assets/css/core.min.css" rel="stylesheet">
  <link href="/assets/css/app.min.css" rel="stylesheet">
  <link href="/assets/css/style.min.css" rel="stylesheet">

  <!-- Favicons -->
  <link rel="apple-touch-icon" href="assets/img/apple-touch-icon.png">
  <link rel="icon" href="assets/img/favicon.png">
</head>

<body>

  <!-- Preloader -->
  <div class="preloader">
    <div class="spinner-dots">
      <span class="dot1"></span>
      <span class="dot2"></span>
      <span class="dot3"></span>
    </div>
  </div>


  <!-- Sidebar -->
  <aside class="sidebar sidebar-icons-right sidebar-icons-boxed sidebar-expand-lg">
    <header class="sidebar-header">
      <a class="logo-icon" href="#">LATENESS</a>
      <span class="logo">
        <a href="#"><img src="http://birmilyonnokta.com/view/upload/images/logo/2021/07/07/12/579e9038dd78372a57fbe0672d4e16d9.png" alt="logo"></a>
      </span>
      <span class="sidebar-toggle-fold"></span>
    </header>

    <nav class="sidebar-navigation">
      @include('back.layout.sidebar')
    </nav>

  </aside>
  <!-- END Sidebar -->


  <!-- Topbar -->
  <header class="topbar">
    <div class="topbar-left">
      <span class="topbar-btn sidebar-toggler"><i>&#9776;</i></span>
    </div>

    <div class="topbar-right">
      <ul class="topbar-btns">
        <!-- Notifications -->
        <li class="dropdown d-none d-md-block">
          <span class="topbar-btn " data-toggle="dropdown"><i class="ti-user"></i> {{Sentinel::getUser()->first_name}} {{Sentinel::getUser()->last_name}}</span>
          <div class="dropdown-menu dropdown-menu-right">
            <a class="dropdown-item" href="{{route('getLogOut')}}"><i class="ti-user"></i> Çıkış</a>
          </div>
        </li>
        <!-- END Notifications -->
      </ul>
      <div class="topbar-divider"></div>
    </div>
  </header>
  <!-- END Topbar -->


  <!-- Main container -->
  <main class="main-container">
    <div id="app">
      @yield('content')
    </div>

    <!-- Footer -->
    <footer class="site-footer">
      <div class="row">
        <div class="col-md-6">
          <p class="text-center text-md-left">Copyright © 2022 <a href="#">DYT T.Kopan</a>   /LATENESS</p>
        </div>
      </div>
    </footer>
    <!-- END Footer -->

  </main>
  <!-- END Main container -->



  <!-- Global quickview -->
  <div id="qv-global" class="quickview" data-url="assets/data/quickview-global.html">
    <div class="spinner-linear">
      <div class="line"></div>
    </div>
  </div>
  <!-- END Global quickview -->



  <!-- Scripts -->
  <script src="/assets/js/core.min.js"></script>
  <script src="/assets/js/app.min.js"></script>
  <script src="/assets/js/script.min.js"></script>

</body>
</html>
