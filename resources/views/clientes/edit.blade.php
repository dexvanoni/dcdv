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
<h5 class="center">Edição de Cliente n. {{ $cliente->id }}</h5><br><br>

{!! Form::model($cliente,
   ['route' => ['clientes.update', 'cliente' => $cliente->id],
   'class' => 'form',
   'enctype'=>'multipart/form-data',
   'id'=>'form1',
   'name'=>'form1',
   'method' => 'PUT']) !!}

   <div class="row">
     <div class="input-field col s4">
       <i class="material-icons prefix">account_circle</i>
       {{ Form::text('nome', null, array('class'=>'validate', 'id'=>'icon_prefix')) }}
       <label for="icon_prefix">Nome</label>
     </div>
     <div class="input-field col s4">
       <i class="material-icons prefix">phone</i>
       {{ Form::tel('tel', null, array('class'=>'validate',  'id'=>'icon_telephone')) }}
       <label for="icon_telephone">Contato</label>
     </div>
     <div class="input-field col s4">
       <i class="material-icons prefix">business_center</i>
       {{ Form::text('localTrabalho', null, array('class'=>'validate',  'id'=>'icon_prefix')) }}
       <label for="icon_prefix">Empresa</label>
     </div>
   </div>
   <div class="row">
     <div class="input-field col s4">
       <i class="material-icons prefix">cloud_circle</i>
       {{ Form::text('rua', null, array('class'=>'validate',  'id'=>'icon_prefix')) }}
       <label for="icon_prefix">Rua</label>
     </div>
     <div class="input-field col s4">
       <i class="material-icons prefix">person_pin_circle</i>
       {{ Form::text('numero', null, array('class'=>'validate',  'id'=>'icon_prefix')) }}
       <label for="icon_prefix">Numero</label>
     </div>
     <div class="input-field col s4">
       <i class="material-icons prefix">swap_vertical_circle</i>
       {{ Form::text('bairro', null, array('class'=>'validate',  'id'=>'icon_prefix')) }}
       <label for="icon_prefix">Bairro</label>
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
