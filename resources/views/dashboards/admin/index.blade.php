@extends('layouts.admin')
@section('content')



<script type="text/javascript">
    google.charts.load('current', {'packages':['corechart']});
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {
      var data = google.visualization.arrayToDataTable([
        ['', 'basico', 'Medio', 'avançado'],
        ['Jan',  2, 3, 1],
        ['Fev',  3,2,1],
        ['Mar',  1,2,3],
        ['Abr',  5,4,2]
      ]);

      var options = {
        title: 'Vendas dos nossos serviços',
        curveType: 'function',
        legend: { position: 'bottom' }
      };

      var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

      chart.draw(data, options);
    }
  </script>

<!--grafico de barra-->
<script type="text/javascript">
    google.charts.load('current', {'packages':['bar']});
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {
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
</script>

<main>
  <h1>Analise de Dados</h1>

  <div class="insi">
  <div id="curve_chart" style="width: 500px; height: 450px"></div>
      <div id="columnchart_material" style="width: 500px; height: 450px;"></div>
  </div>
  
  <!---------------- end insights ---------------->
  <div class="recent-orders">
      <h2>Nossos Clientes</h2>
      <table>
          <thead>
              <tr>
                  <th>Nome</th>
                  <th>Email</th>
                  <th>Modo de pagamento</th>
                  <th>Status</th>
              </tr>
          </thead>
          <tbody>
              
          </tbody>
      </table>
  </div>
</main>
<!----------- end main ABERTA NO MENU.PHP ------------->

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
              <img src="/images/admin/logos/atlanticSemfundo.png">
          </div>
      </div>
  </div>
  <!--end top-->
  <div class="recent-updates">
      <h2>Ultimas mensagens</h2>
      <div class="updates">
          <div class="update">
              <div class="profile-photo">
                  <img src="/images/admin/img1.jpg">
              </div>
              <div class="message">
                  <p><b>Glayson mendes</b> Otimas cores de layout...</p>
                  <small class="text-muted">2 minutes ago</small>
              </div>
          </div>
          <div class="update">
              <div class="profile-photo">
                  <img src="/images/admin/img2.jpg">
              </div>
              <div class="message">
                  <p><b>Mike tyson</b> Belo trabalho com a...</p>
                  <small class="text-muted">2 minutes ago</small>
              </div>
          </div>
          <div class="update">
              <div class="profile-photo">
                  <img src="/images/admin/img3.jpg">
              </div>
              <div class="message">
                  <p><b>Mike tyson</b> Gostaria de aumentar minha...</p>
                  <small class="text-muted">2 minutes ago</small>
              </div>
          </div>
          <div class="update">
              <div class="profile-photo">
                  <img src="/images/admin/img5.jpg">
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