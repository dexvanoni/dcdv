@extends('layouts.layout')

@section('titulo')
  DCDV | Cliente
@endsection

@section('conteudo')
  <div class="fixed-action-btn horizontal">
      <a class="btn-floating btn-large black">
        <i class="large material-icons">mode_edit</i>
      </a>
      <ul>
        <li><a href="{{ route('clientes.create') }}"class="btn-floating red tooltipped" data-tooltip="Inserir novo Cliente" data-position="top"><i class="material-icons">insert_chart</i></a></li>
      </ul>
    </div>
    <div class="row">
      <div class="center col s12">
        <h5>Dados e pedidos do cliente n. {{ $cliente->id }}</h5>
      </div>
    </div>
    <div class="row">
      <div class="col s6 push-s5">
        <a href="{{ route('clientes.edit', ['cliente' => $cliente->id]) }}" class=" tooltipped btn-floating btn-small waves-effect waves-light blue" data-tooltip="Editar cadastro deste cliente"><i class="material-icons">edit</i></a>
      </div>
      <div class="col s6">
        <form action="{{ route('clientes.destroy', ['cliente' => $cliente->id]) }}" onsubmit="return confirm('\nTem certeza que deseja fazer isso? Não apague seus clientes, eles podem voltar!'); return false;" method="post">
          {{ csrf_field() }}
          {{ method_field('DELETE') }}
        <button type="submit" class="tooltipped btn-floating btn-small waves-effect waves-light red" data-tooltip="Excluir cliente" type="submit" name="action">
            <i class="material-icons right">delete_forever</i>
        </button>
        </form>
      </div>
    </div>

<br><br>

  <div class="row">
    <div class="col s4">
      <h6>Código: {{ $cliente->id }}</h6>
    </div>
    <div class="col s4">
      <h6>Nome: {{ $cliente->nome }}</h6>
    </div>
    <div class="col s4">
      <h6>Empresa: {{ $cliente->localTrabalho }}</h6>
    </div>
  </div>

  <div class="row">
    <div class="col s4">
      <h6>Endereço: {{ $cliente->rua }}, {{ $cliente->numero }} - {{ $cliente->bairro }}</h6>
    </div>
    <div class="col s4">
      <h6>Contato: {{ $cliente->tel }}</h6>
    </div>
    <div class="col s4">
      <h6>Cadastrado em: {{ date('d/m/Y', strtotime($cliente->created_at)) }}</h6>
    </div>
  </div>

<hr>
  <div class="row">
    <h5 class="center">Pedidos relacionados</h5>
  </div>
@if ($pedido)
  <h6>Total em débitos: R$ {{ $total }}</h6>
  <table>
      <thead>
        <tr>
          <th class="center">N. Pedido</th>
          <th>Produto</th>
          <th class="center">Qtn</th>
          <th class="center">UN</th>
          <th class="center">Total</th>
          <th>Dt. Compra</th>
          <th class="center">Pagamento</th>
        </tr>
      </thead>

      <tbody>

          @foreach ($pedido as $pedidos)
            <tr>
              <td class="center">{{$pedidos->id}}</td>
              <td>{{$pedidos->produto}}</td>
              <td class="center">{{$pedidos->qnt}}</td>
              <td class="center">{{$pedidos->precoUn}}</td>
              <td class="center">{{$pedidos->precoTot}}</td>
              <td>{{date('d/m/Y H:i', strtotime($pedidos->created_at)) }}</td>
              <td class="center">
                @if ($pedidos->pagamento == "s")
                  <i class="small material-icons tooltipped" data-tooltip="Pago">thumb_up</i>
                @else
                  <i class="small material-icons tooltipped" data-tooltip="Em débito">money_off</i>
                @endif
              </td>
            </tr>
          @endforeach
      </tbody>
    </table>
  @else
    <h4>Este cliente não pussui pedidos!</h4>
  @endif
@endsection
