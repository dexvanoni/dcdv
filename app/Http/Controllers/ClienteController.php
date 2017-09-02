<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
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

        $debitos = DB::table('pedidos')
                ->select('precoTot')
                ->where([
                  ['cliente_id', '=', $cliente->id],
                  ['pagamento', '=', 'n'],
                ])->get();
        $total = $debitos->sum('precoTot');
       //echo $pedido->precoTot;
       //exit;
       return view('clientes.show', compact('cliente', 'pedido', 'total'));
    }

    public function store(Request $request){
       $cliente = Cliente::create($request->all());
       Session::flash('mensagem_create', 'Novo cliente adicionado.');
       return redirect()->action('ClienteController@index');
    }

    public function edit(){

    }

    public function update(){

    }

    public function destroy(){

    }
}
