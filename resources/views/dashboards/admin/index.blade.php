@extends('layouts.admin')
@section('content')


<script type="text/javascript">
    google.charts.load('current', {
        'packages': ['corechart', 'bar']
    
    });
    google.charts.setOnLoadCallback(drawLineChart);
    google.charts.setOnLoadCallback(drawBarChart);
    
    function drawLineChart() {
        var data = google.visualization.arrayToDataTable([
            ['', 'basico', 'Medio', 'avançado'],
            ['Jan', 2, 3, 1],
            ['Fev', 3, 2, 1],
            ['Mar', 1, 2, 3],
            ['Abr', 5, 4, 2]
        ]);
    
        var options = {
            title: 'Vendas dos nossos serviços',
            curveType: 'function',
            legend: {
                position: 'bottom'
            }
        };
    
        var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));
    
        chart.draw(data, options);
    }
    
    
    function drawBarChart() {
        var data = google.visualization.arrayToDataTable([
            ['Meses', 'Donos', 'usuarios'],
            ['Jan', 2, 5],
            ['Fev', 0, 3],
            ['Mar', 5, 7],
            ['Abr', 10, 15]
        ]);
    
        var options = {
            chart: {
                title: 'Usuarios cadastrados por mes',
            }
        };
    
        var chart = new google.charts.Bar(document.getElementById('columnchart_material'));
    
        chart.draw(data, google.charts.Bar.convertOptions(options));
    }
    </script>
    
    
    <main>
        <h1>Analise de Dados</h1>
    
        <div class="insi">
            <div id="curve_chart" style="height: 450px"></div>
            <div id="columnchart_material" style="height: 450px;"></div>
        </div>
    
        <!---------------- end insights ---------------->
        <div class="recent-orders">
            <h2>Nossos Clientes</h2>
            <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
            <script type="text/javascript" charset="utf8" src="/DataTables/datatables.min.js"></script>
            <script type="text/javascript" charset="utf8" src="/DataTables/datatables.js"></script>
            <table id="example" class="display" style="width:100%">
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Email</th>
                        <th>Modo de pagamento</th>
                        <th>Status</th>
                        <th>Alterar</th>
                        <th>Excluir</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Tiger Nixon</td>
                        <td>System Architect</td>
                        <td>Edinburgh</td>
                        <td>61</td>
                        <td><a href='../cliente/cliente.php' class="danger">Alterar dados</a>
                        <td><a href="#modal" role="button">Excluir dados</a>
                    </tr>
                    <tr>
                        <td>Garrett Winters</td>
                        <td>Accountant</td>
                        <td>Tokyo</td>
                        <td>63</td>
                        <td><a href='../cliente/cliente.php' class="danger">Alterar dados</a>
                        <td><a href="#modal" role="button">Excluir dados</a>
                    </tr>
                    <tr>
                        <td>Ashton Cox</td>
                        <td>Junior Technical Author</td>
                        <td>San Francisco</td>
                        <td>66</td>
                        <td><a href='../cliente/cliente.php' class="danger">Alterar dados</a>
                        <td><a href="#modal" role="button">Excluir dados</a>
                    </tr>
                    <tr>
                        <td>Cedric Kelly</td>
                        <td>Senior Javascript Developer</td>
                        <td>Edinburgh</td>
                        <td>22</td>
                        <td><a href='../cliente/cliente.php' class="danger">Alterar dados</a>
                        <td><a href="#modal" role="button">Excluir dados</a>
                    </tr>
                    <tr>
                        <td>Airi Satou</td>
                        <td>Accountant</td>
                        <td>Tokyo</td>
                        <td>33</td>
                        <td><a href='../cliente/cliente.php' class="danger">Alterar dados</a>
                        <td><a href="#modal" role="button">Excluir dados</a>
                    </tr>
                    <tr>
                        <td>Brielle Williamson</td>
                        <td>Integration Specialist</td>
                        <td>New York</td>
                        <td>61</td>
                        <td><a href='../cliente/cliente.php' class="danger">Alterar dados</a>
                        <td><a href="#modal" role="button">Excluir dados</a>
                    </tr>
                    <tr>
                        <td>Herrod Chandler</td>
                        <td>Sales Assistant</td>
                        <td>San Francisco</td>
                        <td>59</td>
                        <td><a href='../cliente/cliente.php' class="danger">Alterar dados</a>
                        <td><a href="#modal" role="button">Excluir dados</a>
                    </tr>
                    <tr>
                        <td>Rhona Davidson</td>
                        <td>Integration Specialist</td>
                        <td>Tokyo</td>
                        <td>55</td>
                        <td><a href='../cliente/cliente.php' class="danger">Alterar dados</a>
                        <td><a href="#modal" role="button">Excluir dados</a>
                    </tr>
                    <tr>
                        <td>Colleen Hurst</td>
                        <td>Javascript Developer</td>
                        <td>San Francisco</td>
                        <td>39</td>
                        <td><a href='../cliente/cliente.php' class="danger">Alterar dados</a>
                        <td><a href="#modal" role="button">Excluir dados</a>
                    </tr>
                    <tr>
                        <td>Herrod Chandler</td>
                        <td>Sales Assistant</td>
                        <td>San Francisco</td>
                        <td>59</td>
                        <td><a href='../cliente/cliente.php' class="danger">Alterrar dados</a>
                        <td><a href="#modal" role="button">Excluir dados</a>
                    </tr>
                    <tr>
                        <td>Rhona Davidson</td>
                        <td>Integration Specialist</td>
                        <td>Tokyo</td>
                        <td>55</td>
                        <td><a href='../cliente/cliente.php' class="danger">Alterar dados</a>
                        <td><a href="#modal" role="button">Excluir dados</a>
                    </tr>
                    <tr>
                        <td>Colleen Hurst</td>
                        <td>Javascript Developer</td>
                        <td>San Francisco</td>
                        <td>39</td>
                        <td><a href='../cliente/cliente.php' class="danger">Alterar dados</a>
                        <td><a href="#modal" role="button">Excluir dados</a>
                    </tr>
                </tbody>
            </table>
            <script>
            $(document).ready(function() {
                $('#example').DataTable();
            });
            </script>
        </div>
    </main>
    <!----------- end main ABERTA NO MENU.PHP ------------->
    
    <!-- Modal -->
    <div class="modal-wrapper" id="modal">
        <div class="modal-body card">
            <div class="modal-header">
                <h2 class="heading">tem certeza ?</h2>
                <a href="#!" role="button" class="close" aria-label="close this modal">
                    <svg viewBox="0 0 24 24">
                        <path d="M24 20.188l-8.315-8.209 8.2-8.282-3.697-3.697-8.212 8.318-8.31-8.203-3.666 3.666 8.321 8.24-8.206 8.313 3.666 3.666 8.237-8.318 8.285 8.203z" />
                    </svg>
                </a>
            </div>
            <h3>Esse dado será excluido permanentemente, tem certeza ?</h3>
    
            <div class="button-center">
                <a href="" class="button button__link">Não</a>
                <a href="" class="button button__link">Sim</a>
            </div>
        </div>
        <a href="#!" class="outside-trigger"></a>
    </div>
    
    
    <!--light and white mode-->
    <div class="right">
        <div class="top">
            <button id="menu-btn">
                <span class="material-icons-sharp">menu</span>
            </button>
            <div class="theme-toggler">
                <span class="material-icons-sharp active">light_mode</span>
                <span class="material-icons-sharp">dark_mode</span>
            </div>
            <div class="profile">
                <div class="info">
                    <p>hey, <b>ADM</b></p>
                    <small class="text-muted">Admin</small>
                </div>
                <div class="profile-photo">
                    <img src="/img/logos/atlanticSemfundo.png">
                </div>
            </div>
        </div>
    
        <!--end top-->
        <div class="recent-updates">
            <h2>Ultimas mensagens</h2>
            <div class="updates">
                <div class="update">
                    <div class="profile-photo">
                        <img src="/img/img1.jpg">
                    </div>
                    <div class="message">
                        <p><b>Glayson mendes</b> Otimas cores de layout...</p>
                        <small class="text-muted">2 minutes ago</small>
                    </div>
                </div>
                <div class="update">
                    <div class="profile-photo">
                        <img src="/img/img2.jpg">
                    </div>
                    <div class="message">
                        <p><b>Mike tyson</b> Belo trabalho com a...</p>
                        <small class="text-muted">2 minutes ago</small>
                    </div>
                </div>
                <div class="update">
                    <div class="profile-photo">
                        <img src="/img/img3.jpg">
                    </div>
                    <div class="message">
                        <p><b>Mike tyson</b> Gostaria de aumentar minha...</p>
                        <small class="text-muted">2 minutes ago</small>
                    </div>
                </div>
                <div class="update">
                    <div class="profile-photo">
                        <img src="/img/img5.jpg">
                    </div>
                    <div class="message">
                        <p><b>Mike tyson</b> Não gostei, melhor procurar ...</p>
                        <small class="text-muted">2 minutes ago</small>
                    </div>
                </div>
            </div>
        </div>
        <!------------------- end recent updates --------------------->
        <div class="sales-analytics">
            <h2>Moderadores</h2>
            <div class="item online">
                <div class="icon">
                    <span class="material-icons-sharp">person</span>
                </div>
                <div class="right">
                    <div class="info">
                        <h3>Moderador</h3>
                        <smal class="text-muted">Ultimo vez online 5 horas</smal>
                    </div>
                    <h3>Vinicius</h3>
                </div>
            </div>
            <div class="item offline">
                <div class="icon">
                    <span class="material-icons-sharp">person</span>
                </div>
                <div class="right">
                    <div class="info">
                        <h3>Moderador</h3>
                        <smal class="text-muted">Ultimo vez online 3 horas</smal>
                    </div>
                    <h3>Lais</h3>
                </div>
            </div>
            <div class="item customers">
                <div class="icon">
                    <span class="material-icons-sharp">person</span>
                </div>
                <div class="right">
                    <div class="info">
                        <h3>Moderador</h3>
                        <smal class="text-muted">Ultimo vez online 1 horas</smal>
                    </div>
                    <h3>Winyc</h3>
                </div>
            </div>
        </div>
    </div>
    <!--FECHAMENTO DA DIV CONTAINER, ABERTA EM MENU.PHP-->
    </div>

@endsection