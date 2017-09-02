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
    <input id="icon_prefix" type="text" class="validate" name="nome">
    <label for="icon_prefix">Nome</label>
  </div>
  <div class="input-field col s4">
    <i class="material-icons prefix">phone</i>
    <input id="icon_telephone" type="tel" class="validate" name="tel">
    <label for="icon_telephone">Contato</label>
  </div>
  <div class="input-field col s4">
    <i class="material-icons prefix">business_center</i>
    <input id="icon_prefix" type="text" class="validate" name="localTrabalho">
    <label for="icon_prefix">Empresa</label>
  </div>
</div>
<div class="row">
  <div class="input-field col s4">
    <i class="material-icons prefix">cloud_circle</i>
    <input id="icon_prefix" type="text" class="validate" name="rua">
    <label for="icon_prefix">Rua</label>
  </div>
  <div class="input-field col s4">
    <i class="material-icons prefix">person_pin_circle</i>
    <input id="icon_prefix" type="text" class="validate" name="numero">
    <label for="icon_prefix">Numero</label>
  </div>
  <div class="input-field col s4">
    <i class="material-icons prefix">swap_vertical_circle</i>
    <input id="icon_prefix" type="text" class="validate" name="bairro">
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
