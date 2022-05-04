<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <title>@yield('title')</title>
    <meta charset="utf-8" />
    <meta name="csrf-token" content="{{ csrf_token() }}"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <!-- Favicons -->
    <link href="/img/favicons/maitre.png" rel="icon">
    <link href="" rel="apple-touch-icon">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,600,600i,700,700i|Satisfy|Comic+Neue:300,300i,400,400i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <link href="/css/style.css" rel="stylesheet">

</head>


<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center header-transparent">
      <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

          <div class="logo me-auto">
              <a href="/"><img class="logo-maitre" src="/img/logos/maitre.png" class="img-fluid"></a>
          </div>
          <nav id="navbar" class="navbar order-last order-lg-0">
              <ul>
                  <div class="search">
                      <label>
                          <input type="text" placeholder="pesquise aqui...">
                          <a href="./restaurante/pesquisaRest.php"><ion-icon name="search"></ion-icon></a>
                      </label>
                  </div>
                  <li><a class="nav-link scrollto active" href="/">Inicio</a></li>
                  <li><a class="nav-link scrollto" href="#restaurantes">Restaurantes</a></li>
                  <li><a class="nav-link scrollto" href="/app">APP</a></li>
                  <li><a class="nav-link scrollto" href="#restaurantePremium">Premium</a></li>
              </ul>
              <i class="bi bi-list mobile-nav-toggle"></i>
          </nav><!-- .navbar -->
          @guest
            <a href="/login" class="book-a-table-btn scrollto">LOGIN</a>
            <a href="/register" class="book-a-table-btn scrollto">CADASTRE-SE</a>
          @endguest

          @auth
            <a href="/clientes" class="book-a-table-btn scrollto"><i class="far fa-user"></i>  MEU PERFIL</a>
            <form action="/logout" method="POST">
              @csrf
              <a href="/logout" class="book-a-table-btn scrollto" onclick="event.preventDefault();
              this.closest('form').submit();"><i class="fas fa-sign-out"></i>  SAIR</a>
            </form>
          @endauth
         
      </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
@yield('content')

  <!-- ======= Footer ======= -->
  <footer id="footer">
      <div class="container">
          <div class="logo me-auto">
              <a href="index.html"><img src="/img/logos/maitre.png" class="img-fluid"></a>
          </div>
          <div class="social-links">
              <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
              <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
          </div>
          <div class="copyright">
              &copy; Copyright <strong><span>Maître</span></strong>. All Rights Reserved
          </div>
          <div class="credits">
              Criado por <a href="">ATLANTIC</a>
          </div>
      </div>
  </footer>

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
          class="bi bi-arrow-up-short"></i></a>

  <!--ion icons-->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

  <!-- Vendor JS Files -->
  <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="/js/main.js"></script>

</body>

</html>