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
        <li><a href="{{ route('produtos.create') }}"class="btn-floating red tooltipped" data-tooltip="Inserir novo Produto" data-position="top"><i class="material-icons">insert_chart</i></a></li>
      </ul>
    </div>
    <div class="row">
      <div class="center col s12">
        <h5>Dados do produto n. {{ $produto->id }}</h5>
      </div>
    </div>
    <div class="row">
      <div class="col s6 push-s5">
        <a href="{{ route('produtos.edit', ['produto' => $produto->id]) }}" class=" tooltipped btn-floating btn-small waves-effect waves-light blue" data-tooltip="Editar cadastro deste produto"><i class="material-icons">edit</i></a>
      </div>
      <div class="col s6">
        <form action="{{ route('produtos.destroy', ['produto' => $produto->id]) }}" onsubmit="return confirm('\nTem certeza que deseja fazer isso? Não apague seus produtos, eles podem voltar ao cardápio!'); return false;" method="post">
          {{ csrf_field() }}
          {{ method_field('DELETE') }}
        <button type="submit" class="tooltipped btn-floating btn-small waves-effect waves-light red" data-tooltip="Excluir produto" type="submit" name="action">
            <i class="material-icons right">delete_forever</i>
        </button>
        </form>
      </div>
    </div>

<br><br>

  <div class="row">
    <div class="col s3">
      <h6>Código: {{ $produto->id }}</h6>
    </div>
    <div class="col s5">
      <h6>Produto: {{ $produto->nome }}</h6>
    </div>
    <div class="col s2">
      <h6>Valor: {{ $produto->valorUn }}</h6>
    </div>
    <div class="col s2">
      <h6>Tipo: {{ $produto->tipo }}</h6>
    </div>
  </div>

@endsection
