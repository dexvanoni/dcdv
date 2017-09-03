@extends('layouts.layout')

@section('titulo')
  DCDV | Produtos
@endsection

@section('conteudo')
  <br><br>
  <div class="row">
    <div class="center">
      <h5>Novo Produto</h5>
    </div>
  </div>
  <br>
  {!! Form::open(array('route' => 'produtos.store', 'method' => 'POST', 'name'=>'form1', 'id'=>'form1')) !!}
  {!! csrf_field() !!}
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
