@extends('layouts.layout')

@section('titulo')
  DCDV | Pedido
@endsection

@section('conteudo')
  <br><br>
  <div class="row">
    <div class="center">
      <h5>Novo Pedido</h5>
    </div>
  </div>

  {!! Form::open(array('route' => 'pedidos.procura', 'method' => 'POST', 'name'=>'form1', 'id'=>'form1')) !!}
  {!! csrf_field() !!}
  <div class="row">
    <div class="input-field col s10 center">
    <i class="material-icons prefix">account_circle</i>
    <input id="icon_prefix" type="text" class="validate" name="nome">
    <label for="icon_prefix">Digite o nome do cliente</label>
    </div>
      <div class="col s2">
        <a class="btn-floating btn-small waves-effect waves-light red"><i class="material-icons left">search</i></a>
      </div>

  </div>
  {!! Form::close() !!}


  {!! Form::open(array('route' => 'pedidos.store', 'method' => 'POST', 'name'=>'form1', 'id'=>'form1')) !!}
  {!! csrf_field() !!}






    {!! Form::close() !!}


@endsection
