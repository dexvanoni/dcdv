<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cliente;
use App\Pedido;
use App\Produto;

class ClienteController extends Controller
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
      $cliente = Cliente::orderBy('id')->paginate(50000);
       return view('clientes.index',compact('cliente'));
    }

    public function create(){
      $cliente = $this->cliente->all();
      return view('clientes.create', compact('cliente'));
    }

    public function show($id){
        $cliente = Cliente::find($id);

        $pedido = Cliente::find($id)->pedidos;
        //$pedido = Cliente::has('pedido')->get();
       //$envolvidos = Comissaria::find($id)->militares;
       //$total = $envolvidos->count();
       //dd($pedido);
       //exit;
       return view('clientes.show', compact('cliente', 'pedido'));
    }

    public function edit(){

    }

    public function update(){

    }

    public function destroy(){

    }
}
