<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Da Casa da Vó</title>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
    <!--<link type="text/css" rel="stylesheet" href="/materialize/css/materialize.min.css"/>-->

      <link rel="stylesheet" href="/materialize/css/materialize.min.css" media="screen,projection">
      <link href="/css/jquery.dataTables.min.css" rel="stylesheet" media="screen,projection">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #000000;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ url('/login') }}">Login</a>
                        <a href="{{ url('/register') }}">Registro</a>
                    @endif
                </div>
            @endif

            <div class="content">
              <div class="center">
                <img src="/imagens/dacasadavo.jpg" alt="dacasadavo" width="380em" height="380em">
              </div>
                <div class="title m-b-md">
                    Sistema de Pedidos
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">Pedido</a>
                    <a href="https://laracasts.com">Clientes</a>
                    <a href="https://laravel-news.com">Produtos</a>
                    <a href="https://forge.laravel.com">Relatórios</a>
                </div>
            </div>
        </div>

<script type="text/javascript" src="/js/jquery-3.2.0.js"></script>
<script src="/materialize/js/materialize.js"></script>
<script src="/materialize/js/materialize.min.js"></script>
<script src="/js/jquery.dataTables.min.js"></script>
<script src="/js/dataTables.material.min.js"></script>
<script type="text/javascript">
      $(document).ready(function(){
        $("#envia").hide();
        $(".dropdown-button").dropdown();
        $('.tooltipped').tooltip({delay: 50});
         $(".button-collapse").sideNav();
         $('.collapsible').collapsible();
         $('#pesquisa').DataTable();
          $('select').material_select();
       $("#atendimentoS").click(function(){
         if($(this).prop('checked')){
           $("#envia").show();
         }});
         $("#atendimentoN").click(function(){
           if($(this).prop('checked')){
             $("#envia").show();
           }});
         });
  </script>
  <script type="text/javascript">
  $('.datepicker').pickadate({
    selectMonths: true,//Creates a dropdown to control month
    selectYears: 15,//Creates a dropdown of 15 years to control year
    //The title label to use for the month nav buttons
    labelMonthNext: 'Proximo Mês',
    labelMonthPrev: 'Mês Anterior',
    //The title label to use for the dropdown selectors
    labelMonthSelect: 'Selecionar Mês',
    labelYearSelect: 'Selecionar Ano',
    //Months and weekdays
    monthsFull: [ 'Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro' ],
    monthsShort: [ 'Jan', 'Fev', 'Mar', 'Abr', 'Maio', 'Jun', 'Jul', 'Ago', 'Set', 'Out', 'Nov', 'Dez' ],
    weekdaysFull: [ 'Domingo', 'Segunda', 'Terça', 'Quarta', 'Quinta', 'Sexta', 'Sábado' ],
    weekdaysShort: [ 'Dom', 'Seg', 'Ter', 'Qua', 'Qui', 'Sex', 'Sáb' ],
    //Materialize modified
    weekdaysLetter: [ 'D', 'S', 'T', 'Q', 'Q', 'S', 'S' ],
    //Today and clear
    today: 'Hoje',
    clear: 'Limpar',
    close: 'Fechar',
    //The format to show on the `input` element
    format: 'dd/mm/yyyy'
  });
  $('.timepicker').pickatime({
    default: 'now', // Set default time: 'now', '1:30AM', '16:30'
    fromnow: 0,       // set default time to * milliseconds from now (using with default = 'now')
    twelvehour: false, // Use AM/PM or 24-hour format
    donetext: 'OK', // text for done-button
    cleartext: 'Clear', // text for clear-button
    canceltext: 'Cancel', // Text for cancel-button
    autoclose: false, // automatic close timepicker
    ampmclickable: true, // make AM PM clickable
    aftershow: function(){} //Function for after opening timepicker
  });
  </script>
    </body>
</html>
