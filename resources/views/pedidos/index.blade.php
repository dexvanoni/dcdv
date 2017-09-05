@extends('layouts.layout')

@section('titulo')
  DCDV | Pedidos
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
    @if (Session::has('mensagem_create'))
        <div class="card-panel teal lighten-4">{{Session::get('mensagem_create')}}</div>
    @endif
<h5 class="center">Lista de Pedidos</h5>
    <table id="pedidos" class="hover">
       <thead>
         <tr>
           <th class="center">N°</th>
           <th class="center">Cliente</th>
           <th class="center">Produto</th>
           <th class="center">Qnt</th>
           <th class="center">Valor</th>
           <th class="center">Pg</th>
           <th class="center">Agendamento</th>
           <th class="center">Dt. Compra</th>
           <th class="center">Ação</th>
         </tr>
       </thead>

       <tbody>
         @foreach ($pedido as $pedidos)
           <tr>
             <th class="center" scope="row">{{ $pedidos->id }}</th>
             <td class="center" style="width: 40%" >{{ $pedidos->nome}}</td>
             <td class="center" style="width: 15%" >{{ $pedidos->produto }}</td>
             <td class="center" style="width: 15%">{{ $pedidos->qnt }}</td>
             <td class="center" style="width: 15%">{{ $pedidos->precoTot }}</td>
             <td class="center" style="width: 15%">
               @if ($pedidos->pagamento == "s")
                 <i class="small material-icons tooltipped" data-tooltip="Pago">thumb_up</i>
               @else
                 <i class="small material-icons tooltipped" data-tooltip="Em débito">money_off</i>
               @endif
             </td>
             <td class="center" style="width: 15%">
               @if ($pedidos->agendamento == NULL)
                 <i class="material-icons">block</i>
               @else
                 {{ date('d/m/Y', strtotime($pedidos->agendamento)) }}
               @endif

             </td>
             <td class="center" style="width: 15%">{{ date('d/m/Y', strtotime($pedidos->created_at)) }}</td>
             <td class="center" style="width: 15%">
                <ul class="list-inline list-small">
                  <li>
                     <a href="{{ route('pedidos.show', ['pedidos' => $pedidos->id]) }}" class="btn-floating tooltipped waves-effect waves-light green" data-tooltip='Ver Pedido'><i class="material-icons">search</i></a>
                  </li>
                </ul>
            </td>
           </tr>
         @endforeach
       </tbody>
     </table>
 </div>
@endsection
