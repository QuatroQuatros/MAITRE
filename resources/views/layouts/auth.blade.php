<!DOCTYPE html>
    <html lang="PT-BR">

        <head>
            <meta charset="utf-8">
            <meta content="width=device-width, initial-scale=1.0" name="viewport">

            <title>MAÎTRE || @yield('title')</title>

            <!-- Favicons -->
            <link href="/img/favicons/maitre.png" rel="icon">
            <link href="" rel="apple-touch-icon">

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

            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
                integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
                crossorigin="anonymous" referrerpolicy="no-referrer"></script>

            <!-- Template Main CSS File -->
            <link href="/css/style.css" rel="stylesheet">

        </head>

        <body>

            <header id="header" class="fixed-top d-flex align-items-center header-transparent">
                <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
    
                    <div class="logo me-auto">
                        <a href="/"><img src="/img/logos/maitre.png" class="img-fluid"></a>
                    </div>
    
                
                    <a href="/" class="book-a-table-btn scrollto">TELA INICIAL</a>

        
                </div>
            </header>

        @yield('content')



        <style>
            form ul {
                padding: 0;
                margin: 0;
                display: block;
            }

            label {
                margin-top: 11px;
            }

            form li {
                list-style: none;
                margin-bottom: 10px;
            }

            form h2 {
                font-size: 20px;
                color: #161616;
                padding: 0;
                margin: 0;
                margin-bottom: 20px;
            }

            .confirmacoes li {
                font-size: 14px;
                display: inline-flex;
            }

            .confirmacoes input {
                width: 16px;
                margin-right: 5px;
                position: relative;
            }
            </style>
            <!-- <div class="info-p">
                <p>Já possui uma conta?<a href="login.php">Faça login</a></p>
                </div> -->

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
        <script src="/js/cep.js"></script>

    </body>

</html>
