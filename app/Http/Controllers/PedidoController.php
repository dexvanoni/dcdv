<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use App\Cliente;
use App\Pedido;
use App\Produto;

class PedidoController extends Controller
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

      $pedido =  DB::table('pedidos')
            ->join('clientes', 'pedidos.cliente_id', '=', 'clientes.id')
            ->select('clientes.*','pedidos.*')
            ->orderBy('pedidos.id', 'asc')
            ->get();

       return view('pedidos.index',compact('pedido'));
    }

    public function create(){
      $pedido = $this->pedido->all();
      return view('pedidos.create', compact('pedido'));
    }

    public function show($id){

      $pedido =  DB::table('pedidos')
            ->join('clientes', 'pedidos.cliente_id', '=', 'clientes.id')
            ->select('clientes.nome','pedidos.*')
            ->where('pedidos.id', '=', $id)
            ->first();

            //dd($pedido);
            //exit;
      //$pedido = Pedido::find($id);
       return view('pedidos.show', compact('pedido'));
    }

    public function store(Request $request){
       $pedido = Pedido::create($request->all());
       Session::flash('mensagem_create', 'Novo pedido adicionado.');
       return redirect()->action('PedidoController@index');
    }

    public function edit($id){
      $pedido = Pedido::find($id);
      return view('pedidos.edit', compact('pedido'));
    }

    public function update(Request $request, $id){
      $pedido = Pedido::find($id);

      if (($request->pagamento == "s") AND ($request->agendamento == "alterar")) {
        $nulo = null;
        $request->agendamento = $nulo;
        $pedido->agendamento = $request->agendamento;
        $pedido->pagamento = $request->pagamento;
        $pedido->save();
      }

      $data = $request->all();
      $pedido->fill($data)->save();

      Session::flash('mensagem_edit', "Pedido editado com Sucesso!");
      return redirect()->action('PedidoController@index');
    }

    public function destroy($id){
      $pedido = Pedido::find($id);
      $pedido->delete();
      Session::flash('mensagem_del', "Pedido deletado com Sucesso!");

      return redirect()->action('PedidoController@index');
    }
}
