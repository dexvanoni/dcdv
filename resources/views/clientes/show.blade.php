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
<h5 class="center">Cliente n. {{ $cliente->id }}</h5><br><br>

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
  <table>
      <thead>
        <tr>
          <th>N. Pedido</th>
          <th>Produto</th>
          <th>Qtn</th>
          <th>UN</th>
          <th>Total</th>
          <th>Pagamento</th>
        </tr>
      </thead>

      <tbody>

          @foreach ($pedido as $pedidos)
            <tr>
              <td>{{$pedidos->id}}</td>
              <td>{{$pedidos->produto}}</td>
              <td>{{$pedidos->qnt}}</td>
              <td>{{$pedidos->precoUn}}</td>
              <td>{{$pedidos->precoTot}}</td>
              <td>
                @if ($pedidos->pagamento == "s")
                  PAGO
                @else
                  Em débito
                @endif
              </td>
            </tr>
          @endforeach
      </tbody>
    </table>
  @else
    Este cliente não pussui pedidos!
  @endif
@endsection
