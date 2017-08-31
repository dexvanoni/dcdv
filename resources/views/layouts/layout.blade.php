<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>@yield('titulo')</title>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="/materialize/css/materialize.min.css"  media="screen,projection"/>
    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.15/css/jquery.dataTables.css">
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

  </head>
  <body>

  <main>
    <nav>
      <div class="nav-wrapper">
        <a href="/inicio" class="brand-logo">Da Casa da Vó</a>
        <ul id="nav-mobile" class="right hide-on-med-and-down">
          <li><a href="{{ route('pedidos.index') }}">Pedidos</a></li>
          <li><a href="{{ route('clientes.index') }}">Clientes</a></li>
          <li><a href="{{ route('produtos.index') }}">Produtos</a></li>
          <li><a href="collapsible.html">Relatórios</a></li>
        </ul>
      </div>
    </nav>

    <div class="container">
      @yield('conteudo')
    </div>
</main>

<footer class="page-footer">
  <div class="footer-copyright">
         <div class="container">
         © 2017 Copyright | Denis Vanoni
         <!--<a class="grey-text text-lighten-4 right" href="#!">More Links</a>-->
         </div>
       </div>
</footer>

    <!--Import jQuery before materialize.js-->
     <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
     <script type="text/javascript" src="/materialize/js/materialize.min.js"></script>
     <script type="text/javascript" charset="utf8" src="//cdn.datatables.net/1.10.15/js/jquery.dataTables.js"></script>

     <script type="text/javascript">
      $(document).ready(function(){
        $("#envia").hide();
         $('.carousel').carousel();
        $(".dropdown-button").dropdown();
        $('.tooltipped').tooltip({delay: 50});
         $(".button-collapse").sideNav();
         $('.collapsible').collapsible();
         $('#clientes').DataTable();
          $('#pedidos').DataTable({
            "order": [[ 6, "desc" ]]
           } );
           $('#produtos').DataTable({
             "order": [[ 6, "desc" ]]
            } );
          $('select').material_select();
       $("#atendimentoS").click(function(){
         if($(this).prop('checked')){
           $("#envia").show();
         }});
         $("#atendimentoN").click(function(){
           if($(this).prop('checked')){
             $("#envia").show();
           }});
           $("#autorizaS").click(function(){
             if($(this).prop('checked')){
               $("#envia").show();
             }});
             $("#autorizaN").click(function(){
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
