<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <title>@yield('title')</title>
  <meta charset="utf-8" />
  <meta name="csrf-token" content="{{ csrf_token() }}"/>
  <meta name="format-detection" content="telephone=no">
  <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="icon" href="/images/favicon.ico" type="image/x-icon">
  <!-- Stylesheets-->
  <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Roboto:100,300,300i,400,500,600,700,900%7CRaleway:500">
  <link rel="stylesheet" href="/css/bootstrap.css">
  <link rel="stylesheet" href="/css/fonts.css">
  <link rel="stylesheet" href="/css/style.css">
</head>

<body>
  <div class="preloader">

  </div>
  <div class="page">
    <header class="section page-header">
      <!-- RD Navbar-->
      <div class="rd-navbar-wrap">
        <nav class="rd-navbar rd-navbar-modern" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static" data-lg-device-layout="rd-navbar-fixed" data-xl-layout="rd-navbar-static" data-xl-device-layout="rd-navbar-static" data-xxl-layout="rd-navbar-static" data-xxl-device-layout="rd-navbar-static" data-lg-stick-up-offset="56px" data-xl-stick-up-offset="56px" data-xxl-stick-up-offset="56px" data-lg-stick-up="true" data-xl-stick-up="true" data-xxl-stick-up="true">
          <div class="rd-navbar-inner-outer">
            <div class="rd-navbar-inner">
              <!-- RD Navbar Panel-->
              <div class="rd-navbar-panel">
                <!-- RD Navbar Toggle-->
                <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>
                <!-- RD Navbar Brand-->

                <div class="rd-navbar-brand"><a class="brand" href="index.html"><img class="brand-logo-dark" alt="" width="100" height="10" /></a></div>
              </div>
              <div class="rd-navbar-right rd-navbar-nav-wrap">

                <div class="rd-navbar-main">

                  <!-- RD Navbar Nav-->
                  <ul class="rd-navbar-nav">
                    <li class="rd-nav-item active">
                      <a class="rd-nav-link" href="index.php">Inicio</a>
                    </li>
                    <li class="rd-nav-item">
                      <a class="rd-nav-link" href="restaurante.php">Restaurantes</a>
                    </li>
                    <li class="rd-nav-item">
                      <a class="rd-nav-link" href="index.php">Pratos</a>
                    </li>
                    @guest
                      <li class="rd-nav-item">
                        <form method="GET" action="/login">
                          @csrf
                          <a class="rd-nav-link" href="/login" onclick="event.preventDefault();
                          this.closest('form').submit();">Login</a>
                        </form>
                      </li>
                      <li class="rd-nav-item">
                        <form method="GET" action="/register">
                        @csrf
                        <a class="rd-nav-link" href="/register" onclick="event.preventDefault();
                        this.closest('form').submit();">Cadastre-se</a>
                        </form>
                      </li>
                    @endguest
                    @auth
                      <li class="rd-nav-item">
                        <form method="POST" action="/logout">
                        @csrf
                          <a class="rd-nav-link" href="#" onclick="event.preventDefault();
                          this.closest('form').submit();">Sair</a>
                        </form>
                      </li>
                    @endauth
                  </ul>
                </div>
              </div>
              <div class="rd-navbar-project-hamburger rd-navbar-project-hamburger-open rd-navbar-fixed-element-1" data-multitoggle=".rd-navbar-inner" data-multitoggle-blur=".rd-navbar-wrap" data-multitoggle-isolate="data-multitoggle-isolate">
              <span class="c-search-span" title="Buscar"><svg xmlns="#" viewBox="0 0 45.1 40.3"><path fill="#000000" d="M38.3 37.6l-13-13c2.3-2.5 3.7-5.8 3.7-9.4 0-7.6-6.2-13.9-13.9-13.9-7.6 0-13.8 6.2-13.8 13.8C1.3 22.8 7.5 29 15.1 29c3.5 0 6.7-1.3 9.2-3.5l13.1 13.1.9-1zm-23.2-9.9C8.2 27.7 2.6 22 2.6 15.1c0-6.9 5.6-12.5 12.5-12.5s12.5 5.6 12.5 12.5c.1 6.9-5.6 12.6-12.5 12.6z"></path><path fill="#000000" d="M37.4 40.3L24.2 27.2c-2.6 2-5.8 3.1-9.1 3.1C6.8 30.2 0 23.5 0 15.1S6.8 0 15.1 0s15.1 6.8 15.1 15.1c0 3.4-1.2 6.7-3.3 9.4l13.2 13.2-2.7 2.6zM15.1 3.8C8.9 3.8 3.8 8.9 3.8 15.1s5.1 11.3 11.3 11.3c6.2 0 11.3-5.1 11.3-11.3S21.3 3.8 15.1 3.8z"></path></svg></span>
              </div>
              <div class="rd-navbar-project">
                <div class="rd-navbar-project-header">
                  <form class="d-flex" action="about-us.php" method="post">
                    <input class="form-control" type="text" name="txProcura" placeholder="Search" aria-label="Search">
                    <input type="submit" aria-label="Search">
                  </form>
                  <div class="rd-navbar-project-hamburger rd-navbar-project-hamburger-close" data-multitoggle=".rd-navbar-inner" data-multitoggle-blur=".rd-navbar-wrap" data-multitoggle-isolate="data-multitoggle-isolate">
                    <div class="project-close"><span></span><span></span></div>
                  </div>
                </div>
                <div class="rd-navbar-project-content rd-navbar-content">
                  <div>
                    <div class="row gutters-20" data-lightgallery="group">
                      <div class="col-6">
                        <!-- Thumbnail Creative-->
                        <article class="thumbnail thumbnail-creative"><a href="images/project-1-1200x800-original.jpg" data-lightgallery="item">
                            <div class="thumbnail-creative-figure"><img src="images/project-1-195x164.jpg" alt="" width="195" height="164" />
                            </div>
                            <div class="thumbnail-creative-caption"><span class="icon thumbnail-creative-icon linearicons-magnifier"></span></div>
                          </a></article>
                      </div>
                      <div class="col-6">
                        <!-- Thumbnail Creative-->
                        <article class="thumbnail thumbnail-creative"><a href="images/project-2-1200x800-original.jpg" data-lightgallery="item">
                            <div class="thumbnail-creative-figure"><img src="images/project-2-195x164.jpg" alt="" width="195" height="164" />
                            </div>
                            <div class="thumbnail-creative-caption"><span class="icon thumbnail-creative-icon linearicons-magnifier"></span></div>
                          </a></article>
                      </div>
                      <div class="col-6">
                        <!-- Thumbnail Creative-->
                        <article class="thumbnail thumbnail-creative"><a href="images/project-3-1200x800-original.jpg" data-lightgallery="item">
                            <div class="thumbnail-creative-figure"><img src="images/project-3-195x164.jpg" alt="" width="195" height="164" />
                            </div>
                            <div class="thumbnail-creative-caption"><span class="icon thumbnail-creative-icon linearicons-magnifier"></span></div>
                          </a></article>
                      </div>
                      <div class="col-6">
                        <!-- Thumbnail Creative-->
                        <article class="thumbnail thumbnail-creative"><a href="images/project-4-1200x800-original.jpg" data-lightgallery="item">
                            <div class="thumbnail-creative-figure"><img src="images/project-4-195x164.jpg" alt="" width="195" height="164" />
                            </div>
                            <div class="thumbnail-creative-caption"><span class="icon thumbnail-creative-icon linearicons-magnifier"></span></div>
                          </a></article>
                      </div>
                      <div class="col-6">
                        <!-- Thumbnail Creative-->
                        <article class="thumbnail thumbnail-creative"><a href="images/project-5-1200x800-original.jpg" data-lightgallery="item">
                            <div class="thumbnail-creative-figure"><img src="images/project-5-195x164.jpg" alt="" width="195" height="164" />
                            </div>
                            <div class="thumbnail-creative-caption"><span class="icon thumbnail-creative-icon linearicons-magnifier"></span></div>
                          </a></article>
                      </div>
                      <div class="col-6">
                        <!-- Thumbnail Creative-->
                        <article class="thumbnail thumbnail-creative"><a href="images/project-6-1200x800-original.jpg" data-lightgallery="item">
                            <div class="thumbnail-creative-figure"><img src="images/project-6-195x164.jpg" alt="" width="195" height="164" />
                            </div>
                            <div class="thumbnail-creative-caption"><span class="icon thumbnail-creative-icon linearicons-magnifier"></span></div>
                          </a></article>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </nav>
      </div>
    </header>
    @yield('content')
  
    <footer class="section footer-modern context-dark footer-modern-2">
        <div class="footer-modern-line">
          <div class="container">
            <div class="row row-50">
              <div class="col-md-6 col-lg-4">
                <h5 class="footer-modern-title oh-desktop"><span class="d-inline-block wow slideInLeft">O que nós oferecemos</span></h5>
                <ul class="footer-modern-list d-inline-block d-sm-block wow fadeInUp">
                  <li><a href="#">Hambúrgueres</a></li>
                  <li><a href="#">Pizzas</a></li>
                  <li><a href="#">Saladas</a></li>
                  <li><a href="#">Bebidas</a></li>
                  <li><a href="#">Frutos do Mar</a></li>
                  <li><a href="#">Sobremesas</a></li>
                </ul>
              </div>
              <div class="col-md-6 col-lg-4 col-xl-3">
                <h5 class="footer-modern-title oh-desktop"><span class="d-inline-block wow slideInLeft">Informações</span></h5>
                <ul class="footer-modern-list d-inline-block d-sm-block wow fadeInUp">
                  <li><a href="#">Nosso Cardápio</a></li>
                  <li><a href="#">FAQ</a></li>
                  <li><a href="#">Comprar</a></li>
                  <li><a href="contacts.php">Contate-nos</a></li>
                </ul>
              </div>
              <div class="col-lg-4 col-xl-5">
                <h5 class="footer-modern-title oh-desktop"><span class="d-inline-block wow slideInLeft">Fique por dentro!</span></h5>
                <p class="wow fadeInRight">Insira seu e-mail para receber informações sobre promoções e diversas outras coisas de Moi Tutors</p>
                <!-- RD Mailform-->
                <form class="rd-form rd-mailform rd-form-inline rd-form-inline-sm oh-desktop" data-form-output="form-output-global" data-form-type="subscribe" method="post" action="bat/rd-mailform.php">
                  <div class="form-wrap wow slideInUp">
                    <input class="form-input" id="subscribe-form-2-email" type="email" name="email" data-constraints="@Email @Required"/>
                    <label class="form-label" for="subscribe-form-2-email">Insira seu E-mail</label>
                  </div>
                  <div class="form-button form-button-2 wow slideInRight">
                    <button class="button button-sm button-icon-3 button-primary button-winona" type="submit"><span class="d-none d-xl-inline-block">Inscrever-se</span><span class="icon mdi mdi-telegram d-xl-none"></span></button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <div class="footer-modern-line-2">
          <div class="container">
            <div class="row row-30 align-items-center">
              <div class="col-sm-6 col-md-7 col-lg-4 col-xl-4">
                <div class="row row-30 align-items-center text-lg-center">
                  <div class="col-md-7 col-xl-6"><a class="brand" href="index.php"><img src="images/logos/logoMaitre.png" alt="" width="198" height="66"/></a></div>
                  <div class="col-md-5 col-xl-6">
                    <div class="iso-1"><span><img src="images/like-icon-58x25.png" alt="" width="58" height="25"/></span><span class="iso-1-big">9.4k</span></div>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-12 col-lg-8 col-xl-8 oh-desktop">
                <div class="group-xmd group-sm-justify">
                  <div class="footer-modern-contacts wow slideInUp">
                    <div class="unit unit-spacing-sm align-items-center">
                      <div class="unit-left"><span class="icon icon-24 mdi mdi-phone"></span></div>
                      <div class="unit-body"><a class="phone" href="tel:#">+1 718-999-3939</a></div>
                    </div>
                  </div>
                  <div class="footer-modern-contacts wow slideInDown">
                    <div class="unit unit-spacing-sm align-items-center">
                      <div class="unit-left"><span class="icon mdi mdi-email"></span></div>
                      <div class="unit-body"><a class="mail" href="mailto:#">info@demolink.org</a></div>
                    </div>
                  </div>
                  <div class="wow slideInRight">
                    <ul class="list-inline footer-social-list footer-social-list-2 footer-social-list-3">
                      <li><a class="icon mdi mdi-facebook" href="#"></a></li>
                      <li><a class="icon mdi mdi-twitter" href="#"></a></li>
                      <li><a class="icon mdi mdi-instagram" href="#"></a></li>
                      <li><a class="icon mdi mdi-google-plus" href="#"></a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="footer-modern-line-3">
          <div class="container">
            <div class="row row-10 justify-content-between">
              <div class="col-md-6"><span>514 S. Magnolia St. Orlando, FL 32806</span></div>
              <div class="col-md-auto">
                <!-- Rights-->
                <p class="rights"><span>&copy;&nbsp;</span><span class="copyright-year"></span><span></span><span>.&nbsp;</span><span>All Rights Reserved.</span><span> Design&nbsp;by&nbsp;<a href="https://www.templatemonster.com">TemplateMonster</a></span></p>
              </div>
            </div>
          </div>
        </div>
      </footer>
    </div>
    <!-- Global Mailform Output-->
    <div class="snackbars" id="form-output-global"></div>
    <!-- Javascript-->
    <script src="/js/core.min.js"></script>
    <script src="/js/script.js"></script>
  </body>
</html>