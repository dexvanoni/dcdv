@extends('layouts.layout')

@section('titulo')
  DCDV | Clientes
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
    @if (Session::has('mensagem_create'))
        <div class="card-panel teal lighten-4">{{Session::get('mensagem_create')}}</div>
    @endif
<h5 class="center">Lista de Clientes</h5><br><br>
    <table id="clientes" class="hover">
       <thead>
         <tr>
           <th class="center">N°</th>
           <th class="center">Nome</th>
           <th class="center">Endereço</th>
           <th class="center">Contato</th>
           <th class="center">Empresa</th>
           <th class="center">Ações</th>
         </tr>
       </thead>

       <tbody>
         @foreach ($cliente as $clientes)
           <tr>
             <th scope="row">{{ $clientes->id }}</th>
             <td class="center" style="width: 20%" >{{ $clientes->nome}}</td>
             <td class="center" style="width: 40%" >{{ $clientes->rua }}, {{$clientes->numero}} - {{ $clientes->bairro }}</td>
             <td class="center" style="width: 15%">{{ $clientes->tel }}</td>
             <td class="center" style="width: 15%">{{ $clientes->localTrabalho }}</td>
             <td class="center" style="width: 15%">
                <ul class="list-inline list-small">
                  <li>
                     <a href="{{ route('clientes.show', ['clientes' => $clientes->id]) }}" class="btn-floating tooltipped waves-effect waves-light green" data-tooltip='Ver Cliente'><i class="material-icons">search</i></a>
                  </li>
                </ul>
            </td>
           </tr>
         @endforeach
       </tbody>
     </table>
 </div>
@endsection
