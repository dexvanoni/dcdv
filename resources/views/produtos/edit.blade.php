@extends('layouts.layout')

@section('titulo')
  DCDV | Produto
@endsection

@section('conteudo')
  <div class="fixed-action-btn horizontal">
      <a class="btn-floating btn-large black">
        <i class="large material-icons">mode_edit</i>
      </a>
      <ul>
        <li><a href="{{ route('produtos.create') }}"class="btn-floating red tooltipped" data-tooltip="Inserir novo produto" data-position="top"><i class="material-icons">insert_chart</i></a></li>
      </ul>
    </div>
    @if (Session::has('mensagem_create'))
        <div class="card-panel teal lighten-4">{{Session::get('mensagem_create')}}</div>
    @endif
<h5 class="center">Edição de produto n. {{ $produto->id }}</h5><br><br>

{!! Form::model($produto,
   ['route' => ['produtos.update', 'produto' => $produto->id],
   'class' => 'form',
   'enctype'=>'multipart/form-data',
   'id'=>'form1',
   'name'=>'form1',
   'method' => 'PUT']) !!}

   <div class="row">
     <div class="input-field col s4">
       <i class="material-icons prefix">add_shopping_cart</i>
       {{ Form::text('nome', null, array('class'=>'validate', 'id'=>'icon_prefix')) }}
       <label for="icon_prefix">Nome do Produto</label>
     </div>
     <div class="input-field col s4">
       <i class="material-icons prefix">attach_money</i>
       {{ Form::text('valorUn', null, array('class'=>'validate',  'id'=>'icon_prefix')) }}
       <label for="icon_prefix">Valor</label>
     </div>
     <div class="input-field col s4">
       <i class="material-icons prefix">bubble_chart</i>
       {{ Form::text('tipo', null, array('class'=>'validate',  'id'=>'icon_prefix')) }}
       <label for="icon_prefix">Tipo</label>
     </div>
   </div>

   <div class="row">
     <div class="col s5 offset-s5">
       <button class="btn waves-effect waves-light" type="submit" name="button">Enviar
       <i class="material-icons left">call_made</i>
       </button>
     </div>

 {!! Form::close() !!}

@endsection
