<!DOCTYPE html>
<html lang="PT-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AREA ADMINISTRADOR</title>

    <!--links internos-->
    <link rel="stylesheet" href="/css/admin/style.css">

     <!--Load the AJAX API-->
     <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
     
    <!--Material CDN-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet">
    
</head>
<body>
    
<!--side bar-->
<div class="container">
    <aside>
        <div class="top">
            <div class="logo">
                <img src="/images/admin/logos/LogoApp.png">
                <h2>Location<span class="primary">Fast</span></h2>
            </div>
        </div>
        <div class="close" id="close-btn">
            <span class="material-icons-sharp">close</span>
        </div>

        <div class="sidebar">
            <a href="/admin" class="active">
                <span class="material-icons-sharp">grid_view</span>
                <h3>Dashboard</h3>
            </a>
            <div class="dropdown">
                <a class="active">
                <span class="material-icons-sharp">east</span>
                    <h3>Opções de Cliente</h3>
                </a>
                <div class="dropdown-content">
                    <a href="../cliente/cadastrarCliente.php" class="active">
                        <span class="material-icons-sharp">person_outline</span>
                        <h3>Cadastrar Cliente(Dono)</h3>
                    </a>
                    <a href="../cliente/exclusaoCliente.php" class="active">
                        <span class="material-icons-sharp">receipt_long</span>
                        <h3>excluir Cliente(Dono)</h3>
                    </a>
                    <a href="../cliente/alteracaoCliente.php" class="active">
                        <span class="material-icons-sharp">settings</span>
                        <h3>Alteração Cliente(Dono)</h3>
                    </a>
                    <a href="../cliente/exclusaoRestaurante.php" class="active">
                        <span class="material-icons-sharp">no_food</span>
                        <h3>Exclusão Restaurante</h3>
                    </a>
                    <a href="../cliente/exclusaoRestaurante.php" class="active"> </a>
                </div>
            </div>
            <a href="/admin/categorias/create" class="active">
                <span class="material-icons-sharp">category</span>
                <h3>Cadastro Categoria</h3>
            </a>
            <a href="#" class="active">
                <span class="material-icons-sharp">mail_outline</span>
                <h3>Messages</h3>
                <span class="message-count">26</span>
            </a>
            <a href="#" class="active">
                <span class="material-icons-sharp">inventory</span>
                <h3>Joguinho</h3>
            </a>

            <form class="form-logout" method="POST" action="/logout">
                @csrf
                  
                  <a class="active" href="#" onclick="event.preventDefault();
                  this.closest('form').submit();">
                  <span class="material-icons-sharp">logout</span>
                  <h3>Sair</h3>
                  
                </a>
            </form>
        </div>
    </aside>

    @yield('content')

        <!--JQUERY -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js'></script>


    <!--links internos-->
    <script src="/js/admin/style.js"></script>
    <script src="/js/admin/form.js"></script>



    </body>

</html>