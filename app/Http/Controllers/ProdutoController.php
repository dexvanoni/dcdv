<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use App\Cliente;
use App\Pedido;
use App\Produto;

class ProdutoController extends Controller
{

  private $cliente;
  private $pedido;
  private $produto;
  public function __construct(Cliente $cliente, Pedido $pedido, Produto $produto)
  {
    $this->cliente = $cliente;
    $this->pedido = $pedido;
    $this->produto = $produto;
  }

    public function index(){
      $produto = Produto::orderBy('id')->paginate(50000);
       return view('produtos.index',compact('produto'));
    }

    public function create(){
      $produto = $this->produto->all();
      return view('produtos.create', compact('produto'));
    }

    public function show($id){
      $produto = Produto::find($id);
       return view('produtos.show', compact('produto'));
    }

    public function store(Request $request){
       $produto = Produto::create($request->all());
       Session::flash('mensagem_create', 'Novo produto adicionado.');
       return redirect()->action('ProdutoController@index');
    }

    public function edit($id){
      $produto = Produto::find($id);
      return view('produtos.edit', compact('produto'));
    }

    public function update(Request $request, $id){
      $produto = Produto::find($id);

      $data = $request->all();
      $produto->fill($data)->save();
      Session::flash('mensagem_edit', "Produto editado com Sucesso!");
      return redirect()->action('ProdutoController@index');
    }

    public function destroy($id){
      $produto = Produto::find($id);
      $produto->delete();
      Session::flash('mensagem_del', "Cliente deletado com Sucesso!");

      return redirect()->action('ProdutoController@index');
    }
}
