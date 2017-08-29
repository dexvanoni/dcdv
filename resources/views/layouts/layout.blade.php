<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>@yield('titulo')</title>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="/materialize/css/materialize.min.css"  media="screen,projection"/>

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  </head>
  <body>
    <nav>
      <div class="nav-wrapper">
        <a href="/home" class="brand-logo">Da Casa da Vó</a>
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


    <!--Import jQuery before materialize.js-->
     <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
     <script type="text/javascript" src="/materialize/js/materialize.min.js"></script>
  </body>
</html>
