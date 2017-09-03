@extends('layouts.layout')

@section('titulo')
  DCDV | Produtos
@endsection

@section('conteudo')
  <div class="fixed-action-btn horizontal">
      <a class="btn-floating btn-large black">
        <i class="large material-icons">mode_edit</i>
      </a>
      <ul>
        <li><a href="{{ route('produtos.create') }}"class="btn-floating red tooltipped" data-tooltip="Inserir novo Produto" data-position="top"><i class="material-icons">insert_chart</i></a></li>
      </ul>
    </div>
    @if (Session::has('mensagem_create'))
        <div class="card-panel teal lighten-4">{{Session::get('mensagem_create')}}</div>
    @endif
<h5 class="center">Lista de Produtos</h5><br><br>
    <table id="produtos" class="hover">
       <thead>
         <tr>
           <th class="center">N°</th>
           <th class="center">Produto</th>
           <th class="center">Valor</th>
           <th class="center">Tipo</th>
           <th class="center">Ações</th>
         </tr>
       </thead>

       <tbody>
         @foreach ($produto as $produtos)
           <tr>
             <th class="center" scope="row">{{ $produtos->id }}</th>
             <td class="center" style="width: 40%" >{{ $produtos->nome}}</td>
             <td class="center" style="width: 15%" >{{ $produtos->valorUn }}</td>
             <td class="center" style="width: 15%">{{ $produtos->tipo }}</td>
             <td class="center" style="width: 15%">
                <ul class="list-inline list-small">
                  <li>
                     <a href="{{ route('produtos.show', ['produtos' => $produtos->id]) }}" class="btn-floating tooltipped waves-effect waves-light green" data-tooltip='Ver Produto'><i class="material-icons">search</i></a>
                  </li>
                </ul>
            </td>
           </tr>
         @endforeach
       </tbody>
     </table>
 </div>
@endsection
