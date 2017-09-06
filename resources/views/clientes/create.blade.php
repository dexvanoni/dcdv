@extends('layouts.layout')

@section('titulo')
  DCDV | Clientes
@endsection

@section('conteudo')
  <br><br>
  <div class="row">
    <div class="center">
      <h5>Novo Cliente</h5>
    </div>
  </div>
  {!! Form::open(array('route' => 'clientes.store', 'method' => 'POST', 'name'=>'form1', 'id'=>'form1')) !!}
  {!! csrf_field() !!}
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
</div>
    {!! Form::close() !!}


@endsection
