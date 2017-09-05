@extends('layouts.layout')

@section('titulo')
  DCDV | Pedido
@endsection

@section('conteudo')
  <div class="fixed-action-btn horizontal">
      <a class="btn-floating btn-large black">
        <i class="large material-icons">mode_edit</i>
      </a>
      <ul>
        <li><a href="{{ route('pedidos.create') }}"class="btn-floating red tooltipped" data-tooltip="Inserir novo Pedido" data-position="top"><i class="material-icons">insert_chart</i></a></li>
      </ul>
    </div>
    <div class="row">
      <div class="center col s12">
        <h5>Dados do pedido n. {{ $pedido->id }}</h5>
      </div>
    </div>
    <div class="row">
      <div class="col s6 push-s5">
        <a href="{{ route('pedidos.edit', ['pedido' => $pedido->id]) }}" class=" tooltipped btn-floating btn-small waves-effect waves-light blue" data-tooltip="Editar cadastro deste pedido"><i class="material-icons">edit</i></a>
      </div>
      <div class="col s6">
        <form action="{{ route('pedidos.destroy', ['pedido' => $pedido->id]) }}" onsubmit="return confirm('\nTem certeza que deseja fazer isso? Não apague seus pedidos!'); return false;" method="post">
          {{ csrf_field() }}
          {{ method_field('DELETE') }}
        <button type="submit" class="tooltipped btn-floating btn-small waves-effect waves-light red" data-tooltip="Excluir pedido" type="submit" name="action">
            <i class="material-icons right">delete_forever</i>
        </button>
        </form>
      </div>
    </div>

<br><br>

  <div class="row">
    <div class="col s4">
      <h6>Código: {{ $pedido->id }}</h6>
    </div>
    <div class="col s4">
      <h6>Nome: {{ $pedido->nome }}</h6>
    </div>
    <div class="col s4">
      <h6>Produto: {{ $pedido->produto }}</h6>
    </div>
  </div>

  <div class="row">
    <div class="col s4">
      <h6>Quantidade: {{ $pedido->qnt }}</h6>
    </div>
    <div class="col s4">
      <h6>Preço Un: R$ {{ $pedido->precoUn }}</h6>
    </div>
    <div class="col s4">
      <h6>Preço Total: R$ {{ $pedido->precoTot }}</h6>
    </div>
  </div>

  <div class="row">
    <div class="col s4">
      <h6>Pagamento:
        @if ($pedido->pagamento == "s")
          Pago
        @else
          <h6 style="color:red">Em débito</h6>
        @endif
      </h6>
    </div>
    <div class="col s4">
      <h6>Pg. Agendado:
        @if ($pedido->agendamento == NULL)
          Não há agendamento
        @else
          {{ date('d/m/Y', strtotime($pedido->agendamento)) }}
        @endif
      </h6>
    </div>
    <div class="col s4">
      <h6>Pedido em: {{ date('d/m/Y', strtotime($pedido->created_at)) }}</h6>
    </div>
  </div>
@endsection
